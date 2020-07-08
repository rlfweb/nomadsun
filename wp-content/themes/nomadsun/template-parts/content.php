<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomadsun
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- <header class="entry-header">
	</header>.entry-header -->

	<div class="entry-content">
		<!-- if we have some flexible content, let’s loop through it -->
			<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();
  // if it’s a header, go through the data
			if( get_row_layout() == 'header' ): ?>

			<!-- header	-->
	<div> 
			<!-- header image -->
		<div class="w-60 min-vh 100 bg-blue">

		</div>
			<!-- header content -->
		<div>
	
		</div>
	</div>
				<!-- data shared from our hero -->
				<?php the_field('hero_image'); ?>
				<?php the_field('date'); ?>
				<!-- standard wordpress data -->
				<?php the_title(); ?>
				<?php the_field('subhead'); ?>
				<!-- specific to this component -->
				<?php the_sub_field('header_intro'); ?>
			<!-- if it’s a text component, show us the data -->
			<?php elseif( get_row_layout() == 'text_block' ): ?>
				<?php the_sub_field('text_content'); ?>
			<?php endif; 
		endwhile; endif; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- <?php nomadsun_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
