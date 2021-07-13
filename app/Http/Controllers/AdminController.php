<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Party,User};
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function MainView(){
        $users = User::all();
        $parties = Party::all();
        return view("admin.index",compact('users','parties'));
    }
    public function AddUser(Request $req){
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->party_id = $req->party_id ?? null;
        $user->save();
        return back()->with("Status","Игрок добавлен!");

    }
}
