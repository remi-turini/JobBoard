<!DOCTYPE html>
<html lang="fr">
<head>
<!-- TETE DE PAGE -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Gérer le responsive sur les petites surfaces -->
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
    <main id="findSearch">
        <!-- SECTION OFFER -->
        <section class="sectionOffer">
            <?php
                include('./API/advertisements/readAllAdvertisements.php');
                foreach($result2 as $advertisements){
            ?>
            <!-- JOB HEADER -->
            <div class="jobHeader">
                <div class="jobHeaderImg">
                    <img src="<?php echo $advertisements['image'] ?>" alt="image offer advertisement">
                </div>
                
                <p class="company btn-about" id="btn-about<?php echo $advertisements['id'] ?>"><?= $advertisements['companieName'] ?></p>

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

                <!-- SCRIPT -->
                <script>
                    $(document).ready(function() {
                        $("#btn-about<?php echo $advertisements['id'] ?>").click(function() {
                            $("#sectionAbout<?php echo $advertisements['id'] ?>").css("display", "initial");
                        });
                        $(".bi-x-about").click(function() {
                            $(".sectionAbout").css("display", "none");
                        });
                    });
                </script>
                <script>
                    $(document).ready(function() {
                        $("#btn-apply<?php echo $advertisements['id'] ?>").click(function() {
                            document.cookie = "companieName = <?php echo $advertisements['companieName']; ?>";
                        });
                    });
                </script>
                <!-- /// -->

                <!-- <button id="btn-about<?php echo $advertisements['id'] ?>" class="btn-about" type="submit">
                    <p>About the companie</p>
                </button> -->
                <button id="btn-apply<?php echo $advertisements['id'] ?>" class="btn-apply" type="submit">
                    <p>Postuler</p> 
                </button>
                
            </div>
            <!-- /// -->

            <!-- JOB DESCRIPTION -->
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
                <!-- ======= -->
                <!-- btn learn more -->
                <p class="btnLearnMore" id="btnLearnMore<?php echo $advertisements['id'] ?>">Learn More</p>
                
                <!-- content learn more -->
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
                <!-- /// -->
            </div>
            
            <section id="sectionAbout<?php echo $advertisements['id'] ?>" class="sectionAbout">
                <div class="divAbout">
                    <svg viewBox="0 0 16 16" class="bi-x-about" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>

                    <div>
                        <h3>Activity Sector :</h3>
                        <p>
                            <?= $advertisements['activitySector']; ?>
                        </p>
                    </div>

                    <div>
                        <h3>Description :</h3>
                        <p>
                            <?= $advertisements['description']; ?>
                        </p>
                    </div>

                    <div>
                        <h3>Head-office :</h3>
                        <p>
                            <?= $advertisements['headOffice']; ?>
                        </p>
                    </div>
                    <div>
                        <h3>Management :</h3>
                        <p>
                            <?= $advertisements['management']; ?>
                        </p>
                    </div>
                    <div>
                        <h3>Work Force :</h3>
                        <p>
                            <?= $advertisements['workForce']; ?>
                        </p>
                    </div>
                </div>
            </section>
            <?php
                }
            ?>
        </section>
        <!-- /// -->

        <!-- JOB APPLY -->
        <?php
            if(isset($_COOKIE['id'])){
                require_once('apply.php');
        ?>
            <section class="sectionApply">
                <form action="" method="POST" class="formApply">
                    <svg viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    
                    <div>
                        <label for="lastName">Nom :</label>
                        <input type="text" id="lastName" name="lastName" placeholder="Nom" readonly value="<?php echo $_COOKIE['lastName'] ?>">
                    </div>
                    <div>
                        <label for="firstName">Prénom :</label>
                        <input type="text" id="firstName" name="firstName" placeholder="Prénom" readonly value="<?php echo $_COOKIE['firstName'] ?>">
                    </div>
                    <div>
                        <label for="email">Adresse mail :</label>
                        <input type="email" name="email" id="email" placeholder="Adresse mail" readonly value="<?php echo $_COOKIE['email'] ?>">
                    </div>
                    <div>
                        <label for="phone">Téléphone :</label>
                        <input type="tel" id="phone" name="phone" maxlength="10" placeholder="06 (ou 07) 00 00 00 00" value="<?php if(isset($_COOKIE['phone']))echo $_COOKIE['phone'] ?>">
                    </div>
                    <div>
                        <label for="cv">Déposez votre CV :</label>
                        <input type="file" id="cv" name="cv" accept="image/pdf, image/png, image/jpeg">
                    </div>
                    <div>
                        <label for="emailSent">Message :</label>
                        <textarea name="emailSent" id="emailSent" cols="50" rows="20" placeholder="Écrivez votre message (optionnel)"></textarea>
                    </div>
                    <button type="submit" class="btnFormApply" name="applyForm">
                        <p>Postuler</p>
                    </button>
                </form>
            </section>
            <?php
                } else {
            ?>
            <section class="sectionApply">
                <form action="" method="POST" class="formApply">
                    <svg viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    
                    <div>
                        <label for="nameApply">Nom :</label>
                        <input type="text" id="nameApply" name="nameApply" placeholder="Nom" required>
                    </div>
                    <div>
                        <label for="firstNameApply">Prénom :</label>
                        <input type="text" id="firstNameApply" name="firstNameApply" placeholder="Prénom" required>
                    </div>
                    <div>
                        <label for="email">Adresse mail :</label>
                        <input type="email" name="mailApply" id="mailApply" placeholder="Adresse mail" required>
                    </div>
                    <div>
                        <label for="phone">Téléphone :</label>
                        <input type="tel" id="phoneApply" name="phone" maxlength="10" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="06 (ou 07) 00 00 00 00">
                    </div>
                    <div>
                        <label for="cv">Déposez votre CV :</label>
                        <input type="file" id="cv" name="cv" accept="image/pdf, image/png, image/jpeg">
                    </div>
                    <div>
                        <label for="cv">Message :</label>
                        <textarea name="message" id="message" cols="50" rows="20" placeholder="Écrivez votre message (optionnel)"></textarea>
                    </div>

                    <button type="submit" class="btnFormApply">
                        <p>Postuler</p>
                    </button>
                </form>
            </section>

        <?php
            }
        ?>
        <!-- /// -->
    </main>

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
</body>

</html>