<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./css/style_register.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Inscription </title> 
</head>
<body>

    <div class="container">

    <a href="./index.php"><img style="display: block; margin: 0 auto; height: 150px;" src="./images/logo.png" ></a>
        

        <form action="traitement.php" method="POST">
            <div>
                <div class="details personal">
                    <header>S'inscrire</header>
                    <br><br>
                    <div class="fields">
                        <div for="nom" class="input-field">
                            <label>Nom</label>
                            <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
                        </div>

                        <div for="prenom" class="input-field">
                            <label>Prénom</label>
                            <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
                        </div>

                        <div for="pseudo" class="input-field">
                            <label>Pseudo</label>
                            <input type="text" id="pseudo" name="pseudo" placeholder="Entrez un pseudo" required>
                        </div>

                        <div for="datenaissance" class="input-field">
                            <label>Date de naissance</label>
                            <input type="date" id="datenaissance" name="datenaissance" required>
                        </div>

                        <script>
                            // Calcul de la date maximale (13 ans avant la date actuelle)
                            const today = new Date();
                            today.setFullYear(today.getFullYear() - 13);

                            const datenaissance = document.getElementById("datenaissance");
                            datenaissance.max = today.toISOString().split('T')[0];
                        </script>

                        <div for="email" class="input-field">
                            <label>Email</label>
                            <input type="text" id="email" name="email" placeholder="Entrez votre email" required>
                        </div>

                        <div for="mdp" class="input-field">
                            <label>Mot de passe</label>
                            <input type="password" id="mdp" name="mdp" placeholder="Entrez votre mot de passe" required minlength="10">
                        </div>


                        <div for="telephone" class="input-field">
                            <label>Numéro de téléphone</label>
                            <input type="number" id="telephone" name="telephone" style="font-size: 13px; text-align: left;" placeholder="Entrez votre numéro de téléphone" required>
                        </div>

                        <div for="genre" class="input-field">
                            <label>Genre</label>
                            <select id="genre" name="genre" required>
                                <option disabled selected>Sélectionner votre genre</option>
                                <option>Homme</option>
                                <option>Femme</option>
                                <option>Autres</option>
                            </select>
                        </div>

                         <div for="adresse" class="input-field">
                            <label>Adresse</label>
                            <input id="adresse" name="adresse" type="text" placeholder="Entrez le N° et rue votre adresse" required>
                        </div>

                        <div for="pays" class="input-field">

                            <label for="pays">Pays</label>
                            <select id="pays" name="pays"required>
                                <option disabled selected>Sélectionner votre pays</option>
                                <option value="france">France</option>
                                <option value="belgique">Belgique</option>
                                <option value="canada">Canada</option>
                                <option value="espagne">Espagne</option>
                                <option value="italie">Italie</option>
                                <option value="royaume-uni">Royaume-Uni</option>
                                <option value="allemagne">Allemagne</option>
                                <option value="états-unis">États-Unis</option>
                                <option value="australie">Australie</option>
                                <option value="japon">Japon</option>
                                <option value="chine">Chine</option>
                                <option value="inde">Inde</option>
                                <option value="brésil">Brésil</option>
                                <option value="mexique">Mexique</option>
                                <option value="argentine">Argentine</option>
                                <option value="afrique-du-sud">Afrique du Sud</option>
                                <option value="nigeria">Nigeria</option>
                                <option value="kenya">Kenya</option>
                                <option value="égypte">Égypte</option>
                                <option value="maroc">Maroc</option>
                                <option value="tunisie">Tunisie</option>
                                <option value="sénégal">Sénégal</option>
                                <option value="côte-d-ivoire">Côte d'Ivoire</option>
                                <option value="algérie">Algérie</option>
    
                            </select>
    
                        </div>

                        <div for="codepostal" class="input-field">
                            <label>Code postal</label>
                            <input type="number" id="codepostal" name="codepostal" placeholder="Entrez votre code postal" required>
                        </div>

                        <div for="ville" class="input-field">
                            <label>Ville</label>
                            <input id="ville" name="ville" type="text" placeholder="Entrez votre ville" required>
                        </div>

                    </div>
                </div>

                <div class="input-field">
                    <input type="submit" style="background-color: #4070f4; color: white;" value="S'inscrire" name="ok">
                </div> 
            </div>
        </form>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>