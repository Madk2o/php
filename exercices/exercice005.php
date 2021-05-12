<?php 
    $titre = "Exercices 5 - Traiter un formulaire";
    require "../common/template.php" 
    ?>
<div class="principal">

<!-- formulaire get -->
<?php
        if(isset($_GET["prenom"]) && isset($_GET["age"])):
            echo "<p>Bonjour " . $_GET["prenom"] . "Tu as " . $_GET["age"] . " ans!!!</p>";
            echo "Ce formulaire à été crée avec la methode get";
        endif;
    ?>


<!-- PARTIE get -->

    <form method="get" action="">
        <table>
            <tr>
                <td>Prénom:</td>
                <td><input type="text" name="prenom" /></td>
            </tr>
            <tr>
                <td>age:</td>
                <td><input type="text" name="age" /></td>
            </tr>
        </table>
        <button type="submit" class="bg-danger">Envoyer</button>
    </form>







<!-- formulaire post -->

    <?php
        if(isset($_POST["prenom"]) && isset($_POST["age"])):
            echo "<p>Bonjour " . $_POST["prenom"] . "Tu as " . $_POST["age"] . " ans!!!</p>";
            echo "Ce formulaire à été crée avec la methode Post";
        endif;
    ?>


<!-- PARTIE post -->
    <form method="post" action="">
        <table>
            <tr>
                <td>Prénom:</td>
                <td><input type="text" name="prenom" /></td>
            </tr>
            <tr>
                <td>age:</td>
                <td><input type="text" name="age" /></td>
            </tr>
        </table>
        <button type="submit" class="bg-primary">Envoyer</button>
    </form>

