<?php

$con = mysqli_connect('localhost','root',"","backk");
 

$category = $_POST['category'];


$query = mysqli_query($con,"insert into cat (category)
values('$category') "); 
 
if($query)
{
header("location:category.php");
}
else{
    echo mysqli_error($con);
}
?>