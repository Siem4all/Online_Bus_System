<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsMsgController extends Controller
{
    public function sendSmsToMobile()
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('029d9650', 'XKal12eINJgrYHN0');
        $client = new \Nexmo\Client($basic);
 
        $message = $client->message()->send([
            'to' => '+251953506407',
            'from' => 'Herry',
            'text' => 'SMS notification sent using Vonage SMS API'
        ]);
 
        dd('SMS has sent.');
    }
}