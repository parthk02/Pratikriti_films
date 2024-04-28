<!DOCTYPE html>
<html lang="en">

<head>
    <title>Enquiry</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .bcontent {
            margin-top: 10px;
        }
    </style>
</head>

<body style="background-color:#f3f4f7;">

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
    <div class="container bcontent">
        <h2><center>USERS BOOKING ENQUIRY</center></h2>
        <br>
        <br>
        <?php
        $con = mysqli_connect("localhost", "root", "", "webdata");

        $r = mysqli_query($con, "select * from userinfodata");
        echo "<table class='table table-dark' table border='1' ds align='center' cellspacing=0 cellpadding=10>";
        echo " <thead><tr style='text-transform:uppercase'><th>Id</th><th>username</th><th>email</th><th>mobile</th><th>Eventinfo</th><th>Delete</th><tr> </thead>";

        while ($row = mysqli_fetch_array($r)) {
            $en = base64_decode($row[0]);

            echo "<tr><td>", $row[0], "</td>";
            echo "<td>", $row[1], "</td>";
            echo "<td>", $row[2], "</td>";
            echo "<td>", $row[3], "</td>";
            echo "<td>", $row[4], "</td>

            <td><a href='delet.php?a=$row[0]'>Delete</a></td></tr>";
        }
        ?>
        </table>