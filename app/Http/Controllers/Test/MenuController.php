<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    //
    public function menu(){
        if(Auth::check()){
             // ログインしていたら、test/menuを表示
            return view('test/menu');
        }
        else{
             // ログインしていなかったら、Login画面を表示
            return view('auth/login');
        }
    }
}
