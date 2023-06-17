<?php

namespace App\Http\Controllers\Banker;
use App\Http\Controllers\Controller;

use App\Ticket;
use App\Passenger;
use App\Book;
use App\Seat;
use App\Schedule;
use Illuminate\Http\Request;

class TicketController extends Controller
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
        $tickets = Ticket::all();

        return view('banker.ticket.index',compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('banker.ticket.create');
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
         $ticket = Ticket::find($id);
        return view('banker.ticket.show',compact('ticket'));
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
    public function cancelTicket(Request $request){
        
        if(Passenger::where('id', 'LIKE', $request->pid)->where('user_id', 'LIKE', $request->uid)->first()){
            if(Seat::where('passenger_id','LIKE',$request->pid)->first()){
                  $seat = Seat::where('passenger_id','LIKE',$request->pid)->first();
        $seat->Seat_no = '00';
        $seat->save();
             return redirect('/bbook/show')->with('success', 'Canceled Successfuly !!'); 
            }
            else{
                return redirect('/bbook/show')->with('warning', 'You was not registered'); 
            }
        }
        else{
          return redirect('/bbook/show')->with('warning', 'Sorry,you can not cancel this ticket!!');  
        }
    }
     public function search(Request $request)
    {
        $name = $request->get('search');
    $tickets = Ticket::where('id','LIKE','%'.$name.'%')->orWhere('book_id','LIKE','%'.$name.'%')->get();
        return view('banker.ticket.index',compact('tickets'));
    }
    
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
