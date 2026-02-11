<!-- Все php функции которые вы видите тут стирать нельзя, иначе всё может поломаться -->

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header>
      <div class="header-nav container">
        <nav class="header-nav__menu">
            <a href="/#tap" class="header-nav__menu-item">тап-лист</a>
            <a href="/#menu" class="header-nav__menu-item">меню</a>
            <a href="/#events" class="header-nav__menu-item">события</a>
            <a href="/#serts" class="header-nav__menu-item">сертификаты</a>
            <a href="/#card" class="header-nav__menu-item">карта гостя</a>
        </nav>
        <a href="tel:<?php echo get_field('phone', 'option') ?>" class="header-nav__call"><?php echo get_field('button', 'option') ?></a>
        <button type="button" class="header-nav__closer">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/closer.svg" alt="Закрыть">
        </button>
      </div>
      <button type="button" class="header-nav__burger">
        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 15H21" stroke="#F8CD54" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M3 9H21" stroke="#F8CD54" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
  </header>