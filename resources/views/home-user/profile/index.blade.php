@extends('home-user.layouts.main')

@section('content')
   <main class="container">
      <div class="d-flex justify-content-center my-4">
         <img src="img-bg/ss.png" alt="" width="72">
      </div>
      <p class="text-center h3">Profile</p>
      <div class="d-flex justify-content-center my-4">
         <img src="img-bg/patrik.jpg" alt="" width="100">
      </div>
      <div class="row">
         <div class="col-md-4 text-center mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap *</label>
         </div>
         <div class="col-md-8 mb-3">
            <input type="text" class="form-control" id="nama_lengkap" value="patrik william" name="nama_lengkap" readonly>
         </div>
         <div class="col-md-4 text-center mb-3">
            <label for="nik" class="form-label">NIK *</label>
         </div>
         <div class="col-md-8 mb-3">
            <input type="number" class="form-control" id="nik" value="00990424020424242" name="nik" readonly>
         </div>
         <div class="col-md-4 text-center mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir *</label>
         </div>
         <div class="col-md-8 mb-3">
            <input type="text" class="form-control" id="tanggal_lahir" value="11-05-2001" name="tanggal_lahir" readonly>
         </div>
         <div class="col-md-4 text-center mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin *</label>
         </div>
         <div class="col-md-8 mb-3">
            <input type="text" class="form-control" id="jenis_kelamin" value="Pria" name="jenis_kelamin" readonly>
         </div>
         <div class="col-md-4 text-center mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan *</label>
         </div>
         <div class="col-md-8 mb-3">
            <input type="text" class="form-control" id="pekerjaan" value="Mahasiswa" name="pekerjaan" readonly>
         </div>
         <div class="col-md-4 text-center mb-3">
            <label for="telp" class="form-label">No. Telp *</label>
         </div>
         <div class="col-md-8 mb-3">
            <input type="number" class="form-control" id="telp" value="082349393066" name="telp" readonly>
         </div>
         <div class="col-md-4 text-center mb-3">
            <label for="email" class="form-label">Email *</label>
         </div>
         <div class="col-md-8 mb-3">
            <input type="email" class="form-control" id="email" value="patrikwilliam001@gmail.com" name="email" readonly>
         </div>
      </div>
     <div class="d-grid gap-2 my-4 text-end d-md-block">
         <button class="btn btn-primary btn-sm px-4" type="submit">Update Profile *</button>
         <a href="/home" class="btn btn-danger btn-sm px-4">Cancel</a>
      </div>
   </main>
@endsection