<?php

/**
 * The template for displaying author pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Managtrix
 * @since   Managtrix 1.0.0
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header(); ?>


<div class="page-header">
  <div class="container">
    <p id="breadcrumbs">
      <span> <span class="breadcrumb_last" aria-current="page">Author Sinlge
          Page</span>
      </span>
    </p>
    <h1><?php echo get_the_author() ?></h1>
  </div>
</div>

<div class="page-content container">
  <div class="row row-gap">
    <div class="col-lg-9">
      <?php
      global $wp_query;
      $author = $wp_query->get_queried_object();
      echo $author->description;
      ?>
    </div>
    <div class="col-lg-3">
      <div class="sidebar">
        <div class="mg-auth-card">
          <div class="author-img">
            <?php echo get_avatar($author->ID, 96, '', $author->display_name, array('class' => 'img-fluid')); ?>
          </div>
          <div class="mg-card-content">
            <div class="auth-name"><?php echo $author->display_name; ?></div>
            <p>Social Media and Tech Expert</p>
          </div>
        </div>
      </div>

    </div>
    <div class="col-lg-12">

      <div class="sec-title">
        <div class="h2"><?php echo $author->display_name; ?>'s Posts</div>
      </div>

      <div class="row row-gap">
        <?php if (have_posts()) :
          while (have_posts()) :
            the_post(); ?>
            <div class="col-lg-4 col-md-6">
              <?php get_template_part('template-parts/content', 'card'); ?>
            </div>
        <?php endwhile;
        endif;
        ?>
      </div>

      <a href="#" class="mg-btn-bg" id="load-btn">
        Load More

        <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.625 9.25L5.375 5.5L1.625 1.75" stroke="#009A77" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>

      </a>

    </div>
  </div>
</div>

<?php get_footer(); ?>