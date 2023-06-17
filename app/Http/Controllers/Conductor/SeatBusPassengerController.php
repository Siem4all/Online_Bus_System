<?php

namespace App\Http\Controllers\Conductor;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Book;
use App\Bus;
use App\Seat;
use App\Schedule;
use App\Route;
use App\Ticket;
use App\Passenger;
use App\Message;

class SeatBusPassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('conductor.buspassenger');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if(Passenger::where('id', 'LIKE', $request->pid)->first()){
            if(Bus::where('id', 'LIKE', $request->busid)->first()){
                if(!Seat::where('passenger_id', 'LIKE', $request->pid)->first()){
                    if(Message::where('passenger_id', 'LIKE', $request->pid)->first()){
                  $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num=' ';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
                    }
                    else{
                        session()->flash('warning', 'Sorry,you have to Pay first');
        return redirect('/cetb');  
                    }
                    }
                
                else
                {
                     session()->flash('warning', 'Sorry,you are booked already');
        return redirect('/cseatbus');
                }
                
            }
            else
            {
                session()->flash('warning', 'Sorry,check bus id');
        return redirect('/cbus');
            }
            
        }
        else
        {
             session()->flash('warning', 'Sorry,check your passenger id');
        return redirect('/cpassenger');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
    if($id==1){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='01';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==2){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='02';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==3){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='03';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==4){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='04';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
            if($id==5){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='05';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==6){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='06';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==7){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='07';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==8){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='08';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
         if($id==9){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='09';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==10){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='10';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==11){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='11';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==12){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='12';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
            if($id==13){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='13';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==14){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='14';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==15){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='15';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==16){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='16';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
           if($id==17){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='17';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==18){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='18';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==19){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='19';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==20){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='20';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
            if($id==21){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='21';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==22){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='22';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==23){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='23';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==24){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='24';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
         if($id==25){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='25';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==26){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='26';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==27){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='27';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==28){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='28';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
            if($id==29){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='29';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==30){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='30';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==31){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='31';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==32){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='32';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        if($id==33){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='33';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==34){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='34';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==35){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='35';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==36){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='36';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
            if($id==37){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='37';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==38){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='38';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==39){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='39';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==40){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='40';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
         if($id==41){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='41';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==42){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='42';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==43){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='43';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==44){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='44';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
            if($id==45){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='45';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==46){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='46';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==47){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='47';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==48){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='48';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
           if($id==49){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='49';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==50){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='50';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==51){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='51';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==52){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='52';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
            if($id==53){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='53';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==54){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='54';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==55){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='55';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
       

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        
       if($id==1){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='01';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==2){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='02';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==3){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='03';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==4){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='04';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
            if($id==5){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='05';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==6){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='06';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==7){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='07';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==8){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='08';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
         if($id==9){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='09';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==10){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='10';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==11){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='11';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==12){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='12';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
            if($id==13){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='13';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==14){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='14';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==15){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='15';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==16){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='16';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
           if($id==17){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='17';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==18){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='18';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==19){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='19';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==20){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='20';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
            if($id==21){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='21';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==22){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='22';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==23){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='23';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==24){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='24';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
         if($id==25){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='25';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==26){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='26';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==27){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='27';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==28){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='28';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
            if($id==29){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='29';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==30){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='30';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==31){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='31';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==32){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='32';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        if($id==33){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='33';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==34){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='34';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==35){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='35';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==36){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='36';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
            if($id==37){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='37';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==38){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='38';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==39){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='39';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==40){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='40';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
         if($id==41){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='41';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==42){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='42';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==43){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='43';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==44){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='44';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
            if($id==45){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='45';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==46){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='46';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==47){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='47';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==48){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='48';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
           if($id==49){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='49';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==50){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='50';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==51){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='51';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }elseif($id==52){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='52';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
            if($id==53){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='53';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==54){
            $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='54';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
        elseif($id==55){
           $name = $request->get('busid');
               $data = $request->get('pid');
                $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
                    $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
            
                    $num='55';
                        return view('conductor.seatbuspassenger',compact('bus','passenger','num','seats'));
        }
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function display(Request $request)
    {
        //
        $idd=$request->get('seatid');
        $seat = Seat::find($idd);
        $sets=Seat::where('bus_id','Like',$request->busid)->first();
        return view('conductor.seat.edit',compact('seat','sets'));
    }

    public function destroy($id)
    {
        //
    }
}
