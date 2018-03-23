<?php
use app\helpers\Assets;
use app\models\General;
use app\models\Footer;
$footer=new Footer;
$general=new General;

$theme_url=get_template_directory_uri();
$id=get_the_ID();
$page=get_page($id);
$i=0;
?>
<footer id="footer">
  <div class="cp-footer">
    <div class="row">

      <div class="col-md-2">
        <div class="container-fluid">
        <div class="row">
        <div class=bg-white>
          <img width="150" src="<?=$general->logoWeb()?>">
        </div>
      </div>
      <br>
        <div class="row">
          <a href="#">
          <i class="media_social fa fa-facebook"></i>
        </a>
        </div>
        <div class="row">
          <a href="#" class="media_social">
          <i class="fa fa-linkedin"></i>
        </a>
        </div>
        <div class="row">
          <a href="#" class="media_social">
          <i class="fa fa-twitter"></i>
        </a>
        </div>
        <div class="row">
          <a href="#" class="media_social">
          <i class="fa fa-instagram"></i>
        </a>
        </div>
      </div>
    </div>

      <div class="col-md-4">
      <div class="row">
          <div class="footer-phone">
          <b>Artikel</b>
        </div>
        </div>
      <div class="row">
        <div class="col-md-12" style="margin-left:5px;">
            <div class="row aos-all">
          <?php
          $posts = get_posts( array('category_name'=>'blog' ) );
          
          foreach ( $posts as $_post ) {
            $i=$i+1;
            if($i==1){
              $aos='fade-up';
            }
            elseif($i==2){
              $aos='fade-down';
            }
            elseif($i==3){
              $aos='zoom-out-down';
            }
            elseif($i==4){
              $aos='flip-down';
            }
            elseif($i==5){
              $aos='flip-up';
            }
            elseif($i==6){
              $aos='fade-down';
            }
            elseif($i==7){
              $aos='fade-in';
            }
            elseif($i==8){
              $aos='fade-down';
            }
            elseif($i==9){
              $aos='fade-in';
            }
            if ( has_post_thumbnail( $_post->ID ) ) { ?>
            <div class="col-md-12">
              <div class="">
                <div class="row aos-item" data-aos="<?=$aos?>">
                  <div class="center-block">
                    <a href="<?=get_permalink( $_post->ID )?>" title="<?=esc_attr( $_post->post_title )?>">
                      <?=$_post->post_title ?>
                    </a>
                   <div class="over_line_100"></div>
                  </div>
                </div>
                </div>
              </div>
              <?php }}?>
            </div>
          </div>
      </div>
      </div>

      <div class="col-md-3">
        <div class="footer-phone">
          <b>Services</b>
        </div>
        <div class="row">
          <div class="col-md-12" style="margin-left:5px;">
            <div class="row aos-all">
          <?php
          $posts = get_posts( array('category_name'=>'services' ) );
          
          foreach ( $posts as $_post ) {
            $i=$i+1;
            if($i==1){
              $aos='fade-up';
            }
            elseif($i==2){
              $aos='fade-down';
            }
            elseif($i==3){
              $aos='zoom-out-down';
            }
            elseif($i==4){
              $aos='flip-down';
            }
            elseif($i==5){
              $aos='flip-up';
            }
            elseif($i==6){
              $aos='fade-down';
            }
            elseif($i==7){
              $aos='fade-in';
            }
            elseif($i==8){
              $aos='fade-down';
            }
            elseif($i==9){
              $aos='fade-in';
            }
            if ( has_post_thumbnail( $_post->ID ) ) { ?>
            <div class="col-md-12">
              <div class="">
                <div class="row aos-item" data-aos="<?=$aos?>">
                  <div class="center-block">
                    <a href="<?=get_permalink( $_post->ID )?>" title="<?=esc_attr( $_post->post_title )?>">
                      <i class="fa fa-pencil"> &nbsp;<?=$_post->post_title ?> </i>
                    </a>
                    <div class="over_line_100"></div>
                  </div>
                </div>
                </div>
              </div>
              <?php }}?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="footer-phone">
          <b class="text-center">Produk</b>
        </div>
        <div class="row">
          <div class="col-md-12" style="margin-left:5px;">
            <div class="row aos-all">
          <?php
          $posts = get_posts( array('category_name'=>'product' ) );
          
          foreach ( $posts as $_post ) {
            $i=$i+1;
            if($i==1){
              $aos='fade-up';
            }
            elseif($i==2){
              $aos='fade-down';
            }
            elseif($i==3){
              $aos='zoom-out-down';
            }
            elseif($i==4){
              $aos='flip-down';
            }
            elseif($i==5){
              $aos='flip-up';
            }
            elseif($i==6){
              $aos='fade-down';
            }
            elseif($i==7){
              $aos='fade-in';
            }
            elseif($i==8){
              $aos='fade-down';
            }
            elseif($i==9){
              $aos='fade-in';
            }
            if ( has_post_thumbnail( $_post->ID ) ) { ?>
            <div class="col-md-12">
              <div class="">
                <div class="row aos-item" data-aos="<?=$aos?>">
                  <div class="center-block">
                    <a href="<?=get_permalink( $_post->ID )?>" title="<?=esc_attr( $_post->post_title )?>">
                      <i class="fa fa-pencil"> &nbsp;<?=$_post->post_title ?> </i>
                    </a>
                    <div class="over_line_100"></div>
                  </div>
                </div>
                </div>
              </div>
              <?php }}?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="footer-copyright">
      <?=apply_filters('the_content',$footer->all_one('copyright'))?>
    </div>
  </div>

</footer>
