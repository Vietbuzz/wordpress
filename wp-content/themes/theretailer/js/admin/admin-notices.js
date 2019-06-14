jQuery(function($) {
	
	"use strict";

	// dismiss dashboard notices
	$( document ).on( 'click', '.hookmeup_notice .notice-dismiss', function () {
		var data = {
            'action' : 'gbt_dismiss_dashboard_notice',
            'notice' : 'hookmeup'
        };

        jQuery.post( 'admin-ajax.php', data );  
	});

	$( document ).on( 'click', '.extender_notice .notice-dismiss', function () {
		var data = {
            'action' : 'gbt_dismiss_dashboard_notice',
            'notice' : 'extender'
        };

        jQuery.post( 'admin-ajax.php', data );  
	});

	$( document ).on( 'click', '.portfolio_notice .notice-dismiss', function () {
		var data = {
            'action' : 'gbt_dismiss_dashboard_notice',
            'notice' : 'portfolio'
        };

        jQuery.post( 'admin-ajax.php', data );  
	});
});