<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Ruang aspirasi masyarakat</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">

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
  <body class="text-center">
    
    <main class="form-signin">
      <img class="mb-3" src="img-bg/ss.png" alt="" width="72">
      <h1 class="h5 mb-4 fw-bols">Login Form</h1>

      @if(session('status'))
         <div class="col-md-12 mb-2 mt-3">
           <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
         </div>
      @endif
      <form action="/login" method="post">
        @csrf

         <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="username" value="{{ old('email') }}" placeholder="Username" required>
            <label for="floatingInput">Username</label>
         </div>

         <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
         </div>

         <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

         <div class="form-floating my-2">
            <a href="/registrasi/create" class="text-decoration-none fw-bold">Daftar Akun</a>
         </div>
         <p class="mt-5 mb-3 text-muted">&copy; KKL-UNDIPA 2022 - {{ date('Y') }}</p>
      </form>
    </main> 

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> 
  </body>
</html>
