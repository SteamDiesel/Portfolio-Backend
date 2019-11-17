<?php

namespace App\Http\Controllers;

use App\PublicSiteContent;
use Illuminate\Http\Request;

class PublicSiteContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        if($content = PublicSiteContent::find($id)){
            return response()->json([
                "content" => $content
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
    public function store(Request $request)
    {
        //

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PublicSiteContent  $publicSiteContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if($content = PublicSiteContent::find($id)){

            $content->lander_title = $request->lander_title;
            $content->lander_subtitle = $request->lander_subtitle;
            $content->lander_location = $request->lander_location;
            $content->location_link = $request->location_link;
            $content->lander_blurb = $request->lander_blurb;
            $content->about_title = $request->about_title;
            $content->about_subtitle = $request->about_subtitle;
            $content->about_description = $request->about_description;
            $content->contact_phone = $request->contact_phone;
            $content->contact_email = $request->contact_email;
            $content->contact_github = $request->contact_github;
            $content->contact_location = $request->contact_location;
            
            $content->save();

            return response()->json([
                "content" => $content
            ], 201);
        }
        return response()->json([
            "message" => "API Failed to update content. Have you got the right ID?"
        ], 401);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PublicSiteContent  $publicSiteContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublicSiteContent $publicSiteContent)
    {
        //
    }
}
