<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2 partie 1 php</title>
  </head>
  <body>
  <?php
  // Déclaration des variables
  $lastname = 'Dewèvre';
  $firstname = 'Ama';
  $age = 18;
  // on concatène $lastname, $firstname, $age dans $identity
  $identity = $lastname .' '. $firstname .' '. $age .' ans';
  ?>
  <!-- AFFICHE 'Dewèvre Ama 18' dans ma balise p -->
  <p><?= $identity ?></p>
  </body>
</html>
