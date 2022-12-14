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
     <link rel="stylesheet" href="css/table.css">



     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

        <a class="navbar-brand" href="index.php">Gaming <p>Welcome Website Manager</p></a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-lg-auto">
        <li class="nav-item">
            <a href="web_index.php" class="nav-link smoothScroll">Home</a>
        </li>

        <li class="nav-item">
            <a href="logout.php" class="nav-link smoothScroll">Log Out</a>
        </li>
    </ul>

    <ul class="social-icon ml-lg-3">
        <li><a href="web_index.php" class="fa fa-facebook"></a></li>
        <li><a href="web_index.php" class="fa fa-twitter"></a></li>
        <li><a href="_index.php" class="fa fa-instagram"></a></li>
    </ul>
</div>

</div>
</nav>


     <!-- HERO -->

     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

<div class="container add-emp">		
       <center><h1 class="p-2 mb-0 bg-info text-dark"><strong>Login Details</strong></h1><br></center>
       <table class="table table-bordered table-hover">
           <!-- <thead class="thead-dark"> -->
               <tr>			
                   <th class="p-3 mb-2 bg-warning text-light">User Name </th>
                   <th class="p-3 mb-2 bg-success text-light">User Type</th>
                   <!-- <th class="p-3 mb-2 bg-info text-light">Reply</th> -->
                   <!-- <th class="p-3 mb-2 bg-danger text-light">Feedback</th> -->
                   <!-- <th class="p-3 mb-2 bg-primary text-light">Update</th> -->
                   <!-- <th class="p-3 mb-2 bg-secondary text-light">Delete</th> -->
               </tr>
               <?php
                   include '../connection.php';
                   $sql = "select * from `login` ORDER BY `usertype` ASC";
                   $result = mysqli_query($con, $sql);           
                   while ($data = mysqli_fetch_assoc($result))			 
                   {
               ?>      <td><?php echo $data['username'];?></td>
                       <td><?php echo $data['usertype']?></td>
                       <!-- <td><?php echo $data['email']?></td> -->
                       <!-- <td><?php echo $data['feedback']?></td>         -->
                       <!-- <td>
                       <a href="com_repl.php"><button type="button" class="btn btn-outline-danger">Reply</button></a>
                       </td> -->
         <!-- <td><a class="btn btn-primary py-2 px-3" href="update_btn.php?id=<?php echo $data['id']; ?>">Update</a> </td> -->
         <!-- <td><a class="btn btn-secondary py-2 px-3"  href="delete_btn.php?id=<?php echo $data['id']; ?>">Delete</a> </td> -->
                   </tr> 
               <?php    
                   }
               ?>
       </table>
   </div>
</div>

         
</section>


     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="containe">
               <div class="row">

                    <div class="ml-auto col-lg-4 col-md-5">
                        <p class="copyright-text">Copyright &copy; 2022 Gaming Co.
                        
                        <br>Design: <a href="">Gamers</a></p>
                    </div>

                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="#">hello@company.co</a>
                        </p>

                        <p><i class="fa fa-phone mr-1"></i> 010-020-0840</p>
                    </div>
                    
               </div>
          </div>
     </footer>

    
     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>