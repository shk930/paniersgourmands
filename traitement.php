<?php
$servername = "localhost";
$username = "id21391682_lespaniersgourmands";
$password = "Panier93!";
$database = "id21391682_lespaniersgourmandsdejuliette";

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
    
    // Génération d'un token unique
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

// Fonction de génération de token
function generateUniqueToken() {
    // Code de génération de token unique ici
    // Vous pouvez utiliser des fonctions de hachage, comme md5 ou sha1, pour créer un token unique
    return md5(uniqid(mt_rand(), true));
}
?>
