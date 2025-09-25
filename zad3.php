<?php
    $age = $_GET['age'];
if($age<=1){
    $ageGroup = 'Котята';
}else{
if($age>1){
    $ageGroup= 'Котята';
}else{
if(3>$age=>7){
    $ageGroup = 'Котята';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Введите возраст:<input type="text" name="age"></p>
</body>
</html>