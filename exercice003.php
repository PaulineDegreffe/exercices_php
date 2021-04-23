<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border> 
    <tr>
        <th>Nombre</th>
        <th>Carré</th>
        <th>Racine</th>
    </tr>

    <!-- PHP -->
    <?php 
    $nbr = 1;
while($nbr <= 20):
    echo "<tr>
    <td>$nbr</td>
    <td>".$nbr * $nbr."</td>
    <td>".Sqrt($nbr)."</td>
</tr>";
    $nbr++;
endwhile;
?>
</table>

<?php
//Exercice 008
$num1 = rand(5, 15);

?>


</body>
</html>