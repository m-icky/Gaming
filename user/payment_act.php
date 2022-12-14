<?php
$name=$_POST['name'];
$number=$_POST['number'];
$date=$_POST['date'];
$cvv=$_POST['cvv'];


include '../connection.php';
$logid=mysqli_insert_id($con);


  $sql = "insert into payment(name,number,date,cvv) values('$name','$number','$date','$cvv')";
mysqli_query($con, $sql);

echo"<script>alert('Payment Sucessfull');window.location='../user/user_index.php';</script>";


?>