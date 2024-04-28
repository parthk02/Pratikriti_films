<?php

session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Photographer</title>
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
        <form action="photo1.php" method="post" enctype="multipart/form-data">
            <h3 align='center'>Add Photographer</h3>
            <br />
            <div class="form-group">
                <label>Enter Name:</label>
                <br />
                <input type="text" placeholder="Enter Title" name="Name" autocomplete="off" class="form-control">
            </div>
            
                <div class="form-group">
                    <label>Add Description:</label>
                    <input type="textbox" placeholder="Enter Title" name="Description" autocomplete="off" class="form-control">
                
                </div>
                <div class="form-group">
                <label>Enter Expertise:</label>
                <br />
                <input type="text" placeholder="Enter Title" name="Expertise" autocomplete="off" class="form-control">
            </div>
                <div class="form-group">
                    <label>Upload Photo </label>
                    <input type="file" name="photo" class="form-control">
                </div>
                <div class="form-group">


                    <center> <button type="submit" name="okk" class="btn btn-success">Add Photographer</button></center>
