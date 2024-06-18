<?php

/**
 * Template Name: Blog
 * Description: All Post Display here.
 *
 * @package Managtrix
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div class="page-header">
	<div class="container">
		<p id="breadcrumbs">
			<span>
				<span>
					<a href="#">Home</a>
				</span>
				<span>
					<a href="#">Page</a>
				</span>
				<span>
					<a href="#">Blogs</a>
				</span>
			</span>
		</p>
		<div class="h2"><?php echo get_the_title(); ?></div>
	</div>
</div>


<div class="container page-content">
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


<?php
get_footer();
?>