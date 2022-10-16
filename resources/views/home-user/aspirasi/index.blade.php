@extends('home-user.layouts.main')

@section('content')
   <div class="container">
      <p class="h3 text-center my-3">Aspirasi Form</p>
      <form class="row needs-validation" action="/aspirasi" method="POST" enctype="multipart/form-data" novalidate>
         <div class="col-md-6 mb-2">
            <label for="judul_laporan" class="form-label">Judul Laporan *</label>
            <input autocomplete="off" type="text" class="form-control" id="judul_laporan" required>
            <div class="valid-feedback">
               judul laporan is required
            </div>
         </div>
         <div class="col-md-6 mb-2">
            <label for="alamat" class="form-label">Alamat Asal Pelapor *</label>
            <input autocomplete="off" type="text" class="form-control" id="alamat" required>
            <div class="valid-feedback">
               alamat is required
            </div>
         </div>

         <div class="col-md-12 mb-2">
            <label for="laporan" class="form-label">Laporan *</label>
            <textarea class="form-control" id="laporan" name="laporan" required></textarea>
            <div class="invalid-feedback">
               Please enter a message in the textarea.
            </div>
         </div>

          <div class="col-md-12 mb-2">
            <label for="image" class="form-label">Image *</label>
            <input autocomplete="off" type="file" class="form-control" id="image" name="image[]" multiple="true" required>
            <div class="valid-feedback">
               image is required
            </div>
         </div>
          <div class="d-grid gap-2 mt-5">
           <button class="btn btn-primary fw-bold" type="submit">Submit Aspirasi</button>
         </div>
      </form>
   </div>
@endsection