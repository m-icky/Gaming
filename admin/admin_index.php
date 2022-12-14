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

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="admin_index.php">Gaming <p>welcome Admin</p></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="admin_index.php" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                    <div class="dropdown">
                        <a href="#dropdown" class="nav-link smoothScroll">add</a>
                        <div class="dropdown-content">
                          <a href="../admin/game_add/game_add.php">Games</a>
                          <a href="../admin/product_add/add.php">Products</a>
                        </div>
                    </div>

                    <li class="nav-item">
                        <a href="logout.php" class="nav-link smoothScroll">Log Out</a>
                    </li>
                      </li>
                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="index.html" class="fa fa-facebook"></a></li>
                    <li><a href="index.html" class="fa fa-twitter"></a></li>
                    <li><a href="index.html" class="fa fa-instagram"></a></li>
                </ul>
            </div>

        </div>
    </nav>


     <!-- HERO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>
               <div class="container">
                    <div class="row">

    <div class="card">
      <div class="card-image card2"></div>
      <div class="card-text">
        <h2>   <a href="web_man.php">Website Manager </a></h2>
      </div>
    </div>
    <div class="card">


      <div class="card-image card2"></div>
      <div class="card-text card2">
        <h2>  <a href="cus_man.php">Costumer Service Manager </a></h2>
      </div>
    </div>
    <div class="card">


        <div class="card-image card3"></div>
        <div class="card-text card3">
          <h2>  <a href="view_booking.php">View Purchases </a></h2>
        </div>
      </div>

                    </div>
               </div>
     </section>


     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="container">
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