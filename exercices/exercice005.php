<?php 
    $titre = "Exercice005 - formulaire 1/2";
    require "../common/template.php" 
    ?>
 
<div>
    <?php

    if(isset($_GET["prenom"]) && isset($_GET["age"])):
    $prenom = $_GET["prenom"];
    $age = $_GET["age"];
    echo "Bonjour $prenom, tu as $age ans</br>";
    echo "Cette section a été générée par la méthode GET</br>";
    endif
    ?>

    <form method="get" action="">
        <table>
            <tr>
                <td>Prénom:</td>
                <td><input type="text" name="prenom" /></td>
            </tr>
            <tr>
                <td>âge:</td>
                <td><input type="text" name="age" /></td>
            </tr>
        </table>
        <button type="submit">Envoyer</button>
    </form>
</div>

<div>
    <?php
   if(isset($_POST["prenom"]) && isset($_POST["age"])):
        $prenom = htmlspecialchars($_POST["prenom"]);
        $age = htmlspecialchars($_POST["age"]);

        echo "<h4>Version saine</h2>
            <p>Bonjour $prenom, tu as $age ans.</p>";
    
    endif

    ?>
    <form method="post" action="">
        <table>
            <tr>
                <td>Prénom:</td>
                <td><input type="text" name="prenom" /></td>
            </tr>
            <tr>
                <td>âge:</td>
                <td><input type="text" name="age" /></td>
            </tr>
        </table>
        <button type="submit">Envoyer</button>
    </form>

</div>