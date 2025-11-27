<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Задание 1</h2>
    <form method="$_GET">
        <p> Введите фамилию <input type='text' name="firstname"></p>
        <p> Введите имя <input type='text' name="secondname"></p>
        <p> Введите отчество <input type='text' name="lastname"></p>
        <p><input type='submit' value='Отправить' name="FIO"></p>
    </form>
    </body>
    </html>
<?php 
if(isset($_GET['FIO'])){
$firstname = $_GET['firstname'];
$secondname = $_GET['secondname'];
$lastname = $_GET['lastname'];
}
echo "Ваше фио: $firstname $secondname $lastname"; 
?>

