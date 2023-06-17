<?php

namespace App\Http\Controllers\Banker;
use App\Http\Controllers\Controller;

use App\Schedule;
use App\Route;
use App\Bus;
use Illuminate\Http\Request;

class BusScheduleController extends Controller
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
       $routes = Route::all();

        return view('schedule', compact('routes'));
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
    public function search(Request $request)
    {
         //$g = $request->get('departuredate');
    if(Schedule::where('Departure_date', 'LIKE', $request->date)->first()->where('Route_name', 'LIKE', $request->routename)->first()) {
               
        $routename = $request->get('routename');
        $date = $request->get('date');
        $schedules = Schedule::where('Departure_date','LIKE','%'.$date.'%')->where('Route_name','LIKE','%'.$routename.'%')->get();
        return view('busschedule',compact('schedules'));
        
            } 
        else{
            session()->flash('warning', trans('sentence.not existed'));
        return redirect('/busschedule');
        }
         
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
