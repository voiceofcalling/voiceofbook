<?php if(!defined("__XE__"))exit;
echo Context::addHtmlHeader('<meta name="viewport" content="width=device-width, user-scalable=yes">') ?>
<!--#Meta:common/xeicon/xeicon.min.css--><?php $__tmp=array('common/xeicon/xeicon.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Door_cpA_limit/js/xe_official.js--><?php $__tmp=array('layouts/Door_cpA_limit/js/xe_official.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Door_cpA_limit/js/scroll.js--><?php $__tmp=array('layouts/Door_cpA_limit/js/scroll.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Door_cpA_limit/css/default.css--><?php $__tmp=array('layouts/Door_cpA_limit/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Door_cpA_limit/js/jquery.scrollUp.min.js--><?php $__tmp=array('layouts/Door_cpA_limit/js/jquery.scrollUp.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(Mobile::isMobileCheckByAgent()){ ?>
   <?php if(file_exists('./common/js/jquery.min.js')){ ?>
   <?php  Context::addJsFile("./common/js/jquery.min.js", true, '', -10000011)  ?>
   <?php }elseif(file_exists('./common/js/jquery.js')){ ?>
   <?php  Context::addJsFile("./common/js/jquery.js", true, '', -10000011)  ?>
   <?php } ?>
