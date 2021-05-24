<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;

class MessageController extends Controller
{
    public function sendMessage(){
        MessageSent::dispatch(request('message'));
    }
}
