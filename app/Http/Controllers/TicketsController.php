<?php

namespace App\Http\Controllers;

use App\TicketsModel;
use App\Http\Resources\Tickets as TicketsResource;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = TicketsModel::paginate(10);

        //passing data to resource
        return TicketsResource::collection($tickets);
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
        $ticket = $request->isMethod('put') ? TicketsModel::findOrFail($request->ticket_number) : new TicketsModel;

        $ticket->ticket_number = $request->input('ticket_number');
        $ticket->show_id = $request->input('show_id');
        $ticket->ticket_type = $request->input('ticket_type');
        $ticket->seat = $request->input('seat');


        if ($ticket->save()) {
            return new TicketsResource($ticket);
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
        // Get a single Ticket
        $ticket = TicketsModel::findOrFail($id);

        //return single studio as resource
        return new TicketsResource($ticket);
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
        $ticket = TicketsModel::findOrFail($id);

        if ($ticket->delete()) {
            return new TicketsResource($ticket);
        }
    }
}
