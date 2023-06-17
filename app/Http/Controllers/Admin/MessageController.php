<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Message;
use App\Passenger;
use Validator;

class MessageController extends Controller
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
        $messages = Message::all();
        $passengers=Passenger::all();
        return view('admin.message.index', compact('messages','passengers'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.message.create');
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
        if(!Message::where('passenger_id', 'LIKE', $request->pid)->first()) {
        $request->validate([
             'pid' => 'required',
             //'msg' => 'required',
            
        ]);
  
         $message = new Message([
             'passenger_id' => $request->get('pid'),
            'message' =>Str::random(12),
        ]);
        $message->save();
  
    return redirect('/message')->with('success',trans('sentence.added'));
    }else{
           return redirect('/message')->with('warning',trans('sentence.booked')); 
        }
             }
        else{
            return redirect('/passenger')->with('warning','Enter correct passenger id'); 
        }
        }
         
    public function show($id)
    {
        
         $message = Message::find($id);
        return view('admin.message.show',compact('message'));
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
         $message = Message::find($id);
        return view('admin.message.edit',compact('message'));
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
        $request->validate([
             'pid' => 'required',
             //'msg' => 'required',
        ]);

        $message = Message::find($id);
        $message->passenger_id = $request->get('pid');
        $message->message = Str::random(8,12);
        
        $message->save();

        return redirect('/message')->with('success', trans('sentence.updated'));
    }
    
 public function search(Request $request)
    {
        $name = $request->get('search');
    $messages = Message::where('id','LIKE','%'.$name.'%')->orWhere('passenger_id','LIKE','%'.$name.'%')->get();
        return view('admin.message.index',compact('messages'));
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
         $message = Message::find($id);
        $message->delete();

        return redirect('/message')->with('success', trans('sentence.deleted'));
    }
}
