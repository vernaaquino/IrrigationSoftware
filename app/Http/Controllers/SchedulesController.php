<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$schedules = Schedule::all();
        //Schedule::orderBy('name','desc')->get();
        //Schedule::orderBy('name','desc')->take(1)->get();
        //Schedule::where('name','Schedule 1')->get();
        $schedules = Schedule::paginate(10); //get
        return view('schedules.index')->with('schedules',$schedules);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedules.create');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['name'=>'required','anchor_day'=>'required','num_of_days'=>'required']);
        $schedule = new Schedule;
        $schedule->name = $request->input('name');
        $schedule->anchor_day = $request->input('anchor_day');
        $schedule->num_of_days = $request->input('num_of_days');
        $schedule->save(); //saves new schedule to DB
        
        return redirect('schedules');
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
        $schedule = Schedule::find($id);
        return view('schedules.edit')->with('schedule',$schedule);
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
        $this->validate($request,['name'=>'required','anchor_day'=>'required','num_of_days'=>'required']);
        
        $schedule = Schedule::find($id);
        $schedule->name = $request->input('name');
        $schedule->anchor_day = $request->input('anchor_day');
        $schedule->num_of_days = $request->input('num_of_days');
        $schedule->save(); //saves updated schedule to DB
        
        return redirect('schedules');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = Schedule::find($id);
        $schedule->delete();
        return redirect('schedules');
    }
}
