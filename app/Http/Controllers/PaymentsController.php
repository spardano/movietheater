<?php

namespace App\Http\Controllers;

use App\PaymentsModel;
use App\Http\Resources\Payments as PaymentsResource;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get payments
        $pm = PaymentsModel::paginate(10);

        return PaymentsResource::collection($pm);
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
        $pm = $request->isMethod('put') ? PaymentsModel::findOrFail($request->payment_id) : new PaymentsModel;

        $pm->payment_id = $request->input('payment_id');
        $pm->payment_date = $request->input('payment_date');
        $pm->qty = $request->input('qty');
        $pm->ticket_number = $request->input('ticket_number');
        $pm->costumer_id = $request->input('costumer_id');
        $pm->staff_id = $request->input('staff_id');
        $pm->payment_desc = $request->input('payment_desc');

        if ($pm->save()) {
            return new PaymentsResource($pm);
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
        $pm = PaymentsModel::findOrFail($id);

        //return single payment as resource
        return new PaymentsResource($pm);
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
        // Delete a single Payments
        $pm = PaymentsModel::findOrFail($id);

        if ($pm->delete()) {
            return new PaymentsResource($pm);
        }
    }
}
