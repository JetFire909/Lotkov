<?php

require 'autoLoad.php';
require 'config.php';
session_start();
try{
    $request = new src\services\Request();
    $db = new src\services\Db($dbOptions);
    $user = new src\User($request, $db);
}catch(\src\exceptions\DbExceptions $e){
    echo $e->getMessage();
    exit();
}

?>  