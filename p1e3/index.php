<?php
// php de traitement
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
  <p>Créer une variable km. L'initialiser à 1. Afficher son contenu.</p>
  <p>Changer sa valeur par 3. Afficher son contenu.</p>
  <p>Changer sa valeur par 125. Afficher son contenu.</p>
  <!-- On affiche la valeur de notre variable  -->
  <p>1er km : <?= $km ?></p>
  <!-- php d'affichage
  mais içi on doit changer la valeur de notre variable dans ces cas là on modifie la valeur de notre variable dans le php d'affichage-->
  <!-- On réatribue la valeur de notre 1ere variable par 3, elle écrase" donc la 1ere valeur -->
  <?php $km = 3; ?>
  <!-- On affiche la nouvelle valeur de notre variable -->
  <p>2ème km : <?= $km ?></p>
  <!-- on réatribue la valeur de notre 1ere variable par 125, elle "écrase" donc la 1er et la seconde valeur -->
  <?php $km = 125; ?>
  <!-- On affiche la nouvelle valeur de notre variable -->
  <p>3ème km : <?= $km ?></p>
</body>
</html>
