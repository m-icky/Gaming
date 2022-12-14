<?php
$name=$_POST['name'];
$complaint=$_POST['complaint'];


include '../connection.php';
$logid=mysqli_insert_id($con);

  $sql = "insert into complaint(name,complaint,loginid) values('$name', '$complaint' , '$logid')";
mysqli_query($con, $sql);
echo"<script>alert('Send Sucessfull');window.location='user_index.php';</script>";


?>