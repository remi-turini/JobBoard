<?php

  try{  
    $db = new PDO('mysql:host=localhost;dbname=jobboard', 'root','root');

    //Permet d'afficher les erreurs via le getMessage()
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
    //On insère les données reçues si elles sont remplis
    if (isset($_POST['connectForm'])){

      $email = $_POST['email'];
      $password = md5($_POST['password']);

      $reqUser = $db->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
      $reqUser->execute(array($email, $password));

      $userExist = $reqUser->rowCount();

      if($userExist == 1){
          
        $userinfo = $reqUser->fetch();

        setcookie('id', $userinfo['id'], time()+3600*24, '/');   // ('nom du cookie' , sa valeur , temps expiration , 'domaine d'accée du cookie');
        setcookie('lastName', $userinfo['lastName'], time()+3600*24, '/');
        setcookie('firstName', $userinfo['firstName'], time()+3600*24, '/');
        setcookie('email', $userinfo['email'], time()+3600*24, '/');
        setcookie('phone', $userinfo['phone'], time()+3600*24, '/');

        if($userinfo['email'] == 'admin@email.com'){
          header('location: adminHTML.php');
        } else {
          header('location: profilHTML.php');
        }

        }
        else {
          $error = 'Identifiants incorrects';
        }
    }


  }
  catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
  }
?>