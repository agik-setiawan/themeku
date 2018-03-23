<?php
use app\helpers\Assets;
$theme_url=get_template_directory_uri();
$i=0;
?>
<?= get_template_part('partials/partial','head') ?>

<?=get_header()?>

<!--content-->
<?= get_template_part('partials/partial','landing_page') ?>
<!--<?= get_template_part('sample/content/about') ?>-->
<!--content-->

<!--post-->
<section>
<div id="posting_">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mx-auto">
				<h2 class="section-heading text-center">Artikel Terbaru</h2>
				<hr class="my-4">
				<div class="row aos-all">
					<?php
					$posts = get_posts( array( 'posts_per_page' => 9,'category_name'=>'blog' ) );
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
							<div class="">
								<div class="row">
									<div class="center-block">
										<a href="<?=get_permalink( $_post->ID )?>" title="<?=esc_attr( $_post->post_title )?>">
											<?=get_the_post_thumbnail( $_post->ID,'medium',['class'=>'img-responsive post-thumb'] )?>
										</a>
									</div>
								</div>
								<h4 align="left" class="post-thumb-title"><?=$_post->post_title ?></h4>
									<footer>
										<p class="post-thumb-author" align="left">Oleh: <?= get_the_author_meta('display_name',$_post->post_author ) ?></p>
									</footer>
								</div>
							</div>
							<?php }}?>
						</div>
					</div>
				</div>
			</div>
			</section>


			<?=get_footer() ?>
			<?= wp_footer() ?>
			<?= get_template_part('partials/partial','end') ?>