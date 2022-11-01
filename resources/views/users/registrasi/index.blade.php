<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <title>{{ $title }}</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form-validation.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img src="{{ asset('img-bg/ss.png') }}" alt="" width="72">
      <h2>Registrasi form</h2>
    </div>
    @if(session('status'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('status') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="row g-5">
      <div class="col-md-12">
        <form class="needs-validation" action="/registrasi" method="post" novalidate>
        @csrf
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="nik" class="form-label">NIK *</label>
              <input type="text" class="form-control" id="nik" value="{{ old('nik') }}" name="nik" required>
              <div class="invalid-feedback">
                NIK is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="nama_lengkap" class="form-label">Nama Lengkap *</label>
              <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required>
              <div class="invalid-feedback">
                full name is required.
              </div>
            </div>

            <div class="col-sm-6">
                <label for="username" class="form-label">Username *</label>
                <input type="username" class="form-control" id="username" name="username" value="{{ old('username') }}" required>
                <div class="invalid-feedback">
                  your username address is required.
                </div>
            </div>

            <div class="col-md-6">
              <label for="telp" class="form-label">Telp *</label>
              <input type="number" class="form-control" id="telp" value="{{ old('telp') }}" name="telp" required>
              <div class="invalid-feedback">
                phone is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="tmp_lahir" class="form-label">Tempat lahir *</label>
              <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="{{ old('tmp_lahir') }}" required>
              <div class="invalid-feedback">
               your address is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="tanggal_lahir" class="form-label">Tangal Lahir *</label>
              <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
              <div class="invalid-feedback">
                birthday is required
              </div>
            </div>


            <div class="col-md-6">
              <label for="jenis_kelamin" class="form-label">Jenis Kelamin *</label>
              <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="{{ old('jenis_kelamin') }}">{{ old('jenis_kelamin') }}</option>
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid Gender.
              </div>
            </div>

            <div class="col-sm-6">
                <label for="pekerjaan" class="form-label">Pekerjaan *</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}" required>
                <div class="invalid-feedback">
                  your job is required.
                </div>
            </div>

            <div class="col-sm-6">
                <label for="password" class="form-label">Password *</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div class="invalid-feedback">
                  password is required
                </div>
              </div>
            <div class="col-sm-6">
                <label for="password2" class="form-label">Konfirmasi password *</label>
                <input type="password" class="form-control" id="password2" name="password2" required>
                <div class="invalid-feedback">
                  password is required.
                </div>
              </div>
          </div>

          <button class="w-100 btn btn-primary mt-5" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-3 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; KKL-UNDIPA 2022 - {{ date('Y') }}</p>
  </footer>
</div>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/form-validation.js') }}"></script>
  </body>
</html>
