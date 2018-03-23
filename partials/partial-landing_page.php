  <?php
use app\helpers\Assets;
use app\models\General;
$general=new General;
$theme_url=get_template_directory_uri();

$img_header=$general->all_one("background_lp_header");
if($img_header=="" || $img_header==null){
$img_header=$theme_url.'/assets/img/header.jpg';
}
  ?>
  <header class="masthead text-center text-white d-flex">
    <img class="img_background_header" src="<?=$img_header?>">
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-10 mx-auto">
         <h1 class="text-uppercase- animated bounceInLeft">
          <strong><?=$general->all_one('moto1')?></strong>
        </h1>
        <h1 class="text-uppercase-">
          <!--<strong>Think Fast - Think Smart</strong>-->
        </h1>
        <hr>
      </div>
      <div class="col-lg-8 mx-auto">
        <p class="text-faded mb-5 animated bounceInRight"><?=$general->all_one('moto2')?></p>
        <!--<a class="js-scroll-trigger" href="#">
          <img class="img-responsive" width="350" src="<?=Assets::img($theme_url,'kreasisoft-white.png')?>">
        </a>-->
        <a class="btn btn-success btn-xl animated bounceInDown" href="#about">Find More</a>
      </div>
    </div>
  </div>
</header>