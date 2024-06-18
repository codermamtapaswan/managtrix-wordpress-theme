<?php

/**
 * Template Name: Thank You 
 * Description: Thank You page template file.
 *
 * @package Managtrix
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header();
?>

<div class="container">

  <p id="breadcrumbs">
    <span>
      <span>
        Thank You
      </span>
    </span>
  </p>

  <div class="page-status-content">

    <img src="<?php echo managtrix_img_path('thankyou.svg') ?>" alt="Thank You images" class="img-fluid">

    <div class="page-status-title">
      <span class="h2">Thank You !</span>
    </div>
    <p>Thank you for your support! Your contribution means the world to us.</p>
    <a href="<?php echo MANAGTRIX_HOME_URI; ?>" class="mg-btn-bg">Back To home</a>
  </div>
</div>


<?php
get_footer();
?>