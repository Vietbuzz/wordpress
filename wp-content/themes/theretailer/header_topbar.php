<div class="gbtr_tools_wrapper">
    <div class="container_12">
        <div class="grid_6">
			<div class="top_bar_left">
				<?php if( THE_RETAILER_EXTENDER_IS_ACTIVE && ( 'yes' === get_option('tr_topbar_social_media', 'yes') ) ) {
					echo do_shortcode('[social-media color="'.$theretailer_theme_options['topbar_color'].'" font_size="14"]');
				} ?>
				
				<span class="gbtr_tools_info">
					<?php if ( (isset($theretailer_theme_options['topbar_text'])) && (trim($theretailer_theme_options['topbar_text']) != "" ) ) { ?>
						<?php _e( $theretailer_theme_options['topbar_text'], 'theretailer' ); ?>
					<?php } ?>
				</span>
		
			</div><!--.top_bar_left-->
        </div>
        <div class="grid_6">
            <div class="gbtr_tools_search <?php if ( ($theretailer_theme_options['search_input_style']) && ($theretailer_theme_options['search_input_style'] == 1) ) { ?>open_always<?php } ?>">
				<button class="gbtr_tools_search_trigger"><i class="gbtr_tools_search_icon"></i></button>
				<button class="gbtr_tools_search_trigger_mobile"><i class="gbtr_tools_search_icon"></i></button>
                <form method="get" action="<?php echo home_url(); ?>">
                    <input class="gbtr_tools_search_inputtext" type="text" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" />
                    <button type="submit" class="gbtr_tools_search_inputbutton"><i class="gbtr_tools_search_icon"></i></button>
                    <?php 
                    /**
                    * Check if WooCommerce is active
                    **/
                    if (class_exists('WooCommerce')) {
                    ?>
                    <input type="hidden" name="post_type" value="product">
                    <?php } ?>
                </form>
            </div>
            
		<?php if ( is_user_logged_in() ) { ?>
			<div class="logout-wrapper">
				<a href="<?php echo get_site_url(); ?>/?<?php echo get_option('woocommerce_logout_endpoint'); ?>=true" class="logout_link"><i class="logout_link_icon"></i></a>
			</div>
		<?php } ?>
			
		<?php $menu_to_count = wp_nav_menu(array(
										'echo' => false,
										'theme_location' => 'tools'
									));
		$top_bar_menu_items = substr_count($menu_to_count,'class="menu-item '); 
			
		if ( $top_bar_menu_items > 2 ) :
		?>
		<div class="gbtr_tools_account_wrapper">
			<div class="top-bar-menu-trigger-mobile">
				<i class="gbtr_tools_account_icon"></i>
			</div>
			
			<div class="top-bar-menu-trigger">
				<i class="gbtr_tools_account_icon"></i>
			</div>
			
		<?php endif; ?>
				
			<div class="gbtr_tools_account desktop <?php echo $top_bar_menu_items > 2 ? 'menu-hidden' : '';?>">
				<ul class="topbar-menu">
					<?php if ( has_nav_menu( 'tools' ) ) : ?>
					<?php  
					wp_nav_menu(array(
						'theme_location' => 'tools',
						'container' =>false,
						'menu_class' => '',
						'echo' => true,
						'items_wrap'      => '%3$s',
						'before' => '',
						'after' => '',
						'link_before' => '',
						'link_after' => '',
						'depth' => 0,
						'fallback_cb' => false,
					));
					?>
					
					<?php else: ?>
						<li></li>
					<?php endif; ?>
				</ul>
			</div><!--.gbtr_tools_account-->
			<?php	if ( $top_bar_menu_items > 2 ) :?>
				</div>
			<?php endif; ?>
        </div><!--.grid-8-->
    </div><!--.container-12-->
	
	<?php if ( $top_bar_menu_items > 2 ) : ?>
	
		<div class="gbtr_tools_account mobile <?php echo $top_bar_menu_items > 2 ? 'menu-hidden' : '';?>">
			<ul class="topbar-menu">
				<?php if ( has_nav_menu( 'tools' ) ) : ?>
				<?php  
				wp_nav_menu(array(
					'theme_location' => 'tools',
					'container' =>false,
					'menu_class' => '',
					'echo' => true,
					'items_wrap'      => '%3$s',
					'before' => '',
					'after' => '',
					'link_before' => '',
					'link_after' => '',
					'depth' => 0,
					'fallback_cb' => false,
				));
				?>
				
				<?php else: ?>
					<li></li>
				<?php endif; ?>
			</ul>
		</div><!--.gbtr_tools_account-->
	
	<?php endif; ?>
	
</div>