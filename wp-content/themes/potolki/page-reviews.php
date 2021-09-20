<?php get_header() ?>
<section class="reviews_section" id="reviews">
    <div class="container_content_in_section">
        <div class="reviews_section_header section_header">
            <h2>Отзывы наших клиентов</h2>
        </div>
        <div class="reviews_container">
            <!-- <div class="single_review_container dotted_bg">
                <div class="container_name_date">
                    <h3 class="reviewer_name">Андрей</h3>
                    <p class="review_date">03.09.2021</p>
                </div>
                <p class="review_text">Круто всё!</p>
            </div> -->
            <!-- <?php $posts = get_posts(array(
                        'numberposts' => -1,
                        'post_type'   => 'clients_reviews',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ));
                    $posts_reverce = array_reverse($posts);
                    foreach ($posts_reverce as $key => $post) {
                        setup_postdata($post);
                        $verified_review = get_field('verified_review');
                        if ($verified_review) {
                            $reviewer_name = get_the_title();
                            $review_text = get_the_content();
                            $review_date = get_field('review_date'); ?>
                    <div class="single_review_container dotted_bg">
                        <div class="container_name_date">
                            <h3 class="reviewer_name"><?php echo $reviewer_name ?></h3>
                            <p class="review_date"><?php echo $review_date ?></p>
                        </div>
                        <p class="review_text"><?php echo $review_text ?></p>
                    </div>
            <?php }
                    }
                    wp_reset_postdata(); // сброс  
            ?> -->


            <?php echo do_shortcode('[testimonial_view id="4"]'); ?>
            <!-- <?php echo do_shortcode('[testimonial_view id="2"]'); ?> -->
        </div>
        <div class='feedback_table'>
            <div class="overlay"></div>
            <button class='esc_button'></button>
            <div class='container-feedback_form dotted_bg'>

                <!-- <?php echo do_shortcode('[contact-form-7 id="122" title="Без названия"]'); ?> -->
                <?php echo do_shortcode('[testimonial_view id="1"]'); ?>
                <!-- <?php echo do_shortcode('[wpforms id="120"]'); ?> -->
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
</section>

<div class="all">
    <div class="div_1"></div>
    <div class="div_2">L</div>
</div>
<?php get_footer() ?>