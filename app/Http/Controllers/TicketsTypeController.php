<?php

namespace App\Http\Controllers;

use App\TicketsTypeModel;
use App\Http\Resources\TicketsType as TicketsTypeResource;
use Illuminate\Http\Request;

class TicketsTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get ticket type
        $tp = TicketsTypeModel::paginate(10);

        return TicketsTypeResource::collection($tp);
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
        $tp = $request->isMethod('put') ? TicketsTypeModel::findOrFail($request->ticket_type_id) : new TicketsTypeModel;

        $tp->ticket_type_id = $request->input('ticket_type_id');
        $tp->ticket_type_name = $request->input('ticket_type_name');
        $tp->price = $request->input('price');


        if ($tp->save()) {
            return new TicketsTypeResource($tp);
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

        // Get a single payment
        $tp = TicketsTypeModel::findOrFail($id);

        //return single payment as resource
        return new TicketsTypeResource($tp);
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
        // Delete a single Ticket Type
        $tp = TicketsTypeModel::findOrFail($id);

        if ($tp->delete()) {
            return new TicketsTypeResource($tp);
        }
    }
}
