<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie5_Exo6</title>
</head>
<body>
    <?php
// Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.

    $departements = array( //Je déclare mon tableau départements. Le tableau est un assemblage de vriable.
     '02' => 'Aisne', // 02 est associé à Aisne.
      59 => 'Nord',
      60 => 'Oise',
      62 => 'Pas de Calais',
      80 => 'Somme');

    echo $departements[59];

?></p>
</body>
</html>
