<?php
include('../connection.php');
$proid=$_GET['id'];
$sql="DELETE FROM `product_book` WHERE id='$proid'";
if(mysqli_query($con,$sql))
        {

            header("location:../user/user_index.php");
        }
        else{
            echo "error".$sql."<br>".mysqli_error($con);
        }
?>