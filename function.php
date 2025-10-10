<h1>Функции</h1>
<?php
// function sayHello($name)
// {
//     echo "<p>Привет, $name!</p>";
// }
// $userName = "Вася";
// sayHello(name: $userName);

// function rectSquare($lenght, $width)
// {
//     $square = $lenght * $width;
//     return $square;
// }
// $square = rectSquare(5,10);
// echo $square;

// function multArray(...$number)
// {
//     $result = 1;
//     foreach ($number as $number) {
//         $result *= $number;
//     }
//     return $result;
// }
// $nums = [3,5,2,7];
// echo multArray($nums), '<br>';
// ?>

<?php
echo '<h2>Задание 1 </h1>';
function circlelangs($d){
    return  2 * 3.14 * $d;
}
echo circlelangs(10);

echo '<h2>Задание 2</h1>';
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
        <p> Введите сторону a <input type='text' name="a"></p>
        <p> Введите сторону b <input type='text' name="b"></p>
        <p> Введите сторону c <input type='text' name="c"></p>
        <p><input type='submit' name="task1"></p>
    </form>
</body>
</html>

<?php
function squareTr($a,$b,$c){
    if($a<=0 or $b<=0 or $c<=0){
        return 0;
    }else{
        $p = ($a + $b + $c)/2;
        $s  = ($p * ($p - $a)*($p - $b)*($p - $c))**0.5;
        return $s;
}
} 
echo squareTr($_GET['a'], $_GET['b'], $_GET['c']); 
?>

<?php
echo '<h2>Задание 3</h1>';
function devider ($n){
if($n <= 1) return 0;
    for($i = $n - 1; $i < $n; $i--){
        if ($n % $i == 0)
        return $i;
} 
}
echo devider(20);
?>

<?php
echo '<h2>Задание 4</h1>';
function allDivisor($k){
    $divisor = [];
    if($k <=1 ) return  0 ;
    for($i = $k - 1; $i >= 2; $i--){
        if ($k % $i == 0){
            $divisor[] = $i;
        }
    }
    return $divisor;
}
$divisor = allDivisor(10);
foreach($divisor as $k ){
    echo $k,'<br>';
}



