<?php
$number1 = 0;
$number2 = 35;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 1</title>
</head>
<body>
  <p>
    <?php
    while ($number1 <= 20)
    {
      echo $number1 * $number2 ;
      $number1++;
    }
    ?>
  </p>
</body>
</html>
