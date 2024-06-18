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
      <h1>Popular Best Google Doodle Games — Dive Into the Mini Arcade</h1>
      <div class="blog-detail flex-between-wrap">
        <span class="mg-timeline">
          <a href="#" class="author-img">
            <img src="https://getassist.net/wp-content/uploads/2023/12/janvi-panthri-newsize.webp" alt="" class="img-fluid">
          </a>
          <span> By <a href="#">Janvi Panthri</a></span>
        </span>
        <span class="mg-timeline">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.833 3.333H4.167C3.247 3.333 2.5 4.08 2.5 5v11.667c0 .92.746 1.666 1.667 1.666h11.666c.92 0 1.667-.746 1.667-1.666V5c0-.92-.746-1.667-1.667-1.667m-2.5-1.666V5M6.667 1.667V5M2.5 8.333h15" stroke="#009A77" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>

          Updated on : 9th May 2024
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
        <?php $blog_content = apply_filters('the_content', get_the_content()) ?>
      </div>
    </div>
    <div class="col-lg-3">
      <?php get_sidebar(); ?>
    </div>
  </div>

  <div class="mg-con-related-post">
    <div class="sec-title">
      <div class="h2">Related posts</div>
    </div>
    <div class="row row-gap">
      <div class="col-lg-4 col-md-6">
        <div class="mg-card">
          <div class="img-placeholder">
            <a href="#">
              <img src="https://ityug247.com/wp-content/uploads/2023/09/social-media-and-e-commerce.webp" alt="" class="img-fluid">
            </a>
          </div>
          <div class="mg-card-content">
            <a href="#" class="cat-btn">blog</a>
            <a href="#" class="blog-title">Here are 15 Sure-Shot Ways to Fix “Netflix Error Code</a>
            <p>Lorem ipsum dolor, sit amet sit amet consectetur adipisicing elit.</p>
            <a href="#" class="mg-btn-txt">
              Read More
              <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 5.25a.75.75 0 0 0 0 1.5zm12.53 1.28a.75.75 0 0 0 0-1.06L8.757.697a.75.75 0 1 0-1.06 1.06L11.939 6l-4.242 4.243a.75.75 0 0 0 1.06 1.06zM1 6.75h12v-1.5H1z" fill="#000"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>