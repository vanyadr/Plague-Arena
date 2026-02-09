<?php
/**
 * Template Name: Homepage
 */
get_header();
?>
    
   <main>
      <section class="front section">
         <div class="front__bg">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/bg.png" alt="Фоновое изображение">
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
            <a href="tel:" class="header-nav__call-mobile">Позвонить в бар</a>
         </div>
      </section>
      <section class="place section container">
         <h2 class="title">пространство</h2>
         <div class="place__delimiter animate-on-scroll">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/verticalDelimiter.svg" alt="">
         </div>
         <h1 class="place__main-title">
            <span class="yellow">Plague Arena</span> — бар крафтовых премьер и тапрум пивоварни Plague Brew. <span
               class="yellow">40 кранов пива</span>, открытая кухня и
            стритфуд со всего мира.
         </h1>
         <div class="place__grid">
            <div class="place__img">
               <img src="<?php echo get_template_directory_uri() ?>/assets/images/place1.jpg" alt="Фото бара">
            </div>
            <div class="place__img">
               <img src="<?php echo get_template_directory_uri() ?>/assets/images/place2.jpg" alt="Фото бара">
            </div>
            <div class="place__img">
               <img src="<?php echo get_template_directory_uri() ?>/assets/images/place3.jpg" alt="Фото бара">
            </div>
            <p class="place__text">
               Интерьер в стиле постапокалипсис-индастриал, сводчатые потолки и самая длинная контактная барная
               стойка
               в Петербурге.
            </p>
         </div>
      </section>
      <section class="tap-list container section" id="tap">
         <h2 class="menu-title yellow">tap-list</h2>
         <div class="menu-grid">
            <div class="menu-block">
               <p class="menu-text yellow">
                  Как и уличный корнер, где рождается кулинарный шедевр, наша пивоварня — это
                  место экспериментов без границ. Потому что у них — общая душа.
                  У каждого великого путешествия должен быть верный спутник. Таким спутником для нашего тап-листа
                  стал
                  стритфуд
               </p>
               <a href="tel:" class="btn">Открыть тап-лист</a>
            </div>
         </div>
      </section>
      <section class="menu container section" id="menu">
         <h2 class="menu-title">Menu</h2>
         <div class="menu-grid">
            <div class="menu-block">
               <div class="menu-btn-block">
                  <a href="tel:" class="btn">Основное меню</a>
                  <a href="tel:" class="btn">Барное меню</a>
               </div>
               <p class="menu-text">
                  Наш стритфуд уникален своим многообразием, собран со всех уголков мира.
               </p>
            </div>
         </div>
         <div class="swiper-menu">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/place1.jpg" alt="Еда" />
               </div>
               <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/place2.jpg" alt="Еда" />
               </div>
               <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/place3.jpg" alt="Еда" />
               </div>
               <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/place1.jpg" alt="Еда" />
               </div>
               <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/place2.jpg" alt="Еда" />
               </div>
               <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/place3.jpg" alt="Еда" />
               </div>
               <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/place1.jpg" alt="Еда" />
               </div>
               <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/place2.jpg" alt="Еда" />
               </div>
               <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/place3.jpg" alt="Еда" />
               </div>
               <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/place1.jpg" alt="Еда" />
               </div>
               <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/place2.jpg" alt="Еда" />
               </div>
               <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/place3.jpg" alt="Еда" />
               </div>
               <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/place1.jpg" alt="Еда" />
               </div>
               <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/place2.jpg" alt="Еда" />
               </div>
               <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/place3.jpg" alt="Еда" />
               </div>
            </div>
         </div>
      </section>
      <section class="events section container" id="events">
         <h2 class="title">Ближайшие события</h2>
         <div class="events__slider">
            <div class="swiper-events">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="events__slide-holder">
                        <div class="events__img">
                           <img src="<?php echo get_template_directory_uri() ?>/assets/images/place1.jpg" alt="Еда" />
                        </div>
                        <div class="events__content">
                           <h4 class="events__name">AA Fest — фестиваль крафтового пива</h4>
                           <p class="events__description">AA FEST - ежегодный праздник для всех ценителей крафтовых
                              напитков в Санкт-Петербурге. Насладитесь безлимитными напитками, вкусной едой и
                              шоу-программой.</p>
                           <div class="events__footer">
                              <span class="events__date">18.09.2026</span>
                              <a href="" class="events__link">Подробнее</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="events__slide-holder">
                        <div class="events__img">
                           <img src="<?php echo get_template_directory_uri() ?>/assets/images/place1.jpg" alt="Еда" />
                        </div>
                        <div class="events__content">
                           <h4 class="events__name">AA Fest — фестиваль крафтового пива</h4>
                           <p class="events__description">AA FEST - ежегодный праздник для всех ценителей крафтовых
                              напитков в Санкт-Петербурге. Насладитесь безлимитными напитками, вкусной едой и
                              шоу-программой.</p>
                           <div class="events__footer">
                              <span class="events__date">18.09.2026</span>
                              <a href="" class="events__link">Подробнее</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="events__slide-holder">
                        <div class="events__img">
                           <img src="<?php echo get_template_directory_uri() ?>/assets/images/place1.jpg" alt="Еда" />
                        </div>
                        <div class="events__content">
                           <h4 class="events__name">AA Fest — фестиваль крафтового пива</h4>
                           <p class="events__description">AA FEST - ежегодный праздник для всех ценителей крафтовых
                              напитков в Санкт-Петербурге. Насладитесь безлимитными напитками, вкусной едой и
                              шоу-программой.</p>
                           <div class="events__footer">
                              <span class="events__date">18.09.2026</span>
                              <a href="" class="events__link">Подробнее</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="events__slide-holder">
                        <div class="events__img">
                           <img src="<?php echo get_template_directory_uri() ?>/assets/images/place1.jpg" alt="Еда" />
                        </div>
                        <div class="events__content">
                           <h4 class="events__name">AA Fest — фестиваль крафтового пива</h4>
                           <p class="events__description">AA FEST - ежегодный праздник для всех ценителей крафтовых
                              напитков в Санкт-Петербурге. Насладитесь безлимитными напитками, вкусной едой и
                              шоу-программой.</p>
                           <div class="events__footer">
                              <span class="events__date">18.09.2026</span>
                              <a href="" class="events__link">Подробнее</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="events__slide-holder">
                        <div class="events__img">
                           <img src="<?php echo get_template_directory_uri() ?>/assets/images/place1.jpg" alt="Еда" />
                        </div>
                        <div class="events__content">
                           <h4 class="events__name">AA Fest — фестиваль крафтового пива</h4>
                           <p class="events__description">AA FEST - ежегодный праздник для всех ценителей крафтовых
                              напитков в Санкт-Петербурге. Насладитесь безлимитными напитками, вкусной едой и
                              шоу-программой.</p>
                           <div class="events__footer">
                              <span class="events__date">18.09.2026</span>
                              <a href="" class="events__link">Подробнее</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
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
               <p class="sert__text">Подарочный сертификат Plague Arena — универсальный вариант для любителей пива.
               </p>
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
      <section class="card section container" id="card">
         <h2 class="title">Карта лояльности</h2>
         <div class="card__grid">
            <div class="card__info">
               <p class="card__text">Получайте баллы, оплачивайте ими до 30% счета.</p>
               <a href="">
                  <span class="card__link">Правила бонусной программы</span>
                  <span class="card__link-item">*</span>
               </a>
            </div>
            <div class="card__img">
               <img src="<?php echo get_template_directory_uri() ?>/assets/images/card.png" alt="Карта лояльности">
            </div>
         </div>
      </section>
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
         <a href="tel:" class="location__call">Позвонить в бар</a>
      </section>
   </main>

<?php get_footer(); ?>