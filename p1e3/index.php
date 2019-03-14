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
  <!-- On affiche la valeur de notre variable  -->
  <p>1er km : <?= $km; ?></p>
  <?php
  //On change la valeur de notre 1ere variable par 3, elle ""écrase" donc la 1ere valeur
  $km = 3;
  ?>
  <!-- On affiche la nouvelle valeur de notre variable -->
  <p>2ème km : <?= $km; ?></p>
  <?php
  // on change la valeur de notre 1ere variable par 125, elle "écrase" donc la 1er et la seconde valeur
  $km = 125;
  ?>
  <!-- On affiche la nouvelle valeur de notre variable -->
  <p>3ème km : <?= $km; ?></p>
</body>
</html>
