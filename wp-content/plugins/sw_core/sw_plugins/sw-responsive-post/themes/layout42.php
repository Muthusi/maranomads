<?php 
/**
** Theme: Responsive Slider
** Author: Smartaddons
** Version: 1.0
**/
$default = array(
	'category' => $category, 
	'orderby' => $orderby,
	'order' => $order, 
	'numberposts' => $numberposts,
	);
$list = get_posts($default);
do_action( 'before' ); 
$id = 'sw_reponsive_post_slider_'.rand().time();
if ( count($list) > 0 ){
	?>
	<div class="clear"></div>
	<div id="<?php echo esc_attr( $id ) ?>" class="responsive-post-slider42 responsive-slider clearfix loading" data-lg="<?php echo esc_attr( $columns ); ?>" data-md="<?php echo esc_attr( $columns1 ); ?>" data-sm="<?php echo esc_attr( $columns2 ); ?>" data-xs="<?php echo esc_attr( $columns3 ); ?>" data-mobile="<?php echo esc_attr( $columns4 ); ?>" data-speed="<?php echo esc_attr( $speed ); ?>" data-scroll="<?php echo esc_attr( $scroll ); ?>" data-interval="<?php echo esc_attr( $interval ); ?>" data-autoplay="<?php echo esc_attr( $autoplay ); ?>" data-dots="false">
		<div class="resp-slider-container">
			<?php if( $title2 != '' ){?>
			<div class="box-title">
				<h3><span><?php echo ( $title2 != '' ) ? $title2 : $term_name; ?></span></h3>
				<?php if( $description != '' ){	echo '<div class="description">'.$description.'</div>'; } ?>
			</div>
			<?php } ?> 
			<div class="slider responsive">
				<?php foreach ($list as $post){ 
					$view_count = get_post_meta( $post->ID, 'post_views_count', true );
				?>
				<?php if($post->post_content != Null) { ?>
				<div class="item widget-pformat-detail">
					<div class="item-inner">								
						<div class="item-detail">
							<?php 
								$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
								if ( $feat_image_url ){ 
								?>
								<div class="img_over">
									<a href="<?php echo get_permalink($post->ID)?>" >
										<?php 								
											$width  = isset( $img_w ) ? $img_w : 370;
											$height = isset( $img_w ) ? $img_h : 240;
											$crop = isset( $crop ) ? $crop : true;
											$image = sw_image_resize( $feat_image_url, $width, $height, $crop );
											echo '<img src="'. esc_url( $image['url'] ) .'" alt="'. esc_attr( $post->post_title ) .'">';
										?>
									</a>
								</div>
							<?php } ?>
							<div class="entry-content">
								<h4><a href="<?php echo get_permalink($post->ID)?>"><?php echo $post->post_title;?></a></h4>
								<div class="description">
									<?php 										
										$content = self::ya_trim_words($post->post_content, $length, ' ');							
										echo $content;
									?>
								</div>
								<div class="entry-meta">
									<span class="entry-date">
										<span class="day"><?php echo get_the_date('j');?></span>
										<span class="month-year"><?php echo get_the_date('F');?><br><?php echo get_the_date('Y');?></span>
									</span>
									<div class="entry-right">
										<span class="view-count">
											<?php echo $view_count; ?>
										</span>
										<span class="entry-comment"><?php echo get_post()->comment_count; ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<?php }?>
			</div>
		</div>
	</div>
	<?php } ?>