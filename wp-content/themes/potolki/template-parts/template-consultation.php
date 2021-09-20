<section class="consultation_section site_section" id="consultation_section">
    <div class="consultation_section_bg"></div>
    <div class="container_content_in_section">
        <div class="consultation_section_header section_header">
            <h2>Мы можем вас проконсультировать</h2>
            <p>Оставьте заявку и мы перезвоним вам в ближайшее время</p>
        </div>
        <!-- <?= get_template_directory_uri() . '/form_listener.php' ?> -->
        <!-- <form method="POST" action="<?php get_template_directory_uri() . "/page-about.php" ?>" class="consultation_form cross_bg" id="consultation_form"> -->
        <div class="container_consultation_form">
            <form class="consultation_form" id="consultation_form" role="form">
                <label for="name" class="consultation_form_label">Как к вам обращаться?</label>
                <input type="text" name="name" id="name" maxlength="60" placeholder="" required>
                <label for="phone" class="consultation_form_label">Контактный телефон</label>
                <input type="tel" name="phone" id="phone" maxlength="" pattern="^([+][7]|8)\s[(][0-9]{3}[)]\s[0-9]{3}[-][0-9]{2}[-][0-9]{2}$" placeholder="+7 (___) ___-__-__" required>
                <!-- <label for="email">Ваша почта</label>
        <input type="email" name="email" id="email" maxlength="50" placeholder="E-mail"> -->
                <input class="consultation_form_submit_button submit_button" type="submit" name="submit_consultation_form" value="Отправить" id="submit">
            </form>
            <div class="consultation_form_success success_submite">
            </div>
        </div>
    </div>
</section>