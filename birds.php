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
<link href="lightbox.min.css" rel="stylesheet" />
  <script src="lightbox-plus-jquery.min.js"></script>
      
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
$category=$_REQUEST["a"];
            
?>
<div class="py-5">
        <h2 class="text-center"><?php echo $category; ?></h2>
      </div>
<div class="mayur">
        <?php
                      $con = mysqli_connect('localhost','root',"","backk");
            
                        $rr=mysqli_query($con,"select * from addgallery where category='$category'  ");
                        while($row=mysqli_fetch_array($rr))
                        {
          ?>  
                        
                        <a href="admin/gallery/<?php echo $row[3];?>" data-lightbox="mygallery">
                         <img src="admin/gallery/<?php echo $row[3];?>" style="height:400px" class="img-fluid pb-4">
                        </a>

                       

<?php } ?>

</div>
        </div>
        </div>
          
      </div>
        </div> 
    </section>

</body>
</html>