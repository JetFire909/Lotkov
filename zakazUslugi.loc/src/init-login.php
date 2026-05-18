<?php

require 'init.php';

if($request->isPost) {
    $user->load($request->post());
    try {
        $user->validateLogin();
        $user->login();
        header("Location: /");
    } catch (src\exceptions\InvalidArgumentException $e) {
        $error = $e->getMessage();
    }
}
?>