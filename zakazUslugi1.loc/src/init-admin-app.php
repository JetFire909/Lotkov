<?php

require 'init.php';

if($user->isGuest){
    header('Location: login.php');
    exit();
}
if(!$user->isAdmin()){
    header('Location: login.php');
    exit();
}

if(!isset($_SESSION)) {
    session_start();
}

$id = (int)($_GET['id'] ?? 0);
if($id === 0){
    header('Location: admin-panel.php');
    exit();
}

$application = new \src\Application($request, $db);

if(isset($_GET['submit'])){
    $application->id = $id;
    $application->update(['status' => 'timereserv']);
    $_SESSION['admin_flash'] = 'Заявка подтверждена';
    header("Location: admin-app.php?id=" . $id);
    exit();
}

if(isset($_GET['finish'])){
    $application->id = $id;
    $application->update(['status' => 'provided']);
    $_SESSION['admin_flash'] = 'Заявка завершена';
    header("Location: admin-app.php?id=" . $id);
    exit();
}

$applicationData = $application->getById($id);
if(empty($applicationData)){
    header('Location: admin-panel.php');
    exit();
}
$applicationData = $applicationData[0];

$flash = $_SESSION['admin_flash'] ?? '';
unset($_SESSION['admin_flash']);
$error = '';

if($request->isPost){
    $data = $request->post();
    
    if(isset($_POST['delete_app'])){
        $application->id = $id;
        if(method_exists($application, 'delete')){
            $application->delete();
        } else {
            $application->update(['status' => 'provided']);
        }
        $_SESSION['admin_flash'] = 'Заявка успешно отменена';
        header('Location: admin-panel.php');
        exit();
    }
    
    try{
        if(empty($data['date'])){
            throw new \src\exceptions\InvalidArgumentException('Не указана дата');
        }
        if(empty($data['time'])){
            throw new \src\exceptions\InvalidArgumentException('Не указано время');
        }
        if(!preg_match('/^\d{4}-\d{2}-\d{2}$/', $data['date'])){
            throw new \src\exceptions\InvalidArgumentException('Неверный формат даты');
        }
        if(!preg_match('/^\d{2}:\d{2}$/', $data['time'])){
            throw new \src\exceptions\InvalidArgumentException('Неверный формат времени');
        }
        $application->id = $id;
        $application->update(['date' => $data['date'], 'time' => $data['time'], 'status' => 'timechange']);
        $applicationData['date'] = $data['date'];
        $applicationData['time'] = $data['time'];
        $applicationData['status'] = 'timechange';
        $flash = 'Время успешно изменено';
    }catch(\src\exceptions\InvalidArgumentException $e){
        $error = $e->getMessage();
    }
}
?>
