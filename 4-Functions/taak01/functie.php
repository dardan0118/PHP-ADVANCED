<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

function Kleur()
{
    $color = array("red","#FF2100","blue","#1134");
    foreach($color as $value)
    echo "<a style=color:$value;>" . "kleur:$value <br>" ."</a>";
          
}


Kleur();



?>
</body>
</html>