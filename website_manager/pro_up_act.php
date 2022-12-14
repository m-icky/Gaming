<?php
include('../connection.php');
$proid=$_GET['saveid'];
$status=$_POST['status'];

$sql="UPDATE `product_book` SET `status`='$status' WHERE `id`='$proid'";
if(mysqli_query($con,$sql))
{
    header("location: ../website_manager/web_index.php");
}
else{
    echo "error".$sql."<br>".mysqli_error($con);
}
?>