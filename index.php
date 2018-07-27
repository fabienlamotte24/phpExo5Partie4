<?php
/*Déclaration de la variable*/
  function concat($number, $string){
    /*Paramétrage de l'affichage*/
    echo $number . $string;
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p>
      <?php
      /*Affichage final avec désignation des valeurs paramètres*/
        echo concat(3 , ' coucou');
       ?>
    </p>
  </body>
</html>
