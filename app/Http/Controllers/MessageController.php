<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $messages = Message::orderBy('created_at', 'DESC')->paginate(5);

        return view('messages.index')->with('messages', $messages);
    }
}
