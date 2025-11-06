<?php 
echo '<h1>Анонимные функции<br></h1>';

// $funcEcho = function($string) {
//     echo $string;
// };
// $funcEcho('Hello!');

function useCallback($number, $callBack) { 
    return $callBack($number);
}
function square($num) {
    return $num**2;
}

// $cube = function($num) {
//     return $num**3;

// };
echo useCallback(5, $cube = function($num) {
    return $num**3;

});
?>

<?php
echo '<h2>Задание 1 <br></h2>';
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; 


$Numbers1 = array_filter($numbers, function($number) {
    return $number % 2 == 0; 
});
if (!empty($Numbers1)) {
    echo 'Четные числа: ' . implode(', ', $Numbers1);
} else {
    echo 'Четных чисел нет.';
}
?>

<?php 
echo '<h2>Задание 2 <br></h2>';
$integers = [1,2,3,4,5,6];
$cubs  = array_map(function($num) {
    return $num ** 3;
}, $integers);
echo "Куб числа: " , implode(", ", $cubs);
?>

<?php 
echo '<h2>Задание 3 <br></h2>';
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$count = count($numbers);
$sum = array_reduce($numbers, function($carry, $num) {
    return $carry + $num;
},0);
$arithmetic = $sum / $count;

$chislo = array_reduce($numbers, function($carry, $num) {
    return $carry * $num;
}, 1);
$geometrick = pow($chislo, 1 / $count);
echo "Среднее арифметичкеское: " . $arithmetic . '<br>';
echo "Среднее геометрическое: " . $geometrick . '<br>';
?>

<?php 
echo '<h2>Задание 4 <br></h2>';
$students = [
    ['name'=>'Вася','birth'=> '2005','height'=> '175'],
    ['name'=>'Леха','birth'=> '2006','height'=> '168'],
    ['name'=>'Саня','birth'=> '2008','height'=> '181'],
    ['name'=>'Даня','birth'=> '2007','height'=> '190'],
    ['name'=>'Марат','birth'=> '2007','height'=> '184'],

];
$highStudents = array_filter($students, function($student) {
    return $student['height'] > 170;
});
echo "Количество студентов выше 170: ", count($highStudents), "<br>" ;

$names = array_map(function($student) {
    return $student["name"];
}, $highStudents);
echo "Имена: "  . implode(", ", $names) ."<br>";
?>

<?php
echo '<h2>Задание 5 <br></h2>';


