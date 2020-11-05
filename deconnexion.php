<?php

setcookie('id', '', time()-3600, '/', '', false, false);
setcookie('lastName', '', time()-3600, '/', '', false, false);
setcookie('firstName', '', time()-3600, '/', '', false, false);
setcookie('email', '', time()-3600, '/', '', false, false);
setcookie('phone', '', time()-3600, '/', '', false, false);

header('location: accueilHTML.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Deconnexion successful !</h1>
</body>
</html>

