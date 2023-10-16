<?php
$servername = "localhost";
$username = "id21391682_lespaniersgourmands";
$password = "Panier93!";
$database = "id21391682_lespaniersgourmandsdejuliette";

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header("Location: connexion.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['product_id']) && isset($_POST['product_name']) && isset($_POST['product_price']) && isset($_POST['product_image'])) {
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_description = 'Description du produit'; // Ajoutez la description appropriée ici

        // Insertion du produit dans la base de données
        $stmt = $pdo->prepare("INSERT INTO commandes (product_id, product_name, product_price, product_image, description, quantity) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$product_id, $product_name, $product_price, $product_image, $product_description]);

        $product = array(
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_image' => $product_image,
            'description' => $product_description,
            'quantity' => 1, // Initial quantity is set to 1
        );
        

        if (isset($_SESSION['commandes'])) {
            $existing_keys = array_column($_SESSION['commandes'], 'product_id');
            if (in_array($product_id, $existing_keys)) {
                foreach ($_SESSION['commandes'] as &$item) {
                    if ($item['product_id'] === $product_id) {
                        $item['quantity'] += 1;
                    }
                }
            } else {
                $_SESSION['commandes'][] = $product;
            }
        } else {
            $_SESSION['commandes'] = array($product);
        }
        
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <script src="./js/color-modes.js"></script>
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
    <!-- header section starts -->
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
                        <div class="card-body">
                            <p class="card-text">Voici notre coffret goûter, envie d'un délicieux moment de pur délice, le coffret goûter vous offrira une délicieuse aventure qui éveillera vos papilles.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <input type="hidden" name="product_id" value="1">
                                    <input type="hidden" name="product_name" value="El monstro">
                                    <input type="hidden" name="product_price" value="8,99€">
                                    <input type="hidden" name="product_image" value="./images/t3.jpg"> <!-- Ajout du champ pour l'image -->
                                    <!-- Ajoutez name="quantity" à vos boutons "Ajouter au panier" pour spécifier la quantité -->
                                    <button type="number" name="quantity" value="1" min="1">

                                    <button type="submit" name="quantity" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mx-auto">
                    <div class="card shadow-sm">
                        <img src="./images/t1.jpg" alt="Image de coffret surprise">
                        <div class="card-body">
                            <p class="card-text" name="description">Voici notre coffret surprise, plongez dans l'inatendu avec notre mystérieux coffret, où chaque boîte est une promesse d'émerveillement et de découvertes uniques</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <input type="hidden" name="product_id" value="2">
                                    <input type="hidden" name="product_name" value="El FAMASO ORQUE">
                                    <input type="hidden" name="product_price" value="11,99€">
                                    <input type="hidden" name="product_image" value="./images/t1.jpg"> <!-- Ajout du champ pour l'image -->
                                    <button type="number" name="quantity" value="1" min="1">

                                    <button type="submit" name="quantity" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mx-auto">
                    <div class="card shadow-sm">
                        <img id="sandwich-image" src="./images/hero-bg3.jpg" alt="Image de coffret sandwich">
                        <div class="card-body">
                            <p class="card-text" name="description">Voici notre coffret sandwich, un déjeuner frais et consistant parfait pour votre repas du midi, découvrez nos différents sandwich avec boisson et dessert  (choisir votre sandwich)</p>
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
                                    <input type="hidden" name="product_id" value="3">
                                    <input type="hidden" name="product_name" value="Coffret HAHA">
                                    <input type="hidden" name="product_price" value="9,99€">
                                    <input type="hidden" name="product_image" value="./images/hero-bg3.jpg"> <!-- Ajout du champ pour l'image -->
                                    <button type="number" name="quantity" value="1" min="1">

                                    <button type="submit" name="quantity" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
                    <div class="info_link">
                        <h5>
                            Liens
                        </h5>
                        <ul>
                            <li>
                                <a href="./index_co.php">
                                    Accueil
                                </a>
                            </li>
                            <li>
                                <a href="./menu_co.php">
                                    Menu
                                </a>
                            </li>
                            <li>
                                <a href="./contact_co.php">
                                    Contact
                                </a>
                            </li>
                            <li>
                                <a href="./about_co.php">
                                    À propos
                                </a>
                            </li>
                            <li>
                                <a href="./commande_co.php">
                                    Ma commande
                                </a>
                            </li>
                            <li>
                                <a href="./register.php">
                                    S'inscrire
                                </a>
                            </li>
                            <li>
                                <a href="./logout.php">
                                    Se déconnecter
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end info section -->

</body>
</html>
