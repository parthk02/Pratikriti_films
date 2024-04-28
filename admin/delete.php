<?php
 $con = mysqli_connect('localhost','root',"","backk");
 $id=$_REQUEST["a"];
 $r=mysqli_query($con,"delete from cat where id='$id'");
if($r)
header("location:category.php");

 ?>