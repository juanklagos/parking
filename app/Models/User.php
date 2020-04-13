<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 21:16:34 -0500.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $parking_histories
 * @property \Illuminate\Database\Eloquent\Collection $places_vehicles
 * @property \Illuminate\Database\Eloquent\Collection $vehicles
 *
 * @package App\Models
 */
class User extends Eloquent
{
	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function parking_histories()
	{
		return $this->hasMany(\App\Models\ParkingHistory::class);
	}

	public function places_vehicles()
	{
		return $this->hasMany(\App\Models\PlacesVehicle::class);
	}

	public function vehicles()
	{
		return $this->hasMany(\App\Models\Vehicle::class);
	}
}
