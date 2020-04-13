<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 21:16:34 -0500.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Place
 *
 * @property int $id
 * @property int $number
 * @property int $available
 * @property int $column
 * @property int $disabled
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $parking_histories
 * @property \Illuminate\Database\Eloquent\Collection $vehicles
 *
 * @package App\Models
 */
class Place extends Eloquent
{
    protected $casts = [
        'number' => 'int',
        'available' => 'int',
        'column' => 'int',
        'disabled' => 'int'
    ];

    protected $fillable = [
        'number',
        'available',
        'column',
        'disabled'
    ];

    public function parking_histories()
    {
        return $this->hasMany(\App\Models\ParkingHistory::class);
    }

    public function vehicles()
    {
        return $this->belongsToMany(\App\Models\Vehicle::class, 'places_vehicles')
            ->withPivot('id', 'user_id', 'ingress_time', 'out_time', 'move_time')
            ->withTimestamps();
    }



}
