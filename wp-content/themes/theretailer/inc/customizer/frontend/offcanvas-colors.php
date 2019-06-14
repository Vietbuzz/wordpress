<?php 
	$header_bg_col 	= GBT_OPT::getOption('header_background_color'); 
	$header_col 	= GBT_OPT::getOption('header_text_color'); 
	$header_bg_rgb 	= getbowtied_hex2rgb($header_bg_col); 
	$header_col_rgb = getbowtied_hex2rgb($header_col); 
	$header_medium 	= "rgba(" . getbowtied_hex2rgb($header_col) 		. "," . '0.5' . ")"; 
	$header_light 	= "rgba(" . getbowtied_hex2rgb($header_col) 		. "," . '0.3' . ")"; 
?>
<style>
	<?php // BACKGROUND COLOR ?>
	
	<?php // TEXT COLOR ?>
		.header .offcanvas,
		.header nav .menu.active,
		.header nav .menu.active ul.primary-menu,
		.header nav.nav .menu,
		.header nav.nav .menu ul.primary-menu,
		.header .nav .menu .mobile-secondary-menu,
		.header .nav .mobile-menu-footer {
			background-color: <?php echo esc_attr($header_bg_col); ?>;
			color: <?php echo esc_attr($header_col); ?>;
		}

	/* Header Light Underline */
		.header .search-box .search-wrapper .search-form label,
		.header .offcanvas input.woocommerce-Input
		{
			-webkit-box-shadow: inset 0 -1px 0 0 <?php echo esc_attr($header_light); ?>;
			box-shadow: inset 0 -1px 0 0 <?php echo esc_attr($header_light); ?>;
		}

	/* Header Medium Text Color */
		.header .offcanvas #customer_login .woocommerce-form-login > p.woocommerce-LostPassword a,
		.header .shopping-cart .woocommerce-mini-cart__total > strong,
		.header .nav .menu .primary-menu > li > .sub-menu > li > ul li,
		.header .offcanvas dl.variation
		{
			color: <?php echo esc_attr($header_medium); ?>;
		}

		.offcanvas input::-webkit-input-placeholder { color: <?php echo esc_attr($header_medium); ?>; }
		.offcanvas input::-moz-placeholder { color: <?php echo esc_attr($header_medium); ?>; }
		.offcanvas input::-ms-input-placeholder { color: <?php echo esc_attr($header_medium); ?>; }
		.offcanvas input::-moz-placeholder { color: <?php echo esc_attr($header_medium); ?>; }

	/* Header Medium Underline */
		.header .offcanvas #customer_login .woocommerce-form-login > p.woocommerce-LostPassword a,
		.header .nav .menu .primary-menu > li > .sub-menu > li > ul li a
		{

			background-image: linear-gradient(to top, <?php echo esc_attr($header_medium); ?> 1px, <?php echo esc_attr($header_medium); ?> 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px); 
			background-image: -webkit-linear-gradient(to top, <?php echo esc_attr($header_medium); ?> 1px, <?php echo esc_attr($header_medium); ?> 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px);
			background-image: -moz-linear-gradient(to top, <?php echo esc_attr($header_medium); ?> 1px, <?php echo esc_attr($header_medium); ?> 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px);
			background-image: -o-linear-gradient(to top, <?php echo esc_attr($header_medium); ?> 1px, <?php echo esc_attr($header_medium); ?> 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px);
			background-image: -ms-linear-gradient(to top, <?php echo esc_attr($header_medium); ?> 1px, <?php echo esc_attr($header_medium); ?> 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px); 
			
		}

	/* Header Normal Underline */
		.widget_shopping_cart_content .cart_list .mini_cart_item a:nth-child(2),
		.header .search-box .search-wrapper .search-form label,
		.header .search-box .search-wrapper .search-results .item .product-info .small-heading-6 a,
		.header .shopping-cart .woocommerce-mini-cart__buttons a:first-child,
		.header .offcanvas .account-wrapper .toggle-forms > button,
		.header .offcanvas input.woocommerce-Input,
		.offcanvas #customer_login .u-column2 a
		{
			background-image: linear-gradient(to top, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px); 
			background-image: -webkit-linear-gradient(to top, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px);
			background-image: -moz-linear-gradient(to top, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px);
			background-image: -o-linear-gradient(to top, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px);
			background-image: -ms-linear-gradient(to top, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px); 
			border: none;
		}


	.header .shopping-cart .woocommerce-mini-cart__buttons a:last-child,
	.header .offcanvas .account-wrapper .button.woocommerce-Button,
	.header .nav .menu .primary-menu > li.menu-item-has-children .plus-minus::after,
	.header .nav .menu .primary-menu > li.menu-item-has-children .plus-minus::before {
		background-color: <?php echo esc_attr($header_col); ?>;
		color: <?php echo esc_attr($header_bg_col); ?>;
	}

/*	.header .shopping-cart .woocommerce-mini-cart__buttons a:first-child,
	.header .offcanvas .account-wrapper .toggle-forms > button {
		background-image: linear-gradient(transparent calc( 100% - 1px), <?php echo esc_attr($header_col); ?> 1px);
		color: <?php echo esc_attr($header_col); ?>;
	}*/

	 @media (min-width: 1200px) {
		.header .nav .menu .primary-menu > li a {
			background-image: linear-gradient(to top, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px); 
			background-image: -webkit-linear-gradient(to top, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px);
			background-image: -moz-linear-gradient(to top, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px);
			background-image: -o-linear-gradient(to top, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px);
			background-image: -ms-linear-gradient(to top, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgb(<?php  echo esc_attr($header_col_rgb); ?>) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($header_bg_rgb); ?>, 0) 1px); 
		}
	 }

	.header .shopping-cart .woocommerce-mini-cart__total .woocommerce-Price-amount,
	.header .shopping-cart .cart_list .mini_cart_item .remove_from_cart_button:hover::before,
	.header .search-box .search-wrapper .search-form label .submit-form,
	.header .nav .menu .primary-menu > li > .sub-menu > li,
	.header .nav .menu.active ~ .vertical-menu .left-menu-bar.active,
	.offcanvas input,
	.header .nav .menu .primary-menu > li > .sub-menu,
	.header .offcanvas .account-wrapper .toggle-forms > button,
	.offcanvas #customer_login .u-column2 a {
		color: <?php echo esc_attr($header_col); ?>;
	}

	.header .offcanvas #customer_login .woocommerce-form-login > p .woocommerce-form__label-for-checkbox span::before {
		border: 1px solid <?php echo esc_attr($header_col); ?>;
	}

	.offcanvas #customer_login .woocommerce-form-login > p .woocommerce-form__label-for-checkbox input:checked ~ span::before,
	.offcanvas #customer_login .woocommerce-form-login > p .woocommerce-form__label-for-checkbox span:hover::before {
	    background-color: <?php echo esc_attr($header_col); ?>;
	    -webkit-box-shadow: inset 0 0 0 2px <?php echo esc_attr($header_bg_col); ?>;
	    box-shadow: inset 0 0 0 2px <?php echo esc_attr($header_bg_col); ?>;
	}

	.header .search-box .search-wrapper .search-form label .submit-form.loading::before,
	.header .nav .vertical-menu .left-menu-bar.active .secondary-menu li a::after {
		background-color: <?php echo esc_attr($header_col); ?>;
	}
</style>