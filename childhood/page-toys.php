<?php
/*
  Template Name: Игрушки 
 */
?>

<?php get_header(); ?>

<div class="toys">
            <div class="container">
                <h2 class="subtitle">Мягкие игрушки</h2>
                <div class="toys__wrapper">

                <?php
                $posts = get_posts([
                    'numberposts' => -1,
                    'category_name' => 'soft_toys',
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'post_type' => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ]);

                foreach ($posts as $post) {
                    setup_postdata($post); ?>
                    
                    <div class="toys__item" style="background-image: url(
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail_url();
                        } else {
                            echo get_template_directory_uri() .
                                '/assets/img/not-found.jpg';
                        } ?>)">
                        <div class="toys__item-info">
                            <div class="toys__item-title"><?php the_title(); ?></div>
                            <div class="toys__item-descr">
                               <?php the_field(
                                   'toys_descr'
                               ); ?>                     
                            </div>
                            <div class="minibutton toys__trigger">Подробнее</div>
                        </div>
                    </div>

                <?php
                }
                wp_reset_postdata();
                ?>
                </div>


                <h2 class="subtitle">Развивающие игрушки</h2>
                <div class="toys__wrapper">

                    <div class="toys__item" style="background-image: url(<?php echo bloginfo(
                        'template_url'
                    ); ?>/assets/img/toy_7.jpg)">
                        <div class="toys__item-info">
                            <div class="toys__item-title">Воздушный змей</div>
                            <div class="toys__item-descr">
                                Кто в детстве не хотел научиться летать? А змей поможет поймать ветер и унести все заботы далеко-далеко...    
                            </div>
                            <div class="minibutton toys__trigger">Подробнее</div>
                        </div>
                    </div>

                    <div class="toys__item" style="background-image: url(<?php echo bloginfo(
                        'template_url'
                    ); ?>/assets/img/toy_8.jpg)">
                        <div class="toys__item-info">
                            <div class="toys__item-title">Музыкальные</div>
                            <div class="toys__item-descr">
                                Попробуйте заинтересовать ребенка музыкой! Может в нем таится будущий Джаред Лето!
                            </div>
                            <div class="minibutton toys__trigger">Подробнее</div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="toys__alert">
                            <span>Не нашли то, что искали?</span> Свяжитесь с нами - и мы с радостью создадим любую игрушку по вашему желанию. Вы можете выбрать все: размер, материал, формы...!
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>
