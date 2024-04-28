<?php

session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <link href="sttyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <nav class="navtop">
        <div>
        <a class="navbar-brand" href="home.php"><img src="logo.png" alt="">
   				<h1>Pratikriti Films</h1></a>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="contactuser.php"><i class="User Enquiry"></i>User Enquiry</a>
            <a href="category.php"><i class="category"></i>Category</a>

                <button class="btn btn- dropdown-toggle" type="button" data-toggle="dropdown" style="color:white">ADD
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="addgallery.php">Add Gallery</a></li>
                    <li><a href="photog.php">Add Photographer</a></li>
                    <li><a href="viewph.php">View Photographer</a></li>
                  </ul>

            <a href="viewgallery.php"><i class="fas fa-sign-out-alt"></i>View Gallery</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>


    <br>
    <br>
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
    <br>
    <div style='border:2px solid black;box-shadow:10px 10px 40px grey;height:auto;' class="w-50 m-auto">
        <form action="gallery1.php" method="post" enctype="multipart/form-data">
            <h3 align='center'>Add Gallery</h3>
            <br />
            <div class="form-group">
                <label>Enter Title:</label>
                <br />
                <input type="text" placeholder="Enter Title" name="pname" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">

                <div class="form-group">
                    <label>Category Name:</label>
                    <br /><Br />
                    <select placeholder="Enter Category" name="category" class="form-control">
                        <option value="">Select Category</option>
                        <?php
                        $con = mysqli_connect('localhost', 'root', "", "backk");

                        $r = mysqli_query($con, "select * from cat order by id desc");
                        while ($row = mysqli_fetch_array($r)) {
                            echo "<option value='$row[1]'>$row[1]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Upload Photo </label>
                    <input type="file" name="aa" class="form-control">
                </div>
                <div class="form-group">

                    <center> <button type="submit" name="ok" class="btn btn-success">Add Gallery</button></center>

                </div>
            </div>
    </div>
    <div>

        <footer style=padding:0; margin:0;>
            <p class="p-3 bg-dark text-white text-center">&copy;Pratikritifilms 2023 </p>
        </footer>
    </div>