@extends('home-user.layouts.main')

@section('content')

   <main class="container pt-4">
      <div class="p-5 mb-4 bg-light rounded-4 shadow-sm">
         <header class="pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">Hi <strong>{{ Auth::user()->nama_lengkap }}</strong></span>
            </a>
         </header>
         <div class="container pt-3">
            <p class="col-md-10 fs-5">Selamat Datang Website Pegajuan Aspirasi Masyarakat Sulawesi Selatan</p>
         </div>
      </div>
      <div class="row">
       @foreach ($aspirasis as $aspirasi)
         <div class="card col-md-4 m-2" style="width: 22rem;">
            <div class="card-body">
               <h5 class="card-title fw-bold">{{ $aspirasi->judul }}</h5><hr>
               <p class="card-text">{{ $aspirasi->alamat }}</p>
               <a href="/aspirasi-masuk/{{ $aspirasi->slug }}" class="btn btn-info text-white fw-bold btn-sm px-4 ">More...</a>
            </div>
         </div>
      @endforeach
      </div>
   </main>

@endsection

