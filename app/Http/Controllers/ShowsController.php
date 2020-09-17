<?php

namespace App\Http\Controllers;

use App\ShowsModel;
use App\Http\Resources\Shows as ShowsResource;
use Illuminate\Http\Request;

class ShowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get shows
        $shows = ShowsModel::paginate(10);

        return ShowsResource::collection($shows);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $show = $request->isMethod('put') ? ShowsModel::findOrFail($request->show_id) : new ShowsModel;

        $show->show_id = $request->input('show_id');
        $show->start_time = $request->input('start_time');
        $show->end_time = $request->input('end_time');
        $show->start_date = $request->input('start_date');
        $show->end_date = $request->input('end_date');
        $show->movie_id = $request->input('movie_id');
        $show->studio_id = $request->input('studio_id');


        if ($show->save()) {
            return new ShowsResource($show);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get a single Show
        $show = ShowsModel::findOrFail($id);

        //return single show as resource
        return new ShowsResource($show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get a single Movie
        $show = ShowsModel::findOrFail($id);

        if ($show->delete()) {
            return new ShowsResource($show);
        }
    }
}
