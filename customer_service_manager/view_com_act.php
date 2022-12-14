<?php
include('../connection.php');
$queid=$_GET['id'];
$sql="DELETE FROM `complaint` WHERE id='$queid'";
if(mysqli_query($con,$sql))
        {

             header("location:cus_index.php");
        }
        else{
            echo "error".$sql."<br>".mysqli_error($con);
        }
?>