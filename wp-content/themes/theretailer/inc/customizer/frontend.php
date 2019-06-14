<?php 
function theretailer_theme_options() {
	global $theretailer_theme_options;
	$theretailer_theme_options = get_theme_mods();

	//==============================================================================
	//	Header
	//==============================================================================
	$theretailer_theme_options['hide_topbar'] = GBT_Opt::getOption('hide_topbar', 0);
	$theretailer_theme_options['topbar_text'] = GBT_Opt::getOption('topbar_text', 'FREE SHIPPING ON ALL ORDERS OVER $75');
	$theretailer_theme_options['search_input_style'] = GBT_Opt::getOption('search_input_style', 0);
	$theretailer_theme_options['topbar_bg_color'] = GBT_Opt::getOption('topbar_bg_color', '#000');
	$theretailer_theme_options['topbar_color'] = GBT_Opt::getOption('topbar_color', '#FFF');
	$theretailer_theme_options['top_bar_font_size'] = GBT_Opt::getOption('top_bar_font_size', '10');
	$theretailer_theme_options['gb_header_style'] = GBT_Opt::getOption('gb_header_style', '0');
	$theretailer_theme_options['header_bg_color'] = GBT_Opt::getOption('header_bg_color', '#f4f4f4');
    $theretailer_theme_options['sticky_header'] = GBT_Opt::getOption('sticky_header', 1);
    $theretailer_theme_options['primary_menu_color'] = GBT_Opt::getOption('primary_menu_color', '#000');
	$theretailer_theme_options['main_navigation_font_size'] = GBT_Opt::getOption('main_navigation_font_size', '12');
 	$theretailer_theme_options['secondary_menu_color'] = GBT_Opt::getOption('secondary_menu_color', '#777');
 	$theretailer_theme_options['secondary_navigation_font_size'] = GBT_Opt::getOption('secondary_navigation_font_size', '12');
 	$theretailer_theme_options['menu_header_top_padding_1_7'] = GBT_Opt::getOption('menu_header_top_padding_1_7', '40');
 	$theretailer_theme_options['menu_header_bottom_padding_1_7'] = GBT_Opt::getOption('menu_header_bottom_padding_1_7', '40');
 	$theretailer_theme_options['shopping_bag_in_header'] = GBT_Opt::getOption('shopping_bag_in_header', 1);
 	$theretailer_theme_options['shopping_bag_style'] = GBT_Opt::getOption('shopping_bag_style', 'style2');

 	//==============================================================================
 	//	General
 	//==============================================================================
 	$theretailer_theme_options['gb_layout'] = GBT_Opt::getOption('gb_layout', 'full');
 	$theretailer_theme_options['boxed_layout_width'] = GBT_Opt::getOption('boxed_layout_width', '1100');
 	$theretailer_theme_options['page_comments'] = GBT_Opt::getOption('page_comments', 0);
 	$theretailer_theme_options['show_full_post'] = GBT_Opt::getOption('show_full_post', 0);
 	$theretailer_theme_options['featured_image_single_post'] = GBT_Opt::getOption('featured_image_single_post', 1);
 	$theretailer_theme_options['progress_bar'] = GBT_Opt::getOption('progress_bar', 0);

 	//==============================================================================
 	//	Shop
 	//==============================================================================
 	$theretailer_theme_options['catalog_mode'] = GBT_Opt::getOption('catalog_mode', 0);
 	$theretailer_theme_options['sidebar_listing'] = GBT_Opt::getOption('sidebar_listing', 0);
 	$theretailer_theme_options['flip_product'] = GBT_Opt::getOption('flip_product', '0');
 	$theretailer_theme_options['flip_product_mobiles'] = GBT_Opt::getOption('flip_product_mobiles', '0');
 	$theretailer_theme_options['category_listing'] = GBT_Opt::getOption('category_listing', '0');
 	$theretailer_theme_options['ratings_on_product_listing'] = GBT_Opt::getOption('ratings_on_product_listing', 0);
 	$theretailer_theme_options['ratings_styles'] = GBT_Opt::getOption('ratings_styles', '0');
 	$theretailer_theme_options['out_of_stock_text'] = GBT_Opt::getOption('out_of_stock_text', 'Out of Stock');
 	$theretailer_theme_options['sale_text'] = GBT_Opt::getOption('sale_text', 'Sale!');
    $theretailer_theme_options['breadcrumbs'] = GBT_Opt::getOption('breadcrumbs', 0);
	
	//==============================================================================
	//	Footer
	//==============================================================================             
    $theretailer_theme_options['expandable_footer_mobiles'] = GBT_Opt::getOption('expandable_footer_mobiles', 1);
    $theretailer_theme_options['light_footer_all_site'] = GBT_Opt::getOption('light_footer_all_site', '0');
    $theretailer_theme_options['light_footer_layout'] = GBT_Opt::getOption('light_footer_layout', '4col');
    $theretailer_theme_options['primary_footer_bg_color'] = GBT_Opt::getOption('primary_footer_bg_color', '#F4F4F4');	
    $theretailer_theme_options['dark_footer_all_site'] = GBT_Opt::getOption('dark_footer_all_site', '0');	  
    $theretailer_theme_options['dark_footer_layout'] = GBT_Opt::getOption('dark_footer_layout', '4col');	  
    $theretailer_theme_options['secondary_footer_bg_color'] = GBT_Opt::getOption('secondary_footer_bg_color', '#000');	  
    $theretailer_theme_options['secondary_footer_color'] = GBT_Opt::getOption('secondary_footer_color', '#fff');	  
    $theretailer_theme_options['secondary_footer_title_border_style'] = GBT_Opt::getOption('secondary_footer_title_border_style', 'solid');	
    $theretailer_theme_options['secondary_footer_title_border_width'] = GBT_Opt::getOption('secondary_footer_title_border_width', '2');	
    $theretailer_theme_options['secondary_footer_title_border_color'] = GBT_Opt::getOption('secondary_footer_title_border_color', '#3d3d3d');	
    $theretailer_theme_options['secondary_footer_borders_color'] = GBT_Opt::getOption('secondary_footer_borders_color', '#3d3d3d');	
    $theretailer_theme_options['footer_logos'] = GBT_Opt::getOption('footer_logos', get_template_directory_uri() . '/images/customizer/payment_cards.png');	
    $theretailer_theme_options['copyright_text'] = GBT_Opt::getOption('copyright_text', '&#169; <strong>Get Bowtied</strong> - Elite ThemeForest Author');	
    $theretailer_theme_options['copyright_bar_bg_color'] = GBT_Opt::getOption('copyright_bar_bg_color', '#000');	
    $theretailer_theme_options['copyright_text_color'] = GBT_Opt::getOption('copyright_text_color', '#a8a8a8');	
    $theretailer_theme_options['copyright_bar_top_border_style'] = GBT_Opt::getOption('copyright_bar_top_border_style', 'solid');	
    $theretailer_theme_options['copyright_bar_top_border_width'] = GBT_Opt::getOption('copyright_bar_top_border_width', '2');	
    $theretailer_theme_options['copyright_bar_top_border_color'] = GBT_Opt::getOption('copyright_bar_top_border_color', '#3d3d3d');


	//==============================================================================
	//	Product
	//==============================================================================
    $theretailer_theme_options['products_layout'] = GBT_Opt::getOption('products_layout', 0);
    $theretailer_theme_options['product_image_zoom'] = GBT_Opt::getOption('product_image_zoom', 1);
    $theretailer_theme_options['reviews_on_product_page'] = GBT_Opt::getOption('reviews_on_product_page', 1);
    $theretailer_theme_options['related_products_on_product_page'] = GBT_Opt::getOption('related_products_on_product_page', 1);


    //==============================================================================
    //	My Account
    //==============================================================================
    $theretailer_theme_options['registration_content'] = GBT_Opt::getOption('registration_content', '<h3>Your Registration text here</h3>
                        <ul>
                        <li>Your text here</li>
                        <li>Your text here</li>
                        <li>Your text here</li>
                        <li>Your text here</li>
                        </ul>');
    $theretailer_theme_options['login_content'] = GBT_Opt::getOption('login_content', '<h3>Your Login text here</h3>
                        <ul>
                        <li>Your text here</li>
                        <li>Your text here</li>
                        <li>Your text here</li>
                        <li>Your text here</li>
                        </ul>');


    //==============================================================================
    //  Portfolio
    //==============================================================================
    if( !get_option( 'tr_portfolio_options_import', false ) ) {
        $theretailer_theme_options['portfolio_items_per_row'] = GBT_Opt::getOption('portfolio_items_per_row', 3);
        update_option('tr_portfolio_items_per_row', $theretailer_theme_options['portfolio_items_per_row']);
        $theretailer_theme_options['portfolio_items_order_by'] = GBT_Opt::getOption('portfolio_items_order_by', 'date');
        update_option('tr_portfolio_items_order_by', $theretailer_theme_options['portfolio_items_order_by']);
        $theretailer_theme_options['portfolio_items_order'] = GBT_Opt::getOption('portfolio_items_order', 'DESC');
        update_option('tr_portfolio_items_order', $theretailer_theme_options['portfolio_items_order']);
        update_option( 'tr_portfolio_options_import', true );
    }

    //==============================================================================
    //	Styling
    //==============================================================================
    $theretailer_theme_options['site_logo'] = GBT_Opt::getOption('site_logo');
    $theretailer_theme_options['site_logo_retina'] = GBT_Opt::getOption('site_logo_retina');
    $theretailer_theme_options['accent_color'] = GBT_Opt::getOption('accent_color', '#b39964');
    $theretailer_theme_options['primary_color'] = GBT_Opt::getOption('primary_color', '#000');
    $theretailer_theme_options['main_bg_color'] = GBT_Opt::getOption('main_bg_color', '#fff');
    $theretailer_theme_options['main_bg'] = GBT_Opt::getOption('main_bg');

    //==============================================================================
    //	Fonts
    //==============================================================================
    $theretailer_theme_options['new_gb_main_font'] = GBT_Opt::getOption('new_gb_main_font', array('font-family'=>'Radnika Next Alt'));
    $theretailer_theme_options['new_gb_secondary_font'] = GBT_Opt::getOption('new_gb_secondary_font', array('font-family'=> 'HK Nova'));

    //==============================================================================
    //  IMPORTED OPTIONS 
    //==============================================================================
    $t_temp = get_theme_mod('secondary_footer_title_border', false);
    // var_dump(get_options());
    if (!empty($t_temp)) {
        //run only once
        if (isset($t_temp['style'])) {
            $theretailer_theme_options['secondary_footer_title_border_style'] = $t_temp['style'];
            set_theme_mod('secondary_footer_title_border_style', $t_temp['style']);
        }
        if (isset($t_temp['width'])) {
            $theretailer_theme_options['secondary_footer_title_border_width'] = $t_temp['width'];
            set_theme_mod('secondary_footer_title_border_width', $t_temp['width']);
        }
        if (isset($t_temp['color'])) {
            $theretailer_theme_options['secondary_footer_title_border_color'] = $t_temp['color'];
            set_theme_mod('secondary_footer_title_border_color', $t_temp['color']);
        }

        remove_theme_mod('secondary_footer_title_border');
    }

    $c_temp = get_theme_mod('copyright_bar_top_border', false);
    if (!empty($c_temp)) {
        //run only once
        if (isset($c_temp['style'])) {
            $theretailer_theme_options['copyright_bar_top_border_style'] = $c_temp['style'];
            set_theme_mod('copyright_bar_top_border_style', $t_temp['style']);
        }
        if (isset($c_temp['width'])) {
            $theretailer_theme_options['copyright_bar_top_border_width'] = $c_temp['width'];
            set_theme_mod('copyright_bar_top_border_width', $t_temp['width']);
        }
        if (isset($c_temp['color'])) {
            $theretailer_theme_options['copyright_bar_top_border_color'] = $c_temp['color'];
            set_theme_mod('copyright_bar_top_border_color', $t_temp['color']);
        }

        remove_theme_mod('copyright_bar_top_border');
    }

    $mf_temp = get_theme_mod('gb_main_font', false);
    if (!empty($mf_temp)) {
        //run only once
        $theretailer_theme_options['new_gb_main_font'] = array('font-family' => $mf_temp);
        set_theme_mod('new_gb_main_font', array('font-family' => $mf_temp));
        remove_theme_mod('gb_main_font');
        
    }

    $sf_temp = get_theme_mod('gb_secondary_font', false);
    if (!empty($sf_temp)) {
        //run only once
        $theretailer_theme_options['new_gb_secondary_font'] = array('font-family' => $sf_temp);
        set_theme_mod('new_gb_secondary_font', array('font-family' => $sf_temp));
        remove_theme_mod('gb_secondary_font');
        
    }
}

add_action('wp_loaded', 'theretailer_theme_options');

function the_retailer_sanitize_toggle_options() {

    if( !get_option( 'tr_toggle_options_sanitize', false ) ) {
        $options = array(
            'hide_topbar'                       => 0,
            'search_input_style'                => 0,
            'sticky_header'                     => 1,
            'shopping_bag_in_header'            => 1,
            'page_comments'                     => 0,
            'progress_bar'                      => 0,
            'show_full_post'                    => 0,
            'featured_image_single_post'        => 1,
            'catalog_mode'                      => 0,
            'sidebar_listing'                   => 0,
            'ratings_on_product_listing'        => 0,
            'breadcrumbs'                       => 0,
            'expandable_footer_mobiles'         => 1,
            'products_layout'                   => 0,
            'product_image_zoom'                => 1,
            'reviews_on_product_page'           => 1,
            'related_products_on_product_page'  => 1,
        );

        foreach( $options as $option => $default ) {
            $old = get_theme_mod( $option, $default );
            set_theme_mod( $option, theretailer_string_to_bool($old) );
        }

        update_option( 'tr_toggle_options_sanitize', true );
    }
}

function the_retailer_sanitize_image_urls() {

    if( !get_option( 'tr_images_options_sanitize', false ) ) {
        $options = array(
            'footer_logos'      => get_template_directory_uri() . '/images/customizer/payment_cards.png',
            'site_logo'         => GBT_Opt::getOption('site_logo'),
            'site_logo_retina'  => GBT_Opt::getOption('site_logo_retina'),
        );

        foreach( $options as $option => $default ) {
            $old = get_theme_mod( $option, $default );
            set_theme_mod( $option, str_replace( array('[site_url]', '[site_url_secure]'), get_site_url(), $old ) );
        }

        if( strpos( get_theme_mod( 'footer_logos' ), '/admin/assets/images/payment_cards.png' ) !== false ) {
            set_theme_mod( 'footer_logos', get_template_directory_uri() . '/images/customizer/payment_cards.png' );
        }

        update_option( 'tr_images_options_sanitize', true );
    }
}

function theretailer_string_to_bool( $string ) {
    return is_bool( $string ) ? $string : ( 'yes' === $string || 1 === $string || 'true' === $string || '1' === $string );
}

add_action('wp_loaded', 'the_retailer_sanitize_toggle_options');
add_action('wp_loaded', 'the_retailer_sanitize_image_urls');