<?php } ?>
<!--#Meta:layouts/Door_cpA_limit/css/owl.carousel.css--><?php $__tmp=array('layouts/Door_cpA_limit/css/owl.carousel.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Door_cpA_limit/js/owl.carousel.min.js--><?php $__tmp=array('layouts/Door_cpA_limit/js/owl.carousel.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<style>
<?php if($__Context->layout_info->layout_color){ ?>
<?php if($__Context->layout_info->layout_color=='Red'){ ?>
<?php  $__Context->layout_info->point_color = "#C62828" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Pink'){ ?>
<?php  $__Context->layout_info->point_color = "#E91E63" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Purple'){ ?>
<?php  $__Context->layout_info->point_color = "#9C27B0" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='DeepPurple'){ ?>
<?php  $__Context->layout_info->point_color = "#673AB7" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Indigo'){ ?>
<?php  $__Context->layout_info->point_color = "#3F51B5" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Blue'){ ?>
<?php  $__Context->layout_info->point_color = "#1E88E5" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='LightBlue'){ ?>
<?php  $__Context->layout_info->point_color = "#039BE5" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Cyan'){ ?>
<?php  $__Context->layout_info->point_color = "#00ACC1" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Teal'){ ?>
<?php  $__Context->layout_info->point_color = "#009688" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Green'){ ?>
<?php  $__Context->layout_info->point_color = "#4CAF50" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='LightGreen'){ ?>
<?php  $__Context->layout_info->point_color = "#7CB342" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Amber'){ ?>
<?php  $__Context->layout_info->point_color = "#FFA000" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Orange'){ ?>
<?php  $__Context->layout_info->point_color = "#FB8C00" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='DeepOrange'){ ?>
<?php  $__Context->layout_info->point_color = "#F4511E" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='Brown'){ ?>
<?php  $__Context->layout_info->point_color = "#795548" ?>
<?php } ?>
<?php if($__Context->layout_info->layout_color=='BlueGrey'){ ?>
<?php  $__Context->layout_info->point_color = "#607D8B" ?>
<?php } ?>
<?php } ?>
<?php if($__Context->layout_info->point_color){ ?>
#mm-menu a.active_a,
.dw_color,
.locNav .active a.locNav_first_a{color:<?php echo $__Context->layout_info->point_color ?>}
.locNav li a:hover,
.locNav li a.active_a,
.locNav .active i,
.active a.first_a,
.main_menu li li a.active_a,
.main_menu li li a:hover,
.breadclumb li.last_breadclumb,
.breadclumb li.last_breadclumb a{color:<?php echo $__Context->layout_info->point_color ?> !important;}
.top_login a.login_A,
.main_menu ul li.highlight a, .main_menu ul li.highlight li.highlight a,
.xe .camera_wrap .camera_pag .camera_pag_ul li.cameracurrent > span,
.top_menu,
.xe .WSlide .camera_wrap .camera_pag .camera_pag_ul li.cameracurrent > span,
.lnb_title h2,
#scrollUp,
.list_span,
.box,
.door_bg,
.owl-controls .owl-dots .active span{background-color:<?php echo $__Context->layout_info->point_color ?>}
.main_menu li.first_li:hover div,
.main_menu ul.second_ul:hover,
.black_gnb .main_menu li.first_li:hover div{border-top-color:<?php echo $__Context->layout_info->point_color ?> !important}
.ce .section0, .ec .section0{border-bottom-color:<?php echo $__Context->layout_info->point_color ?> !important}
@media screen and (max-width:1020px){
.header,
.fix_header{background-color:<?php echo $__Context->layout_info->point_color ?>}
}
<?php } ?>
<?php if($__Context->layout_info->e1_width){ ?>
.ec .in_body{padding-left:<?php echo $__Context->layout_info->e1_width+40 ?>px;}
.ec .e1{margin-right:-<?php echo $__Context->layout_info->e1_width ?>px;left:-<?php echo $__Context->layout_info->e1_width+40 ?>px;}
.ce .in_body{padding-right:<?php echo $__Context->layout_info->e1_width+40 ?>px;}
.ce .e1{margin-left:-<?php echo $__Context->layout_info->e1_width ?>px;right:-<?php echo $__Context->layout_info->e1_width+40 ?>px;}
.e1{width:<?php echo $__Context->layout_info->e1_width ?>px;}
<?php } ?>
<?php if($__Context->layout_info->menu_height){ ?>
.main_menu div {height:<?php echo $__Context->layout_info->menu_height ?>px;}
<?php } ?>
<?php if($__Context->layout_info->menu_list){ ?>
.first_li{width:<?php echo $__Context->layout_info->menu_list ?>%;}
<?php if($__Context->layout_info->menu_list=='16.6'){ ?>
.first_li1,
.first_li2,
.first_li3,
.first_li4{width:16.7%}
<?php } ?>
<?php if($__Context->layout_info->menu_list=='14.3'){ ?>
.first_li1{width:14.2%}
<?php } ?>
<?php if($__Context->layout_info->menu_list=='33.3'){ ?>
.first_li1{width:33.4%}
<?php } ?>
<?php } ?>
<?php if($__Context->layout_info->menu_pont){ ?>
.main_menu li.first_li:hover div,
.black_gnb .main_menu li.first_li:hover div{border-top-color:<?php echo $__Context->layout_info->menu_pont ?> !important;}
.main_menu ul.second_ul:hover,
.black_gnb .main_menu ul.second_ul:hover{border-color:<?php echo $__Context->layout_info->menu_pont ?> !important;}
.active a.first_a,
.main_menu li li a.active_a,
.main_menu li li a:hover{color:<?php echo $__Context->layout_info->menu_pont ?> !important;}
<?php } ?>
<?php if($__Context->layout_info->sub_bgimg){ ?>
.sub_header{background-image:url(<?php echo $__Context->layout_info->sub_bgimg ?>);}
<?php } ?>
<?php if($__Context->layout_info->bg_breadclumb){ ?>
.breadclumb_title{background:<?php echo $__Context->layout_info->bg_breadclumb ?>}
<?php } ?>
<?php if($__Context->layout_info->bg_sub){ ?>
.lnb_title h2{background:url(<?php echo $__Context->layout_info->bg_sub ?>)}
<?php } ?>
<?php if($__Context->layout_info->quick_bg1){ ?>
.quick_li1 .quick_div,
.quick_li1:hover .quick_a{background-color:<?php echo $__Context->layout_info->quick_bg1 ?>}
.quick_li1 .quick_div:after{border-left-color:<?php echo $__Context->layout_info->quick_bg1 ?>;}
<?php } ?>
<?php if($__Context->layout_info->quick_bg2){ ?>
.quick_li2 .quick_div,
.quick_li2:hover .quick_a{background-color:<?php echo $__Context->layout_info->quick_bg2 ?>}
.quick_li2 .quick_div:after{border-left-color:<?php echo $__Context->layout_info->quick_bg2 ?>;}
<?php } ?>
<?php if($__Context->layout_info->quick_bg3){ ?>
.quick_li3 .quick_div,
.quick_li3:hover .quick_a{background-color:<?php echo $__Context->layout_info->quick_bg3 ?>}
.quick_li3 .quick_div:after{border-left-color:<?php echo $__Context->layout_info->quick_bg3 ?>;}
<?php } ?>
<?php if($__Context->layout_info->quick_bg4){ ?>
.quick_li4 .quick_div,
.quick_li4:hover .quick_a{background-color:<?php echo $__Context->layout_info->quick_bg4 ?>}
.quick_li4 .quick_div:after{border-left-color:<?php echo $__Context->layout_info->quick_bg4 ?>;}
<?php } ?>
<?php if($__Context->layout_info->quick_bg5){ ?>
.quick_li5 .quick_div,
.quick_li5:hover .quick_a{background-color:<?php echo $__Context->layout_info->quick_bg5 ?>}
.quick_li5 .quick_div:after{border-left-color:<?php echo $__Context->layout_info->quick_bg5 ?>;}
<?php } ?>
@media screen and (max-width:1000px){
<?php if($__Context->layout_info->m_sub_bgimg){ ?>
.sub_header{background-image:url(<?php echo $__Context->layout_info->m_sub_bgimg ?>);}
<?php } ?>
}
</style>
<div class="xe <?php echo $__Context->layout_info->layout_style ?> mobile-<?php echo $__Context->layout_info->header_style ?>">
<!-- 헤더 시작 -->
	<div class="header" id="header">
		<div class="in_header">
			<p class="skip"><a href="#content"><?php echo $__Context->lang->skip_to_content ?></a></p>
			<!-- 우상단 로그인 -->
			<div class="top_header">
				<div class="wrap_account xe_width clearBoth">
					<div class="account <?php echo $__Context->layout_info->color_login ?> <?php echo $__Context->layout_info->bg_account ?>">
						<ul class="clearBoth wrap_login">
							<li class="first_top"><a href="<?php echo getSiteUrl() ?>">HOME</a></li>
							<?php if($__Context->top_menu->list&&count($__Context->top_menu->list))foreach($__Context->top_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li><a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['text'] ?></a></li><?php }} ?>
							<?php if($__Context->layout_info->use_language=='Y'){ ?><li class="language first_login">
								<button type="button" class="toggle login_A"><?php echo $__Context->lang_supported[$__Context->lang_type] ?></button>
								<ul class="selectLang">
									<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){;
if($__Context->key!= $__Context->lang_type){ ?><li><button type="button" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;"><?php echo $__Context->val ?></button></li><?php }} ?>
									<li class="close_selectLang"><a class="toggle" href="#">CLOSE</a></li>
								</ul>
							</li><?php } ?>
							<?php if($__Context->is_logged){ ?>
							<li<?php if($__Context->layout_info->use_language!=='Y'){ ?> class="first_login"<?php } ?>><a class="login_A" href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
							<li><a class="login_A" href="<?php echo getUrl('act','dispMemberInfo') ?>"><?php echo $__Context->lang->cmd_view_member_info ?></a></li>
							<?php if($__Context->logged_info->is_admin=='Y' && !$__Context->site_module_info->site_srl){ ?><li><a class="login_A" href="<?php echo getUrl('','module','admin') ?>"><?php echo $__Context->lang->cmd_management ?></a></li><?php } ?>
							<?php } ?>
							<?php if(!$__Context->is_logged){ ?>
							<li<?php if($__Context->layout_info->use_language!=='Y'){ ?> class="first_login"<?php } ?>><a class="act_login login_A" href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?></a></li>
							<li><a class="login_A" href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
							<li><a class="login_A" href="<?php echo getUrl('act','dispMemberFindAccount') ?>"><?php echo $__Context->lang->cmd_find_member_account ?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
				<!-- 우상단 로그인 끝 -->
			<div class="xe_width wrap_logo">
				<h1 class="large_logo <?php echo $__Context->layout_info->logo_align ?>">
					<?php if($__Context->layout_info->logo_image&&$__Context->layout_info->logo_url){ ?><a href="<?php echo $__Context->layout_info->logo_url ?>" title="<?php echo $__Context->layout_info->logo_image_alt ?>">
						<img class="logo" src="<?php echo $__Context->layout_info->logo_image ?>" alt="<?php echo $__Context->layout_info->logo_image_alt ?>" border="0" />
					</a><?php } ?>
					<?php if($__Context->layout_info->logo_image&&!$__Context->layout_info->logo_url){ ?><a href="<?php echo getSiteUrl() ?>" title="<?php echo $__Context->layout_info->logo_image_alt ?>">
						<img class="logo" src="<?php echo $__Context->layout_info->logo_image ?>" alt="<?php echo $__Context->layout_info->logo_image_alt ?>" border="0" />
					</a><?php } ?>
					<?php if(!$__Context->layout_info->logo_image){ ?><a href="<?php echo getSiteUrl() ?>" class="text_logo"><img class="logo" src="/layouts/Door_cpA_limit/img/p.logo.png" border="0" alt="logo"></a><?php } ?>
				</h1>	
				<h1 class="logo_min">
					<?php if($__Context->layout_info->Mlogo_image&&$__Context->layout_info->logo_url){ ?><a href="<?php echo $__Context->layout_info->logo_url ?>" title="<?php echo $__Context->layout_info->logo_image_alt ?>">
						<img class="logo" src="<?php echo $__Context->layout_info->Mlogo_image ?>" alt="<?php echo $__Context->layout_info->logo_image_alt ?>" border="0" />
					</a><?php } ?>
					<?php if($__Context->layout_info->Mlogo_image&&!$__Context->layout_info->logo_url){ ?><a href="<?php echo getSiteUrl() ?>" title="<?php echo $__Context->layout_info->logo_image_alt ?>">
						<img class="logo" src="<?php echo $__Context->layout_info->Mlogo_image ?>" alt="<?php echo $__Context->layout_info->logo_image_alt ?>" border="0" />
					</a><?php } ?>
					<?php if(!$__Context->layout_info->Mlogo_image){ ?><a href="<?php echo getSiteUrl() ?>" class="text_logo"><img class="logo" src="/layouts/Door_cpA_limit/img/logo.png" border="0" alt="logo"></a><?php } ?>
				</h1>
				<!-- 메인메뉴 끝 -->	
				<a href="#" class="mobile_menu mobile_menu_act"><img src="/layouts/Door_cpA_limit/img/menu.png" alt="메뉴보기" /></a>
				<?php if($__Context->is_logged){ ?>
				<a href="<?php echo getUrl('act','dispMemberLogout') ?>" class="mobile_menu mobile_menu_login"><img src="/layouts/Door_cpA_limit/img/logout.png" alt="logout" /></a>
				<?php }elseif($__Context->act!='dispMemberLoginForm'){ ?>
				<a href="<?php echo getUrl('act','dispMemberLoginForm') ?>" class="mobile_menu mobile_menu_login"><img src="/layouts/Door_cpA_limit/img/login.png" alt="login" /></a>
				<?php } ?>
			</div>
			<div class="wrap_menu middle_header xe_width clearBoth <?php echo $__Context->layout_info->menu_style ?>">
				<div<?php if($__Context->layout_info->menu_height){ ?> class="gnb gnb<?php echo $__Context->layout_info->menu_list*100 ?>"<?php } ?> <?php if(!$__Context->layout_info->menu_height){ ?> class="gnb gnb_none gnb<?php echo $__Context->layout_info->menu_list*100 ?>"<?php } ?>>
					<ul id="menu" class="main_menu">
						<?php $__Context->dx=1 ?>
						<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li<?php if($__Context->val1['selected']){ ?> class="active highlight first_li first_li<?php echo $__Context->dx ?>"<?php } ?> <?php if(!$__Context->val1['selected']){ ?> class="first_li first_li<?php echo $__Context->dx ?>"<?php } ?>>
							<a class="first_a" href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['text'] ?></a>
							<?php if($__Context->layout_info->menu_height){ ?>
							<div class="sub1 sub_div">
								<?php if($__Context->val1['list']){ ?><ul class="first_ul">
									<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?><li<?php if($__Context->val2['selected']){ ?> class="active_second_li"<?php } ?>>
										<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['selected']){ ?> class="active_a second_a"<?php };
if(!$__Context->val2['selected']){ ?> class="second_a"<?php };
if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?>
										</a>
										<?php if($__Context->val2['list']){ ?><ul class="second_ul">
										<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?><li class="second_li"><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['selected']){ ?> class="active_a"<?php };
if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a>
										</li><?php }} ?>
										</ul><?php } ?>
									</li><?php }} ?>
								</ul><?php } ?>
							</div>
							<?php } ?>
						<?php $__Context->dx++ ?>
						</li><?php }} ?>		
					</ul>	
				</div>
				
			</div>
			<div class="fix_menu">
				<div class="wrap_menu middle_header xe_width clearBoth <?php echo $__Context->layout_info->menu_style ?>">
					<div<?php if($__Context->layout_info->menu_height){ ?> class="gnb gnb<?php echo $__Context->layout_info->menu_list*100 ?>"<?php } ?> <?php if(!$__Context->layout_info->menu_height){ ?> class="gnb gnb_none gnb<?php echo $__Context->layout_info->menu_list*100 ?>"<?php } ?>>
						<ul id="menu" class="main_menu">
							<?php $__Context->dx=1 ?>
							<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li<?php if($__Context->val1['selected']){ ?> class="active highlight first_li first_li<?php echo $__Context->dx ?>"<?php } ?> <?php if(!$__Context->val1['selected']){ ?> class="first_li first_li<?php echo $__Context->dx ?>"<?php } ?>>
								<a class="first_a" href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['text'] ?></a>
								<?php if($__Context->layout_info->menu_height){ ?>
								<div class="sub1 sub_div">
									<?php if($__Context->val1['list']){ ?><ul class="first_ul">
										<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?><li<?php if($__Context->val2['selected']){ ?> class="active_second_li"<?php } ?>>
											<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['selected']){ ?> class="active_a second_a"<?php };
if(!$__Context->val2['selected']){ ?> class="second_a"<?php };
if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?>
											</a>
											<?php if($__Context->val2['list']){ ?><ul class="second_ul">
											<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?><li class="second_li"><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['selected']){ ?> class="active_a"<?php };
if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a>
											</li><?php }} ?>
											</ul><?php } ?>
										</li><?php }} ?>
									</ul><?php } ?>
								</div>
								<?php } ?>
							<?php $__Context->dx++ ?>
							</li><?php }} ?>		
						</ul>	
					</div>
				</div>
			</div>
		</div>
		
		
		<?php if($__Context->layout_info->header_style=='B'){ ?><div class="top_menu">
			<div class="top-owl-menu owl-menu owl-carousel">
				<?php $__Context->idx=1 ?>
				<?php if($__Context->mobile_top_menu->list&&count($__Context->mobile_top_menu->list))foreach($__Context->mobile_top_menu->list as $__Context->key1=>$__Context->val1){ ?><div class="item first_item">
					<a<?php if($__Context->val1['list']){ ?> href="#"<?php };
if(!$__Context->val1['list']){ ?> href="<?php echo $__Context->val1['href'] ?>"<?php } ?> class="tab_first_a first_a<?php echo $__Context->idx ?>" name="tab<?php echo $__Context->idx ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['text'] ?></a>
				<?php $__Context->idx++ ?>
				</div><?php } ?>
				<div class="item last_item"><a class="first_b" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
			</div>
				<?php $__Context->idx=1 ?>
			<?php if($__Context->mobile_menu->list&&count($__Context->mobile_menu->list))foreach($__Context->mobile_menu->list as $__Context->key1=>$__Context->val1){ ?><div id="tab<?php echo $__Context->idx ?>"<?php if($__Context->val1['list']){ ?> class="sub_menu"<?php } ?> <?php if(!$__Context->val1['list']){ ?> class="sub_menu empty_sub_menu"<?php } ?>>
				<?php if($__Context->val1['list']){ ?><div class="owl-menu owl-carousel">
					<?php $__Context->iidx=1 ?>
					<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><div class="item item<?php echo $__Context->iidx ?>">
						<a<?php if($__Context->val2['selected']){ ?> class="second_a active_a"<?php } ?> <?php if(!$__Context->val2['selected']){ ?> class="second_a"<?php } ?> href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['text'] ?></a>
					<?php $__Context->iidx++ ?>
					</div><?php } ?>
					<div class="item last_item"><a class="first_b" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
				</div><?php } ?>
				<?php $__Context->idx++ ?>
			</div><?php } ?>
				<script>
					jQuery(function($){
						$('.owl-menu').owlCarousel({
						margin:0,
						autoWidth:true,
						nav:true,
						items:3
						})	
					});
				</script>
		</div><?php } ?>
	</div>
