@extends('layouts.main')

@section('content')
    <main class="container my-3">
      <div class="row">
      <div class="col-md-9">
         <h4>{{ $posts->judul }}</h4>
      </div>
      <div class="col-md-3">
         <span>Status Aspirasi <strong>{{ $posts->status }}</strong></span><br>
         <span>Waktu Update <strong>{{\Carbon\Carbon::parse($posts->tgl_pengaduan)->diffForHumans() }}</strong></span>
         <hr>
      </div>
         <p>{!! $posts->body !!}</p>
         @foreach($posts->image as $img)
            <div class="card m-2" style="width: 24rem;">
               <img src="{{ asset($img->path) }}" class="card-img-top" alt="">
            </div>
         @endforeach
      </div>
   </main>
@endsection

