<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];


include '../connection.php';
$logid=mysqli_insert_id($con);

  $sql = "insert into feedback(name,email,message,loginid) values('$name','$email', '$message' , '$logid')";
mysqli_query($con, $sql);
echo"<script>alert('Submitted Sucessfull');window.location='user_index.php';</script>";


?>