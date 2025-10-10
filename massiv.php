<?php

$nums = [1,2,3,75,22];
$max = $nums[0];
$min = $nums[0];
// for ($i = 0 ; $i < count(value: $nums) ; $i++){
//     echo $nums[$i], '<br>';
// }

// for($i = 0 ; $i < count($nums); $i++){
//     if($nums[$i] > $max){
//         $max = $nums[$i];
//     }
// }
//     echo "Максимальный элемент массива: $max";

echo "<h2>Задание 1</h2>";
foreach($nums as $num){
    if($num > $max){
        $max = $num;
    }
    if($num < $min){
        $min = $num;
}
}
echo "Максимальный элемент массива: $max", '<br>';
echo "Минимальный элемент массива: $min", '<br>';

echo "<h2>Задание 2</h2>";
$sum = $nums[0];
$s = $nums [0];
foreach($nums as $num){
    $sum += $num;
    $s = $num * $s;
}
echo "Сумма элементов массива: $sum", '<br>';
echo "Произведение элементов: $s",  '<br>';





