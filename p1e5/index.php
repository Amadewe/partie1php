<?php
/*typer une variable pour éviter les problèmes de conversion.
 surtout utilé pour les nouvelles versions de php;
 la fonction settype prend en paramètres le nom de la variable et son type entre quote.  */
settype($int,'int');
// Créer une variable de type int. L'initialiser avec rien.
// Rien (NULL) cad qu'une variable ne contient rien.
$int = null;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 5 partie 1 php</title>
</head>
<body>
  <p>Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.</p>
  <p>Donner une valeur à cette variable et l'afficher.</p>
  <!-- J'affiche la valeur nul de ma variable $int  -->
  <p>J'ai crée une variable et je l'ai initialisé avec rien: <?= $int; ?></p>
  <!-- je donne une nouvelle valeur à ma variable $int -->
  <?php $int = 7; ?>
  <!-- J'affiche la nouvelle valeur de ma variable $int  -->
  <p>Ma variable $int est initialisé d'une nouvelle valeur: <?= $int; ?></p>
</body>
</html>
