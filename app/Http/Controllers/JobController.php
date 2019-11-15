<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getJobs()
    {
        //

        $jobs = Job::all();
        return response()->json([
            'jobs' => $jobs
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postJob(Request $request)
    {
        //
        // dd($request->all());
        $jobie = new Job();

        $jobie->user_id = 1;
        $jobie->employer = $request->employer;
        $jobie->role = $request->role;
        $jobie->description = $request->description;
        $jobie->start_date = $request->start_date;
        $jobie->end_date = $request->end_date;
        // dd($jobie);
        $jobie->save();

        return response()->json([
            'job' => $jobie,
            'message'=> 'New job was created'
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function putJob(Request $request, $job)
    {
        //

        $jobie = Job::find($job);

        if (!$jobie){
            return response()->json([
                'message' => 'Job was not found'
            ], 201);
        }
        $jobie->employer = $request->employer;
        $jobie->role = $request->role;
        $jobie->description = $request->description;
        $jobie->start_date = $request->start_date;
        $jobie->end_date = $request->end_date;
        $jobie->save();
        return response()->json([
            'job' => $jobie,
            'message' => 'Job was updated'
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function deleteJob($job)
    {
        //
        $jobie = Job::find($job);
        $jobie->delete();
        return response()->json([
            'message' => 'Job was Deleted'
        ], 201);
    }
}
