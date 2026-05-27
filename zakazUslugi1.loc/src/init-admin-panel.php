<?php

require 'init.php';

if ($user->isGuest) {
    header('Location: login.php');
    exit();
}
if (!$user->isAdmin()) {
    header('Location: login.php');
    exit();
}

$application = new \src\Application($request, $db);

$id = (int)($_GET['id'] ?? 0);

if ($id > 0 && isset($_GET['submit'])) {
    $application->id = $id;
    $application->update(['status' => 'timereserv']);
    header('Location: admin-panel.php');
    exit();
}

if ($id > 0 && isset($_GET['finish'])) {
    $application->id = $id;
    $application->update(['status' => 'provided']);
    header('Location: admin-panel.php');
    exit();
}

$statusFilter = $_GET['status_id'] ?? '';

if (!empty($statusFilter)) {
    $applications = $application->findByColumn('status', $statusFilter);
} else {
    $applications = $application->findAll();
}

if ($applications === null) {
    $applications = [];
}
