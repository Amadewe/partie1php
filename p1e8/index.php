<!-- on peut stocker le résultat d'une opération dans une variable, si le résultat est un int la variable deviendra un int -->
<?php
// Créer 3 variables.
// Dans la première mettre le résultat de l'opération 3 + 4.
$add = 3 + 4;
//autre version pour additionner:
$firstNumber = 30;
$firstNumber += 40;
// Dans la deuxième mettre le résultat de l'opération 5 * 20.
$multiply = 5 * 20;
// Dans la troisième mettre le résultat de l'opération 45 / 5.
$divide = 45 / 5;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 8 partie 1 php</title>
</head>
<body>
  <p>Créer 3 variables :</p>
  <ul>
    <li>Dans la première mettre le résultat de l'opération 3 + 4.</li>
    <li>Dans la deuxième mettre le résultat de l'opération 5 * 20.</li>
    <li>Dans la troisième mettre le résultat de l'opération 45 / 5.</li>
  </ul>
  <!-- Afficher le contenu des variables. -->
  <p>3 + 4 = <?= $add?></p>
  <p>5 * 20 = <?= $multiply?></p>
  <p>45 / 5 = <?= $divide?></p>

  <!-- VERSION avec le += -->
  <p>Version où l'on additionne directement le second chiffre dans notre variable avec +=</p>
  <p>30 + 40 = <?= $firstNumber?></p>
</body>
</html>
