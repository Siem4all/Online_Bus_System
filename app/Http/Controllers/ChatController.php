<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Events\ChatEvent;
use Illuminate\Http\Request;
class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('chat.chat');
    }

    public function fetchAllMessages()
    {
    	return Chat::with('user')->get();
    }

    public function sendMessage(Request $request)
    {
    	$chat = auth()->user()->messages()->create([
            'message' => $request->message
        ]);

    	broadcast(new ChatEvent($chat->load('user')))->toOthers();

    	return ['status' => 'success'];
    }
}



