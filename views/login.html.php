<div class="athlo-login__wrapper">
    <?php if (isset($error_message) && $error_message) : ?>
        <div class="athlo-login__error_message">
            <span class="athlo-login__error__message__text">
                <?php echo $error_message; ?>
            </span>
        </div>
    <?php endif; ?>
    <div class="athlo-login__form__wrap">
        <div class="athlo-login__page__title">
            <h4><?php echo $message; ?></h4>
        </div>
        <form action="" method="post">
            <div class="athlo-login__username">
                <label for="athlo_username">Email</label>
                <input type="text" name="user[email]" id="athlo_username" placeholder="Email"/>
            </div>
            <div class="athlo-login__password">
                <label for="athlo_password">Password</label>
                <input type="password" name="user[password]" id="athlo_password">
            </div>
            <div class="athlo-login__submit__button__wrap">
                <button type="submit" id="athlo-submit_button" class="athlo-submit__button"> Login </button>
            </div>
        </form>
    </div>
    <div class="athlo-login__no__account__wrap">
        <a href="/user/create">Oppure crea il tuo account se ancora non ne hai uno!</a>
    </div>
</div>