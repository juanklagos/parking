<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'Auth\AuthController@login');

    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::post('logout', 'Auth\AuthController@logout');
        Route::get('user', 'Auth\AuthController@user');

        Route::get('places','PlaceController@places');
        Route::get('place-info/{idPlace}','PlaceController@placeInfo');

        Route::get('vehicle-license-plate-outs/{license}','VehicleController@vehicleOut');
        Route::get('vehicle-brands','VehicleController@vehicleBrands');
        Route::get('vehicle-license-plate','VehicleController@vehicleLicensePlate');

        Route::post('vehicle-ingress','PlacesVehicleController@ingress');
        Route::post('vehicle-out','PlacesVehicleController@out');
        Route::get('places-vehicles-report','PlacesVehicleController@placeVehicleReport');

        Route::get('vehicles-report','ParkingHistoryController@report');

        Route::get('bill-create','BillController@bill');
        Route::get('bill-show','BillController@billShow');



    });
});
