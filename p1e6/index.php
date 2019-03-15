<!-- Créer une variable name et l'initialiser avec la valeur de votre choix. -->
<?php $name = 'Amandine'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 6 partie 1 php</title>
</head>
<body>
  <p>Créer une variable name et l'initialiser avec la valeur de votre choix.</p>
  <p>Afficher : "Bonjour" + name + ", comment vas-tu ?".</p>
<!-- on ne met pas d'html dans le php pour éviter de prendre trop de ressource -->
  <p>Bonjour <?= $name; ?>, comment vas-tu ?</p>
</body>
</html>
