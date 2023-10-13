<?php
$servername = "localhost";
$username = "id21391682_lespaniersgourmands";
$password = "Panier93!";
$database = "id21391682_lespaniersgourmandsdejuliette";

// Fonction de génération de token
function generateUniqueToken() {
    return md5(uniqid(mt_rand(), true));
}

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

if (isset($_POST['ok'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    $email = $_POST['email'];

    // Vérification si le pseudo existe déjà
    $checkQueryPseudo = $bdd->prepare("SELECT * FROM users WHERE pseudo = :pseudo");
    $checkQueryPseudo->execute(array("pseudo" => $pseudo));

    // Vérification si l'e-mail existe déjà
    $checkQueryEmail = $bdd->prepare("SELECT * FROM users WHERE email = :email");
    $checkQueryEmail->execute(array("email" => $email));

    if ($checkQueryPseudo->rowCount() > 0) {

        echo "Ce pseudo est déjà utilisé. Veuillez en choisir un autre.";
        
    } elseif ($checkQueryEmail->rowCount() > 0) {

        echo "Cet e-mail est déjà utilisé. Veuillez en choisir un autre.";

    } else {

        $token = generateUniqueToken();
        $requete = $bdd->prepare("INSERT INTO users (pseudo, nom, prenom, mdp, email, token) VALUES (:pseudo, :nom, :prenom, :mdp, :email, :token)");
        $requete->execute(array(
            "pseudo" => $pseudo,
            "nom" => $nom,
            "prenom" => $prenom,
            "mdp" => $mdp,
            "email" => $email,
            "token" => $token
        ));
        
        header("Location: ./register_reussie.php");
    }
}


?>
