<?php 

$servername = "localhost";
$username = "id21391682_lespaniersgourmands";
$password = "Panier93!";
$database = "id21391682_lespaniersgourmandsdejuliette";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo "Erreur de connexion";
}

?>