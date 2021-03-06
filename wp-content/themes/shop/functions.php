<?php

function pre_link_style(){
    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' ,array(), wp_get_theme()->get( 'Version' ));
    wp_enqueue_style('owl-carousel-min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' ,array(), wp_get_theme()->get( 'Version' ));
    wp_enqueue_style('owl-theme-default-min', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css"' ,array(), wp_get_theme()->get( 'Version' ));
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css' ,array(), wp_get_theme()->get( 'Version' ));
	wp_enqueue_style('thanh-toan-css', get_template_directory_uri() . '/assets/css/thanh-toan.css' ,array(), wp_get_theme()->get( 'Version' ));
	wp_enqueue_style('my-account-css', get_template_directory_uri() . '/assets/css/my-account.css' ,array(), wp_get_theme()->get( 'Version' ));
	wp_enqueue_style('he-thong-css', get_template_directory_uri() . '/assets/css/he-thong.css' ,array(), wp_get_theme()->get( 'Version' ));
	wp_enqueue_style('jquery-bxslider-css', get_template_directory_uri() . '/assets/css/jquery.bxslider.css' ,array(), wp_get_theme()->get( 'Version' ));
	wp_enqueue_style('lien-he-css', get_template_directory_uri() . '/assets/css/lien-he.css' ,array(), wp_get_theme()->get( 'Version' ));
	wp_enqueue_style('tin-tuc-css', get_template_directory_uri() . '/assets/css/tin-tuc.css' ,array(), wp_get_theme()->get( 'Version' ));

    wp_enqueue_script(
		'jquery-3.6.0-min',
		get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_enqueue_script(
		'jquery-bxslider-js',
		get_template_directory_uri() . '/assets/js/jquery.bxslider.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
    wp_enqueue_script(
		'bootstrap-min-js',
		get_template_directory_uri() . '/assets/js/bootstrap.min.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
    wp_enqueue_script(
		'jquery-countTo-js',
		get_template_directory_uri() . '/assets/js/jquery.countTo.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
    wp_enqueue_script(
		'owl-carousel-min-js',
		get_template_directory_uri() . '/assets/js/owl.carousel.min.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
    wp_enqueue_script(
		'shoe-js',
		get_template_directory_uri() . '/assets/js/shoe.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}

add_action( 'wp_enqueue_scripts', 'pre_link_style');

// ????ng k?? sidebar
function pre_sidebar() {
	$shared_args = array(
		'before_title'  => '<h3 class="sidebar-title">',
		'after_title'   => '</h3>',
		'before_widget' => '<div class="sidebar-item widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Main Sidebar', 'shop' ),
				'id'          => 'sidebar',
				'description' => __( 'Widgets t???o ra 1 sidebar b??n ph???i.', 'shoe' ),
			)
		)
	);

	$shared_args = array(
		'before_title'  => '<h3 class="sidebar-title">',
		'after_title'   => '</h3>',
		'before_widget' => '<div class="sidebar-item widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Sidebar right', 'shop' ),
				'id'          => 'sidebar-right',
				'description' => __( 'Widgets t???o ra 1 sidebar b??n ph???i.', 'shoe' ),
			)
		)
	);
}
add_action( 'widgets_init', 'pre_sidebar' );


//????ng k?? menu
function shoeshop_register_nav_menus() {
	$shoeshop_menus = array(
		'header_menu' => __( 'Menu ch??nh', 'shop' ),
	);
	// Register Nav Menus
	register_nav_menus( $shoeshop_menus );

	$shoeshopct_menus = array(
		'header_menu_left' => __( 'H??? th???ng c???a h??ng', 'shop' ),
	);
	register_nav_menus( $shoeshopct_menus );

	$shoeshopct_menus = array(
		'header_menu_category' => __( 'Menu category', 'shop' ),
	);
	register_nav_menus( $shoeshopct_menus );

	$shoeshopcts_menus = array(
		'header_menu_category' => __( 'All category', 'shop' ),
	);
	register_nav_menus( $shoeshopcts_menus );

	$shoeshop_news_menus = array(
		'news_menu' => __( 'Tin t???c', 'shop' ),
	);
	register_nav_menus( $shoeshop_news_menus );
}
add_action( 'init', 'shoeshop_register_nav_menus' );

// Add t??nh n??ng h??? tr??? Backend => Frontend c???a WordPress v??o theme
function presento_theme_supports() {

    // thumbnails featured
    add_theme_support('post-thumbnails');//th??m ???nh ?????i di???n cho post

    // post format
    add_theme_support( 'post-formats', array( 'aside', 'gallery' ));

}

add_action('after_setup_theme', 'presento_theme_supports');

// Woo support
function customtheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );

/**
 * @snippet       Thay ?????i t??? c?? s???n trong WooCommerce
 * @author        Di???u H??u
 * @compatible    WooCommerce 3.5.2
 */
add_filter( 'gettext', 'dieuhau_translate_woocommerce_strings', 999 );
function dieuhau_translate_woocommerce_strings( $translated ) {
	$translated = str_ireplace( 'Add to cart', 'Mua ngay', $translated );
	$translated = str_ireplace( 'Related products', 'S???n ph???m t????ng t???', $translated );
	$translated = str_ireplace( 'Default sorting', 'S???p x???p', $translated );
	$translated = str_ireplace( 'Sort by popularity', 'Th??? t??? theo m???c ????? ph??? bi???n', $translated );
	$translated = str_ireplace( 'Sort by average rating', 'Th??? t??? theo ??i???m ????nh gi??', $translated );
	$translated = str_ireplace( 'Sort by latest', 'Th??? t??? m???i nh???t', $translated );
	$translated = str_ireplace( 'Sort by price: low to high', 'Theo gi??: th???p ?????n cao', $translated );
	$translated = str_ireplace( 'Sort by price: high to low', 'Theo gi??: cao ?????n th???p', $translated );
	$translated = str_ireplace( 'View cart', 'Xem gi??? h??ng', $translated );
	$translated = str_ireplace( 'Product', 'S???n ph???m', $translated );
	$translated = str_ireplace( 'Price', 'Gi??', $translated );
	$translated = str_ireplace( 'Quantity', 'S??? l?????ng', $translated );
	$translated = str_ireplace( 'Subtotal', 'T???ng ti???n', $translated );
	$translated = str_ireplace( 'Coupon code', 'M?? ??u ????i', $translated );
	$translated = str_ireplace( 'Apply coupon', '??p d???ng', $translated );
	$translated = str_ireplace( 'Update cart', 'C???p nh???t gi??? h??ng', $translated );
	$translated = str_ireplace( 'Total', 'T???ng', $translated );
	$translated = str_ireplace( 'Cart T???ngs', 'T???ng gi??? h??ng', $translated );
	$translated = str_ireplace( 'Coupon:', 'M?? gi???m gi??', $translated );
	$translated = str_ireplace( '[Remove]', '[X??a]', $translated );
	$translated = str_ireplace( 'Proceed to checkout', 'Ti???n h??nh thanh to??n', $translated );
	$translated = str_ireplace( 'optional', 't??y ch???n', $translated );
	$translated = str_ireplace( 'Place order', '?????t h??ng', $translated );
	$translated = str_ireplace( 'is a required field', ': l?? m???c b???t bu???c', $translated );
	$translated = str_ireplace( 'Dashboard', 'T???ng quan t??i kho???n', $translated );
	$translated = str_ireplace( 'Orders', '????n h??ng', $translated );
	$translated = str_ireplace( 'Account details', 'Ch???nh s???a t??i kho???n', $translated );
	$translated = str_ireplace( 'The following addresses will be used on the checkout page by default.', 'C??c ?????a ch??? sau s??? ???????c s??? d???ng tr??n trang thanh to??n theo m???c ?????nh.', $translated );
    $translated = str_ireplace( 'Checkout is not available whilst your cart is empty.', 'Thanh to??n kh??ng c?? s???n khi gi??? h??ng tr???ng', $translated );
	$translated = str_ireplace( 'No order has been made yet.', 'Ch??a c?? ????n n??o ???????c th???c hi???n', $translated );
	$translated = str_ireplace( 'Payment method', 'Ph????ng th???c thanh to??n', $translated );
	$translated = str_ireplace( 'Shipping', 'Ph?? ship', $translated );
	$translated = str_ireplace( 'Order', '????n h??ng', $translated );
	$translated = str_ireplace( 'Date', 'Ng??y', $translated );
	$translated = str_ireplace( 'Status', 'T??nh tr???ng', $translated );
	$translated = str_ireplace( 'Actions', 'H??nh ?????ng', $translated );
	$translated = str_ireplace( 'Processing', '??ang x??? l??', $translated );
	$translated = str_ireplace( 'View', 'Xem chi ti???t', $translated );
	// ETC.
    return $translated;
}

add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);
 