<!-- 헤더 끝 -->
	<section class="section0">
	<?php if(!Mobile::isMobileCheckByAgent()){ ?>
	<?php if($__Context->layout_info->main_slide=='A'||$__Context->layout_info->main_slide=='B'){ ?><div class="wrap_slide">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Door_cpA_limit/slide','camera.html') ?>
	</div><?php } ?>
	<?php } ?>
	<?php if(Mobile::isMobileCheckByAgent()){ ?>
	<?php if($__Context->layout_info->mobile_slide){ ?><div class="wrap_slide wrap_slideB">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Door_cpA_limit/slide','da-owl-slider.html') ?>
	</div><?php } ?>
	<?php } ?>
	<?php if($__Context->layout_info->breadclumb=='Y'){ ?><div class="wrap_sub_header">
		<!-- depth 1 -->
		<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key=>$__Context->val){;
if($__Context->val['selected']){;
$__Context->menu_depth1 = $__Context->val;
}} ?>
		<!-- depth 2 -->
		<?php if($__Context->menu_depth1['list']&&count($__Context->menu_depth1['list']))foreach($__Context->menu_depth1['list'] as $__Context->key=>$__Context->val){;
if($__Context->val['selected'] && $__Context->menu_depth1){;
$__Context->menu_depth2 = $__Context->val;
}} ?>
		<!-- depth 3 -->
		<?php if($__Context->menu_depth2['list']&&count($__Context->menu_depth2['list']))foreach($__Context->menu_depth2['list'] as $__Context->key=>$__Context->val){;
if($__Context->val['selected'] && $__Context->menu_depth2){;
$__Context->menu_depth3 = $__Context->val;
}} ?>
		<div class="has_bg_breadclumb sub_header animation-pulseBgSlow">
			<div class="bg_breadclumb">
				<?php if(!Mobile::isMobileCheckByAgent()){ ?>
				<div class="ie_sub_header"><?php if($__Context->layout_info->sub_bgimg){ ?><img src="<?php echo $__Context->layout_info->sub_bgimg ?>" alt="배경이미지" /><?php };
if(!$__Context->layout_info->sub_bgimg){ ?><img src="/layouts/Door_cpA_limit/img/sub.jpg" alt="배경이미지" /><?php } ?></div>
				<?php } ?>
				<?php if($__Context->menu_depth1&&!$__Context->menu_depth3&&!$__Context->menu_depth2){ ?><h2><a href="<?php echo $__Context->menu_depth1['href'] ?>"><span><?php echo $__Context->menu_depth1['text'] ?></span></a></h2><?php } ?>
				<?php if($__Context->menu_depth2&&!$__Context->menu_depth3){ ?><h2><a href="<?php echo $__Context->menu_depth2['href'] ?>"><span><?php echo $__Context->menu_depth2['text'] ?></span></a></h2><?php } ?>
				<?php if($__Context->menu_depth3){ ?><h2><a href="<?php echo $__Context->menu_depth3['href'] ?>"><span><?php echo $__Context->menu_depth3['text'] ?></span></a></h2><?php } ?>
				<?php if(!$__Context->menu_depth1){ ?><h2><a href="#"><?php echo $__Context->module_info->browser_title ?></a></h2><?php } ?>
			</div>
		</div>
	</div><?php } ?>
	</section>
	<?php if($__Context->layout_info->main_widget){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Door_cpA_limit/slide','main.html') ?>
	<?php } ?>
	<section>
	<div>
		<div id="content">
			<div class="body">
				<div class="xe_width wrap_body">
					<div class="in_body clearBoth">
						<?php if($__Context->layout_info->layout_style=='ec'||$__Context->layout_info->layout_style=='ce'){ ?><div class="e1">
							<!-- 서브메뉴 하위메뉴 -->
							<div class="lnb_title">
								<?php if($__Context->sub_menu->list&&count($__Context->sub_menu->list))foreach($__Context->sub_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?><h2<?php if($__Context->layout_info->locNav_img){ ?> class="has_span"<?php } ?>>
									<?php if($__Context->layout_info->locNav_img){ ?>
									<span><img src="<?php echo $__Context->layout_info->locNav_img ?>" alt="" /></span>
									<?php } ?>
									<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
								</h2><?php }} ?>
							</div>
							<?php if($__Context->sub_menu->list&&count($__Context->sub_menu->list))foreach($__Context->sub_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?><div class="wrap_locNav">
								<div class="in_section">
									<ul class="locNav">
									<?php $__Context->dx=1 ?>
										<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="locNav_li<?php echo $__Context->dx ?> active"<?php };
