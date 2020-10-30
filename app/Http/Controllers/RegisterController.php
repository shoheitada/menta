<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValiDemoRequest;

class RegisterController extends Controller
{
    //新規登録
    public function Register(){
      return view('Register');
    }

    public function Confirm(\App\Http\Requests\ValiDemoRequest $request)
    {
        $data = $request->all();
   return view('Register')->with($data);
    }
}
?>