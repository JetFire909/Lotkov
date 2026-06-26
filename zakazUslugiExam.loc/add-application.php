<?php include 'src/header.php'; ?>
<!DOCTYPE html>
<html lang="ru-RU" class="h-100">

<head>
    <title>заявки</title>
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token"
        content="YYWMo8nm2RWzZQ2blSGEi_JZkduKhNmkfzJyMJYc-_0gzLWXsbXtZP8oY8LdGMPHkzDWg-_bnOAHWyt-pUyIqg==">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link type="image/x-icon" href="/favicon.ico" rel="icon">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    
    
    <main id="main" class="flex-shrink-0" role="main">
        <div class="container">

            <div class="feedback-index p-3">
                <form id="w0" action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_csrf"
                        value="Y8NMvvT3LR7_0FE4QlfcxYPKc6Y2OK44IrCGNdMqbagnjTjstcRneKWCP3EvEIap9vpLxXJbx1sS4-9C6ksc4w==">
                    <div class="mb-3 field-feedback-fio required">
                        <label class="form-label" for="feedback-fio">Выберите дату</label>
                        <input type="date" id="app-date" class="form-control" name="date" value="" aria-required="true">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3 field-feedback-fio required">
                        <label class="form-label" for="feedback-fio">Выберите время посещения</label>
                        <input type="time" id="app-time" class="form-control" name="time" value="" aria-required="true">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3 field-feedback-fio required">
                        <label class="form-label" for="feedback-fio">Причина посещения (кратко)</label>
                        <input type="text" id="feedback-fio" class="form-control" name="reason" value=""  aria-required="true">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3 field-feedback-text required">
                        <label class="form-label" for="feedback-text">Причина посещения (подробно)</label>
                        <textarea id="feedback-text" class="form-control" name="text" 
                            aria-required="true"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>

                   

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">отправить заявку</button>
                    </div>
                </form>
            </div><!-- feedback-index -->
        </div>
    </main>
    

  
    <script src="js/bootstrap.bundle.js"></script>

</body>

</html>
<?php include 'src/footer.php'; ?>