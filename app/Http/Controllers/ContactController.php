<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{

    public function showMessages()
    {
        return view('messages', ['messages' => Message::all()]);
    }
    public function showForm()
    {
        return view('/welcome');
    }

    public function storeMessage(StoreMessageRequest $request)
    {
        Message::create($request->validated());

        return redirect('/messages');
    }
}
