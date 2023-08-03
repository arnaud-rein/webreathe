



<?php



include "connect.php";
$module = $_POST['module'];


$sql = "CREATE TABLE $module(
    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY
    )";
            
    $query =  $bdd->prepare($sql);
    $query->execute();

echo "fin  de la requête";

include "creation_champ.php";


?>
