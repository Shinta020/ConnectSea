<?php

namespace App\Http\Controllers;

use App\Message;
use App\Events\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller
{
    public function displayHalamanChat() {

        return view('chat');

    }

}


    // /**
    //  * Show chats
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {

    // }


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    // /**
    //  * Fetch all messages
    //  *
    //  * @return Message
    //  */
    // public function fetchMessages()
    // {
    //     return Message::with('user')->get();
    // }

    // /**
    //  * Persist message to database
    //  *
    //  * @param  Request $request
    //  * @return Response
    //  */
    // public function sendMessage(Request $request)
    // {
    //     $user = Auth::user();

    //     $message = $user->messages()->create([
    //         'message' => $request->input('message')
    //     ]);

    //     broadcast(new MessageSent($user, $message))->toOthers();

    //     return ['status' => 'Message Sent!'];
    // }

