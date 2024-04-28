<?php
session_start();
$con = mysqli_connect('localhost','root',"","webdata");
 
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$INFO = $_POST['Eventinfo'];

$query = mysqli_query($con,"insert into userinfodata (user,email,mobile,Eventinfo)
values('$user','$email','$mobile','$INFO') ");
 
if($query)
{
    header("location:cont.php");
}
else{
    echo mysqli_error($con);
}
?>