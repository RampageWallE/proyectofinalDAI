<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Cover Template · Bootstrap v5.0</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <!-- Bootstrap core CSS -->


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

    /*
 * Globals
 */


    /* Custom default button */
    .btn-secondary,
    .btn-secondary:hover,
    .btn-secondary:focus {
      color: #333;
      text-shadow: none;
      /* Prevent inheritance from `body` */
    }


    /*
 * Base structure
 */

    body {
      text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
      box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
    }

    .cover-container {
      max-width: 42em;
    }


    /*
 * Header
 */

    .nav-masthead .nav-link {
      padding: .25rem 0;
      font-weight: 700;
      color: rgba(255, 255, 255, .5);
      background-color: transparent;
      border-bottom: .25rem solid transparent;
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
      border-bottom-color: rgba(255, 255, 255, .25);
    }

    .nav-masthead .nav-link+.nav-link {
      margin-left: 1rem;
    }

    .nav-masthead .active {
      color: #fff;
      border-bottom-color: #fff;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-danger">
  

  <!-- <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column"> -->

  <div class="container col-xl-12 d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h3 class="float-md-start mb-0">RESERVA DE RESTAURANTES</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a href="#" class="nav-link "  href="#">WEBIWABO</a>
          <a href="#" class="nav-link "  href="#">WEBIWABO</a>



          @if (Route::has('login'))
            @auth
            <a href="{{ url('/home') }}" class="nav-link active"  href="#">Home</a>
            @else
            <a href="{{ route('login') }}" class="nav-link" href="#">Log in</a>

            @if (Route::has('register'))
            <a  href="{{ route('register') }}" class="nav-link" href="#">Register</a>
            @endif
            @endauth
          @endif
        </nav>
      </div>
    </header>

    <body>
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            
            <img href=('../resources/pictures/FotoPiero.jpg') style="width: 200px; height: 640px; border: 2px solid red" class="d-block w-100" alt="Image"/>
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img href="..." style="width: 200px; height: 640px; border: 2px solid red" class="d-block w-100" alt="Image"/>
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="..." style="width: 200px; height: 640px; border: 2px solid red" class="d-block w-100" alt="Image"/>
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>




      </div>
    </body>

    <!-- <main class="px-3">
      <h1>Galeria de Fotos.</h1>
      <p class="lead">Esta es mi galeria de fotos para ingresar presiona Login y si eres un usuario nuevo presiona Register.</p>
      <p class="lead">
        Bienvenido
      </p>
    </main> -->

    <!-- <div class="container col-xl-12 d-flex w-100 h-100 p-3 mx-auto flex-column"> -->
  
    <footer class="footer-10 text-white-50">
      <!-- <p>Galeria de Fotos <a href="https://getbootstrap.com/" class="text-white">Laravel</a>, by <a href="https://twitter.com/mdo" class="text-white">@TECSUP</a>.</p> -->
      <p>Proyecto integrador made by <a href="https://www.tecsup.edu.pe/" class="text-white">TECSUP</a>.</p>
    </footer>
  </div>
  



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>