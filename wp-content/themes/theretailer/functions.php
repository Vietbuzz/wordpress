<?php

define( 'THE_RETAILER_EXTENDER_IS_ACTIVE', class_exists( 	'TheRetailerExtender' ) );

// -----------------------------------------------------------------------------
// String to Slug
// -----------------------------------------------------------------------------

if ( ! function_exists( 'getbowtied_string_to_slug' ) ) :
function getbowtied_string_to_slug($str) {
	$str = strtolower(trim($str));
	$str = preg_replace('/[^a-z0-9-]/', '_', $str);
	$str = preg_replace('/-+/', "_", $str);
	return $str;
}
endif;

// -----------------------------------------------------------------------------
// Theme Name
// -----------------------------------------------------------------------------

if ( ! function_exists( 'getbowtied_theme_name' ) ) :
function getbowtied_theme_name() {
	$getbowtied_theme = wp_get_theme();
	return $getbowtied_theme->get('Name');
}
endif;

// -----------------------------------------------------------------------------
// Theme Slug
// -----------------------------------------------------------------------------

if ( ! function_exists( 'getbowtied_theme_slug' ) ) :
function getbowtied_theme_slug() {
	$getbowtied_theme = wp_get_theme();
	return getbowtied_string_to_slug( $getbowtied_theme->get('Name') );
}
endif;


// -----------------------------------------------------------------------------
// Theme Author
// -----------------------------------------------------------------------------

if ( ! function_exists( 'getbowtied_theme_author' ) ) :
function getbowtied_theme_author() {
	$getbowtied_theme = wp_get_theme();
	return $getbowtied_theme->get('Author');
}
endif;

// -----------------------------------------------------------------------------
// Theme Description
// -----------------------------------------------------------------------------

if ( ! function_exists( 'getbowtied_theme_description' ) ) :
function getbowtied_theme_description() {
	$getbowtied_theme = wp_get_theme();
	return $getbowtied_theme->get('Description');
}
endif;


// -----------------------------------------------------------------------------
// Theme Version
// -----------------------------------------------------------------------------

if ( ! function_exists( 'getbowtied_theme_version' ) ) :
function getbowtied_theme_version() {
	$getbowtied_theme = wp_get_theme(get_template());
	return $getbowtied_theme->get('Version');
}
endif;


// =============================================================================
// Theme Welcome Page
// =============================================================================

require_once( get_template_directory() 					. '/inc/tgm/class-tgm-plugin-activation.php' );
require_once( get_template_directory() 					. '/inc/tgm/plugins.php' );
require_once( get_template_directory() 					. '/inc/admin/wizard/class-gbt-helpers.php' );
require_once( get_template_directory() 					. '/inc/admin/wizard/class-gbt-install-wizard.php' );
require_once( get_template_directory() 					. '/inc/demo/ocdi-setup.php');

function remove_getbowtied_tools() {
	if (class_exists( 'GetBowtied_Tools' )):
    ?>
	    <div class="notice notice-warning is-dismissible">
	        <p>
	        	<?php _e('The <strong>GetBowtied Tools</strong> plugin is no longer required. You can deactivate and delete it. Use the <strong>Envato Market</strong> plugin for future updates.', 'theretailer');?>
	        	<a href="<?php echo admin_url('themes.php?getbowtied_migrate_tools=1');?>"><?php _e("I'm ready", "theretailer"); ?></a> <?php _e("or", "theretailer"); ?> 
	        	<a href="https://theretailer.wp-theme.help/hc/en-us/articles/206694079-How-to-update-the-theme-" target="_blank"><?php _e('Read More', 'theretailer'); ?> →</a></p>
	    </div>
    <?php
	endif;
}
add_action( 'admin_notices', 'remove_getbowtied_tools' );

if (!function_exists('getbowtied_migrate_tools')) {
add_action('admin_init', 'getbowtied_migrate_tools');
function getbowtied_migrate_tools() {
	if (isset($_GET['getbowtied_migrate_tools'])) {
		if (class_exists('GetBowtied_Tools')) {
			deactivate_plugins( 'getbowtied-tools/getbowtied-tools.php' );

			if (!class_exists('Envato_Market') || !class_exists('OCDI_Plugin') || !class_exists('WooCommerce') || !defined('WPB_VC_VERSION')) {
				wp_redirect(admin_url('themes.php?page=tgmpa-install-plugins'));
			} else {
				wp_redirect(admin_url('admin.php?page=envato-market'));
			}
		}
	}
}
}

