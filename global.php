<?php
echo '<h1>Стрелочные функции</h1>';
$a = 5;
$b = 7;
function ext() {
// $a = 5;
// $b = 7;
$f = fn () => $a + $b ; 
return $f();
}
// echo $f ();
$t = $a < 0  ? $a**2 : $a**3 ;
echo $t;
?>

<?php
echo '<h2>Задание 1</h2>';
$r = 5;
$circleLenght = fn($r) => 2 * 3.14 * $r;
echo $circleLenght($r);
?>

<?php
echo '<h2>Задание 2</h2>';
$r = 7;
$s = fn($r) => 3.14 * ($r ** 2);
echo $s($r);
?>

<?php
echo '<h2>Задание 3</h2>';
$a = 4;
$b = 6;
$c = 9;
$p = fn() => ($a + $b + $c)/2;
$x = $p();
$s = fn($a, $b, $c, $x) => ($x*($x-$a)*($x-$b)*($x-$c))**0.5;
$y = $s($a, $b, $c, $x);
echo $y;
?>

<?php
echo '<h2>Задание 4</h2>';
$a=1;
$b=7;
$c=10;
$p=fn($a,$b,$c)=>(($a+$b+$c)/2);
$pp=$p($a,$b,$c);
$s=fn($a,$b,$c,$p) => (sqrt($p * ($p-$a) * ($p-$b) * ($p-$c))) ? sqrt($p * ($p-$a) * ($p-$b) * ($p-$c)) : 0;

echo $s($a,$b,$c,$pp);
?>

<?php
echo '<h2>Задание 5</h2>';

