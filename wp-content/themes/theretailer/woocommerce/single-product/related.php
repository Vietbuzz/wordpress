<?php
/**
 * Related Products
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

global $product, $woocommerce_loop, $theretailer_theme_options;

if ((!isset($theretailer_theme_options['related_products_on_product_page'])) || ($theretailer_theme_options['related_products_on_product_page'] == "1")) {

	$related = wc_get_related_products($product->get_id(), 12);
	
	if ( sizeof($related) == 0 ) return;
	
	$args = apply_filters('woocommerce_related_products_args', array(
		'post_type'				=> 'product',
		'ignore_sticky_posts'	=> 1,
		'no_found_rows' 		=> 1,
		'posts_per_page' 		=> $posts_per_page,
		'orderby' 				=> $orderby,
		'post__in' 				=> $related
	) );
	
	$products = new WP_Query( $args );
	
	$woocommerce_loop['columns'] 	= $columns;
	
	if ( $products->have_posts() ) : ?>
			
		<?php if ( $related_products ) : ?>
			<div class="grid_12">
			
				<div class="products_slider related_products_section">
					
					<div class="gbtr_items_sliders_header">
						<div class="gbtr_items_sliders_title">
							<div class="gbtr_featured_section_title">
								<strong>
									<?php esc_html_e('Related products', 'woocommerce'); ?>
								</strong>
							</div>
						</div>
						<div class="gbtr_items_sliders_nav">                        
							<a class='big_arrow_right'></a>
							<a class='big_arrow_left'></a>
							<div class='clr'></div>
						</div>
					</div>
					
					<div class="gbtr_bold_sep"></div>   

					<div class="swiper-container">
				
						<div class="swiper-wrapper">
							
							<?php while ( $products->have_posts() ) : $products->the_post(); ?>
			
								<ul class="swiper-slide">
									<?php wc_get_template_part( 'content', 'product' ); ?>
								</ul>
				
							<?php endwhile; // end of the loop. ?>
							
						</div>
						
					</div>
				
				</div>
			
			</div>
		<?php endif; ?>
	
	<?php endif;
	
	wp_reset_postdata();

}
