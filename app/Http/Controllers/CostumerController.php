<?php

namespace App\Http\Controllers;

use App\CostumerModel;
use App\Http\Resources\Costumer as CostumerResource;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get Costumer
        $cs = CostumerModel::paginate(10);

        return CostumerResource::collection($cs);
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
        $cm = $request->isMethod('put') ? CostumerModel::findOrFail($request->costumer_id) : new CostumerModel;

        $cm->costumer_id = $request->input('costumer_id');
        $cm->costumer_name = $request->input('costumer_name');
        $cm->costumer_phoneNumber = $request->input('costumer_phoneNumber');
        $cm->costumer_email = $request->input('costumer_email');


        if ($cm->save()) {
            return new CostumerResource($cm);
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
        // Get a single costumer
        $cm = CostumerModel::findOrFail($id);

        //return single costumer as resource
        return new CostumerResource($cm);
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
        // Delete a single Costumer
        $cm = CostumerModel::findOrFail($id);

        if ($cm->delete()) {
            return new CostumerResource($cm);
        }
    }
}
