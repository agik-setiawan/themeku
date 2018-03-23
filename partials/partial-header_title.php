  <?php
use app\helpers\Assets;
use app\models\General;

$general=new General;
$theme_url=get_template_directory_uri();

$img_header=$general->all_one("background_lp_header");
if($img_header=="" || $img_header==null){
$img_header=$theme_url.'/assets/img/header.jpg';
}

$id=get_the_ID();
$page=get_page($id);
  ?>
  <header class="page_title text-center text-white d-flex">
    <div class="img_background_header_page" style="background-image: url('<?=$img_header?>');"></div>
    <div class="container page_title_content">
      <div class="row">
        <div class="col-lg-10 mx-auto">
         <h1 class="text-uppercase_ animated bounceInLeft">
          <?=strtoupper($page->post_title)?>
        </h1>
      </div>
    </div>
  </div>
</header>