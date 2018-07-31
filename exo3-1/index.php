<?php
$number = 0;
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
    while ($number < 10)
    {
      echo $number . ' ';
      $number++;
    }
    ?>
  </p>
</body>
</html>
