<?php get_header() ?>

<div id="container">
	<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="single-content">
			<div class="entry-meta">
			<?php the_time(__('Y/m/d')) ?> | <?php printf( __( 'Categories: %s' ), get_the_category_list(', ') ) ?> | <?php the_tags(__('Tags:') . ' ', ', '); ?>
			</div>

			<h2 class="entry-title"><?php the_title() ?></h2>
			<div class="entry-content">
			<?php the_content() ?>
			</div>
		</div>

	<?php endwhile; else: ?>
	<?php endif; ?>

			<div id="nav-archive" class="navigation">
				<div class="nav-previous"><?php previous_post_link( '%link', '&laquo; %title' ) ?></div>
				<div class="nav-next"><?php next_post_link( '%link', '%title &raquo;' ) ?></div>
			</div>	
			
	</div>
</div>

<?php get_footer() ?>