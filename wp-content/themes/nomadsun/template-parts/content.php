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
			<!-- header only has flexbox on large screens -->
	<div class="flex-l"> 

			<!-- header background image on the left -->
			<!-- header background has 100% width on anything below a large screen and 60% on large screens. 50vh on smaller screens and 100vh on large screens -->
		<div class="w-100 w-60-l vh-50 vh-100-l cover bg-center" 
		style="<?php nice_background('hero_image'); ?>"></div>

			<!-- header content on the right-->
			<!-- by default our header content block is 100% width and then width 40% on large screens -->
		<div class="w-100 w-40-l flex items-center justify-center ph3 ph4-l relative">
			<div class="tc">
				<!-- date -->
				<!-- abolute position for larger screens to put the date in teh top centre -->
				<p class="f6 archivo mt0 mb5 mb0-l ttu tracked absolute-l top-0-l left-0-l w-100-l pt4">
				<?php 
					nice_date(get_field('date')); 
				?>
				<!-- date underline -->
				<span class="line mt2"></span>
				</p>
				<!-- title -->
				<!-- change type scle for larger screens and squish the line height a bit because of bigger font size -->
				<h1 class="f2 f1-l lh-title archivo mt0 mb4 ttu">
					<?php the_title(); ?>
				</h1>
				<!-- subheading -->
					<p class="f2 f1-l tenor mt0 mb4 mb5-l ttu lh-title">
					<?php the_field('subhead'); ?>
				</p>
				
				<!-- header_intro -->
				<p class="f4 cardo i measure center mv0">
					<?php the_sub_field('header_intro'); ?>
				</p>
			</div>
		</div>

	</div>
			<!-- if it’s a text component, show us the data -->
			<?php elseif( get_row_layout() == 'text_block' ): ?>
		<!-- text block -->
		<div class="pv6 measure-wide center text-block f4">
				<?php the_sub_field('text_content'); ?>
		</div>
			<?php endif; 
		endwhile; endif; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- <?php nomadsun_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
