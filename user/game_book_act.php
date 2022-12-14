<?php
$cname=$_POST['cname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$name=$_POST['name'];
$price=$_POST['price'];
$description=$_POST['description'];


include '../connection.php';
$id = $_POST['id'];
  $sql = "insert into game_book(name,price,description,cname,phone,email,status,loginid,payment) values('$name','$price', '$description','$cname','$phone', '$email','Booked','$id','Not Paid')";
mysqli_query($con, $sql);
$bid=mysqli_insert_id($con);

echo"<script>alert('Confirm Booking');window.location='payment.php';</script>";


?>