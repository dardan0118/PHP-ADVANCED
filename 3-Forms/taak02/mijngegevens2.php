<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?> <br>
je achternaam is: <?php echo $_POST["achternaam"]; ?> <br>
je zit in de klas: <?php echo $_POST["leeftijd"]; ?> <br>
je adres is: <?php echo $_POST["adres"]; ?> <br>
de plaats waar je vandaan komt is: <?php echo $_POST["plaatsnaam"]; ?> <br>
je favo muziek band is: <?php echo $_POST["muziek_band"]; ?>
<?php echo $_POST["geslacht"]; ?><br>
<?php $kleur = $_POST["kleur"]; 
 echo "<body style='background-color:$kleur'>";?><br>
</body>
</html>