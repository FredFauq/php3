<?php
$firstNumber = 100;
$secondNumber = 2;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 3</title>
</head>
<body>
  <?php
    while ($firstNumber >= 10)
    {
      echo $resultNumber = $firstNumber * $secondNumber . '  ' ;
      $firstNumber-- ;
    }
  ?>
</body>
</html>
