<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Schedule;
use App\Bus;
use App\Book;
use App\Route;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        //
        $schedules = Schedule::all();
        return view('admin.schedule.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $routes = Route::all();
        $buses=Bus::all();
         return view('admin.schedule.create',compact('routes','buses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(Bus::where('id', 'LIKE', $request->busid)->first()){
            if(Route::where('id', 'LIKE', $request->routeid)->first()){
        $request->validate([
            'date' => 'required',
             'atime' => 'required',
            'dtime' => 'required',
             'routeid' => 'required',
             'busid' => 'required'
        ]);
                
         $schedule = new Schedule([
            'Departure_date' => $request->get('date'),
             'Arrival_time' => $request->get('atime'),
             'Departure_time' => $request->get('dtime'),
            'route_id' => $request->get('routeid'),
             'bus_id' => $request->get('busid'),
        ]);
        $schedule->save();
        return redirect('/sschedule')->with('success', trans('sentence.added'));
                 }
            else{
             session()->flash('warning','Sorry, please, check route id!!');
        return redirect('/sschedule');
          }  
            }
            else{
             session()->flash('warning','Sorry, please, check bus id!!');
        return redirect('/sschedule');
          }  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $routes = Route::all();
        $buses=Bus::all();
        $schedule = Schedule::find($id);
        return
            view('admin.schedule.edit',compact('schedule','routes','buses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $name = $request->get('search');
    $schedules = Schedule::where('id','LIKE','%'.$name.'%')->orWhere('bus_id','LIKE','%'.$name.'%')->get();
        return view('admin.schedule.index',compact('schedules'));
    }
    
    public function update(Request $request, $id)
    {
        //
         if(Bus::where('id', 'LIKE', $request->busid)->first()){
            if(Route::where('id', 'LIKE', $request->routeid)->first()){
         $request->validate([
            'date' => 'required|date|after:now',
             'atime' => 'required',
             'dtime' => 'required',
             'routeid' => 'required',
             'busid' => 'required'
        ]);

        $schedule = Schedule::find($id);
        $schedule->Departure_date =  $request->get('date');
        $schedule->Arrival_time = $request->get('atime');
        $schedule->Departure_time = $request->get('dtime');
        $schedule->route_id = $request->get('routeid');
        $schedule->bus_id = $request->get('busid');
        $schedule->save();

        return redirect('/sschedule')->with('success', trans('sentence.updated'));
                 }
            else{
             session()->flash('warning','Sorry, please, check route id!!');
        return redirect('/sschedule');
          }  
    }
            else{
             session()->flash('warning','Sorry, please, check bus id!!');
        return redirect('/sschedule');
          }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $schedule = Schedule::find($id);
        if($schedule->books()->count() > 0){
            return redirect('/sschedule')->with('warning', 'First delete it from booking');
        }
            $schedule->delete();
        return redirect('/sschedule')->with('success', trans('sentence.deleted'));
    }
}
