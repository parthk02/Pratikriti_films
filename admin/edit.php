<?php
$con=mysqli_connect("localhost","root","","backk");

$id=$_REQUEST["a"];

$r=mysqli_query($con,"select * from cat where id='$id'");
$row=mysqli_fetch_row($r);

//print_R($row);
?>

<div style='border:2px solid black;box-shadow:10px 10px 40px grey;height:auto;' class="w-50 m-auto">
        <form action="" method="post">
            <h3><center>Edit Category</center></h3>
  
  
  
            <div class="form-group">
                <label><center>Enter Category Name:</center></label>
                <br/><Br/>
               <center> 
               <input type="hidden" value="<?php echo $row[0]; ?>"> 
               <input type="text" placeholder="Enter Category" name="i" value="<?php echo $row[1]; ?>"></center>
            </div>
            <div class="form-group">
            <br/>
            <center>          <button type="submit" name="up" class="btn btn-success">Submit</button></center>

</div>
</form

<?php
    if(isset($_REQUEST["up"])){
        $id=$_REQUEST["id"];
        $con=mysqli_connect("localhost","root","","backk");
        $r=mysqli_query($con,"update cat set
        category='$id' where id='$id' ");
    }
?>