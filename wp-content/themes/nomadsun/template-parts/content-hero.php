<!-- using an inline style attribute to attach our hero image as a css background directly onto the element -->

<!-- here we make hero have min heigh of vh100, center it, add flexbox and centre vertically and horizontally -->
<section class="hero min-vh-100 cover bg-center flex items-center justify-center" style="
<?php if( get_field('hero_image') ): ?>
    background-image: url(<?php the_field('hero_image'); ?>);
	<?php endif; ?>">

<!-- make text white and centre it -->
	<div class="hero-content white tc">

	<!-- location title - make it bold, have a 0 margin and uppercase -->
		<h1 class="hero-heading archivo b mt0 mb3 ttu"><?php the_title();?></h1>  

	<!-- subheading -->
	<?php if( get_field('subhead') ): ?>
    <p class="hero-subhead tenor mb6 mt0 ttu"><?php the_field('subhead'); ?></p>
	<?php endif; ?>

	<!-- formatted date -->
	<p class="date f6 archivo ma0 ttu tracked"> 
		<?php if( get_field('date') ): ?> 
	<!-- here we convert our date into format php can work with and format it to be month and year -->
		<?php echo date("F Y", strtotime(get_field('date'))); ?>
	</p>
<?php endif; ?>

</div>
		</section>