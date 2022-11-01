@extends('layouts.main')

@section('content')
    <main class="container my-3">
      <div class="row">
         <p>{{ $posts->judul }}</p>
         <p>{{ $posts->body }}</p>
      </div>
   </main>
@endsection