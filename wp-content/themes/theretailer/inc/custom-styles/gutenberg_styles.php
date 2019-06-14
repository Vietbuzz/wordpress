<?php

add_action( 'wp_head', 'theretailer_gutenberg_frontend_custom_styles', 200 );
if ( !function_exists ('theretailer_gutenberg_frontend_custom_styles') ) {
	
	function theretailer_gutenberg_frontend_custom_styles() {
		global $theretailer_theme_options;
		?>

		<style>
	
		.gbt_18_tr_banner_title,
		.gbt_18_tr_posts_grid_title,
		.gbt_18_tr_slide_title
		{
			font-family: "<?php echo $theretailer_theme_options['new_gb_secondary_font']['font-family']; ?>", Arial, Helvetica, sans-serif !important;
		}

		@media all and (min-width: <?php echo $theretailer_theme_options['boxed_layout_width']; ?>px) {
			.page #global_wrapper.boxed-content .alignwide
			{
		        margin-left: calc( (-<?php echo $theretailer_theme_options['boxed_layout_width']; ?>px + 960px) / 4 );
		    	margin-right: calc( (-<?php echo $theretailer_theme_options['boxed_layout_width']; ?>px + 960px) / 4 );
				max-width: 100vw;
			}
		}

		@media all and (min-width: <?php echo $theretailer_theme_options['boxed_layout_width']; ?>px) {
			.page #global_wrapper.boxed-content .alignfull
			{
				margin-left: calc( -<?php echo $theretailer_theme_options['boxed_layout_width']; ?>px / 2 + 100% / 2 );
			    margin-right: calc( -<?php echo $theretailer_theme_options['boxed_layout_width']; ?>px / 2 + 100% / 2 );
			}
		}

		</style>

		<?php
	}
}

add_action( 'admin_head', 'theretailer_gutenberg_backend_custom_styles' );
if ( !function_exists ('theretailer_gutenberg_backend_custom_styles') ) {
	
	function theretailer_gutenberg_backend_custom_styles() {
		global $theretailer_theme_options, $current_screen;

		wp_enqueue_style('theme-fonts', get_template_directory_uri() . '/inc/fonts/theme-fonts/style.css', array(), '1.0', 'all' );

		$current_screen = get_current_screen();
		if ( method_exists($current_screen, 'is_block_editor') && $current_screen->is_block_editor() ) {
		?>

			<style>

			.edit-post-visual-editor h1,
			.edit-post-visual-editor h2,
			.edit-post-visual-editor h3,
			.edit-post-visual-editor h4,
			.edit-post-visual-editor h5,
			.edit-post-visual-editor h6,
			.edit-post-visual-editor button:not(.components-button),
			.edit-post-visual-editor label,
			.edit-post-visual-editor p,
			.edit-post-visual-editor ul li,
			.edit-post-visual-editor ol li,
			.edit-post-visual-editor div,
			.edit-post-visual-editor textarea,
			.edit-post-visual-editor table thead tr th,
			.edit-post-visual-editor input[type="button"],
			.edit-post-visual-editor input[type="reset"],
			.edit-post-visual-editor input[type="submit"],
			.edit-post-visual-editor button[type="submit"]
			{
				font-family: '<?php echo $theretailer_theme_options['new_gb_main_font']['font-family']; ?>', Arial, Helvetica, sans-serif !important;
			}
		
			.gbt_18_tr_editor_banner_text_content h3,
			.gbt_18_tr_editor_posts_grid_title,
			.gbt_18_tr_editor_slide_title h2
			{
				font-family: '<?php echo $theretailer_theme_options['new_gb_secondary_font']['font-family']; ?>', Arial, Helvetica, sans-serif !important;
			}

			.editor-styles-wrapper ul.wp-block-latest-posts a,
			.editor-styles-wrapper ul.wp-block-archives a,
			.editor-styles-wrapper .wp-block-categories a,
			.editor-styles-wrapper .wp-block-categories ul li a
			{
				color: <?php echo $theretailer_theme_options['accent_color']; ?>;
			}

			.editor-styles-wrapper .wp-block-heading h1,
			.editor-styles-wrapper .wp-block-heading h2,
			.editor-styles-wrapper .wp-block-heading h3,
			.editor-styles-wrapper .wp-block-heading h4,
			.editor-styles-wrapper .wp-block-heading h5,
			.editor-styles-wrapper .wp-block-heading h6,
			.editor-styles-wrapper textarea.editor-post-title__input { 
				color:<?php echo $theretailer_theme_options['primary_color']; ?>;
			}

			</style>

		<?php
		}
	}
}
?>