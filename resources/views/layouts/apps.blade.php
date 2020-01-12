<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WORLD PICTURE</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('css/app.css')}}" rel="stylesheet" />

    <link href="{{asset('css/all.css')}}" rel="stylesheet" />

  <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/">WORLD PICTURES</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">


        
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">A Propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/faune">Animaux</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/architecture">Architechture</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/oser">Oser</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/nature">Nature</a>
          </li>

          <li class="nav-item">
           @can('admin') <a class="nav-link js-scroll-trigger" href="/image">espace admin</a>@endcan
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        @yield('content')
      </div>
    </div>
  </header>

  <!-- About Section -->


  <!-- Projects Section -->
 
   

  <!-- Contact Section -->
 

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy;MOUHAMED WEBDISIGNER 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>
