<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValiDemoRequest;

class RegisterController extends Controller
{
    //新規登録
    public function Register(){
     return view('register');
    }

    public function Confirm(ValiDemoRequest $request)
    {
        $data = $request->all();
        //data = $request->all();
        //dd($request->validate());
       //return view('register')->with($data);
   return view('home',compact('data'));
    }
}