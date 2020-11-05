<?php

try{  

  $db = new PDO('mysql:host=localhost;dbname=jobboard', 'root','root');

  //Permet d'afficher les erreurs via le getMessage()
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  //On insère les données reçues si elles sont remplis
  if (isset($_POST['inscriptionForm'])){

    $firstName = $_POST['lastName'];
    $lastName = $_POST['firstName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);
    $passwordConfirm = md5($_POST['passwordConfirm']);

    $reqMail = $db->prepare("SELECT * FROM users WHERE email = ?");
    $reqMail->execute(array($email));

    $mailExist = $reqMail->rowCount();

    if($mailExist == 0){

      if( $password == $passwordConfirm ){
        
        $sql = $db->prepare("INSERT INTO users (firstName, lastName, email, phone, password) VALUES( ?, ?, ?, ?, ?)");

        $sql->execute(array($firstName, $lastName, $email, $phone, $password));

        // On récupére l'id de l'utilisateur venant de s'inscrire
        $reqId = $db->prepare("SELECT * FROM users WHERE email = ? ");
        $reqId->execute(array($email));

        $userInfo = $reqId->fetch();

        
        setcookie('id', $userInfo['id'], time()+3600*24, '/');   // ('nom du cookie' , sa valeur , temps expiration , 'domaine d'accée du cookie');
        setcookie('lastName', $lastName, time()+3600*24, '/');
        setcookie('firstName', $firstName, time()+3600*24, '/');
        setcookie('email', $email, time()+3600*24, '/');
        setcookie('phone', $phone, time()+3600*24, '/');

        header("Location:accueilHTML.php");
      }
      else {
        $error = 'Les mots de passe ne sont pas compatible';
      }
    }
    else {
      $error = "Adresse mail déjà utilisé";
    }
  }


}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}

?>