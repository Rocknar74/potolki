<section class="reviews_section site_section" id="reviews">
    <div class="container_content_in_section">
        <div class="reviews_section_header section_header">
            <h2>Отзывы наших клиентов</h2>
        </div>
        <div class="reviews_container cross_bg">
            <button class="reviews_slider_button_left reviews_slider_button" value="left"></button>

            <?php echo do_shortcode('[testimonial_view id="2"]'); ?>

            <button class="reviews_slider_button_right reviews_slider_button" value="right"></button>
        </div>
        <div class='feedback_table'>
            <div class='container-feedback_form dotted_bg'>
                <button class='esc_button'></button>
                <?php echo do_shortcode('[testimonial_view id="1"]'); ?>

                <!-- <form class="feedback_form" method="POST" action="<?php echo get_template_directory_uri() . '/form_listener.php' ?>">
                    <label for="name_reviewer">Как вас зовут?</label>
                    <input type="text" name="name_reviewer" id="name_reviewer" maxlength="100" placeholder="Ваше имя" required>
                    <label for="text_review">Отзыв</label>
                    <textarea name="text_review" id="text_review" cols="30" rows="10" maxlength="600" placeholder="Что вы о нас думаете?"></textarea>
                    <label for="photo_reviewer">Хотите оставить ваше фото?</label>
                    <input type="file" name="photo_reviewer" id="photo_reviewer" maxlength="100" placeholder="">
                    <input class="feedback_form_submit_button submit_button" type="submit" name="submit_review" value="Оставить отзыв" id="submit_feedback">
                </form> -->
            </div>
        </div>

        <button class="feedback_button">Оставить отзыв</button>
    </div>
    <div class="feedback_overlay"></div>
</section>