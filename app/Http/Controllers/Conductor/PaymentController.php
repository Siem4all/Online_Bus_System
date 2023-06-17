<?php

namespace App\Http\Controllers\Conductor;
use App\Http\Controllers\Controller;

use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $payments = Payment::all();
        return view('conductor.payment.mobile',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('conductor.payment.create');
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
        return redirect('/cpayment')->with('success', trans('sentence.added'));
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
    $payments = Payment::where('Mobile','LIKE','%'.$name.'%')->orWhere('First_name','LIKE','%'.$name.'%')->get();
        return view('conductor.payment.mobile',compact('payments'));
    }
    public function edit($id)
    {
        //
        $payment = Payment::find($id);
        return view('conductor.payment.medit',compact('payment'));
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

        return redirect('/cpayment')->with('success', trans('sentence.updated'));
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

        return redirect('/cpayment')->with('success', trans('sentence.deleted'));
    }
}
