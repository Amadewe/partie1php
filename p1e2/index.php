<?php
// Déclaration des variables
//les doubles quotes prennent trop de ressources.
//php language dit serveur
//on ne fait pas du html dans du php !
$lastname = 'Dewèvre';
$firstname = 'Ama';
$age = 18;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 2 partie 1 php</title>
</head>
<body>
  <!-- on concatène les variables avec les points mais il est préférable d'écrire nos textes dans l'html comme çi-dessous-->
  <p>Mon nom est <?= $lastname?>, mon prénom est <?= $firstname?>, j'ai <?=$age?> ans</p>
</body>
</html>
