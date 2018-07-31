<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 8</title>
</head>
<body>
  <!-- PHP entre balise <p> -->
  <p>
  <?php
  // Initialisation de la variable, condition si >= à 0, décrémentation par pas de 12
  for ($counter = 200 ; $counter >=0 ; $counter-= 12){
    // Passage à la ligne par balise <br /> après sortie et retour en PHP
  ?>
    <br />
  <?php
  // Affichage par la fonction echo de la phrase
    echo 'Enfin !!!!';
    }
  ?>
  </p>
</body>
</html>
