<?php
namespace app\helpers;
/**
* menu
*/
class Assets
{

/**
* css directory
*/
	public static function css($name){
		return '/assets/css/'.$name.'.css';
	}
/**
* js directory
*/
	public static function js($name){
		return '/assets/js/'.$name.'.js';
	}
/**
* vendor directory
*/
	public static function vendor($name){
		return '/assets/vendor/'.$name;
	}
	/**
* bower directory
*/
	public static function bower($name){
		return '/assets/bower/'.$name;
	}
	/**
* img directory
*/
	public static function img($base,$name){
		return $base.'/assets/img/'.$name;
	}
}
?>