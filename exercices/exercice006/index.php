<?php
    $titre = "Hebergeur d'images";
    $sousSite = "../..";
    require "../../common/template.php"; 

if(is_uploaded_file($_FILES["fichier"]["tmp_name"])){;
        echo '<p>Emplacement temporaire du fichier: ' . $_FILES["fichier"]["tmp_name"] . '</p>
        <p>Nom du fichier: ' . $_FILES["fichier"]["name"] . '</p>
        <p>Type de fichier: ' . $_FILES["fichier"]["size"] . '</p>
        <p>Image reçue sur le serveur: ' . $_FILES["fichier"]["error"] . '</p>';
    }

    if(isset($_FILES["fichier"]) && $_FILES["fichier"]["error"] == 0){
        if($_FILES["fichier"]["size"] <= 100000000){
            $extensionArray = ["png", "gif", "jpg", "JPEG", "jfif", "jpeg","PNG", "GIF", "JPG", "JFIF"];
            $infoFichier = pathinfo($_FILES["fichier"]["name"]);
            $extensionImage = $infoFichier["extension"];
            if(in_array($extensionImage, $extensionArray)){

                $destination = "uploads/" . time() . basename($_FILES["fichier"]["name"]);
                move_uploaded_file($_FILES["fichier"]["tmp_name"], $destination);
                echo "<h3>Envoi du fichier " . $_FILES["fichier"]["name"] . " réussi !!!";
            }
        }
    }
?>

<form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
        <table>
            <tr>
                <td><input type="file" name="fichier"></td>
            </tr>
            <tr>
                <td><input type="submit" /></td>
            </tr>

        </table>
    </form>



  