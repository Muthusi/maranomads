<?php 

/**
	* Layout Theme Default
	* @version     1.0.0
**/
?>
<div class="item-wrap18">
	<div class="item-detail">										
		<div class="item-img products-thumb">			
			<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
			<div class="item-button">
				<?php
				if ( class_exists( 'YITH_WCWL' ) ){
				echo do_shortcode( "[yith_wcwl_add_to_wishlist]" );
				} ?>
				<?php if ( class_exists( 'YITH_WOOCOMPARE' ) ){ 
				?>
				<a href="javascript:void(0)" class="compare button"  title="<?php esc_html_e( 'Add to Compare', 'sw_woocommerce' ) ?>" data-product_id="<?php echo esc_attr($post->ID); ?>" rel="nofollow"> <?php esc_html('compare','sw-woocomerce'); ?></a>
				<?php } ?>
				<?php echo emarket_quickview(); ?>
			</div>
			<?php woocommerce_template_loop_add_to_cart(); ?>
		</div>										
		<div class="item-content">	
			<div class="categories-name">
				<?php echo  $term_str; ?>
			</div>			
			<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php sw_trim_words( get_the_title(), $title_length ); ?></a></h4>
			<!-- rating  -->
			<?php 
			$rating_count = $product->get_rating_count();
			$review_count = $product->get_review_count();
			$average      = $product->get_average_rating();
			?>
			<?php if (  wc_review_ratings_enabled() ) { ?>
			<div class="reviews-content">
				<div class="star"><?php echo ( $average > 0 ) ?'<span style="width:'. ( $average*16 ).'px"></span>' : ''; ?></div>
			</div>
			<?php } ?>
			<!-- end rating  -->
			
			<!-- price -->
			<?php if ( $price_html = $product->get_price_html() ){?>
			<div class="item-price">
				<span>
					<?php echo $price_html; ?>
				</span>
			</div>
			<?php } ?>
			<?php do_action( 'sw_woocommerce_custom_action' ); ?>
		</div>								
	</div>
</div>