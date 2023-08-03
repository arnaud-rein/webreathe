<?php 

$recipesStatement = $bdd->prepare($sqlQuery);
$recipesStatement->execute();

        
$recipes = $recipesStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($recipes as $recipe) {
    echo $recipe['id_num'];
   

}