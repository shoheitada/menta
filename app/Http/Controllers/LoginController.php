<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //ログイン画面
    public function Login(){
        return view('login');
    }
}
?>