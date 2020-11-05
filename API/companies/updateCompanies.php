<?php

    $db = new PDO("mysql:host=localhost;dbname=jobboard",'root','root');
    $db->exec("set names utf8");

    $id = $_COOKIE['updateId'];
    require_once('readCompanies.php');

    if(isset($_POST['updateForm'])){

        $name = $_POST['name'];      
        $activitySector = $_POST['activitySector'];     
        $description = $_POST['description'];
        $headOffice = $_POST['headOffice'];  
        $management = $_POST['management'];  
        $workForce = $_POST['workForce'];         

        $requete = "UPDATE `companies` SET `name`= ?, `activitySector`= ?, `description`= ?, `headOffice`= ?, `management`= ?, `workForce`= ? WHERE id = ?";

        $stmt = $db->prepare($requete);
        $stmt->execute(array($name, $activitySector, $description, $headOffice, $management, $workForce, $id));

        header('location: ../../adminHTML.php');



    }

   

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Gérer le resposive sur les petites surfaces -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Pour les derniers moteur de rendu microsoft -->
    <title>Modifier une entreprise</title>
    <link rel="stylesheet" href="../../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>    
    <script src="../../js/script.js"></script>
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
                <a href="../../accueilHTML.php" class="logo">
                    <img src="../../img/epijob-white.svg" alt="logo-white">
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
                            <a href="./../profilHTML.php">Mon profil</a>
                        </li>
                        <li id="lastMenu">
                            <!-- <p>Deconnexion</p> -->
                            <a href="../../deconnexion.php">Se déconnecter</a>
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
                <a href="../../accueilHTML.php" class="logo">
                    <img src="../../img/epijob-white.svg" alt="logo-white">
                </a>

                <div class="divNotConnected">
                    <a href="../../connectionHTML.php" class="btnConnect">
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
    
    <main class="formAdmin">
        <button class="btnReturnPage">
            <a href="../../adminHTML.php">Retour</a>
        </button>

        <form action="" method="POST">
            <h2>Modifier l'entreprise</h2>
            <div class="divName">
                <label for="nom">Nom :</label>
                <input type="text" name="name" value="<?php if(isset($companies['name'])) echo $companies['name']; ?>">
            </div>
            <div class="divActivitySector">
                <label for="activitySector">Secteur d'activité :</label>
                <input type="text" name="activitySector" value="<?php if(isset($companies['activitySector'])) echo $companies['activitySector']; ?>">
            </div>
            <div class="divDescription">
                <label for="description">Description :</label>
                <textarea cols="50" rows="10" type="text" name="description"><?php if(isset($companies['description'])) echo $companies['description']; ?></textarea>
            </div>
            <div class="divHeadOffice">
                <label for="description">Siége social :</label>
                <input type="text" name="headOffice" value="<?php if(isset($companies['headOffice'])) echo $companies['headOffice']; ?>">
            </div>
            <div class="divManagement">
                <label for="description">Direction :</label>
                <input type="text" name="management" value="<?php if(isset($companies['management'])) echo $companies['management']; ?>">
            </div>
            <div class="divWorkForce">
                <label for="description">Effectif :</label>
                <input type="text" name="workForce" value="<?php if(isset($companies['workForce'])) echo $companies['workForce']; ?>">
            </div>
            
            <p class="msgError"><?php if(isset($error)) echo $error; ?></p>

            <button type="submit" class="updateAccount" name="updateForm">
                <p>Modifier</p>
            </button>
        </form>
    </main>

    <footer>
        <p class="rightsReserved">© 2020 EpiJob - Tout droits réservés - <a href="#">Centre de confidentialité</a> - <a href="">Conditions d'utilisation</a> </p>
    </footer>
</body>
</html>