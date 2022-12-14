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

            <a class="navbar-brand" href="index.html">Gaming</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">

                <li class="nav-item">
                        <a href="../user_index.php" class="nav-link smoothScroll">Home</a>
                    </li>


                    <li class="nav-item">
                    <div class="dropdown">
                    <a href="#dropdown" class="nav-link smoothScroll">purchase</a>
                    <div class="dropdown-content">
                    <a href="../product_buy/product_buy_index.php">Product</a>
                    <a href="../game_buy/game_buy_index.php">Game</a>
                    </div>
                    </div>
                    </li>

                    <li class="nav-item">
                    <div class="dropdown">
                    <a href="#dropdown" class="nav-link smoothScroll">View Booking</a>
                    <div class="dropdown-content">
                    <a href="../view_pro_book.php">View Product Booking</a>
                    <a href="../view_game_book.php">View Game Booking</a>
                    </div>
                    </div>
                    </li>
                    <li class="nav-item">
                        <a href="../return.php" class="nav-link smoothScroll">Return</a>
                    </li>

                    <li class="nav-item">
                        <a href="../feedback.php" class="nav-link smoothScroll">feedback</a>
                    </li>

                   

                    <li class="nav-item">
                    <div class="dropdown">
                    <a href="#dropdown" class="nav-link smoothScroll">complaints</a>
                    <div class="dropdown-content">
                    <a href="../complaint.php">Add</a>
                    <a href="../view_com.php">View Reply</a>
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
                    <a href="../product_cart.php">Product Cart</a>
                    <a href="../game_cart.php">Game Cart</a>
                    </div>
                    </div>
                    </li> -->

                    <li class="nav-item">
                        <a href="logout.php" class="nav-link smoothScroll">Log out</a>
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


     <!-- HERO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>
               <div class="container">
                <div class="cards">

                <?php
                include 'connection.php';
            $query = "select * from game_details";
            $result = mysqli_query($con, $query);
            
            while ($data = mysqli_fetch_assoc($result)) {
                ?>

                <div class="card card-two">
        <h2 class="card-title"><?php echo $data['name'];?></h2>
        <p class="date"><?php echo $data['price'];?></p>
        <p class="description"><?php echo $data['description'];?></p>
        <p><button>
        <a href="../game_cart.php?id=<?php echo $data['id']; ?>" class="nav-link smoothScroll">Buy Now</a>
        </button></p>
      </div>
      <?php
            }
            ?>
      
           <!-- <div class="card card-two">
        <h2 class="card-title">Game 2</h2>
        <p class="date">May 26, 2021</p>
        <p class="description">If you read carefully, you'll find that this is not your typical lorem ipsum.</p>
        <p><button>
        <a href="../game_index/game_add/game_add.php" class="nav-link smoothScroll">Add</a>
        </button></p>
      </div>

      <div class="card card-two">
        <h2 class="card-title">Game 3</h2>
        <p class="date">May 26, 2021</p>
        <p class="description">If you read carefully, you'll find that this is not your typical lorem ipsum.</p>
        <p><button>
        <a href="../game_index/game_add/game_add.php" class="nav-link smoothScroll">Add</a>
        </button></p>
      </div>

      <div class="card card-two">
        <h2 class="card-title">Game 4</h2>
        <p class="date">May 26, 2021</p>
        <p class="description">If you read carefully, you'll find that this is not your typical lorem ipsum.</p>
        <p><button>
        <a href="../game_index/game_add/game_add.php" class="nav-link smoothScroll">Add</a>
        </button></p>
      </div>

      <div class="card card-two">
        <h2 class="card-title">Game 5</h2>
        <p class="date">May 26, 2021</p>
        <p class="description">If you read carefully, you'll find that this is not your typical lorem ipsum.</p>
        <p><button>
        <a href="../game_index/game_add/game_add.php" class="nav-link smoothScroll">Add</a>
        </button></p>
      </div>

      <div class="card card-two">
        <h2 class="card-title">Game 6</h2>
        <p class="date">May 26, 2021</p>
        <p class="description">If you read carefully, you'll find that this is not your typical lorem ipsum.</p>
        <p><button>
        <a href="../game_index/game_add/game_add.php" class="nav-link smoothScroll">Add</a>
        </button></p>
      </div>

      <div class="card card-two">
        <h2 class="card-title">Game 7</h2>
        <p class="date">May 26, 2021</p>
        <p class="description">If you read carefully, you'll find that this is not your typical lorem ipsum.</p>
        <p><button>
        <a href="../game_index/game_add/game_add.php" class="nav-link smoothScroll">Add</a>
        </button></p>
      </div>

      <div class="card card-two">
        <h2 class="card-title">Game 8</h2>
        <p class="date">May 26, 2021</p>
        <p class="description">If you read carefully, you'll find that this is not your typical lorem ipsum.</p>
        <p><button>
        <a href="../game_index/game_add/game_add.php" class="nav-link smoothScroll">Add</a>
        </button></p>
      </div>

      <div class="card card-two">
        <h2 class="card-title">Game 9</h2>
        <p class="date">May 26, 2021</p>
        <p class="description">If you read carefully, you'll find that this is not your typical lorem ipsum.</p>
        <p><button>
        <a href="../game_index/game_add/game_add.php" class="nav-link smoothScroll">Add</a>
        </button></p>
      </div>

      <div class="card card-two">
        <h2 class="card-title">Game 10</h2>
        <p class="date">May 26, 2021</p>
        <p class="description">If you read carefully, you'll find that this is not your typical lorem ipsum.</p>
        <p><button>
        <a href="../game_index/game_add/game_add.php" class="nav-link smoothScroll">Add</a>
        </button></p>
      </div>

    </div> -->

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