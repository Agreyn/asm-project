@extends('layouts.main')

@section('content')
    <main class="container my-3">
      <div class="row">
      @foreach ($aspirasis as $aspirasi)
         <div class="card col-md-4 m-2" style="width: 22rem;">
            <div class="card-body">
               <h5 class="card-title fw-bold">{{ $aspirasi->judul }}</h5>
               <p class="card-text">{{ $aspirasi->alamat }}</p>
               <a href="/aspirasi-masuk/{{ $aspirasi->slug }}" class="text-decoration-none">More...</a>
            </div>
         </div>
      @endforeach
      </div>
   </main>
@endsection
