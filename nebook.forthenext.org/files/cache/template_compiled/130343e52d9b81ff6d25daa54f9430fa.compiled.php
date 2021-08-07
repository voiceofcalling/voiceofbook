<?php if(!defined("__XE__"))exit;
$__Context->oldIE = 0 ?>
<?php  $__Context->browser_type = getenv("HTTP_USER_AGENT") ?>
<?php if(preg_match("/MSIE 8.0/",$__Context->browser_type)){ ?>
<?php  $__Context->IE='8'; $__Context->oldIE=1 ?>
<?php }else if(preg_match("/MSIE 7.0/",$__Context->browser_type)){ ?>
<?php  $__Context->IE='7'; $__Context->oldIE=1 ?>
<?php }else if(preg_match("/MSIE 6.0/",$__Context->browser_type)){ ?>
<?php  $__Context->IE='6'; $__Context->oldIE=1 ?>
<?php } ?>
<?php  $__Context->hide_visual_actions = false ?>
<?php if($__Context->act == 'IS'){;
$__Context->hide_visual_actions = true;
} ?>
<?php if(strpos($__Context->act, 'Member') !== false ){;
$__Context->hide_visual_actions = true;
} ?>
<?php if(strpos($__Context->act, 'Communication') !== false){;
$__Context->hide_visual_actions = true;
} ?>
<?php  $__Context->layout_type = 'sub' ?>
<?php if(!$__Context->hide_visual_actions && $__Context->site_module_info->module_srl === $__Context->current_module_info->module_srl){ ?>
<?php  $__Context->layout_type = 'main' ?>
<?php } ?>
<?php if(Context::get('act') == 'dispMemberSignUpForm' || Context::get('act') == 'dispMemberInfo'){ ?>
<?php  $__Context->layout_type = 'sub' ?>
<?php } ?>
  
<!-- CSS -->
<!--#Meta:layouts/freelancer/css/bootstrap.css--><?php $__tmp=array('layouts/freelancer/css/bootstrap.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/freelancer/css/bootstrap.min.css--><?php $__tmp=array('layouts/freelancer/css/bootstrap.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:common/xeicon/xeicon.min.css--><?php $__tmp=array('common/xeicon/xeicon.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/freelancer/css/freelancer.css--><?php $__tmp=array('layouts/freelancer/css/freelancer.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
 
<!-- JS -->
<!--#Meta:layouts/freelancer/js/jquery.js--><?php $__tmp=array('layouts/freelancer/js/jquery.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/freelancer/js/bootstrap.min.js--><?php $__tmp=array('layouts/freelancer/js/bootstrap.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js--><?php $__tmp=array('http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:https://cdn.jsdelivr.net/classlist/2014.01.31/classList.min.js--><?php $__tmp=array('https://cdn.jsdelivr.net/classlist/2014.01.31/classList.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/freelancer/js/freelancer.js--><?php $__tmp=array('layouts/freelancer/js/freelancer.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/freelancer/js/jqBootstrapValidation.js--><?php $__tmp=array('layouts/freelancer/js/jqBootstrapValidation.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
 
