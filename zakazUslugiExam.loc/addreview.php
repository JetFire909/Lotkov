<?php include 'src/header.php'; ?>
<!DOCTYPE html>
<html lang="ru-RU" class="h-100">

<head>
    <title></title>
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token"
        content="Y8NMvvT3LR7_0FE4QlfcxYPKc6Y2OK44IrCGNdMqbagnjTjstcRneKWCP3EvEIap9vpLxXJbx1sS4-9C6ksc4w==">

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

    <header id="header">
        <nav id="w1" class="navbar-expand-md navbar-dark bg-dark fixed-top navbar">
            <div class="container">
                <a class="navbar-brand" href="/">My Application</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#w1-collapse"
                    aria-controls="w1-collapse" aria-expanded="false" aria-label="Переключить навигацию"><span
                        class="navbar-toggler-icon"></span></button>
                <div id="w1-collapse" class="collapse navbar-collapse">
                    <ul id="w2" class="navbar-nav nav">
                        <li class="nav-item"><a class="nav-link" href="/feedback">отзывы</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main id="main" class="flex-shrink-0" role="main">
        <div class="container">
            <div class="feedback-index p-3">
                <form id="w0" action="/" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_csrf"
                        value="Y8NMvvT3LR7_0FE4QlfcxYPKc6Y2OK44IrCGNdMqbagnjTjstcRneKWCP3EvEIap9vpLxXJbx1sS4-9C6ksc4w==">
                    <div class="mb-3 field-feedback-fio required">
                        <label class="form-label" for="feedback-fio">фио</label>
                        <input type="text" id="feedback-fio" class="form-control" name="Feedback[fio]"
                            aria-required="true">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3 field-feedback-phone required">
                        <label class="form-label" for="feedback-phone">телефон</label>
                        <input type="text" id="feedback-phone" class="form-control" name="Feedback[phone]"
                            aria-required="true" data-plugin-inputmask="inputmask_f59f28e6">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3 field-feedback-text required">
                        <label class="form-label" for="feedback-text">отзыв</label>
                        <textarea id="feedback-text" class="form-control" name="Feedback[text]"
                            aria-required="true"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3 field-feedback-imagefile">
                        <label class="form-label" for="feedback-imagefile">фото</label>
                        <input type="hidden" name="Feedback[imageFile]" value=""><input type="file"
                            id="feedback-imagefile" class="form-control" name="Feedback[imageFile]">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3 field-feedback-agree required">
                        <div class="form-check">
                            <input type="hidden" name="Feedback[agree]" value="0"><input type="checkbox"
                                id="feedback-agree" class="form-check-input" name="Feedback[agree]" value="1"
                                aria-required="true">
                            <label class="form-check-label" for="feedback-agree">Согласие на обработку персональных
                                данных</label>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">отправить</button>
                    </div>
                </form>
            </div><!-- feedback-index -->
        </div>
    </main>

    <footer id="footer" class="mt-auto py-3 bg-light">
        <div class="container">
            <div class="row text-muted">


            </div>
        </div>
    </footer>

    <script src="js/bootstrap.bundle.js"></script>

</body>

</html>
<?php include 'src/footer.php'; ?>