/**
 * On theme activation redirect to splash page
 */
global $pagenow;

if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) {

	wp_redirect(admin_url("themes.php?page=gbt-setup")); // Your admin page URL
	
}

require_once get_template_directory() . '/inc/_vendor/kirki/kirki.php';

define( 'GETBOWTIED_KIRKI_IS_ACTIVE', 			class_exists( 	'Kirki' ) );

require_once get_template_directory() . '/inc/customizer/backend.php';
require_once get_template_directory() . '/inc/customizer/frontend.php';
require_once get_template_directory() . '/inc/customizer/read_options.php';
require_once get_template_directory() . '/inc/customizer/styles.php';

include_once('inc/custom-styles/custom_styles.php'); // Load Custom Styles
include_once('inc/custom-styles/gutenberg_styles.php'); // Load Gutenberg Custom Styles
include_once('inc/paginate.php'); // Load Pagination

/******************************************************************************/
/***************** display admin bar for shop manager ***************************/
/******************************************************************************/

if ( current_user_can( 'shop_manager' ) ) {
	add_filter('show_admin_bar', '__return_true');
}

/*********************************************/
/****************** STYLES *******************/
/*********************************************/

function theretailer_styles() {	

	global $theretailer_theme_options;
	
	wp_enqueue_style('theme-fonts', get_template_directory_uri() . '/inc/fonts/theme-fonts/style.css', array(), '1.0', 'all' );
	
	if ((isset($theretailer_theme_options['progress_bar'])) && ($theretailer_theme_options['progress_bar'] == "1")) {
		wp_enqueue_style('nprogress', get_template_directory_uri() . '/css/vendor/nprogress/nprogress.css', array(), '0.1.6', 'all' );
	}

	wp_enqueue_style('select2', get_template_directory_uri() . '/css/vendor/select2/select2.css', array(), '3.4.5', 'all' );
	wp_enqueue_style('fresco', get_template_directory_uri() . '/css/vendor/fresco/fresco.css', array(), '1.2.7', 'all' );
	wp_enqueue_style('getbowtied_swiper_styles', get_template_directory_uri() . '/css/vendor/swiper/swiper.css', array(), '3.3.1', 'all' );
	wp_enqueue_style('the_retailer_gutenberg', get_template_directory_uri() .'/css/gutenberg.css', false, "1.0", 'all');
	
	wp_enqueue_style('stylesheet', get_stylesheet_uri(), array(), NULL, 'all');
}  
add_action( 'wp_enqueue_scripts', 'theretailer_styles', 99 );

// admin area
function the_retailer_admin_styles() {
    if ( is_admin() ) {
		wp_enqueue_style('the_retailer_admin_custom', get_template_directory_uri() .'/css/admin/admin-styles.css', false, NULL, 'all');
    }
}
add_action( 'admin_enqueue_scripts', 'the_retailer_admin_styles' );

function the_retailer_admin_scripts() {
    if ( is_admin() ) {
		wp_enqueue_script('the_retailer_admin_notices', get_template_directory_uri() .'/js/admin/admin-notices.js', array('jquery'), NULL, 'all');
    }
}
add_action( 'admin_enqueue_scripts', 'the_retailer_admin_scripts' );


/*********************************************/
/****************** SCRIPTS ******************/
/*********************************************/


function theretailer_scripts() {  

	global $theretailer_theme_options;

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	
	if ((isset($theretailer_theme_options['progress_bar'])) && ($theretailer_theme_options['progress_bar'] == "1")) {
		wp_enqueue_script('nprogress', get_template_directory_uri() . '/js/vendor/nprogress/nprogress.js', array('jquery'), '0.1.6', TRUE);
	}

	wp_enqueue_script('customSelect', get_template_directory_uri() . '/js/vendor/customSelect/jquery.customSelect.min.js', array('jquery'), '0.3.0', TRUE);
	wp_enqueue_script('select2', get_template_directory_uri() . '/js/vendor/select2/select2.min.js', array('jquery'), '3.4.5', TRUE);
	wp_enqueue_script('fresco', get_template_directory_uri() . '/js/vendor/fresco/fresco.js', array('jquery'), '1.4.11', TRUE);
	wp_enqueue_script('getbowtied_swiper_scripts', get_template_directory_uri() . '/js/vendor/swiper/swiper.jquery'.$suffix.'.js', array('jquery'), '3.3.1', TRUE);
	
	wp_enqueue_script('init', get_template_directory_uri() . '/js/init.js', array('jquery'), NULL, TRUE);
	wp_enqueue_script('getbowtied_sliders_scripts', get_template_directory_uri() . '/js/sliders.js', array('jquery'), NULL, TRUE);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}	

}

