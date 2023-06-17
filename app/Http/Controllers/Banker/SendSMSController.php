<?php

namespace App\Http\Controllers\Banker;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Message;
class SendSMSController extends Controller
{
    
    public function sendSMS(Request $request)
    {
        if(!Message::where('passenger_id', 'LIKE', $request->pid)->first()) {
        $request->validate([
             'pid' => 'required',
             //'msg' => 'required',
            
        ]);
            $msg = Str::random(12);
         $message = new Message([
             'passenger_id' => $request->get('pid'),
            'message' =>$msg,
        ]);
        $message->save();
   $basic  = new \Nexmo\Client\Credentials\Basic('fba5f4ac', 'a7kuXx4d4TOLiP3A');
$client = new \Nexmo\Client($basic);
        $mobile = $request->get('mobile');

$message = $client->message()->send([
    'to' => $mobile,
    'from' => 'Odaabus',
    'text' => $msg
]);
        
return redirect('/bpeyment')->with('success', 'message send successfully');
    }
        else{
           return redirect('/bpayment')->with('warning',trans('sentence.booked')); 
        }
    
       

    }
     
}
