<?php

    $db = new PDO('mysql:host=localhost;dbname=jobboard', 'root','root');
    $db->exec('SET NAMES "UTF8"');

    if(isset($_COOKIE['updateId'])){

        $id = $_COOKIE['updateId'];

        $requete = " SELECT * FROM advertisements WHERE `id` = ? ";
            
        $stmt = $db->prepare($requete);
        $stmt->execute(array($id));
        
        $advertisements = $stmt->fetch();

    }

    if(isset($_COOKIE['jobApplicationCompanieName'])){

        $companieName = $_COOKIE['jobApplicationCompanieName'];

        $requete = " SELECT * FROM advertisements WHERE `companieName` = ? ";
            
        $stmt = $db->prepare($requete);
        $stmt->execute(array($companieName));
        
        $advertisements = $stmt->fetch();

    }
    
  
?>