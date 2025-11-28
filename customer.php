<?php
$json = file_get_contents('customer.json');
$array = json_decode($json, true);

$message = '';
$showForm = true;
$userData = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = trim($_POST['login'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $foundUser = null;
    foreach ($array['users'] as $user) {
        if ($user['login'] === $login && $user['password'] === $password) {
            $foundUser = $user;
            break;
        }
    }
    if ($foundUser) {
        $showForm = false;
        $userData = $foundUser;
    } else {
        $message = 'Неверный логин или пароль.';
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8" />
<title>Авторизация</title>
</head>
<body>
<?php if ($showForm): ?>
    <h2>Форма авторизации</h2>
    <?php if ($message): ?>
        <p style="color:red;"><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <p>
            <label for="login">Логин:</label>
            <input type="text" id="login" name="login" required>
        </p>
        <p>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
        </p>
        <p>
            <button type="submit">Войти</button>
        </p>
    </form>
<?php else: ?>
    <h2>Добро пожаловать</h2>
    <p><?php echo htmlspecialchars($userData['Name']); ?></p>
    <p>e-mail: <?php echo htmlspecialchars($userData['email']); ?></p>
    <p>сумма на счёте: <?php echo htmlspecialchars($userData['amount']); ?> руб</p>
<?php endif; ?>
</body>