<!DOCTYPE html>
<html lang="fr">
<head>
<!-- TETE DE PAGE -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Gérer le resposive sur les petites surfaces -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Pour les derniers moteur de rendu microsoft -->
    <title>EpiJob</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- ###### -->
    <!-- HEADER -->
    <!-- ###### -->
    <?php
        if(isset($_COOKIE['id'])){
    ?>
        <header class="connected">
            <div class="navigation">
                <a href="./accueilHTML.php" class="logo">
                    <img src="./img/epijob-white.svg" alt="logo-white">
                </a>

                <div class="divConnected">
                    <a href="" class="btnConnect">
                        <div>
                            <svg viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                            </svg>
                            <p><?php echo 'Bonjour ' .$_COOKIE['firstName'];?></p>
                        </div>
                    </a>

                    <ul>
                        <li>
                            <!-- <p>Mon profil</p> -->
                            <a href="profilHTML.php">Mon profil</a>
                        </li>
                        <li id="lastMenu">
                            <!-- <p>Deconnexion</p> -->
                            <a href="deconnexion.php">Se déconnecter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <script>
            $(".conected").show();
            $(".notConected").hide();
        </script>

    <?php
    } else {
    ?>
        <header class="notConnected">
            <div class="navigation">
                <a href="./accueilHTML.php" class="logo">
                    <img src="./img/epijob-white.svg" alt="logo-white">
                </a>

                <div class="divNotConnected">
                    <a href="./connectionHTML.php" class="btnConnect">
                        <div>
                            <svg viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                            </svg>
                            <p>Connexion</p>
                        </div>
                    </a>
                </div>
            </div>
        </header>

        <script>
            $(".conected").hide();
            $(".notConected").show();
        </script>

    <?php
        }
    ?>
    <!-- /// -->
    <!-- /// -->
    <!-- /// -->

    <!-- #### -->
    <!-- MAIN -->
    <!-- #### -->
    <main class="mainProfil">

        <?php include('updateProfil.php'); ?>
        <form action="" method="POST" id="profilForm">
            <h2>Modifier votre compte</h2>
            <div class="divName">
                <label for="nom">Nom :</label>
                <input type="text" name="lastName" id="nom" placeholder="Nom de famille" required value="<?php echo $_COOKIE['lastName']; ?>">
            </div>
            <div class="divFirstName">
                <label for="firstName">Prénom :</label>
                <input type="text" name="firstName" id="firstName" placeholder="Prénom" required value="<?php echo $_COOKIE['firstName']; ?>">
            </div>
            <div class="divMail">
                <label for="mail">Adresse mail :</label>
                <input type="email" name="email" id="mail" placeholder="Adresse mail" required value="<?php echo $_COOKIE['email']; ?>">
            </div>
            <div class="divPhone">
                <label for="phone">Numero de telephone :</label>
                <input type="tel" name="phone" id="telephone" placeholder="Numero telephone" value="<?php if(isset($_COOKIE['phone'])) echo $_COOKIE['phone']; ?>">
            </div>
            <div class="divPassword">
                <label for="password">Nouveau mot de passe :</label>
                <input type="password" name="password" id="password" placeholder="Mot de passe" >
            </div>
            <div class="divPasswordConfirm">
                <label for="passwordConfirm">Confirmez votre mot de passe :</label>
                <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirmez votre mot de passe" >
            </div>

            <div class="footerFormProfil">
                <p class="msgError"><?php if(isset($error)) echo $error; ?></p>

                <button type="submit" class="updateAccount" name="updateForm">
                    <p>Modifier le compte</p>
                </button>
                <button type="submit" class="cancelModify">
                    <a href="profilHTML.php">Annuler</as>
                </button>
            </div>

        </form>

    </main>

    <footer>
        <p class="rightsReserved">© 2020 EpiJob - Tout droits réservés - <a href="#">Centre de confidentialité</a> - <a href="">Conditions d'utilisation</a> </p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>    
    <script src="./js/script.js"></script>

</body>
</html>