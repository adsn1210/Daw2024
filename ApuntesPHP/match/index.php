<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$name = "Miguel";
$age = 12;

$output = "Hola $name ,con una edad de $age.";
$output =  match($age){
    0,1,2,3 => "Eres un bebe,$name",
    4,5,6,7 => "Eres un niño,$name",
    8,9,10 => "Eres un jovenzuelo,$name",
    default => "Eres un adulto,$name",
};

?>
    
</body>
</html>