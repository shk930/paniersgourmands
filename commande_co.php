<?php
$servername = "localhost";
$username = "id21391682_lespaniersgourmands";
$password = "Panier93!";
$database = "id21391682_lespaniersgourmandsdejuliette";


session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header("Location: connexion.php");
    exit();
}

// Récupérez les produits du panier depuis la session
if (isset($_SESSION['commandes']) && !empty($_SESSION['commandes'])) {
    $commandes = $_SESSION['commandes'];
} else {
    $commandes = array();
}

// Calculez le prix total de la commande et la quantité totale
$total = 0;
$quantityTotal = 0; // Nouvelle variable pour la quantité totale

foreach ($commandes as &$item) {
    $product_id = $item['product_id'];

    // Assurez-vous que la quantité est un nombre entier
    if (isset($_POST['quantity'][$product_id])) {
        $new_quantity = (int)$_POST['quantity'][$product_id];
        
        // Vérifiez que la quantité est supérieure ou égale à zéro
        if ($new_quantity >= 0) {
            $item['quantity'] = $new_quantity;
        }
    }
}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
        <title>Ma commande</title>

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

        <link href="./css/commande.css" rel="stylesheet" />

    </head>
    <body>


    <div class="card">
            <div class="row">
            <div class="col-md-8 cart">
            <div class="title">
    <div class="row">
        <div class="col"><h4><b>Mon panier</b></h4></div>
        <div class="col align-self-center text-right text-muted"><?php echo count($commandes); ?> objets</div> <!-- Utilisation de $commandes au lieu de $product -->
    </div>
</div>
    </div>
    <?php
// ...
if (!empty($commandes)) {
    foreach ($commandes as $item) {
        echo '<div class="row border-top border-bottom">';
        echo '<div class="row main align-items-center">';
        echo '<div class="col-2"><img class="img-fluid" src="' . (isset($item['product_image']) ? $item['product_image'] : '') . '"></div>';
        echo '<div class="col">';
        echo '<div class="row text-muted">' . (isset($item['product_name']) ? $item['product_name'] : '') . '</div>';
        echo '<div class="row">' . (isset($item['description']) ? $item['description'] : '') . '</div>';
        echo '</div>';
        echo '<div class="col">';
        echo '<a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>';
        echo '<a href="decrement_quantity.php?product_id=' . (isset($item['product_id']) ? $item['product_id'] : '') . '">-</a>';
        
        if (isset($item['quantity'])) {
            // Utilisez $item['quantity'] en toute sécurité ici
            echo '<span>' . $item['quantity'] . '</span>';
        } else {
            // Gérez le cas où la clé "quantity" est manquante
            echo '<span>Quantité manquante</span>';
        }
        
        echo '<a href="increment_quantity.php?product_id=' . (isset($item['product_id']) ? $item['product_id'] : '') . '">+</a>';
        echo '</div>';
        echo '<div class="col">';
        $price = (isset($item['product_price']) ? floatval($item['product_price']) : 0);
        echo number_format($price, 2) . ' &euro;';
        echo '<span class="close">&#10005;</span></div>';
        echo number_format($price, 2) . ' &euro;';
        echo '<span class="close">&#10005;</span></div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<p>Votre panier est vide.</p>';
}
$quantityTotal = count($commandes);
?>

    <div class="back-to-shop"><a href="menu.php">&leftarrow;</a><span class="text-muted">Continuez mes achats</span></div>
</div>
                <div class="col-md-4 summary">
                    <div><h5><b>Sommaire</b></h5></div>
                    <hr>
                    <div class="row">
                    <div class="col" style="padding-left:0;"><?php echo count($commandes); ?> OBJET<?php echo (count($commandes) > 1) ? 'S' : ''; ?></div>

                        <div class="col text-right">132.00 &euro;</div>
                    </div>
                    <form>
                        <p>Moyen d'expédition</p>
                        <select>
                            <option class="text-muted">(Sélectionner votre moyen d'expédition)</option>
                            <option class="text-muted">Livraison Standard - 4.50 &euro;</option>
                            <option class="text-muted">Livraison Express - 8.50 &euro;</option>
                        </select>
                        <p>Code de réduction</p>
                        <input id="code" placeholder="Entrez votre code de réduction">
                    </form>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">PRIX TOTAL</div>
                        <div class="col align-self-center text-right text-muted">
                            <?php echo $quantityTotal; ?> objet<?php echo ($quantityTotal > 1) ? 's' : ''; ?>
                        </div>

                    </div>

                    <button class="btn">COMMANDER</button>
                </div>
            </div>
            
        </div>

    </body>
</html>