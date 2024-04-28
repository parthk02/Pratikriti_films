<!DOCTYPE html>
<html lang="en">

<head>
    <title>Photo</title>
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
            <h1>Pratikriti Films</h1>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="contactuser.php"><i class="User Enquiry"></i>User Enquiry</a>
            <a href="new.php"><i class="uploadd"></i>Upload</a>
            <a href="../admin2/admin_update.php"><i class="update"></i>update</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>


    <br>
    <br>
    <br>
    <?php
    session_start();
    ?>
    <div style='border:2px solid black;box-shadow:10px 10px 40px grey;height:auto;' class="w-50 m-auto">
        <form action="gallery1.php" method="post">
            <h3 align='center'>Add Gallery</h3>

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
                <div class="form-group">
                    <label>Enter title:</label>
                    <br /><Br />
                    <input type="text" placeholder="Enter title" name="title" autocomplete="off" class="form-control">
                </div>

            </div>
            <div class="form-group">
                <label>Upload Photo </label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">

                <center> <button type="submit" name="save" class="btn btn-success">Add Gallery</button></center>

            <div class="container-fluid">
                <?php
                if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                {
                    echo'<h3 class="bg-primary text-white">' .$_SESSION['success'].' <h3>';
                    unset($_SESSION['success']);
                }

                if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                {
                    echo'<h3 class="bg-danger text-white">' .$_SESSION['status'].' <h3>';
                    unset($_SESSION['status']);
                }
                ?>
            </div>