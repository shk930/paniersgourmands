<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les données du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $motdepasse = $_POST["motdepasse"];

    // Connexion à la base de données MySQL
    $connexion = new mysqli("localhost", "nom", "mdp", "lespaniersgourmands ");

    // Vérifiez la connexion
    if ($connexion->connect_error) {
        die("Erreur de connexion à la base de données : " . $connexion->connect_error);
    }

    // Préparez la requête SQL pour insérer les données
    $requete = $connexion->prepare("INSERT INTO utilisateurs (nom, email, motdepasse) VALUES (?, ?, ?)");
    $requete->bind_param("sss", $nom, $email, $motdepasse);

    // Exécutez la requête SQL
    if ($requete->execute()) {
        echo "<h2>Confirmation d'inscription</h2>";
        echo "Nom : " . $nom . "<br>";
        echo "E-mail : " . $email . "<br>";
        echo "L'inscription a été enregistrée dans la base de données.";
    } else {
        echo "Erreur lors de l'insertion des données : " . $requete->error;
    }

    // Fermez la connexion
    $connexion->close();
}
?>
