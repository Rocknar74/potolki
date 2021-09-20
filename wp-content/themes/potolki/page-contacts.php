<?php get_header(); ?>
<section class="consultation_section" id="consultation_section">
    <div class="consultation_section_bg"></div>
    <div class="container_content_in_section">
        <div class="consultation_section_header section_header">
            <h2>Оставьте заявку на бесплатную консультацию</h2>
            <p>Оствтья заявку и мы перезвоним вам в ближайшее время</p>
        </div>
        <!-- <?= get_template_directory_uri() . '/form_listener.php' ?> -->
        <!-- <form method="POST" action="<?php get_template_directory_uri() . "/page-about_us.php" ?>" class="consultation_form cross_bg" id="consultation_form"> -->
        <form class="consultation_form cross_bg" id="consultation_form" role="form">
            <label for="name" class="consultation_form_label">Как к вам обращаться?</label>
            <input type="text" name="name" id="name" maxlength="60" placeholder="" required>
            <label for="phone" class="consultation_form_label">Контактный телефон</label>
            <input type="tel" name="phone" id="phone" maxlength="" pattern="^([+][7]|8)\s[(][0-9]{3}[)]\s[0-9]{3}[-][0-9]{2}[-][0-9]{2}$" placeholder="+7 (___) ___-__-__" required>
            <!-- <label for="email">Ваша почта</label>
        <input type="email" name="email" id="email" maxlength="50" placeholder="E-mail"> -->
            <input class="consultation_form_submit_button submit_button" type="submit" name="submit_consultation_form" value="Отправить" id="submit">
        </form>
    </div>
</section>
<section class="contact_section dotted_bg" id="contact">
    <div class="container_content_in_section">
        <div class="contact_section_header section_header">
            <h2>Наши контакты</h2>
        </div>
        <div class="container_info_contact_section">
            <div class="container_address_contact_section">
                <h3>Адрес:</h3>
                <p class="cont_section_address"><?php echo esc_html(get_option('address_setting', '')) ?></p>
            </div>
            <div class="container_workTime_contact_section">
                <h3>График работы:</h3>
                <span class="work_time">пн-вс: 09:00-20:00</span>
                <span class="break_time">обед: 14:00-14:30</span>
            </div>
            <div class="container_number_contact_section">
                <h3>Контактные телефоны:</h3>
                <span class="number_cont_section"><?php echo esc_html(get_option('phone_1_setting', '')) ?></span>
                <span class="number_cont_section"><?php echo esc_html(get_option('phone_2_setting', '')) ?></span>
            </div>
            <div class="container_requisites_contact_section">
                <h3>Реквизиты компании:</h3>
                <p class="requisites">
                    Общество с ограниченной ответственностью "Натяжные потолки"<br>
                    Директор - Александр Шершнёв
                </p>
            </div>
        </div>
    </div>
</section>
<!-- <section class="map_section">
    <div style="position:relative;overflow:hidden;" id="map"><a href="https://yandex.ru/maps/56/chelyabinsk/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Челябинск</a><a href="https://yandex.ru/maps/56/chelyabinsk/house/prospekt_pobedy_288/YkgYdQJnSkAHQFtvfX15eHViZg==/?ll=61.356519%2C55.189920&utm_medium=mapframe&utm_source=maps&z=18.25" style="color:#eee;font-size:12px;position:absolute;top:14px;">Комсомольский проспект, 28в — Яндекс.Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCQ7FQwMdB" width="100%" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
</section> -->
<?php get_footer(); ?>