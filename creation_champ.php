
<?php 
include "navbar.html";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter indéfiniment des champs de saisie</title>
    <link rel="stylesheet" href="espacement.css">
    <script src="traitement.js"></script>
    
</head>
<body>
    <form action="requete_sql_add_column.php" method="post" id="dynamicForm">
        <!-- Champ de saisie initial -->
        <!-- <input type="text" name="champ[]" placeholder="Champ 1">
        <input type="text" name="condition[]" placeholder="condition 1"> -->

        <!-- Un div pour contenir les nouveaux champs de saisie -->
        <div id="dynamicInputs"></div>

        <!-- Un bouton pour ajouter dynamiquement de nouveaux champs de saisie -->
        <button type="button" id="addInputButton">Ajouter un champ</button>
        <button type="button" id="addInputCondition">Ajouter une condition</button>
        <!-- <button type="button" id="addSelectButton">Ajouter une liste déroulante</button> -->


        <!-- Un bouton pour soumettre le formulaire -->
        <input type="submit" name="submit" value="Soumettre">
    </form>    
    <button onclick="triggerFunction()">Cliquez pour déclencher la fonction</button>

    <?php 
        


    ?>
    
</body>
</html>