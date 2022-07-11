<?php 

/**
 * @package My_Plugin
 * @version 1.0.0
 */
/*
Plugin Name: My Plugin
Plugin URI: http://shoe.com
Description: Đây là plugin tạo ra các thành phần tùy biến Post Type, Taxonomy, Custom Field
Author: Admin
Version: 1.0.0
Author URI: http://shoe.com.vn
*/

require_once plugin_dir_path( dirname( __FILE__ ) ) . 'my-plugin/news-post.php';
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'my-plugin/widget-post.php';

?>