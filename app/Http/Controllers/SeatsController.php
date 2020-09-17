<?php

namespace App\Http\Controllers;

use App\SeatsModel;
use App\Http\Resources\Seats as SeatsResource;
use Illuminate\Http\Request;

class SeatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get seats
        $seat = SeatsModel::paginate(10);

        //return collection of article as a resource
        return SeatsResource::collection($seat);
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
        $seat = $request->isMethod('put') ? SeatsModel::findOrFail($request->seat_id) : new SeatsModel;

        $seat->seat_id = $request->input('seat_id');
        $seat->seat_number = $request->input('seat_number');
        $seat->seat_row = $request->input('seat_row');
        $seat->studio_id = $request->input('studio_id');


        if ($seat->save()) {
            return new SeatsResource($seat);
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
        // Get a single Seat
        $seat = SeatsModel::findOrFail($id);

        //return single Seat as resource
        return new SeatsResource($seat);
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
        // Delete a single Seat
        $seat = SeatsModel::findOrFail($id);

        if ($seat->delete()) {
            return new SeatsResource($seat);
        }
    }
}
