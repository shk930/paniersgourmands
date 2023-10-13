<?php

session_start();

$servername = "localhost";
$username = "id21390517_lespaniersgourmands";
$password = "Panier93!";
$database = "id21390517_lespaniersgourmands";

include "db_conn.php";
// ...

if (isset($_POST['pseudo']) && isset($_POST['mdp'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $pseudo = validate($_POST['pseudo']);
    $mdp = validate($_POST['mdp']);
    
    if (empty($pseudo)) {
        header("Location: ./connexion.php?error=Veuillez saisir votre pseudo");
        exit();
    } elseif (empty($mdp)) {
        header("Location: ./connexion.php?error=Veuillez saisir votre mot de passe");
        exit();
    } else {
        $token = bin2hex(random_bytes(32));

        $sql = "SELECT * FROM users WHERE pseudo = '$pseudo' AND mdp = '$mdp'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['pseudo'] === $pseudo && $row['mdp'] === $mdp) {
                $newToken = bin2hex(random_bytes(32));
                $email = $row['email']; // Récupérez l'e-mail de l'utilisateur

                $updateSql = "UPDATE users SET token = '$newToken' WHERE pseudo = '$pseudo' AND mdp = '$mdp'";
                if (mysqli_query($conn, $updateSql)) {
                   $_SESSION['pseudo'] = $row['pseudo'];
                    $_SESSION['nom'] = $row['nom'];
                    $_SESSION['id'] = $row['id'];

                    setcookie("token", $newToken, time() + 10000);
                    setcookie("email", $email, time() + 10000); // Définissez le cookie "email" avec la valeur de l'e-mail

                    header("Location: ./home.php");
                    exit();
                } else {
                    header("Location: ./connexion.php?error=Erreur lors de la mise à jour du token");
                    exit();
                }
            } else {
                header("Location: ./connexion.php?error=Pseudo ou Mot de passe incorrect!");
                exit();
            }
        } else {
            header("Location: ./connexion.php?error=Pseudo ou Mot de passe incorrect!");
            exit();
        }
    }
} else {
    header("Location: ./connexion.php");
    exit();
}

?>
