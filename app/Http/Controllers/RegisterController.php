<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //新規登録
    public function Register(){
           return view('Register');
    }
}
?>