<!-- FONT -->
<!--#Meta:layouts/freelancer/font-awesome/css/font-awesome.min.css--><?php $__tmp=array('layouts/freelancer/font-awesome/css/font-awesome.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php  ?>
<?php  ?>
<!-- container -->
 
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#page-top"><?php echo $__Context->module_info->browser_title ?></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="hidden">
					<a href="#page-top"></a>
				</li>
				<li class="page-scroll">
					<?php if($__Context->layout_info->portfolio_title){ ?>
					<a href="#portfolio"><?php echo $__Context->layout_info->portfolio_title ?></a>
					<?php }else{ ?>
					<a href="#portfolio">Portfolio</a>
					<?php } ?>
				</li>
				<li class="page-scroll">
					<?php if($__Context->layout_info->about_title){ ?>
					<a href="#about"><?php echo $__Context->layout_info->about_title ?></a>
					<?php }else{ ?>
					<a href="#about">About</a>
					<?php } ?>
				</li>
				<li class="page-scroll">
					<a href="#contact">Contact</a>
				</li>
				<li class="page-scroll"><!-- login -->
					<!-- [D] 로그인 in, 로그아웃 out 클래스 추가 -->
					<?php if(!$__Context->is_logged){ ?>
					<!-- begin_login -->
					<div class="log_area out" style="padding:19.5px 0 19.5px 15px">
							<span class="log_lst1"><a href="<?php echo getUrl('act','dispMemberLoginForm') ?>" id="ly_login_btn"class="log_btn"><i class="xi-user"></i><span class="bg_ft_bubble">login</span></a></span>
					</div>
					<?php }else{ ?>
					<!-- after_login -->
					<div class="log_area in" style="padding-top:19.5px;padding-bottom:19.5px;">
						<ul style="padding-left:15px">
							<li class="log_lst1"><a href="<?php echo getUrl('act','dispMemberLogout') ?>" class="log_btn ex_log"><i class="xi-user-add"></i><span class="bg_ft_bubble">logout</span></a></li>
							<?php if($__Context->logged_info->is_admin == 'Y'){ ?><li class="log_lst4"><a href="<?php echo getUrl('', 'module','admin') ?>" class="log_btn"><i class="xi-command"></i><span class="bg_ft_bubble">setting</span></a></li><?php } ?>
						</ul>
					</div>
					<?php } ?>
					<!-- //login -->
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>
<?php if($__Context->layout_type == 'main'){ ?>
<!-- Header -->
<header id="page-top">
	<div class="container">
		<!-- //gnb -->
		
		<div class="row">
			<div class="col-lg-12">
				<a href="<?php echo $__Context->layout_info->profile_url ?>">
					<?php if($__Context->layout_info->profile){ ?>
					<img src="<?php echo $__Context->layout_info->profile ?>" alt="<?php echo $__Context->layout_info->profile_title ?>" class="img-responsive"/>
					<?php }else{ ?>
					<img src="/layouts/freelancer/img/profile.png" width="256" height="256" alt="<?php echo $__Context->layout_info->profile_title ?>" class="img-responsive">
					<?php } ?>
				</a>
			
				<div class="intro-text">
					<span class="name"><?php echo $__Context->module_info->browser_title ?></span>
					<hr class="star-light">
					<span class="skills"><?php echo $__Context->layout_info->profile_oneline ?></span>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Portfolio Grid Section -->
<section id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<?php if($__Context->layout_info->portfolio_title){ ?>
				<h2><?php echo $__Context->layout_info->portfolio_title ?></h2>
				<?php }else{ ?>
				<h2>Portfolio</h2>
				<?php } ?>
				<hr class="star-primary">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 portfolio-item">
				<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
					<div class="caption">
						<div class="caption-content">
							<i class="fa fa-search-plus fa-3x"></i>
						</div>
					</div>
					<?php if($__Context->layout_info->portfolio_simg1_small){ ?>
					<img src="/layouts/freelancer/$layout_info->portfolio_simg1_small" class="img-responsive" alt="">
					<?php }else{ ?>
					<img src="/layouts/freelancer/img/portfolio/cabin.png" class="img-responsive" alt="">
					<?php } ?>
				</a>
			</div>
			<?php if($__Context->layout_info->portfolio_img2_title){ ?><div class="col-sm-4 portfolio-item">
				<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
					<div class="caption">
						<div class="caption-content">
							<i class="fa fa-search-plus fa-3x"></i>
						</div>
					</div>
					<?php if($__Context->layout_info->portfolio_simg2_small){ ?>
					<img src="/layouts/freelancer/$layout_info->portfolio_simg2_small" class="img-responsive" alt="">
					<?php }else{ ?>
					<img src="/layouts/freelancer/img/portfolio/cake.png" class="img-responsive" alt="">
					<?php } ?>
				</a>
			</div><?php } ?>
			<?php if($__Context->layout_info->portfolio_img3_title){ ?><div class="col-sm-4 portfolio-item">
				<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
					<div class="caption">
						<div class="caption-content">
							<i class="fa fa-search-plus fa-3x"></i>
						</div>
					</div>
					<?php if($__Context->layout_info->portfolio_simg3_small){ ?>
					<img src="/layouts/freelancer/$layout_info->portfolio_simg3_small" class="img-responsive" alt="">
					<?php }else{ ?>
					<img src="/layouts/freelancer/img/portfolio/circus.png" class="img-responsive" alt="">
					<?php } ?>
				</a>
			</div><?php } ?>
			<?php if($__Context->layout_info->portfolio_img4_title){ ?><div class="col-sm-4 portfolio-item">
				<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
					<div class="caption">
						<div class="caption-content">
							<i class="fa fa-search-plus fa-3x"></i>
						</div>
					</div>
					<?php if($__Context->layout_info->portfolio_simg4_small){ ?>
					<img src="/layouts/freelancer/$layout_info->portfolio_simg4_small" class="img-responsive" alt="">
					<?php }else{ ?>
					<img src="/layouts/freelancer/img/portfolio/game.png" class="img-responsive" alt="">
					<?php } ?>
				</a>
			</div><?php } ?>
			<?php if($__Context->layout_info->portfolio_img5_title){ ?><div class="col-sm-4 portfolio-item">
				<a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
					<div class="caption">
						<div class="caption-content">
							<i class="fa fa-search-plus fa-3x"></i>
						</div>
					</div>
					<?php if($__Context->layout_info->portfolio_simg5_small){ ?>
					<img src="/layouts/freelancer/$layout_info->portfolio_simg5_small" class="img-responsive" alt="">
					<?php }else{ ?>
					<img src="/layouts/freelancer/img/portfolio/safe.png" class="img-responsive" alt="">
					<?php } ?>
				</a>
			</div><?php } ?>
			<?php if($__Context->layout_info->portfolio_img6_title){ ?><div class="col-sm-4 portfolio-item">
				<a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
					<div class="caption">
						<div class="caption-content">
							<i class="fa fa-search-plus fa-3x"></i>
						</div>
					</div>
					<?php if($__Context->layout_info->portfolio_simg6_small){ ?>
					<img src="/layouts/freelancer/$layout_info->portfolio_simg6_small" class="img-responsive" alt="">
					<?php }else{ ?>
					<img src="/layouts/freelancer/img/portfolio/submarine.png" class="img-responsive" alt="">
					<?php } ?>
				</a>
			</div><?php } ?>
		</div>
	</div>
</section>
<!-- About Section -->
<section class="success" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<?php if($__Context->layout_info->about_title){ ?>
				<h2><?php echo $__Context->layout_info->about_title ?></h2>
				<?php }else{ ?>
				<h2>About</h2>
				<?php } ?>
				<hr class="star-light">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-lg-offset-2">
				<?php if($__Context->layout_info->portfolio_about_left_text){ ?>
				<p><?php echo $__Context->layout_info->portfolio_about_left_text ?></p>
				<?php }else{ ?>
				<p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
				<?php } ?>
				
			</div>
			<div class="col-lg-4">
				<?php if($__Context->layout_info->portfolio_about_right_text){ ?>
				<p><?php echo $__Context->layout_info->portfolio_about_right_text ?></p>
				<?php }else{ ?>
				<p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
				<?php } ?>
				
			</div>
			<?php if($__Context->layout_info->portfolio_download_theme){ ?><div class="col-lg-8 col-lg-offset-2 text-center">
				<a href="#" class="btn btn-lg btn-outline">
					<i class="fa fa-download"></i> 
					<?php if($__Context->layout_info->portfolio_download_theme){ ?>
					<?php echo $__Context->layout_info->portfolio_download_theme ?>
					<?php }else{ ?>
					Download Theme
					<?php } ?>
				</a>
			</div><?php } ?>
		</div>
	</div>
</section>
<?php echo $__Context->content ?>
<?php }else{ ?>
<div class="sub_page">
<?php echo $__Context->content ?>
</div>
<?php } ?>
<!-- Footer -->
<footer class="text-center">
	<div class="footer-above">
		<div class="container">
			<div class="row">
				<div class="footer-col col-md-4">
					<h3>Location</h3>
					<p><?php echo $__Context->layout_info->company_address ?></p>
				</div>
				<div class="footer-col col-md-4">
					<h3>Around the Web</h3>
					<ul class="list-inline">
						<li>
							<?php if($__Context->layout_info->sns_link1){ ?><a href="<?php echo $__Context->layout_info->sns_link1 ?>" class="btn-social btn-outline"><i class="fa fa-fw <?php echo $__Context->layout_info->sns_link_i1 ?>"></i></a><?php } ?>
						</li>
						<li>
							<?php if($__Context->layout_info->sns_link2){ ?><a href="<?php echo $__Context->layout_info->sns_link2 ?>" class="btn-social btn-outline"><i class="fa fa-fw <?php echo $__Context->layout_info->sns_link_i2 ?>"></i></a><?php } ?>
						</li>
						<li>
							<?php if($__Context->layout_info->sns_link3){ ?><a href="<?php echo $__Context->layout_info->sns_link3 ?>" class="btn-social btn-outline"><i class="fa fa-fw <?php echo $__Context->layout_info->sns_link_i3 ?>"></i></a><?php } ?>
						</li>
						<li>
							<?php if($__Context->layout_info->sns_link4){ ?><a href="<?php echo $__Context->layout_info->sns_link4 ?>" class="btn-social btn-outline"><i class="fa fa-fw <?php echo $__Context->layout_info->sns_link_i4 ?>"></i></a><?php } ?>
						</li>
						<li>
							<?php if($__Context->layout_info->sns_link5){ ?><a href="<?php echo $__Context->layout_info->sns_link5 ?>" class="btn-social btn-outline"><i class="fa fa-fw <?php echo $__Context->layout_info->sns_link_i5 ?>"></i></a><?php } ?>
						</li>
					</ul>
				</div>
				<div class="footer-col col-md-4">
					<h3><?php echo $__Context->layout_info->about_me_tit ?></h3>
					<p><?php echo $__Context->layout_info->about_me ?></p>
				</div>
			</div>
		</div>
	</div>
	<?php if($__Context->layout_info->copyright){ ?><div class="footer-below">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php echo $__Context->layout_info->copyright ?>
				</div>
			</div>
		</div>
	</div><?php } ?>
