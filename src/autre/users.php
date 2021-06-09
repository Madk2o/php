<?php

session_start();

$bdd = new PDO("mysql:host=localhost;dbname=bitly3;charset=utf8", "root", "");

if(isset($_GET ['id']) AND $_GET['id'] > 0);
{

$getid = intval($_GET['id']);
$requser = $bdd->prepare('SELECT * FROM user WHERE id = ?');
$requser->execute(array('$getid'));
$userinfo = $requser->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/inscrip.css">
    <title>Profil Bitly</title>
</head>
    <div>
    <h2>Profil de <?php echo $userinfo["login"];?></h2>

    <h3>Mail: <?php echo $userinfo["email"];?></h3>



    <?php
    if (isset($erreur))
    {
        echo "$erreur";
    }

    ?>
    </div>

<body>


    
</body>
</html>

<?php 
}

?>