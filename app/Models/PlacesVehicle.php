<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 21:16:34 -0500.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PlacesVehicle
 *
 * @property int $id
 * @property int $user_id
 * @property int $place_id
 * @property int $vehicle_id
 * @property \Carbon\Carbon $ingress_time
 * @property \Carbon\Carbon $out_time
 * @property \Carbon\Carbon $move_time
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Place $place
 * @property \App\Models\User $user
 * @property \App\Models\Vehicle $vehicle
 * @property \Illuminate\Database\Eloquent\Collection $parking_histories
 *
 * @package App\Models
 */
class PlacesVehicle extends Eloquent
{
	protected $casts = [
		'user_id' => 'int',
		'place_id' => 'int',
		'vehicle_id' => 'int'
	];

	protected $dates = [
		'ingress_time',
		'out_time',
		'move_time'
	];

	protected $fillable = [
		'user_id',
		'place_id',
		'vehicle_id',
		'ingress_time',
		'out_time',
		'move_time'
	];

	public function place()
	{
		return $this->belongsTo(\App\Models\Place::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}

	public function vehicle()
	{
		return $this->belongsTo(\App\Models\Vehicle::class);
	}

	public function parking_histories()
	{
		return $this->hasMany(\App\Models\ParkingHistory::class, 'place_vehicle_id');
	}
	public function parking_histories_order()
	{
		return $this->hasMany(\App\Models\ParkingHistory::class, 'place_vehicle_id')->orderBy('id','ASC');
	}
}
