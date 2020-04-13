<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\PlacesVehicle;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function places()
    {
        $places = Place::all();
        return response()->json([
            'places' => $places,
            'parking_price' => env('PRICE_PARKING')
        ]);
    }

    public function placeInfo(Request $request,$place_id){
        $placeVehicle = PlacesVehicle::with('vehicle')
            ->where('place_id','=',$place_id)
            ->where('out_time','=',null)
            ->first();
        return response()->json([
            'vehicle'=> $placeVehicle
        ]);
    }
}
