<!DOCTYPE html>
<html lang="fr">
<head>
<!-- TETE DE PAGE -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Gérer le resposive sur les petites surfaces -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Pour les derniers moteur de rendu microsoft -->
    <title>EpiJob</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>    
    <script src="./js/script.js"></script>
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
                        <?php if($_COOKIE['id'] == 1){ ?>
                                <li>
                                    <!-- <p>Si admin connecté : page admninistration</p> -->
                                    <a href="adminHTML.php">Admnistration</a>
                                </li>
                        <?php } ?>
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
        <section id="headProfil">
            <svg viewBox="0 0 16 16" class="bi bi-emoji-smile" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683z"/>
                <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
            </svg>
            
            <?php if(isset($_COOKIE['id'])){ ?>
            <h2><?php echo $_COOKIE['firstName'] , ' ' .$_COOKIE['lastName']; ?></h2>
            <a href="adminHTML.php"></a>
        </section>

        <section id="details">
            <div>
                <h2>Vos coordonnées :</h2>
                <ul>
                    <li>
                        <h3>Nom :</h3> 
                    </li>
                    <li>
                        <p><?php echo $_COOKIE['lastName']; ?></p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <h3>Prénom :</h3> 
                    </li>
                    <li>
                        <p><?php echo $_COOKIE['firstName']; ?></p>
                    </li>
                </ul>
                <ul>
                    <li> 
                        <h3>Adresse Mail :</h3>
                    </li>
                    <li>
                        <p><?php echo $_COOKIE['email']; ?></p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <h3>Téléphone :</h3>
                    </li>
                    <li>
                        <p><?php if(isset($_COOKIE['phone'])) echo $_COOKIE['phone']; ?></p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <h3>Mot de passe :</h3>
                    </li>
                    <li>
                        <p>***Hide***</p>
                    </li>
                </ul>
                <ul id="lastDetails">
                    <li>
                        <h3>CV :</h3>
                    </li>
                    <li>
                        <p>CV Importé (si importé)</p>
                    </li>
                </ul>
                <br>
                <h3>Vos annonces postulés:</h3>
                <?php
                include('./API/jobApplication/readAllJobApplication.php');
                foreach($result2 as $jobApplication){
                    if($jobApplication['firstName'] == $_COOKIE['firstName']){
                        ?>
                        <section class="sectionOffer">
                            <!-- JOB HEADER -->
                            <div class="jobHeader">
                                <img src="<?php echo $jobApplication['image'] ?>" class="jobHeaderImg" alt="image offer advertisement">
                                
                                <p class="company"><?= $jobApplication['companieName'] ?></p>

                                <h2 class="offerName"><?= $jobApplication['postName'] ?></h2>

                                <div class="divIcone">
                                    <div class="contract">
                                        <img src="./img/userboard-black.svg" alt="icone userboard">
                                        <p><?= $jobApplication['contractType'] ?></p>
                                    </div>
                                    <div class="localisation">
                                        <img src="./img/map-marker-alt-black.svg" alt="icone localisation">
                                        <p><?= $jobApplication['companieLocalisation'] ?></p>
                                    </div>
                                    <div class="day">
                                        <img src="./img/calendar-alt-black.svg" alt="icone calendar">
                                        <p><?= $jobApplication['advertisementsDate'] ?></p>
                                    </div>
                                </div>                    
                            </div>
                            <!-- /// -->

                            <!-- JOB DESCRIPTION -->
                            <div class="jobDescription">
                                <!-- SCRIPT -->
                                <script>
                                    $(document).ready(function() { 
                                        $("#btnLearnMore<?php echo $jobApplication['id'] ?>").click(function() {
                                            $('#learnMore<?php echo $jobApplication['id'] ?>').css('display', 'initial');
                                            $("#btnLearnMore<?php echo $jobApplication['id'] ?>").css('display', 'none');
                                        });
                                        $("#btnLearnLess<?php echo $jobApplication['id'] ?>").click(function() {
                                            $('#learnMore<?php echo $jobApplication['id'] ?>').css('display', 'none');
                                            $("#btnLearnMore<?php echo $jobApplication['id'] ?>").css('display', 'initial');
                                        });
                                    });

                                </script>
                                <!-- /// -->

                                <!-- CONTENT -->
                                <p class="btnLearnMore" id="btnLearnMore<?php echo $jobApplication['id'] ?>">Learn More</p>

                                <div class="learnMore" id="learnMore<?php echo $jobApplication['id'] ?>">

                                    <h2>Mission principale :</h2>
                                    <p>
                                        <?php echo $jobApplication['mission']; ?>
                                    </p>

                                    <h2>Formation :</h2>
                                    <p>
                                        <?php echo $jobApplication['formation']; ?>
                                    </p>

                                    <h2>Qualités :</h2>
                                    <p>
                                        <?php echo $jobApplication['quality']; ?>
                                    </p>

                                    <h2>Durée du contrat :</h2>
                                    <p>
                                        <?php echo $jobApplication['workTime']; ?>
                                    </p>

                                    <h2>Expérience :</h2>
                                    <p>
                                        <?php echo $jobApplication['experience']; ?>
                                    </p>

                                    <h2>Télétravail</h2>
                                    <p>
                                        <?php echo $jobApplication['telework']; ?>
                                    </p>

                                    <p class="btnLearnLess" id="btnLearnLess<?php echo $jobApplication['id'] ?>">Learn Less</p>
                                </div>
                                <!-- /// -->
                            </div>
                        </section>
                        <?php
                    }
                }
                ?>
            </div>
            <a href="updateProfilHTML.php" id="editProfil">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
            </a>
        </section>
            
        <section id="headProfilNotConnected">
        <?php } else {
            ?> <p> Session non valide, veuillez vous connecter.</p>
        <?php
            }
        ?>
        </section>
            
    </main>

    <footer>
        <p class="rightsReserved">© 2020 EpiJob - Tout droits réservés - <a href="#">Centre de confidentialité</a> - <a href="">Conditions d'utilisation</a> </p>
    </footer>

</body>
</html>