<?php
session_start();
$con = mysqli_connect('localhost','root',"","backk");

if(isset($_POST['okk']))
{
    $nam = $_POST['Name'];
    $des = $_POST['Description'];
    $exp = $_POST['Expertise'];
    $pic = $_FILES['photo']["name"];

    move_uploaded_file($_FILES["photo"]["tmp_name"], "staff/" .$_FILES["photo"]["name"]);
    
$query = " INSERT INTO photog (Name,Description,Expertise,photo) VALUES ('$nam','$des','$exp','$pic')";
$result = mysqli_query($con, $query);

if($result)
{
    $_SESSION['status'] = "Data Stored Succesfully";
    header('Location: photog.php');
}
else{
    $_SESSION['status'] = "data Not Stored Succesfully";
    header('Location: photog.php');
}

}
?>