<?php

namespace App\Http\Controllers;

use App\Models\postingApp;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function signupUser(Request $req){
       // dd($request->all());
        postingApp::create([
            'userName'=> $req->userName,
            'email'=>  $req->email,
            'password'=>$req->password,
        ]);
    }

}
