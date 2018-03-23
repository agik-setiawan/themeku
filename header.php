<?php
require_once(__DIR__.'/config.php');
use app\helpers\Assets;
use app\models\General;
$general=new General;
$theme_url=get_template_directory_uri();
global $wp;
$current_url=home_url($wp->request.'/');

$menu_location=get_nav_menu_locations();
$menu_id=$menu_location['primary'];
$primarynav=wp_get_nav_menu_items($menu_id);

$logoWeb=$general->logoWeb();
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="<?=get_home_url()?>">
      <img width="180" src="<?=$logoWeb?>">
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <?php if($primarynav){ foreach ($primarynav as $navItem) { ?>
         <li class="nav-item <?=$navItem->url==$current_url?'active':''?>">
          <a class="nav-link js-scroll-trigger" href="<?= $navItem->url; ?>">
            <?= $navItem->title; ?>
            </a>
        </li>
        <?php }}?>
      </ul>
    </div>
  </div>
</nav>