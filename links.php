<?php
echo '<h1>Ссылки</h1>';
$a = 5;

function setParam(&$param ){
    $param = 10;
}
setParam($a);
?>

<p><?= $a ?></p>

<?php
echo '<h2>Задание 1</h2>';
echo 'array_pop, array_push, array_shift, array_splice, array_walk, array_walk_recursive, asort, arsort, end,
extract, krsort, ksort, natcasesort, natsort, next, prev, reset, rsort, shuffle, sort, uasort, uksort, usort';
?>

<?php
echo '<h2>Задание 2</h2>';
$a = 5;
function f( &$p ){
    $p = $p**3;
}
f($a);
echo $a;
?>

<?php
echo '<h2>Задание 3</h2>';
$str = 'One, two, three, four, five';
function replace( &$str ){
    $str = str_replace(","," ", $str);
}
replace($str);
echo $str;
?>

<?php
echo '<h2>Задание 4</h2>';
$str = 'Hello world';
function reverse( &$str ){
    $str = strrev( $str );
}
reverse($str);
echo $str;
?>

<?php
echo '<h2>Задание 5</h2>';
$array = [1,3,6,-32,84,-99];
function convert( &$arrayB ){
foreach ($arrayB as &$value){
    $value = abs($value);
}
}
convert($array);
echo "Массив: " . implode("," , $array) . "";
?>

<?php
echo '<h2>Задание 6</h2>';
$array = [1,3,6,-32,84,-99];
echo "Массив: " .  implode(" " , $array);
function ChangeKeys(&$array){
    $newArray = [];
    foreach ($array as &$value){
         
    }
}

