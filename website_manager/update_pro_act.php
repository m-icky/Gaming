<?php
include('../connection.php');
$proid=$_GET['saveid'];
$name=$_POST['name'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$sql="UPDATE `website_manager` SET `name`='$name',`phonenumber`='$phonenumber',`email`='$email' WHERE `id`='$proid'";
if(mysqli_query($con,$sql))
{
    header("location: ../website_manager/web_index.php");
}
else{
    echo "error".$sql."<br>".mysqli_error($con);
}
?>