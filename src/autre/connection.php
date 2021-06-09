<?php

session_start();

$bdd = new PDO("mysql:host=localhost;dbname=bitly3;charset=utf8", "root", "");
if(isset($_POST['formconnect']))
{
    $loginconnect = htmlspecialchars($_POST['$loginconnect']);
    $passwordconnect = sha1($_POST['$passwordconnect']);
    if (!empty($loginconnect) AND !empty($passwordconnect))
        {
            $requser = $bdd->prepare("SELECT * FROM user WHERE login = ? AND password = ?");
            $requser->execute(array($emailconnect, $passwordconnect));
            $userexist = $requser->rowCount();
            if($userexist == 1)
            {
                $userinfo = $requser->fetch();
                $_SESSION['id'] = $userinfo['id'];
                $_SESSION['login'] = $userinfo['login'];
                $_SESSION['password'] = $userinfo['password'];
                header("Location: ./users.php?id=".$_SESSION['id']);
                
            }
            else
            {
                $erreur = "Mauvais identifiants";
            }
        }
    else 
    {
        $erreur = "Tous les champs doivent être complétés !";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/inscrip.css">
    <title>Connection Bitly</title>
</head>
    <div>
    <h2>Connection</h2>
    <form method="$_POST" action="">
        <label>login</label>
        <input type="text" name="loginconnect" required>
        <label>Mot de passe</label>
        <input type="password" name="passwordconnect" required>
        <input type="submit" value="Se connecter!" name="formconnect" required>
    </form>
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