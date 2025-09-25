<?php
$numb = 10;
$multiplicationResult = 1;
for  ($i = 1; $i<= $numb; $i++) {
    if ( $i % 2 == 0) {
        $multiplicationResult *= $i;
    }
}
echo "Произведение четных чисел от 1 до $numb = $multiplicationResult.";
?>