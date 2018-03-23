<?php
require_once('config.php');
use app\helpers\Assets;
use app\models\General;
$general=new General;
?>
<!DOCTYPE html>
<html>
<head>
	<title>404 | Page Not Found</title>
	<?=wp_head()?>
</head>
<body>
<div class="container text-center" style="padding-top: 15%;">
	<img width="200" src="<?=$general->logoWeb()?>">
	<h1>404</h1>
	<h4>PAGE NOT FOUND</h4>
	<a onclick="javascript:window.history.back()" class="btn btn-danger">Back</a>
</div>
</body>
</html>