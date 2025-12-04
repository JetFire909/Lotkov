<?php

require_once('User.php');
require_once('Student.php');
require_once('Teacher.php');
require_once('Manager.php');

if (isset($_GET['delete'])) {
    $index = $_GET['delete']; 
    
    $data = json_decode(file_get_contents('users2.json'), true);
    
    unset($data['users'][$index]);
    
    file_put_contents('users2.json', json_encode($data));
    
    echo "Пользователь удален<br><br>";
}

echo '<form method="POST">
    <h3>Добавить студента</h3>
    Имя: <input type="text" name="name">
    Группа: <input type="text" name="group">
    Email: <input type="email" name="email">
    <button type="submit" name="add">Добавить</button>
</form><hr>';

if (isset($_POST['add'])) {
    $data = json_decode(file_get_contents('users2.json'), true);
    
    $data['users'][] = [
        'Name' => $_POST['name'],
        'Group' => $_POST['group'],
        'Email' => $_POST['email']
    ];
    
    file_put_contents('users2.json', json_encode($data));
    echo "Студент {$_POST['name']} добавлен<br><br>";
}

$data = json_decode(file_get_contents('users2.json'), true);

echo "<h3>Все пользователи:</h3>";

foreach ($data['users'] as $index => $user) {
    $student = new Student($user['Name'], $user['Group'], $user['Email']);
    $student->sayAboutMe();
    
    echo "<a href='?delete=$index'>Удалить</a>",'<br>';
}
?>
