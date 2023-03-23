<?php 

/**
* Layout Default
* @version     1.0.0
**/


$widget_id = isset( $widget_id ) ? $widget_id : $this->generateID();
$term_name = esc_html__( 'All Categories', 'sw_woocommerce' );
$default = array(
	'post_type' 			=> 'product',		
	'post_status' 			=> 'publish',
	'ignore_sticky_posts'   => 1,
	'showposts'				=> $numberposts,
	'meta_key' 		 		=> 'total_sales',
	'orderby' 		 		=> 'meta_value_num '. $orderby,
	'order' => $order,
);
if( $category != '' ){
	$term = get_term_by( 'slug', $category, 'product_cat' );
	if( $term ) :
		$term_name = $term->name;
		$viewall = get_term_link( $term->term_id, 'product_cat' );
	endif;
	
	$default['tax_query'] = array(
		array(
			'taxonomy'	=> 'product_cat',
			'field'	=> 'slug',
			'terms'	=> $category,
			'operator' => 'IN'
		)
	);
}
$id = 'sw_bestsales_'.$this->generateID();
$list = new WP_Query( $default );

if ( $list -> have_posts() ){ ?>
<div id="<?php echo 'slider_' . $widget_id; ?>" class="responsive-slider best-selling-product16 clearfix loading" data-lg="<?php echo esc_attr( $columns ); ?>" data-md="<?php echo esc_attr( $columns1 ); ?>" data-sm="<?php echo esc_attr( $columns2 ); ?>" data-xs="<?php echo esc_attr( $columns3 ); ?>" data-mobile="<?php echo esc_attr( $columns4 ); ?>" data-speed="<?php echo esc_attr( $speed ); ?>" data-scroll="<?php echo esc_attr( $scroll ); ?>" data-dots="false" data-interval="<?php echo esc_attr( $interval ); ?>"  data-autoplay="<?php echo esc_attr( $autoplay ); ?>">
	<?php if( $title1 != '' ){?>
	<div class="box-title">
		<h3><span><?php echo ( $title1 != '' ) ? $title1 : $term_name; ?></span></h3>
	</div>
	<?php } ?>         
	<div class="slider responsive">			
			<?php
					$i = 1;
					$count_items 	= 0;
					$numb 			= ( $list->found_posts > 0 ) ? $list->found_posts : count( $list->posts );
					$count_items 	= ( $numberposts >= $numb ) ? $numb : $numberposts;
					$i 				= 0;
					while($list->have_posts()): $list->the_post();global $product, $post;
					
					$terms_id = get_the_terms( $post->ID, 'product_cat' );
					$term_str = '';
					
					foreach( $terms_id as $key => $value ) :
						$term_str .= '<a href="'. get_term_link( $value->term_id, 'product_cat' ) .'">'. esc_html( $value->name ) .'</a>';
					endforeach;
					
					if( $i % $item_row == 0 ){
				?>
				<div class="item product">
				<?php } ?>
				<?php include( WCTHEME . '/default-item16.php' ); ?>
				<?php if( ( $i+1 ) % $item_row == 0 || ( $i+1 ) == $count_items ){?> </div><?php } ?>
			    <?php $i++; endwhile; wp_reset_postdata();?>
			</div>           
		</div>
		<?php
	}else{
		echo '<div class="alert alert-warning alert-dismissible" role="alert">
		<a class="close" data-dismiss="alert">&times;</a>
		<p>'. esc_html__( 'Has no product in this category', 'sw_woocommerce' ) .'</p>
	</div>';
}
?>
