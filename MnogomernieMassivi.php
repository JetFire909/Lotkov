<h1>Многомерные массивы</h1>
<?php 
$students = [
    ['name'=>'Иванов Иван','group'=>'ИВ1к-24','course'=>1],
    ['name'=>'Сидоров Владимир','group'=>'М1к-24','course'=>2],
    ['name'=>'Петров Иван','group'=>'ИВ1-2-24','course'=>2],

];
foreach($students as $student){
echo "Имя: {$student['name']}, ГРуппа: {$student['group']}, Курс: {$student['course']}";
        echo '<br>';
    }
?>
<?php
echo "<h2>Задание 1</h2>"; 
$array = [
    [1,2,4],
    [3,5,3],
    [4,3,6],
    [3,5,2],
];
echo "<table border='1'>";
foreach($array as $key){
    echo "<tr>";
    foreach($key as $b){
    echo "<td>$b</td>";
    }
    echo "</tr>";
}
?>

<?php 
echo "<h2>Задание 2</h2>"; 
$sq = [];  
$row = [];  
for ($i = 10; $i <= 99; $i++) {  
    $row[] = $i * $i;  
    if (count($row) == 9) {  
        $sq[] = $row;  
        $row = [];  
    }  
}  
  
if (!empty($row)) {  
    $squares[] = $row;  
}  

echo "<table border='1' cellpadding='10'>";  
foreach ($sq as $row) {  
    echo "<tr>";  
    foreach ($row as $value) {  
        echo "<td>$value</td>";  
    }  
    echo "</tr>";  
}  
echo "</table>";  
?>  

<?php 
echo "<h2>Задание 3</h2>"; 
$arrat = [
    [3, 66, 65, 7, 2],
    [61, 5, 85, 26, 20],
    [8, 27, 61, 4, 29],
    [44, 7, 82, 38, 4],
];

$max = $arrat [0] [0];
$min = $arrat [0] [0]; 
$maxpol = [1,1]; 
$minpol = [0,0];
foreach($arrat as $a => $b){
    foreach($array as $c => $d){
        if($d>$max){
        $max=$d;
        $maxpol = [$a , $c];
        }
        if($d<$min){
            $min = $d;
            $minpol = [$a , $c];
        }
    }
}
echo "Массив:", '<br>';
foreach($arrat as $b){
    echo implode(' ',$b), '<br>';
}
echo "Максимум: $max, место:", $maxpol[0], $maxpol[1],"",'<br>';
echo "Минимум: $min, место:", $minpol[0], $minpol[1],"",'<br>';

?>