add_action( 'wp_enqueue_scripts', 'theretailer_scripts', 99 );



/******************************************************************************/
/******************** Revolution Slider set as Theme **************************/
/******************************************************************************/

if(function_exists('set_revslider_as_theme')) {
	set_revslider_as_theme();
}


/******************************************************************************/
/*************************** Visual Composer **********************************/
/******************************************************************************/

if (class_exists('WPBakeryVisualComposerAbstract')) {
	
	add_action( 'init', 'visual_composer_stuff' );
	function visual_composer_stuff() {
		
		// Modify and remove existing shortcodes from VC
		include_once('inc/shortcodes/visual-composer/custom_vc.php');
		
		// VC Templates
		$vc_templates_dir = get_template_directory() . '/inc/shortcodes/visual-composer/vc_templates/';
		vc_set_shortcodes_templates_dir($vc_templates_dir);
				
		// Remove vc_teaser
		if (is_admin()) :
			function remove_vc_teaser() {
				remove_meta_box('vc_teaser', '' , 'side');
			}
			add_action( 'admin_head', 'remove_vc_teaser' );
		endif;
	
	}

}

add_action( 'vc_before_init', 'theretailer_vcSetAsTheme' );
function theretailer_vcSetAsTheme() {
	vc_manager()->disableUpdater(true);
	vc_set_as_theme();
}

/*********************************************/
/***** adding shortcodes to excerpts *********/
/*********************************************/

add_filter('the_excerpt', 'do_shortcode');

/*********************************************/
/******* modify the excerpt read more ********/
/*********************************************/

function new_excerpt_more( $excerpt ) {
	global $post;
	$excerpt_more = '';
	$trans = array(
		"[...]" => $excerpt_more, //Wordpress < v3.5.2
		"[&hellip;]" => $excerpt_more //Wordpress >= v3.6
	);
	return strtr($excerpt, $trans);
}
add_filter( 'wp_trim_excerpt', 'new_excerpt_more' );

/***************************************************/
/********* Remove customizer WP sections ***********/
/***************************************************/

add_action('customize_register', 'theretailer_remove_wp_customizer_sections');
function theretailer_remove_wp_customizer_sections() {
	global $wp_customize;
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
}

/***************************************************/
/**************** Enable excerpts ******************/
/***************************************************/

add_action('init', 'theretailer_post_type_support');
function theretailer_post_type_support() {
	add_post_type_support( 'page', 'excerpt' );
	add_post_type_support( 'post', 'block-editor' );
}

/******************************************************/
/**************** CUSTOM IMAGE SIZES ******************/
/******************************************************/

add_image_size('recent_posts_shortcode', 480, 480, true);
add_image_size('review_thumb', 140, 140, true);

/*****************************************************************/
/******************* THE RETAILER SETTINGS ***********************/
/*****************************************************************/

if ( ! isset( $content_width ) ) $content_width = 620; /* pixels */

