<?php

namespace App\Http\Controllers;

use App\AsanaChannel;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AsanaLeadController extends Controller
{
    //
    public function post_lead($key, Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'notes' => 'required|string',
        ]);

        $channel = AsanaChannel::where("key", $key)->first();
        $workspace = $channel->workspace_gid;
        $assignee = $channel->assignee_gid;
        $projects = [
            $channel->project_gid
        ];

        $headers = [
            'Accept'=> 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '. $channel->auth_token,
            'timeout'  => 5.0,
        ];

        $client = new Client([
            'base_uri' => 'https://app.asana.com/api/1.0/',
            "headers" => $headers
        ]);

        $new_task = [
            "assignee" => $assignee,
            "name" => $request->name,
            "notes" => $request->notes,
            "projects" => $projects,
            "workspace" => $workspace,
            "due_at" => Carbon::now()->addHour()->toIso8601String()
        ];

        $response = $client->request('POST','tasks', ['json'=> ["data" => $new_task]]);

        $return = json_decode($response->getBody()->getContents());

        return response()->json([
            "data"=> $return->data
        ]);
    }
}
