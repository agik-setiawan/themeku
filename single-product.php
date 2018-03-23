<?php
/*
Template Name: Product
Template Post Type: post, product
*/
require_once(__DIR__.'/config.php');
use app\helpers\Assets;
use app\models\General;

$general=new General;
$theme_url=get_template_directory_uri();

$img_header=$general->all_one("background_lp_header");
if($img_header=="" || $img_header==null){
$img_header=$theme_url.'/assets/img/header.jpg';
}

$id=get_the_ID();
$post=wp_get_single_post($id);
$commenter = wp_get_current_commenter();
?>
<?= get_template_part('partials/partial','head') ?>

<?=get_header()?>

<!--content-->
  <header class="page_title text-center text-white d-flex">
    <div class="img_background_header_page" style="background-image: url('<?=$img_header?>');"></div>
    <div class="container page_title_content">
      <div class="row">
        <div class="col-lg-10 mx-auto">
         <h1 class="text-uppercase_ animated bounceInLeft">
          <?=strtoupper($post->post_title)?>
        </h1>
      </div>
    </div>
  </div>
</header>

<div class="container ">
	<div class="pg"></div>

	<div class="row container-fluid">
		<!--<div class="col-lg-8 post-detail-box">
			<div class="">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 mx-auto">
							<h5 class="section-heading post-title-detail"><?=$post->post_title?></h5>
							<?=$post->post_content?>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<div class="col-md-9">
		<div class="card">
			<div class="card-header">
				<h6 class="card-title"><b><?=$post->post_title?></b></h6>
			</div>
			<div class="card-body">
				<?=$post->post_content?>
			</div>
		</div>
	</div>

	</div>
</div>
<!--content-->

<br>
<br>

<?= get_footer() ?>
<?= wp_footer() ?>
<?= get_template_part('partials/partial','end') ?>