<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/views/assets/css/registration.css">
    <link rel="stylesheet" href="/views/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/views/assets/css/bootstrap.css.map">
    <link rel="stylesheet" href="/views/assets/css/base.css">
    <link rel="stylesheet" href="/views/assets/css/font-awasome/css/all.css">
    <link rel="stylesheet" href="/views/assets/css/index.css">
    <title>Login</title>
</head>
<body>
        <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-light fixed-top">
        <div class="container">
          <a class="navbar-brand text-light" href="<?= route_url("attendance","home")?>"><img src="/views/assets/images/icons/logo.png" alt="logo" width="200px"></a>
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
    <!-- loader  -->
      <div class="loader bg-light">
  <i class="fa fa-spinner spinner "></i>

</div>


    <!-- loader -->

    <div class="container auth-section">
        <div class="row">
            <div class="col-sm-12 col-lg-6 left-side">
                
                <div class="reg-form">
                    <h1>Login</h1>

                    <!-- warning message here -->
                    <div class="alert  d-none" role="alert">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <form action="#" onsubmit="handleLogin(event)" enctype="multipart/form-data">
                        <div class="row m-3">
                            <div class="mb-5 col-12 ">
                                <input type="text" class="form-control w-75 mx-auto h-100" id="matric" name="matric" placeholder="Matric number">
                                <div id="matricWarning" class="warning-message text-danger"></div>
                            </div>
                            <div class="mb-3 col-12">
                                <input type="password" class="form-control w-75 mx-auto" id="password" name="password" placeholder="Password">
                                <div id="passwordWarning" class="warning-message text-danger  "></div>
                            </div>
                        </div>
                        <div class="row col-12 justify-content-center">
                            <button class="btn primary-bg-color text-white w-25" > Submit</button>
                        </div>
                        <div class="row">
                            <p class="col-12">Don't have an account? <a href="<?= route_url("attendance","registration")?>">Register here</a></p>
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-6 right-side">

            </div>
        </div>
    </div>

    <script src="/views/assets/js/bootstrap.bundle.js"></script>
    <script src="/views/assets/js/bootstrap.bundle.js.map"></script>
    <script src="/views/assets/js/custom.js"></script>
</body>
</html>