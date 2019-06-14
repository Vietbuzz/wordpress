<?php

	// Kill theme modifications
	// remove_theme_mods();

	class GBT_Opt {

		/**
		 * Cache each request to prevent duplicate queries
		 *
		 * @var array
		 */
		protected static $cached = [];

		/**
		 *  We don't need a constructor
		 */
		private function __construct() {}

		/**
		 * Default values for theme options
		 *
		 * @return array
		 */
		private static function theme_defaults() {
			return [	

				// Header
				'header_logo'							=> get_template_directory_uri() . '/src/images/customizer/logo.png',
				'header_logo_width'						=> '266',
				'mobile_header_logo'					=> get_template_directory_uri() . '/src/images/customizer/mobile-logo.png',
				'mobile_header_logo_height'				=> '40',
				'mobile_logo_alt'						=> false,
				'mobile_header_logo_alt'				=> '',
				'header_search'							=> 1,
				'header_user_account'					=> 1,
				'header_cart'							=> 1,
				'header_background_color'				=> '#fff',
				'header_text_color'						=> '#000',

				// Footer
				'footer_text' 							=> __( '&#169; 2019 &#8212; Built with <a href="https://blockshop.wp-theme.design">Block Shop</a> & <a href="https://woocommerce.com">WooCommerce</a>.', 'theretailer' ),
				'footer_back_to_top'             		=> 1,

				// Fonts
				'font_size' 							=> '20',
				'main_font' 							=> array('font-family' => 'Archivo',  'variant' => 'regular'),
				'background_color'						=> '#fff',
				'main_font_color'						=> '#000',

				// Shop
				'qty_style'								=> 'increment',
				'category_menu'							=> 1,
				'shop_pagination'						=> 'infinite_scroll',
				'product_image_border'					=> 1,
				'2nd_image'								=> 1,

				// Product Page
				'related_products'						=> 1,
				'number_related_products'				=> 6,
				'category_navigation'					=> 1,
				'ajax_add_to_cart'						=> 1,
			
				// Blog
				'blog_categories'						=> 1,
				'blog_highlights'						=> 1,
				'blog_widget_area'						=> 1,
				'blog_pagination'						=> 'infinite_scroll',
				'single_featured_img'					=> 1,
				'single_featured_img_size'				=> 'full',
				'single_related_posts'					=> 1,		
			];
		} 

		/**
		 * Switch case for options that need post processing
		 *
		 * @param  [string] $key   [name of option]
		 * @param  [string] $value [value]
		 *
		 * @return [string]        [processed value]
		 */
		private static function processOption($key, $value) {
				$opacity_dark           = .75;
			    $opacity_medium         = .5;
			    $opacity_light          = .3;
			    $opacity_ultra_light    = .07;
				switch ($key) {			
					case 'text_dark':
						return "rgba(" . getbowtied_hex2rgb(self::getOption('main_font_color')) 		. "," . $opacity_dark . ")";
						break;
					case 'text_medium':
						return "rgba(" . getbowtied_hex2rgb(self::getOption('main_font_color')) 		. "," . $opacity_medium . ")";
						break;
					case 'text_light':
						return "rgba(" . getbowtied_hex2rgb(self::getOption('main_font_color')) 		. "," . $opacity_light . ")";
						break;	
					case 'text_ultra_light':
						return "rgba(" . getbowtied_hex2rgb(self::getOption('main_font_color')) 		. "," . $opacity_ultra_light . ")";
						break;
					case 'body_dark':
						return "rgba(" . getbowtied_hex2rgb(self::getOption('background_color')) 		. "," . $opacity_dark . ")";
						break;
					default:
						return $value;
				}

				return $value;
		}

		/**
		 * Return the theme option from cache; if it isn't cached fetch it and cache it
		 *
		 * @param  string $option_name 
		 * @param  string $default     
		 *
		 * @return string
		 */
		public static function getOption( $option_name, $default= '' ) {
			if (isset($_GET["preset"])) 
			{ 
				$preset = $_GET["preset"];
			} else {
				$preset = "";
			}

			if ($preset != "") 
			{
				if ( file_exists( get_template_directory() . '/_presets/'.$preset.'.dat' ) ) 
				{
				$presets_raw = getbowtied_get_local_file_contents(get_template_directory() . '/_presets/'.$preset.'.dat');
				$presets = @unserialize( $presets_raw );
				}
			}

			if (isset($presets) && isset($presets['mods'][ $option_name]) ) { return $presets['mods'][ $option_name]; }

			/* Return cached if possible */
			if ( array_key_exists($option_name, self::$cached) && empty($default) )
				return self::$cached[$option_name];
			/* If no default is given, fetch from theme defaults variable */
			if (empty($default)) {
				$default = array_key_exists($option_name, self::theme_defaults())? self::theme_defaults()[$option_name] : '';
			}

			$opt= get_theme_mod($option_name, $default);
			// echo '<br/>I did a database query<br/>';
			
			/* Cache the result */
			self::$cached[$option_name]= $opt;

			/* Process the variable */
			if ( $opt !== self::processOption($option_name, $opt) ) {
				self::$cached[$option_name]= self::processOption($option_name, $opt);
			}
			

			return self::$cached[$option_name];
		}
	}
?>