<!DOCTYPE html>
<html lang="fr">
<head>
<!-- TETE DE PAGE -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Gérer le resposive sur les petites surfaces -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Pour les derniers moteur de rendu microsoft -->
    <title>Bienvenue Admin</title>
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
    <main class="mainAdmin">
    
        <div class="btnTable">
            <button class="btnSectionOfferAdmin">Table des annonces</button>
            <button class="btnSectionUsersAdmin">Table des utilisateurs</button>
            <button class="btnSectionJobApp">Table de demande d'emplois</button>
            <button class="btnSectionCompaniesAdmin">Table des entreprises</button>
        </div>
        <button class="btnReturn">
            <p>Retour</p>
        </button>
        <!-- TABLE ANNONCES -->
        <div id="topApply"></div>
        <section class="sectionOffer sectionOfferAdmin">

            <article>
                <h1>Annonces</h1>
                <?php
                include('./API/advertisements/readAllAdvertisements.php');
                foreach($result as $advertisements){
                ?>
                    <div>
                        <div class="jobHeader">
                            <img src="./img/1200px-Atos_logo.svg.png" class="jobHeaderImg" alt="image offer advertisement">
                            
                            <p class="company"><?= $advertisements['companieName'] ?></p>

                            <h2 class="offerName"><?= $advertisements['postName'] ?></h2>

                            <div class="divIcone">
                                <div class="contract">
                                    <img src="./img/userboard-black.svg" alt="icone userboard">
                                    <p><?= $advertisements['contractType'] ?></p>
                                </div>
                                <div class="localisation">
                                    <img src="./img/map-marker-alt-black.svg" alt="icone localisation">
                                    <p><?= $advertisements['companieLocalisation'] ?></p>
                                </div>
                                <div class="day">
                                    <img src="./img/calendar-alt-black.svg" alt="icone calendar">
                                    <p><?= $advertisements['advertisementsDate'] ?></p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="jobDescription">
                            <!-- SCRIPT -->
                            <script>
                                $(document).ready(function() { 
                                    $("#btnLearnMore<?php echo $advertisements['id'] ?>").click(function() {
                                        $('#learnMore<?php echo $advertisements['id'] ?>').css('display', 'initial');
                                        $("#btnLearnMore<?php echo $advertisements['id'] ?>").css('display', 'none');
                                    });
                                    $("#btnLearnLess<?php echo $advertisements['id'] ?>").click(function() {
                                        $('#learnMore<?php echo $advertisements['id'] ?>').css('display', 'none');
                                        $("#btnLearnMore<?php echo $advertisements['id'] ?>").css('display', 'initial');
                                    });
                                });

                            </script>
                            <!-- /// -->

                            <!-- CONTENT -->
                            <p class="btnLearnMore" id="btnLearnMore<?php echo $advertisements['id'] ?>">Learn More</p>

                            <div class="learnMore" id="learnMore<?php echo $advertisements['id'] ?>">

                                <h2>Mission principale :</h2>
                                <p>
                                    <?php echo $advertisements['mission']; ?>
                                </p>

                                <h2>Formation :</h2>
                                <p>
                                    <?php echo $advertisements['formation']; ?>
                                </p>

                                <h2>Qualités :</h2>
                                <p>
                                    <?php echo $advertisements['quality']; ?>
                                </p>

                                <h2>Durée du contrat :</h2>
                                <p>
                                    <?php echo $advertisements['workTime']; ?>
                                </p>

                                <h2>Expérience :</h2>
                                <p>
                                    <?php echo $advertisements['experience']; ?>
                                </p>

                                <h2>Télétravail</h2>
                                <p>
                                    <?php echo $advertisements['telework']; ?>
                                </p>

                                <p class="btnLearnLess" id="btnLearnLess<?php echo $advertisements['id'] ?>">Learn Less</p>
                            </div>

                            <script>
                            $(document).ready(function() { 
                                $(".update<?php echo $advertisements['id'] ?>").click(function() {
                                    document.cookie = "updateId = <?php echo $advertisements['id']; ?>";
                                });
                            });
                            </script>

                            <div class="btnJobAdmin">
                                <button type="submit" class="smallButton updateApply">
                                    <a class="update<?php echo $advertisements['id'] ?>" href="./API/advertisements/updateAdvertisements.php"  >Modifier</a>
                                </button>
                                <button class="deleteApply smallButton" type="submit">
                                    <a class="update<?php echo $advertisements['id'] ?>" href="./API/advertisements/deleteAdvertisements.php"  >Supprimer</a>
                                </button>
                            </div>
                            <!-- /// -->
                        </div>
                    </div>

                <?php
                }
                ?>

                <div class="offerFooter">
                    <button type="submit" class="btnNewApply">
                    <a class="update<?php echo $advertisements['id'] ?>" href="./API/advertisements/createAdvertisements.php"  >Créer une annonce</a>
                    </button>
                </div>
                
            </article>

        </section>

        <!-- TABLE UTILISATEURS -->
        <div id="topUsers"></div>
        <section class="sectionUsersAdmin">
            <?php require_once('./API/users/readAllUsers.php'); ?>

            <h1>Utilisateurs</h1>

            <?php
            foreach($result as $users){ ?>

                <ul class="infosList">
                    <li>
                        <h2>Utilisateurs <?php echo $users['id']; ?> :</h2>
                    </li>
                    <!-- Nom -->
                    <li>
                        <ul class="ulListInfo">
                            <li>
                                <h3>Nom :</h3>
                            </li>
                            <li>
                                <p><?php echo $users['lastName']; ?></p>
                            </li>
                        </ul>
                    </li>
                    <!-- Prénom -->
                    <li>
                        <ul class="ulListInfo">
                            <li>
                                <h3>Prénom :</h3>
                            </li>
                            <li>
                                <p><?php echo $users['firstName']; ?></p>
                            </li>
                        </ul>
                    </li>
                    <!-- Mail -->
                    <li>
                        <ul class="ulListInfo">
                            <li>
                                <h3>Adresse mail :</h3>
                            </li>
                            <li>
                                <p><?php echo $users['email']; ?></p>
                            </li>
                        </ul>
                    </li>
                    <!-- Téléphone -->
                    <li>
                        <ul class="ulListInfo">
                            <li>
                                <h3>Téléphone :</h3>
                            </li>
                            <li>
                                <p><?php if(!empty($users['phone'])) echo $users['phone']; ?></p>
                            </li>
                        </ul>
                    </li>
                    <!-- Mot de passe -->
                    <li>
                        <ul class="ulListInfo">
                            <li>
                                <h3>Mot de passe :</h3>
                            </li>
                            <li>
                                <p><?php echo $users['password']; ?></p>
                            </li>
                        </ul>
                    </li>
                    <!-- Boutons -->
                    <li>
                        <ul class="infoButton">
                            <li>
                                <button type="submit" class="smallButton updateUsers">
                                    <a class="update<?php echo $users['id'] ?>" href="./API/users/updateUsers.php"  >Modifier</a>
                                </button>
                            </li>
                            <li>
                                <button type="submit" class="smallButton deleteUsers">
                                    <a class="update<?php echo $users['id'] ?>" href="./API/users/deleteUsers.php"  >Supprimer</a>
                                </button>
                            </li>
                        </ul>
                    </li>
                </ul>
                <script>
                $(document).ready(function() { 
                    $(".update<?php echo $users['id'] ?>").click(function() {
                        document.cookie = "updateId = <?php echo $users['id']; ?>";
                    });
                });
                </script>
            <?php
                }
            ?>
            <button type="submit" class="addElement">
                <a class="update<?php echo $users['id'] ?>" href="./API/users/createUsers.php"  >Ajouter</a>
            </button>
    
        </section>


        <!-- TABLE ENTREPRISES -->
        <div id="topCompany"></div>
        <section class="sectionCompaniesAdmin">
            <?php
                require_once('./API/companies/readAllCompanies.php');
            ?>
            
            <h1>Entreprises</h1>
        
            <?php
            foreach($result as $companies) {

            ?><ul class="infosList">
                <li>
                    <h2>Entreprise <?php echo $companies['id']; ?> :</h2>
                </li>
                <li>
                    <ul class="ulListInfo">
                        <li>
                            <h3>Nom :</h3>
                        </li>
                        <li>
                            <p><?php echo $companies['name']; ?></p>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="ulListInfo">
                        <li>
                            <h3>Activité :</h3>
                        </li>
                        <li>
                            <p><?php echo $companies['activitySector']; ?></p>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="ulListInfo ulDescription">
                        <li>
                            <h3 class="description">Description :</h3>
                        </li>
                        <li>
                            <p><?php echo $companies['description']; ?></p>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="infoButton">
                        <li>
                            <button type="submit" class="smallButton">
                                <a class="update<?php echo $companies['id'] ?>" href="./API/companies/updateCompanies.php"  >Modifier</a>
                            </button>
                        </li>
                        <li>
                            <button type="submit" class="smallButton">
                                <a class="update<?php echo $companies['id'] ?>" href="./API/companies/deleteCompanies.php"  >Supprimer</a>
                            </button>
                        </li>
                    </ul>
                </li>
            </ul>

            <script>
                $(document).ready(function() { 
                    $(".update<?php echo $companies['id'] ?>").click(function() {
                        document.cookie = "updateId = <?php echo $companies['id']; ?>";
                    });
                });
            </script>
                
            <?php
            } ?>
            <button type="submit" class="addElement">
                <a class="update<?php echo $companies['id'] ?>" href="./API/companies/createCompanies.php"  >Ajouter</a>
            </button>
        </section>



        <!-- TABLE JOB APPLICATION -->
        <div id="topJobApplication"></div>
        <section class="sectionJobAppAdmin">
            <?php
            require_once('./API/jobApplication/readAllJobApplication.php');
            ?> 
            <h1>Job application</h1> 

            <?php
                foreach($result as $jobApplication){
            ?>
            <ul class="infosList">
                <li>
                    <h2>Demande d'emploi <?php echo $jobApplication['id']; ?> :</h2>
                </li>
                <!-- Prénom -->
                <li>
                    <ul class="ulListInfo">
                        <li>
                            <h3>Prénom :</h3>
                        </li>
                        <li>
                            <p><?php echo $jobApplication['firstName']; ?></p>
                        </li>
                    </ul>
                </li>
                <!-- Nom -->
                <li>
                    <ul class="ulListInfo">
                        <li>
                            <h3>Nom :</h3>
                        </li>
                        <li>
                            <p><?php echo $jobApplication['lastName']; ?></p>
                        </li>
                    </ul>
                </li>
                <!-- Adresse mail -->
                <li>
                    <ul class="ulListInfo">
                        <li>
                            <h3>Adresse mail :</h3>
                        </li>
                        <li>
                            <p><?php echo $jobApplication['email']; ?></p>
                        </li>
                    </ul>
                </li>
                <!-- Téléphone -->
                <li>
                    <ul class="ulListInfo">
                        <li>
                            <h3>Téléphone :</h3>
                        </li>
                        <li>
                            <p><?php echo $jobApplication['phone']; ?></p>
                        </li>
                    </ul>
                </li>
                <!-- Nom de l'entreprise -->
                <li>
                    <ul class="ulListInfo">
                        <li>
                            <h3>Nom de l'entreprise :</h3>
                        </li>
                        <li>
                            <p><?php echo $jobApplication['companieName']; ?></p>
                        </li>
                    </ul>
                </li>
                <!-- Message envoyé à l'entreprise -->
                <li>
                    <ul class="ulListInfo">
                        <li>
                            <h3>Message envoyé à l'entreprise :</h3>
                        </li>
                        <li>
                            <p><?php echo $jobApplication['emailSent']; ?></p>
                        </li>
                    </ul>
                </li>
                <!-- Boutons -->
                <li>
                    <ul class="ulListInfo">
                        <li>
                            <button type="submit" class="smallButton">
                                <a class="update<?php echo $jobApplication['id'] ?>" href="./API/jobApplication/updateJobApplication.php"  >Modifier</a>
                            </button>
                        </li>
                        <li>
                            <button type="submit" class="smallButton">
                                <a class="update<?php echo $jobApplication['id'] ?>" href="./API/jobApplication/deleteJobApplication.php"  >Supprimer</a>
                            </button>
                        </li>
                    </ul>
                </li>
            </ul>

            <script>
                $(document).ready(function() { 
                    $(".update<?php echo $jobApplication['id'] ?>").click(function() {
                        document.cookie = "updateId = <?php echo $jobApplication['id']; ?>";
                    });
                });
            </script>
                
            <?php  
            } ?> 
            
            <button type="submit" class="addElement">
                <a class="update<?php echo $jobApplication['id'] ?>" href="./API/jobApplication/createJobApplication.php"  >Ajouter</a>
            </button>
        </section>


    </main>

    <footer>
        <p class="rightsReserved">© 2020 EpiJob - Tout droits réservés - <a href="#">Centre de confidentialité</a> - <a href="">Conditions d'utilisation</a> </p>
    </footer>
</body>

</html>