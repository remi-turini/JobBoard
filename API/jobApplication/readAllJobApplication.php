<?php

        $db = new PDO('mysql:host=localhost;dbname=jobboard', 'root','root');
        $db->exec('SET NAMES "UTF8"');

        //1ere requete
        $requete = " SELECT * FROM jobapplication ";

        $stmt = $db->prepare($requete);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //2eme requete
        $requete2 = "SELECT * FROM jobapplication INNER JOIN advertisements ON jobapplication.companieName = advertisements.companieName";

        $stmt2 = $db->prepare($requete2);
        $stmt2->execute();

        $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

?>