<?php 

/**
	* Layout Theme Default
	* @version     1.0.0
**/
?>
<div class="item-wrap19">
	<div class="item-detail">										
		<div class="item-img products-thumb">			
			<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
			<?php do_action( 'sw_woocommerce_custom_action' ); ?>
		</div>										
		<div class="item-content">		
			<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php sw_trim_words( get_the_title(), $title_length ); ?></a></h4>
			
			<!-- price -->
			<?php if ( $price_html = $product->get_price_html() ){?>
			<div class="item-price">
				<span>
					<?php echo $price_html; ?>
				</span>
			</div>
			<?php } ?>
			<div class="item-button">
				<?php woocommerce_template_loop_add_to_cart(); ?>
				<?php
				if ( class_exists( 'YITH_WCWL' ) ){
				echo do_shortcode( "[yith_wcwl_add_to_wishlist]" );
				} ?>
				<?php echo emarket_quickview(); ?>
				<?php if ( class_exists( 'YITH_WOOCOMPARE' ) ){ 
				?>
				<a href="javascript:void(0)" class="compare button"  title="<?php esc_html_e( 'Add to Compare', 'sw_woocommerce' ) ?>" data-product_id="<?php echo esc_attr($post->ID); ?>" rel="nofollow"> <?php esc_html('compare','sw-woocomerce'); ?></a>
				<?php } ?>
			</div>
		</div>								
	</div>
</div>