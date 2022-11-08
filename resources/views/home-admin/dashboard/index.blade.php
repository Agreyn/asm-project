 @extends('home-admin.layouts.main')

 @section('content')
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama</th>
              <th scope="col">Terdaftar</th>
              <th scope="col">Aspirasi</th>
              <th scope="col">Laporan</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($aspirasis as $aspirasi)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $aspirasi->user->nama_lengkap }}</td>
                <td>{{ $aspirasi->tgl_pengaduan }}</td>
                <td>{{ $aspirasi->judul }}</td>
                <td>{{ $aspirasi->body }}</td>
                <td>{{ $aspirasi->status }}</td>
              </tr>    
            @endforeach
          </tbody>
        </table>
      </div>
    </main>

  @endsection
