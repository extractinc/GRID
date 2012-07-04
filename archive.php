<?php get_header() ?>

<div id="container">

<?php the_post() ?>

	<?php if ( is_day() ) : ?>
	<h2 class="archive-title"><?php printf( __( 'Daily Archives: <span>%s</span>'), get_the_time(get_option('date_format')) ) ?></h2>
	<?php elseif ( is_month() ) : ?>
	<h2 class="archive-title"><?php printf( __( 'Monthly Archives: <span>%s</span>'), get_the_time('F Y') ) ?></h2>
	<?php elseif ( is_year() ) : ?>
	<h2 class="archive-title"><?php printf( __( 'Yearly Archives: <span>%s</span>'), get_the_time('Y') ) ?></h2>
	<?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
	<h2 class="archive-title"><?php _e( 'Blog Archives') ?></h2>
	<?php endif; ?>

	<?php rewind_posts() ?>
	<div id="content">

		<?php while ( have_posts() ) : the_post(); ?>
		<div id="archives-content">

			<div class="entry-meta">
			<?php the_time(__('Y/m/d')) ?> | <?php printf( __( 'Categories: %s' ), get_the_category_list(', ') ) ?> | <?php the_tags(__('Tags:') . ' ', ', '); ?>
			</div>
			<h3 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __( 'Permalink to %s' ), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h3>
			<div class="entry-content">
			<?php the_content() ?>
			</div>

		</div>
		<?php endwhile; ?>

			<div id="nav-archive" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '&laquo; Older posts' ) ) ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts &raquo;' ) ) ?></div>
			</div>

	</div>
</div>

<?php get_footer() ?>