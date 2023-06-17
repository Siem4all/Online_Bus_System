<?php

namespace App\Http\Controllers\Conductor;
use App\Http\Controllers\Controller;
use Auth;
use App\Passenger;
use App\Bus;
use App\Book;
use App\Seat;
use App\Ticket;
use App\Message;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $passengers = Passenger::all();
        return view('conductor.passenger.index', compact('passengers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('conductor.passenger.create');
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
               $request->validate([
            'fname' => 'required',
             'lname' => 'required',
             'phone' => 'required|max:15',
             'dob' => 'required|date|before:10 years ago',
             'address' => 'required',
            'gender' => 'required',
             'status' => 'required'
        ]);
  
         $passenger = new Passenger([
            'user_id' => $request->get('userid'),
            'P_fname' => $request->get('fname'),
            'P_lname' => $request->get('lname'),
            'Phone_no' => $request->get('phone'),
            'DOB' => $request->get('dob'),
            'Address' => $request->get('address'),
            'Gender' => $request->get('gender'),
             'Status' => $request->get('status'),
        ]);
        $passenger->save();
        return redirect('/cpassenger')->with('success', trans('sentence.added'));  
             }
             

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //return view('conductor.passenger.create',compact('passenger'));
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
        $passenger = Passenger::find($id);
        return view('conductor.passenger.edit',compact('passenger'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $name = $request->get('search');
    $passengers = Passenger::where('id','LIKE','%'.$name.'%')->orWhere('P_fname','LIKE','%'.$name.'%')->get();
        return view('conductor.passenger.index',compact('passengers'));
    }
    public function update(Request $request, $id)
    {
        //
            $request->validate([
            'firstname' => 'required',
             'lastname' => 'required',
             'phone' => 'required|max:15',
             'dob' => 'required|date',
             'address' => 'required',
            'gender' => 'required',
             'status' => 'required'
        ]);

        $passenger = Passenger::find($id);
                 $passenger->user_id =  $request->get('userid');
        $passenger->P_fname =  $request->get('firstname');
        $passenger->P_lname = $request->get('lastname');
        $passenger->Phone_no = $request->get('phone');
        $passenger->DOB = $request->get('dob');
        $passenger->Address = $request->get('address');
        $passenger->Gender = $request->get('gender');
        $passenger->Status = $request->get('status');
        $passenger->save();

        return redirect('/cpassenger')->with('success', trans('sentence.updated'));

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
        $passenger = Passenger::find($id);
        if($passenger->message()->count() > 0 or $passenger->seat()->count() > 0){
          return redirect('/cpassenger')->with('warning', 'First delete it from the message or seat');   
        }
          else{
            $passenger->delete();
            return redirect('/cpassenger')->with('success', trans('sentence.deleted')); 
    }
}
     }
