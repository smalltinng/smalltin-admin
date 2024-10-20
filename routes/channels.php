<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
// Broadcast::channel('chats.{id}', function ($user, $id) {
//     // Allow access to the channel for any authenticated user, regardless of the guard
//     return $user;
// }, ['guards' => ['admin', 'user']]);