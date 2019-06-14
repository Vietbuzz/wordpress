<?php

if ( ! function_exists ('theretailer_hex2rgb') ) {
	function theretailer_hex2rgb($hex) {
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
}

if ( ! function_exists ('theretailer_get_icon') ) {
	function theretailer_get_icon( $width = '16', $height = '16', $color = '0,0,0', $icon = '', $viewboxX = '24', $viewboxY = '24' ) {
		
		return 'url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\''.$width.'\' height=\''.$height.'\' viewBox=\'0 0 '.$viewboxX.' '.$viewboxY.'\' fill=\'rgb('.$color.')\'><path d=\''.$icon.'\'></path></svg>")';
	}
}

if ( !function_exists ('theretailer_custom_styles') ) {
	
	function theretailer_custom_styles() {
	global $theretailer_theme_options;
	?>
	    
    <?php
	if ((isset($theretailer_theme_options['progress_bar'])) && ($theretailer_theme_options['progress_bar'] == "1")) {
	?>
	<style>
	.global_content_wrapper,
	.page_full_width
	{
		opacity:0;
		transition:opacity .3s linear;
	}
	</style>
    <?php } ?>
	
	<?php
	if ((!$theretailer_theme_options['ratings_on_product_listing']) || ($theretailer_theme_options['ratings_on_product_listing'] == "0")) {
	?>
	<style>
	.product_item .star-rating,
	.products_slider_item .star-rating {
		display:none !important;
	}
	</style>
	<?php } ?>
	
	
	<!--woocommerce rating-->
	
	<?php if ( (!isset($theretailer_theme_options['ratings_styles'])) || ($theretailer_theme_options['ratings_styles'] == 0) ) : ?>
		
		<!--rating dashes-->
		<style>
			
			.reviews_nr {
				display:inline-block;
				float:left;
				font-size:13px;
				padding:1px 10px 0 0;
			}
			
			.woocommerce .product_item .star-rating,
			.woocommerce-page .product_item .star-rating {
				float: none;
				height: 15px;
				margin-top: -3px;
			}
			
			.woocommerce div.product .woocommerce-product-rating
			{
				margin-bottom: 20px;
			}
			
			.woocommerce .woocommerce-product-rating .star-rating
			{
				display: inline-block;
				float: none;
				margin: 2px 10px 2px 0;
			}
			
			.star-rating {
				float:none;
				display:block;
				width: 80px !important;
				height: 16px;
				margin:0;
				background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/star.png') repeat-x left 0 !important;
			}
			
			.star-rating span {
				background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/star.png') repeat-x left -32px !important;
				height: 0;
				padding-top: 16px;
				overflow: hidden;
				float: left;
			}
			
			.after_title_reviews .star-rating {
				float:left;
				display:block;
				width: 80px;
				height: 16px;
				margin: 0;
				background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/star.png') repeat-x left 0 !important;
			}
			
			.woocommerce .star-rating span:before,
			.woocommerce-page .star-rating span:before {
				content: "" !important;
			}
			
			.woocommerce .star-rating:before,
			.woocommerce-page .star-rating:before {
				content: "" !important;
			}
			
			.widget .star-rating {
				float:none !important;
				display:block !important;
				width: 80px !important;
				height: 16px !important;
				margin:-4px 0 0 80px !important;
				background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/star.png') repeat-x left 0 !important;
			}
			
			.widget .star-rating span {
				background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/star.png') repeat-x left -32px !important;
				height: 0 !important;
				padding-top: 16px !important;
				overflow: hidden !important;
				float: left !important;
			}
			
			p.stars span{
				position:relative !important;
				overflow:visible !important;
				margin-right: 0 !important;
			}
			
			p.stars span a:hover,
			p.stars span a:focus
			{
				background:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/star.png') repeat-x left -18px !important;
			}
			
			p.stars span a.active{
				background:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/star.png') repeat-x left -34px !important;
			}
			
			.woocommerce p.stars a,
			.woocommerce-page p.stars a {
				margin-right: 0;
			}
			
			.woocommerce p.stars:before,
			.woocommerce-page p.stars:before,
			.woocommerce p.stars:after,
			.woocommerce-page p.stars:after {
				content: "" !important;
			}
			
			.woocommerce p.stars a:before,
			.woocommerce-page p.stars a:before,
			.woocommerce p.stars a:after,
			.woocommerce-page p.stars a:after {
				content: "" !important;
			}
			
			.woocommerce p.stars a.star-1,
			.woocommerce-page p.stars a.star-1 {
				width: 16px !important;
				border:0;
				background:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/star.png') repeat-x left -2px;
				margin-right:5px;
			}
			
			.woocommerce p.stars a.star-2,
			.woocommerce-page p.stars a.star-2 {
				width: 32px !important;
				border:0;
				background:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/star.png') repeat-x left -2px;
				margin-right:5px;
			}
			
			.woocommerce p.stars a.star-3,
			.woocommerce-page p.stars a.star-3 {
				width: 48px !important;
				border:0;
				background:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/star.png') repeat-x left -2px;
				margin-right:5px;
			}
			
			.woocommerce p.stars a.star-4,
			.woocommerce-page p.stars a.star-4 {
				width: 64px !important;
				border:0;
				background:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/star.png') repeat-x left -2px;
				margin-right:5px;
			}
			
			.woocommerce p.stars a.star-5,
			.woocommerce-page p.stars a.star-5 {
				width: 80px !important;
				border:0;
				background:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/star.png') repeat-x left -2px;
				margin-right:5px;
			}

			.woocommerce .widget_rating_filter ul li .star-rating
			{
			    margin: -2px 0 0 0 !important;
			    top: 0px;
			    float: left !important;
			}
		</style>

	<?php else: ?>

		<style>

			.woocommerce .star-rating,
			.woocommerce-page .star-rating,
			.star-rating
			{
				font-size:10px;
				margin:5px 0;
				float: none;
				height: 1em;
				line-height: 1em;
				overflow: hidden;
				position: relative;
			}

			.woocommerce .star-rating span,
			.woocommerce-page .star-rating span,
			.star-rating span
			{
				float: left;
				overflow: hidden;
				padding-top: 1.5em;
				position: absolute;
				left: 0;
				top: 0;
			}

			.woocommerce .product_item .star-rating,
			.woocommerce-page .product_item .star-rating,
			.product_item .star-rating
			{
				font-size: 10px;
				width: 60px;
				margin:3px 0 8px;
				top: 2px;
			}

			.woocommerce div.product .woocommerce-review-link
			{
				margin-right: 7px;
			}

			.woocommerce .woocommerce-product-rating .star-rating
			{
				display: inline-block;
				float: none;
			}

			.woocommerce #reviews .star-rating,
			.woocommerce-page #reviews .star-rating
			{
				font-size: 10px;
				width: 53px;
				float: right;
			}

			.woocommerce .comment-form-rating p.stars,
			.woocommerce-page .comment-form-rating p.stars
			{
				font-size: 0.75rem;
			}
		</style>
		
	<?php endif; ?>	
	
	<?php
	if ((!$theretailer_theme_options['reviews_on_product_page']) || ($theretailer_theme_options['reviews_on_product_page'] == "0")) {
	?>
	<style>
		.woocommerce-tabs .reviews_tab {
			visibility:hidden;
		}
	
		.woocommerce-product-rating,
		.woocommerce .woocommerce-product-rating,
		.woocommerce-tabs #reviews
		{
			display: none;
		}
	</style>
	<?php } ?>
		
	<style>
	
	/* Body */
	
	body {
		<?php if ( $theretailer_theme_options['main_bg_color'] ) { ?>
		background-color:<?php echo $theretailer_theme_options['main_bg_color']; ?>;
		<?php } ?>
		<?php if ( $theretailer_theme_options['main_bg'] ) { ?>
		background-image:url(<?php echo $theretailer_theme_options['main_bg']; ?>);
		background-size:cover;
		background-attachment:fixed;
		<?php } ?>
	}
	
	/* Main font */
	
	body,
	#respond #author,
	#respond #email,
	#respond #url,
	#respond #comment,
	.ctextfield,
	.cselect,
	.ctextarea,
	.ccheckbox_group label,
	.cradio_group label,
	.gbtr_light_footer_no_widgets,
	.gbtr_widget_footer_from_the_blog .gbtr_widget_item_title,
	.widget input[type=text],
	.widget input[type=password],
	.widget input[type=search],
	.widget select,
	.gbtr_tools_search_inputtext,
	.gbtr_second_menu,
	.gbtr_little_shopping_bag .overview,
	.gbtr_featured_section_title,
	h1.entry-title,
	h1.page-title,
	h1.entry-title a,
	h1.page-title a,
	em.items_found_cart,
	.product_item p,
	div.product .product_title,
	#content div.product .product_title,
	.gbtr_product_description,
	div.product form.cart .variations .value select,
	#content div.product form.cart .variations .value select,
	div.product div.product_meta,
	#content div.product div.product_meta,
	div.product .woocommerce_tabs .panel,
	#content div.product .woocommerce_tabs .panel,
	#content div.product div.product_meta,
	div.product .woocommerce-tabs .panel,
	#content div.product .woocommerce-tabs .panel,
	.coupon .input-text,
	.cart_totals .shipping td,
	.shipping_calculator h3,
	.checkout .input-text,
	.checkout #shiptobilling label,
	table.shop_table tfoot .shipping td,
	.gbtr_checkout_login .input-text,
	table.my_account orders .order-number a,
	.myaccount_user,
	.order-info,
	.myaccount_user span, 
	.track_order p:first-child, 
	.order-info span,
	.gbtr_my_account_wrapper input,
	.gbtr_my_account_wrapper select,
	.gbtr_login_register_wrapper h2,
	.gbtr_login_register_wrapper input,
	.sf-menu li li a,
	div.product form.cart .variations .reset_variations,
	#content div.product form.cart .variations .reset_variations,
	.shortcode_banner_simple_inside h3,
	.shortcode_banner_simple_inside h3 strong,
	.mc_var_label,
	form .form-row .input-text,
	.shipping-calculator-form .select2-selection__rendered,
	form .form-row textarea,
	form .form-row select,
	#icl_lang_sel_widget a,
	#megaMenu ul.megaMenu li li li a span,
	#megaMenu ul.megaMenu li li li span.um-anchoremulator span, 
	.group_table .label a,
	.wpcf7 input,
	.wpcf7 textarea,
	#ship-to-different-address label,
	#ship-to-different-address .checkbox,
	.wpcf7 select,
	.cart_list_product_title,
	.wpb_tabs .ui-widget,
	.minicart_product,
	table.my_account_orders td.order-total,
	.select2-search input
	{
		font-family: '<?php echo $theretailer_theme_options['new_gb_main_font']['font-family']; ?>', Arial, Helvetica, sans-serif !important;
	}
	
	/* Secondary font */
	
	.shortcode_banner_simple_inside h4,
	.shortcode_banner_simple_height h4,
	.shortcode_banner_simple_bullet,
	.shortcode_banner_simple_height_bullet,
	.main-navigation .mega-menu > ul > li > a,
	.cbutton,
	.widget h4.widget-title,
	.widget input[type=submit],
	.widget.widget_shopping_cart .total,
	.widget.widget_shopping_cart .total strong,
	ul.product_list_widget span.amount,
	.gbtr_tools_info,
	.gbtr_tools_account,
	.gbtr_little_shopping_bag .title,
	.product_item h3,
	.product_item .price,
	a.button,
	button.button,
	input.button,
	#respond input#submit,
	#content input.button,
	div.product .product_brand,
	div.product .summary span.price,
	div.product .summary p.price,
	#content div.product .summary span.price,
	#content div.product .summary p.price,
	.quantity input.qty,
	#content .quantity input.qty,
	div.product form.cart .variations .label,
	#content div.product form.cart .variations .label,
	.gbtr_product_share ul li a,
	div.product .woocommerce_tabs ul.tabs li a,
	#content div.product .woocommerce_tabs ul.tabs li a,
	div.product .woocommerce-tabs ul.tabs li a,
	#content div.product .woocommerce-tabs ul.tabs li a,
	table.shop_table th,
	table.shop_table .product-name .category,
	table.shop_table td.product-subtotal,
	.coupon .button-coupon,
	.cart_totals th,
	.cart_totals td,
	form .form-row label,
	table.shop_table td.product-quantity,
	table.shop_table td.product-name .product_brand,
	table.shop_table td.product-total,
	table.shop_table tfoot th,
	table.shop_table tfoot td,
	.gbtr_checkout_method_content .title,
	.gbtr_left_column_my_account ul.menu_my_account,
	table.my_account_orders td.order-total,
	.minicart_total_checkout,
	.addresses .title h3,
	.sf-menu a,span.onsale,
	.product h3,
	#respond label,
	form label,
	form input[type=submit],
	.section_title,
	.entry-content-aside-title,
	.gbtr_little_shopping_bag_wrapper_mobiles span,
	.grtr_product_header_mobiles .price,
	.gbtr_footer_widget_copyrights,
	.woocommerce-message,
	.woocommerce-error,
	.woocommerce-info,p.product,
	.from_the_blog_date,
	.gbtr_dark_footer_wrapper .widget_nav_menu ul li,
	.widget.the_retailer_recent_posts .post_date,
	.featured_products_slider .products_slider_category,
	.featured_products_slider .products_slider_price,
	.page_archive_subtitle,
	.mc_var_label,
	.theretailer_style_intro,
	.wpmega-link-title,
	#megaMenu h2.widgettitle,
	.group_table .price,
	.shopping_bag_centered_style,
	.customer_details dt,
	#lang_sel_footer,
	.out_of_stock_badge_single,
	.out_of_stock_badge_loop,
	.portfolio_categories li,
	#load-more-portfolio-items,
	.portfolio_details_item_cat,
	.yith-wcwl-add-button,
	table.shop_table .amount,
	.woocommerce table.shop_table .amount,
	.yith-wcwl-share h4,
	.wishlist-out-of-stock,
	.wishlist-in-stock,
	.orderby,
	.select2-container,
	.big-select,
	select.big-select,
	em.items_found,
	.select2-results,
	.messagebox_text,
	.vc_progress_bar,
	.wpb_heading.wpb_pie_chart_heading,
	.shortcode_icon_box .icon_box_read_more,
	.vc_btn,
	ul.cart_list .empty,
	.gbtr_minicart_wrapper .woocommerce-mini-cart__empty-message,
	ul.cart_list .variation dt,
	.tagcloud a,
	td.product-name dl.variation dt,
	.woocommerce td.product-name dl.variation dt,
	.trigger-share-list,
	.box-share-link,
	.woocommerce table.shop_table_responsive tr td:before,
	.woocommerce-page table.shop_table_responsive tr td:before,
	table.my_account_orders td.order-total .amount,
	.shipping-calculator-button,
	.vc_btn3,
	.woocommerce-cart .woocommerce .cart-collaterals h2,
	li.woocommerce-MyAccount-navigation-link a,
	.woocommerce-MyAccount-content .woocommerce-orders-table__cell-order-number > a
	{
		font-family: '<?php echo $theretailer_theme_options['new_gb_secondary_font']['font-family']; ?>', Arial, Helvetica, sans-serif !important;
	}
	
	/* Main Color */
	
	a,
	.default-slider-next i,
	.default-slider-prev i,
	li.product h3:hover,
	.product_item h3 a,
	div.product .product_brand,
	div.product div.product_meta a:hover,
	#content div.product div.product_meta a:hover,
	#reviews a,
	div.product .woocommerce_tabs .panel a,
	#content div.product .woocommerce_tabs .panel a,
	div.product .woocommerce-tabs .panel a,
	#content div.product .woocommerce-tabs .panel a,
	table.shop_table td.product-name .product_brand,
	.woocommerce table.shop_table td.product-name .product_brand,
	table.my_account_orders td.order-actions a:hover,
	ul.digital-downloads li a:hover,
	.gbtr_login_register_switch ul li,
	.entry-meta a:hover,
	footer.entry-meta .comments-link a,
	.gbtr_dark_footer_wrapper .widget_nav_menu ul li a:hover,
	.gbtr_dark_footer_wrapper a:hover,
	.shortcode_meet_the_team .role,
	#comments a:hover,
	.portfolio_item a:hover,
	.emm-paginate a:hover span,
	.emm-paginate a:active span,
	.emm-paginate .emm-prev:hover,
	.emm-paginate .emm-next:hover,
	.mc_success_msg,
	.page_archive_items a:hover,
	.gbtr_product_share ul li a,
	div.product form.cart .variations .reset_variations,
	#content div.product form.cart .variations .reset_variations,
	table.my_account_orders .order-number a,
	.gbtr_dark_footer_wrapper .tagcloud a:hover,
	table.shop_table .product-name small a,
	.woocommerce table.shop_table .product-name small a,
	ul.gbtr_digital-downloads li a,
	div.product div.summary a,
	#content div.product div.summary a,
	.cart_list.product_list_widget .minicart_product,
	.shopping_bag_centered_style .minicart_product,
	.woocommerce .woocommerce-breadcrumb a,
	.woocommerce-page .woocommerce-breadcrumb a,
	.product_item:hover .add_to_wishlist:before,
	.woocommerce .star-rating span,
	.woocommerce-page .star-rating span,
	.star-rating span,
	.woocommerce-page p.stars a:hover:after,
	.woocommerce-page p.stars .active:after,
	.woocommerce-cart .entry-content .woocommerce .actions input[type=submit],
	.cart-collaterals .woocommerce-shipping-calculator button,
	.woocommerce table.my_account_orders .button,
	.woocommerce .account-payment-methods-table .payment-method-actions a.button,
	.gbt_18_tr_posts_grid .gbt_18_tr_posts_grid_title:hover
	{
		color:<?php echo $theretailer_theme_options['accent_color']; ?>;
	}

	.box-share-container .trigger-share-list > svg
	{
		fill:<?php echo $theretailer_theme_options['accent_color']; ?>;
	}

	.woocommerce nav.woocommerce-pagination ul li:not(:last-child):not(:first-child) a:focus, 
	.woocommerce nav.woocommerce-pagination ul li:not(:last-child):not(:first-child) a:hover,
	.woocommerce nav.woocommerce-pagination ul li a.page-numbers:focus, 
	.woocommerce nav.woocommerce-pagination ul li a.page-numbers:hover
	{
		color: <?php echo $theretailer_theme_options['accent_color']; ?>;
	}

	.woocommerce nav.woocommerce-pagination ul li:not(:last-child):not(:first-child) a:focus, 
	.woocommerce nav.woocommerce-pagination ul li:not(:last-child):not(:first-child) a:hover
	{
		border-color: <?php echo $theretailer_theme_options['accent_color']; ?>;
	}
	
	.shopping_bag_centered_style:hover,
	.sf-menu li > a:hover,
	.gbtr_login_register_switch ul li,
	.woocommerce-checkout .woocommerce-info a,
	.main-navigation .mega-menu > ul > li > a:hover,
	.main-navigation > ul > li:hover > a
	{
		color:<?php echo $theretailer_theme_options['accent_color']; ?> !important;
	}
	
	form input[type=submit]:hover,
	.widget input[type=submit]:hover,
	.tagcloud a:hover,
	#wp-calendar tbody td a,
	.widget.the_retailer_recent_posts .post_date,
	a.button:hover,button.button:hover,input.button:hover,#respond input#submit:hover,#content input.button:hover,
	.myaccount_user,
	.track_order p:first-child,
	.order-info,
	.from_the_blog_date,
	.featured_products_slider .products_slider_images,
	.portfolio_sep,
	.portfolio_details_sep,
	.gbtr_little_shopping_bag_wrapper_mobiles span,
	#mc_signup_submit:hover,
	.page_archive_date,
	.shopping_bag_mobile_style .gb_cart_contents_count,
	.shopping_bag_centered_style .items_number,
	.audioplayer-bar-played,
	.audioplayer-volume-adjust div div,
	#mobile_menu_overlay li a:hover,
	.addresses a:hover,
	#load-more-portfolio-items a:hover,
	.select2-container--default .select2-results__option.select2-results__option--highlighted,
	.shortcode_icon_box .icon_box_read_more:hover,
	#nprogress .bar,
	.box-share-list,
	.main-navigation ul ul li a:hover,
	.woocommerce-widget-layered-nav-dropdown__submit:hover
	{
		background: <?php echo $theretailer_theme_options['accent_color']; ?>;
	}

	.woocommerce #respond input#submit:hover,
	.woocommerce-button--next:hover,
	.woocommerce-button--prev:hover,
	.woocommerce button.button:hover, 
	.woocommerce input.button:hover,
	button.wc-stripe-checkout-button:hover,
	.woocommerce .woocommerce-MyAccount-content a.button:hover	
	{
		background-color: <?php echo $theretailer_theme_options['accent_color']; ?> !important;
	}
	
	.woocommerce-message,
	.gbtr_minicart_cart_but:hover,
	.gbtr_minicart_checkout_but:hover,
	span.onsale,
	.woocommerce span.onsale,
	.product_main_infos span.onsale,
	.quantity .minus:hover,
	#content .quantity .minus:hover,
	.quantity .plus:hover,
	#content .quantity .plus:hover,
	.single_add_to_cart_button:hover,
	.shortcode_getbowtied_slider .button:hover,
	.add_review .button:hover,
	#fancybox-close:hover,
	.shipping-calculator-form .button:hover,
	.coupon .button-coupon:hover,
	.button_create_account_continue:hover,
	.button_billing_address_continue:hover,
	.button_shipping_address_continue:hover,
	.button_order_review_continue:hover,
	#place_order:hover,
	.gbtr_my_account_button input:hover,
	.gbtr_track_order_button:hover,
	.gbtr_login_register_wrapper .button:hover,
	.gbtr_login_register_reg .button:hover,
	.gbtr_login_register_log .button:hover,
	p.product a:hover,
	#respond #submit:hover,
	.widget_shopping_cart .button:hover,
	.sf-menu li li a:hover,
	.lost_reset_password .button:hover,
	.widget_price_filter .price_slider_amount .button:hover,
	.gbtr_order_again_but:hover,
	.gbtr_save_but:hover,
	input.button:hover,#respond input#submit:hover,#content input.button:hover,
	.wishlist_table tr td .add_to_cart:hover,
	.vc_btn.vc_btn_xs:hover,
	.vc_btn.vc_btn_sm:hover,
	.vc_btn.vc_btn_md:hover,
	.vc_btn.vc_btn_lg:hover,
	.order-actions a:hover,
	.widget_price_filter .ui-slider .ui-slider-range,
	.woocommerce .widget_price_filter .ui-slider .ui-slider-range
	{
		background: <?php echo $theretailer_theme_options['accent_color']; ?> !important;
	}
	
	.gbtr_login_register_switch .button:hover,
	.more-link,
	.gbtr_dark_footer_wrapper .button,
	.gbtr_little_shopping_bag_wrapper_mobiles:hover,
	.menu_select.customSelectHover,
	.gbtr_tools_account.menu-hidden .topbar-menu li a:hover,
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button
	{
		background-color:<?php echo $theretailer_theme_options['accent_color']; ?>;
	}
	
	.widget_layered_nav ul li.chosen a,
	.widget_layered_nav_filters ul li.chosen a,
	a.button.added::before,
	button.button.added::before,
	input.button.added::before,
	#respond input#submit.added::before,
	#content input.button.added::before,
	.woocommerce a.button.added::before,
	.woocommerce button.button.added::before,
	.woocommerce input.button.added::before,
	.woocommerce #respond input#submit.added::before,
	.woocommerce #content input.button.added::before
	{
		background-color:<?php echo $theretailer_theme_options['accent_color']; ?> !important;
	}
	
	.tagcloud a:hover,
	.woocommerce-cart .entry-content .woocommerce .actions input[type=submit],
	.cart-collaterals .woocommerce-shipping-calculator button
	{
		border: 1px solid <?php echo $theretailer_theme_options['accent_color']; ?> !important;
	}
	
	.gbtr_tools_account.menu-hidden .topbar-menu
	{
		border-color: <?php echo $theretailer_theme_options['accent_color']; ?> #cccccc #cccccc;
	}
	
	.tagcloud a:hover,
	.widget_layered_nav ul li.chosen a,
	.widget_layered_nav_filters ul li.chosen a
	{
		border: 1px solid <?php echo $theretailer_theme_options['accent_color']; ?> !important;
	}
	
	.default-slider-next,
	.default-slider-prev,
	.emm-paginate a:hover span,
	.emm-paginate a:active span,
	.shortcode_icon_box .icon_box_read_more:hover
	{
		border-color:<?php echo $theretailer_theme_options['accent_color']; ?>;
	}
	
	.vc_btn.vc_btn_xs:hover,
	.vc_btn.vc_btn_sm:hover,
	.vc_btn.vc_btn_md:hover,
	.vc_btn.vc_btn_lg:hover
	{
		border-color:<?php echo $theretailer_theme_options['accent_color']; ?> !important;
	}
	
	.product_type_simple,
	.product_type_variable,
	.myaccount_user:after,
	.track_order p:first-child:after,
	.order-info:after
	{
		border-bottom-color:<?php echo $theretailer_theme_options['accent_color']; ?> !important;
	}
	
	.first-navigation ul ul,
	.secondary-navigation ul ul
	{
		border-top-color:<?php echo $theretailer_theme_options['accent_color']; ?>;
	}
	
	#megaMenu ul.megaMenu > li.ss-nav-menu-mega > ul.sub-menu-1, 
	#megaMenu ul.megaMenu li.ss-nav-menu-reg ul.sub-menu ,
	.menu_centered_style .gbtr_minicart 
	{
		border-top-color:<?php echo $theretailer_theme_options['accent_color']; ?> !important;
	}
	
	#nprogress .spinner-icon {
		border-top-color: <?php echo $theretailer_theme_options['accent_color']; ?>;
		border-left-color: <?php echo $theretailer_theme_options['accent_color']; ?>;
	}
	
	/* Secondary Color */
	
	.sf-menu a,
	.sf-menu a:visited,
	.sf-menu li li a,
	.widget h4.widget-title,
	h1.entry-title,
	h1.page-title,
	h1.entry-title a,
	h1.page-title a,
	.entry-content h1,
	.entry-content h2,
	.entry-content h3,
	.entry-content h4,
	.entry-content h5,
	.entry-content h6,
	.gbtr_little_shopping_bag .title a,
	.shipping_calculator h3 a,
	ul.product_list_widget span.amount,
	.woocommerce ul.product_list_widget span.amount
	{
		color:<?php echo $theretailer_theme_options['primary_color']; ?>;
	}
	
	/* Wrapper */
	
	#global_wrapper {
		margin:0 auto;	
		<?php if ($theretailer_theme_options['gb_layout'] == "boxed") { ?>
			width:100%;
			max-width:<?php echo $theretailer_theme_options['boxed_layout_width']; ?>px !important;
		<?php } else { ?>
			width:100%;
		<?php } ?>	
	}
	
	/* Top Bar */
	
	<?php if (isset($theretailer_theme_options['topbar_bg_color'])) { ?>
	.gbtr_tools_wrapper {
		background:<?php echo $theretailer_theme_options['topbar_bg_color']; ?>;
	}
	<?php } ?>
	
	<?php if (isset($theretailer_theme_options['topbar_color'])) { ?>
	.gbtr_tools_wrapper,
	.gbtr_tools_account ul li a,
	.logout_link,
	.gbtr_tools_search_inputbutton,
	.top-bar-menu-trigger,
	.top-bar-menu-trigger-mobile,
	.gbtr_tools_search_trigger,
	.gbtr_tools_search_trigger_mobile
	{
		color:<?php echo $theretailer_theme_options['topbar_color']; ?>;
	}
	<?php } ?>
	
	<?php if (isset($theretailer_theme_options['top_bar_font_size'])) { ?>
	.gbtr_tools_info,
	.gbtr_tools_account
	{
		font-size:<?php echo $theretailer_theme_options['top_bar_font_size']; ?>px;
	}
	<?php } ?>
	
	/* Header */
	
	.gbtr_header_wrapper {
		<?php if (!isset($theretailer_theme_options['menu_header_top_padding_1_7'])) { ?>
		padding-top:30px;
		<?php } else { ?>
		padding-top:<?php echo $theretailer_theme_options['menu_header_top_padding_1_7']; ?>px;
		<?php } ?>
		
		<?php if (!isset($theretailer_theme_options['menu_header_bottom_padding_1_7'])) { ?>
		padding-bottom:30px;
		<?php } else { ?>
		padding-bottom:<?php echo $theretailer_theme_options['menu_header_bottom_padding_1_7']; ?>px;
		<?php } ?>
		
		background-color:<?php echo $theretailer_theme_options['header_bg_color']; ?>;
	}
	
	.sf-menu a,
	.sf-menu a:visited,
	.shopping_bag_centered_style,
	.main-navigation .mega-menu > ul > li > a,
	.main-navigation .mega-menu > ul > li > a:visited,
	.menu_select
	{
		color: <?php echo $theretailer_theme_options['primary_menu_color']; ?>;
	}
	
	
	.main-navigation ul ul li a,
	.main-navigation ul ul li a:visited,
	.gbtr_second_menu li a {
		color: <?php echo $theretailer_theme_options['secondary_menu_color']; ?>;
	}
	
	<?php if (isset($theretailer_theme_options['main_navigation_font_size'])) { ?>
	.sf-menu a,
	.main-navigation .mega-menu > ul > li > a,
	.shopping_bag_centered_style
	{
		font-size:<?php echo $theretailer_theme_options['main_navigation_font_size']; ?>px;
	}
	<?php } ?>
	
	<?php if (isset($theretailer_theme_options['secondary_navigation_font_size'])) { ?>
	.gbtr_second_menu {
		font-size:<?php echo $theretailer_theme_options['secondary_navigation_font_size']; ?>px;
	}
	<?php } ?>
	
	/* Light footer */
	
	.gbtr_light_footer_wrapper,
	.gbtr_light_footer_no_widgets {
		background-color:<?php echo $theretailer_theme_options['primary_footer_bg_color']; ?>;
	}
	
	/*Dark footer */
	
	.gbtr_dark_footer_wrapper,
	.gbtr_dark_footer_wrapper .tagcloud a,
	.gbtr_dark_footer_no_widgets {
		background-color:<?php echo $theretailer_theme_options['secondary_footer_bg_color']; ?>;
	}
	
	.gbtr_dark_footer_wrapper .widget h4.widget-title {
		border-bottom:<?php echo $theretailer_theme_options['secondary_footer_title_border_width']; ?>px <?php echo $theretailer_theme_options['secondary_footer_title_border_style']; ?> <?php echo $theretailer_theme_options['secondary_footer_title_border_color']; ?>;
	}
	
	.gbtr_dark_footer_wrapper,
	.gbtr_dark_footer_wrapper .widget h4.widget-title,
	.gbtr_dark_footer_wrapper a,
	.gbtr_dark_footer_wrapper .widget ul li,
	.gbtr_dark_footer_wrapper .widget ul li a,
	.gbtr_dark_footer_wrapper .textwidget,
	.gbtr_dark_footer_wrapper #mc_subheader,
	.gbtr_dark_footer_wrapper ul.product_list_widget span.amount,
	.gbtr_dark_footer_wrapper .widget_calendar,
	.gbtr_dark_footer_wrapper .mc_var_label,
	.gbtr_dark_footer_wrapper .tagcloud a,
	.trigger-footer-widget-area
	{
		color:<?php echo $theretailer_theme_options['secondary_footer_color']; ?>;
	}
	
	.gbtr_dark_footer_wrapper ul.product_list_widget span.amount
	{
		color:<?php echo $theretailer_theme_options['secondary_footer_color']; ?> !important;
	}

	.gbtr_dark_footer_wrapper .shortcode_socials svg
	{
		fill: <?php echo $theretailer_theme_options['secondary_footer_color']; ?>;
	}
	
	.gbtr_dark_footer_wrapper .widget input[type=text],
	.gbtr_dark_footer_wrapper .widget input[type=password],
	.gbtr_dark_footer_wrapper .tagcloud a
	{
		border: 1px solid <?php echo $theretailer_theme_options['secondary_footer_borders_color']; ?>;
	}
	
	.gbtr_dark_footer_wrapper .widget ul li {
		border-bottom: 1px dotted <?php echo $theretailer_theme_options['secondary_footer_borders_color']; ?> !important;
	}
	
	/* Mobiles Footer */
	
	<?php if ((isset($theretailer_theme_options['expandable_footer_mobiles'])) && ($theretailer_theme_options['expandable_footer_mobiles'] == "0")) : ?>
	.trigger-footer-widget-area {
		display:none;
	}
	.gbtr_widgets_footer_wrapper {
		display:block;
	}
	<?php endif; ?>
	
	/* Copyright footer */
	
	.gbtr_footer_wrapper {
		background:<?php echo $theretailer_theme_options['copyright_bar_bg_color']; ?>;
	}
	
	.bottom_wrapper {
		border-top:<?php echo $theretailer_theme_options['copyright_bar_top_border_width']; ?>px <?php echo $theretailer_theme_options['copyright_bar_top_border_style']; ?> <?php echo $theretailer_theme_options['copyright_bar_top_border_color']; ?>;
	}
	
	.gbtr_footer_widget_copyrights {
		color:<?php echo $theretailer_theme_options['copyright_text_color']; ?>;
	}
	
	<?php if ( isset($theretailer_theme_options['flip_product']) && ($theretailer_theme_options['flip_product'] == '0') ) : ?>
	
		/* Flip products */
		
		<?php if ( isset($theretailer_theme_options['flip_product_mobiles']) && ($theretailer_theme_options['flip_product_mobiles'] == '1') ) : ?>

			@media all and (min-width: 1024px ) {

		<?php endif; ?>

			.image_container a {
				float: left;
				perspective: 600px;
				-webkit-perspective: 600px;
			}

			.image_container a .front,
			.image_container a .back
			{
				backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				transition: 0.6s;
				-webkit-transition: 0.6s;
				transform-style: preserve-3d;
				-webkit-transform-style: preserve-3d;
			}

			.image_container a .front {
				z-index: 2;
				transform: rotateY(0deg);
				-webkit-transform: rotateY(0deg);
			}

			.image_container a .back {
				transform: rotateY(-180deg);
				-webkit-transform: rotateY(-180deg);
			}

			.image_container a:hover .back {
				transform: rotateY(0deg);
				-webkit-transform: rotateY(0deg);
			}
			
			.image_container a:hover .front {
			    transform: rotateY(180deg);
			    -webkit-transform: rotateY(180deg);
			}
		
		<?php if( isset($theretailer_theme_options['flip_product_mobiles']) && ($theretailer_theme_options['flip_product_mobiles'] == '1') ) : ?>

			}
				
		<?php endif; ?>
		
	<?php endif; ?>

	<?php if ( isset($theretailer_theme_options['flip_product']) && $theretailer_theme_options['flip_product'] == '1' ) : ?>	

		<?php if( isset($theretailer_theme_options['flip_product_mobiles']) && ($theretailer_theme_options['flip_product_mobiles'] == '0') ) : ?>

			@media all and (max-width: 1023px ) {

				.image_container a {
					float: left;
					perspective: 600px;
					-webkit-perspective: 600px;
				}

				.image_container a .front,
				.image_container a .back
				{
					backface-visibility: hidden;
					-webkit-backface-visibility: hidden;
					transition: 0.6s;
					-webkit-transition: 0.6s;
					transform-style: preserve-3d;
					-webkit-transform-style: preserve-3d;
				}

				.image_container a .front {
					z-index: 2;
					transform: rotateY(0deg);
					-webkit-transform: rotateY(0deg);
				}

				.image_container a .back {
					transform: rotateY(-180deg);
					-webkit-transform: rotateY(-180deg);
				}

				.image_container a:hover .back {
					transform: rotateY(0deg);
					-webkit-transform: rotateY(0deg);
				}
				
				.image_container a:hover .front {
				    transform: rotateY(180deg);
				    -webkit-transform: rotateY(180deg);
				}
			}

		<?php endif; ?>

	<?php endif; ?>

	/*Icons*/
	<?php 
	
	$primary_color_rgb 			=  theretailer_hex2rgb($theretailer_theme_options['primary_color']); 
	$primary_menu_color_rgb 	=  theretailer_hex2rgb($theretailer_theme_options['primary_menu_color']); 
	$secondary_menu_color_rgb 	=  theretailer_hex2rgb($theretailer_theme_options['secondary_menu_color']);
	$accent_color_rgb			=  theretailer_hex2rgb($theretailer_theme_options['accent_color']);
	$topbar_color_rgb 			=  theretailer_hex2rgb($theretailer_theme_options['topbar_color']);

	?>
	.widget ul li.recentcomments:before
	{
		background-image: <?php echo theretailer_get_icon( '24', '24', $primary_color_rgb, 'M 4 3 C 2.9 3 2.0097656 3.9 2.0097656 5 L 2.0019531 16.998047 C 2.0019531 18.103047 2.8969531 19 4.0019531 19 L 6 19 L 6 23 L 10 19 L 20 19 C 21.1 19 22 18.1 22 17 L 22 5 C 22 3.9 21.1 3 20 3 L 4 3 z M 4 5 L 20 5 L 20 17 L 6 17 L 4.0019531 17 L 4 5 z' ); ?>;
	}

	.gbtr_dark_footer_wrapper .widget ul li.recentcomments:before
	{
		background-image: <?php echo theretailer_get_icon( '24', '24', '255,255,255', 'M 4 3 C 2.9 3 2.0097656 3.9 2.0097656 5 L 2.0019531 16.998047 C 2.0019531 18.103047 2.8969531 19 4.0019531 19 L 6 19 L 6 23 L 10 19 L 20 19 C 21.1 19 22 18.1 22 17 L 22 5 C 22 3.9 21.1 3 20 3 L 4 3 z M 4 5 L 20 5 L 20 17 L 6 17 L 4.0019531 17 L 4 5 z' ); ?>;
	}

	.gbtr_light_footer_wrapper .widget ul li.recentcomments:before
	{
		background-image: <?php echo theretailer_get_icon( '24', '24', '0,0,0', 'M 4 3 C 2.9 3 2.0097656 3.9 2.0097656 5 L 2.0019531 16.998047 C 2.0019531 18.103047 2.8969531 19 4.0019531 19 L 6 19 L 6 23 L 10 19 L 20 19 C 21.1 19 22 18.1 22 17 L 22 5 C 22 3.9 21.1 3 20 3 L 4 3 z M 4 5 L 20 5 L 20 17 L 6 17 L 4.0019531 17 L 4 5 z' ); ?>;
	}

	.gbtr_little_shopping_bag .title
	{
		background-image: <?php echo theretailer_get_icon( '16', '16', $primary_menu_color_rgb, 'M 7.4296875 9.5 L 5.9296875 11 L 12 17.070312 L 18.070312 11 L 16.570312 9.5 L 12 14.070312 L 7.4296875 9.5 z' ); ?>;
	}

	.gbtr_little_shopping_bag_wrapper.shopping_bag_mobile_style,
	.gbtr_little_shopping_bag_wrapper_mobiles
	{
		background-image: <?php echo theretailer_get_icon( '39', '45', $primary_menu_color_rgb, 'M12,4C9.5,4,7.5,6,7.5,8.5v1H4.3C4,9.5,3.8,9.7,3.8,10v14.5C3.8,24.8,4,25,4.3,25h15.4c0.3,0,0.5-0.2,0.5-0.5V10 c0-0.3-0.2-0.5-0.5-0.5h-3.2v-1C16.5,6,14.5,4,12,4z M8.5,8.5C8.5,6.6,10.1,5,12,5c1.9,0,3.5,1.6,3.5,3.5v1H8.5	C8.5,9.5,8.5,8.5,8.5,8.5z M19.2,10.5V24H4.8V10.5h2.7v1.8c0,0.3,0.2,0.5,0.5,0.5c0.3,0,0.5-0.2,0.5-0.5v-1.8h7.1v1.8 c0,0.3,0.2,0.5,0.5,0.5s0.5-0.2,0.5-0.5v-1.8H19.2z', '24', '30' ); ?>;
	}

	.gbtr_little_shopping_bag_wrapper_mobiles:hover
	{
		background-image: <?php echo theretailer_get_icon( '32', '32', '255,255,255', 'M12,4C9.5,4,7.5,6,7.5,8.5v1H4.3C4,9.5,3.8,9.7,3.8,10v14.5C3.8,24.8,4,25,4.3,25h15.4c0.3,0,0.5-0.2,0.5-0.5V10 c0-0.3-0.2-0.5-0.5-0.5h-3.2v-1C16.5,6,14.5,4,12,4z M8.5,8.5C8.5,6.6,10.1,5,12,5c1.9,0,3.5,1.6,3.5,3.5v1H8.5	C8.5,9.5,8.5,8.5,8.5,8.5z M19.2,10.5V24H4.8V10.5h2.7v1.8c0,0.3,0.2,0.5,0.5,0.5c0.3,0,0.5-0.2,0.5-0.5v-1.8h7.1v1.8 c0,0.3,0.2,0.5,0.5,0.5s0.5-0.2,0.5-0.5v-1.8H19.2z' ); ?>;
	}

	.product_button a.button,
	.product_button button.button,
	.product_button input.button,
	.product_button #respond input#submit,
	.product_button #content input.button
	{
		background-image: <?php echo theretailer_get_icon( '20', '20', $primary_color_rgb, 'M19.74,9.24V7A7,7,0,1,0,5.68,7V9.24H0v25H25.42v-25ZM8.68,7a4,4,0,1,1,8.06,0V9.24H8.68ZM22.42,31.2H3v-19H5.68v2.5h3v-2.5h8.06v2.5h3v-2.5h2.68ZM14.21,16.25h-3v4.14H7.08v3h4.13v4.13h3V23.39h4.14v-3H14.21Z', '26', '35' ); ?>;
	}

	.product_type_simple
	{
		background-image: <?php echo theretailer_get_icon( '20', '20', $primary_color_rgb, 'M19.74,9.24V7A7,7,0,1,0,5.68,7V9.24H0v25H25.42v-25ZM8.68,7a4,4,0,1,1,8.06,0V9.24H8.68ZM22.42,31.2H3v-19H5.68v2.5h3v-2.5h8.06v2.5h3v-2.5h2.68ZM14.21,16.25h-3v4.14H7.08v3h4.13v4.13h3V23.39h4.14v-3H14.21Z', '26', '35' ); ?> !important;
	}

	.product_type_variable,
	.product_type_grouped,
	.product_type_external
	{
		background-image: <?php echo theretailer_get_icon( '20', '20', $primary_color_rgb, 'M 5.5859375 3 L 3.5859375 5 L 2 5 L 2 7 L 4.4140625 7 L 7 4.4140625 L 5.5859375 3 z M 9 5 L 9 7 L 22 7 L 22 5 L 9 5 z M 5.5859375 9 L 3.5859375 11 L 2 11 L 2 13 L 4.4140625 13 L 7 10.414062 L 5.5859375 9 z M 9 11 L 9 13 L 22 13 L 22 11 L 9 11 z M 4 16.5 A 1.5 1.5 0 0 0 2.5 18 A 1.5 1.5 0 0 0 4 19.5 A 1.5 1.5 0 0 0 5.5 18 A 1.5 1.5 0 0 0 4 16.5 z M 9 17 L 9 19 L 22 19 L 22 17 L 9 17 z' ); ?> !important;
	}

	.menu_select
	{
		background-image: <?php echo theretailer_get_icon( '24', '24', $primary_menu_color_rgb, 'M 2 5 L 2 7 L 22 7 L 22 5 L 2 5 z M 2 11 L 2 13 L 22 13 L 22 11 L 2 11 z M 2 17 L 2 19 L 22 19 L 22 17 L 2 17 z' ); ?>;
	}

	.menu_select.customSelectHover
	{
		background-image: <?php echo theretailer_get_icon( '24', '24', '255,255,255', 'M 2 5 L 2 7 L 22 7 L 22 5 L 2 5 z M 2 11 L 2 13 L 22 13 L 22 11 L 2 11 z M 2 17 L 2 19 L 22 19 L 22 17 L 2 17 z' ); ?>;
	}

	.main-navigation ul ul li.menu-item-has-children > a:after
	{
		content: <?php echo theretailer_get_icon( '16', '16', $secondary_menu_color_rgb, 'M 10 5.9296875 L 8.5 7.4296875 L 13.070312 12 L 8.5 16.570312 L 10 18.070312 L 16.070312 12 L 10 5.9296875 z' ); ?>;
	}

	.main-navigation ul ul li.menu-item-has-children > a:hover:after
	{
		content: <?php echo theretailer_get_icon( '16', '16', '255,255,255', 'M 10 5.9296875 L 8.5 7.4296875 L 13.070312 12 L 8.5 16.570312 L 10 18.070312 L 16.070312 12 L 10 5.9296875 z' ); ?>;
	}

	.main-navigation > ul > li.menu-item-has-children > a:after
	{
		content: <?php echo theretailer_get_icon( '16', '16', $primary_menu_color_rgb, 'M 7.4296875 9.5 L 5.9296875 11 L 12 17.070312 L 18.070312 11 L 16.570312 9.5 L 12 14.070312 L 7.4296875 9.5 z' ); ?>;
	}

	.main-navigation > ul > li.menu-item-has-children:hover > a:after
	{
		content: <?php echo theretailer_get_icon( '16', '16', $accent_color_rgb, 'M 7.4296875 9.5 L 5.9296875 11 L 12 17.070312 L 18.070312 11 L 16.570312 9.5 L 12 14.070312 L 7.4296875 9.5 z' ); ?>;
	}

	.main-navigation.secondary-navigation > ul > li.menu-item-has-children > a:after
	{
		content: <?php echo theretailer_get_icon( '16', '16', $secondary_menu_color_rgb, 'M 7.4296875 9.5 L 5.9296875 11 L 12 17.070312 L 18.070312 11 L 16.570312 9.5 L 12 14.070312 L 7.4296875 9.5 z' ); ?>;
	}

	.product_infos .yith-wcwl-wishlistaddedbrowse:before,
	.product_infos .yith-wcwl-wishlistexistsbrowse:before,
	.product_item .yith-wcwl-wishlistaddedbrowse a:before,
	.product_item .yith-wcwl-wishlistexistsbrowse a:before
	{
		content: <?php echo theretailer_get_icon( '16', '16', $accent_color_rgb, 'M16.5,3C13.605,3,12,5.09,12,5.09S10.395,3,7.5,3C4.462,3,2,5.462,2,8.5c0,4.171,4.912,8.213,6.281,9.49 C9.858,19.46,12,21.35,12,21.35s2.142-1.89,3.719-3.36C17.088,16.713,22,12.671,22,8.5C22,5.462,19.538,3,16.5,3z' ); ?>;
	}

	.gbtr_tools_search_trigger .gbtr_tools_search_icon:before,
	.gbtr_tools_search_trigger_mobile .gbtr_tools_search_icon:before,
	.gbtr_tools_search_inputbutton .gbtr_tools_search_icon:before
	{
		content: <?php echo theretailer_get_icon( '14', '14', $topbar_color_rgb , 'M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z ', '50', '50' ); ?>;
	}

	.logout_link .logout_link_icon:before
	{
		content: <?php echo theretailer_get_icon( '28', '28', $topbar_color_rgb , 'M 11 2 L 11 12 L 13 12 L 13 2 L 11 2 z M 9 2.4589844 C 4.943 3.7339844 2 7.523 2 12 C 2 17.523 6.477 22 12 22 C 17.523 22 22 17.523 22 12 C 22 7.523 19.057 3.7339844 15 2.4589844 L 15 4.5878906 C 17.931 5.7748906 20 8.644 20 12 C 20 16.418 16.418 20 12 20 C 7.582 20 4 16.418 4 12 C 4 8.643 6.069 5.7748906 9 4.5878906 L 9 2.4589844 z', '48', '48' ); ?>;
	}

	.gbtr_tools_account_wrapper .gbtr_tools_account_icon:before
	{
		content: <?php echo theretailer_get_icon( '15', '15', $topbar_color_rgb , 'M 2 5 L 2 7 L 22 7 L 22 5 L 2 5 z M 2 11 L 2 13 L 22 13 L 22 11 L 2 11 z M 2 17 L 2 19 L 22 19 L 22 17 L 2 17 z', '24', '24' ); ?>;
	}

	.entry-meta .author-icon:before
	{
		content: <?php echo theretailer_get_icon( '18', '18', $primary_color_rgb , 'M 12 2 C 6.477 2 2 6.477 2 12 C 2 17.523 6.477 22 12 22 C 17.523 22 22 17.523 22 12 C 22 6.477 17.523 2 12 2 z M 12 4 C 16.418 4 20 7.582 20 12 C 20 13.597292 19.525404 15.081108 18.71875 16.330078 L 17.949219 15.734375 C 16.397219 14.537375 13.537 14 12 14 C 10.463 14 7.6017813 14.537375 6.0507812 15.734375 L 5.28125 16.332031 C 4.4740429 15.082774 4 13.597888 4 12 C 4 7.582 7.582 4 12 4 z M 12 5.75 C 10.208 5.75 8.75 7.208 8.75 9 C 8.75 10.792 10.208 12.25 12 12.25 C 13.792 12.25 15.25 10.792 15.25 9 C 15.25 7.208 13.792 5.75 12 5.75 z M 12 7.75 C 12.689 7.75 13.25 8.311 13.25 9 C 13.25 9.689 12.689 10.25 12 10.25 C 11.311 10.25 10.75 9.689 10.75 9 C 10.75 8.311 11.311 7.75 12 7.75 z M 12 16 C 15.100714 16 16.768095 17.168477 17.548828 17.753906 C 16.109984 19.141834 14.156852 20 12 20 C 9.843148 20 7.8900164 19.141834 6.4511719 17.753906 C 7.231905 17.168477 8.899286 16 12 16 z M 6.0546875 17.339844 C 6.1756559 17.473131 6.297271 17.605851 6.4257812 17.730469 C 6.2971141 17.605286 6.1747276 17.473381 6.0546875 17.339844 z M 17.912109 17.375 C 17.802435 17.495543 17.692936 17.616825 17.576172 17.730469 C 17.692621 17.617521 17.801457 17.494978 17.912109 17.375 z', '24', '24' ); ?>;
	}

	.entry-meta .date-icon:before
	{
		content: <?php echo theretailer_get_icon( '18', '18', $primary_color_rgb , 'M 6 1 L 6 3 L 5 3 C 3.9 3 3 3.9 3 5 L 3 19 C 3 20.1 3.9 21 5 21 L 19 21 C 20.1 21 21 20.1 21 19 L 21 5 C 21 3.9 20.1 3 19 3 L 18 3 L 18 1 L 16 1 L 16 3 L 8 3 L 8 1 L 6 1 z M 5 5 L 6 5 L 8 5 L 16 5 L 18 5 L 19 5 L 19 7 L 5 7 L 5 5 z M 5 9 L 19 9 L 19 19 L 5 19 L 5 9 z', '24', '24' ); ?>;
	}

	.entry-meta .category-icon:before
	{
		content: <?php echo theretailer_get_icon( '18', '18', $primary_color_rgb , 'M 4 4 C 2.9057453 4 2 4.9057453 2 6 L 2 18 C 2 19.094255 2.9057453 20 4 20 L 20 20 C 21.094255 20 22 19.094255 22 18 L 22 8 C 22 6.9057453 21.094255 6 20 6 L 12 6 L 10 4 L 4 4 z M 4 6 L 9.171875 6 L 11.171875 8 L 20 8 L 20 18 L 4 18 L 4 6 z', '24', '24' ); ?>;
	}

	.entry-meta .tag-icon:before,
	.entry-content .tag-icon:before
	{
		content: <?php echo theretailer_get_icon( '18', '18', $primary_color_rgb , 'M 4 6 C 2.9 6 2 6.9 2 8 L 2 16 C 2 17.1 2.9 18 4 18 L 15.199219 18 C 15.699219 18 16.199609 17.800391 16.599609 17.400391 L 22 12 L 16.599609 6.5996094 C 16.199609 6.1996094 15.699219 6 15.199219 6 L 4 6 z M 4 8 L 15.199219 8 L 15.185547 8.0136719 L 19.175781 12.003906 L 15.199219 16 L 4 16 L 4 8 z M 15 11 C 14.448 11 14 11.448 14 12 C 14 12.552 14.448 13 15 13 C 15.552 13 16 12.552 16 12 C 16 11.448 15.552 11 15 11 z', '24', '24' ); ?>;
	}

	.entry-meta .picture-icon:before
	{
		content: <?php echo theretailer_get_icon( '18', '18', $primary_color_rgb , 'M 4 4 C 2.9069372 4 2 4.9069372 2 6 L 2 18 C 2 19.093063 2.9069372 20 4 20 L 20 20 C 21.093063 20 22 19.093063 22 18 L 22 6 C 22 4.9069372 21.093063 4 20 4 L 4 4 z M 4 6 L 20 6 L 20 18 L 4 18 L 4 6 z M 14.5 11 L 11 15 L 8.5 12.5 L 5.7773438 16 L 18.25 16 L 14.5 11 z', '24', '24' ); ?>;
	}

	.entry-meta .comment-icon:before
	{
		content: <?php echo theretailer_get_icon( '18', '18', $primary_color_rgb , 'M 16 3 C 12.210938 3 8.765625 4.113281 6.21875 5.976563 C 3.667969 7.835938 2 10.507813 2 13.5 C 2 17.128906 4.472656 20.199219 8 22.050781 L 8 29 L 14.746094 23.9375 C 15.15625 23.96875 15.570313 24 16 24 C 19.789063 24 23.234375 22.886719 25.78125 21.027344 C 28.332031 19.164063 30 16.492188 30 13.5 C 30 10.507813 28.332031 7.835938 25.78125 5.976563 C 23.234375 4.113281 19.789063 3 16 3 Z M 16 5 C 19.390625 5 22.445313 6.015625 24.601563 7.589844 C 26.757813 9.164063 28 11.246094 28 13.5 C 28 15.753906 26.757813 17.835938 24.601563 19.410156 C 22.445313 20.984375 19.390625 22 16 22 C 15.507813 22 15.015625 21.972656 14.523438 21.925781 L 14.140625 21.894531 L 10 25 L 10 20.859375 L 9.421875 20.59375 C 6.070313 19.019531 4 16.386719 4 13.5 C 4 11.246094 5.242188 9.164063 7.398438 7.589844 C 9.554688 6.015625 12.609375 5 16 5 Z ', '32', '32' ); ?>;
	}

	a.button.added::before,
	button.button.added::before,
	input.button.added::before,
	#respond input#submit.added::before,
	#content input.button.added::before,
	.woocommerce a.button.added::before,
	.woocommerce button.button.added::before,
	.woocommerce input.button.added::before,
	.woocommerce #respond input#submit.added::before,
	.woocommerce #content input.button.added::before
	{
		background-image: <?php echo theretailer_get_icon( '22', '22', '255,255,255', 'M 20.292969 5.2929688 L 9 16.585938 L 4.7070312 12.292969 L 3.2929688 13.707031 L 9 19.414062 L 21.707031 6.7070312 L 20.292969 5.2929688 z' ); ?> !important;
	}
	
	<?php
	if ((!isset($theretailer_theme_options['breadcrumbs'])) || ($theretailer_theme_options['breadcrumbs'] == "0")) {
		?>
		.woocommerce-breadcrumb
		{
			display:none;
		}
	<?php } ?>
	
	</style>
	
	<?php 
	}
	
} //if
add_action( 'wp_head', 'theretailer_custom_styles', 100 );
?>