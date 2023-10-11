<?php
$servername = "localhost";
$username = "id21385719_shakethandrissselim";
$password = "Ssd9370093600!";
$database = "id21385719_bddlpg";

try{
    $bdd = new PDO("mysql:host=$servername;dbname=id21385719_bddlpg", $username , $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Connexion réussie !';
}
catch(PDOException $e){
    echo "Erreur :  ".$e->getMessage();
}


if(isset($_POST['ok'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    $email = $_POST['email'];
    
    $requete = $bdd->prepare("INSERT INTO users (pseudo, nom, prenom, mdp, email) VALUES (:pseudo, :nom, :prenom, :mdp, :email)");
    $requete->execute(array(
        "pseudo" => $pseudo,
        "nom" => $nom,
        "prenom" => $prenom,
        "mdp" => $mdp,
        "email" => $email
    ));
    header("Location: ./register_reussie.php");
}
?>