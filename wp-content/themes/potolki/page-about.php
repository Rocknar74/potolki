<?php get_header() ?>
<section class="personnel_section" id="personnel">
    <div class="container_content_in_section">
        <div class="personnel_header section_header">
            <h2>Наш персонал</h2>
            <p>Все врачи в нашей клинике имеют большой опыт работы, прошли курсы повышения квалификации и являются одними из лучших специалистов в городе.</p>
        </div>
        <div class="container_personnel_slides dotted_bg">
            <div class="overlay_personnel"></div>
            <div class="main_personnel_slides">
                <?php
                $query_personnel = "SELECT * FROM `personnel` WHERE `numeration` IS NOT NULL ORDER BY `numeration` ASC"
                    or die('Ошибка соединения с базой данных 2');
                $data = mysqli_query($dbc, $query_personnel);

                while ($row = mysqli_fetch_array($data)) {
                    $photo = $row['photo'];
                    $surname = $row['surname'];
                    $name = $row['name'];
                    $patronymic = $row['patronymic'];
                    $profession = $row['profession'];
                    $description = $row['description'];
                ?>
                    <figure class="personnel">
                        <img src="<?= $photo ?>" alt="Ошибка загрузки фото сотрудника">
                        <figcaption>
                            <h3><?= $surname ?><br> <?= $name ?><br> <?= $patronymic ?></h3>
                            <span><?= $profession ?></span>
                            <p><?= $description ?></p>
                        </figcaption>
                    </figure>
                <?php
                }
                ?>
            </div>
            <div class="container-personnel_slider_buttons">
                <button class="personnel_left_slider_button personnel_slider_buttons" value="left"><img src="img/main/personnel/slide_button/Rectangle.png" alt=""></button>
                <button class="personnel_right_slider_button personnel_slider_buttons" value="right"><img src="img/main/personnel/slide_button/Rectangle.png" alt=""></button>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>