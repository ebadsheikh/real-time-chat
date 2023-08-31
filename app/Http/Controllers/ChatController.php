<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function showChat($receiverId)
    {
        // You can perform any necessary data preparation here

        return view('chat.chat', [
            'receiverId' => $receiverId,
        ]);
    }
}
