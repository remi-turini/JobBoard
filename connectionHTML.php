<!DOCTYPE html>
<html lang="fr">
<head>
<!-- TETE DE PAGE -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Gérer le resposive sur les petites surfaces -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Pour les derniers moteur de rendu microsoft -->
    <title>Connectez-vous</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>    
    <script src="./js/script.js"></script>
</head>

<body>
    <?php include('connection.php'); ?> 
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
            <h2>Connectez-vous</h2>
            <p class="memberConnection">Pas encore membre ? <a href="./inscriptionHTML.php">Inscrivez-vous</a></p>

            <form action="" method="POST">
                <div class="divMail">
                    <label for="mail">Adresse mail :</label>
                    <input type="email" name="email" id="mail" placeholder="Adresse mail">
                </div>
                <div class="divPassword">
                    <label for="password">Mot de passe :</label>
                    <input type="password" name="password" id="password" placeholder="Mot de passe">
                </div>

                <p class="msgError"><?php if(isset($error)) echo $error; ?></p>

                <div class="divConnect">
                    <div class="checkboxConnection">
                        <input type="checkbox" name="checkboxConnection" id="checkboxConnection">
                        <label for="checkboxConnection">Resté connecté</label>
                    </div>
                    <a href="#">Mot de passe oublié ?</a>
                </div>

                <button type="submit" class="connectionAccount" name="connectForm">
                    <p>Se connecter</p>
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
