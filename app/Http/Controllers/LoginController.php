<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function loginHere(Request $request){
        $email = $request->email;
        $user = User::where('email', $email)->first();

        if(password_verify($request->password, $user->password)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        else{
            return redirect()->back()->withErrors('Login Gagal');
        }
    }
}
