<?php
if(isset($_GET['task1'])){
$dig = (int) $_GET['digit'];
$digit = match($dig){
    1 => 'one <br>',
    2 => 'two <br>',
    3 => 'three <br>',
    4 => 'four <br>',
    5 => 'five <br>',
    6 => 'six <br>',
    7 => 'seven <br>',
    8 => 'eight <br>',
    9 => 'nine <br>',
default => 'Нет такой цифры',
};  
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
<h1>Задачи матч</h1>
<h2>Задача 1</h2>
    <form action="">
        <p> Введите цифру <input type='text' name="digit"></p>
        <p><input type='submit' name="task1"></p>
    </form>
    <p><?= "Цифра называется: $digit" ?></p>
    
<?php
if(isset($_GET['task2'])){
$div = (int) $_GET['divit'];
$divit = match($div){
        1 => "1 Января - Новый год <br>",
        2 => "23 Февраля - День защитника отечества <br>",
        3 => "8 Марта - Вумен дей <br>",
        4 =>  '1 Апреля - 1 Апреля <br>',
        5 =>  '9 Мая - День победы <br>',
        6 => '6 июня  — день высадки в Нормандии<br>',
        7 => 'В июле - праздников  не найден <br>',
        8 => '1 августа - международный день пива <br>',
        9 => 'В сетнябре - праздников не найдено <br>',
        10 => 'В октябре - праздников не найдено <br>',
        11 => '4 ноября - День народного единства <br>',
        12 => '31 декабря — канун Нового года <br>',
        default => 'Ничего не совпало',
};
}
?>

<?php 
echo '<h2>Задача 3</h2>';
$numb = 249;
$a = $numb % 10;
$b = $a ** 2;
$c = $b % 10;
echo $b, "<br>", $c;
?>

<?php 
echo '<h2>Задача 4</h2>';
$k = 17;
$l = $k % 10;
$word = 'лет';
switch($a){
    case $l == 1 and $k != 11:
        $word ='год';
        break;

        case $l >= 2 and $l <= 4 and ($k < 10 or $k > 20);
        $word ='года';
        break;
}
echo "Мне $k $word";
?>