<?php

        if(isset($_COOKIE['updateId']))   
        
        $id = $_COOKIE['updateId'];

        $db = new PDO("mysql:host=localhost;dbname=jobboard",'root','root');
        $db->exec("set names utf8");

        $requete = "DELETE FROM companies WHERE id = ?";
        
        $stmt = $db->prepare($requete);
        $stmt->execute(array($id));

        header('location: ../../adminHTML.php');

?>