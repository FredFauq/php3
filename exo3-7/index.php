<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7</title>
</head>
<body>
  <p>
    <?php
    // Initialisation de la variable, condition <= à 100, inrémentation par pas de 15.
    for ($counter = 1 ; $counter <=100 ; $counter+= 15){
    // passage à la ligne avec une balise <br /> après sortie et retour en PHP
    ?>
  <br />
    <?php
    // Affichage par la fonction echo de la phrase
    echo 'On tient le bon bout.';
    }
    ?>
  </p>
</body>
</html>
