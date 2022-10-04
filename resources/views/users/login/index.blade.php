@extends('users.layouts.main')

@section('content')
   <main class="form-signin">
      <form action="/login" method="post">
         @csrf
         <img class="mb-3" src="img-bg/ss.png" alt="" width="72">
         <h1 class="h5 mb-4 fw-bols">Login Form</h1>

         <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
         </div>

         <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
         </div>

         <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

         <div class="form-floating my-2">
            <a href="/registrasi" class="text-decoration-none fw-bold">Daftar Akun</a>
         </div>
         <p class="mt-5 mb-3 text-muted">&copy; KKL-UNDIPA 2022 - {{ date('Y') }}</p>
      </form>
   </main>
@endsection