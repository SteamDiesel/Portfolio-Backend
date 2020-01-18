<?php

namespace App\Http\Controllers;

use App\AsanaChannel;
use Illuminate\Http\Request;

class AsanaChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|string|unique:asana_channels|min:4|max:64',
            'title' => 'required|string',
            'auth_token' => 'required|string',
            'description' => 'required|string',
            'fields' => 'string|nullable',
            'workspace_gid' => 'required|string',
            'project_gid' => 'string|nullable',
            'section_gid' => 'string|nullable',
            'assignee_gid' => 'string|nullable'
        ]);

        
        $channel = new AsanaChannel();
        $channel->key = $request->key;
        $channel->title = $request->title;
        $channel->auth_token = $request->auth_token;
        $channel->description = $request->description;
        $channel->fields = $request->fields;
        $channel->workspace_gid = $request->workspace_gid;
        $channel->project_gid = $request->project_gid;
        $channel->section_gid = $request->section_gid;
        $channel->assignee_gid = $request->assignee_gid;
        $channel->save();

        return response()->json([
            "channel" => $channel
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AsanaChannel  $asanaChannel
     * @return \Illuminate\Http\Response
     */
    public function show(AsanaChannel $asanaChannel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AsanaChannel  $asanaChannel
     * @return \Illuminate\Http\Response
     */
    public function edit(AsanaChannel $asanaChannel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AsanaChannel  $asanaChannel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsanaChannel $asanaChannel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AsanaChannel  $asanaChannel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AsanaChannel $asanaChannel)
    {
        //
    }
}
