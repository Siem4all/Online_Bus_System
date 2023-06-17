<?php

namespace App\Http\Controllers\User;
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
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        //
        return view('user.buspassenger');
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
                
                    
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showSeat($code,$id)
    {
        //                
             $passenger = Passenger::where('p_code','LIKE','%'.$code.'%')->first();
                $schedules=Schedule::where('id','LIKE',$id)->first();
               $bid=$schedules->bus->id;

                $bus = Bus::where('id','LIKE',$bid)->first();

                $seats=Seat::where('bus_id','LIKE',$bid)->get();
                $schedule=$id;
            
                    $num=' ';
                    return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $name = $request->get('busid');
        $data = $request->get('pid');
        $schedule = $request->get('schedule');
        $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
        $seats=Seat::where('bus_id','LIKE',$request->busid)->get();

    if($id==1){
           
            
                    $num='01';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==2){
            
            
                    $num='02';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==3){
          $num='03';
                    return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==4){
           
            
                    $num='04';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
            if($id==5){
           $num='05';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==6){
           $num='06';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==7){
          $num='07';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==8){
          $num='08';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
         if($id==9){
           $num='09';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==10){
             $num='10';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==11){
           $num='11';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==12){
           $num='12';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
            if($id==13){
            $num='13';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==14){
            $num='14';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==15){
          $num='15';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==16){
          $num='16';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
           if($id==17){
          $num='17';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==18){
          $num='18';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==19){
          $num='19';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==20){
           
            
                    $num='20';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
            if($id==21){
           
            
                    $num='21';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==22){
            
            
                    $num='22';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==23){
           
            
                    $num='23';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==24){
           
            
                    $num='24';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
         if($id==25){
           
            
                    $num='25';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==26){
            
            
                    $num='26';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==27){
           
            
                    $num='27';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==28){
           
            
                    $num='28';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
            if($id==29){
           
            
                    $num='29';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==30){
            
            
                    $num='30';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==31){
           
            
                    $num='31';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==32){
           
            
                    $num='32';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        if($id==33){
           
            
                    $num='33';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==34){
            
            
                    $num='34';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==35){
           
            
                    $num='35';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==36){
           
            
                    $num='36';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
            if($id==37){
           
            
                    $num='37';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==38){
            
            
                    $num='38';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==39){
           
            
                    $num='39';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==40){
           
            
                    $num='40';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
         if($id==41){
           
            
                    $num='41';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==42){
            
            
                    $num='42';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==43){
           
            
                    $num='43';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==44){
           
            
                    $num='44';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
            if($id==45){
           
            
                    $num='45';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==46){
            
            
                    $num='46';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==47){
           
            
                    $num='47';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==48){
           
            
                    $num='48';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
           if($id==49){
           
            
                    $num='49';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==50){
            
            
                    $num='50';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==51){
           
            
                    $num='51';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==52){
           
            
                    $num='52';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
            if($id==53){
           
            
                    $num='53';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==54){
            
            
                    $num='54';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==55){
           
            
                    $num='55';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
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
        $name = $request->get('busid');
        $data = $request->get('pid');
        $bus = Bus::where('id','LIKE','%'.$name.'%')->first();
        $passenger = Passenger::where('id','LIKE','%'.$data.'%')->first();
        $seats=Seat::where('bus_id','LIKE',$request->busid)->get();
        $schedule = $request->get('schedule');
        
       if($id==1){
           
            
                    $num='01';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==2){
            
            
                    $num='02';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==3){
           
            
                    $num='03';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==4){
           
            
                    $num='04';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
            if($id==5){
           
            
                    $num='05';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==6){
            
            
                    $num='06';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==7){
           
            
                    $num='07';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==8){
           
            
                    $num='08';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
         if($id==9){
           
            
                    $num='09';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==10){
            
            
                    $num='10';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==11){
           
            
                    $num='11';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==12){
           
            
                    $num='12';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
            if($id==13){
           
            
                    $num='13';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==14){
            
            
                    $num='14';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==15){
           
            
                    $num='15';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==16){
           
            
                    $num='16';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
           if($id==17){
           
            
                    $num='17';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==18){
            
            
                    $num='18';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==19){
           
            
                    $num='19';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==20){
           
            
                    $num='20';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
            if($id==21){
           
            
                    $num='21';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==22){
            
            
                    $num='22';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==23){
           
            
                    $num='23';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==24){
           
            
                    $num='24';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
         if($id==25){
           
            
                    $num='25';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==26){
            
            
                    $num='26';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==27){
           
            
                    $num='27';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==28){
           
            
                    $num='28';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
            if($id==29){
           
            
                    $num='29';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==30){
            
            
                    $num='30';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==31){
           
            
                    $num='31';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==32){
           
            
                    $num='32';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        if($id==33){
           
            
                    $num='33';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==34){
            
            
                    $num='34';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==35){
           
            
                    $num='35';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==36){
           
            
                    $num='36';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
            if($id==37){
           
            
                    $num='37';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==38){
            
            
                    $num='38';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==39){
           
            
                    $num='39';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==40){
           
            
                    $num='40';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
         if($id==41){
           
            
                    $num='41';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==42){
            
            
                    $num='42';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==43){
           
            
                    $num='43';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==44){
           
            
                    $num='44';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
            if($id==45){
           
            
                    $num='45';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==46){
            
            
                    $num='46';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==47){
           
            
                    $num='47';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==48){
           
            
                    $num='48';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
           if($id==49){
           
            
                    $num='49';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==50){
            
            
                    $num='50';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==51){
           
            
                    $num='51';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }elseif($id==52){
           
            
                    $num='52';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
            if($id==53){
           
            
                    $num='53';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==54){
            
            
                    $num='54';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
        }
        elseif($id==55){
           
            
                    $num='55';
                        return view('user.seatbuspassenger',compact('bus','passenger','num','seats','schedule'));
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
        return view('user.seat.edit',compact('seat','sets'));
    }

    public function destroy($id)
    {
        //
    }
}
