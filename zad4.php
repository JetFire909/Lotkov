<?php
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
if($a+$b>$c && $b+$c>$a && $a+$c>$b){
    $str1 = 'Треугольник существует';
}else{
    $str1 = 'Треугольник не существует';
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
    <form action="">
        <p>Введите a:<input type="text" name="a"></p>
        <p>Введите b:<input type="text" name="b"></p>
        <p>Введите c:<input type="text" name="c"></p>
        <p><input type="submit" value="Отправить"></p>
            <p><?= "$str1" ?></p>
    </form>
</body>
</html>