<?php

namespace App\Http\Controllers\Conductor;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Message;
class SendSMSController extends Controller
{
    public function sendSMS(Request $request)
    {
        
        $basic  = new \Nexmo\Client\Credentials\Basic('fba5f4ac', 'a7kuXx4d4TOLiP3A');
$client = new \Nexmo\Client($basic);
        $mobile = $request->get('mobile');
        $message = $request->get('msg');

$message = $client->message()->send([
    'to' => $mobile,
    'from' => 'Odaabus',
    'text' => $message
]);
        
return redirect('/cmessage')->with('success', 'message send successfully');

    }
     
}
