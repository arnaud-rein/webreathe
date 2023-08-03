<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Remplir une liste déroulante avec un array</title>
    <link rel="stylesheet" href="espacement.css">
  </head>
  <body>
    <?php  include "navbar.html"; ?>
    <form action="traitement_recap_module.php" method="post">
      <h1>principal </h1>
    <select name="menu1">
      <option selected="selected">Sélectionner une valeur</option>
      <?php
     
      include "connect.php";


      $sqlQuery = 'SELECT table_name FROM information_schema.tables WHERE table_schema = "webreathe";';
$recipesStatement = $bdd->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($recipes as $recipe) {

    $langages[]= $recipe['table_name'];
?>
   
        
      
<?php
}


    //   $langages = array("PHP", "Java", "Ada", "HTML", "CSS");
      
      // Parcourir le tableau des langues
      foreach($langages as $value){
      ?>
      <option value="<?php echo strtolower($value); ?>"><?php echo $value; ?></option>
      <?php
      }
      ?>



    <div class="c100" id="submit">
        <input type="submit" value="Envoyer">
    </div>
</form>
    </select>

    <p>Chaque option correspond à une table dans la bdd, on y récupérera les noms des colonnes et ces valeurs</p>
  </body>
</html>