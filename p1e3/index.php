<?php
// on déclare la variable km, on l'initialise à 1
$km = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3 partie 1 php</title>
  </head>
  <body>
  <p>1er km <?= $km; ?></p>
  <?php
    //On change la valeur par 3
    $km = 3;
  ?>
  <p>2ème km <?= $km; ?></p>
  <?php
    // on change la valeur par 125
    $km = 125;
  ?>
  <p>3ème km <?= $km; ?></p>
  </body>
</html>
