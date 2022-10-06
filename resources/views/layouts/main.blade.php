<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jumbotron example · Bootstrap v5.1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

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
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
            <a class="navbar-brand">ASM SUL-SEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
               <li class="nav-item">
                  <a class="nav-link active me-3" aria-current="page" href="/"><i class="bi bi-house-door-fill"></i> Home</a>
               </li>

               <li class="nav-item">
                  <a class="nav-link active me-4" aria-current="page" href="/cara-pegajuan"><i class="bi bi-bar-chart-steps"></i> Cara-pegajuan</a>
               </li>
            
               <li class="nav-item">
                  <a class="btn btn-success btn-sm px-2 nav-link active" aria-current="page" href="/login"><i class="bi bi-box-arrow-right"></i> Login</a>
               </li>
               </ul>
            </div>
         </div>
      </nav>

      @yield('content')

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>
