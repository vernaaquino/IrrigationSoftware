<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Valve;
use App\Models\Zone;

class ValvesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valves = Valve::paginate(10); //get
        return view('valves.index')->with('valves',$valves);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zones = Zone::pluck('name', 'id');
        return view('valves.create')->with('zones',$zones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['flow_rate'=>'required','direction'=>'required','parent_id'=>'required','diameter'=>'required','pressure'=>'required','metadata'=>'required']);
        $valve = new Valve;
        $valve->flow_rate = $request->input('flow_rate');
        $valve->direction = $request->input('direction');
        $valve->parent_id = $request->input('parent_id');
        $valve->diameter = $request->input('diameter');
        $valve->pressure = $request->input('pressure');
        $valve->metadata = $request->input('metadata');
        
        $zones = $request->input('zones');
        $valve->save();
        $valve->zones()->sync($zones); //zones is an array of zones that the valve is a part of
        
        return redirect('valves');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminaite\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $valve = Valve::find($id); //find the valve you want to edit
        return view('valves/edit')->with('valve',$valve); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $this->validate($request,['flow_rate'=>'required','direction'=>'required','parent_id'=>'required','diameter'=>'required','pressure'=>'required','metadata'=>'required']);
        
        $valve = Valve::find($id);
        $valve->flow_rate = $request->input('flow_rate');
        $valve->direction = $request->input('direction');
        $valve->parent_id = $request->input('parent_id');
        $valve->diameter = $request->input('diameter');
        $valve->pressure = $request->input('pressure');
        $valve->metadata = $request->input('metadata');
        $valve->save();
        
        return redirect('valves');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valve = Valve::find($id);
        $valve->delete();
        return redirect('valves');
    }
}
