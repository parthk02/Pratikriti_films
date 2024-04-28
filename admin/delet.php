<?php
 $con = mysqli_connect('localhost','root',"","webdata");
 $id=$_REQUEST["a"];
 $r=mysqli_query($con,"delete from userinfodata where id='$id'");
if($r)
header("location:contactuser.php");

 ?>