</footer>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visible-sm">
	<a class="btn btn-primary" href="#page-top">
		<i class="fa fa-chevron-up"></i>
	</a>
</div>
<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<?php if($__Context->layout_info->portfolio_img1_title){ ?>
						<h2><?php echo $__Context->layout_info->portfolio_img1_title ?></h2>
						<?php }else{ ?>
						<h2>Project Title</h2>
						<?php } ?>
						
						<hr class="star-primary">
						<?php if($__Context->layout_info->portfolio_img1_big){ ?>
						<img src="/layouts/freelancer/$layout_info->portfolio_img1_big" class="img-responsive img-centered" alt="">
						<?php }else{ ?>
						<img src="/layouts/freelancer/img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
						<?php } ?>
						
						<?php if($__Context->layout_info->portfolio_img1_text){ ?>
						<p><?php echo $__Context->layout_info->portfolio_img1_text ?></p>
						<?php }else{ ?>
						<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
						<?php } ?>
						
						<button type="button" class="btn btn-default item-details" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<?php if($__Context->layout_info->portfolio_img2_title){ ?>
						<h2><?php echo $__Context->layout_info->portfolio_img2_title ?></h2>
						<?php }else{ ?>
						<h2>Project Title</h2>
						<?php } ?>
						<hr class="star-primary">
						<?php if($__Context->layout_info->portfolio_img2_big){ ?>
						<img src="/layouts/freelancer/$layout_info->portfolio_img2_big" class="img-responsive img-centered" alt="">
						<?php }else{ ?>
						<img src="/layouts/freelancer/img/portfolio/cake.png" class="img-responsive img-centered" alt="">
						<?php } ?>
						<?php if($__Context->layout_info->portfolio_img2_text){ ?>
						<p><?php echo $__Context->layout_info->portfolio_img2_text ?></p>
						<?php }else{ ?>
						<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
						<?php } ?>
						<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<?php if($__Context->layout_info->portfolio_img3_title){ ?>
						<h2><?php echo $__Context->layout_info->portfolio_img3_title ?></h2>
						<?php }else{ ?>
						<h2>Project Title</h2>
						<?php } ?>
						<hr class="star-primary">
						<?php if($__Context->layout_info->portfolio_img3_big){ ?>
						<img src="/layouts/freelancer/$layout_info->portfolio_img3_big" class="img-responsive img-centered" alt="">
						<?php }else{ ?>
						<img src="/layouts/freelancer/img/portfolio/circus.png" class="img-responsive img-centered" alt="">
						<?php } ?>
						<?php if($__Context->layout_info->portfolio_img3_text){ ?>
						<p><?php echo $__Context->layout_info->portfolio_img3_text ?></p>
						<?php }else{ ?>
						<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
						<?php } ?>
						<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<?php if($__Context->layout_info->portfolio_img4_title){ ?>
						<h2><?php echo $__Context->layout_info->portfolio_img4_title ?></h2>
						<?php }else{ ?>
						<h2>Project Title</h2>
						<?php } ?>
						<hr class="star-primary">
						<?php if($__Context->layout_info->portfolio_img4_big){ ?>
						<img src="/layouts/freelancer/$layout_info->portfolio_img4_big" class="img-responsive img-centered" alt="">
						<?php }else{ ?>
						<img src="/layouts/freelancer/img/portfolio/game.png" class="img-responsive img-centered" alt="">
						<?php } ?>
						<?php if($__Context->layout_info->portfolio_img4_text){ ?>
						<p><?php echo $__Context->layout_info->portfolio_img4_text ?></p>
						<?php }else{ ?>
						<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
						<?php } ?>
						<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<?php if($__Context->layout_info->portfolio_img5_title){ ?>
						<h2><?php echo $__Context->layout_info->portfolio_img5_title ?></h2>
						<?php }else{ ?>
						<h2>Project Title</h2>
						<?php } ?>
						<hr class="star-primary">
						<?php if($__Context->layout_info->portfolio_img5_big){ ?>
						<img src="/layouts/freelancer/$layout_info->portfolio_img5_big" class="img-responsive img-centered" alt="">
						<?php }else{ ?>
						<img src="/layouts/freelancer/img/portfolio/safe.png" class="img-responsive img-centered" alt="">
						<?php } ?>
						<?php if($__Context->layout_info->portfolio_img5_text){ ?>
						<p><?php echo $__Context->layout_info->portfolio_img5_text ?></p>
						<?php }else{ ?>
						<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
						<?php } ?>
						<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<?php if($__Context->layout_info->portfolio_img6_title){ ?>
						<h2><?php echo $__Context->layout_info->portfolio_img6_title ?></h2>
						<?php }else{ ?>
						<h2>Project Title</h2>
						<?php } ?>
						<hr class="star-primary">
						<?php if($__Context->layout_info->portfolio_img6_big){ ?>
						<img src="/layouts/freelancer/$layout_info->portfolio_img6_big" class="img-responsive img-centered" alt="">
						<?php }else{ ?>
						<img src="/layouts/freelancer/img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
						<?php } ?>
						<?php if($__Context->layout_info->portfolio_img6_text){ ?>
						<p><?php echo $__Context->layout_info->portfolio_img6_text ?></p>
						<?php }else{ ?>
						<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
						<?php } ?>
						<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Login widget -->
