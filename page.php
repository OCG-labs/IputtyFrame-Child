<?php
/**
 * @package WordPress
 * @subpackage Ocg Frame
 */

get_header(); ?>

<p>Current design: <strong id="current">unknown</strong></p>


	<?php 
	if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<h1><?php the_title(); ?></h1>
		
		<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

	<?php 
	endwhile; endif; ?>

<?php 
get_sidebar(); ?>

<?php 
get_footer(); ?>
