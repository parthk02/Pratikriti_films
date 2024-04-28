<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
		integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
		crossorigin="anonymous" referrerpolicy="no-referrer">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

	<style>
		.card-body text-center {
			text-decoration-color: ;
		}

		.card-body {
			-ms-flex: 1 1 auto;
			flex: 1 1 auto;
			min-height: 110px;
			padding: 1.25rem;
		}
		footer{
			position:fixed;
			bottom:0;
			width:100%;
			}
	</style>
</head>

<body class="loggedin">
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

	<div class="content">
		<h2>Home Page</h2>
		<p>Welcome back,
			<?= $_SESSION['name'] ?>!
		</p>
	</div>

	<br>

	<div class="container">
		<div class="card-columns">
			<div class="card bg-primary">
				<div class="card-body text-center">
					<br/>
					<a href="profile.php" style="color:black"><i class="fas fa-user"></i>Profile</a>
				</div>
			</div>
			<div class="card bg-warning">
				<div class="card-body text-center">
				<br/>	
				<a href="contactuser.php" style="color:black"><i class="User Enquiry"></i>User Enquiry</a>
				</div>
			</div>
			<div class="card bg-success">
				<div class="card-body text-center">
				<br/>	
				<a href="category.php" style="color:black"><i class="category"></i>Category</a>
				</div>
			</div>
			<div class="card bg-danger">
				<div class="card-body text-center">
				<br/>	
				<a href="addgallery.php" style="color:black"><i class="update"></i>Add Gallery</a>
				</div>
			</div>
			<div class="card bg-secondary">
				<div class="card-body text-center">
				<br/>	
				<a href="viewgallery.php" style="color:black"><i class="fas fa-sign-out"></i>View Gallery</a>
				</div>
			</div>
			<div class="card bg-info">
				<div class="card-body text-center">
				<br/>	
				<a href="Photog.php" style="color:black"><i class="fas fa-sign-out-t"></i>Add Photographer</a>
				</div>
			</div>
			<div class="card bg-primary">
				<div class="card-body text-center">
				<br/>	
				<a href="viewph.php" style="color:black"><i class="fas fa-sign-out-t"></i>View Photographer</a>
				</div>
			</div>
			<div class="card bg-success">
				<div class="card-body text-center">
				<br/>	
				<a href="logout.php" style="color:black"><i class="fas fa-sign-out-t"></i>logout</a>
				</div>
			</div>
			
			
		</div>
	</div>

	<div>
		
		</div>
	</body>
	<footer style= padding:0; margin:0;>
          <p class="p-3 bg-dark text-white text-center">&copy;Pratikritifilms 2023 </p>
    </footer>

</html>