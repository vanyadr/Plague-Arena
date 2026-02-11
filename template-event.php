<?php

/**
 * Template Name: Event page
 */
get_header();
?>

<main>
    <section class="singleEvent container section">
        <div class="grid">
            <div class="singleEvent__img">
                <img src="<?php echo get_field('img') ?>" alt="<?php echo get_field('title') ?>">
            </div>
            <div class="singleEvent__content">
                <h2 class="singleEvent__subtitle"><?php echo get_field('subtitle') ?></h2>
                <h1 class="singleEvent__title"><?php echo get_field('title') ?></h1>
                <div class="singleEvent__info">
                    <ul class="singleEvent__list">
                        <li class="singleEvent__item">
                            <div class="singleEvent__icon">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/time.svg" alt="">
                            </div>
                            <p class="singleEvent__param"><?php echo get_field('date') ?></p>
                        </li>
                        <li class="singleEvent__item">
                            <div class="singleEvent__icon">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/location.svg" alt="">
                            </div>
                            <p class="singleEvent__param"><?php echo get_field('adress') ?></p>
                        </li>
                        <li class="singleEvent__item">
                            <div class="singleEvent__icon">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/price.svg" alt="">
                            </div>
                            <p class="singleEvent__param"><?php echo get_field('price') ?> ₽</p>
                        </li>
                    </ul>
                    <a href="<?php echo get_field('btn_link') ?>" class="singleEvent__book btn"><?php echo get_field('btn_text') ?></a>
                </div>

                <?php 
                    if( have_rows('descr') ): 
                    while( have_rows('descr') ): the_row(); 
                        $art = get_sub_field('art');
                ?>

                        <p class="singleEvent__description"><?= $art ?></p>

                <?php 
                    endwhile;
                    endif; 
                ?>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>