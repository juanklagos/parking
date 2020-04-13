<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 19:28:41 -0500.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Config
 * 
 * @property int $id
 * @property int $places
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Config extends Eloquent
{
	protected $table = 'config';

	protected $casts = [
		'places' => 'int'
	];

	protected $fillable = [
		'places'
	];
}
