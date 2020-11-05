<?php

    $db = new PDO("mysql:host=localhost;dbname=jobboard",'root','root');
    $db->exec("set names utf8");

    $id = $_COOKIE['updateId'];
    require_once('readAdvertisements.php');

    if(isset($_POST['updateForm'])){
     
        $companieName = $_POST['companieName'];     
        $companieLocalisation = $_POST['companieLocalisation'];
        $advertisementsDate = $_POST['advertisementsDate']; 
        $postName = $_POST['postName']; 
        $contractType = $_POST['contractType']; 
        $mission = $_POST['mission']; 
        $formation = $_POST['formation'];        
        $quality = $_POST['quality'];     
        $workTime = $_POST['workTime'];     
        $experience = $_POST['experience'];
        $salary = $_POST['salary'];
        $telework = $_POST['telework'];

        $requete = "UPDATE `advertisements` SET `companieName`= ?, `companieLocalisation`= ?, `advertisementsDate`= ?, `postName`= ?, `contractType`= ?, `mission`= ?, `formation`= ?, `quality`= ?, `workTime`= ?, `experience`= ?, `salary`= ?, `telework`= ? WHERE id = ?";

        $stmt = $db->prepare($requete);
        $stmt->execute(array($companieName, $companieLocalisation, $advertisementsDate, $postName, $contractType, $mission, $formation, $quality, $workTime, $experience, $salary, $telework, $id));

        header('location: ../../adminHTML.php');

    }

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Gérer le resposive sur les petites surfaces -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Pour les derniers moteur de rendu microsoft -->
    <title>Modifier une annonce</title>
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
            <h2>Modifier l'annonce</h2>
            <div class="divActivitySector">
                <label for="companieName">Nom de l'entreprise :</label>
                <input type="text" name="companieName" value="<?php if(isset($advertisements['companieName'])) echo $advertisements['companieName']; ?>">
            </div>
            <div class="divDescription">
                <label for="companieLocalisation">Localisation :</label>
                <input type="text" name="companieLocalisation" value="<?php if(isset($advertisements['companieLocalisation'])) echo $advertisements['companieLocalisation']; ?>">
            </div>
            <div class="divName">
                <label for="advertisementsDate">Date de l'annonce :</label>
                <input type="text" name="advertisementsDate" value="<?php if(isset($advertisements['advertisementsDate'])) echo $advertisements['advertisementsDate']; ?>">
            </div>
            <div class="divName">
                <label for="postName">Intitulé de poste :</label>
                <input type="text" name="postName" value="<?php if(isset($advertisements['postName'])) echo $advertisements['postName']; ?>">
            </div>
            <div class="divName">
                <label for="contractType">Type de contrat :</label>
                <input type="text" name="contractType" value="<?php if(isset($advertisements['contractType'])) echo $advertisements['contractType']; ?>">
            </div>
            <div class="divName">
                <label for="mission">Mission :</label>
                <textarea cols="50" rows="10" type="text" name="mission"><?php if(isset($advertisements['mission'])) echo $advertisements['mission']; ?></textarea>
            </div>
            <div class="divName">
                <label for="formation">Formation :</label>
                <textarea cols="50" rows="10" type="text" name="formation"><?php if(isset($advertisements['formation'])) echo $advertisements['formation']; ?></textarea>
            </div>
            <div class="divName">
                <label for="quality">Qualités :</label>
                <textarea cols="50" rows="10" type="text" name="quality"><?php if(isset($advertisements['quality'])) echo $advertisements['quality']; ?></textarea>
            </div>
            <div class="divName">
                <label for="workTime">Temps de travail :</label>
                <input type="text" name="workTime" value="<?php if(isset($advertisements['workTime'])) echo $advertisements['workTime']; ?>">
            </div>
            <div class="divName">
                <label for="experience">Experience :</label>
                <textarea cols="50" rows="10" type="text" name="experience"><?php if(isset($advertisements['experience'])) echo $advertisements['experience']; ?></textarea>
            </div>
            <div class="divName">
                <label for="salary">Salaire :</label>
                <input type="text" name="salary" value="<?php if(isset($advertisements['salary'])) echo $advertisements['salary']; ?>">
            </div>
            <div class="divName">
                <label for="telework">Télé-travail :</label>
                <input type="text" name="telework" value="<?php if(isset($advertisements['telework'])) echo $advertisements['telework']; ?>">
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
