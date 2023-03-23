<?php 
	if( !is_singular( 'product' ) ){
		return ;
	}
	global $product, $woocommerce, $woocommerce_loop;
	$upsells = ( sw_woocommerce_version_check( '3.0' ) ) ? $product->get_upsell_ids() : $product->get_upsells();
	if( count($upsells) == 0 || is_archive() ) return ;	
	$default = array(
		'post_type' => 'product',
		'post__in'   => $upsells,
		'post_status' => 'publish',
		'showposts' => $numberposts
	);
	$list = new WP_Query( $default );

	if ( $list -> have_posts() ){
?>
	<div id="<?php echo 'sliderup_' . $widget_id; ?>" class="sw-woo-container-slider upsells-products responsive-slider clearfix loading" data-lg="<?php echo esc_attr( $columns ); ?>" data-md="<?php echo esc_attr( $columns1 ); ?>" data-sm="<?php echo esc_attr( $columns2 ); ?>" data-xs="<?php echo esc_attr( $columns3 ); ?>" data-mobile="<?php echo esc_attr( $columns4 ); ?>" data-speed="<?php echo esc_attr( $speed ); ?>" data-scroll="<?php echo esc_attr( $scroll ); ?>" data-interval="<?php echo esc_attr( $interval ); ?>"  data-autoplay="<?php echo esc_attr( $autoplay ); ?>">
		<div class="resp-slider-container">
			<div class="box-slider-title">
				<?php echo '<h2><span>'. esc_html( $title1 ) .'</span></h2>'; ?>
			</div>
			<div class="slider responsive">			
			<?php 
				while($list->have_posts()): $list->the_post();global $product, $post;
				$class = ( $product->get_price_html() ) ? '' : 'item-nonprice';
			?>
				<div class="item <?php echo esc_attr( $class )?>">
					<div class="item-wrap">
						<div class="item-detail">										
							<div class="item-img products-thumb">			
								<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
								<!-- add to cart, wishlist, compare -->
								<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
							</div>										
							<div class="item-content">
								<div class="item-categories">
									<?php echo  $term_str; ?>
								</div>
								<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php sw_trim_words( get_the_title(), $title_length ); ?></a></h4>
								<!-- price -->
								<?php if ( $price_html = $product->get_price_html() ){?>
									<div class="item-price">
										<span>
											<?php echo $price_html; ?>
										</span>
									</div>
								<?php } ?>	
								<!-- rating  -->
								<?php 
								$rating_count = $product->get_rating_count();
								$review_count = $product->get_review_count();
								$average      = $product->get_average_rating();
								?>
								<?php if (  wc_review_ratings_enabled() ) { ?>
								<div class="reviews-content">
									<div class="star"><?php echo ( $average > 0 ) ?'<span style="width:'. ( $average*13 ).'px"></span>' : ''; ?></div>
								</div>
								<?php } ?>
								<!-- end rating  -->
							</div>								
						</div>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata();?>
			</div>
		</div>					
	</div>
<?php
} 
?>