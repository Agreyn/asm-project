<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Checkout example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

    
    <!-- Custom styles for this template -->
    <link href="css/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="img-bg/ss.png" alt="" width="72">
      <h2>Registrasi form</h2>
    </div>

    <div class="row g-5">
      <div class="col-md-12">
        <form class="needs-validation" novalidate action="/registrasi" method="post">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="nik" class="form-label">NIK *</label>
              <input type="text" class="form-control" id="nik" name="nik" value="" required>
              <div class="invalid-feedback">
                NIK is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="nama_lengkap" class="form-label">Nama Lengkap *</label>
              <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="" required>
              <div class="invalid-feedback">
                full name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="alamat" class="form-label">Alamat *</label>
              <input type="text" class="form-control" id="alamat" name="alamat" value="" required>
              <div class="invalid-feedback">
               your address is required.
              </div>
            </div>


            <div class="col-sm-6">
              <label for="tanggal_lahir" class="form-label">Tangal Lahir *</label>
              <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="" required>
              <div class="invalid-feedback">
                birthday is required
              </div>
            </div>


            <div class="col-md-6">
              <label for="jenis_kelamin" class="form-label">Jenis Kelamin *</label>
              <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="">Choose...</option>
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid Gender.
              </div>
            </div>

            <div class="col-md-6">
              <label for="telp" class="form-label">Telp *</label>
              <input type="number" class="form-control" id="telp" name="telp" value="" required>
              <div class="invalid-feedback">
                phone is required.
              </div>
            </div>

            <div class="col-sm-6">
                <label for="pekerjaan" class="form-label">Pekerjaan *</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="" required>
                <div class="invalid-feedback">
                  your job is required.
                </div>
              </div>

            <div class="col-sm-6">
                <label for="email" class="form-label">Email *</label>
                <input type="email" class="form-control" id="email" name="email" value="" required>
                <div class="invalid-feedback">
                  your email address is required.
                </div>
              </div>

            <div class="col-sm-6">
                <label for="password" class="form-label">Password *</label>
                <input type="password" class="form-control" id="password" name="password" value="" required>
                <div class="invalid-feedback">
                  password is required
                </div>
              </div>
            <div class="col-sm-6">
                <label for="password2" class="form-label">Konfirmasi password *</label>
                <input type="password" class="form-control" id="password2" name="password2" value="" required>
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="js/form-validation.js"></script>
  </body>
</html>
