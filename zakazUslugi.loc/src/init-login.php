<?php 
require_once 'init.php';
require_once __DIR__ . '/init.php';

$user = new \src\User($request, $db);

if ($request->isPost) {
    $postData = $request->post();
    
    $login = '';
    $password = '';
    
    if (isset($postData['LoginForm']['login'])) {
        $login = $postData['LoginForm']['login'];
    } elseif (isset($postData['login'])) {
        $login = $postData['login'];
    }
    
    if (isset($postData['LoginForm']['password'])) {
        $password = $postData['LoginForm']['password'];
    } elseif (isset($postData['password'])) {
        $password = $postData['password'];
    }
    
    $user->login = trim($login);
    $user->password = $password;
    
    try {
        $user->validateLogin();
        $user->login();
        
        header('Location: index.php');
        exit;
    } catch (src\exceptions\InvalidArgumentException $e) {
        $error = $e->getMessage();
    }
}
