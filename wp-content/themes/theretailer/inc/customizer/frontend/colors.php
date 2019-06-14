	<?php
		//==============================================================================
		//	Site colors
		//============================================================================== ?>
		<?php 
			$text_color  	= GBT_OPT::getOption('main_font_color');
			$body_color	 	= GBT_OPT::getOption('background_color');
			$body_dark	 	= GBT_OPT::getOption('body_dark');
			$text_dark 	 	= GBT_OPT::getOption('text_dark');
			$text_medium 	= GBT_OPT::getOption('text_medium');
			$text_light		= GBT_OPT::getOption('text_light');	
			$text_ultra_light = GBT_OPT::getOption('text_ultra_light');

			$body_rgb 	  = getbowtied_hex2rgb($body_color);
			$text_rgb 	  = getbowtied_hex2rgb($text_color);

		?>
		<style>
			/* Text Ultra light background */
				.widgets-section,
				body.woocommerce-order-received .entry-content .woocommerce .woocommerce-order .woocommerce-order-overview,
				.wp-block-table.is-style-stripes tr:nth-child(odd)
				{
					background-color: <?php echo esc_attr($text_ultra_light); ?>
				}
			/* Text Light Border*/
				.widget_tag_cloud .tagcloud a,
				select,
				.single-post .single-wrapper .meta-tags a,
				.widget_layered_nav_filters ul li a,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .actions > button[type="submit"]:disabled,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .shipping .woocommerce-shipping-calculator .shipping-calculator-form .form-row input,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .shipping .woocommerce-shipping-calculator .shipping-calculator-form .form-row .select2-selection.select2-selection--single
				{
					border: 1px solid <?php echo esc_attr($text_light); ?>;
				}

			/* Text Light Border Bottom */
				body table tr,
				body hr,
				body .select2-search--dropdown
				{
					border-bottom: 1px solid <?php echo esc_attr($text_light); ?>;
				}
				
				.widget_tag_cloud .tagcloud a,
				select,
				.single-post .single-wrapper .meta-tags a,
				.widget_layered_nav_filters ul li a,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .actions > button[type="submit"]:disabled,
				.woocommerce-order-details table tfoot,
				body table tr,
				body hr,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-review-order-table .cart_item:last-child,
				body.woocommerce-account .entry-content .woocommerce .woocommerce-MyAccount-content .woocommerce-orders-table.woocommerce-MyAccount-orders tbody tr:last-child
				{
					border-color: <?php echo esc_attr($text_light); ?>;
				}

				.wp-block-code
				{
					border-color: <?php echo esc_attr($text_ultra_light); ?>;
				}

				.wp-block-pullquote
				{
					border-color: <?php echo esc_attr($text_medium); ?>;
				}

			/* Text Light Color */
				.single-post .single-wrapper .entry-post-meta li::after,
				.single-header .post-info .post-author::after
				{
					color: <?php echo esc_attr($text_light); ?>;
				}

			/* Text Light Background Color */
				.single-post .single-wrapper .page-links > a::after, .single-post .single-wrapper .page-links > span::after,
				.woocommerce-pagination .page-numbers li::after,
				.shop-categories .shop-list .cat-item::after,
				.archive-header .archive-list .cat-item::after,
				body.woocommerce-account .entry-content .woocommerce .woocommerce-MyAccount-navigation ul li::after,
				div.product .summary .single_add_to_cart_button.loading,
				.widget_price_filter .price_slider_wrapper .price_slider
				{
					background-color: <?php echo esc_attr($text_light); ?>;
				}

				.blockUI.blockOverlay
				{
					background: <?php echo esc_attr($body_dark); ?> !important;
				}

			/* Text Light Box Shadow */
				input,
				textarea,
				.select2-selection.select2-selection--single,
				.widget_search .search-form label .search-field,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .actions .coupon,
				div.product .summary .cart .quantity .input-text,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .cart_item td.product-quantity input[type="number"]
				{
					-webkit-box-shadow: inset 0 -1px 0 0 <?php echo esc_attr($text_light); ?>;
					box-shadow: inset 0 -1px 0 0 <?php echo esc_attr($text_light); ?>;
				}

			/* Text Medium Color */
				.page-footer .sub-footer .copyright,
				.articles-section .post-item .post-details .post-meta > a,
				.widget_recent_entries ul li span,
				.widget_recent_comments ul .recentcomments .comment-author-link,
				.widget_rss ul li .rss-date,
				.widget_categories ul .cat-item,
				.widget_calendar .calendar_wrap table tbody,
				.archive-header .archive-list .cat-item .post-count,
				.single-post .single-wrapper .entry-post-meta .post-date span,
				.single-header .post-info .gray-text,
				body figcaption,
				body table thead,
				.comments-section .comments .comments-list .comment article .comment-meta .comment-metadata > a, 
				.comments-section .comments .comments-list .comment article .comment-meta .comment-metadata .edit-link,
				.comments-section .comments .comments-list .pingback .comment-body .edit-link,
				.gallery .gallery-item .gallery-caption,
				.comments-section .comments .comments-list .comment article .reply a,
				.shop-categories .shop-list .cat-item .count,
				.products li .shop-product-box .product-info .price del,
				.star-rating::before,
				.products li .shop-product-box .product_badges span.out-of-stock,
				.sale-badge-box .out-of-stock,
				.widget_product_categories .product-categories .cat-item .count,
				.woocommerce-widget-layered-nav .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item .count,
				.widget_shopping_cart_content .cart_list .mini_cart_item .remove_from_cart_button::before,
				.widget_shopping_cart_content .woocommerce-mini-cart__total > strong,
				.widget_top_rated_products .product_list_widget li del, 
				.widget_products .product_list_widget li del, 
				.widget_recently_viewed_products .product_list_widget li del,
				.widget_rating_filter .wc-layered-nav-rating a,
				.section-categories .cont-row .category-grid-item .category-title .count,
				div.product .summary .woocommerce-product-rating .woocommerce-review-link,
				div.product .summary .stock,
				div.product .summary .product_meta > span,
				div.product .woocommerce-tabs .woocommerce-Reviews .woocommerce-Reviews-title,
				div.product .woocommerce-tabs .woocommerce-Reviews .commentlist .comment .comment_container .comment-text .meta,
				div.product .woocommerce-tabs .woocommerce-Reviews .comment-respond .comment-form .comment-form-rating label[for="rating"],
				div.product .woocommerce-tabs .woocommerce-Reviews .comment-respond .comment-form .comment-form-rating .stars a,
				div.product .woocommerce-tabs .woocommerce-Reviews .comment-respond .comment-form .comment-form-rating .stars a:hover ~ a::before,
				div.product .woocommerce-tabs .woocommerce-Reviews .comment-respond .comment-form .comment-form-rating .stars.selected a.active ~ a::before,
				div.product .summary .variations_form .variations tbody tr td.label,
				.select2-container--default .select2-selection--single .select2-selection__placeholder,
				.select2-selection.select2-selection--single,
				div.product .summary .variations_form .variations tbody tr td.value .reset_variations,
				div.product .summary .grouped_form table tr td .quantity .increase,
				div.product .summary .grouped_form table tr td .quantity .decrease,
				div.product .summary .grouped_form table tr td.woocommerce-grouped-product-list-item__price del,
				div.product .woocommerce-tabs .shop_attributes tr th,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table thead tr th,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .cart_item td.product-quantity .increase, 
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .cart_item td.product-quantity .decrease,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .actions > button[type="submit"]:disabled,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .cart-subtotal th,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .order-total th,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .actions .coupon input[type="text"],
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-review-order-table .cart_item .product-name,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-review-order-table tfoot .cart-subtotal th,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-review-order-table tfoot .order-total th,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-payment .wc_payment_methods > li .payment_box p,
				body.woocommerce-order-received .entry-content .woocommerce .woocommerce-order .woocommerce-order-overview li,
				.woocommerce-order-details table thead tr th,
				.woocommerce-order-details table tfoot tr th,
				body.woocommerce-account .entry-content .woocommerce .woocommerce-MyAccount-content .woocommerce-orders-table.woocommerce-MyAccount-orders tbody tr td.woocommerce-orders-table__cell-order-total,
				#customer_login .woocommerce-form-login > p.woocommerce-LostPassword a,
				.page-footer .sub-footer .footer-links,
				.related-articles .post-item .post-details .post-meta > a,
				body.woocommerce-wishlist #yith-wcwl-form .wishlist_table thead tr th,
				body.woocommerce-wishlist #yith-wcwl-form .wishlist_table tbody tr td.product-stock-status span,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .shipping th,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .shipping .woocommerce-shipping-calculator .shipping-calculator-button,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-review-order-table tfoot .shipping th,
				body.woocommerce-order-pay .entry-content .woocommerce #order_review table tbody td ul li p,
				body.woocommerce-order-pay .entry-content .woocommerce #order_review table tbody td ul li strong,
				body.woocommerce-order-pay .entry-content .woocommerce #order_review .wc_payment_methods > li .payment_box p,
				body.woocommerce-order-pay .entry-content .woocommerce #order_review p,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .shipping .woocommerce-shipping-calculator .shipping-calculator-form .form-row input,
				body figcaption,
				.wp-block-image figcaption,
				.comments-section .comments-form .comment-form .comment-notes,
				body.woocommerce-wishlist #yith-wcwl-form .wishlist_table tbody tr td.product-price del,
				dl.variation,
				.widget_recent_reviews .product_list_widget li .reviewer,
				.backorder_notification,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .shipping .woocommerce-shipping-destination,
				body .select2-search--dropdown,
				.wp-block-audio figcaption,
				.wp-block-quote cite,
				.wp-block-latest-posts__post-date,
				.gbt_18_bs_posts_grid .gbt_18_bs_posts_grid_wrapper .gbt_18_posts_categories a
				{
					color: <?php echo esc_attr($text_medium); ?>;
				}

				textarea::-webkit-input-placeholder { color: <?php echo esc_attr($text_medium); ?>; }
				textarea::-moz-placeholder { color: <?php echo esc_attr($text_medium); ?>; }
				textarea::-ms-input-placeholder { color: <?php echo esc_attr($text_medium); ?>; }
				textarea::-moz-placeholder { color: <?php echo esc_attr($text_medium); ?>; }

				input::-webkit-input-placeholder { color: <?php echo esc_attr($text_medium); ?>; }
				input::-moz-placeholder { color: <?php echo esc_attr($text_medium); ?>; }
				input::-ms-input-placeholder { color: <?php echo esc_attr($text_medium); ?>; }
				input::-moz-placeholder { color: <?php echo esc_attr($text_medium); ?>; }
			
			/* Text Medium Underline */
				.articles-section .post-item .post-details .post-meta > a,
				div.product .summary .variations_form .variations tbody tr td.value .reset_variations,
				#customer_login .u-column1 a, #customer_login .u-column2 a,
				.related-articles .post-item .post-details .post-meta > a,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .shipping .woocommerce-shipping-calculator .shipping-calculator-button,
				.gbt_18_bs_posts_grid .gbt_18_bs_posts_grid_wrapper .gbt_18_posts_categories a
				{
					background-image: linear-gradient(to top, <?php echo esc_attr($text_medium); ?> 1px, <?php echo esc_attr($text_medium); ?> 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px); 
					background-image: -webkit-linear-gradient(to top, <?php echo esc_attr($text_medium); ?> 1px, <?php echo esc_attr($text_medium); ?> 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px);
					background-image: -moz-linear-gradient(to top, <?php echo esc_attr($text_medium); ?> 1px, <?php echo esc_attr($text_medium); ?> 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px);
					background-image: -o-linear-gradient(to top, <?php echo esc_attr($text_medium); ?> 1px, <?php echo esc_attr($text_medium); ?> 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px);
					background-image: -ms-linear-gradient(to top, <?php echo esc_attr($text_medium); ?> 1px, <?php echo esc_attr($text_medium); ?> 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px); 
				}
			/* Text Medium as Border */
				.products li .shop-product-box .product_badges span.out-of-stock,
				.sale-badge-box .out-of-stock
				{
					border: 1px solid <?php echo esc_attr($text_medium); ?>;	
				}

			/* Text Medium Border Bottom */
				.comments-section .comments .comments-list .comment article .reply a:hover,
				{
					border-bottom: 1px solid <?php echo esc_attr($text_medium); ?>;
				}

			/* Text Medium as Background */
				.comments-section .comments .comments-list .comment article .comment-meta .comment-metadata > a::after, 
				.comments-section .comments .comments-list .comment article .comment-meta .comment-metadata .edit-link::after,
				.page-footer .sub-footer .footer-links li a::after,
				.page-footer .sub-footer .copyright a::after
				{
					background-color: <?php echo esc_attr($text_medium); ?>;
				}
			
			/* Text Normal Color */
				.widget_categories ul .cat-item a,
				.widget_calendar .calendar_wrap table thead,
				.widget_calendar .calendar_wrap table tbody #today,
				.widget_pages ul li a,
				.single-post .single-wrapper .entry-post-meta .comments-count,
				.single-post .single-wrapper .entry-post-meta .share-post,
				.comments-section .comments .heading .post-title,
				.comments-section .comments .comments-list .comment article .comment-meta .comment-author .fn,
				.comments-section .comments .comments-list .comment article .comment-content p,
				.blog-pagination-default .posts-navigation .nav-links,
				input,
				textarea,
				textarea:hover,
				textarea:active,
				textarea:focus,
				.products li .shop-product-box .overlay-icons a.add-to-wishlist::after,
				.products li .shop-product-box .overlay-icons a.quick-view::after,
				.star-rating > span::before,
				.woocommerce-pagination .page-numbers li .next::before,
				.woocommerce-pagination .page-numbers li .prev::before,
				.widget_product_search .woocommerce-product-search button[type="submit"]::before,
				.widget_price_filter .price_slider_wrapper .price_slider_amount .button,
				.woocommerce-widget-layered-nav .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item.chosen a:hover::before,
				.widget_layered_nav_filters ul li a::before,
				.widget_layered_nav_filters ul li a,
				.widget_shopping_cart_content .cart_list .mini_cart_item .remove_from_cart_button:hover::before,
				.widget_shopping_cart_content .woocommerce-mini-cart__total .woocommerce-Price-amount,
				.section-categories .cont-row .category-grid-item .category-title,
				div.product .woocommerce-product-gallery .woocommerce-product-gallery__trigger::before,
				div.product .summary .woocommerce-product-rating .woocommerce-review-link:hover,
				div.product .summary .price ins span,
				div.product .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse::before,
				div.product .woocommerce-tabs .tabs li.active a,
				div.product .woocommerce-tabs .tabs li a,
				div.product .woocommerce-tabs .woocommerce-Reviews .commentlist .comment .comment_container .comment-text .meta .woocommerce-review__author,
				div.product .woocommerce-tabs .woocommerce-Reviews .commentlist .comment .comment_container .comment-text .description p,
				div.product .woocommerce-tabs .woocommerce-Reviews .comment-respond .comment-form .comment-form-rating .stars:hover a::before,
				div.product .woocommerce-tabs .woocommerce-Reviews .comment-respond .comment-form .comment-form-rating .stars.selected a.active::before,
				div.product .woocommerce-tabs .woocommerce-Reviews .comment-respond .comment-form .comment-form-rating .stars.selected a:not(.active)::before,
				div.product .summary .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a::before,
				.select2-selection.select2-selection--single:hover .select2-selection__arrow::before,
				body .select2-container--default .select2-results__option--highlighted[aria-selected], body .select2-container--default .select2-results__option--highlighted[data-selected],
				div.product .summary .variations_form .variations .select2-selection__rendered,
				body .pswp__button--arrow--left, 
				body .pswp__button--arrow--right, 
				body .pswp__button--close, 
				body .pswp__button--zoom, 
				body .pswp__button--fs,
				body .pswp__counter,
				div.product .summary .grouped_form table tr td .quantity .input-text,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .cart_item td.product-quantity input[type="number"],
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .cart_item td.product-quantity .increase:hover, 
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .cart_item td.product-quantity .decrease:hover,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .cart-subtotal td,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .order-total td,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .actions .coupon .button,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .actions .coupon input[type="text"]:focus,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .cart_item td.product-remove .remove::before,
				.woocommerce-message,
				.woocommerce-info,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-review-order-table .cart_item .product-name strong,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-review-order-table tfoot .cart-subtotal td,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-review-order-table tfoot .order-total td,
				.woocommerce-privacy-policy-text a,
				.woocommerce-error,
				.select2-container--default .select2-selection--single .select2-selection__rendered,
				body .select2-container--default .select2-results__option[aria-selected="true"], body .select2-container--default .select2-results__option[data-selected="true"],
				body.woocommerce-order-received .entry-content .woocommerce .woocommerce-order .woocommerce-order-overview li strong,
				body.woocommerce-account .entry-content .woocommerce .woocommerce-MyAccount-content .woocommerce-orders-table.woocommerce-MyAccount-orders tbody tr td,
				body.woocommerce-account .entry-content .woocommerce .woocommerce-MyAccount-content .woocommerce-orders-table.woocommerce-MyAccount-orders tbody tr td.woocommerce-orders-table__cell-order-total span,
				body mark,
				.border-btn,
				body.woocommerce-wishlist #yith-wcwl-form .wishlist_table tbody tr td.product-remove .remove::before,
				body.page .wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color), 
				body.single-post .wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color),
				.wp-block-cover-image h2,
				div.product .summary .cart .quantity .input-text,
				.select2-selection.select2-selection--single .select2-selection__arrow::before,
				div.product .summary .cart.grouped_form .quantity.custom .input-text,
				.categories-header p,
				div.product .summary .product_meta a:hover,
				div.product .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse::before,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .actions > button[type="submit"],
				.widget_archive ul li a,
				.getbowtied_qv_content button.close-button,
				.woocommerce-terms-and-conditions-wrapper a,
				div.product .woocommerce-tabs .woocommerce-Reviews .commentlist li .comment_container .comment-text .meta .woocommerce-review__author,
				div.product .woocommerce-tabs .woocommerce-Reviews .commentlist li .comment_container .comment-text .description p,
				body .select2-search--dropdown::after,
				.wp-block-code,
				.wp-block-latest-posts select,
				.wp-block-archives select,
				.wp-block-categories select,
				.wp-block-pullquote
				{
					color: <?php echo esc_attr($text_color); ?>;
				}
			
			/* Text Normal Underline */
				.archive-header .archive-list .cat-item a,
				.articles-section .post-item .post-details .post-title a,
				.articles-section .post-item .read-more,
				.load-more,
				.widget_recent_entries ul li a,
				.widget_recent_comments ul .recentcomments a,
				.widget_rss ul li .rsswidget,
				.widget_meta ul li a,
				.widget_categories ul .cat-item a,
				.widget_search .search-form label .search-field,
				.widget_pages ul li a,
				body .single-content > :not(.woocommerce) a,
				body .single-content > :not(.woocommerce) div.product .gbt_18_slide_text a,
				body .single-content > :not(.woocommerce) div.product .gbt_18_slide_title a,
				.comments-section .comments .comments-list .pingback .comment-body > a,
				textarea,
				.shop-categories .shop-list .cat-item a,
				.products li .shop-product-box .product-info .add_to_cart_button, 
				.products li .shop-product-box .product-info .product_type_external, 
				.products li .shop-product-box .product-info .product_type_grouped, 
				.products li .shop-product-box .product-info .product_type_simple, 
				.products li .shop-product-box .product-info .added_to_cart,
				.woocommerce-pagination .page-numbers li > a, .woocommerce-pagination .page-numbers li > span,
				.products li .shop-product-box .product-info .title h2,
				.widget_product_search .woocommerce-product-search,
				.widget_product_search .woocommerce-product-search:hover, 
				.widget_product_search .woocommerce-product-search:focus,
				.widget_product_categories .product-categories .cat-item a,
				.widget_price_filter .price_slider_wrapper .price_slider_amount .button,
				.widget_shopping_cart_content .woocommerce-mini-cart__buttons a:first-child,
				.widget_top_rated_products .product_list_widget li a .product-title, 
				.widget_products .product_list_widget li a .product-title, 
				.widget_recently_viewed_products .product_list_widget li a .product-title,
				body.woocommerce .summary a:not(.add_to_wishlist):not([class*="star-"]), 
				body.woocommerce .woocommerce-tabs a:not(.add_to_wishlist):not([class*="star-"]),
				div.product .summary .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a,
				.select2-selection.select2-selection--single,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .continue-shopping,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .actions .coupon,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-info a,
				.woocommerce-privacy-policy-text a,
				body.woocommerce-account .entry-content .woocommerce .woocommerce-MyAccount-navigation ul li a,
				body.woocommerce-account .entry-content .woocommerce .woocommerce-MyAccount-content a,
				.border-btn,
				body.woocommerce.woocommerce-account .single-content .woocommerce a,
				body .textwidget a,
				.related-articles .post-item .post-details .post-title a,
				body.woocommerce-wishlist #yith-wcwl-form .wishlist_table tbody tr td.product-add-to-cart a,
				body.woocommerce-wishlist #yith-wcwl-form .wishlist_table tbody tr td.product-name a,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .cart_item td.product-name a,
				body.woocommerce-cart .entry-content .woocommerce .return-to-shop a,
				.single-post .single-wrapper .entry-post-meta .comments-count,
				body.woocommerce-shop .shop-content .shop-header-wrapper .shop-header-block .sort-products form .select2-container .select2-selection__rendered,
				.single-header .post-info .post-category a,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .cart_item td.product-quantity input[type="number"],
				input,
				textarea,
				.woocommerce-message a,
				.header .nav .vertical-menu .left-menu-bar .secondary-menu li a,
				.widget_nav_menu ul li a,
				.widget_archive ul li a,
				.widget_recent_reviews .product_list_widget li a .product-title,
				.woocommerce-terms-and-conditions-wrapper a
				{
					background-image: linear-gradient(to top, rgb(<?php  echo esc_attr($text_rgb); ?>) 1px, rgb(<?php  echo esc_attr($text_rgb); ?>) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px); 
					background-image: -webkit-linear-gradient(to top, rgb(<?php  echo esc_attr($text_rgb); ?>) 1px, rgb(<?php  echo esc_attr($text_rgb); ?>) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px);
					background-image: -moz-linear-gradient(to top, rgb(<?php  echo esc_attr($text_rgb); ?>) 1px, rgb(<?php  echo esc_attr($text_rgb); ?>) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px);
					background-image: -o-linear-gradient(to top, rgb(<?php  echo esc_attr($text_rgb); ?>) 1px, rgb(<?php  echo esc_attr($text_rgb); ?>) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px);
					background-image: -ms-linear-gradient(to top, rgb(<?php  echo esc_attr($text_rgb); ?>) 1px, rgb(<?php  echo esc_attr($text_rgb); ?>) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px); 
					border: none;
 
					
				}

				.woocommerce-invalid input,
				.woocommerce-invalid-required-field,
				.woocommerce-invalid input:hover {
					background-image: linear-gradient(to top, rgb(255,0,0) 1px, rgb(255,0,0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px); 
					background-image: -webkit-linear-gradient(to top, rgb(255,0,0) 1px, rgb(255,0,0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px);
					background-image: -moz-linear-gradient(to top, rgb(255,0,0) 1px, rgb(255,0,0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px);
					background-image: -o-linear-gradient(to top, rgb(255,0,0) 1px, rgb(255,0,0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px);
					background-image: -ms-linear-gradient(to top, rgb(255,0,0) 1px, rgb(255,0,0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px); 
					background-size:100% 100%;
					border: none;
					box-shadow: inset 0 -1px 0 0 rgba(255,0,0,0.3);
				}

				.woocommerce-validated input,
				.woocommerce-validated input:hover {
					background-image: linear-gradient(to top, rgb(116,182,112) 1px, rgb(116,182,112) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px); 
					background-image: -webkit-linear-gradient(to top, rgb(116,182,112) 1px, rgb(116,182,112) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px);
					background-image: -moz-linear-gradient(to top, rgb(116,182,112) 1px, rgb(116,182,112) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px);
					background-image: -o-linear-gradient(to top, rgb(116,182,112) 1px, rgb(116,182,112) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px);
					background-image: -ms-linear-gradient(to top, rgb(116,182,112) 1px, rgb(116,182,112) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px, rgba(<?php echo esc_attr($body_rgb); ?>, 0) 1px); 
					background-size:100% 100%;
					border: none;
					box-shadow: inset 0 -1px 0 0 rgba(116,182,112,0.3);
				}

			/* Text Normal as Background */
				.black-btn, 
				button[type="submit"], 
				input[type="submit"],
				button[type="reset"], 
				input[type="reset"],
				.header .nav .vertical-menu .left-menu-bar .secondary-menu li a::after,
				body blockquote::before,
				.comments-section .comments .comments-list .comment article .comment-meta .comment-author .fn a::after,
				.products li .shop-product-box .product-info .add_to_cart_button.loading::after,
				.woocommerce-pagination .page-numbers li .current::before,
				body.woocommerce-shop .shop-content .shop-header-wrapper .shop-header-block .filter .toggle-filter span::after,
				.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-range,
				.woocommerce-widget-layered-nav .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item a::after,
				.widget_shopping_cart_content .woocommerce-mini-cart__buttons a:last-child,
				div.product .summary .single_add_to_cart_button,
				div.product .summary .cart .quantity .decrease, 
				div.product .summary .cart .quantity .increase,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout a,
				body.woocommerce-checkout .entry-content .woocommerce .checkout_coupon .button,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-payment .place-order #place_order,
				#customer_login .woocommerce-form-login > p .woocommerce-form__label-for-checkbox span:hover::before,
				.load-more .loader::after,
				.wp-block-button__link,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .shipping #shipping_method > li input:checked ~ label::before,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-review-order-table tfoot .shipping #shipping_method > li input:checked ~ label::before,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-payment .wc_payment_methods > li input:checked ~ label::before,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-shipping-fields #ship-to-different-address .woocommerce-form__input-checkbox:checked ~ span::before,
				body.woocommerce-order-pay .entry-content .woocommerce #order_review .wc_payment_methods > li input:checked ~ label::before,
				body.woocommerce-order-pay .entry-content .woocommerce #order_review .wc_payment_methods > li label:hover::before,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-payment .wc_payment_methods > li label:hover::before,
				.widget_rating_filter .wc-layered-nav-rating a::after,
				div.product .summary .cart .quantity.custom .input-text,
				div.product .summary .single_add_to_cart_button::before,
				.woocommerce-store-notice,
				div.product .summary .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a.loading::after,
				body #yith-wcwl-popup-message,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-payment .woocommerce-terms-and-conditions-wrapper .woocommerce-form__input-checkbox:checked ~ .woocommerce-terms-and-conditions-checkbox-text::before,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-form-login p .button,
				body.loader-pulsate::after
				{
					background-color: <?php echo esc_attr($text_color); ?>;
				}

			/* Text Normal Border*/
				.widget_tag_cloud .tagcloud a:hover,
				.single-post .single-wrapper .meta-tags a:hover,
				.products li .shop-product-box .product_badges span.onsale,
				.woocommerce-widget-layered-nav .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item a::before,
				.widget_layered_nav_filters ul li a:hover,
				.widget_rating_filter .wc-layered-nav-rating a::before,
				.sale-badge-box .onsale,
				#customer_login .woocommerce-form-login > p .woocommerce-form__label-for-checkbox span::before,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .shipping #shipping_method > li label::before,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-review-order-table tfoot .shipping #shipping_method > li label::before,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-payment .wc_payment_methods > li label::before,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-shipping-fields #ship-to-different-address span::before,
				body.woocommerce-order-pay .entry-content .woocommerce #order_review .wc_payment_methods > li label::before,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .shipping .woocommerce-shipping-calculator .shipping-calculator-form p:not(.form-row) .button,
				.products li .shop-product-box .product-info .add_to_cart_button.loading,
				.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-handle,
				.woocommerce-widget-layered-nav .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item a:hover::before,
				.load-more .loader,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .shipping #shipping_method > li input:checked ~ label::before,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-review-order-table tfoot .shipping #shipping_method > li input:checked ~ label::before,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-payment .wc_payment_methods > li input:checked ~ label::before,
				body.woocommerce-order-pay .entry-content .woocommerce #order_review .wc_payment_methods > li input:checked ~ label::before,
				body.woocommerce-order-pay .entry-content .woocommerce #order_review .wc_payment_methods > li label:hover::before,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-payment .wc_payment_methods > li label:hover::before,
				.widget_rating_filter .wc-layered-nav-rating a:hover::before,
				body.woocommerce-cart .entry-content .woocommerce .woocommerce-cart-form table tbody .actions > button[type="submit"],
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-payment .woocommerce-terms-and-conditions-wrapper .woocommerce-terms-and-conditions-checkbox-text::before,
				.wp-block-quote:not(.is-large):not(.is-style-large)
				{
					border-color: <?php echo esc_attr($text_color); ?>;
				}

			/* Body Color */
				.products li .shop-product-box .overlay-icons a .tooltip,
				.woocommerce-pagination .page-numbers li .next::after,
				.woocommerce-pagination .page-numbers li .next,
				.woocommerce-pagination .page-numbers li .prev::after,
				.woocommerce-pagination .page-numbers li .prev:before,
				.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-handle,
				.widget_layered_nav_filters ul li a,
				body .pswp__bg,
				.select2-dropdown,
				div.product .summary .cart .quantity .input-text,
				div.product .summary .cart.grouped_form .quantity.custom .input-text,
				.getbowtied_qv_content,
				body .select2-search--dropdown,
				body .select2-container--default .select2-search--dropdown .select2-search__field
				{
					background-color: <?php echo esc_attr($body_color); ?>;
				}

			/* Body Border Left Color */
				.products li .shop-product-box .overlay-icons a .tooltip::after 
				{
					border-left-color: <?php echo esc_attr($body_color); ?>;
				}
			
			/* Body Color Box Shadow */
				#customer_login .woocommerce-form-login > p .woocommerce-form__label-for-checkbox span:hover::before
				{
					-webkit-box-shadow: inset 0 0 0 3px <?php echo esc_attr($body_color); ?>;
					box-shadow: inset 0 0 0 3px <?php echo esc_attr($body_color); ?>;
				}

				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .shipping #shipping_method > li input:checked ~ label::before,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-review-order-table tfoot .shipping #shipping_method > li input:checked ~ label::before,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-payment .wc_payment_methods > li input:checked ~ label::before,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-shipping-fields #ship-to-different-address .woocommerce-form__input-checkbox:checked ~ span::before,
				body.woocommerce-order-pay .entry-content .woocommerce #order_review .wc_payment_methods > li input:checked ~ label::before,
				body.woocommerce-order-pay .entry-content .woocommerce #order_review .wc_payment_methods > li label:hover::before,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-payment .wc_payment_methods > li label:hover::before,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-payment .woocommerce-terms-and-conditions-wrapper .woocommerce-terms-and-conditions-checkbox-text::before
				{
					-webkit-box-shadow: inset 0 0 0 2px <?php echo esc_attr($body_color); ?>;
					box-shadow: inset 0 0 0 2px <?php echo esc_attr($body_color); ?>;
				}
			/**
			 * INVERTED COLORS
			 */
			
			/* Body Color as Text */
				.black-btn, 
				button[type="submit"], 
				input[type="submit"],
				button[type="reset"], 
				input[type="reset"],
				.widget_shopping_cart_content .woocommerce-mini-cart__buttons a:last-child,
				div.product .summary .single_add_to_cart_button,
				div.product .summary .cart .quantity .decrease, 
				div.product .summary .cart .quantity .increase,
				body.woocommerce-cart .entry-content .woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout a,
				body.woocommerce-checkout .entry-content .woocommerce .checkout_coupon .button,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-checkout-review-order .woocommerce-checkout-payment .place-order #place_order,
				.wp-block-button__link,
				div.product .summary .cart .quantity.custom .input-text,
				.woocommerce-store-notice,
				body #yith-wcwl-popup-message,
				body.woocommerce-checkout .entry-content .woocommerce .woocommerce-form-login p .button
				{
					color: <?php echo esc_attr($body_color); ?>;
				}			
		</style>