<?php

if ( !function_exists ('blockshop_custom_gutenberg_styles') ) {
	function blockshop_custom_gutenberg_styles() {

		global $current_screen;

		$text_color  	= GBT_OPT::getOption('main_font_color');
		$body_color	 	= GBT_OPT::getOption('background_color');
		$body_dark	 	= GBT_OPT::getOption('body_dark');
		$text_dark 	 	= GBT_OPT::getOption('text_dark');
		$text_medium 	= GBT_OPT::getOption('text_medium');
		$text_light		= GBT_OPT::getOption('text_light');	
		$text_ultra_light = GBT_OPT::getOption('text_ultra_light');

		$body_rgb 	  = getbowtied_hex2rgb($body_color);
		$text_rgb 	  = getbowtied_hex2rgb($text_color);

		ob_start();	

		?>

		<style>
		/**
		 * Font sizes
		 */
		.editor-styles-wrapper
		{
			background-color: <?php echo $body_color ?>;
			font-size: <?php echo GBT_OPT::getOption('font_size'); ?>px;
			color: <?php echo $text_color ?>;
		}

		.editor-styles-wrapper .wp-block,
		.editor-styles-wrapper .wp-block p,
		.editor-styles-wrapper .wp-block-preformatted pre,
		.editor-styles-wrapper select,
		.editor-styles-wrapper .wp-block-pullquote,
		.editor-styles-wrapper .editor-default-block-appender textarea.editor-default-block-appender__content {
			line-height: 1.6;
			font-size: <?php echo GBT_OPT::getOption('font_size'); ?>px;
			color: <?php echo $text_color ?>;
		}

		.editor-styles-wrapper .wp-block h1
		{
			font-size: <?php echo 2 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
			margin-top: <?php echo 2.5 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
		}

		.editor-styles-wrapper textarea.editor-post-title__input
		{
			font-size: <?php echo 2.4 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
		}

		.editor-styles-wrapper .wp-block h2
		{
			font-size: <?php echo 1.65 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
			margin-top: <?php echo 2.5 * esc_html(GBT_Opt::getOption('font_size')); ?>px; 
		}
		
		.editor-styles-wrapper .wp-block h3,
		.editor-styles-wrapper .wp-block .wp-block-cover-text
		{
			font-size: <?php echo 1.375	* esc_html(GBT_Opt::getOption('font_size')); ?>px;
			margin-top: <?php echo 2.5 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
		}
		
		.editor-styles-wrapper .wp-block h4 
		{ 
			font-size: <?php echo 1.15 * esc_html(GBT_Opt::getOption('font_size')); ?>px; 
			margin-top: <?php echo 2.5 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
		}
		
		.editor-styles-wrapper .wp-block h5
		{
			font-size: <?php echo 0.95 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
			margin-top: <?php echo 2.5 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
		}
		
		.editor-styles-wrapper .wp-block h6
		{
			font-size: <?php echo 0.8 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
			margin-top: <?php echo 2.5 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
		}

		.editor-styles-wrapper .wp-block-preformatted pre {
			font-size: <?php echo 0.9 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
		}

		.editor-styles-wrapper .wp-block-quote p,
		.editor-styles-wrapper .wp-block-pullquote blockquote > .editor-rich-text p {
			font-size: <?php echo 1.15 * esc_html(GBT_Opt::getOption('font_size')); ?>px; 
		}

		.editor-styles-wrapper .wp-block-quote.is-style-large p {
			font-size: <?php echo 1.375	* esc_html(GBT_Opt::getOption('font_size')); ?>px;
		}

		.editor-styles-wrapper .wp-block-quote .wp-block-quote__citation,
		.editor-styles-wrapper .wp-block-pullquote .wp-block-pullquote__citation {
			font-size: <?php echo GBT_OPT::getOption('font_size'); ?>px;
		}


		/**
		 * Colors
		 */
		.editor-styles-wrapper .wp-block-latest-posts li a,
		.editor-styles-wrapper .wp-block-archives li a,
		.editor-styles-wrapper .wp-block-categories ul li a {
			color: <?php echo $text_color; ?>;
			border-bottom: solid 1px <?php echo $text_color ?>;
		}

		.editor-styles-wrapper .wp-block-latest-posts__post-date,
		.editor-styles-wrapper .wp-block-quote .wp-block-quote__citation {
			color: <?php echo $text_medium; ?>;
			font-size: <?php echo GBT_OPT::getOption('font_size'); ?>px;
		}

		.editor-styles-wrapper .wc-block-products-grid .wc-product-preview .wc-product-preview__rating.star-rating::before,
		.editor-styles-wrapper .editor-inserter-with-shortcuts .components-icon-button,
		.editor-styles-wrapper .editor-block-list__empty-block-inserter .components-icon-button,
		.editor-styles-wrapper .editor-post-title__block .editor-post-title__input::placeholder,
		.editor-styles-wrapper .editor-block-mover__control,
		.editor-styles-wrapper .editor-default-block-appender textarea.editor-default-block-appender__content{
			color: <?php echo esc_attr($text_medium); ?>;
		}

		.editor-styles-wrapper select {
			border-color: <?php echo esc_attr($text_light); ?>;
		}

		.editor-styles-wrapper .wp-block-pullquote,
		.editor-styles-wrapper .wp-block-video figcaption,
		.editor-styles-wrapper .wp-block-image figcaption {
			border-color: <?php echo esc_attr($text_medium); ?>;
		}

		.editor-styles-wrapper .wp-block-quote:not(.is-style-large) {
			border-color: <?php echo esc_attr($text_color) ?>;
		}

		.editor-styles-wrapper .wp-block-button.is-style-squared .wp-block-button__link,
		.editor-styles-wrapper .wp-block-button.is-style-default .wp-block-button__link {
			background-color: <?php echo esc_attr($text_color); ?>;
		}

		.editor-styles-wrapper .wp-block-button.is-style-squared .wp-block-button__link,
		.editor-styles-wrapper .wp-block-button.is-style-default .wp-block-button__link {
			color: <?php echo esc_attr($body_color); ?>;
		}

		.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link,
		.editor-styles-wrapper textarea.editor-post-title__input,
		.editor-styles-wrapper .wc-block-products-grid .wc-product-preview .wp-block-button .wc-product-preview__add-to-cart,
		.editor-styles-wrapper .wc-block-products-grid .wc-product-preview .wc-product-preview__rating.star-rating > span::before,
		.editor-block-mover__control-drag-handle, .editor-block-mover__control-drag-handle:not(:disabled):not([aria-disabled="true"]):not(.is-default):hover, 
		.editor-block-mover__control-drag-handle:not(:disabled):not([aria-disabled="true"]):not(.is-default):active, 
		.editor-block-mover__control-drag-handle:not(:disabled):not([aria-disabled="true"]):not(.is-default):focus {
			color: <?php echo esc_attr($text_color); ?>;
		}



		</style>

		<?php

		$content = ob_get_clean();
		$content = str_replace(array("\r\n", "\r"), "\n", $content);
		$lines = explode("\n", $content);
		$new_lines = array();
		foreach ($lines as $i => $line) { if(!empty($line)) $new_lines[] = trim($line); }

		$current_screen = get_current_screen();
		if ( method_exists($current_screen, 'is_block_editor') && $current_screen->is_block_editor() ) {
			echo implode($new_lines);
		}
	}
}
add_action( 'admin_head', 'blockshop_custom_gutenberg_styles');