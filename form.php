<?php
if(isset($_GET['number'])){
    $number = $_GET['number'];
    $s = $number**2;

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
    <h2>Площадь квадрата</h2>
    <form action="">
        <p>Введите сторону<input type="text" 
        name="number"></p>
        <p><input type="submit" value="отправить"></p>
    </form>
    <p> <?php echo "Площадь квадрата : $s" ; ?></p>
    
    <h2>Площадь квадрата</h2>

</body>
</html>