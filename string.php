<h1>Строки</h1>
<?php
$str = 'Hello!';
for($i=0; $i<mb_strlen($str); $i++){
    echo $str[$i],'<br>';
}
echo mb_strlen( $str);
?>

<?php
echo '<h2>Задание 1 </h1>';
$str = 'Hello (world) !';
$start = 0;
$end = 0;

for($i= 0; $i < strlen($str); $i++){
    if ($str[$i] == '(') $start = $i;
    if ($str[$i] == ')') {
        $end = $i;
        break;
    }
}

if ($start > 0 and $end > 0 and $start < $end){
    for($i = $start + 1; $i < $end; $i++){
        echo $str[$i],'<br>';
    }
}else{
    echo '';
}

?>

<?php
echo '<h2>Задание 2</h1>';
"<br>";
$words = [
'words' => 0,
'str'=> "Testevoe soobshenie",
];
for($i= 0; $i<mb_strlen($words['str']); $i++){
    if ($words['str'][$i] == " "){
        $words['words']++ ;
    }
}
echo $words['words'] + 1;
?>

<?php
echo '<h2>Задание 3</h1>';
$text = "ogo fantomasf ahhahahha son";

$words = explode(' ', $text);
$result = [];

foreach($words as $word){
    $len = strlen($word);
    if ($len > 0 and $word[0] == $word[$len - 1]) {
        $result[] = $word;
    }
}

echo "Слова:";
foreach($result as $word){
    echo $word,"<br>";
}
?>


<?php
echo '<h2> Строковые функции php</h2>';
$str = 'Hello world from Shlusinburg!';
$strSev = strrev($str);
// echo strpos(strrev($str),'o'); 
// echo $strSev; 
// echo substr_replace($str, 'peace', 6, 5);
$words = explode( ' ', $str);
var_dump($words);
?>

<?php
$str = 'Hello world from Russia';
$words = explode(' ', $str);
?>

<?php foreach($words as $word): ?>
    <p><?= $word ?></p>
<?php endforeach;
$string = implode(', ', $words);
echo "<p>$string</p>";
?>

<?php 
$str = 'Hello world from Russia';
$newStr = str_replace('Hello', 'Hi', $str);
echo $newStr;
?>


<?php
echo '<h2> Задание 2 - строковые функции php</h1>';
echo '<h2> Задание 1  </h2>';
$string = "Один (два) три";
$open = strpos($string, '(' );
$close = strpos($string, ')' );
$result = substr($string, $open + 1, $close - $open -1);
echo $result;
?>

<?php
echo '<h2> Задание 2  </h2>';
$strng = 'Hello world.';
$words = explode(' ', $strng);
echo count($words);
?>

<?php 
echo '<h2> Задание 3 </h2>';
$string = 'kak top ogo reg hah';
$words = explode(' ', $string);
foreach($words as $word){}
echo $word;
?>

<?php
echo '<h2> Задание 4 </h2>';
