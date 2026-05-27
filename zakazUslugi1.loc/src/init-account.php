<?php
require 'init.php';

if($user->isGuest){
    header('Location: login.php');
    exit();
}

$application = new \src\Application($request, $db);
$applications = $application->findByColumn('user_id', $user->id);
if($applications === null) $applications = [];
?>