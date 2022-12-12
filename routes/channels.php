<?php

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// Broadcast::channel('conversation.{conversation_id}', function (User $user, $conversation_id) {
//     return $user->conversations->contains($conversation_id);
// });

Broadcast::channel('conversation.{conversationId}', function ($user, $conversationId) {
    // $conversation = Conversation::find($conversationId);
    // $conversation_user_id = $conversation->user_one == Auth::user()->id ? $conversation->user_one : $conversation->user_two;
    return true;
});

// Broadcast::channel('conversation.{conversationId}', function ($user, $conversation_id) {
//     // if ($user->canJoinRoom($conversationId)) {
//     //     return ['id' => $user->id, 'name' => $user->name];
//     // }
// });
