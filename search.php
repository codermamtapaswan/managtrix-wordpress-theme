<?php

/**
 * The template for displaying search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mangtrix
 * @since   Mangtrix 1.0.0
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
get_header(); ?>


<div class="container">
  <p id="breadcrumbs">
    <span>
      <span>
        Your Search Results ......
      </span>
    </span>
  </p>
  <?php if (have_posts()) : ?>
    <div class="page-content">
      <div class="row row-gap">
        <?php while (have_posts()) :
          the_post(); ?>
          <div class="col-lg-4 col-md-6">
            <?php
            get_template_part('template-parts/content', 'card'); ?>
          </div>
        <?php endwhile; ?>
      </div>

      <a href="#" class="mg-btn-bg" id="load-btn">
        Load More
        <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.625 9.25L5.375 5.5L1.625 1.75" stroke="#009A77" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>

      </a>

    </div>
  <?php
  else :
    get_template_part('template-parts/content', 'search-not-found');
  endif;
  ?>
</div>


<?php get_footer(); ?>