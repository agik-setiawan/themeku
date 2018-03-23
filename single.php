<?php
require_once(__DIR__.'/config.php');
use app\helpers\Assets;
use app\models\General;

$general=new General;
$theme_url=get_template_directory_uri();

$img_header=$general->all_one("background_lp_header");
if($img_header=="" || $img_header==null){
$img_header=$theme_url.'/assets/img/header.jpg';
}

$id=get_the_ID();
$post=wp_get_single_post($id);
$commenter = wp_get_current_commenter();
?>
<?= get_template_part('partials/partial','head') ?>

<?=get_header()?>

<!--content-->
  <header class="page_title text-center text-white d-flex">
    <div class="img_background_header_page" style="background-image: url('<?=$img_header?>');"></div>
    <div class="container page_title_content">
      <div class="row">
        <div class="col-lg-10 mx-auto">
         <h1 class="text-uppercase_ animated bounceInLeft">
          <?=strtoupper($post->post_title)?>
        </h1>
      </div>
    </div>
  </div>
</header>

<div class="container ">
	<div class="pg"></div>
	<div class="row container-fluid">
		<div class="col-lg-8 post-detail-box">
		<ul class="breadcrumb post-detail-box">
			<li><a href="#">Artikel</a></li>
			<li><a href="#"> / <?=$post->post_title?></a></li>
		</ul>
	</div>
	</div>
	<br>
	<div class="row container-fluid">
		<div class="col-lg-8 post-detail-box">
			<div class="">
				<div class="container-fluid">
					<br>
					<div class="row">
						<div class="col-md-1">
							<?= get_avatar(1,50,null,null,['class'=>['img-responsive', 'img-circle']]) ?>
						</div>
						<div class="col-md-10">
							<div class="row">
								<b class="post-detail-author" align="left">
									<?= get_the_author_meta('display_name',$post->post_author ) ?>
								</b>
							</div>
							<div class="row">
								<p class="post-date-detail">
									<?= date('M d, Y',strtotime($post->post_date)) ?>
								</p>
							</div>
						</div>
					</div>

					<br>

					<div class="row">
						<div class="col-lg-12 mx-auto">
							<h4 class="section-heading post-title-detail"><?=$post->post_title?></h4>
							<?=$post->post_content?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--<div class="col-lg-4">
			<div class="post-detail-box-r">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 mx-auto">
							
							<p>
								Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>-->
	</div>
	<br>
	<div class="row container-fluid">
		<div class="col-lg-8 post-detail-box">

			<form id="commentform" method="post" action="<?= get_home_url().'/wp-comments-post.php' ?>" role="form">
				<input type='hidden' name='comment_post_ID' value='<?=$post->ID?>' id='comment_post_ID' />

				<div class="messages"></div>

				<div class="controls">

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="form_name">Name *</label>
								<input id="author" name="author" type="text" class="form-control" placeholder="Please enter your Name *" required="required" data-error="Firstname is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="form_email">Email *</label>
								<input id="email" name="email" type="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="form_phone">Website</label>
								<input id="url" name="url" type="text" class="form-control" placeholder="Please enter your Website">
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="form_message">Comment *</label>
								<textarea id="comment" name="comment" class="form-control" placeholder="Comment" rows="4" required="required" data-error="Please,leave us a message."></textarea>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-12">
							<input type="submit" class="btn btn-success btn-send" value="Send message">
						</div>
					</div>
					<br>

				</div>

			</form>

		</div><!-- /.8 -->
	</div>
</div>
<!--content-->

<br>
<br>

<?= get_footer() ?>
<?= wp_footer() ?>
<?= get_template_part('partials/partial','end') ?>