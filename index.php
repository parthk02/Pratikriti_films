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
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@0;1&display=swap" rel="stylesheet">
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

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="8.jpg" alt="Travel" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Travel</h3>
          <p>live the Moment!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="1.jpg" alt="birds" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Beautiful Landscapes</h3>
          <p>Capture the soul !</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="p1.jpg" alt="greenland" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Potraits..</h3>
          <p>Capture the soul !</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">About Us</h2>
    </div>
    <div class=container-fluid>
      <div class=row>
        <div class="col-lg-6 col-md-6 col-12">
          <img src="about.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2>WE are team of film makers</h2>
          <br>
          <p class="py-3">Welcome to our photography website! We are a team of photography enthusiasts who are
            passionate about capturing the essence of life through our lenses. As self-proclaimed photography geeks, we
            are constantly striving to improve our skills and techniques to produce the highest quality photographs
            possible. For us, photography is not just about capturing a moment in time, but it's about eliciting
            emotions and telling a story through our images. We believe that a photograph has the power to transport you
            back to a specific moment and evoke the same emotions you felt at that time.</p>
          <a href="about.php" class="btn btn-success"> Click to Know more!!</a>
        </div>

      </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Categories</h2>
    </div>
    <div class="container-fluid">

      <div class="row">

        <?php
        $con = mysqli_connect('localhost', 'root', "", "backk");

        $r = mysqli_query($con, "select distinct category from cat");
        while ($row = mysqli_fetch_array($r)) {

          $rr = mysqli_query($con, "select * from addgallery where category='$row[0]'  limit 1");
          if ($rows = mysqli_fetch_array($rr)) {


            ?>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top img-fluid" src="admin/gallery/<?php echo $rows[3]; ?>" style="height:300px"
                  alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">
                    <?php echo $rows[1]; ?>
                  </h4>
                  <p class="card-text">
                    <?php echo $rows[2]; ?>
                  </p>
                  <a href="birds.php?a=<?php echo $row[0] ?>" class="btn btn-primary">See MORE</a>
                </div>
              </div>
            </div>
            <?php
          }
        }
        ?>

<!--  PhotoGrapher -->

<section class="my-5">
    <div class="py-5">
      <h2 class="text-center">PhotoGrapher</h2>
    </div>
    <div class="container-fluid">

      <div class="row">

        <?php
        $con = mysqli_connect('localhost', 'root', "", "backk");

          $rr = mysqli_query($con, "select * from photog  ");
        while ($rows = mysqli_fetch_array($rr)) {


            ?>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top img-fluid" src="admin/staff/<?php echo $rows[4]; ?>" style="height:300px"
                  alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">
                    <?php echo $rows[1]; ?>
                  </h4>
                  <p class="card-text">
                    <?php echo $rows[2]; ?>
                  </p>
                  <p class="card-text">
                    <?php echo $rows[3]; ?>
                  </p>
                </div>
              </div>
            </div>
            <?php
          
        }
        ?>
  </div></div>
<br/><Br/>

<!-- End PhotoGrapher -->

        <div class="py-5">
          <h2 class="text-center">Gallery</h2>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <img src="images/1.jpg" class="img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
              <img src="images/22.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <img src="images/33.jpg" class="img-fluid pb-4">
            </div>


          </div>
        </div>

      </div>
    </div>
  </section>

 



  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

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
              <a href="#!" class="text-white">Home Page</a>
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
    




</html>