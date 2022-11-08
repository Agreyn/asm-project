@extends('home-user.layouts.main')

@section('content')

   <main class="container pt-4">
      <div class="p-5 mb-4 bg-light rounded-4 shadow-sm">
         <header class="pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">HI PATRIK WILLIAM,  WELCOME TO WEBSITE PEGAJUAN  ASPIRASI MASYARAKAT SULAWESI SELATAN</span>
            </a>
         </header>
         <div class="container pt-3">
            <p class="col-md-10 fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         </div>
      </div>
      <div class="row">
      @foreach ($aspirasis as $aspirasi)
         <div class="card m-2" style="width: 22rem;">
            <img src="" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">{{ $aspirasi->judul }}</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="/aspirasi-masuk/{{ $aspirasi->slug }}" class="btn btn-warning btn-sm">Go somewhere</a>
            </div>
         </div>
      @endforeach
      </div>
   </main>

@endsection

