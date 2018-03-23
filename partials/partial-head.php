<?php
require_once(__DIR__.'/../config.php');
use app\models\General;
$general=new General;
$theme_url=get_template_directory_uri();

$id=get_the_ID();
$page=get_page($id);
global $wp;
$current_url=home_url($wp->request);

$img_header=$general->all_one("background_lp_header");
if($img_header=="" || $img_header==null){
	$img_header=$theme_url.'/assets/img/header.jpg';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?= wp_head() ?>
	<style type="text/css">
	header.masthead{
		/*background-image: url("<?=$img_header?>");*/
	}
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title><?= get_bloginfo() ?> / <?=$current_url==get_home_url()?'':$page->post_title?></title>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
</head>
<body id="page-top">