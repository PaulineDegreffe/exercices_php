<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- PARTIE 1-->



<?php 

// Les structures de contrôle

$number = rand(1, 20);
echo "<h3>Le nombre tiré au sort est : $number</h3>";

if ($number >= 1 && $number <= 5){
    echo '<p>il est compris entre 1 et 5</p>';
} 

else if ($number >= 6 && $number <= 10){
    echo '<p>il est compris entre 6 et 10</p>';
} 

else if ($number >= 11 && $number <= 15){
    echo '<p>il est compris entre 11 et 15</p>';
} 

else if ($number >= 15 && $number <= 20){
    echo '<p>il est compris entre 15 et 20</p>';
} 

// exercice 005

$num1 = rand(1, 100);
$num2 = rand(1, 100);
$abs = abs($num1 - $num2);

if ($abs >= 25 && $abs <= 75){
    echo "<p>La valeur absolue de $num1 - $num2 n\' est pas comprise entre 25 et 75.</p>";
} 

// exercice 006
$num1 = rand(1, 12);
$tableauAutoIncrémenté = ["janvier", "fevrier", "Mars", "avril", "mai", "juin", "juillet", "septembre", "octobre", "novembre", "décembre"];
       
switch($num1)

{
    case 1 : echo "le mois $num1 correspond au mois de janvier"; break;
    case 2 : echo "le mois $num1 correspond au mois de février"; break;
    case 3 : echo "le mois $num1 correspond au mois de mars"; break;
    case 4 : echo "le mois $num1 correspond au mois de avril"; break;
    case 5 : echo "le mois $num1 correspond au mois de mai"; break;
    case 6 : echo "le mois $num1 correspond au mois de juin"; break;
    case 7 : echo "le mois $num1 correspond au mois de juillet"; break;
    case 8 : echo "le mois $num1 correspond au mois de aout"; break;
    case 9 : echo "le mois $num1 correspond au mois de septembre"; break;
    case 10 : echo "le mois $num1 correspond au mois de octobre"; break;
    case 11 : echo "le mois $num1 correspond au mois de janvier"; break;
    case 12 : echo "le mois $num1 correspond au mois de janvier"; break;

}



?>

</body>
</html>

