<?php
 $con = mysqli_connect('localhost','root',"","backk");
 $id=$_REQUEST["a"];
 $r=mysqli_query($con,"delete from addgallery where id='$id'");
if($r)
header("location:viewgallery.php");

 ?>