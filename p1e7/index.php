<?php
// Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
$lastname = "Dupont";
$firstname = "Jean";
$age = 18;
// on concatène $lastname, $firstname, $age dans $identity
$identity = 'Bonjour '. $lastname .' '. $firstname .', tu as '. $age .' ans';
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7 partie 1 php</title>
  </head>
  <body>
 <!-- Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans". -->
<?= $identity; ?>
  </body>
</html>
