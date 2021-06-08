<?php

$bdd = new PDO("mysql:host=localhost;dbname=bitly3;charset=utf8", "root", "");

if (isset($_POST['submit']))
{
    if(!empty($_POST['login']) AND !empty($_POST['nom']) AND !empty($_POST['prénom']) AND !empty($_POST['email']) AND !empty($_POST['password']))
    {
        $login = htmlspecialchars($_POST['login']);
        $nom = htmlspecialchars($_POST['nom']);
        $prénom = htmlspecialchars($_POST['prénom']);
        $email = htmlspecialchars($_POST['email']);
        $password = sha1($_POST['password']);


        $loginlength = strlen($login);
        if($loginlength <= 255)
        {
            
        }
        else
        {
            $erreur = "votre pseudo ne doit pas dépasser 255 caractères!";

        }

    }
    else {
        $erreur = "tous les champs sont requis";
    }

};



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/css/inscrip.css">
    <title>Inscription Bitly</title>
</head>



<body>
    <div>
        
        <form action="" method="POST">
            <table>
            <tr>
                <td>
                    <label>Login</label>
                </td>
                <td>
                    <input type="text" name="login" id="login" placeholder="votre pseudo" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nom</label>
                </td>
                <td>
                    <input type="text" name="nom" id="nom" placeholder="votre nom" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Prénom</label>
                </td>
                <td>
                    <input type="text" name="prénom" id="prénom" placeholder="votre prénom" required>
                </td>
            </tr> 
            <tr>
                <td>
                    <label>Mail</label>
                </td>
                <td>
                    <input type="email" name="email" id="email" placeholder="votre email" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Mot de passe</label></td>
                <td>
                    <input type="password" name="password" id="password" placeholder="votre mot de passe" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit"  id="submit">
                </td>
            </tr>
                
            </table> 
        </form>
        <?php

        if (isset($erreur))
        {
            echo "$erreur";
        }


        ?>
    </div>

    
</body>
</html>
