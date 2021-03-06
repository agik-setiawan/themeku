<?php
/*
Template Name: Page-Portfolio
*/
?>
<?php
use app\helpers\Assets;
$theme_url=get_template_directory_uri();
$id=get_the_ID();
$page=get_page($id);
$i=0;
?>
<?= get_template_part('partials/partial','head') ?>

<?=get_header()?>
<?=get_template_part('partials/partial','header_title') ?>

<!--content-->
<section>
<div id="posting_">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mx-auto">
				<!--<h2 class="section-heading text-center">Produk</h2>
				<hr class="my-4">-->
				<div class="row aos-all">
					<?php
					$posts = get_posts( array('category_name'=>'portfolio' ) );
					
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
						<div class="col-md-4 aos-item" data-aos="<?=$aos?>">
							<div class="card">
								<div class="card-header">
									<h6 class="card-title"><b><?=$_post->post_title ?></b></h6>
								</div>
								<?=get_the_post_thumbnail( $_post->ID,'medium',['class'=>'card-img-top'] )?>
								<div class="card-body text-center">
									<a href="<?=get_permalink( $_post->ID )?>" class="btn btn-primary">Lihat Detail</a>
								</div>
							</div>
						</div>
							<?php }}?>
						</div>
					</div>
				</div>
			</div>
			</section>
<!--content-->


<?=get_footer() ?>
<?= wp_footer() ?>
<?= get_template_part('partials/partial','end') ?>