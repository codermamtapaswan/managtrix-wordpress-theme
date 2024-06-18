<?php

/**
 * Template Name: Authors
 * Description: Authors page template file.
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



<?php
get_footer();
?>