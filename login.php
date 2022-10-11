<?php $data["title"] = "Login"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-height-viewport uk-flex uk-flex-middle">
    <div class="uk-width-1-1 uk-section">
        <div class="uk-container">
            <div class="uk-child-width-auto uk-flex-center" uk-grid>
                <div>
                    <div class="login__box uk-position-relative">
                        <div class="login__card uk-border-rounded uk-card uk-card-default uk-card-body">
                            <figure class="login__logo">
                                <a href=""><img src="images/logo.579a35ac.png" alt=""></a>
                            </figure>
                            <form class="uk-form-stacked">
                                <fieldset class="uk-fieldset">

                                    <legend class="uk-legend uk-text-center login__legend">Đăng nhập</legend>

                                    <div class="uk-margin">
                                        <label class="uk-form-label login__label" for="form-stacked-text">Số điện thoại</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input login__input" id="form-stacked-text" type="tel" placeholder="Nhập số điện thoại">
                                        </div>
                                    </div>

                                    <div class="uk-margin">
                                        <div class="uk-position-relative">
                                            <a href="" class="uk-position-top-right login__forgot">Quên mật khẩu?</a>
                                            <label class="uk-form-label login__label" for="form-stacked-text">Mật khẩu</label>
                                            <div class="uk-form-controls">
                                                <div class="uk-inline uk-width-1-1">
                                                    <a class="uk-form-icon uk-form-icon-flip login__iconEye" href="#" uk-icon="icon: link"></a>
                                                    <input class="uk-input login__input" type="password" placeholder="Nhập mật khẩu">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-margin">
                                        <button type="submit" class="login__btnSubmit uk-button uk-button-secondary uk-width-1-1">Đăng nhập</button>
                                    </div>

                                    <div class="uk-margin-top uk-text-center">
                                        <div class="login__txt">Bạn chưa có tài khoản? <a href="">Đăng ký</a></div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>