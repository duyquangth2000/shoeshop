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

// đăng ký sidebar
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
				'description' => __( 'Widgets tạo ra 1 sidebar bên phải.', 'shoe' ),
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
				'description' => __( 'Widgets tạo ra 1 sidebar bên phải.', 'shoe' ),
			)
		)
	);
}
add_action( 'widgets_init', 'pre_sidebar' );


//đăng ký menu
function shoeshop_register_nav_menus() {
	$shoeshop_menus = array(
		'header_menu' => __( 'Menu chính', 'shop' ),
	);
	// Register Nav Menus
	register_nav_menus( $shoeshop_menus );

	$shoeshopct_menus = array(
		'header_menu_left' => __( 'Hệ thống cửa hàng', 'shop' ),
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
		'news_menu' => __( 'Tin tức', 'shop' ),
	);
	register_nav_menus( $shoeshop_news_menus );
}
add_action( 'init', 'shoeshop_register_nav_menus' );

// Add tính năng hỗ trợ Backend => Frontend của WordPress vào theme
function presento_theme_supports() {

    // thumbnails featured
    add_theme_support('post-thumbnails');//thêm ảnh đại diện cho post

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
 * @snippet       Thay đổi từ có sẵn trong WooCommerce
 * @author        Diều Hâu
 * @compatible    WooCommerce 3.5.2
 */
add_filter( 'gettext', 'dieuhau_translate_woocommerce_strings', 999 );
function dieuhau_translate_woocommerce_strings( $translated ) {
	$translated = str_ireplace( 'Add to cart', 'Mua ngay', $translated );
	$translated = str_ireplace( 'Related products', 'Sản phẩm tương tự', $translated );
	$translated = str_ireplace( 'Default sorting', 'Sắp xếp', $translated );
	$translated = str_ireplace( 'Sort by popularity', 'Thứ tự theo mức độ phổ biến', $translated );
	$translated = str_ireplace( 'Sort by average rating', 'Thứ tự theo điểm đánh giá', $translated );
	$translated = str_ireplace( 'Sort by latest', 'Thứ tự mới nhất', $translated );
	$translated = str_ireplace( 'Sort by price: low to high', 'Theo giá: thấp đến cao', $translated );
	$translated = str_ireplace( 'Sort by price: high to low', 'Theo giá: cao đến thấp', $translated );
	$translated = str_ireplace( 'View cart', 'Xem giỏ hàng', $translated );
	$translated = str_ireplace( 'Product', 'Sản phẩm', $translated );
	$translated = str_ireplace( 'Price', 'Giá', $translated );
	$translated = str_ireplace( 'Quantity', 'Số lượng', $translated );
	$translated = str_ireplace( 'Subtotal', 'Tổng tiền', $translated );
	$translated = str_ireplace( 'Coupon code', 'Mã ưu đãi', $translated );
	$translated = str_ireplace( 'Apply coupon', 'Áp dụng', $translated );
	$translated = str_ireplace( 'Update cart', 'Cập nhật giỏ hàng', $translated );
	$translated = str_ireplace( 'Total', 'Tổng', $translated );
	$translated = str_ireplace( 'Cart Tổngs', 'Tổng giỏ hàng', $translated );
	$translated = str_ireplace( 'Coupon:', 'Mã giảm giá', $translated );
	$translated = str_ireplace( '[Remove]', '[Xóa]', $translated );
	$translated = str_ireplace( 'Proceed to checkout', 'Tiến hành thanh toán', $translated );
	$translated = str_ireplace( 'optional', 'tùy chọn', $translated );
	$translated = str_ireplace( 'Place order', 'Đặt hàng', $translated );
	$translated = str_ireplace( 'is a required field', ': là mục bắt buộc', $translated );
	$translated = str_ireplace( 'Dashboard', 'Tổng quan tài khoản', $translated );
	$translated = str_ireplace( 'Orders', 'Đơn hàng', $translated );
	$translated = str_ireplace( 'Account details', 'Chỉnh sửa tài khoản', $translated );
	$translated = str_ireplace( 'The following addresses will be used on the checkout page by default.', 'Các địa chỉ sau sẽ được sử dụng trên trang thanh toán theo mặc định.', $translated );
    $translated = str_ireplace( 'Checkout is not available whilst your cart is empty.', 'Thanh toán không có sẵn khi giỏ hàng trống', $translated );
	$translated = str_ireplace( 'No order has been made yet.', 'Chưa có đơn nào được thực hiện', $translated );
	$translated = str_ireplace( 'Payment method', 'Phương thức thanh toán', $translated );
	$translated = str_ireplace( 'Shipping', 'Phí ship', $translated );
	$translated = str_ireplace( 'Order', 'Đơn hàng', $translated );
	$translated = str_ireplace( 'Date', 'Ngày', $translated );
	$translated = str_ireplace( 'Status', 'Tình trạng', $translated );
	$translated = str_ireplace( 'Actions', 'Hành động', $translated );
	$translated = str_ireplace( 'Processing', 'Đang xử lý', $translated );
	$translated = str_ireplace( 'View', 'Xem chi tiết', $translated );
	// ETC.
    return $translated;
}

add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);
 
function change_existing_currency_symbol( $currency_symbol, $currency ) {
 switch( $currency ) {
 case 'VND': $currency_symbol = 'VNĐ'; break;
 }
 return $currency_symbol;
}

//css tùy biến woo
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

//thay đổi vị trí template của woo
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 21 );

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
add_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 31 );

//số lượng sản phẩm liên quan của woo
function woocommerce_output_related_products() {
    woocommerce_related_products(array('posts_per_page' => 5, 'columns' => 5));
}

//tính phần trăm giảm giá
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
	  return  '<span class="onsale">Giảm ' . round($max_percentage) . '%</span>';
	} 
}
add_filter('woocommerce_sale_flash', 'woocommerce_custom_sale_savings', 10, 3);

//thêm giá gốc ở cart
add_filter( 'woocommerce_cart_item_price', 'bbloomer_change_cart_table_price_display', 30, 3 );
function bbloomer_change_cart_table_price_display( $price, $values, $cart_item_key ) {
	$slashed_price = $values['data']->get_price_html();
	$is_on_sale = $values['data']->is_on_sale();
	if ( $is_on_sale ) {
		$price = $slashed_price;
	}
	return $price;
}

//chuyển đến trang giỏ hàng
add_filter( 'woocommerce_add_to_cart_redirect', 'woovn_skip_cart_redirect_checkout' );
  
function woovn_skip_cart_redirect_checkout( $url ) {
    return wc_get_cart_url();
}
 
?>