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
<?php

include 'navbar.html';

?>
<body>
    


<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>


    const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'line',
  data: {
    labels: [<?php 
      include "connect.php";        
      $sqlQuery = 'SELECT *  FROM module1 ORDER BY id_num DESC LIMIT 6, 1';
        include "trois.php";?>,
         <?php 
      include "connect.php";        
      $sqlQuery = 'SELECT *  FROM module1 ORDER BY id_num DESC LIMIT 5, 1';
        include "trois.php";?>
         , 
         
         <?php 
      include "connect.php";        
      $sqlQuery = 'SELECT *  FROM module1 ORDER BY id_num DESC LIMIT 4, 1';
        include "trois.php";?>
         
         , 

         <?php 
      include "connect.php";        
      $sqlQuery = 'SELECT *  FROM module1 ORDER BY id_num DESC LIMIT 3, 1';
        include "trois.php";?>
         , 
         
         <?php 
      include "connect.php";        
      $sqlQuery = 'SELECT *  FROM module1 ORDER BY id_num DESC LIMIT 2, 1';
        include "trois.php";?>
         
         , 
         
         <?php 
      include "connect.php";        
      $sqlQuery = 'SELECT *  FROM module1 ORDER BY id_num DESC LIMIT 1, 1';
        include "trois.php";?>],




    datasets: [{
      label: 'Statistique de fonctionnement',
      data: [<?php 
      include "connect.php";        
      $sqlQuery = 'SELECT *  FROM module1 ORDER BY id_num DESC LIMIT 6, 1';
        include "deux.php";?>,
         <?php 
      include "connect.php";        
      $sqlQuery = 'SELECT *  FROM module1 ORDER BY id_num DESC LIMIT 5, 1';
        include "deux.php";?>
         , 
         
         <?php 
      include "connect.php";        
      $sqlQuery = 'SELECT *  FROM module1 ORDER BY id_num DESC LIMIT 4, 1';
        include "deux.php";?>
         
         , 

         <?php 
      include "connect.php";        
      $sqlQuery = 'SELECT *  FROM module1 ORDER BY id_num DESC LIMIT 3, 1';
        include "deux.php";?>
         , 
         
         <?php 
      include "connect.php";        
      $sqlQuery = 'SELECT *  FROM module1 ORDER BY id_num DESC LIMIT 2, 1';
        include "deux.php";
        
        ?>
         
         , 


         
         
         <?php 
      include "connect.php";        
      $sqlQuery = 'SELECT *  FROM module1 ORDER BY id_num DESC LIMIT 1, 1';
        include "deux.php";?>
        
        
        ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        // beginAtZero: true
        max: 100,
        min: 0,
       
      }
    }
  }
});

</script>
<div class="alerte">dysfonctionnement  du module1, la valeur est en dessous de 60</div>
<?php 
      include "connect.php";


        
      $sqlQuery = 'SELECT *  FROM module1 ORDER BY id_num DESC LIMIT 1, 1';
$recipesStatement = $bdd->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($recipes as $recipe) {

    $tr = $recipe['vitesse'];
    if($tr < 60){
        ?> <script>$(".alerte").show()</script> <?php
        // include "alerte.php";
    }else{
        ?> <script> $(".alerte").hide() </script> <?php
    }
echo $recipe['vitesse'];
   

}?>


<!-- <script>
setTimeout(function() {
  location.reload();
}, 30000);

</script> -->

<script src="reload.js"></script>




<?php

include 'generateur_principal.php';
?>



<p>Toutes les 5 secondes les valeurs sont actualisés grâce au script  "generateur_principal" dans le code. <br>
C'est un script fait en AJAX qui réactualise la page, le fichier se nomme "reload.js"<br> 
Une alerte s'affiche à l'écran quand une valeur se situe en dessous de 80 et disparait au-dessus de celle-ci. </p>

















    



 
</body>
</html>