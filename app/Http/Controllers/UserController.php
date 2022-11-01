<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\User;

class UserController extends Controller
{
    public function index(){
         return view('users.login.index', [
            'title' => 'Login User',
         ]);
    }

    public function login(Request $request){

        $credetials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credetials)){
            $request->session()->regenerate();

            return redirect()->intended('admin');      
        }

        return redirect('/login')->with('status', 'Email/password wrong!');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->intended('/');
    }
}
