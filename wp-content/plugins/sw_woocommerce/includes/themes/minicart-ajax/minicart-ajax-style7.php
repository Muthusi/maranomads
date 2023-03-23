<?php 
if ( !class_exists( 'WooCommerce' ) ) { 
	return false;
}
if($layout_style) {
	$layout_style = $layout_style ;
}
else { 
	$layout_style = get_option('layout_style') ;
}
global $woocommerce; ?>
<div class="top-form top-form-minicart emarket-minicart7 <?php echo( (string)get_option('layout_style') ) ; ?> pull-right">
	
	<div class="top-minicart-icon pull-right">
		<i class="fa fa-shopping-bag" aria-hidden="true"></i>
		<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php esc_attr_e('View your shopping cart', 'sw_woocommerce'); ?>"><?php echo '<span class="minicart-number">'.$woocommerce->cart->cart_contents_count.'</span>';?></a>
	</div>
	<div class="title-cart pull-right">
		<h3><?php esc_html_e('Your Cart', 'sw_woocommerce'); ?></h3>
		<div class="custom-font">
		<?php echo $woocommerce->cart->get_cart_subtotal(); ?>
		</div>
	</div>
	<div class="wrapp-minicart">
		<div class="minicart-padding">
			<div class="number-item"><?php echo sprintf( __('There are <span class="item">%d item(s)</span> in your cart','sw_woocommerce'), $woocommerce->cart->cart_contents_count ); ?></div>
			<ul class="minicart-content">
				<?php 
				foreach($woocommerce->cart->cart_contents as $cart_item_key => $cart_item): 
					$_product  = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					$product_name = ( sw_woocommerce_version_check( '3.0' ) ) ? $_product->get_name() : $_product->get_title();
				?>
				<li>
					<a href="<?php echo get_permalink($cart_item['product_id']); ?>" class="product-image">
						<?php echo $_product->get_image( 'thumbnail' ); ?>
					</a>
					<?php 	global $product, $post, $wpdb, $average; ?>
					<div class="detail-item">
						<div class="product-details"> 
							<h4><a class="title-item" href="<?php echo get_permalink($cart_item['product_id']); ?>"><?php echo esc_html( $product_name ); ?></a></h4>	  		
							<div class="product-price">
								<span class="price"><?php echo $woocommerce->cart->get_product_subtotal($cart_item['data'], 1); ?></span>	      
								<div class="qty">
									<?php echo '<span class="qty-number">'.esc_html( $cart_item['quantity'] ).'</span>'; ?>
								</div>
							</div>
							<div class="product-action clearfix">
								<?php echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="btn-remove" title="%s"><span class="fa fa-trash-o"></span></a>', esc_url( wc_get_cart_remove_url( $cart_item_key ) ), esc_html__( 'Remove this item', 'sw_woocommerce' ) ), $cart_item_key ); ?>           
								<a class="btn-edit" href="<?php echo wc_get_cart_url(); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'sw_woocommerce'); ?>"><i class="fa fa-pencil"></i><span></span></a>    
							</div>
						</div>	
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
		<div class="cart-checkout">
			<div class="price-total">
				<span class="label-price-total"><?php esc_html_e('Subtotal:', 'sw_woocommerce'); ?></span>
				<span class="price-total-w"><span class="price"><?php echo $woocommerce->cart->get_cart_subtotal(); ?></span></span>			
			</div>
			<div class="cart-links clearfix">
				<div class="cart-link"><a href="<?php echo get_permalink(get_option('woocommerce_cart_page_id')); ?>" title="<?php esc_attr_e( 'Cart', 'sw_woocommerce' ) ?>"><?php esc_html_e('View cart', 'sw_woocommerce'); ?></a></div>
				<div class="checkout-link"><a href="<?php echo get_permalink(get_option('woocommerce_checkout_page_id')); ?>" title="<?php esc_attr_e( 'Checkout', 'sw_woocommerce' ) ?>"><?php esc_html_e('Checkout', 'sw_woocommerce'); ?></a></div>
			</div>
		</div>
	</div>
</div>
</div>
<script>
(function($) {
	"use strict";	
	$(document).ready(function(){
		/*
		** Cart Canvas Click
		*/
		$('.top-form-minicart.cart_click').on('click', function(e){
			$(this).addClass('open');
			$('body').addClass('cart-open-mark');
		});
	});
	$(document).click(function(e) {			
		var container = $( ".top-form-minicart.cart_click" );
		if ( typeof container != "undefined" && !container.is(e.target) && container.has(e.target).length === 0 && container.html().length > 0 ){
			$( ".top-form-minicart.cart_click" ).removeClass("open");
			$("body").removeClass("cart-open-mark");
		}
	});
}(jQuery));
</script>