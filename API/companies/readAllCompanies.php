<?php

        $db = new PDO('mysql:host=localhost;dbname=jobboard', 'root','root');
        $db->exec('SET NAMES "UTF8"');
            
        $requete = " SELECT * FROM companies ";
            
        $stmt = $db->prepare($requete);
        $stmt->execute();
        
        /*$tableau = array();
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $tableau[] = $row;
        }
            
        
        header('Content-Type: application/json');
        echo json_encode($tableau);*/
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
  
?>