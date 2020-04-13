<?php

namespace App\Http\Controllers;

use App\Models\ParkingHistory;
use Illuminate\Http\Request;
use DB;

class ParkingHistoryController extends Controller
{
    public function report(Request $request)
    {
        $from = $request->start;
        $to = $request->end;

        $top = ParkingHistory::with('place')
            ->selectRaw('parking_history.place_id,places.number AS cell,COUNT(parking_history.place_id) AS ocupped_times,SUM(parking_history.parking_seconds) AS total_seconds')
            ->leftJoin('places','places.id','=','parking_history.place_id')
            // ->whereRaw('DATE(parking_history.created_at) >= "'.$request->start.'" AND DATE(parking_history.created_at) <= "'.$request->end.'"')
            //->whereBetween('parking_history.created_at', [$from, $to])
            ->groupBy('parking_history.place_id')
            ->orderBy('ocupped_times', 'DESC')
            ->orderBy('total_seconds', 'DESC')
            ->take(5)
            ->get();

        return response()->json([
            'top' => $top
        ]);
    }
}