if(!$__Context->val2['selected']){ ?> class="locNav_li<?php echo $__Context->dx ?>"<?php } ?>>
											<a href="<?php echo $__Context->val2['href'] ?>" class="locNav_first_a"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><span class="act_span"><i class="xi-arrow-right"></i></span><span class="in_loc_span"><?php echo $__Context->val2['link'] ?></span></a>
											<?php if($__Context->val2['list']){ ?><button<?php if($__Context->val2['selected']){ ?> class="Loc_i on"<?php } ?> <?php if(!$__Context->val2['selected']){ ?> class="Loc_i"<?php } ?>><i class="xi-angle-down"></i><i class="xi-angle-up"> </i></button><?php } ?>
											<?php if($__Context->val2['list']){ ?><ul class="second_locNav">
												<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?><li class="second_li"><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['selected']){ ?> class="active_a"<?php };
if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><span class="in_loc_span">· <?php echo $__Context->val3['link'] ?></span></a>
												</li><?php }} ?>
											</ul><?php } ?>
										<?php $__Context->dx++ ?>
										</li><?php } ?>
									</ul>
								</div>
							</div><?php }} ?>
							<ul class="sub_banner">
								<?php if($__Context->layout_info->sub_banner_img1){ ?><li>
									<a href="<?php echo $__Context->layout_info->sub_banner_url1 ?>"><img src="<?php echo $__Context->layout_info->sub_banner_img1 ?>" alt="<?php echo $__Context->layout_info->sub_banner_alt1 ?>" /></a>
								</li><?php } ?>
								
								<?php if($__Context->layout_info->sub_banner_img2){ ?><li>
									<a href="<?php echo $__Context->layout_info->sub_banner_url2 ?>"><img src="<?php echo $__Context->layout_info->sub_banner_img2 ?>" alt="<?php echo $__Context->layout_info->sub_banner_alt2 ?>" /></a>
								</li><?php } ?>
								<?php if($__Context->layout_info->sub_banner_img3){ ?><li>
									<a href="<?php echo $__Context->layout_info->sub_banner_url3 ?>"><img src="<?php echo $__Context->layout_info->sub_banner_img3 ?>" alt="<?php echo $__Context->layout_info->sub_banner_alt3 ?>" /></a>
								</li><?php } ?>
								<?php if($__Context->layout_info->sub_banner_img4){ ?><li>
									<a href="<?php echo $__Context->layout_info->sub_banner_url4 ?>"><img src="<?php echo $__Context->layout_info->sub_banner_img4 ?>" alt="<?php echo $__Context->layout_info->sub_banner_alt4 ?>" /></a>
								</li><?php } ?>
								<?php if($__Context->layout_info->sub_banner_img5){ ?><li>
									<a href="<?php echo $__Context->layout_info->sub_banner_url5 ?>"><img src="<?php echo $__Context->layout_info->sub_banner_img5 ?>" alt="<?php echo $__Context->layout_info->sub_banner_alt5 ?>" /></a>
								</li><?php } ?>
							</ul>
						</div><?php } ?>
						<?php if($__Context->content){ ?><div class="content">
							<?php if($__Context->layout_info->breadclumb=='Y'){ ?>
							
							<div class="wrap_breadclumb">
								<ul class="breadclumb">											
									<li class="first_breadclumb png_bg">
										<a href="<?php echo getSiteUrl() ?>">
											HOME
										</a>
									</li>
									<?php if($__Context->menu_depth1){ ?><li>
										<a class="Ccolor" href="<?php echo $__Context->menu_depth1['href'] ?>"><?php echo $__Context->menu_depth1['text'] ?></a>
									</li><?php } ?>
									<?php if($__Context->menu_depth2){ ?><li class="breadclumb_li2">
										<a class="Ccolor" href="<?php echo $__Context->menu_depth2['href'] ?>"><?php echo $__Context->menu_depth2['text'] ?></a>
									</li><?php } ?>
									<?php if($__Context->menu_depth3){ ?><li class="breadclumb_li3">
										<a class="Ccolor" href="<?php echo $__Context->menu_depth3['href'] ?>"><?php echo $__Context->menu_depth3['text'] ?></a>
									</li><?php } ?>
									<?php if(!$__Context->menu_depth1){ ?><li>
											<?php echo $__Context->module_info->browser_title ?>
									</li><?php } ?>
								</ul>		
							</div>
							<?php } ?>
							<div class="wrap_section">
								<div class="in_section">
								<?php echo $__Context->content ?>
								</div>
							</div>
						</div><?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section>
	<div class="footer footer<?php echo $__Context->layout_info->middle_widgetE ?>">
		<div class="in_footer xe_width clearBoth">
			<h1 class="foot_logo">
				<?php if($__Context->layout_info->foot_logo_image&&$__Context->layout_info->logo_url){ ?><a href="<?php echo $__Context->layout_info->logo_url ?>" title="<?php echo $__Context->layout_info->logo_image_alt ?>">
					<img class="logo" src="<?php echo $__Context->layout_info->foot_logo_image ?>" alt="<?php echo $__Context->layout_info->logo_image_alt ?>" border="0" />
				</a><?php } ?>
				<?php if($__Context->layout_info->foot_logo_image&&!$__Context->layout_info->logo_url){ ?><a href="<?php echo getSiteUrl() ?>" title="<?php echo $__Context->layout_info->logo_image_alt ?>">
					<img class="logo" src="<?php echo $__Context->layout_info->foot_logo_image ?>" alt="<?php echo $__Context->layout_info->logo_image_alt ?>" border="0" />
				</a><?php } ?>
				<?php if(!$__Context->layout_info->foot_logo_image){ ?><a href="<?php echo getSiteUrl() ?>" class="text_logo"><img src="/layouts/Door_cpA_limit/img/foot_logo.png" alt="Logo" /></a><?php } ?>
			</h1>
			<div class="foot_right">
				<div class="foot_menu">
					<ul class="clearBoth">
						<?php $__Context->idx=1 ?>
						<?php if($__Context->foot_menu->list&&count($__Context->foot_menu->list))foreach($__Context->foot_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li class="foot_li<?php echo $__Context->idx ?>">
							<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['text'] ?></a>
						<?php $__Context->idx++ ?>
						</li><?php }} ?>
					</ul>
				</div>
		
				<?php if(!$__Context->layout_info->copyright){ ?><p class="copylight">
						<span>Address</span>: 서울특별시 ***&nbsp;&nbsp;
						<span>Tel</span>: 000-000-0000&nbsp;&nbsp;
						<span>E-mal</span>: 000@hanmail.net<br />
						Copyright 2016 <span>DOORWEB</span>. All Rights Reserved
				</p><?php } ?>
				<?php if($__Context->layout_info->copyright){ ?><p class="copylight">
						<?php echo $__Context->layout_info->copyright ?>
				</p><?php } ?>
			</div>
			<div class="wrap_in_select">
					<a class="act_search" href="#">패밀리 사이트</a>
					<ul class="in_select">
						<?php if($__Context->select_menu->list&&count($__Context->select_menu->list))foreach($__Context->select_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li>
							<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
						</li><?php }} ?>
					</ul>
				</div>
			<div class="foot_absolute">
				<?php if($__Context->layout_info->use_footer_SNS){ ?><ul class="foot_sns">
					<?php if($__Context->layout_info->facebook){ ?><li><a href="<?php echo $__Context->layout_info->facebook ?>" target="_blank"  title="Facebook 바로가기"><img src="/layouts/Door_cpA_limit/img/facebook.png" alt="facebook" /></a></li><?php } ?>
					<?php if($__Context->layout_info->twitter){ ?><li><a href="<?php echo $__Context->layout_info->twitter ?>" target="_blank" title="Twitter 바로가기"><img src="/layouts/Door_cpA_limit/img/twitter.png" alt="twitter" /></a></li><?php } ?>
					<?php if($__Context->layout_info->instagram){ ?><li><a href="<?php echo $__Context->layout_info->instagram ?>" target="_blank" title="Instagram 바로가기"><img src="/layouts/Door_cpA_limit/img/instagram.png" alt="Instagram" /></a></li><?php } ?>
					<?php if($__Context->layout_info->google){ ?><li><a href="<?php echo $__Context->layout_info->google ?>" target="_blank" title="Google 바로가기"><img src="/layouts/Door_cpA_limit/img/google.png" alt="google" /></a></li><?php } ?>
					<?php if($__Context->layout_info->pinterest){ ?><li><a href="<?php echo $__Context->layout_info->pinterest ?>" target="_blank" title="Pinterest 바로가기"><img src="/layouts/Door_cpA_limit/img/pinterest.png" alt="pinterest" /></a></li><?php } ?>
					<?php if($__Context->layout_info->kakaostory){ ?><li><a href="<?php echo $__Context->layout_info->kakaostory ?>" target="_blank" title="Kakaostory 바로가기"><img src="/layouts/Door_cpA_limit/img/kakaostory.png" alt="kakaostory" /></a></li><?php } ?>
					<?php if($__Context->layout_info->band){ ?><li><a href="<?php echo $__Context->layout_info->band ?>" target="_blank" title="Band 바로가기"><img src="/layouts/Door_cpA_limit/img/band.png" alt="band" /></a></li><?php } ?>
					<?php if($__Context->layout_info->sns_image1){ ?><li><a target="_blank" href="<?php echo $__Context->layout_info->sns_image_url1 ?>"  title="<?php echo $__Context->layout_info->sns_image_alt1 ?> 바로가기"><img src="<?php echo $__Context->layout_info->sns_image1 ?>" alt="<?php echo $__Context->layout_info->sns_image_alt1 ?>" title="<?php echo $__Context->layout_info->sns_image_alt1 ?>" /></a></li><?php } ?>
					<?php if($__Context->layout_info->sns_image2){ ?><li><a target="_blank" href="<?php echo $__Context->layout_info->sns_image_url2 ?>"  title="<?php echo $__Context->layout_info->sns_image_alt2 ?> 바로가기"><img src="<?php echo $__Context->layout_info->sns_image2 ?>" alt="<?php echo $__Context->layout_info->sns_image_alt2 ?>" title="<?php echo $__Context->layout_info->sns_image_alt2 ?>" /></a></li><?php } ?>
					<?php if($__Context->layout_info->sns_image3){ ?><li><a target="_blank" href="<?php echo $__Context->layout_info->sns_image_url3 ?>"  title="<?php echo $__Context->layout_info->sns_image_alt3 ?> 바로가기"><img src="<?php echo $__Context->layout_info->sns_image3 ?>" alt="<?php echo $__Context->layout_info->sns_image_alt3 ?>"  title="<?php echo $__Context->layout_info->sns_image_alt3 ?>"/></a></li><?php } ?>
					<?php if($__Context->layout_info->sns_image4){ ?><li><a target="_blank" href="<?php echo $__Context->layout_info->sns_image_url4 ?>"  title="<?php echo $__Context->layout_info->sns_image_alt4 ?> 바로가기"><img src="<?php echo $__Context->layout_info->sns_image4 ?>" alt="<?php echo $__Context->layout_info->sns_image_alt4 ?>" title="<?php echo $__Context->layout_info->sns_image_alt4 ?>" /></a></li><?php } ?>
				</ul><?php } ?>
				<a href="http://doorweb.net/xe" target="_blank" class="ds_dw">Design by <span class="skin_by">DoorWeb</span></a>
			</div>
			
		</div>
	</div>
	</section>
