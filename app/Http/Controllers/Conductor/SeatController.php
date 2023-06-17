<?php

namespace App\Http\Controllers\Conductor;
use App\Http\Controllers\Controller;

use App\Seat;
use App\Bus;
use App\Message;
use App\Passenger;
use App\Ticket;
use App\Book;

use Illuminate\Http\Request;

class SeatController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('conductor.seat.transport');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
        //
        if(Message::where('message', 'LIKE', $request->tcode)->first()) {
            
            return redirect('/cseatbus')->with('success', trans('sentence.confirmed')); 
         
    } else{
            session()->flash('warning', 'Please pay the fare first');
        return redirect('/cseat');
        }
        }
    
    public function create()
    {
        //
         //return view('conductor.seat.create');
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
         if(!Seat::where('Seat_no', 'LIKE', $request->seatno)->where('bus_id', 'LIKE', $request->busid)->first()) {
          if(Bus::where('id', 'LIKE', $request->busid)->first()){
              if(Message::where('passenger_id', 'LIKE', $request->pid)->first()){
                  if(!Seat::where('passenger_id', 'LIKE', $request->pid)->first()){
                     $request->validate([
            'seatno' => 'required|digits_between:1,55',
             'busid' => 'required',
                 'pid' => 'required'
        ]);
        
             $seat = new Seat([
            'Seat_no' => $request->get('seatno'),
             'bus_id' => $request->get('busid'),
                 'passenger_id' => $request->get('pid'),
             
        ]);
        $seat->save();
                     
        return redirect('/cseat/show')->with('success', trans('sentence.added'));  
                  }
                   else{
                        $id=$request->get('pid');
                       $set = Seat::where('passenger_id','LIKE','%'.$id.'%')->first();
                       session()->flash('warning', 'Sorry,you are already registered!!'.' '.'Your seat id is:'.' '.$set->id);
        return redirect('/cseat');
                   }
              }
              else{
                 session()->flash('warning', 'Sorry,you have to Pay first');
        return redirect('/cetb');  
              }
            
          }
             else{
               session()->flash('warning', 'Sorry,The bus id is not existed');
        return redirect('/cbus');  
             }
             
            }
         else{
             session()->flash('warning', 'Sorry,See the sold seates!!');
        return redirect('/cseatbus');
         }
        }
        

    /**
     * Display the specified resource.
     *
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $seats = Seat::all();

        return view('conductor.seat.index', compact('seats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $seat= Seat::find($id);
         $set=Seat::where('bus_id','Like',$seat->bus_id)->first();
        $sats=Seat::where('bus_id','Like',$seat->bus_id)->get();
        return view('conductor.seat.edit',compact('seat','sats','set'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
    {
        $name = $request->get('search');
    $seats = Seat::where('id','LIKE','%'.$name.'%')->orWhere('bus_id','LIKE','%'.$name.'%')->orWhere('passenger_id','LIKE','%'.$name.'%')->get();
        return view('conductor.seat.index',compact('seats'));
    }
    public function update(Request $request, $id)
    {
        //
       if(!Seat::where('Seat_no', 'LIKE', $request->seatno)->where('bus_id', 'LIKE', $request->busid)->first()) {
          if(Bus::where('id', 'LIKE', $request->busid)->first()){
              if(Message::where('passenger_id', 'LIKE', $request->pid)->first()){
              $request->validate([
            'seatno' => 'required|digits_between:1,55|numeric',
             'busid' => 'required',
                  'pid' => 'required'
        ]);
        $seat = Seat::find($id);
        $seat->Seat_no =  $request->get('seatno');
        $seat->bus_id = $request->get('busid');
         $seat->passenger_id = $request->get('pid');
        $seat->save();
        return redirect('/cseat/show')->with('success', trans('sentence.updated'));
           }
              else{
                 session()->flash('warning', 'Sorry,you have to Pay first');
        return redirect('/cseat/show');  
              }
            
          }
             else{
               session()->flash('warning', 'Sorry,The bus id is not existed');
        return redirect('/cseat/show');  
             }
             
            }
         else{
              $seat= Seat::find($id);
         $set=Seat::where('bus_id','Like',$request->busid)->first();
        $sats=Seat::where('bus_id','Like',$request->busid)->get();
        return view('conductor.seat.edit',compact('seat','sats','set'));
         }
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $seat = Seat::find($id);
         if( $seat->book()->count() >0){
             return redirect('/cseat/show')->with('warning', 'First delete it from booking');
         }
        else{
            $seat->delete(); 
        return redirect('/cseat/show')->with('success', trans('sentence.deleted')); 
        }
            
    }

 }