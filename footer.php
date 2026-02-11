<footer>
      <div class="footer container">
         <div class="footer__info">
            <div class="footer__phone">
               <a href="tel:<?php echo get_field('phone', 'option') ?>">+7 (812) 910-00-80</a>
            </div>
            <div class="footer__social">
               <div>
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/tg.svg" alt="Телеграм">
               </div>
               <a target="_blank" href="<?php echo get_field('tg', 'option') ?>">telegram</a>
            </div>
            <p class="footer__time"><?php echo get_field('work_1', 'option') ?></p>
            <p class="footer__time"><?php echo get_field('work_2', 'option') ?></p>
         </div>
         <div class="footer__map">
            <div class="footer__adress">
               <a target="_blank" href="https://yandex.ru/profile/188731093197?lang=ru"><?php echo get_field('adress', 'option') ?></a>
            </div>
            <div class="footer__y-map">
               <div style="position:relative;overflow:hidden;width:100%"><a
                     href="https://yandex.ru/maps/org/plague_arena/188731093197/?utm_medium=mapframe&utm_source=maps"
                     style="color:#eee;font-size:12px;position:absolute;top:0px;">Plague Arena</a><a
                     href="https://yandex.ru/maps/2/saint-petersburg/category/bar_pub/184106384/?utm_medium=mapframe&utm_source=maps"
                     style="color:#eee;font-size:12px;position:absolute;top:14px;">Бар в Санкт‑Петербурге</a><a
                     href="https://yandex.ru/maps/2/saint-petersburg/category/pub/167978289740/?utm_medium=mapframe&utm_source=maps"
                     style="color:#eee;font-size:12px;position:absolute;top:28px;">Паб в Санкт‑Петербурге</a><iframe
                     src="https://yandex.ru/map-widget/v1/?ll=30.365275%2C59.953425&mode=search&oid=188731093197&ol=biz&z=14.5"
                     width="100%" height="100%" frameborder="1" allowfullscreen="true"
                     style="position:relative;"></iframe></div>
            </div>
         </div>
         <div class="footer__sub">
            <a target="_blank" href="<?php echo get_field('cookie', 'option') ?>" class="footer__doc">Уведомление об использовании cookie</a>
            <a target="_blank" href="<?php echo get_field('pd', 'option') ?>" class="footer__doc">Политика обработки персональных данных</a>
            <a target="_blank" href="<?php echo get_field('agreement', 'option') ?>" class="footer__doc">Согласие на обработку персональных данных</a>
         </div>
      </div>
   </footer>

<?php wp_footer(); ?>

</body>
</html>