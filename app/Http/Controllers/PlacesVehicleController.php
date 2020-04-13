<?php

namespace App\Http\Controllers;

use App\Models\ParkingHistory;
use App\Models\Place;
use App\Models\PlacesVehicle;
use App\Models\Vehicle;
use Carbon\Carbon;
use Illuminate\Http\Request;


class PlacesVehicleController extends Controller
{


    public function out(Request $request)
    {

        $vehicle = Vehicle::where('license_plate', '=', $request->license_plate)->first();
        if ($vehicle == null) {
            return response()->json([
                'status' => 'error',
                'message' => 'Vehiculo no encontrado'
            ], 400);
        }
        $placeVehicle = PlacesVehicle::with('vehicle', 'place')
            ->where('vehicle_id', '=', $vehicle->id)
            ->where('out_time', '=', null)
            ->first();
        if ($placeVehicle == null) {
            return response()->json([
                'status' => 'error',
                'message' => 'Vehiculo no ha ingresado'
            ], 400);
        }
        $placeVehicle->out_time = Carbon::now();
        $placeVehicle->save();
        $this->placeStatusAvailable($placeVehicle->place, 1);

        $now = Carbon::now();
        $ingres_time = Carbon::parse($placeVehicle->ingress_time);
        $parking_history = new ParkingHistory();
        $parking_history->user_id = $request->user()->id;
        $parking_history->place_vehicle_id = $placeVehicle->id;
        $parking_history->place_id = $placeVehicle->place->id;
        $parking_history->parking_seconds = $ingres_time->diffInSeconds($now);
        $parking_history->save();

        $vehicleBack = $this->vehicleBack($placeVehicle, $request->user()->id);
        //return $vehicleBack;

        return response()->json([
            'status' => 'success',
            'message' => 'Salida de Vehiculo correctamente'
        ]);
    }

    public function vehicleBack($vehicle, $user_id)
    {
        $numberPlaces = env('PLACES');

        $place = Place::where('number', '=', $vehicle->place->column)->where('available', '=', 1)->first();
        if ($place){
            var_dump($place);
        }

        if ($vehicle->place->column > (int)($numberPlaces / 2) && $place) {
            $move = 1;
            var_dump('ingresa a 1');

        } elseif ($vehicle->place->column > (int)($numberPlaces / 2)) {
            $move = 2;
            var_dump('ingresa a 2');
            $this->vehicleMove($vehicle, $user_id);
        } else {
            $move = 0;
            var_dump('ingresa a 3');
        }
        return $move;
    }

    public function vehicleMove($vehicle, $user_id)
    {
        $place = Place::where('number', '=', $vehicle->place->column)->first();
        $vehicleMove = PlacesVehicle::with('vehicle', 'place')
            ->where('place_id', '=', $place->id)
            ->where('out_time', '=', null)
            ->first();
        $now = Carbon::now();
        $ingres_time = Carbon::parse($vehicleMove->ingress_time);
        $parking_history = new ParkingHistory();
        $parking_history->user_id = $user_id;
        $parking_history->place_vehicle_id = $vehicleMove->id;
        $parking_history->place_id = $vehicleMove->place->id;
        $parking_history->parking_seconds = $ingres_time->diffInSeconds($now);
        $parking_history->save();

        $available = $this->placeAvailable();
        $this->placeStatusAvailable($vehicleMove->place, 1);
        $this->placeStatusAvailable($available, 0);

        $vehicleMove->place_id = $available->id;
        $vehicleMove->move_time = Carbon::now();
        $vehicleMove->save();

    }

    public function ingress(Request $request)
    {
        $available = $this->placeAvailable();
        //  return $available;
        if ($available == null) {
            return response()->json([
                'status' => 'error',
                'message' => 'No hay espacios disponibles'
            ], 400);
        }

        $vehicle = $this->vehicle($request->license_plate, $request->vehicle_brand, $request->user()->id);

        $placeVehicleCheck = $this->placeVehicleCheck($vehicle);
        if ($placeVehicleCheck != null) {
            return response()->json([
                'status' => 'error',
                'message' => 'Vehiculo ya ingreso'
            ], 400);
        }

        $placeVehicle = new PlacesVehicle();
        $placeVehicle->user_id = $request->user()->id;
        $placeVehicle->place_id = $available->id;
        $placeVehicle->vehicle_id = $vehicle->id;
        $placeVehicle->ingress_time = Carbon::now();
        $placeVehicle->save();
        $this->placeStatusAvailable($available, 0);

        return response()->json([
            'status' => 'success',
            'message' => 'Vehiculo ingreso correctamente'
        ]);

    }

    public function placeVehicleCheck($vehicle)
    {
        $placeVehicle = PlacesVehicle::where('vehicle_id', '=', $vehicle->id)
            ->where('out_time', '=', null)
            ->first();

        return $placeVehicle;
    }

    public function placeStatusAvailable($place, $status)
    {
        $place = Place::find($place->id);
        $place->available = $status;
        $place->save();

        return $place;
    }


    public function vehicle($license_plate, $vehicle_brand, $user_id)
    {
        $vehicle = Vehicle::with('brands_car')->where('license_plate', '=', $license_plate)->first();

        if (!$vehicle) {
            $vehicle = new Vehicle();
            $vehicle->user_id = $user_id;
            $vehicle->brand_car_id = $vehicle_brand;
            $vehicle->license_plate = $license_plate;
            $vehicle->save();
        }
        return $vehicle;
    }


    public function placeAvailable()
    {
        $numberPlaces = env('PLACES');
        $places = Place::all();
        if (count($places) == 0) {
            $this->placeCreate($numberPlaces);
        }
        $available = Place::where('available', '=', '1')->get();

        if (count($available) > 0) {
            $placeAvailableBack = $available->where('number', '>', (int)($numberPlaces / 2));
            if (count($placeAvailableBack) > 0) {
                return $available = $placeAvailableBack->random();
            } else {
                return $available = $available->random();
            }
        }
        return null;
    }


    public function placeCreate($numberPlaces)
    {
        $lineOne = 0;
        $lineTwo = 0;

        if ($numberPlaces % 2 == 0) {
            $lineOne = $numberPlaces / 2;
            $lineTwo = $numberPlaces / 2;
        } else {
            $lineOne = (int)($numberPlaces / 2) + 1;
            $lineTwo = (int)($numberPlaces / 2);
        }

        for ($i = 1; $i <= $numberPlaces; $i++) {
            $place = new Place();
            $place->number = $i;
            $place->column = $i > $lineOne ? $i - $lineOne : $i + $lineOne;
            $place->save();
        }
    }

    public function placeVehicleReport()
    {
        $place_vehicle = PlacesVehicle::with('vehicle.brands_car', 'place', 'parking_histories_order.place')
            ->where('out_time', '=', null)
            ->get();
        return response()->json([
            'vehicles' => $place_vehicle
        ]);
    }

}
