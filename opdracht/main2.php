<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table id="table">
    
<?php 
$dardy = array("voornaam"=>"dardan","achternaam"=>"mustafa","klas"=>"9d","Leeftijd"=>18,"Woonplaats"=>"weesp");
function make($key,$value){
    
    echo "<tr> <td> $key </td> <td> $value </td> </tr>" ;
}


$achtergrondkleur = $_POST["backgroundkleur"]; 
$dikte = $_POST["border"];
$padding = $_POST["padding"];
$textkleur = $_POST["textkleur"];
echo "<style>
td,table,tr,th{
    border: $dikte;
    border-collapse: collapse;
}
td,th{
    padding: $padding;
}
</style>";
echo    "<body style='color:$textkleur;background-color:$achtergrondkleur'>" ;  
 
foreach($dardy as $key => $value){
 make($key,$value);
}

?>
    
</table>
</body>
</html>