if ( ! function_exists( 'theretailer_setup' ) ) :
function theretailer_setup() {

	global $theretailer_theme_options;
	
	$theretailer_theme_options['product_image_zoom'] = GBT_Opt::getOption('product_image_zoom', 1);

	add_theme_support( 'woocommerce', array(
		'gallery_thumbnail_image_width' => 130,
		)
	);
	add_theme_support( "title-tag" );
	add_theme_support( 'customize-selective-refresh-widgets' );

	// gutenberg
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );

	if( isset($theretailer_theme_options['product_image_zoom']) && $theretailer_theme_options['product_image_zoom'] ) {
		add_theme_support( 'wc-product-gallery-zoom' );
	}

    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

	add_editor_style( 'css/admin/editor-styles.css' );
	
	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );
	
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on theretailer, use a find and replace
	 * to change 'theretailer' to the name of your theme in all the template files
	 */

	load_theme_textdomain( 'theretailer', get_template_directory() . '/languages' );
	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable($locale_file) ) require_once($locale_file);

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	
	function theretailer_register_custom_background() {
		$args = array(
			'default-color' => 'ffffff',
			'default-image' => '',
		);
	
		$args = apply_filters( 'theretailer_custom_background_args', $args );
	
		add_theme_support( 'custom-background', $args );
	}
	add_action( 'after_setup_theme', 'theretailer_register_custom_background' );
	
	

	function theretailer_add_editor_styles() {
		add_editor_style( 'custom-editor-style.css' );
	}
	add_action( 'init', 'theretailer_add_editor_styles' );

	/**
	 * This theme uses wp_nav_menu() in 4 location.
	 */
	register_nav_menus( array(
		'tools' => __( 'Top Header Navigation', 'theretailer' ),
		'primary' => __( 'Main Navigation', 'theretailer' ),
		'secondary' => __( 'Secondary Navigation', 'theretailer' )
	) );

	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'video', 'audio', 'gallery', 'image', 'status', 'quote') );
}
endif; // theretailer_setup
add_action( 'after_setup_theme', 'theretailer_setup' );



/*******************************************************/
/******************* WOOCOMMERCE ***********************/
/*******************************************************/


function woocommerce_output_related_products() {
	
	$args = array(
		'posts_per_page' => 12,
		'columns' => 12,
		'orderby' => 'rand'
	);

	woocommerce_related_products( apply_filters( 'woocommerce_output_related_products_args', $args ) );
}

if (!isset($theretailer_theme_options['gb_header_style'])) $theretailer_theme_options['gb_header_style'] = "0";


// change breadcrumb defaults delimiter
add_filter( 'woocommerce_breadcrumb_defaults', 'theretailer_change_breadcrumb_delimiter' );
function theretailer_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = '&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;';
	return $defaults;
}


/******************************************************************************/
/****************************** Ajax url **************************************/
/******************************************************************************/

add_action('wp_head','theretailer_ajaxurl');
function theretailer_ajaxurl() {
?>
    <script type="text/javascript">
        var theretailer_ajaxurl = '<?php echo admin_url('admin-ajax.php', 'relative'); ?>';
    </script>
<?php
}

/******************************************************************************/
/* WooCommerce Update Number of Items in the cart *****************************/
/******************************************************************************/
add_filter('woocommerce_add_to_cart_fragments', 'theretailer_refresh_minicart_1');
function theretailer_refresh_minicart_1($fragments) 
{
	global $woocommerce;
	ob_start(); ?>
        
    <div class="overview"><?php echo WC()->cart->get_cart_total(); ?> <span class="minicart_items">/ <?php echo sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'theretailer' ), WC()->cart->get_cart_contents_count() ); ?></span></div>

	<?php
	$fragments['.overview'] = ob_get_clean();
	return $fragments;
}

add_filter('woocommerce_add_to_cart_fragments', 'theretailer_refresh_minicart_2');
function theretailer_refresh_minicart_2($fragments) 
{
	global $woocommerce;
	ob_start(); ?>
        
    <div class="gb_cart_contents_count"><?php echo esc_html(WC()->cart->get_cart_contents_count()); ?></div>

	<?php
	$fragments['.gb_cart_contents_count'] = ob_get_clean();
	return $fragments;
}

add_filter('woocommerce_add_to_cart_fragments', 'theretailer_refresh_minicart_3');
function theretailer_refresh_minicart_3($fragments) 
{
	global $woocommerce;
	ob_start(); ?>
    
    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="gbtr_little_shopping_bag_wrapper_mobiles"><span><?php echo WC()->cart->get_cart_contents_count(); ?></span></a>

	<?php
	$fragments['.gbtr_little_shopping_bag_wrapper_mobiles'] = ob_get_clean();
	return $fragments;
}

add_filter('woocommerce_add_to_cart_fragments', 'theretailer_refresh_minicart_4');
function theretailer_refresh_minicart_4($fragments) 
{
	global $woocommerce;
	ob_start(); ?>
    
    <span class="items_number"><?php echo WC()->cart->get_cart_contents_count(); ?></span>

	<?php
	$fragments['.items_number'] = ob_get_clean();
	return $fragments;
}






