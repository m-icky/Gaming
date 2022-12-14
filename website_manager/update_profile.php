<!DOCTYPE html>
<html lang="en">
<head>

     <title>Gaming website</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.html">Gaming</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
>
                    <li class="nav-item">
                        <a href="profile.php" class="nav-link smoothScroll">Back</a>
                    </li>
                    <li class="nav-item">
                         
                        </div>
                      </div>
                    </li>

 
                      </li>
                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </div>

        </div>
    </nav>

        
</body>
</head>


<section class="contact section" id="contact">
          <div class="container" >
               <div class="row">

                    <div class="col-6 .col-md-4">
                        <h2 class="mx-auto" style="width: 600px;" data-aos="fade-up" data-aos-delay="200">Update Profile</h2>

                        <form method="post" action="update_pro_act.php?saveid=<?php echo $_REQUEST['id']?>" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                        <?php
                                      include('../connection.php');
                                      $proid=$_GET['id'];
                                      $sql="SELECT * FROM `website_manager` WHERE id='$proid'";
                                      $res=mysqli_query($con,$sql);
                                      while($row=mysqli_fetch_array($res))
                                        {

                                      ?>
                            <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" placeholder="Name">

                            <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>" placeholder="Email">

                            <input type="text" class="form-control" name="phonenumber" value="<?php echo $row['phonenumber'];?>" placeholder="Phone">

                            <button type="submit" class="form-control" id="submit-button" name="submit">Update Now</button>
                            <?php
                             }
                               ?>
                        </form>
                    </div>
                    
               </div>
          </div>
     </section>

     <?php
include "../footer.php";
?>

<!-- SCRIPTS -->
<script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
