<?php
$nums = [2,4,78,456,3,87,9];
$user = [
    'name' => 'Петр',
    'email'=> 'youtube',
    'id'=> 12345,
];

$numsFilter = array_filter( $nums, function($num){
    if ($num > 10) return true;
    else return false;
});
var_dump(sort($nums));
