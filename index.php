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

 
    //declaration tableau



    $personne = [
        'id' => 1,
        'nom' => 'Mac',
        'prénom' => 'Ouille',
        'âge' => 69,
        'profession' => "secrétaire aux admissions urgences/ BabyDev"
    ];


<!-- inclure le tableau dans un p-->

    <h2>Carte d'indentité</h3>
    <p>Bonjour <?= $personne['nom']?> <?= $personne['prénom']?> j'ai <?= $personne['âge'] ?> ans et je suis <?= $personne['profession']?> </p>

<!--C'est toutttttt hein-->


//exo 004

$nombre = rand($min = 1, $max = 20);



echo"<h3>le nombre tiré au sort est: $nombre </h3>";

if($nombre >= 1 && $nombre < 6 )
{
    echo"il est compris entre 1 et 5.";
}

if($nombre > 5 && $nombre < 11 )
{
    echo"il est compris entre 6 et 10.";
}

if($nombre > 10 && $nombre < 16 )
{
    echo"il est compris entre 11 et 15.";
}

if($nombre > 15 && $nombre <= 20 )
{
    echo"il est compris entre 16 et 20.";
}

//exo 5

$nombre = rand($min = 1, $max = 100);
$nombre2 = rand($min = 1, $max = 100);
$abs = abs($nombre - $nombre2);




echo "<p>chiffre 1 = $nombre </p>";
echo "<p>chiffre 2 = $nombre2 </p>";

echo " <p>Valeur absolue = $abs</p>";


if($abs > 25 && $abs <= 75)
{
    echo" la valeur absolue de $nombre et de $nombre2 il est compris entre 25 et 75.";
}


//exo 6

$nombre = rand($min = 1, $max = 12);

$mois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];


switch($nombre){
        case 0:
            echo '$mois';
            break;
        case 1:
            echo '$mois';
            break;
        case 2:
            echo '$mois';
            break;
        case 3:
            echo '$mois';
            break;
        case 4:
            echo '$mois';
            break;
        case 5:
            echo '$mois';
            break;
        case 6:
            echo '$mois';
            break;
        case 7:
            echo '$mois';
            break;
        case 8:
            echo '$mois';
            break;
        case 9:
            echo '$mois';
            break;
            case 10:
                echo '$mois';
                break;
            case 11:
                echo '$mois';
                break;
    default:

        echo '$mois';
//si tu vois ceci je suis bloqué ici petit erreur de syntaxe merci guy

*/

 ?>   
    
</body>
</html>