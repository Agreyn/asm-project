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
          <th scope="col">Aspirasi</th>
          <th scope="col">Terdaftar</th>
          <th scope="col">Alamat</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($aspirasis as $aspirasi)
        <tr>
          <td>{{ $loop->index }}</td>
          <td>{{ $aspirasi->judul }}</td>
          <td>{{ $aspirasi->tgl_pengaduan }}</td>
          <td>{{ $aspirasi->alamat }}</td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <a href="/aspirasi-masuk/detail/{{ $aspirasi->id }}" class="btn btn-sm btn-success"><i class="bi bi-eye"></i></a>
              <a href="/aspirasi-masuk/edit/{{ $aspirasi->id }}" class="btn btn-sm btn-warning"><i class="bi bi-pen"></i></a>
              <form action="/aspirasi-masuk" method="post">
                <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
              </form>
            </div>
          </td>
        </tr>   
      @endforeach
      </tbody>
    </table>
  </div>
</main>

@endsection
