<?php

use App\Http\Controllers\Auth\AuthController;
use App\PublicSiteContent;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
// use Asana\Client;

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

Route::get('/asana', function(){

    $workspaceId = "440339215329199";
    $assignee = "936031551791212";
    $task = "1151729907759745";
    $headers = [
        'Accept'=> 'application/json',
        'Authorization' => 'Bearer '.env('ASANA_PERSONAL_ACCESS_TOKEN')
    ];
    $client = new Client([
        'base_uri' => 'https://app.asana.com/api/1.0/',
        "headers" => $headers
    ]);

    $response = $client->get('/tasks/'.$task);

    return response()->json([
        "response"=> $response
        ]);
});
// Route::post('/asana', function(Request $request){
//     $asana_client = Client::accessToken(env('ASANA_PERSONAL_ACCESS_TOKEN'));
//     $workspaceId = "440339215329199";
//     $projectId = "1147191225348433";
//     $task =  [
//         // "assignee"=>"936031551791212",
//         // "workspace"=>"440339215329199",
//         // "Asana-Disable"=>"new_sections",
//         // "project"=>"1147191225348433",
//         // "section"=>"1147191225348440",
//         "name" => $request->name,
//         "notes"=> $request->notes
//     ];

//     $new_task = $asana_client->tasks->createInWorkspace($workspaceId, array(
//         "name" => $request->name,
//         "notes"=> $request->notes
//     ));

//     return response()->json([
//         "message"=>"Asana POST Route is working!",
//         "created_task" => $new_task
//         ]);
// });





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




