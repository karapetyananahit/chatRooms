<?php

namespace App\Http\Controllers;

use App\Models\ChatRoom;
use Illuminate\Http\Request;

class ChatRoomController extends Controller
{
//    public function index()
//    {
//        return view('chats');
//    }

    public function fetchRoomData()
    {
        $rooms = ChatRoom::all();
        return $rooms;
    }

}
