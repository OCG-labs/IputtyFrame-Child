<?php
/**
 * @package WordPress
 * @subpackage Ocg Frame
 */

get_header(); ?>

	<?php 
			if (have_posts()) : ?>

				<?php 
				while (have_posts()) : the_post(); ?>
				<?php $post_terms = wp_get_object_terms($post->ID, 'category'); 
				//print_r($post_terms);
				?>

					<div <?php post_class('boxed_post') ?> id="post-<?php the_ID(); ?>">
						<div class="row">
							<div class="col-md-9">
								<h3><a class="post_link" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							</div>
							<div class="col-md-3 text-right">
								<p class="postmetadata"><?php comments_popup_link('No Comments <i class="fa fa-comments-o fa-lg"></i>', '<span class="badge">1</span> Comment <i class="fa fa-comments-o fa-lg"></i>', '<span class="badge">%</span> Comments <i class="fa fa-comments-o fa-lg"></i>'); ?></p>
							</div>
						</div>
						<div class="well clearfix">
							<small><?php the_time('F jS, Y') ?> by <?php the_author() ?></small>
								<ul class="list-inline" style="float:right;">
								<?php foreach($post_terms as $post_term) {
								echo '<li><a href="/category/'.$post_term->slug.'"><span class="label label-warning">'.$post_term->name.'</span></a></li>';
								} ?>
							</ul>
						</div>
						<?php the_excerpt(); ?>
				
						<div class="clearfix">
							<a href="<?php the_permalink(); ?>" class="right btn btn-danger"><i class="fa fa fa-eye fa-lg"></i> Continue Reading</a>
						</div>
					</div>

				<?php 
				endwhile; ?>

				<div class="navigation">
					<div class="alignleft"><?php next_posts_link('<i class="fa fa-arrow-circle-o-left"></i> Older Entries') ?></div>
					<div class="alignright"><?php previous_posts_link('Newer Entries <i class="fa fa-arrow-circle-o-right"></i>') ?></div>
				</div>

			<?php 
			else : ?>

				<h2 class="center">Not Found</h2>
				<p class="center">Sorry, but you are looking for something that isn't here.</p>
				<?php get_search_form(); ?>

			<?php 
			endif; ?>

<?php 
get_sidebar(); ?>

<?php 
get_footer(); ?>
