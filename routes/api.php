<?php

use App\Http\Controllers\Auth\AuthController;
use App\PublicSiteContent;
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

// Route::post('/user', [
//     'uses'=> 'UserController@signup'
// ]);

Route::post('/register', [
    'uses' => 'Auth\AuthController@registerNewUser'
]);
Route::post('/login', [
    'uses' => 'Auth\AuthController@loginUser'
]);


Route::post('/post-new-site', [
    'uses' => 'PublicSiteContentController@store'
])->middleware('auth:api', 'siteowner');

Route::get('/sitecontent/{id}', [
    'uses'=>'PublicSiteContentController@index'
]);
Route::put('/sitecontent/{id}', [
    'uses'=>'PublicSiteContentController@update'
])->middleware('auth:api', 'siteowner');


Route::get('/siteprojects/{id}', [
    'uses'=>'PublicProjectsController@index'
]);

Route::post('/siteprojects/{id}', [
    'uses'=>'PublicProjectsController@store'
])->middleware('auth:api', 'siteowner');


Route::put('/project/{id}', [
    'uses'=>'PublicProjectsController@update'
])->middleware('auth:api', 'siteowner');




// Route::post('/job', [
//     'uses' => 'JobController@postJob'
// ])->middleware('auth:api', 'verified');

// Route::get('/jobs', [
//     'uses' => 'JobController@getJobs'
// ])->middleware('auth:api', 'verified');

// Route::put('/job/{job}', [
//     'uses' => 'JobController@putJob'
// ])->middleware('auth:api', 'verified');

// Route::delete('/job/{job}', [
//     'uses' => 'JobController@deleteJob'
// ])->middleware('auth:api', 'verified');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/test', function(Request $request){
    return response()->json(["message"=>"Backend API is working!"]);
});
