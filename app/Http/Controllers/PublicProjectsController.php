<?php

namespace App\Http\Controllers;

use App\PublicProjects;
use App\PublicSiteContent;
use Illuminate\Http\Request;

class PublicProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        if($projects = PublicSiteContent::find($id)->public_projects()->get()){
            return response()->json([
                "projects" => $projects
            ], 201);
        }
        return response()->json([
            "message" => "API Failed to send content. Have you got the right ID?"
        ], 401);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //

        $project = PublicSiteContent::find($id)->public_projects()->create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'stack' => $request->stack,
            'brief_description' => $request->brief_description,
            'long_description' => $request->long_description,
            'url' => $request->url,
            'github' => $request->github,
            'image_url' => $request->image_url,
            'is_published' => $request->is_published,
            'display_order' => $request->display_order,
        ]);

        return response()->json([
            "project" => $project
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PublicProjects  $publicProjects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PublicProjects $publicProjects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PublicProjects  $publicProjects
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublicProjects $publicProjects)
    {
        //
    }
}
