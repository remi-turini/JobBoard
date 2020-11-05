<?php

    $db = new PDO("mysql:host=localhost;dbname=jobboard",'root','root');
    $db->exec("set names utf8");

    $id = $_COOKIE['id'];
    require_once('./API/users/readUsers.php');

    if(isset($_POST['updateForm'])){

        if( isset($_POST['firstName']) && $users['firstName'] != $_POST['firstName']) {

            $firstName = $_POST['firstName'];
            $requete = "UPDATE users SET `firstName`= ? WHERE id = ?";
                        
            $stmt = $db->prepare($requete);
            $stmt->execute(array($firstName, $id));
            setcookie('firstName', $firstName, time()+3600*24, '/');
            header("Location:profilHTML.php");
        }

        if( isset($_POST['lastName']) && $users['lastName'] != $_POST['lastName']) {

            $lastName = $_POST['lastName'];
            $requete = "UPDATE users SET `lastName`= ? WHERE id = ?";
                        
            $stmt = $db->prepare($requete);
            $stmt->execute(array($lastName, $id));
            setcookie('lastName', $lastName, time()+3600*24, '/');
            header("Location:profilHTML.php");
        }

        if( isset($_POST['email']) && $users['email'] != $_POST['email']) {

            $email = $_POST['email'];
            $requete = "UPDATE users SET `email`= ? WHERE id = ?";
                        
            $stmt = $db->prepare($requete);
            $stmt->execute(array($email, $id));
            setcookie('email', $email, time()+3600*24, '/');
            header("Location:profilHTML.php");
        }

        if( isset($_POST['phone']) && $users['phone'] != $_POST['phone']) {

            $phone = $_POST['phone'];
            $requete = "UPDATE users SET `phone`= ? WHERE id = ?";
                        
            $stmt = $db->prepare($requete);
            $stmt->execute(array($phone, $id));
            setcookie('phone', $phone, time()+3600*24, '/');
            header("Location:profilHTML.php");
        }

        if( isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['passwordConfirm']) && !empty($_POST['passwordConfirm']) ) {

            if( $_POST['password'] == $_POST['passwordConfirm'] ) {
            
                $password = md5($_POST['password']);
                $requete = "UPDATE users SET `password`= ? WHERE id = ?";
                $stmt = $db->prepare($requete);
                $stmt->execute(array($password, $id));
                header("Location:profilHTML.php");
                
            } else {
                $error = 'Mot de passe non compatible';
            }
        } else {
            $error = 'Aucune modification';
        }
    }

?>
