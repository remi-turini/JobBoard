<?php

        $db = new PDO('mysql:host=localhost;dbname=jobboard', 'root','root');
        $db->exec('SET NAMES "UTF8"');
            
        $requete = " SELECT * FROM advertisements ";
            
        $stmt = $db->prepare($requete);
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        
        $requete2 = " SELECT * FROM advertisements INNER JOIN companies ON advertisements.companieName = companies.name ";
            
        $stmt2 = $db->prepare($requete2);
        $stmt2->execute();
        
        $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
?>