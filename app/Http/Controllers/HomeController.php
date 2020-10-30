<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    //ホーム画面
    public function Home(){
        return view('Home');
    }
}
