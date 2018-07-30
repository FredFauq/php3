<?php
$number1 = 1;
$number2 = 35;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 2</title>
</head>
<body>
  <?php
    while ($number1 <= 20)
    {
      echo $number1 * $number2 . ' @ ';
      $number1++;
    }
  ?>
</body>
</html>
