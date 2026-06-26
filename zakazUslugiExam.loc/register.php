<?php include 'src/header.php'; ?>
<!DOCTYPE html>
<html lang="ru-RU" class="h-100">

<head>
    <title>регистрация</title>
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token"
        content="rI0t9QFOm_bq9-tz8v8o0PlFBi-r8gGoNNEz1CtEt__v-H-4OXfyprKHgCzAsFuKphJQZ5mcbNxX4lWbHhCHtA==">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link type="image/x-icon" href="/favicon.ico" rel="icon">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- <script>var inputmask_f59f28e6 = { "mask": "+7(999)-999-99-99" };</script> -->
</head>

<body class="d-flex flex-column h-100">

    

    <main id="main" class="flex-shrink-0" role="main">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol id="w2" class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">регистрация</li>
                </ol>
            </nav>
            <div class="site-register">
                <h1>регистрация</h1>

                <form id="contact-form" action="/register" method="post">
                    <input type="hidden" name="_csrf"
                        value="rI0t9QFOm_bq9-tz8v8o0PlFBi-r8gGoNNEz1CtEt__v-H-4OXfyprKHgCzAsFuKphJQZ5mcbNxX4lWbHhCHtA==">
                    <div class="mb-3 field-registerform-login required">
                        <label class="form-label" for="registerform-login">логин</label>
                        <input type="text" id="registerform-login" class="form-control" name="RegisterForm[login]"
                            aria-required="true">

                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3 field-registerform-password required">
                        <label class="form-label" for="registerform-password">пароль</label>
                        <input type="text" id="registerform-password" class="form-control" name="RegisterForm[password]"
                            aria-required="true">

                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3 field-registerform-fio required">
                        <label class="form-label" for="registerform-fio">фио</label>
                        <input type="text" id="registerform-fio" class="form-control" name="RegisterForm[fio]"
                            aria-required="true">

                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3 field-registerform-email">
                        <label class="form-label" for="registerform-email">Email</label>
                        <input type="text" id="registerform-email" class="form-control" name="RegisterForm[email]">

                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3 field-registerform-phone required">
                        <label class="form-label" for="registerform-phone">телефон</label>
                        <input type="text" id="registerform-phone" class="form-control" name="RegisterForm[phone]"
                            aria-required="true" data-plugin-inputmask="inputmask_f59f28e6">

                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">зарегестрировать</button>
                    </div>
                </form>
            </div><!-- site-register -->
        </div>
    </main>

    


    <script src="js/bootstrap.bundle.js"></script>

</body>

</html>
<?php include 'src/footer.php'; ?>