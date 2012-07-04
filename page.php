<?php get_header() ?>

<div id="container">
	<div id="content">
<?php the_post() ?>
		<div id="PagePost">
		<h2 class="page-title"><?php the_title() ?></h2>
			<div id="page-content">
				<div class="entry-content">
				<?php the_content() ?>
				</div>
			</div>
		</div>

	</div>
</div>

<?php get_footer() ?>