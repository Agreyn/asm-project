 @extends('home-admin.layouts.main')

 @section('content')
   <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Aspirasi</h1>
      </div>
      <form class="row" action="/admin/aspirasi-edit/{{ $aspirasi->slug }}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="col-md-6 mb-2">
            <label for="judul_laporan" class="form-label">Judul Laporan *</label>
            <input type="text" class="form-control" id="judul_laporan" value="{{ $aspirasi->judul }}" readonly>
         </div>
         <div class="col-md-6 mb-2">
            <label for="alamat" class="form-label">Alamat Asal Pelapor *</label>
            <input type="text" class="form-control" id="alamat" value="{{ $aspirasi->alamat }}" readonly>
         </div>

         <div class="col-md-6 mb-2">
            <label for="laporan" class="form-label">Laporan *</label>
            <select class="form-select" aria-label=".form-select-lg example" name="status">
               <option value="{{ $aspirasi->status }}">{{ $aspirasi->status }}</option>
               <option value="DIVERIFIKASI">DIVERIFIKASI</option>
               <option value="PROSES">PROSES</option>
               <option value="SELESAI">SELESAI</option>
            </select>
         </div>
         <div class="row my-3">
            @foreach ($aspirasi->image as $image)
            <div class="card m-2" style="width: 18rem;">
               <img src="{{ asset($image->path) }}" class="card-img-top" alt="dprd provinsi">
            </div>
             @endforeach
         </div>          
         <div class="d-grid gap-2 mt-5">
           <button class="btn btn-primary fw-bold" type="submit">Update Aspirasi</button>
         </div>
      </form>
   </main>

  @endsection  