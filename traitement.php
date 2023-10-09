<?php
$servername = "localhost";
$username = "root";
$password = "root";

try{
    $bdd = new PDO("mysql:host=$servername;dbname=paniers_gourmands", $username , $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Erreur :  ".$e->getMessage();
}



if(isset($_POST['ok'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $requete = $bdd->prepare("INSERT INTO users VALUEES (0, :nom , :prenom, :email, :mot_de_passe")
    $requete->execute(
        array(
            "nom" => $nom,
            "prenom" => $prenom,
            "email" => $email,
            "mot_de_passe" => $mot_de_passe
        )
    );
    echo "Inscription réussie!";
}

?>