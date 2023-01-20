<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

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
  <body>
    
   <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 ms-4" href="/">ASM SUL-SEL</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
   </header>

   <div class="container-fluid">
      <div class="row">
         <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 ms-2 fs-6">
               <ul class="nav flex-column">
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="/admin">
                     <i class="bi bi-speedometer"></i>
                     Dashboard
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="/admin/aspirasi-masuk">
                     <i class="bi bi-envelope-paper"></i>
                     Aspirasi
                     </a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" type="button" id="user" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page">
                     <i class="bi bi-person-bounding-box"></i>
                     Account
                     </a>
                      <ol class="bg-white dropdown-menu" aria-labelledby="user">
                        <li><a class="dropdown-item" href="/admin/profile">Profile</a></li>
                        <li><a class="dropdown-item" href="/logout">Sign Out</a></li>
                     </ol>
                  </li>
               </ul>
            </div>
         </nav>

         <div class="content">
            @yield('content')
         </div>

      </div>
   </div>
   <script src="{{ asset('js/dashboard.js') }}"></script>
   <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
   <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZgxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboardjs"></script>
  </body>
</html>
