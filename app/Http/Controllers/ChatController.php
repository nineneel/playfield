<?php

namespace App\Http\Controllers;

use App\Events\Message as EventsMessage;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function send(Request $request)
    {

        $user_id = Auth::user()->id;
        $message = Message::create([
            'user_id' => $user_id,
            'conversation_id' => $request->input('conversation_id'),
            'message' => $request->input('message')
        ]);

        EventsMessage::dispatch($message);

        return response()->json(['message' => 'task was successful']);
    }
}
