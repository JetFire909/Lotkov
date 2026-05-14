<!DOCTYPE html>
<html lang="ru-RU" class="h-100">

<head>
    <title>Заказ услуги</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    <header id="header">
        <nav class="navbar-expand-md navbar-dark bg-dark fixed-top navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">Заказ услуги</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav-collapse"
                    aria-controls="nav-collapse" aria-expanded="false" aria-label="Переключить навигацию">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="nav-collapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav nav">
                        <li class="nav-item"><a class="nav-link" href="feedback.php">отзывы</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">войти</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main id="main" class="flex-shrink-0" role="main">
    <div class="container">
    <?php if(isset($flash)) : ?>
        <div class="bg-success"><?= $flash ?></div>
    <?php endif ?>