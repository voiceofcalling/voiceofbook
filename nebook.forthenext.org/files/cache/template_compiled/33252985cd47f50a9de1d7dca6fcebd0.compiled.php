<?php if(!defined("__XE__"))exit;?>
<?php if(!$__Context->layout_info->slide_height){;
$__Context->layout_info->slide_height = "380";
} ?>
<?php if(!$__Context->layout_info->slide_speed){;
$__Context->layout_info->slide_speed = "7000";
} ?>
<?php if($__Context->layout_info->slide_img2){ ?>
<!--#Meta:layouts/Door_cpA_limit/css/camera.css--><?php $__tmp=array('layouts/Door_cpA_limit/css/camera.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Door_cpA_limit/css/camera_repare.css--><?php $__tmp=array('layouts/Door_cpA_limit/css/camera_repare.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Door_cpA_limit/js/jquery.easing.1.3.js--><?php $__tmp=array('layouts/Door_cpA_limit/js/jquery.easing.1.3.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Door_cpA_limit/js/camera.min.js--><?php $__tmp=array('layouts/Door_cpA_limit/js/camera.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<style type="text/css">
/* 메인 슬라이드 */
.WSlide{width:100%;max-width:1920px;margin:0 auto;z-index:4;position:relative;overflow:hidden;height:<?php echo $__Context->layout_info->slide_height ?>px;}
.wrap_slides{position:absolute;z-index:1;width:1920px !important; left:50%;margin-left:-960px;text-align:center;height:<?php echo $__Context->layout_info->slide_height ?>px}
</style>
	<!-- 메인 슬라이드 -->
<div class="WSlide">
	<?php if($__Context->layout_info->slide_img2){ ?><div class="wrap_slides">
		<div class="camera_wrap camera_emboss" id="camera_wrap">
			<?php if($__Context->layout_info->slide_img1){ ?>
			<div data-src="<?php echo $__Context->layout_info->slide_img1 ?>" title="<?php echo $__Context->layout_info->slide_title1 ?>" />
				<div class="caption">
					<h2 class="<?php echo $__Context->layout_info->slide_imgB_p1 ?>"><img src="<?php echo $__Context->layout_info->slide_imgB1 ?>" alt="<?php echo $__Context->layout_info->slide_title1 ?>" /></h2>
					<p class="<?php echo $__Context->layout_info->slide_imgP_p1 ?>">
						<img src="<?php echo $__Context->layout_info->slide_imgP1 ?>" alt="" />
						<?php if($__Context->layout_info->slide_url1){ ?><a class="view_more" href="<?php echo $__Context->layout_info->slide_url1 ?>">view more</a><?php } ?>
					</p>
				</div>
			</div>
			<?php } ?>
			
			<?php if($__Context->layout_info->slide_img2){ ?>
			<div data-src="<?php echo $__Context->layout_info->slide_img2 ?>" title="<?php echo $__Context->layout_info->slide_title2 ?>" />
				<div class="caption caption2">
					<h2 class="<?php echo $__Context->layout_info->slide_imgB_p2 ?>"><img src="<?php echo $__Context->layout_info->slide_imgB2 ?>" alt="<?php echo $__Context->layout_info->slide_title2 ?>" /></h2>
					<p class="<?php echo $__Context->layout_info->slide_imgP_p2 ?>">
						<img src="<?php echo $__Context->layout_info->slide_imgP2 ?>" alt="" />
						<?php if($__Context->layout_info->slide_url2){ ?><a class="view_more" href="<?php echo $__Context->layout_info->slide_url2 ?>">view more</a><?php } ?>
					</p>
				</div>
			</div>
			<?php } ?>
			<?php if($__Context->layout_info->slide_img3){ ?>
			<div data-src="<?php echo $__Context->layout_info->slide_img3 ?>" title="<?php echo $__Context->layout_info->slide_title3 ?>" />
				<div class="caption">
					<h2 class="<?php echo $__Context->layout_info->slide_imgB_p3 ?>"><img src="<?php echo $__Context->layout_info->slide_imgB3 ?>" alt="<?php echo $__Context->layout_info->slide_title3 ?>" /></h2>
					<p class="<?php echo $__Context->layout_info->slide_imgP_p3 ?>">
						<img src="<?php echo $__Context->layout_info->slide_imgP3 ?>" alt="" />
						<?php if($__Context->layout_info->slide_url3){ ?><a class="view_more" href="<?php echo $__Context->layout_info->slide_url3 ?>">view more</a><?php } ?>
					</p>
				</div>
			</div>
			<?php } ?>
			<?php if($__Context->layout_info->slide_img4){ ?>
			<div data-src="<?php echo $__Context->layout_info->slide_img4 ?>" title="<?php echo $__Context->layout_info->slide_title4 ?>" />
				<div class="caption">
					<h2 class="<?php echo $__Context->layout_info->slide_imgB_p4 ?>"><img src="<?php echo $__Context->layout_info->slide_imgB4 ?>" alt="<?php echo $__Context->layout_info->slide_title4 ?>" /></h2>
					<p class="<?php echo $__Context->layout_info->slide_imgP_p4 ?>">
						<img src="<?php echo $__Context->layout_info->slide_imgP4 ?>" alt="" />
						<?php if($__Context->layout_info->slide_url4){ ?><a class="view_more" href="<?php echo $__Context->layout_info->slide_url4 ?>">view more</a><?php } ?>
					</p>
				</div>
			</div>
			<?php } ?>
			<?php if($__Context->layout_info->slide_img5){ ?>
			<div data-src="<?php echo $__Context->layout_info->slide_img5 ?>" title="<?php echo $__Context->layout_info->slide_title5 ?>" />
				<div class="caption">
					<h2 class="<?php echo $__Context->layout_info->slide_imgB_p5 ?>"><img src="<?php echo $__Context->layout_info->slide_imgB5 ?>" alt="<?php echo $__Context->layout_info->slide_title5 ?>" /></h2>
					<p class="<?php echo $__Context->layout_info->slide_imgP_p5 ?>">
						<img src="<?php echo $__Context->layout_info->slide_imgP5 ?>" alt="" />
						<?php if($__Context->layout_info->slide_url5){ ?><a class="view_more" href="<?php echo $__Context->layout_info->slide_url5 ?>">view more</a><?php } ?>
					</p>
				</div>
			</div>
			<?php } ?>
		</div>
		<script>
			jQuery(function(){
				jQuery('#camera_wrap').camera({
					height: '<?php echo $__Context->layout_info->slide_height ?>',
					loader: false,
					pagination: true,
					thumbnails: false,
					hover: false,
					cols: 9,
					overlayer: false,
					fx: <?php if($__Context->layout_info->main_slide=='B'){ ?>'mosaic'<?php };
if($__Context->layout_info->main_slide=='A'){ ?>'simpleFade'<?php } ?>,
					time: <?php echo $__Context->layout_info->slide_speed ?>,
					opacityOnGrid: true
				});
			});
		</script>
	</div><?php } ?>
	
</div>
