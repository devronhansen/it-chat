<?php

namespace App\Http\Controllers;

use Vinkla\Pusher\Facades\Pusher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    protected $user;
    const DEFAULT_CHAT_CHANNEL = 'chat';
    protected $chatChannel = self::DEFAULT_CHAT_CHANNEL;

    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('chat', ['chatChannel' => $this->chatChannel]);
    }

    public function message(Request $request)
    {
        $message = [
            'text' => e($request->input('chat_text')),
            'username' => Auth::user()->name,
            'email' => md5(strtolower(trim(Auth::user()->email))),
            'timestamp' => (time() * 1000)
        ];
        Pusher::trigger($this->chatChannel, 'new-message', $message);
    }
}
