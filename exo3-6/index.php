<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 6</title>
</head>
<body>
  <p>
    <?php
    // Initialisation de la variable, condition >= à 0, décrémentation par pas de 1.
    for ($counter = 20 ; $counter >= 0 ; $counter--){
    // passage à la ligne avec une balise <br /> après sortie et retour en PHP
    ?>
    <br />
    <?php
    // Affichage par la fonction echo de la phrase
    echo 'C\'est presque bon.';
    }
    ?>
  </p>
</body>
</html>
