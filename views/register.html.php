<div class="athlo-register__wrapper">
    <?php if (isset($error_message) && $error_message) : ?>
        <div class="athlo-register__error_message">
            <span class="athlo-register__error__message__text">
                <?php echo $error_message; ?>
            </span>
        </div>
    <?php endif; ?>
    <div class="athlo-register__form__wrap">
        <div class="athlo-register__page__title">
            <h4><?php echo $message; ?></h4>
        </div>
        <form action="" method="post">
            <div class="athlo-register__username">
                <label for="athlo_register_username">Email</label>
                <input type="text" name="user[email]" id="athlo_register_username" placeholder="Email"/>
            </div>
            <div class="athlo-register__password">
                <label for="athlo_register_password">Password</label>
                <input type="password" name="user[password]" id="athlo_register_password">
            </div>
            <div class="athlo-register__submit__button__wrap">
                <button type="submit" id="athlo-submit_button" class="athlo-submit__button"> Register </button>
            </div>
        </form>
    </div>
</div>