<?php
/*
Template Name: Maintenance
*/
?>
<?php
use app\helpers\Assets;
$theme_url=get_template_directory_uri();
$id=get_the_ID();
$page=get_page($id);
?>
<!DOCTYPE html>
<html>
<head>
	<?= wp_head() ?>
	<title>Maintenance</title>
</head>
<body>
<div class="container">
	<div style="margin-top: 150px;">
<?= $page->post_content; ?>
</div>
</div>
<?= wp_footer() ?>
</body>
</html>