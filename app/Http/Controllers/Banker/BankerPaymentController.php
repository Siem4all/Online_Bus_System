<?php

namespace App\Http\Controllers\Banker;
use App\Http\Controllers\Controller;
use Auth;
use App\BankerPayment;
use App\Route;
use App\Passenger;
use Illuminate\Http\Request;

class BankerPaymentController extends Controller
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
        $payments = BankerPayment::all();
        return view('banker.payment.mobile',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('banker.payment.create');
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
        if(Passenger::where('id', 'LIKE', $request->pid)->first()){
        $request->validate([
             'uid' => 'required',
            'pid' => 'required',
            'rid' => 'required',
            'bank' => 'required',
            'system' => 'required'
        ]);
  
         $payment = new BankerPayment([
              'user_id' => $request->get('uid'),
            'passenger_id' => $request->get('pid'),
             'route_id' => $request->get('rid'),
            'Bank' => $request->get('bank'),
             'System' => $request->get('system'),
              ]);
        $payment->save();
        return redirect('/bpayment')->with('success', trans('sentence.added'));
        }
        else{
            return redirect('/bpayment')->with('warning', 'You have to register first!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         $payment = BankerPayment::find($id);
        return view('banker.message.show',compact('payment'));
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
    $payments = BankerPayment::where('passenger_id','LIKE','%'.$name.'%')->orWhere('route_id','LIKE','%'.$name.'%')->get();
        return view('banker.payment.mobile',compact('payments'));
    }
    public function edit($id)
    {
        //
        $payments = BankerPayment::all();
        $payment = BankerPayment::find($id);
        return view('banker.payment.medit',compact('payment','payments'));
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
             'uid' => 'required',
            'pid' => 'required',
            'routeid' => 'required',
            'bank' => 'required',
            'system' => 'required'
        ]);

         $payment =BankerPayment::find($id);
         $payment->user_id =  $request->get('cid');
        $payment->passenger_id =  $request->get('pid');
        $payment->route_id = $request->get('rid');
        $payment->Bank = $request->get('bank');
        $payment->System = $request->get('system');
        $payment->save();

        return redirect('/bpayment')->with('success', trans('sentence.updated'));
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
        $payment =BankerPayment::find($id);
        $payment->delete();

        return redirect('/bpayment')->with('success', trans('sentence.deleted'));
    }
}
