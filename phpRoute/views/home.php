<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="/views/assets/css/boostrap/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/views/assets/css/font-awasome/css/all.css">
  <!-- css -->
  <link rel="stylesheet" href="/views/assets/css/home.css">
  <link rel="stylesheet" href="/views/assets/css/base.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand text-light" href="index.html"><img src="/views/assets/images/icons/logo.png" alt="logo" width="200px"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-light" href="<?= route_url("attendance","home")?>" aria-current="page">
                <i class="fa fa-home" aria-hidden="true"></i>HOME
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?= route_url("attendance","about")?>">ABOUT US</a>
            </li>
          </ul>
          
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="<?= route_url("attendance","login")?>">
                <i class="fa fa-user-plus" aria-hidden="true"></i>
                LOGIN
              </a>
            </li>
            <li class="nav-item"> <a class="nav-link text-light" href="<?= route_url("attendance","registration")?>">REGISTER</a></li>
          </ul>
        </div>
      </div>
    </nav>
<!-- loader animation -->
  <div class="loader bg-light">
  <i class="fa fa-spinner spinner "> </i>

</div>
 <!-- loader animination -->
  <!-- Hero Section -->
  <section class="hero-section d-flex align-items-center">
    <div class="container text-center p-5 mt-5">
      <h1 class="display-4 mb-4 fw-bold animate-fade">Megamindset in Number</h1>
      <div class="d-flex gap-3 justify-content-center row">
        <div class="card col-lg-4 col-md-4 col-sm-12 number animate-slide-up delay-1">
          <i class="fa fa-users fa-2x" aria-hidden="true"></i>
          <div class="card-body">
            <h4 class="card-title">176</h4>
            <p class="card-text"><b>STUDENT</b></p>
          </div>
        </div>
        <div class="card col-lg-4 col-md-4 col-sm-12 number animate-slide-up delay-1">
          <i class="fas fa-folder-open fa-2x    "></i>
          <div class="card-body">
            <h4 class="card-title">123</h4>
            <p class="card-text"><b>LEARNING PROGRAMMING</b></p>
          </div>
        </div>
        <div class="card col-lg-4 col-md-4 col-sm-12 number animate-slide-up delay-1">
          <i class="fas fa-hotel fa-2x    "></i>
          <div class="card-body">
            <h4 class="card-title">2</h4>
            <p class="card-text"><b>BRANCES</b></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container class-news">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-1 mt-5 animate-scale delay-2">
          <div class="card text-center news">
            <div class="card-body">
              <h3 class="card-title">Class News</h3>
              <p class="card-text">
                All student are required to mark their attendance
              </p>
              <button class="readmore-btn">Read more</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-1 mt-5 animate-scale delay-2">
          <div class="card new2">
            <div class="card-body">
              <h3 class="card-title">Opening <br> Hours</h3>
              <p class="card-text">
              <ul>
                <li>Monday - Friday: 9:00am - 4:00pm</li>
                <hr>
                <li>Saturday: Closed</li>
                <hr>
                <li>Sunday: Closed</li>
              </ul>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 animate-scale delay-2">
          <div class="card new3">
            <div class="card-body">
              <h3 class="card-title">Why You Should Mark Attendances</h3>
              <p class="card-text">
              <ul class="list-unstyled">
                <li class="mb-3"><i class="fas fa-check-circle text-white me-2"></i> Tracking and Accountability</li>
                <li class="mb-3"><i class="fas fa-check-circle text-white me-2"></i> Performance and Progress Monitoring
                </li>
                <li class="mb-3"><i class="fas fa-check-circle text-white me-2"></i> Allocation and Planning</li>
                <li class="mb-3"><i class="fas fa-check-circle text-white me-2"></i> Safety and Security</li>
              </ul>
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <!-- REVIEWS -->
  <section class="bg-light py-5 mt-5">
    <div class="container text-center mt-5">
      <div class="row">
        <div class="col-12 text-center">
          <h6 class="fea"><i></i></h6>
          <h1 class="res"></h1>
        </div>

        <div id="carouselExample" class="carousel slide reviews-carousel m-auto">
          <div class="carousel-inner">

            <div class="carousel-item active">
              <div class="review p-5">
                <i class="fas fa-headset fa-4x    "></i>
                <h3 class="my-4 ">Ask a Question</h3>
                <p>Not sure what you need? Ask our instructor</p>
              </div>
            </div>

            <div class="carousel-item ">
              <div class="review p-5">
                <i class="fas fa-user-plus fa-4x   "></i>
                <h3 class="my-4 ">Join Today</h3>
                <p>Sign up now</p>
              </div>
            </div>

          </div>

          <button class="carousel-control-prev " type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="fa fa-chevron-left text-primary fa-2x" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="fa fa-chevron-right text-primary fa-2x" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- //REVIEWS -->

  <!-- Footer -->
  <section class="bg-brand text-white py-5 mt-5">
    <div class="container text-center">
      <h2 class="mb-4">Contact Us</h2>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <p class="mb-3">
            <i class="fas fa-map-marker-alt me-2"></i>Opposite Tete Junction
          </p>
          <p class="mb-3">
            <i class="fas fa-phone me-2"></i>+234 000 000 0000
          </p>
          <p class="mb-4">
            <i class="fas fa-envelope me-2"></i>megamindset@gmail.com
          </p>
          <div class="social-links">
            <a href="#" class="text-white mx-3">
              <i class="fab fa-facebook fa-2x"></i>
            </a>
            <a href="#" class="text-white mx-3">
              <i class="fab fa-twitter fa-2x"></i>
            </a>
            <a href="#" class="text-white mx-3">
              <i class="fab fa-linkedin fa-2x"></i>
            </a>
            <a href="#" class="text-white mx-3">
              <i class="fab fa-github fa-2x"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="primary-bg-color text-white py-3">
    <div class="container text-center">
      <p class="mb-0">&copy; 2025 Megamindset. All rights reserved.</p>
    </div>
  </footer>


  <!-- Bootstrap JS -->
  <script src="/views/assets/js/bootstrap.js"></script>
</body>

</html>