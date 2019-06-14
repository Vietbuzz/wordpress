<?php

// theme explorer
if (file_exists(dirname( __FILE__ ) . '/_theme-explorer/header.php')) { 
	//if (session_status() == PHP_SESSION_NONE) {
	if(!isset($_SESSION)) {
		session_start();
	}
}

global $woo_options;
global $woocommerce;
global $wp_version;
global $theretailer_theme_options;

$header_style = "";

if (isset($_GET["header_style"])) { $header_style = $_GET["header_style"]; }

if ($header_style == "default") {
    $theretailer_theme_options['gb_header_style'] = 0;
} elseif ($header_style == "centered") {
    $theretailer_theme_options['gb_header_style'] = 1;
} elseif ($header_style == "under") {
    $theretailer_theme_options['gb_header_style'] = 2;
}

?>

<!DOCTYPE html>
<head>

	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Custom Header JS Code -->
	<?php if ( THE_RETAILER_EXTENDER_IS_ACTIVE && get_option( 'tr_custom_code_header_js', '' ) != '' ) : ?>
	    <?php echo get_option( 'tr_custom_code_header_js', '' ); ?>
	<?php endif; ?>
		
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php if (file_exists(dirname( __FILE__ ) . '/_theme-explorer/header.php')) { include_once('_theme-explorer/header.php'); } ?>
    
    <div id="global_wrapper" class="<?php echo ($theretailer_theme_options['gb_layout'] == "boxed") ? 'boxed-content' : 'full-content' ?>">
    
    <?php if (file_exists(get_template_directory().'/_demo_top_message.php')) include_once('_demo_top_message.php'); ?>
  
    <?php if ( (!GBT_Opt::getOption('hide_topbar')) || (GBT_Opt::getOption('hide_topbar') == 0) ) { ?>
    	<?php include_once('header_topbar.php'); ?>    
    <?php } ?>
    
    <?php if ((!$theretailer_theme_options['gb_header_style']) || ($theretailer_theme_options['gb_header_style'] == "0")) { ?>
    	<?php include_once('header_style_default.php'); ?>
	<?php } else if (($theretailer_theme_options['gb_header_style'] == "1")) { ?>
    	<?php include_once('header_style_centered.php'); ?>
    <?php } else if (($theretailer_theme_options['gb_header_style'] == "2")) { ?>
    	<?php include_once('header_style_menu_under.php'); ?>
    <?php } ?>
		
        <?php
		if ((isset($theretailer_theme_options['progress_bar'])) && ($theretailer_theme_options['progress_bar'] == "1")) {
		?>
        <div class="progress-bar-wrapper"></div>
        <?php } ?>