@extends('layouts.main')

@section('content')
    <main class="container my-3">
      <div class="row">
      @foreach ($aspirasis as $aspirasi)
         <div class="card col-md-4 m-2" style="width: 16rem;">
            <div class="card-body">
               <h5 class="card-title fw-bold">{{ $aspirasi->judul }}</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="/aspirasi-masuk/{{ $aspirasi->status }}" class="">More...</a>
            </div>
         </div>
      @endforeach
      </div>
   </main>
@endsection