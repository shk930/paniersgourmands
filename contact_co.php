<?php
session_start();

if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header("Location: connexion.php");
    exit();
}
?>

?>

<!DOCTYPE html>
<html>

<head>
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
  <title>Contacts</title>

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
                  <a class="nav-link" href="./menu_co.php">Menus</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="./contact_co.php">Contact</a>
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
          Nos contacts :
        </h2>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="./images/twitter.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                <a href="https://twitter.com/lespaniersgourm" target="_blank">Twitter</a>
              </h5>

            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="./images/instagram.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                <a href="https://www.instagram.com/lespaniersgourmandsdejuliette/" target="_blank">Instagram</a> 
              </h5>

            </div>
          </div>
        </div>
            </div>
          </div>
        </div>
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
                <u>Email :</u> lespaniersgourmandsdejuliette@gmail.com
                <br>
                <br>
                <u>Téléphone :</u> 07 56 49 81 05
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
                    Menus
                  </a>
                </li>
                <li>
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
</body>

</html>