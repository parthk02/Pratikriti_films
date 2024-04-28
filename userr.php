<?php

$con = mysqli_connect('localhost','root',"","category");
 
$cat = $_POST['cate'];

$query = mysqli_query($con,"insert into cate
values('$cat')");
 
if($query)
{
echo "Added Successfully";
}
else{
    echo mysqli_error($con);
}
?>