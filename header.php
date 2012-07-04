<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php wp_title( ' | ', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
<?php wp_head() // For plugins ?>
<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/img/favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Vollkorn:400,700&v2' rel='stylesheet' type='text/css'>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="UTF-8"></script>
<script src="<?php bloginfo('template_url') ?>/js/jquery.easing.1.3.js" type="text/javascript" charset="UTF-8"></script>
<script src="<?php bloginfo('template_url') ?>/js/jquery.vgrid.0.1.6.min.js" type="text/javascript" charset="UTF-8"></script>
<script type="text/javascript" src="http://apis.google.com/js/plusone.js">
  {lang: 'ja'}
</script>

</head>


<body>

<div id="wrapper" class="hfeed">

<div id="header">
	<div class="headerTitle">
		<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<p class="site-description"><?php bloginfo( 'description' ); ?></p>
	</div>

	<div id="navi">
	<?php wp_nav_menu(); ?>
	</div>

</div>
