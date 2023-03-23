<?php 
	$widget_id = isset( $widget_id ) ? $widget_id : 'sw_testimonial'.rand().time();
	$default = array(
		'post_type' => 'testimonial',
		'orderby' => $orderby,
		'order' => $order,
		'post_status' => 'publish',
		'showposts' => $numberposts
	);
	$list = new WP_Query( $default );
	if ( $list->have_posts() ){
	$i = 0;
?>
	<div id="<?php echo esc_attr( $widget_id ) ?>" class="testimonial-slider-layout13 carousel carousel-fade slide <?php echo esc_attr( isset( $widget_template ) ? $widget_template : $layout ) . ' ' . esc_attr( $el_class ) ?>" data-ride="carousel" data-interval="<?php echo esc_attr( $interval ); ?>">
		<!-- Controls -->
	  <a class="left carousel-ctr" href="#<?php echo esc_attr( $widget_id ) ?>" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
	  <a class="right carousel-ctr" href="#<?php echo esc_attr( $widget_id ) ?>" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
		<div class="carousel-inner">
		<?php 
			$count_items 	= 0;
			$numb 			= ( $list->found_posts > 0 ) ? $list->found_posts : count( $list->posts );
			$count_items 	= ( $numberposts >= $numb ) ? $numb : $numberposts;
			while($list->have_posts()): $list->the_post();
			global $post;
			$au_name = get_post_meta( $post->ID, 'au_name', true );
			$au_url  = get_post_meta( $post->ID, 'au_url', true );
			$au_info = get_post_meta( $post->ID, 'au_info', true );
			$active = ($i== 0) ? 'active' :'';
			?>
			
			<div class="item <?php echo esc_attr( $active ) ?>">
				<div class="item-inner">
					<div class="item-detail">
						<div class="client-image">
							<div class="image-client">
								<a href="#" title="<?php echo esc_attr( $post->post_title ) ?> "><?php the_post_thumbnail( 'large' ) ?></a>
							</div>
						</div>
						<div class="client-say-info">
							<h4><?php echo esc_html($au_info) ?></h4>
							<h2><a href="<?php echo esc_url( $au_url ) ?>" title="<?php echo esc_attr( $post->post_title ) ?>"><?php echo esc_html($au_name) ?></a></h2>
							<div class="client-comment">
							<?php
								$text = get_the_content($post->ID);	
								$content = wp_trim_words($text, $length);
								echo esc_html($content);
							?>
							</div>
						</div>
					</div>
				</div>
			 </div>
			<?php $i++; endwhile; wp_reset_postdata();  ?>
		</div>
	</div>
<?php	
}
?>