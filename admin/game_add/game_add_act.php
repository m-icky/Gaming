<?php
$name=$_POST['name'];
$description=$_POST['description'];
$price=$_POST['price'];


include '../../connection.php';
$logid=mysqli_insert_id($con);

  $sql = "insert into game_details(name,description,price) values('$name','$description', '$price' )";
mysqli_query($con, $sql);
echo"<script>alert('Added Sucessfull');window.location='../admin_index.php';</script>";


?>