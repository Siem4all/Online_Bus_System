<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Bus;
use App\Station;
use App\Schedule;
use App\Seat;
use App\Conductor;
use App\Driver;
use Illuminate\Http\Request;

class BusController extends Controller
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
         $buses = Bus::all();
        return view('admin.bus.index', compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $stations= Station::all();
         $drivers= Driver::all();
         $conductors= Conductor::all();
        return view('admin.bus.create',compact('stations','drivers','conductors'));
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
            if(Driver::where('id', 'LIKE', $request->did)->first()){
                if(Conductor::where('id', 'LIKE', $request->cid)->first()){
                    if(Station::where('id', 'LIKE', $request->stationid)->first()){
             $request->validate([
            'busname' => 'required',
             'busmodel' => 'required',
             'busnumber' => 'required',
             'busstatus' => 'required',
             'totalseat' => 'required',
             'stationid' => 'required',
             'did' => 'required',
             'cid'=>'required'
        ]);
  
         $bus = new Bus([
            'Bus_name' => $request->get('busname'),
             'Bus_model' => $request->get('busmodel'),
            'Bus_number' => $request->get('busnumber'),
             'Bus_status' => $request->get('busstatus'),
            'Total_seat' => $request->get('totalseat'),
             'station_id' => $request->get('stationid'),
             'driver_id' => $request->get('did'),
             'conductor_id' => $request->get('cid'),
        ]);
        $bus->save();
        return redirect('/bus')->with('success', trans('sentence.added'));
          }
                    else{
                        
                session()->flash('warning','Sorry, please, check the id of station!!');
                 return redirect('/bus');
          
                        
                    }
                }
                else{
             session()->flash('warning','Sorry, please, check the id of conductor!!');
        return redirect('/bus');
            }
                }
            else{
             session()->flash('warning','Sorry, please, check the id of driver!!');
        return redirect('/bus');
          }  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function show(Bus $bus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $bus = Bus::find($id);
        $stations= Station::all();
         $drivers= Driver::all();
         $conductors= Conductor::all();
        return view('admin.bus.edit',compact('bus','stations','drivers','conductors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $name = $request->get('search');
    $buses = Bus::where('id','LIKE','%'.$name.'%')->orWhere('Bus_number','LIKE','%'.$name.'%')->get();
        return view('admin.bus.index',compact('buses'));
    }
    public function update(Request $request, $id)
    {
        //
            if(Driver::where('id', 'LIKE', $request->did)->first()){
                if(Conductor::where('id', 'LIKE', $request->cid)->first()){
                    if(Station::where('id', 'LIKE', $request->stationid)->first()){
            $request->validate([
             'busname' => 'required',
             'busmodel' => 'required',
             'busnumber' => 'required',
             'busstatus' => 'required',
             'totalseat' => 'required',
             'stationid' => 'required',
             'did' => 'required',
            'cid' => 'required'
        ]);

        $bus = Bus::find($id);
        $bus->Bus_name =  $request->get('busname');
        $bus->Bus_model = $request->get('busmodel');
        $bus->Bus_number = $request->get('busnumber');
        $bus->Bus_status = $request->get('busstatus');
        $bus->Total_seat = $request->get('totalseat');
        $bus->station_id = $request->get('stationid');
        $bus->driver_id = $request->get('did');
        $bus->conductor_id = $request->get('cid');
        $bus->save();
                        return redirect('/bus')->with('success', trans('sentence.updated')); 
                        
                    }
                    else{
                        
                session()->flash('warning','Sorry, please, check the id of station!!');
                 return redirect('/bus');
          
                        
                    }
                }
                else{
             session()->flash('warning','Sorry, please, check the id of conductor!!');
        return redirect('/bus');
            }
                }
            else{
             session()->flash('warning','Sorry, please, check the id of driver!!');
        return redirect('/bus');
          }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $bus = Bus::find($id);
        if($bus->seats()->count() > 0 or $bus->schedule()->count() > 0){ 
            return redirect('/bus')->with('warning', 'First delete seat or schedule ');
        }
            $bus->delete();
        return redirect('/bus')->with('success', trans('sentence.deleted'));
    }
}
