@extends('layouts.main')

@section('content')
    <main class="container">
      <div class="text-center">
         <img src="img-bg/ss.png" class="mt-4" alt="" style="max-width: 160px;">
         <div class="title mt-3">
            <h5 class="fw-bold">DEWAN PERWAKILAN RAKYAT DAERAH</h5>
            <h5 class="fw-bold">PROVINSI SULAWESI SELATAN</h5>
         </div>

         <div class="button-aspirasi">
            <a href="/aspirasi-masuk" class="btn btn-primary px-4 fw-bold my-3">Aspirasi</a>
         </div>

         <div class="row mt-4">
            <div class="col-md-3">
                  <div class="card text-dark bg-white mx-3 mb-3" style="max-width: 18rem;">
                     <div class="card-header">Jumlah Aspirasi</div>
                        <div class="card-body">
                        <img src="img-bg/icon_1.png" class="opacity-50" style="max-width: 50px" alt="">
                        <p class="card-text mt-2 fw-bold">1000</p>
                     </div>
                  </div>
            </div>
            <div class="col-md-3">
                  <div class="card text-dark bg-white mx-3 mb-3" style="max-width: 18rem;">
                     <div class="card-header">Aspirasi Diproses</div>
                        <div class="card-body">
                        <img src="img-bg/icon_2.png" class="opacity-50" style="max-width: 50px" alt="">
                        <p class="card-text mt-2 fw-bold">1000</p>
                     </div>
                  </div>
            </div>
            <div class="col-md-3">
                  <div class="card text-dark bg-white mx-3" style="max-width: 18rem;">
                     <div class="card-header">Aspirasi Selesai</div>
                        <div class="card-body">
                        <img src="img-bg/icon_3.png" class="opacity-50" style="max-width: 50px" alt="">
                        <p class="card-text mt-2 fw-bold">1000</p>
                     </div>
                  </div>
            </div>
            <div class="col-md-3">
                  <div class="card text-dark bg-white mx-3 mb-3" style="max-width: 18rem;">
                     <div class="card-header">Jumlah View</div>
                        <div class="card-body">
                        <img src="img-bg/icon_4.png" class="opacity-50" style="max-width: 50px" alt="">
                        <p class="card-text mt-2 fw-bold">1000</p>
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </main>
@endsection