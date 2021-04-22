<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
 /*       //ex 1

         //var 
        
        $a = 3;

        $b = 5;

        $c = 7;

        //afficher var

        echo "************AVANT PERMUTATION***************";
        
        echo "<p>a :$a </p>";
        echo "<p>b :$b </p>";
        echo "<p>c :$c </p>";

        //interchanger

        echo "************APRES PERMUTATION***************";

        echo "<p>a :$b </p>";
        echo "<p>b :$c </p>";
        echo "<p>c :$a </p>";




    //creation de var entier + string

        $Nom = "Marie";
        $Nom2 = "Pierre";
        $Age = 29;
        $Age2 = 30;
        $Genre = "homme";
        $Genre2 = "femme";

    //ecrire les infos avec les var

        echo "<p>$Nom à $Age ans, et c'est un $Genre</p>";
       echo "<p>$Nom2 à $Age2 ans, et c'est une $Genre2</p>";
*/
 
    //declaration tableau



    $personne = [
        'id' => 1,
        'nom' => 'Mac',
        'prénom' => 'Ouille',
        'âge' => 69,
        'profession' => "secrétaire aux admissions urgences/ BabyDev"
    ];
?>

<!-- inclure le tableau dans un p-->

    <h2>Carte d'indentité</h3>
    <p>Bonjour <?= $personne['nom']?> <?= $personne['prénom']?> j'ai <?= $personne['âge'] ?> ans et je suis <?= $personne['profession']?> </p>

<!--C'est toutttttt hein-->
    
    
</body>
</html>