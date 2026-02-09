<?php
if (!defined('_S_VERSION')) {
  define('_S_VERSION', '1.0.0');
}

function pa_setup() {

  add_theme_support('title-tag');
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
    )
  );
}
add_action('after_setup_theme', 'pa_setup');

add_filter('script_loader_tag', 'add_type_attribute', 10, 3);
function add_type_attribute($tag, $handle, $src) {
	if (substr($handle, 0, 3) === 'pa-') {
		$tag = '<script type="module" src="' . esc_url($src) . '" defer></script>';
	}
	return $tag;
}

function allow_mp4_upload($mimes) {
    $mimes['mp4'] = 'video/mp4';
    $mimes['m4v'] = 'video/mp4';
    return $mimes;
}
add_filter('upload_mimes', 'allow_mp4_upload');

function fix_mp4_mime_type($data, $file, $filename, $mimes) {
    $filetype = wp_check_filetype($filename, $mimes);
    if ($filetype['ext'] === 'mp4' && $filetype['type'] === 'video/mp4') {
        $data['ext'] = 'mp4';
        $data['type'] = 'video/mp4';
    }
    return $data;
}
add_filter('wp_check_filetype_and_ext', 'fix_mp4_mime_type', 10, 4);

function pa_scripts() {
  wp_enqueue_style('pa-global-style', get_stylesheet_uri(), array(), _S_VERSION);

  wp_enqueue_style('pa-reset', get_template_directory_uri() . '/assets/css/reset.css', array(), _S_VERSION);
  wp_enqueue_style('pa-fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), _S_VERSION);
  wp_enqueue_style('pa-swiper', get_template_directory_uri() . '/assets/libraries/swiper/swiper.min.css', array(), _S_VERSION);
  wp_enqueue_style('pa-style', get_template_directory_uri() . '/assets/css/styles.css', array(), _S_VERSION);

  wp_enqueue_script('pa-swiper', get_template_directory_uri() . '/assets/libraries/swiper/swiper.min.mjs', array(), _S_VERSION, true);
  wp_enqueue_script('pa-swiper-nav', get_template_directory_uri() . '/assets/libraries/swiper/modules/navigation.min.mjs', array(), _S_VERSION, true);
  wp_enqueue_script('pa-swiper-auto', get_template_directory_uri() . '/assets/libraries/swiper/modules/autoplay.min.mjs', array(), _S_VERSION, true);
  wp_enqueue_script('pa-script', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'pa_scripts');

header('Access-Control-Allow-Origin: *');
