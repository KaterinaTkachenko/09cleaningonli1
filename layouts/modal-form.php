<div class="modal fade" id="modalform" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-label">Оформить заявку</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="form-ok.php" method="POST" class="needs-validation" novalidate>
                    <div class="form-group">
                        <input type="text" name="name" class="name" placeholder="Ваше имя">
                    </div>
                    <div class="form-group position-relative">                        
                        <input type="tel" name="phone" class="phone" placeholder="Телефон" required aria-describedby="validationTooltipUsernamePrepend">
                            <div class="invalid-tooltip">
                                Обязательное поле
                            </div>
                    </div>
                    <div class="col-lg-12 form-group text-center p-0 modal__btn__col">
                        <button class="mainBtn" type="submit">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>