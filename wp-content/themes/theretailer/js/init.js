var gbtr_order_review_content_global_var = 'close';

jQuery(document).ready(function($) {
	
	"use strict";

	//submenu adjustments
	function submenu_adjustments() {
		$(".main-navigation > ul > .menu-item").mouseenter(function() {		
			if ( $(this).children(".sub-menu").length > 0 ) {
				var submenu = $(this).children(".sub-menu");
				var window_width = parseInt($(window).innerWidth());
				var submenu_width = parseInt(submenu.width());
				var submenu_offset_left = parseInt(submenu.offset().left);
				var submenu_adjust = window_width - submenu_width - submenu_offset_left;
				
				if (submenu_adjust < 0) {
					submenu.css("left", submenu_adjust-30 + "px");
				}
			}
		});
	}
	
	submenu_adjustments();
	
	$(".gbtr_menu_mobiles select").customSelect({customClass:'menu_select'});

	$('.gbtr_menu_mobiles_inside').css('visibility', 'visible').animate({opacity: 1.0}, 200);
	
	$(".gbtr_menu_mobiles select").change(function() {
		window.location.href = this.options[this.selectedIndex].value;
	});
	
	//light/dark footer clears
	$('.gbtr_light_footer_wrapper .grid_3:nth-child(4n)').after("<div class='clr'></div>");
	$('.gbtr_dark_footer_wrapper .grid_3:nth-child(4n)').after("<div class='clr'></div>");
	
	//tools bar search
	if ( $.trim( $('.gbtr_tools_search_inputtext').val() ) ) {
	}
	$('.gbtr_tools_search')
		.mouseenter(function(){
			setTimeout(function(){
				$('.gbtr_tools_search_inputtext').focus();
			},300);
		}).mouseleave(function(){ 
			$('.gbtr_tools_search_inputtext').blur();
		});
	
	$('.gbtr_tools_search_inputtext').blur(function() {
		if ( !$.trim( $('.gbtr_tools_search_inputtext').val() ) ) {
			$('.gbtr_tools_search').removeClass('shown');
		}
	});
	
	// open/close minicart on header icon hover	
	var hoverIn = null;
	var hoverOut = null;
	$(".gbtr_header_wrapper .gbtr_little_shopping_bag_wrapper, .gbtr_header_wrapper .shopping_bag_centered_style").hover( function(e) {

		if ( $(window).width() >= 1024 ) {

			if( !($('.gbtr_minicart_wrapper').hasClass('open')) && !hoverIn ) {

				hoverIn = window.setTimeout(function() {
	                hoverIn = null;
					
					if ( $(window).width() >= 1024 ) {

						e.preventDefault();
						$('.gbtr_minicart_wrapper').addClass('open');
						e.stopPropagation();	
						
					} else {
						e.stopPropagation();	
					}
				}, 200);
			}
		}
	});

	$('.gbtr_header_wrapper .gbtr_little_shopping_bag_wrapper, .gbtr_header_wrapper .shopping_bag_centered_style, .gbtr_minicart_wrapper').hover( function(e) {
		if (hoverOut) {
            window.clearTimeout(hoverOut);
            hoverOut = null;
        }
	}, function (e) {

        if( !hoverOut ) {

        	hoverOut = window.setTimeout(function() {
                hoverOut = null;

                if ( ($(window).width() >= 1024) && ($('.gbtr_minicart_wrapper').hasClass('open')) ) {

					$('.gbtr_minicart_wrapper').removeClass('open');
					
				}
           }, 200);
        }

        if (hoverIn) {
            window.clearTimeout(hoverIn);
            hoverIn = null;
        }
    });
	
	//search	
	function switch_search_buttons() {
		if($(".gbtr_tools_search #s").val() !== "") {
			$(".gbtr_tools_search_trigger").css("z-index", "2").css('visibility','hidden');
			$(".gbtr_tools_search_inputbutton").css("z-index", "3").css('visibility','visible');
			
		} else {
			$(".gbtr_tools_search_trigger").css("z-index", "3").css('visibility','visible');
			$(".gbtr_tools_search_inputbutton").css("z-index", "2").css('visibility','hidden');
		}
	}
	
	$(".gbtr_tools_search #s").keydown(function() {
		switch_search_buttons();
	});
	
	function open_desktop_search(){		
		
		$(".gbtr_tools_search").hover(
			function() {
				$(".gbtr_tools_search").addClass("open");
				$(".gbtr_tools_search #s").focus();
			},
			function () {
				$(".gbtr_tools_search").removeClass("open");
			}
		);
	}
	
	if ( $(window).width()>1024 ) {
		open_desktop_search();	
	}
	
	$(".gbtr_tools_search_trigger_mobile").on('click',function(){
		$(".gbtr_tools_search").toggleClass("open");
		$(".gbtr_tools_search #s").focus();
	});
			
	//select2
	function handleSelect() {	
		if ($(window).innerWidth() > 1024 ) {
			
			$(".orderby, .big-select, select.topbar-language-switcher, select.wcml_currency_switcher ").select2({
				allowClear: true,
				minimumResultsForSearch: Infinity
			});
		}
	}
	
	handleSelect();
	
	$('.variations').on("click", ".reset_variations", function(){
        $('.big-select').select2("val", "");
    });
	
	
	$('.gbtr_tools_wrapper').on("click", ".top-bar-menu-trigger-mobile", function(){
			
		var topbar_menu_height = $('.gbtr_tools_account.mobile .topbar-menu').outerHeight();
	
		if ( $('.gbtr_tools_account.mobile').hasClass('slidedown') ) {
			$('.gbtr_tools_account.mobile').removeClass('slidedown').css('height',0);
		}else
		{
			$('.gbtr_tools_account.mobile').addClass('slidedown').css('height',topbar_menu_height);
		}
	})
	
	//topbar menu
	$('.gbtr_tools_account_wrapper').on('mouseenter',function(){
				
			var topbar_menu_position = $('.top-bar-menu-trigger').offset().left - 10;
			var trigger_width = $('.top-bar-menu-trigger').width();
			var topbar_menu_width = $('.gbtr_tools_account.desktop').width();
			console.log($('.gbtr_tools_account.desktop').width());
			
			if ( $(window).width()-topbar_menu_position-topbar_menu_width - 17 < 0 ) {
				topbar_menu_position = topbar_menu_position + ( $(window).width()-topbar_menu_position-topbar_menu_width ) - 15;
			}
			
			$('.gbtr_tools_account.desktop').css({'left':topbar_menu_position}).addClass('show');
			$('.top-bar-menu-trigger').addClass('on-hover');		
		});
		
	$('.gbtr_tools_account_wrapper').on('mouseleave',function(){
			$('.gbtr_tools_account.desktop').removeClass('show');
			$('.top-bar-menu-trigger').removeClass('on-hover');
	});
	
	//woocommerce widget filters
	$('.product_list_widget > li > a > img').each(function() {
		$(this).parent().before(this);
		$(this).wrap('<div class="product_list_widget_img_wrapper" />');
	});
	
	$('.product_list_widget > li > a span.product-title').each(function() { // ???
		if ($.trim($(this).text()).length > 30 ) { $(this).text($.trim($(this).text()).substr(0, 30) + "..."); }
	});
	
	
	//scroll on reviews tab
	$('.woocommerce-review-link').off('click').on('click',function(){
		
		$('.tabs li a').each(function(){
			if ($(this).attr('href')=='#tab-reviews') {
				$(this).trigger('click');
			}
		});
		
		var elem_on_screen_height = 0;
		
		if ( $('.site-header-sticky').length > 0 ) {
			elem_on_screen_height += $('.site-header-sticky').outerHeight();
		}
		
		if ( $('#wpadminbar').length > 0 ) {
			elem_on_screen_height += $('#wpadminbar').outerHeight();
		}
		
		if ( $('.getbowtied_theme_explorer_wrapper').length > 0 && $('.getbowtied_theme_explorer_wrapper').is('visible') ) {
			elem_on_screen_height += $('.getbowtied_theme_explorer_wrapper').outerHeight();
		}
		
		var tab_reviews_topPos = $('.woocommerce-tabs').offset().top - elem_on_screen_height;
		
		$('html, body').animate({
            scrollTop: tab_reviews_topPos
        }, 1000);
		
		return false;
	})
	
	//visible tab always relative  
	$('.panel').each(function(){
		
		var that = $(this);
		
		if ( that.is(':visible') ) {
			that.addClass('current');
		}
	})

	$('.gbtr_login_register_reg .button').click(function() {
		
		$('.gbtr_login_register_slider').addClass('active');
	
		$('.gbtr_login_register_wrapper').animate({
		}, 300, function() {
			// Animation complete.
		});
		
		$('.gbtr_login_register_label_slider').animate({
			top: -$('.gbtr_login_register_switch').height()
		}, 300, function() {
			// Animation complete.
		});
	
	});
	
	$('.gbtr_login_register_log .button').click(function() {
		
		$('.gbtr_login_register_slider').removeClass('active');

		$('.gbtr_login_register_wrapper').animate({
		}, 300, function() {
			// Animation complete.
		});
		
		$('.gbtr_login_register_label_slider').animate({
			top: '0'
		}, 300, function() {
			// Animation complete.
		});
	});
	
	/* button show */	
	$('.product_item').mouseenter(function(){
		$(this).find('.product_button').fadeIn(100, function() {
			// Animation complete.
		});
    }).mouseleave(function(){
		$(this).find('.product_button').fadeOut(100, function() {
			// Animation complete.
		});
    });
	
	$('p').filter(function() {
		return $.trim($(this).text()) === '' && $(this).children().length === 0;
	}).remove();
	
	$(".gallery").each(function() { 
		$(this).find('.fresco')
			.attr('data-fresco-group', $(this).attr('id'));
	});
	
	//woocommerce tabs
	$('.woocommerce-tabs .panel:first-child').addClass('current');
	$('.woocommerce-tabs ul.tabs li a').off('click').on('click', function(){
		var that = $(this);
		var currentPanel = that.attr('href');
		
		that.parent().siblings().removeClass('active')
					.end()
					.addClass('active');
		
		$('.woocommerce-tabs').find(currentPanel).siblings().filter(':visible').fadeOut(500,function(){
			$('.woocommerce-tabs').find(currentPanel).siblings().removeClass('current');
			$('.woocommerce-tabs').find(currentPanel).addClass('current').fadeIn(500);
		})
		
		return false;
	})
	
	
	//review form
	$("#review_form_wrapper").show();
	
	var screenTop;
	$('.custom_show_review_form').click(function () {
		
		screenTop = $(window).scrollTop();
		$("#review_form_wrapper_overlay").css('top',0).fadeIn(500);
		$('body').addClass('review_form_wrapper_overlay_active');
		
		if ( $('.getbowtied_theme_explorer_wrapper').length > 0 ) {
			$('.getbowtied_theme_explorer_wrapper').hide();
		}
		
		if ( $('#wpadminbar').length > 0 ) {
			$('#wpadminbar').hide();
		}
		$('#global_wrapper').hide();
		$(window).scrollTop(0);
		
		return false;
	});
	
	$('#review_form_wrapper_overlay_close').click(function () {
		
		$("#review_form_wrapper_overlay").css('top',screenTop).fadeOut(500);
		$('body').removeClass('review_form_wrapper_overlay_active');
		
		if ( $('.getbowtied_theme_explorer_wrapper').length > 0 ) {
			$('.getbowtied_theme_explorer_wrapper').show();
		}
		
		if ( $('#wpadminbar').length > 0 ) {
			$('#wpadminbar').show();
		}
		$('#global_wrapper').show();
		
		$(window).scrollTop(screenTop);
	});
	
	$('.demo_top_message .close').click(function () {		
		$(".demo_top_message").slideUp();
	});
	
	//show mobile footer	  
	$('.getbowtied-icon-more-retailer').on('click', function(){
		
		var trigger = $(this).parent();
		
		trigger.fadeOut('1000',function(){
			trigger.remove();
			$('.gbtr_widgets_footer_wrapper').fadeIn();
		});
	});
	
	
	//sticky header
	var headerHeight,minPos;
	function StickyHeaderShowPosition() {
		
		headerHeight = $('.site-header').outerHeight();
		if ( headerHeight*1.3 > 400 ) {
			minPos = headerHeight*1.3;
		}else{
			minPos = 400;
		}
		
	}
	
	if ( ( $(window).outerWidth() > 1024 ) && ( $('.site-header-sticky').length > 0 ) ) {
		
		StickyHeaderShowPosition()
		
		if ( $(this).scrollTop() > minPos && !$('.site-header-sticky').hasClass('on_page_scroll') ) {
			$('.site-header-sticky').addClass('on_page_refresh');
			if ( $('#wpadminbar').length > 0 ) {
				$('.site-header-sticky').addClass('wpadminbar_onscreen')
			}
		}
	}
	
	function toggleFresco() {		
		
		$(".item a").click(function() {
			if ( $(window).width() < 480 ) {
				return false;
			} 
		});
	}
	
	toggleFresco();
		
	$(window).resize(function(){
		
		if ( $(window).width()>1024 ) {
			open_desktop_search();	
		}else{
			$('.gbtr_tools_search').off('hover');
		}
		
		toggleFresco();
		
		$(".main-navigation > ul > .menu-item > .sub-menu").css("left", "-15px");
		
	})
	
	//wishlist 
	$('.add_to_wishlist').on('click',function(){
		$(this).parents('.yith-wcwl-add-button').addClass('show_overlay');
	})
	
	$(window).scroll(function() {
        
		//sticky header
		if (  ( $(window).outerWidth() > 1024 ) && ( $('.site-header-sticky').length > 0 ) ) {
		
			StickyHeaderShowPosition();
		
			var that = $('.site-header-sticky');
		
			if ( that.hasClass('on_page_refresh') ) {
				that.removeClass('on_page_refresh');
			}
				
			if ( $('#wpadminbar').length > 0 ) {
				that.addClass('wpadminbar_onscreen')
			}
				
			if ( $(this).scrollTop() > minPos && !that.hasClass('on_page_scroll') ) {
				that.addClass('on_page_scroll');
			} else if ( $(this).scrollTop() <= minPos ) {
				if (that.hasClass('wpadminbar_onscreen')) {
					that.removeClass('on_page_scroll wpadminbar_onscreen');	
				}else{
					that.removeClass('on_page_scroll');
				}
			}
		}
	});

	function product_gallery() {

		var thumbnails = $('.woocommerce-product-gallery .flex-control-nav');
		if (thumbnails.length && !thumbnails.closest('.swiper-container').length) {
			thumbnails.addClass('swiper-wrapper');
			thumbnails.find('li').addClass('swiper-slide');
			thumbnails.wrap('<div class="swiper-container gallery-thumbnails"></div>');
			var productThumbnails = new Swiper('.gallery-thumbnails.swiper-container', {
				slidesPerView: 4,
				loop: false,
			});
		}

		$('.woocommerce-product-gallery__image').on('click', function() {
			if( $(this).hasClass('flex-active-slide') ) {
				$('.woocommerce-product-gallery__trigger').trigger('click');
			}
		});
	}

	product_gallery();

	$(document).ajaxStop(function(){
		product_gallery();
	});

});

jQuery(document).ajaxStop(function() {
	
	"use strict";
	
	if (gbtr_order_review_content_global_var === "open") {
		
		jQuery('.gbtr_order_review_content').show();
		jQuery(".gbtr_order_review_header").removeClass("gbtr_checkout_header_nonactive");
		
	} else {
		
		jQuery(".gbtr_order_review_header").addClass("gbtr_checkout_header_nonactive");
		
	}
	
});