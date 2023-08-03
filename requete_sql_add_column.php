<?php
include "connect.php";



foreach($_POST["champ"] as $value){
    
    $lqs = "ALTER TABLE module2
    ADD $value INT";//mettre le type en condition 
    $query =  $bdd->prepare($lqs);
    $query->execute();
    
    echo "ajout de la colonne " .$value. " réussite";
    
    
}

include "creation_champ.php";


?>