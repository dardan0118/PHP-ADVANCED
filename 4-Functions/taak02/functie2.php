<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "als ik de getallen 4, 2 en 9 optel, is de uitkomst: " . sum(5,10) . "<br>";
  echo "als ik de getallen 1, 2 en 3 optel, is de uitkomst: " . sum(5,1) . "<br>";
  echo "als ik de getallen 40, 28 en 91 optel, is de uitkomst: " . sum(68,91) . "<br>";



?>
</body>
</html>