<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Задание 1</h2>
    <form method="$_GET">
        <p> Введите фамилию <input type='text' name="firstname"></p>
        <p> Введите имя <input type='text' name="secondname"></p>
        <p> Введите отчество <input type='text' name="lastname"></p>
        <p><input type='submit' value='Отправить' name="FIO"></p>
    </form>
    </body>

<?php 
if(isset($_GET['FIO'])){
$firstname = $_GET['firstname'];
$secondname = $_GET['secondname'];
$lastname = $_GET['lastname'];
echo "Ваше фио: $firstname $secondname $lastname"; 
}
?>

<h2>Задание 2</h2>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="$_GET">
    <p> Введите число <input type='text' name="number"></p>
    <p><input type='submit' value='Отправить' name="delitel"></p>
    </form>
    </body>

<?php 
if(isset($_GET['number'])){
    $n = $_GET['number'];

    if ($n<=0){
        echo "<p>Введите положительные число!</p>";
    }else{
        echo "Делители числа $n: ";
        echo "<strong>";

        for ($i = 1; $i <= $n; $i++){
            if ($n % $i == 0){
                echo $i, ' ';
            }
        }
        echo "</strong>";
    }
}
?>

<h2>Задание 3</h2>
<form action ="">
    Сторона 1 <input type="number" name="a"><br>
    Сторона 2 <input type="number" name="b"><br>
    Сторона 3 <input type="number" name="c"><br>
    <input type="sumbit" name="cube" value="Найти">
</form>
<?php 
if(isset($_GET['cube'])){
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    if($a + $b > $c and $a + $c > $b and $b + $c > $a) {
        $p = ($a + $b + $c)/2;
        $s = 0.5*($p*($p - $a)*($p  - $b)*($p - $c));
        echo "Площадь треугольника:", $s, '<br>';
    }}else{
        echo "Треугольника не существует";
}
