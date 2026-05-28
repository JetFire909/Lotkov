<?php

require 'init.php';

$feedbackModel = new \src\Feedback($request, $db);
$reviews = $feedbackModel->findAll();

if ($reviews === null) {
    $reviews = [];
}
