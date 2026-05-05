<?php
    $mysqli = new mysqli('localhost', 'root', '', 'db_Lotkov');
    $mysqli->set_charset("utf8");

    $id = $_GET['id'];
    $result = $mysqli->query("SELECT * FROM user WHERE id = $id");
    $user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Обновить данные</title>
</head>
<body>
    <h2>Редактирование пользователя</h2>
    <form action="index.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <p>Имя: <input type="text" name="name" value="<?php echo $user['name']; ?>"></p>
        <p>Логин: <input type="text" name="login" value="<?php echo $user['login']; ?>"></p>
        <p>Дата рождения: <input type="text" name="birthday" value="<?php echo $user['birthday']; ?>"></p>
        <button type="submit" name="update_user">Сохранить изменения</button>
        <a href="index.php">Отмена</a>
    </form>
</body>
</html>
