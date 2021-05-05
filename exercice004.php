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

// Si Δ < 0 , rien de plus simple : il n'y a pas de solution.
// Si Δ = 0, il y a une seule solution à l'équation : c'est x= -b/(2a)
// Si Δ > 0 il y a deux solutions qui sont x1 = (-b-√Δ)/(2a) et x2= (-b+√Δ)/(2a)

function delta ()
{
    $a = rand(1,20);
    $b= rand(1,20);
    $c= rand(1,20);
    // Calcul du Delta  Δ = b² - 4ac
    $delta = ($b * $b) -  (4 * $a * $c);
    echo "<p>Les nombres tirés au sort sont </p>" ;
    echo "<p>a= $a, b= $b, et c= $c</p>";
    echo "<p> Le delta obtenu est : ($a X $a) - (4 X $b X $c) = $delta </p>";
    
    $x = - $b / (2 * $a);
    $racineA = (- ($b) - sqrt($delta) ) / (2 * $a) ;
    $racineB = (- ($b) + sqrt($delta) ) / (2 * $a) ;
    
    if ($delta <0){
    echo"<p>Il n'y pas de solution</p>";
    }
    else if ($delta == 0) {
        echo"<p>il y a une seule solution à l'équation : c'est $x</p>";
        echo "<h3>racine A = (- $a - √$delta)/($a * $a) => $racineA  </h3>";
        echo "<h3>racine B = (- $a + √$delta)/($a * $a) => $racineB  </h3>";
    }
    else if ($delta >0) {
        echo"<p>il y a deux solutions qui sont $racineA et $racineB</p>";
        echo "<h3>racine A = (- $a - √$delta)/($a * $a) => $racineA  </h3>";
        echo "<h3>racine B = (- $a + √$delta)/($a * $a) => $racineB  </h3>";
    }
}

delta();

?>

<h2>Exercice 012</h2>

<?php

//Prenez deux personnes qui disposent d’un nom, d’un âge et d’un sexe.
//Représenter ces personnes dans deux tableaux multidimensionnels un pour chaque personne.
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

<?php

//A partir de l’exercice précédent: ajoutez deux nouvelles personnes.
//Créez un nouveau tableau qui va contenir les tableau des 4 personnes précédemment créés
//Affichez sur votre page html

$identite = [
    $personne1 = [
        'nom' => 'Andrea',
        'age' => 32,
        'sexe' => 'homme',
    ],
    $personne2 = [
        'nom' => 'Pauline',
        'age' => 27,
        'sexe' => 'femme',
    ],
    $personne3 = [
        'nom' => 'Camille',
        'age' => 18,
        'sexe' => 'femme',
    ],
    $personne4 = [
    'nom' => 'Mateo',
    'age' => 19,
    'sexe' => 'homme',
    ]
];
foreach ($identite as $personne){
    foreach ($personne as $key => $value){
        echo $key.":".$value."<br>";
    }
    echo "------------------<br>";
}

?>

<h2>Exercice 14</h2>

<?php

//A partir de l’exercice précédent: rajouter un tableau de note 4 note aléatoire de 1 à 20 pour chaque personne
//Rajouter une fonction pour calculer la moyenne des notes
//Affichez sur le html chacune des personnes, leur note et leur moyenne
//BONUS: donner un peu de style à l’affichage html en insérant un peu de css

?>

</body>
</html>