<?php get_header() ?>

<div id="container">

	<div class="topForm">
	<form action="#" method="get" style="margin-bottom:10px;">
		<input type="button" id="hsort" value="Date Sort" />
		<input type="button" id="rsort" value="Random Sort" />
	</form>
	</div>
	
	<div id="grid-content">
		<?php while ( have_posts() ) : the_post(); ?>
		<div id="grid-img">
		<a href="<?php the_permalink() ?>" rel="bookmark"><img src="<?php echo catch_that_image(); ?>" /></a>
		<p><?php the_time(__('Y/m/d')) ?></p>
		</div>
		<?php endwhile; ?>
	</div>

		<div id="nav-below" class="navigation">
			<div class="nav-previous"><?php next_posts_link( __( '&laquo; Older posts' ) ) ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts &raquo;' ) ) ?></div>
		</div>

</div>

<?php get_footer() ?>