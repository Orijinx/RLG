<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\GameRequest;

class GameController extends Controller
{
    //
    public function SendMail(Request $req)
    {
        Mail::to('vladonnx@mail.ru')->send(new GameRequest($req->name,$req->email,$req->sub,$req->message));
        return back();
    }
}
