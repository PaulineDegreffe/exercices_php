<?php
$titre = "Exercice001 - Les types de données";
require "../common/template.php"
?>
<!--Les types de données-->
    <?php

    //EXO 1

echo "<h3>exercice 001 partie 1</h3>";
$a = 3;
$b = 5;
$c = 7;

echo '*******AVANT PERMUTATION********* <br>';
echo "A:$a <br> B:$b <br> C:$c <br>";


echo "*******APRES PERMUTATION****** <br>";
echo "A:$b <br> B:$c <br> C:$a <br> ";

// EXO 2

echo "<h3>exercice 001 partie 2</h3>";

$Nom = 'Marie';
$Nom2 = 'Pierre'; 
$Age = 29; 
$Age2=30; 
$Genre='homme'; 
$Genre2='femme';

echo "<br> $Nom à $Age ans, et c'est un $Genre <br>
$Nom2 à $Age2, et c'est une $Genre2 "; 


// EXO 3

echo "<h3>exercice 001 partie 3</h3>";

$personne = [
    'id' => 1, 
    'prenom' => 'Pauline', 
    'nom' => 'Degreffe',
    'age' => '28', 
]; 
$yearBorn = 2021 - $personne['age'];
    ?>
    <h3>Carte d'identité</h3>
    <p>Bonjour <?= $personne['nom']; ?>, tu as <?= $personne['age']; ?> ans, tu es probablement née en <?= $yearBorn ?> </p>
</body>
</html>