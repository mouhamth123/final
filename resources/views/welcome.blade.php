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
      <a class="navbar-brand js-scroll-trigger" href="#page-top">WORLD PICTURES</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">


        
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/all">All</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/faune">Animals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/architecture">Architechture</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/other">Other</a>
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
        <h1 class="mx-auto my-0 text-uppercase">WORLD PICTURES</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">
EXPLORE THE WORLD OF IMAGES.</h2>
        <a href="/login" class="btn btn-primary js-scroll-trigger">Member area</a>
        <a href="/register" class="btn btn-primary js-scroll-trigger">
register</a>
      </div>
    </div>
  </header>

  <!-- About Section -->
@yield('content')

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
         <a href="/nature"> <img class="img-fluid mb-3 mb-lg-0" src="img/bg-masthead.jpg" alt=""></a>
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>nature</h4>
            <p class="text-black-50 mb-0">
extraordinary nature pictures</p>
          </div>
        </div>
      </div>

      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <a href="/architecture"><img class="img-fluid" src="img/demo-image-03.jpg" alt=""></a>
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">architecture</h4>
                <p class="mb-0 text-white-50">
here is an example of this category among many others.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>
      

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
         <a href="/faune"> <img class="img-fluid" src="img/kim-becker-0JKLiPcjJVc-unsplash.jpg" alt=""></a>
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Animals</h4>
                <p class="mb-0 text-white-50">

World Picture offers different images of this category!</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>
     
            <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
         <a href="/oser"><img class="img-fluid" src="img/00.GIF" alt=""></a>
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Other</h4>
                <p class="mb-0 text-white-50">
this category presents various images as extraordinary of each other</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>
<br>
      <!-- Project Two Row -->
     

  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">SOUSCRIRE POUR RECEVOIR LES NEWS!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Entrer votre adresse mail...">
            <button type="submit" class="btn btn-primary mx-auto">SOUSCRIRE</button>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Addresse</h4>
              <hr class="my-4">
              <div class="small text-black-50">PARCELLES ASSAINIES UNITÉ 1 VILLA 124</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">ametho3575@gmail.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">TÉLÉPHONE</h4>
              <hr class="my-4">
              <div class="small text-black-50">+221 77 809 76 18</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section>

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
