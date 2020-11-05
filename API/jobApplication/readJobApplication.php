<?php

    $db = new PDO('mysql:host=localhost;dbname=jobboard', 'root','root');
    $db->exec('SET NAMES "UTF8"');

    if(isset($_COOKIE['updateId'])){

        $requete = " SELECT * FROM jobapplication WHERE `id` = ? ";
            
        $stmt = $db->prepare($requete);
        $stmt->execute(array($id));
        
        $jobapplication = $stmt->fetch();

    }
    
  
?>