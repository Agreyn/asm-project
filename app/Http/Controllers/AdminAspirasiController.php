<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;

class AdminAspirasiController extends Controller
{
    public function showAspirasi(){
        return view('home-admin.aspirasi-admin.index', [
            'title' => 'Aspirasi All Data',
            'aspirasis' => Aspirasi::all(),
        ]);
    }
}
