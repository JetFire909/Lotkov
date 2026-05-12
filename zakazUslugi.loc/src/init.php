<?php 

require 'autoload.php';
require 'config.php';

try{
$request = new src\services\Request();
$db = new src\services\Db($dbOptions);
} catch (\src\exceptions\DbExceptions $e) {
    echo $e->getMessage();
    exit();
}