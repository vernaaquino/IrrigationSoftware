<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zone;
use App\Models\Schedule;
use App\Models\Valve;

class ZonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zones = Zone::paginate(10); //get
        return view('zones.index')->with('zones',$zones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schedules = Schedule::pluck('name','id');
        $valves = Valve::pluck('id','id');
        return view('zones.create')->with('schedules',$schedules)->with('valves',$valves);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['name'=>'required','schedule_id'=>'required','valves'=>'required']);
        $zone = new Zone;
        $zone->name = $request->input('name');
        $zone->schedule_id = $request->input('schedule_id');
        
        $valves = $request->input('valves'); //valves is an array
        $zone->save();
        $zone->valves()->sync($valves);
        
        return redirect('zones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
        $zone = Zone::find($id); //find the zone you want to edit
        $schedules = Schedule::pluck('name','id');
        $valves = Valve::pluck('id','id');
        
        return view('zones/edit')->with('zone',$zone)->with('schedules',$schedules)->with('valves',$valves); 
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
        $this->validate($request,['name'=>'required','schedule_id'=>'required','valves'=>'required']);
        $zone = Zone::find($id);
        $zone->name = $request->input('name');
        $zone->schedule_id = $request->input('schedule_id');
        
        $valves= $request->input('valves');
        $zone->save();
        $zone->valves()->sync($valves);

        return redirect('zones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zone = Zone::find($id);
        $zone->delete();
        return redirect('zones');
    }
}
