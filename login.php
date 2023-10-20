<?php
session_start();

$servername = "localhost";
$username = "id21391682_lespaniersgourmands";
$password = "Panier93!";
$database = "id21391682_lespaniersgourmandsdejuliette";

include "db_conn.php";

if (isset($_POST['pseudo']) && isset($_POST['mdp'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $pseudo = validate($_POST['pseudo']);
    $mdp = validate($_POST['mdp']);

    if (empty($pseudo) || empty($mdp)) {
        $error = "Veuillez saisir un pseudo et un mot de passe valide.";
    } else {
        $sql = "SELECT * FROM users WHERE pseudo = ? AND mdp = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $pseudo, $mdp);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $newToken = bin2hex(random_bytes(32));
            $email = $row['email'];

            $updateSql = "UPDATE users SET token = ? WHERE pseudo = ?";
            $updateStmt = $conn->prepare($updateSql);
            $updateStmt->bind_param("ss", $newToken, $pseudo);

            if ($updateStmt->execute()) {
                $_SESSION['pseudo'] = $row['pseudo'];
                $_SESSION['nom'] = $row['nom'];
                $_SESSION['id'] = $row['id'];

                setcookie("token", $newToken, time() + 10000);
                setcookie("email", $email, time() + 10000);
                $_SESSION['is_logged_in'] = true;  // Ajout de la variable de session pour la connexion
                header("Location: ./index_co.php");
                exit();
            } else {
                $error = "Erreur lors de la mise à jour du token.";
            }
        } else {
            $error = "Pseudo ou Mot de passe incorrect.";
        }
    }

    if (isset($error)) {
        header("Location: ./connexion.php?error=" . urlencode($error));
        exit();
    }
} else {
    header("Location: ./connexion.php");
    exit();
}
?>
