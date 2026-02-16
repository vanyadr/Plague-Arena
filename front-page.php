<?php

/**
 * Template Name: Homepage
 */
get_header();
?>

<main>
   <section class="front section">
      <div class="front__bg">
         <img src="<?php echo get_field('bg_photo') ?>" alt="Фоновое изображение">
      </div>
      <div class="front__bg-alfa"></div>
      <div class="front__logo">
         <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="Логотип">
      </div>
      <div class="front_subtitles">
         <div class="front__sub-block">
            <div class="front__subtitles-item item-1">
               <img src="<?php echo get_template_directory_uri() ?>/assets/images/sub1.svg" alt="Дескриптор">
            </div>
            <div class="front__subtitles-item item-2">
               <img src="<?php echo get_template_directory_uri() ?>/assets/images/sub2.svg" alt="Дескриптор">
            </div>
         </div>
         <a href="tel:<?php echo get_field('phone', 'option') ?>" class="header-nav__call-mobile"><?php echo get_field('button', 'option') ?></a>
      </div>
   </section>
   <section class="place section container">
      <h2 class="title">пространство</h2>
      <div class="place__delimiter animate-on-scroll">
         <img src="<?php echo get_template_directory_uri() ?>/assets/images/verticalDelimiter.svg" alt="">
      </div>
      <h1 class="place__main-title">
         <?php echo get_field('block_1_text1') ?>
      </h1>
      <div class="place__grid">

         <?php 
            if( have_rows('block_1_photos') ): 
               while( have_rows('block_1_photos') ): the_row(); 
                  $img = get_sub_field('block_1_img');
         ?>

                  <div class="place__img">
                     <img src="<?php echo $img ?>" alt="Фото бара">
                  </div>

         <?php 
               endwhile;
            endif; 
         ?>

         <p class="place__text">
            <?php echo get_field('block_1_text2') ?>
         </p>
      </div>
   </section>
   <section class="tap-list container section" id="tap">
      <h2 class="menu-title yellow">tap-list</h2>
      <div class="menu-grid">
         <div class="menu-block">
            <p class="menu-text yellow">
               <?php echo get_field('tap_text') ?>
            </p>
            <a target="_blank" href="<?php echo get_field('tap_link') ?>" class="btn">Открыть тап-лист</a>
         </div>
      </div>
   </section>
   <section class="menu container section" id="menu">
      <h2 class="menu-title">Menu</h2>
      <div class="menu-grid">
         <div class="menu-block">
            <div class="menu-btn-block">
               <a target="_blank" href="<?php echo get_field('menu_menufile') ?>" class="btn">Основное меню</a>
               <a target="_blank" href="<?php echo get_field('menu_barfile') ?>" class="btn">Барное меню</a>
            </div>
            <p class="menu-text">
               <?php echo get_field('menu_text') ?>
            </p>
         </div>
      </div>

      <?php 
         if( have_rows('menu_carousel') ): 
      ?>
         <div class="swiper-menu">
            <div class="swiper-wrapper">
      <?php
            while( have_rows('menu_carousel') ): the_row(); 
               $img = get_sub_field('image');
      ?>

               <div class="swiper-slide clickable">
                  <img src="<?php echo $img ?>" alt="Фото бара">
               </div>

      <?php 
            endwhile;
      ?>
            </div>
         </div>
      <?php
         endif; 
      ?>

   </section>
   <section class="events section container" id="events">
      <h2 class="title">Ближайшие события</h2>
      <div class="events__slider">

         <?php 
            if( have_rows('events') ): 
         ?>
            <div class="swiper-events">
               <div class="swiper-wrapper">
         <?php
               while( have_rows('events') ): the_row(); 
                  $img = get_sub_field('event_img');
                  $name = get_sub_field('event_title');
                  $descr = get_sub_field('event_descr');
                  $date = get_sub_field('event_date');
                  $link = get_sub_field('event_page');
         ?>

                  <div class="swiper-slide">
                     <div class="events__slide-holder">
                        <div class="events__img">
                           <img src="<?php echo $img ?>" alt="Еда" />
                        </div>
                        <div class="events__content">
                           <h4 class="events__name"><?php echo $name ?></h4>
                           <p class="events__description">
                              <?php echo $descr ?>
                           </p>
                           <div class="events__footer">
                              <span class="events__date"><?php echo $date ?></span>
                              <a target="_blank" href="<?php echo $link ?>" class="events__link">Подробнее</a>
                           </div>
                        </div>
                     </div>
                  </div>

         <?php 
               endwhile;
         ?>
               </div>
            </div>
         <?php
            endif; 
         ?>

         <button type="button" class="events__btn swiper-button-prev">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrowChevron.svg" alt="Предыдущее">
         </button>
         <button type="button" class="events__btn swiper-button-next">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrowChevron.svg" alt="Следующее">
         </button>
      </div>
   </section>
   <section class="sert section container" id="serts">
      <h2 class="title">сертификат в бар</h2>
      <div class="sert__grid">
         <div class="sert__info">
            <p class="sert__text"><?php echo get_field('sert') ?></p>
            <span>* Приобрести можно только офлайн в баре.</span>
            <div class="sert__info-img">
               <img src="<?php echo get_template_directory_uri() ?>/assets/images/sert.png" alt="Сертификат">
            </div>
         </div>
         <div class="sert__imgs">
            <div class="sert__img-1">
               <img src="<?php echo get_template_directory_uri() ?>/assets/images/paperFront.png" alt="Сертификат">
            </div>
            <div class="sert__img-2">
               <img src="<?php echo get_template_directory_uri() ?>/assets/images/paperBack.png" alt="Сертификат">
            </div>
         </div>
      </div>
   </section>

   <!-- <section class="card section container" id="card">
      <h2 class="title">Карта лояльности</h2>
      <div class="card__grid">
         <div class="card__info">
            <p class="card__text"><?php echo get_field('card_text') ?></p>
            <a target="_blank" href="<?php echo get_field('card_rules') ?>">
               <span class="card__link">Правила бонусной программы</span>
               <span class="card__link-item">*</span>
            </a>
         </div>
         <div class="card__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/card.png" alt="Карта лояльности">
         </div>
      </div>
   </section> -->
   
   <section class="location section container">
      <p class="location__text">
         Ищете атмосферную площадку для вашего ивента?
      </p>
      <div class="location__line line-1">
         <img src="<?php echo get_template_directory_uri() ?>/assets/images/line.png" alt="">
      </div>
      <div class="location__line line-2">
         <img src="<?php echo get_template_directory_uri() ?>/assets/images/line.png" alt="">
      </div>
      <a href="tel:<?php echo get_field('phone', 'option') ?>" class="location__call"><?php echo get_field('button', 'option') ?></a>
   </section>

   <?php 
      if( have_rows('menu_carousel') ): 
   ?>
      <article class="modal">
         <div class="modal__container">
            <div class="swiper-modal">
               <div class="swiper-wrapper">
                  <?php
                        while( have_rows('menu_carousel') ): the_row(); 
                           $img = get_sub_field('image');
                  ?>

                           <div class="swiper-slide">
                              <img src="<?php echo $img ?>" alt="Фото бара">
                           </div>

                  <?php 
                        endwhile;
                  ?>
               </div>
            </div>
            <button type="button" class="modal__closer">
               <img src="<?php echo get_template_directory_uri() ?>/assets/images/closer.svg" alt="Закрыть">
            </button>
            <button type="button" class="modal__btn swiper-button-prev">
               <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrowChevron.svg" alt="Предыдущее">
            </button>
            <button type="button" class="modal__btn swiper-button-next">
               <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrowChevron.svg" alt="Следующее">
            </button>
         </div>
      </article>
   <?php
      endif; 
   ?>

</main>

<?php get_footer(); ?>