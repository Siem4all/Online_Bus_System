<?php

namespace App\Http\Controllers\Banker;
use App\Http\Controllers\Controller;
use Auth;
use App\Seat;
use App\Bus;
use App\Message;
use App\Passenger;
use App\Ticket;
use App\Book;
use Redirect;
use Crypt;

use Illuminate\Http\Request;

class SeatController extends Controller
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

        return view('banker.seat.transport');
    }
    public function allTogether(){
        $seats = Seat::all();
        return view('banker.seat.seat',compact('seats'));
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
            
            return redirect('/bseatbus')->with('success', trans('sentence.confirmed')); 
         
    } else{
            session()->flash('warning', 'Please pay the fare first');
        return redirect('/bseat');
        }
        }
    
    public function create()
    {
        //
         //return view('banker.seat.create');
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
                      $data= $seat->id;
                     $id=Crypt::encrypt($data);
        return Redirect::route('bseat.show',$id)->with('success', trans('sentence.added'));  
                  }
                   else{
                        $id=$request->get('pid');
                       $set = Seat::where('passenger_id','LIKE','%'.$id.'%')->first();
                       session()->flash('warning', 'Sorry,you are already registered!!'.' '.'Your seat id is:'.' '.$set->id);
        return redirect('/bseat');
                   }
              }
              else{
                 session()->flash('warning', 'Sorry,you have to Pay first');
        return redirect('/bpayment');  
              }
            
          }
             else{
               session()->flash('warning', 'Sorry,The bus id is not existed');
        return redirect('/bbus');  
             }
             
            }
         else{
             session()->flash('warning', trans('sentence.booked'));
        return redirect('/bseatbus');
         }
        }
        

    /**
     * Display the specified resource.
     *
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Crypt::decrypt($id);
        $seat = Seat::find($data);
        return view('banker.seat.index', compact('seat'));
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
        return view('banker.seat.edit',compact('seat','sats','set'));
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
           $id=Auth::user()->id;
        $passenger=Passenger::where('user_id','LIKE','%'.$id.'%')->first();
         if(Seat::where('id','LIKE','%'.$name.'%')->where('passenger_id','LIKE','%'.$passenger->id.'%')->first()){
             $seats = Seat::where('id','LIKE','%'.$name.'%')->where('passenger_id','LIKE','%'.$passenger->id.'%')->get();
        return view('banker.seat.seat',compact('seats'));
         }
         elseif(Seat::where('passenger_id','LIKE','%'.$name.'%')->where('passenger_id','LIKE','%'.$passenger->id.'%')->first()){
             $seats = Seat::where('passenger_id','LIKE','%'.$name.'%')->where('passenger_id','LIKE','%'.$passenger->id.'%')->get();
        return view('banker.seat.seat',compact('seats')); 
         }
         elseif(Seat::where('bus_id','LIKE','%'.$name.'%')->where('passenger_id','LIKE','%'.$passenger->id.'%')->first()){
            $seats = Seat::where('bus_id','LIKE','%'.$name.'%')->where('passenger_id','LIKE','%'.$passenger->id.'%')->get();
        return view('banker.seat.seat',compact('seats'));  
         }
         else{
            return redirect('/bviewseat')->with('warning', 'Nothing found!!'); 
         }
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
        $data= $seat->id;
        $id=Crypt::encrypt($data);
        return Redirect::route('bseat.show',$id)->with('success', trans('sentence.updated'));
           }
              else{
                 session()->flash('warning', 'Sorry,you have to Pay first');
                   $seat = Seat::find($id);
                  $data= $seat->id;
        $dd=Crypt::encrypt($data);
        return Redirect::route('bseat.show',$dd);  
              }
            
          }
             else{
               session()->flash('warning', 'Sorry,The bus id is not existed');
                  $seat = Seat::find($id);
                 $data= $seat->id;
                 $dd=Crypt::encrypt($data);
        return Redirect::route('bseat.show',$dd);   
             }
             
            }
         else{
               session()->flash('warning', 'Sorry,this is booked by someone else!!');
              $seat= Seat::find($id);
         $set=Seat::where('bus_id','Like',$request->busid)->first();
        $sats=Seat::where('bus_id','Like',$request->busid)->get();
        return view('banker.seat.edit',compact('seat','sats','set'));
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
               $data= $seat->id;
                 $dd=Crypt::encrypt($data);
             return Redirect::route('bseat.show',$dd)->with('warning', 'First delete it from booking');
         }
        else{
            $seat->delete(); 
        return redirect('/bviewseat')->with('success', trans('sentence.deleted')); 
        }
            
    }

 }