<?php
require 'autoLoad.php';
require 'config.php';
session_start();
try{
    $request = new src\services\Request();
    $db = new src\services\Db($dbOptions);
}catch(\src\exceptions\DbExceptions $e){
    echo $e->getMessage();
    exit();
}
?>  