<?php

namespace App\Http\Controllers;

use App\StudiosModel;
use App\Http\Resources\Studios as StudiosResource;
use Illuminate\Http\Request;

class StudiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get studios
        $studio = StudiosModel::paginate(10);

        return StudiosResource::collection($studio);
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
        $studio = $request->isMethod('put') ? StudiosModel::findOrFail($request->studio_id) : new StudiosModel;

        $studio->studio_id = $request->input('studio_id');
        $studio->studio_name = $request->input('studio_name');
        $studio->studio_type = $request->input('studio_type');
        $studio->seat_row_number = $request->input('seat_row_number');


        if ($studio->save()) {
            return new StudiosResource($studio);
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
        // Get a single Studo
        $studio = StudiosModel::findOrFail($id);

        //return single studio as resource
        return new StudiosResource($studio);
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
        $studio = StudiosModel::findOrFail($id);

        if ($studio->delete()) {
            return new StudiosResource($studio);
        }
    }
}
