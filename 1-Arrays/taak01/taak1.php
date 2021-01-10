<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

$studenten_leeftijd = array("Peter"=>17 ,"mohammed"=>19, "els"=>24);
$studenten_achternaam = array("Peter"=>"klasen" ,"mohammed"=>"chemicalie", "els"=>"tabnf");
$studenten_klas =array("peter"=>"1a" , "mohammed"=>"1b" ,"els"=>"1a");
echo "mohammed  " . $studenten_achternaam['mohammed'] ." is " . $studenten_leeftijd['mohammed'] ." jaar oud ". "en zit in klas". $studenten_klas['mohammed'];
    ?>


</body>
</html>