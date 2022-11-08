<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;

class AdminAspirasiController extends Controller
{
    public function index()
    {
        return view('home-admin.dashboard.index', [
            'title' => 'Dashboard',
            'aspirasis' => Aspirasi::all(),
        ]);
    }

    public function showAll()
    {
        return view('home-admin.aspirasi-admin.index', [
            'title' => 'Aspirasi All Data',
            'aspirasis' => Aspirasi::all(),
        ]);
    }

    public function show()
    {
        return view('home-admin.aspirasi-admin.show', [
            'title' => 'Aspirasi All Data',
            'aspirasis' => Aspirasi::all(),
        ]);
    }

    public function edit(Aspirasi $aspirasi)
    {
        return view('home-admin.aspirasi-admin.edit', [
            'title' => 'Apirasi Update',
            'aspirasi' => $aspirasi,
        ]);
    }
}
