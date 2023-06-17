<?php

namespace App\Http\Controllers\Banker;
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
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        $id=Auth::user()->id;
    $passengers = Passenger::where('user_id','LIKE','%'.$id.'%')->get();
        return view('banker.passenger.index', compact('passengers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('banker.passenger.create');
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
        return redirect('/bsschedule')->with('success', trans('sentence.added'));  
             }
             

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //return view('banker.passenger.create',compact('passenger'));
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
        return view('banker.passenger.edit',compact('passenger'));
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
         $id=Auth::user()->id;
        if(Passenger::where('id','LIKE','%'.$name.'%')->where('user_id','LIKE','%'.$id.'%')->first()){
            $passengers = Passenger::where('id','LIKE','%'.$name.'%')->where('user_id','LIKE','%'.$id.'%')->get();
        return view('banker.passenger.index',compact('passengers'));
        }
        elseif(Passenger::where('P_fname','LIKE','%'.$name.'%')->where('user_id','LIKE','%'.$id.'%')->first()){
             $passengers = Passenger::where('P_fname','LIKE','%'.$name.'%')->where('user_id','LIKE','%'.$id.'%')->get();
        return view('banker.passenger.index',compact('passengers'));
        }
        elseif(Passenger::where('Phone_no','LIKE','%'.$name.'%')->where('user_id','LIKE','%'.$id.'%')->first()){
            $passengers = Passenger::where('Phone_no','LIKE','%'.$name.'%')->where('user_id','LIKE','%'.$id.'%')->get();
        return view('banker.passenger.index',compact('passengers'));
        }
        else{
            return redirect('/bpassenger')->with('warning', 'Nothing found!!');
        }
    
    }
    public function update(Request $request, $id)
    {
        //
            $request->validate([
            'firstname' => 'required',
             'lastname' => 'required',
             'phone' => 'required|max:15',
             'dob' => 'required|before:5 years ago',
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

        return redirect('/bpassenger')->with('success', trans('sentence.updated'));

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
          return redirect('/bpassenger')->with('warning', 'First delete it from the message or seat');   
        }
          else{
            $passenger->delete();
            return redirect('/bpassenger')->with('success', trans('sentence.deleted')); 
    }
}
     }
