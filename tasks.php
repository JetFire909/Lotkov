<?php
$rectSquare = 0;
$cubeVol= 0;
if(isset($_GET['rect'])){
    $rectSquare = $_GET['len'] * $_GET ['width'];
}
if(isset($_GET['cube'])){
    $cubeVol = $_GET['length']**3;
}
?>
<h1>Решение задач</h1>
<h2>Задача 1 площадь прямоугольника</h2>
<form action="">
    <p>Введите длину: <input type="text" name="len"></p>
    <p>Введите ширину: <input type="text" name="width"></p>
    <input type="submit" value="OK" name="rect">
</form>
<p>
    <?= "Площадь прямоуголинка = $rectSquare" ?> 
</p>
<h2>Задача 2 обьем куба</h2>
<form action="">
    <p>Введите сторону: <input type="text" name="length"></p>
    <input type="submit" value="OK" name="cube">
</form>
<p>
    <?= "Обьем куба = $cubeVol" ?> 
</p>
