<!DOCTYPE html>
<html lang="fr">
<head>
<!-- TETE DE PAGE -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Gérer le resposive sur les petites surfaces -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Pour les derniers moteur de rendu microsoft -->
    <title>Inscrivez-vous</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>    
    <script src="./js/script.js"></script>
</head>

<body>
    <!-- ###### -->
    <!-- HEADER -->
    <!-- ###### -->
    <header>
        <div class="header headerConnection">
            <a href="./accueilHTML.php" class="logo">
                <img src="./img/epijob-white.svg" alt="logo-white">
            </a>
        </div>
    </header>
    <!-- /// -->
    <!-- /// -->
    <!-- /// -->

    <!-- #### -->
    <!-- MAIN -->
    <!-- #### -->
    <main class="connection">
        <section class="form">
            <h2>Créer un compte gratuitement</h2>
            <p class="memberConnection">Déjà membre ? <a href="./connectionHTML.php">Connectez-vous</a></p>

            <?php include('inscription.php'); ?>
            <form action="" method="POST">
                <div class="divName">
                    <label for="lastName">Nom :</label>
                    <input type="text" name="lastName" placeholder="Nom de famille" required value="<?php if(isset($lastName)) echo $lastName;?>">
                </div>
                <div class="divFirstName">
                    <label for="firstName">Prénom :</label>
                    <input type="text" name="firstName" placeholder="Prénom" required value="<?php if(isset($firstName)) echo $firstName; ?>">
                </div>
                <div class="divMail">
                    <label for="email">Adresse mail :</label>
                    <input type="email" name="email" placeholder="Adresse mail" required value="<?php if(isset($email)) echo $email; ?>">
                </div>
                <div class="divPhone">
                    <label for="phone">Téléphone :</label>
                    <input type="tel" name="phone" placeholder="Téléphone" value="<?php if(isset($phone)) echo $phone; ?>">
                </div>
                <div class="divPassword">
                    <label for="password">Mot de passe :</label>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                </div>
                <div class="divPasswordConfirm">
                    <label for="passwordConfirm">Confirmez votre mot de passe :</label>
                    <input type="password" name="passwordConfirm" placeholder="Confirmez votre mot de passe" required>
                </div>

                <p class="msgError"><?php if(isset($error)) echo $error; ?></p>

                <button type="submit" class="createAccount" name="inscriptionForm">
                    <p>Créer un compte</p>
                </button>
            </form>
        </section>
        
    </main>
    <!-- /// -->
    <!-- /// -->
    <!-- /// -->

    <!-- ###### -->
    <!-- FOOTER -->
    <!-- ###### -->
    <footer>
        <!--
        <div class="linkFooter">
            <ul class="candidateSpace">
                <li>
                    <h3>Espace candidat</h3>
                </li>
                <li>
                    <p>
                        <a href="#">Toutes les offres</a>
                    </p>
                </li>
                <li>
                    <p>
                        <a href="#">Déposer un CV</a>
                    </p>
                </li>
            </ul>
        
            <ul class="recruiterSpace">
                <li>
                    <h3>Espace recruter</h3>
                </li>
                <li>
                    <p>
                        <a href="#">Déposer une annonce</a>
                    </p>
                </li>
                <li>
                    <p>
                        <a href="#">Nos offres</a>
                    </p>
                </li>
            </ul>
        </div>

        <hr class="lineFooter">
        -->

        <p class="rightsReserved">© 2020 EpiJob - Tout droits réservés - <a href="#">Centre de confidentialité</a> - <a href="">Conditions d'utilisation</a> </p>
    </footer>
    <!-- /// -->
    <!-- /// -->
    <!-- /// -->
</body>

</html>
