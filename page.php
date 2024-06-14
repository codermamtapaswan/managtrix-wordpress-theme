
<?php
/**
 * The template for displaying all single pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Managytrix
 * @since   Managytrix 1.0.0
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header();

while (have_posts()) :
  the_post();
  get_template_part('template-parts/content', 'page');
endwhile;

get_footer();
?>
