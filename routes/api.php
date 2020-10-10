<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', 'UserLoginController@login');

Route::post('/register', 'UserRegisterController@register');

//User
Route::get('/korisnici', 'UserController@index');
Route::get('korisnik/{korisnik_id}', 'UserController@show');
Route::delete('korisnik/izbrisi/{korisnik_id}', 'UserController@destroy');
Route::put('korisnik/uredi/{korisnik_id}', 'UserController@update');

//Vehicle
Route::post('/vozila/dodaj', 'VehicleController@store');

//Driver
Route::post('vozaci/dodaj', 'DriverController@store');
Route::get('vozaci/{korisnik_id}', 'DriverController@index');
Route::delete('vozaci/izbrisi/{korisnik_id}', 'DriverController@destroy');