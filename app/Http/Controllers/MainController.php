<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;

class MainController extends Controller
{
    function index(){
        return view('login');
    }


    function checklogin(Request $request){
        
        
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        
        $user_data = array(
            'name'=>$request->get('user'),
            'email'=>$request->get('email'),
            'password'=>$request->get('password'),
        );

        if(Auth::attempt($user_data)){
            return redirect('main/successlogin');
        }
        else{
            return back()->with('error', 'Wrong Login');
        }
    }



    function successlogin(){
        return view('successlogin');
    }


    function logout(){
        Auth::logout();
        return redirect('main');
    }
}