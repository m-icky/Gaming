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
                        <a href="web_index.php" class="nav-link smoothScroll">Back</a>
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
                        <h2 class="mx-auto" style="width: 600px;" data-aos="fade-up" data-aos-delay="200">Booking Status</h2>

                        <form method="post" action="game_up_act.php?saveid=<?php echo $_REQUEST['id']?>" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                        <?php
                                      include('../connection.php');
                                      $proid=$_GET['id'];
                                      $sql="SELECT * FROM `game_book` WHERE id='$proid'";
                                      $res=mysqli_query($con,$sql);
                                      while($row=mysqli_fetch_array($res))
                                        {

                                      ?>
                            <input type="text" class="form-control" name="cname" readonly="true"  placeholder="<?php echo $row['cname'];?>">

                            <input type="text" class="form-control" name="phone" readonly="true" placeholder="<?php echo $row['phone'];?>">

                            <input type="text" class="form-control" name="email" readonly="true" placeholder="<?php echo $row['email'];?>">

                            <input type="text" class="form-control" name="name" readonly="true"  placeholder="<?php echo $row['name'];?>">

                            <input type="text" class="form-control" name="price" readonly="true"  placeholder="<?php echo $row['price'];?>">

                            <label for="status">Booking Status</label>
                        <select name="status" id="status">
                             <option value="Confirmed">Confirmed</option>
                             <option value="Wait For Confirmation">Wait For Confirmation</option>
                              <option value="Packed">Packed</option>
                             <option value="Delivered">Delivered</option>
                             <!-- <option value="Replace">Replace</option> -->
                        </select>

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
