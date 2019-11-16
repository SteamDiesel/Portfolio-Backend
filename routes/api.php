<?php

use App\Http\Controllers\Auth\AuthController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->post('/test', function(Request $request){
    return response()->json(["message"=>"it works!"]);
});

Route::post('/user', [
    'uses'=> 'UserController@signup'
]);

Route::post('/register', [
    'uses' => 'Auth\AuthController@registerNewUser'
]);

Route::post('/login', [
    'uses' => 'Auth\AuthController@loginUser'
]);


Route::post('/job', [
    'uses' => 'JobController@postJob'
]);

Route::get('/jobs', [
    'uses' => 'JobController@getJobs'
]);

Route::put('/job/{job}', [
    'uses' => 'JobController@putJob'
]);

Route::delete('/job/{job}', [
    'uses' => 'JobController@deleteJob'
]);
