<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyFriendController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;

        $conversation = Conversation::where('user_one', $user_id)->orWhere('user_two', $user_id)->first();

        if ($conversation) {
            return redirect()->route('conversation', $conversation->id);
        } else {
            return redirect()->route('conversation', -1);
        }
    }

    public function conversation($id)
    {

        if ($id == -1) {
            return view("userDashboard.myFriend.index", [
                'users' => [],
                'user' => null,
            ]);
        }
        $user_id = Auth::user()->id;
        $conversations = Conversation::where('user_one', $user_id)->orWhere('user_two', $user_id)->get();

        $users = [];
        $pos = 0;
        foreach ($conversations as $conversation) {
            $opposite_id = $conversation->user_one == $user_id ? $conversation->user_two : $conversation->user_one;

            $users[] = User::where('id', $opposite_id)->first();
            $users[$pos]['conversation_id'] = $conversation->id;
            $pos += 1;
        }

        $conversation = Conversation::where('id', $id)->first();
        $opposite_id = $conversation->user_one == $user_id ? $conversation->user_two : $conversation->user_one;
        $opposite = User::where('id', $opposite_id)->first();

        $messages = Message::where('conversation_id', $conversation->id)->get();

        return view("userDashboard.myFriend.index", [
            'users' => $users,
            'user' => $opposite,
            'messages' => $messages
        ]);
    }

    public function add_conversation($opposite_id)
    {
        $user_id = Auth::user()->id;
        $conversation = Conversation::where(function ($query) use ($user_id, $opposite_id) {
            return $query->where('user_one', $user_id)->where('user_two', $opposite_id);
        })->orWhere(function ($query) use ($user_id, $opposite_id) {
            return $query->where('user_one', $opposite_id)->where('user_two', $user_id);
        })->first();

        if (!$conversation) {
            $conversation = Conversation::create([
                'user_one' => $user_id,
                'user_two' => $opposite_id,
            ]);
        }

        return redirect()->route('conversation', $conversation->id);
    }
}