function change_existing_currency_symbol( $currency_symbol, $currency ) {
 switch( $currency ) {
 case 'VND': $currency_symbol = 'VN??'; break;
 }
 return $currency_symbol;
}

//css t??y bi???n woo
function wp_enqueue_woocommerce_style(){
	wp_register_style( 'mytheme-woocommerce', get_stylesheet_directory_uri() . '/assets/css/woo.css' );
	
	if ( class_exists( 'woocommerce' ) ) {
		wp_enqueue_style( 'mytheme-woocommerce' );
	}

	wp_enqueue_script(
		'woo-js',
		get_template_directory_uri() . '/assets/js/woo.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );

//thay ?????i v??? tr?? template c???a woo
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 21 );

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
add_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 31 );

//s??? l?????ng s???n ph???m li??n quan c???a woo
function woocommerce_output_related_products() {
    woocommerce_related_products(array('posts_per_page' => 5, 'columns' => 5));
}

//t??nh ph???n tr??m gi???m gi??
function woocommerce_custom_sale_savings() {
	global $product;
	if ( ! $product->is_on_sale() ) return;
	if ( $product->is_type( 'simple' ) ) {
	   $max_percentage = ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100;
	} elseif ( $product->is_type( 'variable' ) ) {
	   $max_percentage = 0;
	   foreach ( $product->get_children() as $child_id ) {
		  $variation = wc_get_product( $child_id );
		  $price = $variation->get_regular_price();
		  $sale = $variation->get_sale_price();
		  if ( $price != 0 && ! empty( $sale ) ) $percentage = ( $price - $sale ) / $price * 100;
		  if ( $percentage > $max_percentage ) {
			 $max_percentage = $percentage;
		  }
	   }
	}
	if ( $max_percentage > 0 ) {
	  return  '<span class="onsale">Gi???m ' . round($max_percentage) . '%</span>';
	} 
}
add_filter('woocommerce_sale_flash', 'woocommerce_custom_sale_savings', 10, 3);

//th??m gi?? g???c ??? cart
add_filter( 'woocommerce_cart_item_price', 'bbloomer_change_cart_table_price_display', 30, 3 );
function bbloomer_change_cart_table_price_display( $price, $values, $cart_item_key ) {
	$slashed_price = $values['data']->get_price_html();
	$is_on_sale = $values['data']->is_on_sale();
	if ( $is_on_sale ) {
		$price = $slashed_price;
	}
	return $price;
}

//chuy???n ?????n trang gi??? h??ng
add_filter( 'woocommerce_add_to_cart_redirect', 'woovn_skip_cart_redirect_checkout' );
  
function woovn_skip_cart_redirect_checkout( $url ) {
    return wc_get_cart_url();
}
 
?>