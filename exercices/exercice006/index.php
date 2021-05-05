<?php 
    $titre = "hebergeur d'images";
    require "../../common/template.php"; 
?>

<!-- transférer un fichier -->

<form method="post" action="" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
    <label>Transférer un fichier</label>
    <input type="file" name="fichier">
    <input type="submit">
</form>

<!-- Recevoir un fichier -->
<?php
    if (is_uploaded_file($_FILES["fichier"]["tmp_name"])){

        var_dump($_FILES["fichier"]); 
        echo '<p>Emplacement temporaire du fichier: ' . $_FILES["fichier"]["tmp_name"] . '</p> 
        <p>Nom du fichier: ' . $_FILES["fichier"]["name"] . '</p> 
        <p>Type de fichier: ' . $_FILES["fichier"]["size"] . '</p>
        <p>Image reçue sur le serveur: ' . $_FILES ["fichier"]["size"] . '</p>';

    }
?>

