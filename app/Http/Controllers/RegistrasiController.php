<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('users.registrasi.index', [
            'title' => 'Registrasi User'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $validateData = $request->validate([
                'nik' => 'required',
                'nama_lengkap' => 'required',
                'username' => 'required|unique:users|min:5|max:15',
                'jenis_kelamin' => 'required',
                'tanggal_lahir' => 'required',
                'tmp_lahir' => 'required',
                'pekerjaan' => 'required',
                'telp' => 'required|unique:users|min:12|max:12',
                'password' => 'required|min:8',
            ]);

            if($validateData['password'] !== $request['password2']){
                return redirect('/registrasi/create')->with('status', 'no sycn');
            }

            $validateData['slug'] = Hash::make($validateData['nama_lengkap']);
            $validateData['slug'] = substr($validateData['slug'], -5);
             
            $checkAge = (int)date('Y') - (int)$validateData['tanggal_lahir'];

            if($checkAge < 17){
                return redirect('/registrasi/create')->with('status', 'Umur anda belum Mencukupi!');
            }
            $validateData['password'] = Hash::make($validateData{'password'});


            User::create($validateData);
            return redirect('/login');

        }catch(Exception $e){
            abort(403, $e->getMessage);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
