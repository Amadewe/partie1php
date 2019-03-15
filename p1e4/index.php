<?php
// Créer une variable de type string, une variable de type int, une variable de type float,
//une variable de type booléan et les initialiser avec une valeur de votre choix.

// Les chaînes de caractères (string) sont le nom informatique qu'on donne au texte.
$string = 'texte';
// Les nombres entiers (int) : ce sont les nombres du type 1, 2, 3, 4, etc. On compte aussi parmi eux les entiers relatifs : -1, -2, -3…
$int = 42;
// Les nombres décimaux (float) : ce sont les nombres à virgule.
// Attention, les nombres doivent être écrits avec un point au lieu de la virgule (c'est la notation anglaise).
$float = 42.42;
// Les booléens (bool) : c'est un type très important qui permet de stocker soit vrai soit faux.
// Cela permet de retenir si une information est vraie ou fausse.
// On les utilise très fréquemment. On écrittruepour vrai, etfalsepour faux.
$bool = true;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 4 partie 1 php</title>
</head>
<body>
  <p>Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.</p>
  <p>Les afficher.</p>
  <p>Variable de type string: <?= $string ?></p>
  <p>Variable de type int: <?= $int ?></p>
  <p>Variable de type float: <?= $float ?></p>
  <p>Variable de type booléan: <?= $bool ?></p>
</body>
</html>
