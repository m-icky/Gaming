<?php
$username=$_POST['username'];
$reply=$_POST['reply'];


include '../connection.php';
$logid=mysqli_insert_id($con);

  $sql = "insert into complaint_reply(username,reply,loginid) values('$username', '$reply' , '$logid')";
mysqli_query($con, $sql);
echo"<script>alert('Send Sucessfull');window.location='view_com.php';</script>";


?>