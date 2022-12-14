<?php
include 'connection.php';
session_start();


$name=$_POST["username"];
$pass=$_POST["password"];
$str="select * from login where username='$name' and password='$pass'";
$result=  mysqli_query($con, $str);
$data=  mysqli_fetch_array($result);
$_SESSION["loginid"]=$data['loginid'];
$_SESSION["username"]=$data['username'];
 if($data['username']==$name && $data['password']==$pass)

{
   if($data['usertype']=="admin")
    {
    	$_SESSION["loginid"]=$data['loginid'];
        header("location:admin/admin_index.php");
    }
    else if($data['usertype']=="customer_service_manager" && $data['status']=="1")
    {
    	$_SESSION["loginid"]=$data['loginid'];
        header("location:customer_service_manager/cus_index.php");
    }
    else if($data['usertype']=="website_manager" && $data['status']=="1")
    {
        $_SESSION["loginid"]=$data['loginid'];
        header("location:website_manager/web_index.php");
    }
    else if($data['usertype']=="user" && $data['status']=="1")
    {
        $_SESSION["loginid"]=$data['loginid'];
        header("location:user/user_index.php");
    }



 else {
        echo "<script>alert('not approved');window.location='login.php'</script>";    
    }
}
else
{
    echo "<script>alert('invalid username or password');window.location='login.php'</script>";
}

?>