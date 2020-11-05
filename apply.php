<?php

    $db = new PDO("mysql:host=localhost;dbname=jobboard",'root','root');
    $db->exec("set names utf8");

    if(isset($_POST['applyForm'])){

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $companieName = $_COOKIE['companieName'];
        $emailSent = $_POST['emailSent'];
    
        $requete = "INSERT INTO jobapplication (`firstName`, `lastName`, `email`, `phone`, `companieName`, `emailSent`) VALUES (?, ?, ?, ?, ?, ?)";
        $requete2 = "SELECT COUNT(*) AS nbr_doublon, firstName, companieName FROM jobapplication GROUP BY firstName, companieName HAVING COUNT(*) > 1";
        $requete3 = "DELETE t1 FROM jobapplication AS t1, jobapplication AS t2 WHERE t1.id > t2.id AND t1.firstName = t2.firstName AND t1.companieName = t2.companieName";
    
        $stmt = $db->prepare($requete);
        $stmt->execute(array($firstName, $lastName, $email, $phone, $companieName, $emailSent));
        
        $stmt2 = $db->prepare($requete2);
        $stmt2->execute();
        
        $stmt3 = $db->prepare($requete3);
        $stmt3->execute();


    }

?>