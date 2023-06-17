<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Payment;
use App\Passenger;
use Illuminate\Http\Request;

class PaymentController extends Controller
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
        $payments = Payment::all();
        return view('admin.payment.index',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.payment.create');
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
            'pid' => 'required',
            'routeid' => 'required',
            'bank' => 'required',
            'system' => 'required'
        ]);
  
         $payment = new Payment([
            'passenger_id' => $request->get('pid'),
             'route_id' => $request->get('routeid'),
            'Bank' => $request->get('bank'),
             'System' => $request->get('system'),
              ]);
        $payment->save();
        return redirect('/payment')->with('success', trans('sentence.added'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
    {
        $name = $request->get('search');
        $passenger=Passenger::where('P_fname',$name)->orWhere('P_lname','LIKE',$name)->first();

   if($passenger){
    $payment = Payment::where('passenger_id','LIKE','%'.$passenger->id.'%')->first();
    if($payment){
        $payments = Payment::where('passenger_id','LIKE','%'.$passenger->id.'%')->get();
        return view('admin.payment.index',compact('payments'));
    }
    else{
        return back();
    }
    }
    else{
        return back();
    }
}
    

    public function edit($id)
    {
        //
        $payment = Payment::find($id);
        return view('admin.payment.medit',compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $request->validate([
            'pid' => 'required',
            'routeid' => 'required',
            'bank' => 'required',
            'system' => 'required'
        ]);

         $payment =Payment::find($id);
        $payment->passenger_id =  $request->get('pid');
        $payment->route_id = $request->get('routeid');
        $payment->Bank = $request->get('bank');
        $payment->System = $request->get('system');
        $payment->save();

        return redirect('/payment')->with('success', trans('sentence.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $payment = Payment::find($id);
        $payment->delete();

        return redirect('/payment')->with('success', trans('sentence.deleted'));
    }
}
