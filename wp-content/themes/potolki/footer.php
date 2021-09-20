<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Potolki
 */

?>
</main>
<footer class="footer dotted_bg">
    <div class="container_footer">
        <a href="<?php bloginfo('home') ?>" class="footer_logo"><?php bloginfo('name') ?></a>
        <!-- <div class="container_socialNet">
            <div>Наши социальные сети</div>
            <ul class="socialNet">
                <li class="socialNet_containerImg"><a class="vkontakte" href="https://vk.com/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/footer/vk.png' ?>" alt=""></a></li>
                <li class="socialNet_containerImg"><a class="facebook" href="https://facebook.com/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/footer/fb.png' ?>" alt=""></a></li>
                <li class="socialNet_containerImg"><a class="google" href="https://mail.google.com/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/footer/google.png' ?>" alt=""></a></li>
                <li class="socialNet_containerImg"><a class="twitter" href="https://twitter.com/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/footer/twitter.png' ?>" alt=""></a></li>
                <li class="socialNet_containerImg"><a class="mail" href="https://mail.ru/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/footer/mail.png' ?>" alt=""></a></li>
            </ul>
        </div> -->
        <div class="container_footer_consultation_button">
            <a class="footer_consultation_button" href="#consultation_section">Консультация</a>
        </div>
        <a class="footer_phone"><?php echo esc_html(get_option('phone_1_setting', '')) ?><br><?php echo esc_html(get_option('phone_2_setting', '')) ?></a>
    </div>
</footer>
<?php wp_footer(); ?>
<!-- Java Script
================================================== -->
<!-- <script src="assets/js/index.js"></script> -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->

</body>

</html>