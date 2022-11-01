<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;
use App\Models\User;

class PostAspirasiController extends Controller
{
    public function index(){
        return view('aspirasi.index', [
            'title' => 'Aspirasi',
            'aspirasis' => Aspirasi::all(),
        ]);
    }

    public function show(Aspirasi $aspirasi){
        return view('aspirasi.show', [
            'title' => 'Aspirasi show',
            'posts' => $aspirasi,
        ]);
    }
}
