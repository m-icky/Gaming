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
                    <li class="nav-item">
                        <a href="user_index.php" class="nav-link smoothScroll">Home</a>
                    </li>

                    
                    <li class="nav-item">
                    <div class="dropdown">
                    <a href="#dropdown" class="nav-link smoothScroll">purchase</a>
                    <div class="dropdown-content">
                    <a href="../user/product_buy/product_buy_index.php">Product</a>
                    <a href="../user/game_buy/game_buy_index.php">Game</a>
                    </div>
                    </div>
                    </li>

                    <li class="nav-item">
                    <div class="dropdown">
                    <a href="#dropdown" class="nav-link smoothScroll">View Booking</a>
                    <div class="dropdown-content">
                    <a href="view_pro_book.php">View Product Booking</a>
                    <a href="view_game_book.php">View Game Booking</a>
                    </div>
                    </div>
                    </li>
                    <li class="nav-item">
                        <a href="return.php" class="nav-link smoothScroll">Return</a>
                    </li>

                    <li class="nav-item">
                        <a href="feedback.php" class="nav-link smoothScroll">feedback</a>
                    </li>


                    <li class="nav-item">
                    <div class="dropdown">
                    <a href="#dropdown" class="nav-link smoothScroll">complaints</a>
                    <div class="dropdown-content">
                    <a href="complaint.php">Add</a>
                    <a href="../user/view_com.php">Reply</a>
                    </div>
                    </div>
                    </li>
                    <!-- <li class="nav-item">
                    <div class="dropdown">
                    <a href="#" class="nav-link smoothScroll">MY Cart
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                           <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                           <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                    </a>
                    <div class="dropdown-content">
                    <a href="../user/product_cart.php">Product Cart</a>
                    <a href="../user/game_cart.php">Game Cart</a>
                    </div>
                    </div>
                    </li> -->

                    <li class="nav-item">
                        <a href="logout.php" class="nav-link smoothScroll">Log out</a>
                    </li>


                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="feedback.php" class="fa fa-facebook"></a></li>
                    <li><a href="feedback.php" class="fa fa-twitter"></a></li>
                    <li><a href="feedback.php" class="fa fa-instagram"></a></li>
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
                        <h2 class="mx-auto" style="width: 600px;" data-aos="fade-up" data-aos-delay="200">Feedback Form</h2>

                        <form method="post" action="feedback_act.php" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                            <input type="text" class="form-control" name="name" placeholder="Name">

                            <input type="text" class="form-control" name="email" placeholder="Email">

                            <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit">Submit</button>
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
