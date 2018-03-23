<?php
/*
Template Name: Page
*/
?>
<?php
require_once(__DIR__.'/config.php');
use app\helpers\Assets;
$theme_url=get_template_directory_uri();
$id=get_the_ID();
$page=get_page($id);
?>
<?= get_template_part('partials/partial','head') ?>
<?=get_header()?>
<?=get_template_part('partials/partial','header_title') ?>

<!--content-->
<div>
	</div>
<div class="container">
	<div class="content-page">
	<div class="row">
		<div class="col-md-12">
			<h2 class="title-page"><?=$page->post_title?></h2>
			<div class="line-title"></div>
			<div class="content-page-text">
			<?= $page->post_content; ?>
			</div>
		</div>
	</div>
</div>
</div>
<!--content-->


<?=get_footer() ?>
<?= wp_footer() ?>
<?= get_template_part('partials/partial','end') ?>