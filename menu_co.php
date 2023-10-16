<?php
session_start();

if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header("Location: connexion.php");
    exit();
}
?>


<!DOCTYPE html>
<html>

<head><script src="./js/color-modes.js"></script>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
  <title>Nos menus</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="./css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="./css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="./css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="./images/bannière.png" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container">

          <div class="contact_nav">
          </div>
          <div class="social_box">
            <a href="https://twitter.com/lespaniersgourm" target="_blank">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/lespaniersgourmandsdejuliette/" target="_blank">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand " href="./index_co.php"><img style="height: 150px;" src="./images/logo.png" alt="Logo d'accueil"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="./index_co.php">Accueil <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="./menu_co.php"> Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./contact_co.php">Contact </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./about_co.php"> À propos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./commande_co.php">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span>
                      Ma commande
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./register.php">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                    <span>
                      S'inscrire
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./logout.php">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    <span>
                    Se déconnecter
                    </span>
                  </a>
                </li>
            
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- team section -->

  <section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Nos menu
        </h2>
        <p>
          Venez acheter les meilleurs coffrets remplis de gourmandises !
        </p>
      </div>
    <form method="POST" action="./commande_co.php">
      <div class="row">
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="card shadow-sm">
            <img src="./images/t3.jpg" alt="Image de coffret pour le goûter">
            <!--svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            -->
              <div class="card-body">
              <p class="card-text">Voici notre coffret goûter, envie d'un délicieux moment de pur délice, le coffret goûter vous offrira une délicieuse aventure qui éveillera vos papilles.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <input type="hidden" name ="product_id" value="1">
                  <input type="hidden" name ="product_name" value="El monstro">
                  <input type="hidden" name ="product_price" value="8,99€">
                  <button type="submit" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="card shadow-sm">
            <img src="./images/t1.jpg" alt="Image de coffret surprise">
            <!--svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            -->
              <div class="card-body">
              <p class="card-text">Voici notre coffret surprise, plongez dans l'inatendu avec notre mystérieux coffret, où chaque boîte est une promesse d'émerveillement et de découvertes uniques</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <input type="hidden" name ="product_id" value="2">
                  <input type="hidden" name ="product_name" value="El FAMASO ORQUE">
                  <input type="hidden" name ="product_price" value="11,99€">
                  <button type="submit" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="card shadow-sm">
            <img id="sandwich-image" src="./images/hero-bg3.jpg" alt="Image de coffret sandwich">
            <!--svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            -->
              <div class="card-body">
              <p class="card-text">Voici notre coffret sandwich, un déjeuner frais et consistant parfait pour votre repas du midi, découvrez nos différents sandwich avec boisson et dessert  (choisir votre sandwich)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Poulet
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><button class="dropdown-item" type="button" id="poulet">Poulet</button></li>
                    <li><button class="dropdown-item" type="button" id="thon">Thon</button></li>
                    <li><button class="dropdown-item" type="button" id="fromage">Fromage</button></li>
                    <li><button class="dropdown-item" type="button" id="jambon">Jambon</button></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <input type="hidden" name ="product_id" value="3">
                  <input type="hidden" name ="product_name" value="Coffret HAHA">
                  <input type="hidden" name ="product_price" value="9,99€">
                  <button type="submit" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form> 
      </div>
    </div>
  </section>

  <!-- end team section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="row">
          <div class="col-md-3 ">
            <a class="navbar-brand" href="./index_co.php">
              <img style="height: 100px;" src="./images/logo.png" alt="Logo d'accueil">
            </a>
          </div>
          <div class="col-md-5 ">
            <div class="info_contact">


            </div>
          </div>
          <div class="col-md-4 ">
            <div class="social_box">


              <a href="https://twitter.com/lespaniersgourm" target="_blank">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>

              <a href="https://www.instagram.com/lespaniersgourmandsdejuliette/" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="info_bottom">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="info_detail">
              <h5>
                Qui sommes-nous?
              </h5>
              <p>
                Nous sommes les <strong><i>MEILLEURS</i></strong>.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info_form">
              <h5>
                Un problème ?
              </h5>
              <form action="">
                <input type="text" placeholder="Entrez votre email" />
                <button type="submit">
                  Souscrire
                </button>
              </form>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="info_detail">
              <h5>
                À propos
              </h5>
              <p style="font-size: 15px;">
                <u>Email:</u> lespaniersgourmandsdejuliette@gmail.com
                <br>
                <br>
                <u>Téléphone:</u>
              </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <div class="">
              <h5>
                Liens Utiles
              </h5>
              <ul class="info_menu">
                <li>
                  <a href="./index_co.php">
                    Accueil
                  </a>
                </li>
                <li>
                  <a href="./about_co.php">
                    À propos
                  </a>
                </li>
                <li>
                  <a href="./menu_co.php">
                    Menu
                  </a>
                </li>
                <li class="mb-0">
                  <a href="./contact_co.php">
                    Contact
                  </a>
                </li>
                <li class="mb-0">
                  <a href="./commande_co.php">
                    Ma commande
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved

      </p>
    </div>
  </footer>
  <!-- footer section -->

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Récupérez les éléments bouton pour chaque option du menu déroulant par leur ID
      var pouletButton = document.querySelector('#poulet');
      var thonButton = document.querySelector('#thon');
      var fromageButton = document.querySelector('#fromage');
      var jambonButton = document.querySelector('#jambon');
  
      // Récupérez l'élément d'image par son ID
      var dropdownButton = document.querySelector('#dropdownMenuButton1');
      var sandwichImage = document.getElementById('sandwich-image');
  
      // Écoutez le clic sur le bouton "Action"
      pouletButton.addEventListener("click", function () {
        // Changez l'image en conséquence (remplacez l'URL par celle de votre image pour "Action")
        dropdownButton.textContent = "Poulet ";
        sandwichImage.src = "./images/moha.jpg";
      });
  
      // Écoutez le clic sur le bouton "Another Action"
      thonButton.addEventListener("click", function () {
        // Changez l'image en conséquence (remplacez l'URL par celle de votre image pour "Another Action")
        dropdownButton.textContent = "Thon ";
        sandwichImage.src = "./images/t2.jpg";
      });
  
      // Écoutez le clic sur le bouton "Something Else"
      fromageButton.addEventListener("click", function () {
        // Changez l'image en conséquence (remplacez l'URL par celle de votre image pour "Something Else")
        dropdownButton.textContent = "Fromage ";
        sandwichImage.src = "./images/t1.jpg";
      });

      jambonButton.addEventListener("click", function () {
        // Changez l'image en conséquence (remplacez l'URL par celle de votre image pour "Something Else")
        dropdownButton.textContent = "Jambon ";
        sandwichImage.src = "./images/ahah.jpg";
      });
    });
  </script>

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

  <script 
  src="./assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>