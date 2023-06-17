<?php
   
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Message;
use App\Passenger;
use App\Schedule;
use App\Payment;
use App\Book;
use App\Ticket;
use Session;
use Stripe;
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function stripe($id,$sid)
    {
        $passenger=Passenger::find($id);
        $schedule=Schedule::find($sid);

        return view('admin.stripe',compact('passenger','schedule'));
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
           Stripe\Stripe::setApiKey('sk_test_51GveMOEVsRzoU3QH577qsDSwT48Rf6068PrNmTncoCPDYq36NvL2kL47AGLz6VznLGhGpTYrdKLGNQ30roBwxcqO00jb6dyET9');
        Stripe\Charge::create ([
                "amount" => $request->get('amount'),
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Odaabus ." 
            ]);
            
        $payment = Payment::where('passenger_id','LIKE',$request->get('pid'))->where('schedule_id','LIKE',$request->get('sid'))->first();
        $payment->status='Paid';
        $payment->save();

        //Session::flash('success', 'Payment successful!');
        $pid=$request->get('pid');
        $sid=$request->get('sid');
          
        return redirect('/nexmo/'.$pid.'/'.$sid);
    }

    public function nexmo($pid,$sid){
        /*
        $basic  = new \Nexmo\Client\Credentials\Basic('fba5f4ac', 'a7kuXx4d4TOLiP3A');
        $client = new \Nexmo\Client($basic);
                $passenger=Passenger::find($pid);
                $mobile = $passenger->Phone_no;
        
        $message = $client->message()->send([
            $msg = Str::random(10),
            'to' => $mobile,
            'from' => 'Odaabus',
            'text' => 'Dear Passenger,Your tran_code is :'.' '.$msg,
        ]);*/
                 $message = new Message([
                     'passenger_id' => $pid,
                    'message' =>Str::random(10) ,
                ]);
                $message->save();
                return redirect('/ticket')->with('success','Successfuly Registered');
    }
}