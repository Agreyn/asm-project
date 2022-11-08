@extends('layouts.main')

@section('content')
    <main class="container my-3">
      <div class="row">
         <p><a href="/home" ><i class="bi bi-arrow-bar-left"></i></a>{{ $posts->judul }}</p>
         <p>{{\Carbon\Carbon::parse($posts->tgl_pengaduan)->diffForHumans() }}</span>
         <p>{{ $posts->body }}</p>
         @foreach($posts->image as $img)
            <div class="card m-2" style="width: 24rem;">
               <img src="{{ asset($img->path) }}" class="card-img-top" alt="">
            </div>
         @endforeach
      </div>
   </main>
@endsection

