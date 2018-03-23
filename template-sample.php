<?php
/*
Template Name: Sample Template
*/
?>
<?php
require_once(__DIR__.'/config.php');
use app\helpers\Assets;
$theme_url=get_template_directory_uri();
?>
<?= get_template_part('partials/partial','head') ?>

  <?=get_header()?>

<!--content-->
<?= get_template_part('partials/partial','landing_page') ?>
<!--content-->


<?=get_footer() ?>
<?= wp_footer() ?>
<?= get_template_part('partials/partial','end') ?>