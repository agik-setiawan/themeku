<?php
require_once(__DIR__.'/config.php');
require_once(__DIR__.'/app/functions/index.php');
use app\helpers\Assets;
/*
 * add css, js
 */
function t_script(){
	wp_enqueue_style('boots',get_theme_file_uri(
		Assets::bower('bootstrap/dist/css/bootstrap.min')
	),[],true,'all');
	wp_enqueue_style('font_awesome',get_theme_file_uri(
		Assets::vendor('font-awesome/css/font-awesome.min.css')
	),[],true,'all');
	wp_enqueue_style('magnific',get_theme_file_uri(
		Assets::vendor('magnific-popup/magnific-popup.css')
	),[],true,'all');
	wp_enqueue_style('animate',get_theme_file_uri(
		Assets::bower('animate.css/animate.min.css')
	),[],true,'all');
	wp_enqueue_style('creative',get_theme_file_uri(
		Assets::css('creative')
	),[],true,'all');
	wp_enqueue_style('custom',get_theme_file_uri(
		Assets::css('custom')
	),[],true,'all');
	wp_enqueue_style('aos-css',get_theme_file_uri(
		Assets::vendor('aos/aos.css')
	),[],true,'all');

	wp_enqueue_script('jquery',get_theme_file_uri(
		Assets::vendor('jquery/jquery.min.js')
	),[],true,'all');
	wp_enqueue_script('bootstrap_js',get_theme_file_uri(
		Assets::vendor('bootstrap/js/bootstrap.bundle.min.js')
	),[],true,'all');
	wp_enqueue_script('jquery-easing',get_theme_file_uri(
		Assets::vendor('jquery-easing/jquery.easing.min.js')
	),[],true,'all');
	wp_enqueue_script('scrollreveal',get_theme_file_uri(
		Assets::vendor('scrollreveal/scrollreveal.min.js')
	),[],true,'all');
	wp_enqueue_script('magnific-popup-js',get_theme_file_uri(
		Assets::vendor('magnific-popup/jquery.magnific-popup.min.js')
	),[],true,'all');
	wp_enqueue_script('creative-js',get_theme_file_uri(
		Assets::js('creative.min')
	),[],true,'all');
	wp_enqueue_script('aos-js',get_theme_file_uri(
		Assets::vendor('aos/aos.js')
	),[],true,'all');
	wp_enqueue_script('custom-js',get_theme_file_uri(
		Assets::js('custom')
	),[],true,'all');
}
add_action( 'wp_enqueue_scripts', 't_script' );

/*
 * enable menus
 */
if(function_exists('add_theme_support')){
	add_theme_support('menus');
}
//thumbnail
add_theme_support( 'post-thumbnails' ); 


//custom menu
function themeku_menu(){
	register_nav_menu('sample-menu',__('Sample Menu'));
}
add_action('init','themeku_menu');

/*
 * registering menu
 */
//register_nav_menu('primary','Global navigation menu');
register_nav_menus([
	'primary'=>__('Primary Navigation','themeku'),
	'supernav'=>__('Super Navigation','themeku')
]);

/*
 * make widget area
 */
/*
 * registering widget location where place the widget
 */
register_sidebar([
	'name'=>__('Main Sidebar','themeku'),
	'id'=>'sidebar-1',
	'before_widget'=>'<aside id="%1$S" class="widget %2$S">',
	'after_widget'=>'</aside>',
	'before_title'=>'<h3 class="widget-titel">',
	'after_title'=>'</h3>',
]);


?>