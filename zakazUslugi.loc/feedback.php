<?php 
require 'src/init-feedback.php';
include 'src/header.php'; 
?>

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

<?php include 'src/footer.php' ?>
    