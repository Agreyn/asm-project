<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Aspirasi;
use App\Models\Image;

class AspirasiController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home-user.aspirasi.index', [
            'title' => 'aspirasi'
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
        $aspirasis = Aspirasi::all();

        try {
            $validateData = $request->validate([
                'judul' => 'required|max:255',
                'alamat' => 'required',
                'body' => 'required', 
            ]);

            foreach($aspirasis as $aspirasi){
                if($validateData['judul'] == $aspirasi->judul && $validateData['alamat'] == $aspirasi->alamat){
                    return redirect('/aspirasi/create')->with('status', 'Data telah ada');
                }
            }

            $validateData['user_id'] = Auth::user()->id;

             Aspirasi::create($validateData);

            $validateImg = $request->validate([
                'img' => 'required|max:2045'
            ]);

            if($request->hasFile('img')){
                $files = $request->file('img');

                foreach($files as $file){
                    $name = time();
                    $ext = $file->getClientOriginalExtension();
                    $newName = $name . '.' . $ext;

                    Storage::putFileAs('public', $file , $newName);

                    $data = [
                        'path' => 'storage/'. $newName,
                        'aspirasi_id' => Auth::user()->id,
                    ];
                    Image::create($data);
                }

            }
            
            return redirect()->intended('home');

        } catch (Exception $e) {
            abort(403, $e->getMessage);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('home-user.aspirasi-all.index', [
            'title' => 'Aspirasi-all',
            'aspirasi' => Aspirasi::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
