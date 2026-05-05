<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'db_Lotkov';
    $mysqli = new mysqli($host, $user, $pass, $db_name);
    $mysqli->set_charset("utf8");

    // Удаление
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $mysqli->query("DELETE FROM user WHERE id = $id");
    }

    // Добавление 
    if(isset($_POST['add_user'])) {
        $name = $_POST['name'];
        $login = $_POST['login'];
        $birthday = $_POST['birthday']; 
        $mysqli->query("INSERT INTO user (name, login, birthday) VALUES ('$name', '$login', '$birthday')");
    }

    // Обновление 
    if(isset($_POST['update_user'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $login = $_POST['login'];
        $birthday = $_POST['birthday'];
        $mysqli->query("UPDATE user SET name='$name', login='$login', birthday='$birthday' WHERE id=$id");
    }

    $sql = 'select id, name, login, birthday from user'; 
    $result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Управление пользователями</title>
</head>
<body>
    <h2>Добавить нового пользователя</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Имя" required>
        <input type="text" name="login" placeholder="Логин" required>
        <input type="text" name="birthday" placeholder="ГГГГ.ММ.ДД" required>
        <button type="submit" name="add_user">Добавить</button>
    </form>
    
    <hr>

    <h2>Список пользователей</h2>
    <?php
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<p><b>{$row['name']}</b></p>";
                echo "<p>Дата рождения: {$row['birthday']}</p>";
                echo "<p>login: {$row['login']}</p>";

                echo "<a href='?id={$row['id']}'>Удалить</a> | ";
                echo "<a href='update.php?id={$row['id']}'>Обновить</a>";
                
                echo "<hr>";
            } 
        }
    ?>
</body>
</html>
