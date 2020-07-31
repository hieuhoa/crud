<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends Controller
{
    //
    protected $redirectTo = '/test/menu'; 
    public function Login(Request $request){
        $validator =Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validator Error .',$validator);
        }
    }
}
