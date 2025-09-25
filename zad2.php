<h2>Задание 2</h2>
<?php
    $a1 = $_GET['a1'];
    $a2 = $_GET['a2'];
if($a1+$a2<180 ){
    $str1 = 'Треугольник существует';
}else{
    $str1 = 'Треугольник не существует';
}
if($a1=90 or $a2=90 or 180-$a1-$a2=90){
    $str2 = 'Треугольник прямоугольный';
}else{
    $str2 = 'Треугольник не прямоугольный';
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
        <p>Введите угол 1:<input type="text" name="a1"></p>
        <p>Введите угол 2:<input type="text" name="a2"></p>
        <p><input type="submit" value="Отправить"></p>
        <p><?= "$str1 $str2"; ?></p>
    </form>
</body>
</html>
