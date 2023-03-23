<?php 
/***** Active Plugin ********/
require_once( get_template_directory().'/lib/class-tgm-plugin-activation.php' );

add_action( 'tgmpa_register', 'emarket_register_required_plugins' );
function emarket_register_required_plugins() {
	$plugins = array(
		array(
			'name'               => esc_html__( 'WooCommerce', 'emarket' ), 
			'slug'               => 'woocommerce', 
			'required'           => true, 
			'version'			 => '7.1.0'
		),

		array(
			'name'               => esc_html__( 'Revslider', 'emarket' ), 
			'slug'               => 'revslider', 
			'source'             => esc_url('https://demo.wpthemego.com/modules/revslider.zip'),   
			'required'           => true, 
			'version'            => '6.6.4'
		),

		array(
			'name'               => esc_html__( 'JetSmartFilters', 'emarket' ), 
			'slug'               => 'jet-smart-filters', 
			'source'             => esc_url('https://demo.wpthemego.com/modules/jet-smart-filters.zip'),  
			'required'           => true, 
			'version'            => '3.0.0'
		), 

		array(
			'name'               => esc_html__( 'Elementor', 'emarket' ), 
			'slug'               => 'elementor',
			'required'           => true, 
		), 

		array(
			'name'               => esc_html__( 'Elementor Pro', 'emarket' ), 
			'slug'               => 'elementor-pro', 
			'source'             => esc_url('https://demo.wpthemego.com/modules/elementor-pro.zip'),
			'required'           => true, 
			'version'            => '3.7.7'
		), 

		array(
			'name'     		 	 => esc_html__( 'SW Core', 'emarket' ),
			'slug'      		 => 'sw_core',
			'source'        	 => get_template_directory() . '/lib/plugins/sw_core.zip', 
			'required'  		 => true,   
			'version'			 => '1.4.0'
		),

		array(
			'name'     		 	 => esc_html__( 'SW WooCommerce', 'emarket' ),
			'slug'      		 => 'sw_woocommerce',
			'source'         	 => get_template_directory() . '/lib/plugins/sw_woocommerce.zip', 
			'required'  		 => true,
			'version'			 => '1.6.6'
		),		

		array(
			'name'     			 => esc_html__( 'Sw Product Brand', 'emarket' ),
			'slug'      		 => 'sw_product_brand',
			'source'         	 => get_template_directory() . '/lib/plugins/sw_product_brand.zip', 
			'required'  		 => true,
			'version'			 => '1.1.2'
		),

		array(
			'name'     			 => esc_html__( 'Sw List Store', 'emarket' ),
			'slug'      		 => 'sw_liststore',
			'source'         	 => get_template_directory() . '/lib/plugins/sw_liststore.zip', 
			'required'  		 => true,
			'version'			 => '1.0.1'
		),

		array(
			'name'     			 => esc_html__( 'SW Woocommerce Swatches', 'emarket' ),
			'slug'      		 => 'sw_wooswatches',
			'source'         	 => get_template_directory() . '/lib/plugins/sw_wooswatches.zip', 
			'required'  		 => true,
			'version'			 => '1.1.6'
		),

		array(
			'name'     			 => esc_html__( 'SW Ajax Woocommerce Search', 'emarket' ),
			'slug'      		 => 'sw_ajax_woocommerce_search',
			'source'         	 => get_template_directory() . '/lib/plugins/sw_ajax_woocommerce_search.zip', 
			'required'  		 => true,
			'version'			 => '1.3.1'
		),

		array(
			'name'     			 => esc_html__( 'Sw Product Bundles', 'emarket' ),
			'slug'      		 => 'sw-product-bundles',
			'source'         	 => get_template_directory() . '/lib/plugins/sw-product-bundles.zip', 
			'required'  		 => true,
			'version'			 => '2.1.9'
		),		

		array(
			'name'     			 => esc_html__( 'SW Add To Cart Notification', 'emarket' ),
			'slug'      		 => 'sw-add-to-cart-notification',
			'source'         	 => get_template_directory() . '/lib/plugins/sw-add-to-cart-notification.zip', 
			'required'  		 => true,
			'version'			 => '1.0.1'
		),
		
		array(
			'name'     			 => esc_html__( 'Sw Woocommerce Catalog Mode', 'emarket' ),
			'slug'      		 => 'sw-woocatalog',
			'source'         	 => get_template_directory() . '/lib/plugins/sw-woocatalog.zip', 
			'required'  		 => true,
			'version'			 => '1.0.4'
		),
		
		array(
			'name'               => esc_html__( 'One Click Demo Import', 'emarket' ), 
			'slug'               => 'one-click-demo-import', 
			'source'             => esc_url('https://demo.wpthemego.com/modules/one-click-demo-import.zip'), 
			'required'           => true, 
		),
		
		array(
			'name'      		 => esc_html__( 'MailChimp for WordPress Lite', 'emarket' ),
			'slug'     			 => 'mailchimp-for-wp',
			'required' 			 => false,
		),

		array(
			'name'      		 => esc_html__( 'Contact Form 7', 'emarket' ),
			'slug'     			 => 'contact-form-7',
			'required' 			 => false,
		),
		
		array(
			'name'      		 => esc_html__( 'YITH Woocommerce Compare', 'emarket' ),
			'slug'      		 => 'yith-woocommerce-compare',
			'required'			 => false
		),
		array(
			'name'     			 => esc_html__( 'YITH Woocommerce Wishlist', 'emarket' ),
			'slug'      		 => 'yith-woocommerce-wishlist',
			'required' 			 => false
		),

		array(
			'name'     			 => esc_html__( 'Smash Balloon Instagram Feed', 'emarket' ),
			'slug'      		 => 'instagram-feed',
			'required' 			 => false
		),
		
		array(
			'name'     			 => esc_html__( 'PowerPack Lite for Elementor', 'emarket' ),
			'slug'      		 => 'powerpack-lite-for-elementor',
			'required' 			 => false
		),
	);
	
	$layout_ID = ( get_option( 'page_on_front' ) ) ? get_option( 'page_on_front' ) : 0;
	$home_layout = get_post_meta( $layout_ID, 'page_home_template', true );
	if( $home_layout == 'home-style17' || $home_layout == 'home-style33' ){
		$plugins[] = array(
			'name'     		 	 => esc_html__( 'Sw Video Box', 'emarket' ),
			'slug'      		 => 'sw-video-box',
			'source'         	 => get_template_directory() . '/lib/plugins/sw-video-box.zip', 
			'required'  		 => true
		);
	}
	elseif( $home_layout == 'home-style39' ){
		$plugins[] = array(
			'name'     			 => esc_html__( 'Sw Look Book', 'emarket' ),
			'slug'      		 => 'sw_lookbook',
			'source'         	 => get_template_directory() . '/lib/plugins/sw_lookbook.zip', 
			'required'  		 => true,
			'version'			 => '1.0.1'
		);
	}
	elseif( $home_layout == 'home-style24' ){
		$plugins[] = array(
			'name'     			 => esc_html__( 'Product Designer', 'emarket' ),
			'slug'      		 => 'product-designer',
			'source'             => esc_url('https://demo.wpthemego.com/modules/product-designer.zip'),
			'required' 			 => false,
		);
	}
	elseif( $home_layout == 'home-style37' ){
		$plugins[] = array(
			'name'      		 => esc_html__( 'Quantity Field on Shop Page for WooCommerce', 'emarket' ),
			'slug'     		 	 => 'quantity-field-on-shop-page-for-woocommerce',
			'required' 			 => false,
		);
	}
	elseif( $home_layout == 'home-style20' ){
		$plugins[] = array(
			'name'     			 => esc_html__( 'Sw Author', 'emarket' ),
			'slug'      		 => 'sw-author',
			'source'         	 => get_template_directory() . '/lib/plugins/sw-author.zip', 
			'required'  		 => true,
			'version'			 => '1.0.2'
		);
	}
	
	elseif( $home_layout == 'home-style47' || $home_layout == 'home-style50'){
		$plugins[] = array(
			'name'     			 => esc_html__( 'Qi Addons For Elementor', 'emarket' ),
			'slug'      		 => 'qi-addons-for-elementor',
			'required'  		 => true,
		);
	}
	
	elseif( $home_layout == 'home-style50' ){
		$plugins[] = array(
			'name'     			 => esc_html__( 'PowerPack Lite for Elementor', 'emarket' ),
			'slug'      		 => 'powerpack-lite-for-elementor',
			'required'  		 => true,
		);
	}
	
	if(  class_exists( 'WC_Vendors' ) || class_exists( 'WeDevs_Dokan' ) || class_exists('WCFMmp') || class_exists('WCMp') ){
		$plugins[] = array(
			'name'     			 => esc_html__( 'Sw Vendor Slider', 'emarket' ),
			'slug'      		 => 'sw_vendor_slider',
			'source'         	 => get_template_directory() . '/lib/plugins/sw_vendor_slider.zip', 
			'required'  		 => true,
			'version'			 => '1.1.9'
		);
	}

	$config = array();

	tgmpa( $plugins, $config );

	}
	add_action( 'vc_before_init', 'emarket_vcSetAsTheme' );
	function emarket_vcSetAsTheme() {
	  vc_set_as_theme();
}