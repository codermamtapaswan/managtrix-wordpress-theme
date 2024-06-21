<?php

/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Managetrix
 * @since   Managetrix 1.0.0
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="blog-header">
  <div class="container">

    <?php if (have_posts()) : while (have_posts()) :  the_post(); ?>

        <div class="col-lg-9">
          <p id="breadcrumbs">
            <span>
              <span>
                <a href="#">Home</a>
              </span>
              <span>
                <a href="#">Blog</a>
              </span>
              <span>
                <a href="#">Banking</a>
              </span>
            </span>
          </p>
          <h1><?php echo get_the_title(); ?></h1>
          <div class="blog-detail flex-between-wrap">
            <span class="mg-timeline">
              <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="author-img">
                <?php echo get_avatar(get_the_author_meta('ID'), 45); ?>
              </a>
              <span> By <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php echo get_the_author(); ?></a></span>
            </span>
            <span class="mg-timeline">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.833 3.333H4.167C3.247 3.333 2.5 4.08 2.5 5v11.667c0 .92.746 1.666 1.667 1.666h11.666c.92 0 1.667-.746 1.667-1.666V5c0-.92-.746-1.667-1.667-1.667m-2.5-1.666V5M6.667 1.667V5M2.5 8.333h15" stroke="#009A77" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>

              Updated on : <?php echo get_the_date('F j,Y') ?>
            </span>
            <span class="mg-timeline">
              6 mins read
            </span>
          </div>
        </div>


  </div>
</div>

<div class="container">
  <div class="row row-gap mg-con">
    <div class="col-lg-9">
      <div class="blog-content">
        <?php echo $blog_content = apply_filters('the_content', get_the_content()) ?>
      </div>
    </div>
    <div class="col-lg-3">
      <?php get_sidebar(); ?>
    </div>
  </div>

<?php
      endwhile;
    endif;
?>

<div class="mg-con-related-post">
  <div class="sec-title">
    <div class="h2">Related posts</div>
  </div>

  <?php
  // Get the categories of the current post
  $categories = get_the_category();
  // print_r($categories)

  if ($categories) {
    $cat_ids = array();
    foreach ($categories as $cat) {
      $cat_ids = $cat->term_id;
    }
  }

  // Set up arguments for the related posts query
  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category__in' => $cat_ids,
    'post__not_in' => array(get_the_ID()),
    'posts_per_page' => 6, // Change the number of related posts to display here
  );

  $related_posts = new WP_Query($args);
  // Output the related posts
  ?>
  <div class="row row-gap">
    <?php if ($related_posts->have_posts()) :
      while ($related_posts->have_posts()) :
        $related_posts->the_post(); ?>
        <div class="col-lg-4 col-md-6">
          <?php get_template_part('template-parts/content', 'card'); ?>
        </div>
    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>
  </div>
</div>
</div>

<?php get_footer(); ?>