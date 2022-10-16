@extends('layouts.main')

@section('content')
     <main class="container pt-4">
      <div class="p-5 mb-4 bg-light rounded-4 shadow-sm">
         <header class="pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">Cara Pegajuan Aspirasi</span>
            </a>
         </header>
         <div class="container pt-3">
            <ol class="list-group list-group-numbered">
               <li class="mb-3 h-5">Pertama, klik <button class="btn btn-sm btn-success" disabled>Login</button> pada halaman Home</li>
               <li class="mb-3 h-5">Kemudian masukan <span class="fw-bold">Email</span> dan  <span class="fw-bold">Password</span> yang anda daftarkan pada website  <span class="fw-bold">ASM SUL-SEL</span>.</li>
               <li class="mb-3 h-5">Jika belum mendaftar klik <span class="text-primary fw-bold">Daftar akun</span> pada halaman login kemudian masukkan data-data yang diminta pada form Registrasi</li>
               <li class="mb-3 h-5">Setelah data-data yang diminta diisi klik <button class="btn btn-sm btn-primary" disabled>Submit</button> pada halaman registrasi</li>
               <li class="mb-3 h-5">Kemudian sistem akan mendirect ke halaman login kemudian isi Email dan Password kemudian klik <button class="btn btn-sm btn-primary" disabled>Sign in</button></li>
               <li class="mb-3 h-5">Kemudian jika email dan password benar sistem akan menapilkan halaman home, pada halaman home klik <i class="bi bi-envelope-paper-fill"></i>  <span class="fw-bold">Aspirasi</span></li>
                  <ul>
                     <li class="mb-2">Pada Form Pertama isi dengan judul laporan atau judul aspirasi</li>
                     <li class="mb-2">Kemudian, form kedua Masukkan Alamat dari tempat atau lokasi yang dilaporkan</li>
                     <li class="mb-2">Kemudian, form ketiga Masukkan isi laporan yang dapat berupa alasan pegajuan aspirasi</li>
                     <li class="mb-2">Kemudian, form yang keempat masukkkan file berupa gambar-gambar yang dapat dijadikan sebagai alat pendukung dalam pegajuan aspirasi</li>
                     <li class="mb-2">Kemudian, Klik  <button class="btn btn-sm btn-primary" disabled>Submit Aspirasi</button></li>
                  </ul>

               <li class="mb-3 h-5">Kemudian jika email dan passwordnya benar sistem akan menapilkan home, pada halaman home klik menu Aspirasi</li>
            </ol>
         </div>
      </div>
   </main>
@endsection