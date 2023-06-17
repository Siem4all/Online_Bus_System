<?php
   
namespace App\Http\Controllers\conductor;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Message;
use App\Passenger;
use Session;
use Stripe;
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('conductor.stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        if(Passenger::where('id', 'LIKE', $request->pid)->first()){
           Stripe\Stripe::setApiKey('sk_test_51GveMOEVsRzoU3QH577qsDSwT48Rf6068PrNmTncoCPDYq36NvL2kL47AGLz6VznLGhGpTYrdKLGNQ30roBwxcqO00jb6dyET9');
        Stripe\Charge::create ([
                "amount" => $request->get('amount')*10,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Odaabus ." 
            ]);
            
$basic  = new \Nexmo\Client\Credentials\Basic('fba5f4ac', 'a7kuXx4d4TOLiP3A');
$client = new \Nexmo\Client($basic);
        $id=$request->get('pid');
        $passenger=Passenger::find($id);
        $mobile = $passenger->Phone_no ;

$message = $client->message()->send([
    $msg = Str::random(10),
    'to' => $mobile,
    'from' => 'Odaabus',
    'text' => 'Dear Passenger,Your tran_code is :'.' '.$msg,
]);
         $message = new Message([
             'passenger_id' => $id,
            'message' =>$msg ,
        ]);
        $message->save();
  
        Session::flash('success', 'Payment successful!');
          
        return back(); 
        }
        else{
               session()->flash('warning', 'Sorry,The passenger id is not existed');
        return redirect('/cpassenger');  
             }
    }
}