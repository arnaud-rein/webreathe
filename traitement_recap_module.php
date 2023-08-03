<?php 


include "navbar.html";
$recup = $_POST['menu1'];







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>graphique</title>
    <link rel="stylesheet" href="alerte.css">
    <link rel="stylesheet" href="espacement.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>



<?php  

include "connect.php";


$sqlQuery = "SHOW COLUMNS FROM $recup ";
$recipesStatement = $bdd->prepare($sqlQuery);
$recipesStatement->execute();
if ($recipesStatement->errorCode() !== '00000') {
    $errorInfo = $recipesStatement->errorInfo();
    echo "Erreur SQL : " . $errorInfo[2];
}
$recipes = $recipesStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($recipes as $recipe) {
?>
    
    
    
    <?php echo $recipe['Field']; 
        $tab[] = $recipe['Field'];?>
         
    
                    
<?php
}


?> 



<?php

include "connect.php";

$sqlQ = "SELECT id_num, vitesse, time_use FROM $recup";
$recipesStatement = $bdd->prepare($sqlQ);
$recipesStatement->execute();
if ($recipesStatement->errorCode() !== '00000') {
    $errorInfo = $recipesStatement->errorInfo();
    echo "Erreur SQL : " . $errorInfo[2];
}

$recipes = $recipesStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($recipes as $recipe) {
?>
    <table>
    <tr>
        <?php for($x = 0; $x < count($tab); $x++) {?><td><?php echo $recipe[$tab[$x]]; ?></td><?php } ?> 
        
    </tr>
    
</table>        
      
<?php
}

?>

</body>
<style>
td, th {
    border: 1px solid black;
    padding: 30px;
    
}

table {
    border-collapse: collapse;
    margin: auto;
}

h1
{
    display: flex;
    margin : auto;
}


</style>