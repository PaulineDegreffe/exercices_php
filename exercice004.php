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

</body>
</html>