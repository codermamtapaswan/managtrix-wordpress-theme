<?php


/**
 * Managtrix functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package Managtrix
 * @since   Managtrix 1.0.0
 * 
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}





/*  Theme Contants
---------------------------*/

if (!defined('MANAGTRIX_DIR_PATH')) {
  define('MANAGTRIX_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('MANAGTRIX_DIR_URI')) {
  define('MANAGTRIX_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if (!defined('MANAGTRIX_HOME_URI')) {
  define('MANAGTRIX_HOME_URI', esc_url(home_url('/')));
}





/*  Register theme assests
---------------------------*/

function managtrix_register_assets()
{
  $version = wp_get_theme()->get('version');

  // Enqueue styles
  wp_enqueue_style('layout-style', MANAGTRIX_DIR_URI . "/assets/css/layout.css", array(), $version, 'all');
  wp_enqueue_style('custom-style', MANAGTRIX_DIR_URI . "/assets/css/style.css", array(), $version, 'all');

  // Enqueue script
  wp_enqueue_script('main-script', MANAGTRIX_DIR_URI . "/assets/js/script.js", array(), $version, true);

  // Add preload for fonts
  $preload_fonts = [
    'assets/fonts/torsos/fonnts.com-bb-torsos-pro-medium-webfont.ttf' => 'font/ttf',
    'assets/fonts/manrope/manrope-v15-latin-regular.woff2' => 'font/woff2',
    'assets/fonts/manrope/manrope-v15-latin-regular.ttf' => 'font/ttf',
    'assets/fonts/manrope/manrope-v15-latin-500.woff2' => 'font/woff2',
    'assets/fonts/manrope/manrope-v15-latin-500.ttf' => 'font/ttf',
    'assets/fonts/manrope/manrope-v15-latin-600.woff2' => 'font/woff2',
    'assets/fonts/manrope/manrope-v15-latin-600.ttf' => 'font/ttf',
    'assets/fonts/manrope/manrope-v15-latin-700.woff2' => 'font/woff2',
    'assets/fonts/manrope/manrope-v15-latin-700.ttf' => 'font/ttf',
  ];

  foreach ($preload_fonts as $font => $type) {
    echo '<link rel="preload" href="' . MANAGTRIX_DIR_URI . '/' . $font . '" as="font" type="' . $type . '" crossorigin="anonymous">' . "\n";
  }
}
add_action('wp_enqueue_scripts', 'managtrix_register_assets');




/* Site Image Path URL
--------------------------*/

function managtrix_img_path($image_name)
{
  return MANAGTRIX_DIR_URI . "/assets/images/" . $image_name;
}

/* Hook theme support
--------------------------*/

function managtrix_theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'managtrix_theme_support');


/*Add support for additional image file types
-----------------------------------------------*/

function mime_types_support($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  $mimes['webp'] = 'image/webp';
  $mimes['bmp'] = 'image/bmp';
  $mimes['tiff'] = 'image/tiff';
  return $mimes;
};
add_filter('upload_mimes', 'mime_types_support');



/*Add support for additional image file types
-----------------------------------------------*/
function managtrix_menus()
{
  $menus_locations = array(
    'Primary_menu' => 'Top Primary Menu',
    'Footer_menu_1' => 'Footer Menu column 1',
    'Footer_menu_2' => 'Footer Menu column 2',
    'Footer_menu_3' => 'Footer Menu column 3',
    'Footer_menu_4' => 'Footer Menu column 4',
  );
  register_nav_menus($menus_locations);
}
add_action('init', 'managtrix_menus');


/* Add widgets
-----------------------------------------------*/
function managtrix_widgets()
{
  register_sidebar(array(
    'name'          => __('social_links'),
    'id'            => 'social_links',
    'description'   => __('Embed socail links'),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ));
}
add_action("widgets_init", "managtrix_widgets");
