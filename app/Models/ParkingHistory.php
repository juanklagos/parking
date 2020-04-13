<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 21:16:34 -0500.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ParkingHistory
 * 
 * @property int $id
 * @property int $user_id
 * @property int $place_vehicle_id
 * @property int $place_id
 * @property int $parking_seconds
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Place $place
 * @property \App\Models\PlacesVehicle $places_vehicle
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class ParkingHistory extends Eloquent
{
	protected $table = 'parking_history';

	protected $casts = [
		'user_id' => 'int',
		'place_vehicle_id' => 'int',
		'place_id' => 'int',
		'parking_seconds' => 'int'
	];

	protected $fillable = [
		'user_id',
		'place_vehicle_id',
		'place_id',
		'parking_seconds'
	];

	public function place()
	{
		return $this->belongsTo(\App\Models\Place::class);
	}

	public function places_vehicle()
	{
		return $this->belongsTo(\App\Models\PlacesVehicle::class, 'place_vehicle_id');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
