<!DOCTYPE html>
<html lang="en">
<head>
    <title>category</title>
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
        <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
			<a href="contactuser.php"><i class="User Enquiry"></i>User Enquiry</a>
			<a href="category.php"><i class="category"></i>Category</a>
			<a href="addgallery.php"><i class="update"></i>Add Gallery</a>
            <a href="viewgallery.php"><i class="fas fa-sign-out-alt"></i>View Gallery</a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
		</div>
	</nav>


    <br>
    <br>
    <br>
    <div style='border:2px solid black;box-shadow:10px 10px 40px grey;height:auto;' class="w-50 m-auto">
        <form action="catuser.php" method="post">
            <h3 align='center'>Add Category</h3>
            <div class="form-group">
                <label>Enter Category Name:</label>
                <br/><Br/>
                <input type="text" placeholder="Enter Category" name="category" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
            
    <center>          <button type="submit" class="btn btn-success">Submit</button></center>

            <?php
            $con = mysqli_connect('localhost','root',"","backk");
 
                    $r=mysqli_query($con,"select * from cat order by id desc");
                    echo "<table class='table table-bordered'>
                    <tr><Th>Sno</th><th>Category</th><th>Delete</th></tr>";
                    $sno=1;
                    while($row=mysqli_fetch_array($r))
                    {
                            echo "<tr><Td>",$sno++,"</td>";

                        echo "<Td>",$row[1],"</td>
                        
                        <td><a href='delete.php?a=$row[0]'>Delete</a></td></tr>";
                            
                    }

?>
</table>
</div>
