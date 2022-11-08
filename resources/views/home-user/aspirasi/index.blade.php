@extends('home-user.layouts.main')

@section('content')
   <div class="container">
      @if (session('status'))
          <div class="col-md-12 mb-2 mt-3">
           <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
         </div>
      @endif
         
      <p class="h3 text-center my-3">Aspirasi Form</p>
      <form class="row" action="/aspirasi" method="post" enctype="multipart/form-data">
         @csrf
         <div class="col-md-6 mb-2">
            <label for="judul_laporan" class="form-label">Judul Laporan *</label>
            <input type="text" class="form-control" id="judul_laporan" name="judul" value="{{ old('judul') }}" required>
         </div>
         <div class="col-md-6 mb-2">
            <label for="alamat" class="form-label">Alamat Asal Pelapor *</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
         </div>

         <div class="col-md-12 mb-2">
            <label for="laporan" class="form-label">Laporan *</label>
            <textarea class="form-control" id="laporan" name="body" required>{{ old('body') }}</textarea>
         </div>

          <div class="col-md-12 mb-2">
            <label for="image" class="form-label">Image *</label>
            <input type="file" class="form-control" id="image" name="img[]" multiple="true">
         </div>
          <div class="d-grid gap-2 mt-5">
           <button class="btn btn-primary fw-bold" type="submit">Submit Aspirasi</button>
         </div>
      </form>
   </div>
@endsection