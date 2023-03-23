<?php 

/**
	* Layout Tab Category Default
	* @version     1.0.0
**/

	$tag_id = 'sw_woo_rplisting_'. rand().time();
	$nav_id = 'nav_tabs_res'.rand().time();
	
$term_name = esc_html__( 'All Categories', 'sw_woocommerce' );
?>
<div class="sw-woo-tab-listing style3" id="<?php echo esc_attr( $tag_id ); ?>" >
		<?php if( $title1 != '' ){ ?>
			<div class="box-title"><h3><?php echo  $title1; ?></h3></div>
		<?php } ?>
		<div class="tab-listing-container row">
			<?php
				$default = array(
					'post_type' => 'product',
					'orderby' => $orderby,
					'order' => $order,
					'meta_key'		=> 'recommend_product',
					'meta_value'	=> '1',
					'post_status' => 'publish',
					'showposts' => $numberposts
				);
				if( $category != '' ){
					$term = get_term_by( 'slug', $category, 'product_cat' );	
					if( $term ) :
						$term_name = $term->name;
					endif;

					$default['tax_query'] = array(
						array(
							'taxonomy'  => 'product_cat',
							'field'     => 'slug',
							'terms'     => $category ),
							'operator' => 'IN'
						);	
				}
				$default = sw_check_product_visiblity( $default );
				
				$attribute = '';
				$col1 = 12 / $columns;
				$col2 = 12 / $columns1;
				$col3	= 12 / $columns2;
				$col4	= 12 / $columns3;
				$attribute .= 'item item-listing product col-lg-'.$col1.' col-md-'.$col2.' col-sm-'.$col3.' col-xs-'.$col4.' clearfix';
				$list = new WP_Query( $default );
				$max_page = $list -> max_num_pages;
				if( $list->have_posts() ) : 			 
					while($list->have_posts()): $list->the_post();
					global $product, $post;
					
					$terms_id = get_the_terms( $post->ID, 'product_cat' );
					$term_str = '';
					
					foreach( $terms_id as $key => $value ) :
						$term_str .= '<a href="'. get_term_link( $value->term_id, 'product_cat' ) .'">'. esc_html( $value->name ) .'</a>';
					endforeach;
					
					$attribute .= ( $product->get_price_html() ) ? '' : ' item-nonprice';
				?>
					<div class="<?php echo esc_attr( $attribute ); ?>">
						<div class="item-wrap24">
							<div class="item-detail">										
								<div class="item-img products-thumb">
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
										<?php 
										$id = get_the_ID();
										if ( has_post_thumbnail() ){
											echo get_the_post_thumbnail( $post->ID, 'shop_catalog', array( 'alt' => $post->post_title ) ) ? get_the_post_thumbnail( $post->ID, 'shop_catalog', array( 'alt' => $post->post_title ) ): '<img src="'.get_template_directory_uri().'/assets/img/placeholder/'.'large'.'.png" alt="No thumb">';		
										}else{
											echo '<img src="'.get_template_directory_uri().'/assets/img/placeholder/'.'large'.'.png" alt="No thumb">';
										}
										?>
									</a>
									<div class="item-button">
										<?php woocommerce_template_loop_add_to_cart(); ?>
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
									<?php do_action( 'sw_woocommerce_custom_action' ); ?>
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
								</div>								
							</div>
						</div>
					</div>
							<?php endwhile; wp_reset_postdata();?>
					<div class="item item-listing item-more">
						<a href="javascript:void(0)" data-ajaxurl="<?php echo esc_url( sw_ajax_url() ) ?>" data-layout="<?php echo esc_attr( isset( $widget_template ) ? $widget_template : $layout );?>" data-maxpage="<?php echo esc_attr( $max_page ) ?>" data-attributes="<?php echo esc_attr( $attribute ) ?>" data-number="<?php echo esc_attr( $numberposts ) ?>" data-orderby="<?php echo esc_attr( $orderby ) ?>" data-order="<?php echo esc_attr( $order ) ?>" data-category="<?php echo esc_attr( $category ) ?>" data-label-loaded="<?php esc_attr_e( 'All Item', 'sw_woocommerce' ); ?>" data-label="<?php esc_html_e( 'Load More', 'sw_woocommerce' ); ?>"></a>
					</div>
				<?php 
					else :
						esc_html_e( 'There is no product on this category', 'sw_woocommerce' );
					endif;
				?>			
		</div>
	</div>
