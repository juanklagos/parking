<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 21:16:34 -0500.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BrandsCar
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $vehicles
 *
 * @package App\Models
 */
class BrandsCar extends Eloquent
{
	protected $fillable = [
		'name'
	];

	public function vehicles()
	{
		return $this->hasMany(\App\Models\Vehicle::class, 'brand_car_id');
	}
}
