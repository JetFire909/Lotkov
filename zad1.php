<?php
$a = 2;
$b = 2;
if(isset($_GET)){
    $a = $_GET['a'];
    $b = $_GET['b'];
}if($a< $b){
    $c=$a+$b;
}else{
    $c=$a*$b;
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
    <h1>Решение задач на условия</h1>
    <h2>Задание 1</h2>
    <form action="">
        <p>Введите a:<input type="text" name="a"></p>
        <p>Введите b:<input type="text" name="b"></p>
        <p><input type="submit" value="Отправить"></p>
    </form>
    <p><?php echo "Результат : $c"; ?></p>
    
    <h2>Задание 2</h2>
    
</body>
</html>
