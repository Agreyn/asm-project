  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome, Ruang Aspirasi Masyarakat</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-fixed/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      body {
         min-height: 75rem;
         padding-top: 4.5rem;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (max-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }

        .title{
            font-size: 11px;
        }
      }
    </style>
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">ASM SUL-SEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ms-auto mb-2 mb-md-0">
        <li class="nav-item me-3">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <hr class="mt-1 bg-light">
        <li class="nav-item me-3">
          <a class="nav-link active" href="/cara-pegajuan">Cara-Pengajuan</a>
        </li>
        <hr class="mt-1 bg-light">
        <li class="nav-item">
          <a href="/login" class="nav-link px-4 active btn btn-sm btn-success">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <div class="content">
    @yield('content')
  </div>
 
   <script src="htztps://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
  </body>
</html>
