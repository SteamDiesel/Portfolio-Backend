<?php

use App\AsanaChannel;
use App\Http\Controllers\Auth\AuthController;
use App\PublicSiteContent;
use GuzzleHttp\Client;
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

Route::post('/asana_channel/new', [
    'uses' => 'AsanaChannelController@store'
]);


Route::post('/asana/newlead/{key}', [
    'uses' => 'AsanaLeadController@post_lead'
]);

// ApplicationSource Routes --------------------------------------
// Route::get('/team/{team}/application_sources', 'ApplicationSourceController@index');
Route::post('/lite-bdfi-app/visitor-log', 'BDFIVisitorController@store');
// ```````````````````````````````````````````````````````




//AUTH ROUTES
//-----------------------------------------------------------------------
Route::post('/register', [
    'uses' => 'Auth\AuthController@registerNewUser'
]);
Route::post('/login', [
    'uses' => 'Auth\AuthController@loginUser'
]);
//========================================================================

//STEAMDIESEL.DEV CONTENT ROUTES
//------------------------------------------------------------------------
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
//=========================================================================

