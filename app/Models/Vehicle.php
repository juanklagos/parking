<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 21:16:34 -0500.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Vehicle
 * 
 * @property int $id
 * @property int $user_id
 * @property string $license_plate
 * @property int $brand_car_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\BrandsCar $brands_car
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $places
 *
 * @package App\Models
 */
class Vehicle extends Eloquent
{
	protected $casts = [
		'user_id' => 'int',
		'brand_car_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'license_plate',
		'brand_car_id'
	];

	public function brands_car()
	{
		return $this->belongsTo(\App\Models\BrandsCar::class, 'brand_car_id');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}

	public function places()
	{
		return $this->belongsToMany(\App\Models\Place::class, 'places_vehicles')
					->withPivot('id', 'user_id', 'ingress_time', 'out_time', 'move_time')
					->withTimestamps();
	}
}
