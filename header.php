<?php
global $edd_options; // EDD plugin settings
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--[if lte IE 9]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie.css" type="text/css" media="screen" /><![endif]-->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div class="container" id="header">
	<div class="row" id="logo-wrap">
		<div class="twelvecol last">	
			<a href="<?php bloginfo('url');?>" title="<?php bloginfo('name');?>">
				<h1 id="site-name"><?php bloginfo('name'); ?></h1>
			</a>
		</div>
	</div><!--end .row-->
</div><!-- end .container#header-->
<div class="container" id="navigation-wrap">
	<div class="row" id="main-nav">
		<?php wp_nav_menu(array('theme_location' => 'main_nav','container'	=>	''));?>
		<?php if(function_exists('edd_get_settings')) { ?>
			<span id="header-cart">
				<a href="<?php echo edd_get_checkout_uri(); ?>">
					Cart (<span class="header-cart edd-cart-quantity"><?php echo edd_get_cart_quantity(); ?></span>)
				</a>
			</span>
		<?php } ?>		
	</div>
</div><!--end .container#navigation-wrap-->
