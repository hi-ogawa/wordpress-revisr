<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
  tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
});
</script>
<script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
	<div id="header">
	<div id="logo">
		<?php if (is_home()) { ?><h1><?php } ?>
			<a class="blog-title" href="<?php esc_url (home_url('/')); ?>"><?php bloginfo('name'); ?></a>
		<?php if (is_home()) { ?></h1><?php } ?>
		<div class="description"><?php bloginfo('description'); ?></div>
	</div>

	<div id="nav">
	<?php  wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'top-menu', 'depth' => '2' ) ); ?>
	</div>

	<div class="clear"></div>
	</div>
