<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
<tr>
<th>Voornaam</th>
<th>Achternaam</th>
<th>Klas</th>
<th>Leeftijd</th>
<th>Woonplaats</th>
<th>piet lengte</th>
<th>els lengte</th>
<th>mo lengte </th>
</tr>
<tr>
<?php
$student = array("voornaam"=>"Jan","achternaam"=>"Janssen","klas"=>"9A","Leeftijd"=>17,"Woonplaats"=>"Amstelveen");
$lengte = array("Piet"=>188, "Els"=>168, "Muhammad"=>176);
foreach($student as $value)
{
echo "<td>" . $value . "</td>";
}


foreach($lengte as $value2)
{
echo "<td>" . $value2 . "</td>";
}



?>
</tr>
</table> 

</body>
</html>