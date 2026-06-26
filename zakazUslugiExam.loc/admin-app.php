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
   
        
    
        <main id="main" class="flex-shrink-0" role="main">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol id="w4" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="account.html">заявки</a></li>
                    </ol>
                </nav>
                <div class="application-index">
    
                    <h1>Заявка на посещение</h1>



    
                <div class="feedback-index p-3">
               
                <form id="w0" action="" method="post">
                    <input type="hidden" name="_csrf"
                        value="Y8NMvvT3LR7_0FE4QlfcxYPKc6Y2OK44IrCGNdMqbagnjTjstcRneKWCP3EvEIap9vpLxXJbx1sS4-9C6ksc4w==">
                    <div class="mb-3 field-feedback-fio required">
                        <label class="form-label" for="feedback-fio">Выберите дату</label>
                        <input type="date" id="app-date" class="form-control" name="date" value="<?= $application->date  ? $application->date : null ?>" aria-required="true">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3 field-feedback-fio required">
                        <label class="form-label" for="feedback-fio">Выберите время посещения</label>
                        <input type="time" id="app-time" class="form-control" name="time" value="<?= $application->time  ? $application->time : null ?>" aria-required="true">
                        <div class="invalid-feedback"></div>
                    </div>
                 

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">изменить время</button>
                    </div>
                </form>
                
            </div><!-- feedback-index -->
    
                    <div id="p0" data-pjax-container="" data-pjax-push-state data-pjax-timeout="1000">
 
                        <div id="w1" class="list-view">
                            <div class="d-flex flex-wrap justify-content-between layout-card">
                                
                                <div class="item" data-key="9">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                Вывапапваыпав </h3>
                                            <p class="card-text">Пользователь: Петр</p>
                                            <p class="card-text">
                                            длаоыдлавдлаыдв</p>
                                            <div class="card-text">
                                                <div class="opacity-50">
                                                    дата и время посещения:
                                                </div>
                                                2024-05-28 15:00
                                            </div>
                                            <div class="card-text">
                                                <div class="opacity-50">
                                                    дата и время создания:
                                                </div>
                                                2024-05-28 15:00
                                                 
                                            </div>
                                            <div class="card-text">
                                                <div class="opacity-50">
                                                    статус:
                                                </div>
                                                На посещение
                       
                                            </div>
                                            
                                            <!-- <a class="btn btn-danger" href="delete-app.php?id=<?=$application->id ?>">отменить</a> -->
                                            
                                            
                                            <a class="btn btn-primary" href="admin-panel.php?submit&id=<?=$application->id?>">подтвердить</a>
                                            
                                            
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    
        
    
        <script src="js/bootstrap.bundle.js"></script>
    
    </body>
    
    </html>
    <?php include 'src/footer.php'; ?>