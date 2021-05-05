<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les boucles</title>
</head>
<body>
<h1>Exercice 003</h1>
<h2>PARTIE 01</h2>
<table border> 
    <tr>
        <th>Nombre</th>
        <th>Carré</th>
        <th>Racine</th>
    </tr>

    <!-- PHP -->
    <?php 
    $ligne = 1;
while($ligne <= 20):
    echo "<tr>
    <td>$ligne</td>
    <td>".$ligne * $ligne."</td>
    <td>".Sqrt($ligne)."</td>
</tr>";
    $ligne++;
endwhile;
?>
</table>

<h2>PARTIE 02</h2>
<?php

//Exercice 008
$n = rand(5, 15);
//$calcul = $num1 + $num1;

For($i=1; $i<=10 ; $i++):
echo "<p> Etape: $i</p>";

endfor;

For($i=10; $i>=0; $i--) :
    echo "- résultat =". $i;
endfor; 

?>

<h3>Exercice 009</h3>

<?php

$essais = 0;
do {
    $essais++ ;
    $num = rand(1, 20);
    if ($num <=15)
    echo "<p>Essai $essais : $num est trop petit (<16) </p>";
    

}  

while ($num <= 15);
echo"<p>Le nombre choici est : $num </p>";
?>

<h3>Exercice 010</h3>

<?php

$noteDeGuy = [];
$notes = 0;


do {
$notes++ ;
$num = rand(1,20);
$noteDeGuy['Note N°'.$notes] = $num;
}

while (count($noteDeGuy)<20);
print_r($noteDeGuy);

$ligne = count($noteDeGuy);
$somme = array_sum($noteDeGuy);
$noteMax = 20;
$totalMax = $ligne * $noteMax;
$moyenne = $somme / $totalMax  * 100;

if ($moyenne <=30) {
echo"<p>La moyenne de l'année est de $moyenne ça ira mieux l'année prochaine !!</p>";
}


if ($moyenne >=30 && $moyenne <=50) {
echo"<p>La moyenne de l'année est de $moyenne Voilà pourquoi il ne faut pas regarder des stream jv durant les cours !!</p>";
}

if ($moyenne >=50 && $moyenne <=60){
    echo"<p>La moyenne de l'année est de $moyenne Pas de bol tu y étais presque !!</p>";
}
    
    
    if ($moyenne >=60 && $moyenne <=70){
        echo"<p>La moyenne de l'année est de $moyenne Pas de bol tu y étais presque !!</p>";
    }

    if ($moyenne >=70 && $moyenne <=80){
        echo"<p>La moyenne de l'année est de $moyenne Pas de bol tu y étais presque !!</p>";
    }

    if ($moyenne >=80 && $moyenne <=90){
        echo"<p>La moyenne de l'année est de $moyenne Pas de bol tu y étais presque !!</p>";
    }

    if ($moyenne >=90 && $moyenne <=100){
        echo"<p>La moyenne de l'année est de $moyenne Pas de bol tu y étais presque !!</p>";
    }


?>

</body>
</html>