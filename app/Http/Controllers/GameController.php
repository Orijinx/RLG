<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\GameRequest;

class GameController extends Controller
{
    //
    public function SendMail()
    {
        Mail::to('vladonnx@mail.ru')->send(new GameRequest);
        return back();
    }
}
