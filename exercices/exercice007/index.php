<?php 
    $titre = "Exercice 017";
    require "../../common/template.php" 
?>

<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
?>

<form action="" method="post">
    <table>
        <tr>
            <td>Login</td>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Envoyer"></td>
        </tr>
    </table>
</form>



<?php
    if(isset($_POST["login"]) && isset($_POST["password"])){
            $login = $_POST["login"]; 
            $password = $_POST["password"];
            $requete = $bdd->prepare('SELECT * 
                                    FROM users
                                    WHERE login= ? AND password = ?');
            $requete->execute(array($login, $password));

            while($données = $requete -> fetch()){
                echo '<p>' . $données["login"] . " / " . $données["password"] . '</p>';
            }
    }
?>