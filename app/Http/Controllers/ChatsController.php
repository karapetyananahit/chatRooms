<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        return view('chats', compact(["id"]));
    }

    public function fetchMessages($id)
    {
        return Message::with('user')->where('rooms_id', $id)->get();
    }

    public function sendMessage(Request $request, $id)
    {


        $message = new Message();
        $message->user_id = Auth::user()->id;
        $message->rooms_id = $id;
        $message->message = $request->message;

        $message->save();

        broadcast(new MessageSent($message->load('user')))->toOthers();

        return ['status' => 'success'];
    }
}
