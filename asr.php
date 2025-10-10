<h1>Ассоциативные массивы</h1>
<!-- <?php
$array = ['one'=>'один', 'two'=>'два', 'three'=>'три'];
$array['four'] = 'четыре';
$array[] = 435;
unset($array['two']);
foreach($array as $key => $item){
    echo "<p> $key - $item </p>";
}
?> -->

<h2>Задание 1</h2>
<?php
$ar = [
    'mon'=>'пон',
    'tues'=>'вт',
    'wed'=>'ср',
    'thyr'=>'чет',
    'fri'=>'пят',
    'sat'=>'суб',
    'sun'=>'вос',
    'eight'=>'восемь',
    'nine'=>'девять',
    'ten'=>'десять'];
foreach($ar as $en => $don){
    echo " $en - $don </p>";
}
?>

<h2>Задание 2</h2>
<?php
$ar = ['mon'=>'пон','tues'=>'вт','wed'=>'ср','thyr'=>'чет','fri'=>'пят','sat'=>'суб','sun'=>'вос','eight'=>'восемь','nine'=>'девять','ten'=>'десять'];
$word = 'воспваорпемь';
$found = false;
foreach($ar as $key => $v){
    if ($v == $word){
        echo  "$word - $key <br>";
        $found = true;
        break;
    }
}
if(!$found){
    echo "Такого слова нет";
}
?>

<h2>Задание 3</h2>
<?php
$word = "one";
$found = false;
$ar = [
    'mon'=>'пон',
    'tues'=>'вт',
    'wed'=>'ср',
    'thyr'=>'чет',
    'fri'=>'пят',
    'sat'=>'суб',
    'sun'=>'вос',
    'eight'=>'восемь',
    'nine'=>'девять',
    'ten'=>'десять'];
foreach ($ar as $rus => $eng){
    if ($rus == $word){
        echo "$rus - $eng",'<br>';
        $found = true;
        break;
    }elseif($eng  == $word){
        echo "$eng - $rus";
        $found = true;
        break;
    }
}
if(!$found){
    echo "Такого слова нет";
}
?>

<h2>Задание 4</h2>
<?php
$words = "nine";
$f = false;
$ars = [
    'mon'=>'пон',
    'tues'=>'вт',
    'wed'=>'ср',
    'thyr'=>'чет',
    'fri'=>'пят',
    'sat'=>'суб',
    'sun'=>'вос',
    'eight'=>'восемь',
    'nine'=>'девять',
    'ten'=>'десять'];
foreach ($ars as $russ => $engs){
    if ($russ == $words){
        echo "$russ - $engs",'<br>';
        $found = true;
        break;
    }elseif($engs  == $words){
        echo "$engs - $russ";
        $found = true;
        break;
    }
}
if(!$found){
    echo "Такого слова нет";
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
    <form action="">
        <p> Введите слово <input type='text' name="words"></p>
        <p><input type='submit' value="Перевести"></p>
    </form>
    <p><?php echo "$words" ?></p>
</body>
</html>
<?php
