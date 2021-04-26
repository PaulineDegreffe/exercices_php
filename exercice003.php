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
$num = rand(1, 20); 

if ($num >=15){
    echo "<p>Le nombre choisi est : $num</p>"; 
}
else 
?>


</body>
</html>