// Sidebars
function theretailer_widgets_init() {
	
	global $theretailer_theme_options;
	
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => __( 'Sidebar', 'theretailer' ),
			'id' => 'sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		));
		
		register_sidebar(array(
			'name' => __( 'Product listing', 'theretailer' ),
			'id' => 'widgets_product_listing',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		));

		register_sidebar(array(
			'name' => __( 'Light footer', 'theretailer' ),
			'id' => 'widgets_light_footer',
			'before_widget' => '<div class="grid_x"><div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div></div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		));
		
		
		register_sidebar(array(
			'name' => __( 'Dark footer', 'theretailer' ),
			'id' => 'widgets_dark_footer',
			'before_widget' => '<div class="grid_x"><div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div></div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		));
	}
}
add_action( 'widgets_init', 'theretailer_widgets_init', 99 );



/*********************************************************************************************/
/******************* ADD prettyPhoto rel to [gallery] with link=file  ************************/
/*********************************************************************************************/

add_filter( 'wp_get_attachment_link', 'sant_prettyadd', 10, 6);
function sant_prettyadd ($content, $id, $size, $permalink, $icon, $text) {
    if ($permalink) {
    	return $content;    
    }
    $content = preg_replace("/<a/","<span class=\"fresco\" data-fresco-group=\"\"", $content, 1);
    return $content;
}


//==============================================================================
//	Archive Products per Row and Page Limits
//==============================================================================

add_action( 'after_setup_theme', 'getbowtied_woocommerce_support' );
function getbowtied_woocommerce_support() {

	add_theme_support( 'woocommerce', array(

    // Product grid theme settings
    'product_grid'        => array(
        'default_rows'    => get_option('woocommerce_catalog_rows', 5),
        'min_rows'        => 2,
        'max_rows'        => '',

        'default_columns' => 4,
        'min_columns'     => 4,
        'max_columns'     => 4,

    	),
	) );
}


/*********************************************************************************************/
/******************************** Disable PRETTY PHOTO ***************************************/
/*********************************************************************************************/



// Remove Woocommerce prettyPhoto
add_action( 'wp_enqueue_scripts', 'the_retailer_remove_woo_lightbox', 99 );
function the_retailer_remove_woo_lightbox() {
	wp_dequeue_script('prettyPhoto-init');
}

/*********************************************************************************************/
/*********** Remove Admin Bar - Only display to administrators *******************************/
/*********************************************************************************************/

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
		show_admin_bar(false);
	}
}

/*********************************************************************************************/
/************************** WooCommerce Custom Out of Stock **********************************/
/*********************************************************************************************/


if ( !function_exists( 'theretailer_custom_get_availability')):
add_filter( 'woocommerce_get_availability', 'theretailer_custom_get_availability', 1, 2);
function theretailer_custom_get_availability( $availability, $_product ) {
	if ( !$_product->is_in_stock() ) $availability['availability'] = __(GBT_Opt::getOption('out_of_stock_text'), 'theretailer');
	return $availability;
}
endif;

/*********************************************************************************************/
/****************************** WooCommerce Custom Sale **************************************/
/*********************************************************************************************/
if ( !function_exists( 'theretailer_custom_sale_flash') ) :
add_filter('woocommerce_sale_flash', 'theretailer_custom_sale_flash', 10, 3);
function theretailer_custom_sale_flash($text, $post, $_product)
{
	if (!empty(GBT_Opt::getOption('sale_text')) && !empty(GBT_Opt::getOption('sale_text'))) {
    	return '<span class="onsale">' . sprintf(__('%s', 'theretailer'), GBT_Opt::getOption('sale_text')) . '</span>';
	}
}
endif;

/******************************************************************************/
/****** Set woocommerce images sizes ******************************************/
/******************************************************************************/

if ( ! function_exists('theretailer_woocommerce_image_dimensions') ) :
	function theretailer_woocommerce_image_dimensions() {
		global $pagenow;
	 
		if ( ! isset( $_GET['activated'] ) || $pagenow != 'themes.php' ) {
			return;
		}

	  	$catalog = array(
			'width' 	=> '190',	// px
			'height'	=> '243',	// px
			'crop'		=> 1 		// true
		);

		$single = array(
			'width' 	=> '510',	// px
			'height'	=> '652',	// px
			'crop'		=> 1 		// true
		);

		$thumbnail = array(
			'width' 	=> '114',	// px
			'height'	=> '145',	// px
			'crop'		=> 0 		// false
		);

		// Image sizes
		update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
		update_option( 'shop_single_image_size', $single ); 		// Single product image
		update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
	}
	add_action( 'after_switch_theme', 'theretailer_woocommerce_image_dimensions', 1 );
endif;

// -----------------------------------------------------------------------------
// Convert hex to rgb
// -----------------------------------------------------------------------------

function getbowtied_hex2rgb($hex) {
	$hex = str_replace("#", "", $hex);
	
	if(strlen($hex) == 3) {
		$r = hexdec(substr($hex,0,1).substr($hex,0,1));
		$g = hexdec(substr($hex,1,1).substr($hex,1,1));
		$b = hexdec(substr($hex,2,1).substr($hex,2,1));
	} else {
		$r = hexdec(substr($hex,0,2));
		$g = hexdec(substr($hex,2,2));
		$b = hexdec(substr($hex,4,2));
	}
	$rgb = array($r, $g, $b);
	return implode(",", $rgb); // returns the rgb values separated by commas
	//return $rgb; // returns an array with the rgb values
}

/******************************************************************************/
/****** Limit number of cross-sells *******************************************/
/******************************************************************************/
add_filter('woocommerce_cross_sells_total', 'cartCrossSellTotal');
function cartCrossSellTotal($total) {
	$total = '1';
	return $total;
}

/******************************************************************************/
/****** HookMeUp admin notification *******************************************/
/******************************************************************************/
add_action( 'admin_notices', 'tr_hookmeup_notification' );
if( !function_exists('tr_hookmeup_notification') ) {
	function tr_hookmeup_notification() {
		if ( ! get_option('dismissed-hookmeup-notice', FALSE ) && !class_exists('HookMeUp') ) : ?>
			<div class="notice-warning settings-error notice is-dismissible hookmeup_notice">
				<p>
					<strong>
						<span>This theme recommends the following plugin: <em><a href="https://wordpress.org/plugins/hookmeup/" target="_blank">HookMeUp – Additional Content for WooCommerce</a></em>.</span>
					</strong>
				</p>
			</div>
<?php 	endif; 

		if ( ! get_option('dismissed-extender-notice', FALSE ) ) : ?>
			<div class="notice-warning settings-error notice is-dismissible extender_notice">
				<p>
					<strong>
						<span>A few features were moved to The Retailer Extender, but stay worry free, you won't be missing anything while the theme is lighter. <em><a href="https://theretailer.wp-theme.help/hc/en-us/articles/206694069-Updates-History" target="_blank">What's new in The Retailer 2.12?</a></em></span>
					</strong>
				</p>
			</div>
<?php 	endif;

		if ( !get_option('dismissed-portfolio-notice', FALSE ) && !class_exists('TheRetailerPortfolio') ) : ?>
			<div class="notice-warning settings-error notice is-dismissible portfolio_notice">
				<p>
					<strong>
						<span>The Retailer's Portfolio is now a plugin. <a href="themes.php?page=tgmpa-install-plugins">Install Plugin</a> and read more about <em><a href="https://theretailer.wp-theme.help/hc/en-us/articles/206694069-Updates-History" target="_blank">What's new in The Retailer 2.12?</a></em></span>
					</strong>
				</p>
			</div>
<?php 	endif;
	}
}

if ( ! function_exists( 'tr_gbt_dismiss_dashboard_notice' ) ) {
	function tr_gbt_dismiss_dashboard_notice() {
		if( $_POST['notice'] == 'hookmeup' ) {
			update_option('dismissed-hookmeup-notice', TRUE );
		}

		if( $_POST['notice'] == 'extender' ) {
			update_option('dismissed-extender-notice', TRUE );
		}

		if( $_POST['notice'] == 'portfolio' ) {
			update_option('dismissed-portfolio-notice', TRUE );
		}
	}
	add_action( 'wp_ajax_gbt_dismiss_dashboard_notice', 'tr_gbt_dismiss_dashboard_notice' );
}

//==============================================================================
// Show Woocommerce Cart Widget Everywhere
//==============================================================================
add_filter( 'woocommerce_widget_cart_is_hidden', function() { return false; }, 10, 1 );