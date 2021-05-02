<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 004</h1>
    <h2>Exercice 011</h2>
<?php



function delta ($a,$b,$c)
{
    // Calcul du Delta  Δ = b² - 4ac
    $delta = ($b * $b) -  (4 * $a * $c);
    echo "<p>Les nombres tirés au sort sont </p>" ;
    echo "<p>a= $a, b= $b, et c= $c</p>";
    echo "<p> Le delta obteny est : ($a X $a) - (4 X $b X $c) = $delta </p>";

    $x = - $b / (2 * $a);
    $racineA = (- ($b) - sqrt($delta) ) / (2 * $a) ;
    $racineB = (- ($b) + sqrt($delta) ) / (2 * $a) ;
    echo "<h3>racine A = (- $a - √$delta)/($a * $a) => $racineA  </h3>";
    echo "<h3>racine B = (- $a + √$delta)/($a * $a) => $racineB  </h3>";
    

}

delta(2,7,6);

?>

<h2>Exercice 012</h2>

<?php

//Prenez deux personnes qui disposent d’un nom, d’un âge et d’un sexe.
//Représenter ces personnes dans deux tableaux multidimensionnels (un pour chaque personne).
//Créer une fonction permettant de réaliser l’affichage d’une personne
//Affichez les deux personnes sur votre page html

$personne1 = [
    'nom' => 'Andrea',
    'age' => 32,
    'sexe' => 'homme',
];
$personne2 = [
    'nom' => 'Pauline',
    'age' => 27,
    'sexe' => 'femme',
];

function identite ($personne) {
    
    foreach ($personne as $key => $valeur){
        echo "<p>$key : $valeur</p>";
    }
}

identite($personne1);

echo"<p>-----------------------------------</p>";

identite($personne2);
    
?>

<h2>Exercie 013</h2>

</body>
</html>