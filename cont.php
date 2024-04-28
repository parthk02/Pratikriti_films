<?php

session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Moment we create | Pratikriti films</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@0;1&display=swap" rel="stylesheet">
      
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <img src="logo.png" alt="">
    <a class="navbar-brand" href="index.php">
      <i><h3>Pratikriti Films</h3></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="gal.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cont.php">Contact us</a>
        </li>
      </ul>
    </div>
  </nav>


<?php
    if (isset($_SESSION['status']) && $_SESSION != '') {
        ?>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong>
            <?PHP echo $_SESSION['status']; ?>
            <button type="button" class="close" data-dismiss-"alert" aria-label="Close">
                <span aria hidden-"true">&times;</span>
            </button>
        </div>

        <?php

        unset($_SESSION['status']);
    }
    ?>

<section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
      </div>

      <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Event INFO</label>
                <textarea class="form-control" name="Eventinfo">
                </textarea>
                <br>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
      </div>
</section>
          <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/pratikriti_films/" role="button"
        ><img src="inst.png" alt="" height="32px"></a>

      <!-- Youtube -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.youtube.com/channel/UCu3YVr962uXRhwLLJOXfgtw" role="button"
        ><img src="ut.png" alt="" height="36px"></a>

      <!--HOme page-->
      <a class="btn btn-outline-light btn-floating m-1" href="index.php" role="button"
        ><img src="wb.png" alt="" height="32px"></a>
    </section>
   
    <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
      "Pratikriti_films holds the exclusive copyright ownership of all images, which prohibits their usage or distribution by any other entity or individual without prior explicit consent from Pratikriti_films. Any unauthorized use or infringement of these rights is strictly prohibited and may result in legal action and financial penalties."
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links-</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="https://www.instagram.com/pratikriti_films/" class="text-white">Instagram</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links-</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="https://www.youtube.com/channel/UCu3YVr962uXRhwLLJOXfgtw" class="text-white">YouTube</a>
            </li>
            
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links-</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="cont.php" class="text-white">Book us now!</a>
            </li>
            
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links-</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="index.php" class="text-white">Home Page</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->
<br>
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">&copy;Pratikritifilms </a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</body>
</html>