</div>
<script>
		/* scrollUp Minimum setup */
	jQuery(function($){
			$.scrollUp();
		});
	</script>
			<div class="fix_mobile">
			</div>
			<div class="mm_mobile_menu none_mobile_menu">
				<div class="top-mm-menu">
					<ul class="top_login">
					<?php if($__Context->is_logged){ ?>
					<li class="fl"><a href="<?php echo getUrl('act', 'dispMemberInfo') ?>"><?php echo $__Context->lang->cmd_view_member_info ?></a></li>
					<li class="fl"><a class="login_A" href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
					
					<?php }elseif($__Context->act!='dispMemberLoginForm'){ ?>
					<li class="fl"><a href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?></a></li>
					<li class="fl"><a class="login_A" href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
					<?php } ?>
					</ul>
					<a href="#" class="mobile_menu_act in_mobile_act">CLOSE</a>
				</div>
				<nav id="mm-menu">
					
					<ul class="mm-list">
						<?php if($__Context->layout_info->use_language=='Y'){ ?><li class="mm-list-li">
							<a class="mm_a mm_lang" href="#">Select language</a><button class="Nav_i"><i class="xi-angle-down"></i><i class="xi-angle-up"> </i></button>
							<ul class="selectLang none_login">
								<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){;
if($__Context->key!= $__Context->lang_type){ ?><li><a href="#" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;">- <?php echo $__Context->val ?></a></li><?php }} ?>
							</ul>
						</li><?php } ?>
						<?php if($__Context->mobile_menu->list&&count($__Context->mobile_menu->list))foreach($__Context->mobile_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="active mm-list-li"<?php };
if(!$__Context->val1['selected']){ ?> class="mm-list-li"<?php } ?>><a<?php if(!$__Context->val1['selected']){ ?> class="mm_a"<?php };
if($__Context->val1['selected']){ ?> class="mm_a active_a"<?php } ?> href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['text'] ?></a><?php if($__Context->val1['list']){ ?><button<?php if($__Context->val1['selected']){ ?> class="Nav_i hover"<?php } ?> <?php if(!$__Context->val1['selected']){ ?> class="Nav_i"<?php } ?>><i class="xi-angle-down"></i><i class="xi-angle-up"> </i></button><?php } ?>
							<?php if($__Context->val1['list']){ ?><ul>
								<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li><a<?php if($__Context->val2['selected']){ ?> class="active_a"<?php } ?> href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>>- <?php echo $__Context->val2['text'] ?></a>
									<?php if($__Context->val2['list']){ ?><ul>
										<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?><li><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['selected']){ ?> class="active_a"<?php };
if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>>- <?php echo $__Context->val3['text'] ?></a>
										</li><?php }} ?>
									</ul><?php } ?>
								</li><?php } ?>
							</ul><?php } ?>
						</li><?php } ?>
					</ul>
				</nav>
			</div>