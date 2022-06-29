<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index (){
        return view('login');
    }
    
    public function login(Request $request){
        $input = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($input)){
            return redirect('welcome');
        }else{
            return redirect('/');
        }
    }
}
