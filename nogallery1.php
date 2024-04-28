<?php
session_start();

$con = mysqli_connect('localhost','root',"","backk");

if (isset($_POST['save'])){
    $category = $_POST['category'];
    $title = $_POST['title'];
    $image = $_FILES['image']['name'];

    if (file_exists("admin/gallery/" .$_FILES['image']['name']))
    {
        $store = $_FILES['image']['name'];
        $_SESSION['status'] = "Image Already Exists. '.$store.'";
        header('location:addgallery.php');
    }
    else{

        $query = "INSERT INTO addgallery (cateory,pname,image) values('$category','$title','$image')";

        $query_run = mysqli_query($con,$query);

        if ($query_run){
            move_uploaded_file($_FILES["image"]["tmp_name"], "admin/gallery/" .$_FILES["image"]["name"]);

            $_SESSION['success'] = "Data Stored Sucessfully";
            header("location: addgallery.php");
        }
        else{
            $_SESSION['success'] = "Data Not Inserted";
            header("location: addgallery.php");
        }
    }
}
?>