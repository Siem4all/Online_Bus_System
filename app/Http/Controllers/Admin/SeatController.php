<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Schedule;
use App\Seat;
use App\Bus;
use App\Message;
use App\Passenger;
use App\Payment;
use App\Ticket;
use App\Book;
use Auth;
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

        $seats = Seat::all();

        return view('admin.seat.index', compact('seats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        //
         //return view('admin.seat.create');
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
         $pid=$request->get('pid');
         $ssid=$request->get('sid');
        if(!Seat::where('Seat_no', 'LIKE', $request->seatno)->where('schedule_id', 'LIKE', $request->sid)->first()) {
        if(!Seat::where('passenger_id', 'LIKE', $request->pid)->where('schedule_id', 'LIKE', $request->sid)->first()){
            $request->validate([
            'seatno' => 'required|digits_between:1,55',
             'busid' => 'required',
                 'pid' => 'required'
                    ]);
        
             $seat = new Seat([
            'Seat_no' => $request->get('seatno'),
             'bus_id' => $request->get('busid'),
             'schedule_id' => $request->get('sid'),
             'passenger_id' => $request->get('pid'),
                     ]);
             $seat->save();
//seat
        $getseatid=Seat::where('bus_id','LIKE',$request->get('busid'))->where('passenger_id','LIKE',$request->get('pid'))->first();
        $book = new Book([
            'user_id'=>Auth::user()->id,
             'seat_id' => $getseatid->id,
            'schedule_id' => $request->get('sid'),
                'passenger_id'=>$request->get('pid'),
             
        ]);
        $book->save();

        $payment = new Payment([
            'passenger_id' => $pid,
           'schedule_id' => $ssid,
               'status'=>"pending...",
            
       ]);
       $payment->save();
                     
        return redirect('/etb/'.$pid.'/'.$ssid)->with('success', trans('sentence.added'));  
                  }
                   else{
                        $id=$request->get('pid');
                       $set = Seat::where('passenger_id','LIKE','%'.$id.'%')->first();
                       session()->flash('warning', 'Sorry,you are already booked!!'.' '.'Your seat id is:'.' '.$set->id);
        return redirect('/seat');
                   }
                }
         else{

            $passenger=Passenger::where('id','LIKE',$pid)->first();
            $code=$passenger->p_code;
            $sid=$request->get('sid');
             session()->flash('warning', trans('sentence.booked'));
        return redirect('/showseat/'.$code.'/'.$sid);
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

        return view('admin.seat.index', compact('seats'));
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
        $schedules=Schedule::all();
        $set=Seat::where('id','Like',$id)->where('schedule_id','Like',$seat->schedule->id)->first();
        $sats=Seat::where('id','Like',$id)->where('schedule_id','Like',$seat->schedule->id)->get();
        return view('admin.seat.edit',compact('seat','sats','set','schedules'));
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
        return view('admin.seat.index',compact('seats'));
    }
    
    public function update(Request $request, $id)
    {
        //
        $payment=Payment::where('passenger_id', 'LIKE', $request->pid)->first();
        $checkseat=Seat::where('Seat_no', 'LIKE', $request->seatno)->where('schedule_id', 'LIKE', $request->sid)->first();
       if(!$checkseat and $payment) {
        if($payment->status=="pending..."){
            $seat = Seat::find($id);
            $seat->Seat_no= $request->get('seatno');
            $seat->schedule_id=$request->get('sid');
            $seat->save();
            $pid=$request->get('pid');
            $ssid=$request->get('sid');
             return redirect('/etb/'.$pid.'/'.$ssid)->with('success','Make the payment as soon as possible');
        }
        else{
            $seat = Seat::find($id);
            $seat->Seat_no= $request->get('seatno');
            $seat->schedule_id=$request->get('sid');
            $seat->save();
            return redirect('/seat')->with('success', trans('sentence.updated'));

        }    
            }

         else{
            return redirect('/seat/'.$id.'/edit')->with('warning', 'Please try again');
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
             return redirect('/seat/show')->with('warning', 'First delete it from booking');
         }
        else{
            $seat->delete(); 
        return redirect('/seat/show')->with('success', trans('sentence.deleted')); 
        }
            
    }

 }