<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'db_Lotkov';
    $mysqli = new mysqli($host, $user, $pass, $db_name);
    $mysqli->set_charset("utf8");

    $sql = "SELECT post.*, user.name as author 
            FROM post 
            JOIN user ON post.user_id = user.id";
            
    $result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список постов</title>
</head>
<body>
    <h1>Все посты</h1>
    <a href="index1.php">К списку пользователей</a>
    <hr>

    <?php
        if($result && $result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<h3>" . $row['title'] . "</h3>";
                echo "<p><small>Автор: <b>" . $row['author'] . "</b></small></p>";
                echo "<hr>";
            } 
        } else {
            echo "Постов пока нет или таблица пуста.";
        }
    ?>
</body>
</html>
