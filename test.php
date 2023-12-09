<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>WELCOME TO GYMMERZ</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-color py-5 pt-lg-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="logo-removebg-preview.png" alt="LOGO" style="height: 100px ;width: 100px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="test.php"style="color:white;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="AboutUs.html" style="color:white;">ABOUT US</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  WORKOUT 
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="HomeWorkout.php"style="color:red;">HOME WORKOUT</a></li>
                  <li><a class="dropdown-item" href="GymWorkout.php"style="color:red;">GYM WORKOUT</a></li>
                  <li><a class="dropdown-item" href="SpecialWorkout.php"style="color:red;">SPECIAL WORKOUT</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contactUs.php" tabindex="-1" aria-disabled="true">CONTACT US</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-but">
                  <a class="btn btn-outline-light" href="register.php">REGISTER</a> 
                </li>
                <li class="nav-but">
                  <a class="btn btn-outline-light" href="login.php">LOGIN</a>
                </li>
              </ul>
          </div>
        </div>
      </nav>
      <section class="bg-main bg-color hero-section">
        <div class="container">
          <div class="row mb-10">
            <div class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-item-start">
              <h1 class="text-capitalize fw-bolder text-white">FIND THE BEST GYM NEAR YOU</h1>
              <iframe src="https://www.google.com.qa/maps/d/u/0/embed?mid=1tO_wQ1OvuFKW2QekYXYB3jWVjpI2mS0&ehbc=2E312F" width="600" height="300"></iframe>
            </div>
            <div class="col-12 col-md-12 col-lg-6 ">
              <div class="text-center text-lg-end">
                <video src="Arnold Schwarzenegger mr olympia 1975 Remastered HD.mp4" loop muted autoplay class="hero-video--section">
                  Your browser dont support video tag
                </video>
              </div>
            </div>
          </div>
        </div>
        
      </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>

    
  </body>
</html>