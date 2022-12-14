<?php
include('../connection.php');

$status=$_POST['status'];
$id = $_GET['id'];
$sql="UPDATE `game_book` SET `status`='Returned' WHERE id='$id'";
if(mysqli_query($con,$sql))
{
    header("location: ../user/user_index.php");
}
else{
    echo "error".$sql."<br>".mysqli_error($con);
}
?>