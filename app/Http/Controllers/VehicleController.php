<?php

namespace App\Http\Controllers;

use App\Models\BrandsCar;
use App\Models\PlacesVehicle;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{

    public function vehicleBrands()
    {
        $brands = BrandsCar::all();
        return response()->json([
            'brands' => $brands,
        ]);
    }

    public function vehicleLicensePlate(Request $request)
    {
        $vehicle = Vehicle::with('brands_car')->where('license_plate', '=', $request->license_plate)->first();
        if ($vehicle == null) {
            return response()->json([
                'status' => 'error',
                'message' => 'Vehiculo nuevo, elige una marca'
            ], 400);
        }

        return response()->json([
            'vehicle' => $vehicle,
            'status' => 'success',
            'message' => 'Vehiculo ya registrado'
        ]);

    }

    public function vehicleOut($license_plate){
        $vehicle = Vehicle::with('brands_car')->where('license_plate', '=', $license_plate)->first();
        if ($vehicle == null) {
            return response()->json([
                'status' => 'error',
                'message' => 'Vehiculo no encontrado'
            ], 400);
        }

        $vehiclePlace = PlacesVehicle::with('vehicle.brands_car', 'parking_histories', 'place')
            ->where('out_time','=',null)
            ->where('vehicle_id', '=', $vehicle->id)->first();
        if ($vehiclePlace == null) {
            return response()->json([
                'status' => 'error',
                'message' => 'Vehiculo registrado, pero no ha ingresado al parqueadero.'
            ], 400);
        }

        return response()->json([
            'vehicle' => $vehiclePlace,
            'status' => 'success',
            'message' => 'Vehiculo encontrado'
        ]);

    }

}
