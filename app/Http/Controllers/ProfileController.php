<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(){
        return view('home-user.profile.index', [
            'title' => 'Profile',
        ]);
    }

    public function show(User $user){
        return view('home-user.profile.index', [
            'title' => 'Profile',
            'user' => $user,
        ]);
    }
}
