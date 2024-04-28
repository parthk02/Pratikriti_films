<?php
session_start();
$con = mysqli_connect('localhost','root',"","backk");

if(isset($_POST['ok']))
{
    $title = $_POST['pname'];
    $cat = $_POST['category'];
    $image = $_FILES['aa']["name"];

    move_uploaded_file($_FILES["aa"]["tmp_name"], "gallery/" .$_FILES["aa"]["name"]);
    
$query = " INSERT INTO addgallery (category,pname,image) VALUES ('$cat','$title','$image')";
$result = mysqli_query($con, $query);

if($result)
{
    $_SESSION['status'] = "Image Stored Succesfully";
    header('Location: addgallery.php');
}
else{
    $_SESSION['status'] = "Image Not Stored Succesfully";
    header('Location: addgallery.php');
}

}
?>