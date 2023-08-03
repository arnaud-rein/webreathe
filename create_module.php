<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="espacement.css">
    <title>Document</title>
</head>
<body>
<?php 
include "navbar.html";

?>
<form action="requete_sql_create_module.php" method="post">
        <div class="">
                <label for="module">Nom du module</label>
                <input type="text" id="module" name="module">
            </div>   
            <div class="" id="submit">
                <input type="submit" value="Envoyer">
            </div>

</form>
    
</body>
</html>