<section class="login_widget"<?php if($__Context->XE_VALIDATOR_ID != 'layouts/xedition/layout/1' || !$__Context->XE_VALIDATOR_MESSAGE){ ?> style="display:none"<?php } ?>>
	<!--#Meta:layouts/freelancer/css/widget.login.css--><?php $__tmp=array('layouts/freelancer/css/widget.login.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	<div class="ly_dimmed"></div>
	<div class="signin">
		<div class="login-header">
			<h1>LOGIN</h1>
		</div>
		<div class="login-body">
			<form action="<?php echo getUrl() ?>" method="post" autocomplete="off"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<input type="hidden" name="act" value="procMemberLogin" />
				<input type="hidden" name="success_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', FALSE) ?>" />
				<input type="hidden" name="xe_validator_id" value="layouts/xedition/layout/1" />
				<fieldset>
					<legend class="blind"><?php echo $__Context->lang->cmd_login ?></legend>
					<div class="control-group">
						<div class="group">
							<input type="text" name="user_id" id="uemail" required="true" />
							<span class="highlight"></span>
							<span class="bar"></span>
							<label class="info_label" for="uemail"><?php echo $__Context->lang->user_id ?></label>
						</div>
						<div class="group">
							<input type="password" name="password" id="upw" required="true" />
							<span class="highlight"></span>
							<span class="bar"></span>
							<label class="info_label" for="upw"><?php echo $__Context->lang->password ?></label>
						</div>
					</div>
					<?php if($__Context->XE_VALIDATOR_ID == 'layouts/xedition/layout/1' && $__Context->XE_VALIDATOR_MESSAGE){ ?><div class="control-group">
						<p class="error"><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
					</div><?php } ?>
					<div class="control-group">
						<label class="chk_label" for="keepid_opt">
							<input type="checkbox" name="keep_signed" id="keepid_opt" value="Y" />
							<span class="checkbox"></span> <?php echo $__Context->lang->keep_signed ?>
						</label>
						<div id="warning">
							<p><?php echo str_replace('\n\n', '<br />', $__Context->lang->about_keep_signed) ?></p>
							<div class="edge"></div>
						</div>
						<button type="submit" class="btn_submit"><?php echo $__Context->lang->cmd_login ?></button>
					</div>
				</fieldset>
			</form>
		</div>
		<div class="login-footer">
		</div>
		<a href="#" class="btn_ly_popup"><span class="blind">닫기</span></a>
	</div>
	<script>
		jQuery(function ($) {
			var keep_msg = $("#warning");
			$(".chk_label").on("mouseenter mouseleave focusin focusout", function (e) {
				if(e.type == "mouseenter" || e.type == "focusin") {
					keep_msg.show();
				}
				else {
					keep_msg.hide();
				}
			});
			$("#ly_login_btn, #ly_btn").click(function () {
				$(".login_widget").show();
				return false;
			});
			$(".btn_ly_popup").click(function () {
				$(".login_widget").hide();
				return false;
			});
			$("input").blur(function () {
				var $this = $(this);
				if ($this.val()) {
					$this.addClass("used");
				}
				else {
					$this.removeClass("used");
				}
			});
		});
	</script>
</section>
<!-- /Login widget -->
