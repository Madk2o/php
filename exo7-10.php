<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--//table exo 7
<table border="">
   <tr>
       <th>Nombre</th>
       <th>racine</th>
       <th>Racine carré</th>
   </tr>
-->


<?php
/*
//fonction d'exo7

$i = 1;

while ($i <= 20): {
    echo "<tr>
    <td>$i</td>
    <td>"  .$i  * $i. "</td>
    <td>" .sqrt($i); "</td>
    </tr>";    
}
$i++;

endwhile; 


    // exo 8
        $n = rand(5, 15);//choix du n random
        $boucle = 1; //pour faire la boucle
        $resultat = 0;//pour addition 
        echo "<h3>Voici le cumul des $n premiers nombres (sens inverse): </h3>";
        for($i = $n; $i >=1; $i--)://pour décrémenter 
            $resultat += $i;//addition de valeurs + stock le résultat dans une $
            echo "<p>Etape: $boucle - résultat = $resultat</p>";
            $boucle++;
        endfor;//fin de la boucle


// exo 9
$boucle = 0;

do{//faire une boucle
    $boucle ++; //boucle pour les essais
    $n= rand(1,20);//random de nombre entre 1 un 20
    if($n<=15)//tant que le rand n'est pas supérieur à 15
    echo '<p>Essai '. $boucle .' : '. $n .' est trop petit </p>';// affiche le nombre d 'essai 
}while($n<=15);//si + de 15
echo "<p>Le nombre choisi est $n</p>";//indique le monbre choisi supérieur à 15
*/

//exo 10
$i = 20 ;
$noteDeGuy = [];
array_push($noteDeGuy, rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20)
, rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20));
print_r($noteDeGuy);

echo "sum(a)" .array_sum($noteDeGuy) / $i.  "\n";

?>




</table>     
</body>
</html>