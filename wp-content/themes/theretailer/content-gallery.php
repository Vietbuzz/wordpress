<?php
/**
 * @package theretailer
 * @since theretailer 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
        <?php if (is_single()) : ?>
        <h1 class="entry-title gbtr_post_title_listing"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'theretailer' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1> 
        <?php else : ?>
        <h2 class="entry-title gbtr_post_title_listing"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'theretailer' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<?php endif ?>     
	</header><!-- .entry-header -->
    
    <div class="gbtr_bold_sep"></div>
	
    <div class="entry-content">
		<?php global $more; $more = 0; the_content(__( 'Continue reading &raquo;', 'theretailer' )); ?>
        <div class="clr"></div>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'theretailer' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
    
    <footer class="entry-meta">
        
		<!-- Post Share -->
		<?php if( THE_RETAILER_EXTENDER_IS_ACTIVE && class_exists('TRSocialSharing') ) {
			$tr_share_post = new TRSocialSharing;
			$tr_share_post->getbowtied_single_share_post();
		} ?>
		    
        <span class="author vcard"><i class="author-icon"></i>&nbsp;&nbsp;<a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>" title="<?php echo esc_attr( sprintf( __( 'View all posts by %s', 'theretailer' ), get_the_author() ) ); ?>" rel="author"><?php echo get_the_author(); ?></a></span>
        <span class="date-meta"><i class="date-icon"></i>&nbsp;&nbsp;<a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>" title="<?php echo esc_attr( get_the_time() ); ?>" rel="bookmark" class="entry-date"><time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time></a></span>
        <span class="categories-meta"><i class="category-icon"></i>&nbsp;&nbsp;<?php echo get_the_category_list(', '); ?></span>
        
        <?php if ( is_single() ) : ?>
            <?php if ( has_tag() ) : ?>
            <span class="tags-meta"><i class="tag-icon"></i>&nbsp;&nbsp;<?php echo get_the_tag_list('',', ',''); ?></span>
            <?php endif; ?>
        <?php endif; ?>
        
        <?php if ( !is_single() ) : ?>
            <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
            <span class="comments-link"><i class="comment-icon"></i>&nbsp;&nbsp;<?php comments_popup_link( __( 'Leave a comment', 'theretailer' ), __( '1 Comment', 'theretailer' ), __( '% Comments', 'theretailer' ) ); ?></span>
            <?php endif; ?>
        <?php endif; ?>        
	
    </footer><!-- .entry-meta -->
    
</article><!-- #post-<?php the_ID(); ?> -->
