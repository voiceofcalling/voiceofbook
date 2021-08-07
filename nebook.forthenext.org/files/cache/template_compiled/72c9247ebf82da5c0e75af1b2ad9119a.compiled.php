<?php if(!defined("__XE__"))exit;
if(!$__Context->layout_info->no_mobile && !$__Context->_COOKIE['fakeM']){ ?>
<?php Context::addHtmlHeader('<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes, target-densitydpi=medium-dpi" />') ?>
<?php } ?>
<?php if(class_exists(Mobile) && Mobile::isFromMobilePhone()){ ?>
<?php if(__DEBUG__){ ?><!--#Meta:common/js/jquery.js--><?php $__tmp=array('common/js/jquery.js','','','-100006');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if(!__DEBUG__){ ?><!--#Meta:common/js/jquery.min.js--><?php $__tmp=array('common/js/jquery.min.js','','','-100006');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php } ?>
<!--#Meta:layouts/sketchbook/css/layout.css--><?php $__tmp=array('layouts/sketchbook/css/layout.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->layout_info->colorset=='black'){ ?><!--#Meta:layouts/sketchbook/css/black.css--><?php $__tmp=array('layouts/sketchbook/css/black.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<!--#Meta:layouts/sketchbook/js/layout.js--><?php $__tmp=array('layouts/sketchbook/js/layout.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(!$__Context->layout_info->colorset){;
$__Context->layout_info->colorset = 'white';
} ?>
<?php if(!$__Context->layout_info->frame){;
$__Context->layout_info->frame = 'ece';
} ?>
<?php if(!$__Context->layout_info->bg_align){;
$__Context->layout_info->bg_align = 'center';
} ?>
<?php if(!$__Context->layout_info->bg_repeat){;
$__Context->layout_info->bg_repeat = 'no-repeat';
} ?>
<?php if($__Context->_COOKIE['layout_font']){;
$__Context->layout_info->font = $__Context->_COOKIE['layout_font'];
} ?>
<?php Context::addBodyClass($__Context->layout_info->colorset) ?>
<?php $__Context->_colorset_list = array('lightsky','orange','sky','green','lightpink','red','yellow','blue','purple','pink','greenyellow','deeppink') ?>
<?php if($__Context->lang_type=='ko'){ ?>
<?php 
	$__Context->lang->signup = '가입하기';
	$__Context->lang->profile = '내 정보';
	$__Context->lang->best_font_dsc = '나눔고딕 등의 여러폰트를 섞어서 사용합니다';
	$__Context->lang->best_font = '추천글꼴';
	$__Context->lang->window_font = '맑은고딕';
	$__Context->lang->tahoma = '돋움';
	$__Context->lang->pc = 'PC버전으로 보기';
	$__Context->lang->social = '소셜';
 ?>
<?php }else{ ?>
<?php 
	$__Context->lang->signup = 'Sign Up';
	$__Context->lang->profile = 'Profile';
	$__Context->lang->best_font_dsc = 'Use different fonts';
	$__Context->lang->best_font = 'Suitable';
	$__Context->lang->window_font = 'Segoe UI';
	$__Context->lang->tahoma = 'Tahoma';
	if($__Context->lang_type=='jp') $__Context->lang->window_font = 'メイリオ';
	$__Context->lang->pc = 'PC';
	$__Context->lang->social = 'Social';
 ?>
<?php } ?>
<style type="text/css">
body,input,textarea,select,button,table{font-family:<?php if($__Context->layout_info->font=='ng'){ ?>'나눔고딕',NanumGothic,ng,<?php }elseif($__Context->layout_info->font=='window_font'){ ?>'Segoe UI',Meiryo,'맑은 고딕','Malgun Gothic',<?php }elseif($__Context->layout_info->font=='tahoma'){ ?>Tahoma,'돋움',Dotum,<?php } ?>'Segoe UI',Meiryo,'Trebuchet MS','나눔고딕',NanumGothic,ng,'맑은 고딕','Malgun Gothic','돋움',Dotum,AppleGothic,sans-serif}
<?php if($__Context->layout_info->bg){ ?>
body{background-image:url(<?php echo $__Context->layout_info->bg ?>);background-position:top <?php echo $__Context->layout_info->bg_align ?>;background-repeat:<?php echo $__Context->layout_info->bg_repeat ?>;}
<?php } ?>
#xe{max-width:<?php echo $__Context->layout_info->xe_width ?>px}
#hd .hgroup{text-align:<?php echo $__Context->layout_info->logo_align ?>;}
#hd h1 .home{top:<?php echo $__Context->layout_info->img_y ?>px;left:<?php echo $__Context->layout_info->img_x ?>px}
<?php if($__Context->layout_info->hd_height){ ?>
#hd .hgroup{height:<?php echo $__Context->layout_info->hd_height-38 ?>px}
#hd h1{padding-top:<?php echo ($__Context->layout_info->hd_height-38)/2-19 ?>px}
<?php } ?>
<?php if(!$__Context->layout_info->no_mobile){ ?>
.xe_mobile{display:none}
<?php } ?>
</style>
<div id="xe" class="<?php echo $__Context->layout_info->frame ?> <?php echo $__Context->layout_info->reverse ?>">
	<?php if(!$__Context->layout_info->notice && $__Context->XE_VALIDATOR_MESSAGE){ ?><div id="layout_notice" class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
	
	<div id="hd" class="clear"> <a href="#content" class="skipToContent" onclick="jQuery('#content a:first').focus();return false">Skip to content</a>
		
		<ul id="top_mn">
			
			<?php if($__Context->layout_info->font_btn){ ?><li id="font_wrp" class="item">
				<a id="font_btn" class="tg_btn" href="#font"><b>T</b><strong><?php if($__Context->layout_info->font=='ng'){ ?>나눔고딕<?php }elseif($__Context->layout_info->font=='window_font'){;
echo $__Context->lang->window_font;
}elseif($__Context->layout_info->font=='tahoma'){;
echo $__Context->lang->tahoma;
}else{;
echo $__Context->lang->best_font;
} ?></strong><span class="arrow down"></span></a>
				<div id="font" class="tg_cnt"><button type="button" class="tg_blur"></button>
					<ul>
						<li class="ui_font<?php if(!$__Context->layout_info->font){ ?> on<?php } ?>"><a href="#" title="<?php echo $__Context->lang->best_font_dsc ?>"><?php echo $__Context->lang->best_font ?></a><em>✔</em></li>
						<li class="ng<?php if($__Context->layout_info->font=='ng'){ ?> on<?php } ?>"><a href="#popup_menu_area">나눔고딕</a><em>✔</em></li>
						<li class="window_font<?php if($__Context->layout_info->font=='window_font'){ ?> on<?php } ?>"><a href="#"><?php echo $__Context->lang->window_font ?></a><em>✔</em></li>
						<li class="tahoma<?php if($__Context->layout_info->font=='tahoma'){ ?> on<?php } ?>"><a href="#"><?php echo $__Context->lang->tahoma ?></a><em>✔</em></li>
					</ul><button type="button" class="tg_blur"></button>
				</div>
			</li><?php } ?>
			
			<li class="item m_yes_inline">
				<a href="#site_srch" id="tg_site_srch" class="tg_btn"><strong><?php echo $__Context->lang->cmd_search ?></strong></a>
			</li>
			
			<?php if(!$__Context->is_logged){ ?><li class="item">
				<a href="#site_login" class="tg_btn"><strong><?php echo $__Context->lang->cmd_login ?></strong></a>
				<div id="site_login" class="tg_cnt">
					<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/sketchbook','login.html') ?>
				</div>
			</li><?php } ?>
			<li class="item">
				<?php if($__Context->is_logged){ ?><a href="<?php echo getUrl('act','dispMemberLogout') ?>" class="login_btn"><strong><?php echo $__Context->lang->cmd_logout ?></strong></a><?php } ?>
				<?php if(!$__Context->is_logged){ ?><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>" class="login_btn"><?php echo $__Context->lang->signup ?></a><?php } ?>
			</li>
			
			<?php if($__Context->is_logged){ ?><li class="item">
				<a href="#profile" class="tg_btn"><?php echo $__Context->lang->profile ?></a>
				<div id="profile" class="tg_cnt"><button type="button" class="tg_blur"></button><button type="button" class="tg_close" title="Close this layer">X</button>
					<h2><?php echo $__Context->logged_info->nick_name ?></h2>
					<ul>
						<?php if($__Context->logged_info->menu_list&&count($__Context->logged_info->menu_list))foreach($__Context->logged_info->menu_list as $__Context->key=>$__Context->val){ ?><li><a href="<?php echo getUrl('act',$__Context->key,'member_srl','') ?>"><?php echo Context::getLang($__Context->val) ?></a></li><?php } ?>
					</ul><button type="button" class="tg_blur"></button>
				</div>
			</li><?php } ?>
			
			<li class="item">
				<a href="#lang" class="tg_btn"><?php echo $__Context->lang_supported[$__Context->lang_type] ?></a>
				<div id="lang" class="tg_cnt"><button type="button" class="tg_blur"></button>
					<ul>
						<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){;
if($__Context->key!= $__Context->lang_type){ ?><li><a href="#" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false"><?php echo $__Context->val ?></a></li><?php }} ?>
					</ul><button type="button" class="tg_blur"></button>
				</div>
			</li>
		</ul>
		
		<div class="hgroup ui_font">
			<h1>
				<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if(!$__Context->layout_info->use_color && $__Context->val1['selected']){ ?><a href="<?php echo $__Context->val1['href'] ?>" class="on <?php $__Context->_idx = 0;
if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key => $__Context->val){;
if($__Context->val['selected']){;
echo $__Context->_colorset_list[$__Context->_idx];
};
$__Context->_idx++;
} ?>"><?php echo $__Context->val1['link'] ?></a><?php }} ?>
				<a href="<?php if($__Context->layout_info->index_url){;
echo $__Context->layout_info->index_url;
}else{;
echo getUrl('');
} ?>" class="home" style="position:relative;top:<?php echo $__Context->layout_info->img_y ?>px;left:<?php echo $__Context->layout_info->img_x ?>px"><?php if($__Context->layout_info->logo_image){ ?><img<?php if($__Context->layout_info->logo_image_mobile){ ?> class="m_no_inline"<?php } ?> src="<?php echo $__Context->layout_info->logo_image ?>" alt="<?php echo $__Context->layout_info->logo_text ?>" /><?php };
if($__Context->layout_info->logo_image_mobile){ ?><img src="<?php echo $__Context->layout_info->logo_image_mobile ?>" class="m_yes_inline" alt="<?php echo $__Context->layout_info->logo_text ?>" /><?php };
if(!$__Context->layout_info->logo_image){;
echo $__Context->layout_info->logo_text;
} ?></a>
			</h1>
		</div>
		
		<ul id="mid_mn" class="fr">
			<?php if($__Context->middle_menu->list&&count($__Context->middle_menu->list))foreach($__Context->middle_menu->list as $__Context->key=>$__Context->val){;
if($__Context->val['link']){ ?><li><a href="<?php echo $__Context->val['href'] ?>"<?php if($__Context->val['selected']){ ?> class="on"<?php };
if($__Context->val['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val['link'] ?></a></li><?php }} ?>
			<?php if($__Context->grant->manager){ ?><li><a href="<?php echo getUrl('','module','admin') ?>" target="_blank">Admin</a></li><?php } ?>
		</ul>
		
		<div id="gnb_wrp" class="clear">
			
			<div id="site_srch" class="srch">
				<form action="<?php echo getUrl() ?>" method="get"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
					<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
					<input type="hidden" name="act" value="IS" />
					<input type="text" name="is_keyword" value="<?php echo $__Context->is_keyword ?>" title="<?php echo $__Context->lang->cmd_search ?>" class="itx css3pie" accesskey="S" />
					<input type="image" src="/layouts/sketchbook/img/bs_<?php echo $__Context->layout_info->colorset ?>.png" alt="Search" class="is" />
				</form>
			</div>
			<!-- GNB -->
			<ul id="gnb" class="ui_font">
				<?php $__Context->_idx = 0 ?>
				<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li class="li1<?php if($__Context->_idx > 3){ ?> m_li1_tg<?php } ?>">
					<a class="a1 <?php echo $__Context->_colorset_list[$__Context->_idx];
if($__Context->val1['selected']){ ?> on<?php } ?>" href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
					<?php if($__Context->val1['list']){ ?>
					<button type="button" class="tg_ul2 m_yes_inline"><strong>&minus;</strong><span>+</span></button>
					<ul class="ul2">
						<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?><li class="li2<?php if($__Context->val2['selected']){ ?> on<?php } ?>">
							<a class="a2" href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'];
if($__Context->val2['list']){ ?><b>+</b><?php } ?></a>
							<?php if($__Context->val2['list']){ ?><ul class="ul3">
								<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?><li><a class="a3<?php if($__Context->val3['selected']){ ?> on<?php } ?>" href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a></li><?php }} ?>
							</ul><?php } ?>
						</li><?php }} ?>
						<li><button type="button" class="close_ul2 m_yes"><?php echo $__Context->lang->cmd_close ?></button></li>
					</ul>
					<?php } ?>
				<?php $__Context->_idx++ ?>
				</li><?php }} ?>
			</ul>
			<?php if($__Context->_idx > 4){ ?><div id="gnb_next" class="m_yes"><button type="button"><strong>◀</strong><span>▶</span></button>
<style type="text/css">
@media screen and (max-width:533px){
#gnb_wrp{padding-right:10px}
}
</style>
			</div><?php } ?>
		</div>
	</div>
	
	<?php if($__Context->layout_info->promotion){ ?><div id="promotion" class="clear"> <?php echo $__Context->layout_info->promotion ?> </div><?php } ?>
	
	<div id="container" class="clear">
		
		<?php if($__Context->layout_info->frame=='ec' || $__Context->layout_info->frame=='ece'){ ?><div id="snb">
			
			<div id="hidden_logo"><a href="<?php echo $__Context->layout_info->hiddenLogo_url ?>"><?php if(!$__Context->layout_info->hidden_logo){ ?><strong class="ui_font">Home</strong><?php };
if($__Context->layout_info->hidden_logo){ ?><img src="<?php echo $__Context->layout_info->hidden_logo ?>" alt="Logo" /><?php } ?></a></div>
			
			<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?><ul id="lnb" class="ui_font clear">
				<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?><li>
					<a class="lnb_2nd<?php if($__Context->val2['selected']){ ?> on<?php } ?>" href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
					<?php if($__Context->val2['list']){ ?><ul>
						<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?><li><a class="lnb_3rd<?php if($__Context->val3['selected']){ ?> on<?php } ?>" href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a>
						</li><?php }} ?>
					</ul><?php } ?>
				</li><?php }} ?>
			</ul><?php }} ?>
			
			<div id="page_move">
				<a class="back_to" href="#hd" onclick="return false" title="<?php echo $__Context->lang->cmd_move_up ?>">▲</a>
				<a class="back_to" href="#ft" onclick="return false" title="<?php echo $__Context->lang->cmd_move_down ?>">▼</a>
			</div>
		</div><?php } ?>
		
		<div id="content"<?php if($__Context->layout_info->frame=='ce' || $__Context->layout_info->frame=='ece'){ ?> style="max-width:<?php echo $__Context->layout_info->content_width ?>px"<?php } ?>><div id="gap"> <?php echo $__Context->content ?> </div></div>
		
		<?php if($__Context->layout_info->frame=='ce' || $__Context->layout_info->frame=='ece'){ ?><div id="aside">
			<?php if($__Context->layout_info->calendar=='Y'){ ?><div class="section calendar">
				<object type="application/x-shockwave-flash" data="http://www.uniqlo.com/calendar/swf/uqcal_bp_loader.swf?cID=KR&amp;aID=SEO" width="160" height="320" style="border:1px solid #DDD">
					<param name="movie" value="http://www.uniqlo.com/calendar/swf/uqcal_bp_loader.swf?cID=KR&amp;aID=SEO" />
					<param name="wmode" value="opaque" />
				</object>
			</div><?php } ?>
			<?php if($__Context->layout_info->clock=='Y'){ ?><div class="section clock">
				<object type="application/x-shockwave-flash" data="layouts/sketchbook5/clock.swf" width="200" height="200">
					<param name="movie" value="layouts/sketchbook5/clock.swf" />
					<param name="wmode" value="transparent" />
				</object>
			</div><?php } ?>
			
			<?php echo $__Context->layout_info->custom1_wgt ?>
			
			<?php if(!$__Context->layout_info->category && $__Context->module_info->use_category=='Y'){ ?><div class="section category">
				<h2><a href="<?php echo getUrl('category','','page','','document_srl','') ?>">This Category</a><b></b></h2>
				<div id="category" class="tNav">
					<?php  $__Context->pDepth = 0; ?>
					<ul>
					<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->key=>$__Context->val){ ?>
						<?php if($__Context->pDepth > $__Context->val->depth){ ?>
							<?php for($__Context->i=$__Context->val->depth; $__Context->i<$__Context->pDepth; $__Context->i++){ ?>
								</ul>
								</li>
							<?php } ?>
							<?php  $__Context->pDepth = $__Context->val->depth ?>
						<?php } ?>
						<li class="<?php if($__Context->category==$__Context->val->category_srl){ ?>active<?php };
if($__Context->val->expand){ ?> open<?php } ?>">
							<a href="<?php echo getUrl('document_srl','','category',$__Context->val->category_srl) ?>"><?php echo $__Context->val->text ?> <small>(<?php echo $__Context->val->document_count ?>)</small></a>
						<?php if($__Context->val->child_count){ ?>
							<?php $__Context->pDepth++ ?>
							<ul>
						<?php } ?>
						<?php if(!$__Context->val->child_count){ ?>
							</li>
						<?php } ?>
					<?php } ?>
					<?php for($__Context->i=0;$__Context->i<$__Context->pDepth;$__Context->i++){ ?>
						</ul>
					<?php } ?>
						</li>
					</ul>
				</div>
			</div><?php } ?>
			
			<?php if($__Context->layout_info->d_wgt){ ?><div class="section doc">
				<h2>Recent Articles<b></b></h2>
				<img class="zbxe_widget_output" widget="content" skin="default" content_type="document" module_srls="<?php echo $__Context->layout_info->d_wgt ?>" list_type="normal" markup_type="list" page_count="2" option_view="title,regdate,nickname" order_type="desc" subject_cut_size="40" />
			</div><?php } ?>
			
			<?php if($__Context->layout_info->c_wgt){ ?><div class="section cmt">
				<h2>Recent Comment<b></b></h2>
				<img class="zbxe_widget_output" widget="content" skin="default" content_type="comment" module_srls="<?php echo $__Context->layout_info->c_wgt ?>" list_type="normal" markup_type="list" page_count="2" option_view="title,regdate,nickname" order_type="desc" subject_cut_size="40" />
			</div><?php } ?>
			
			<?php if($__Context->layout_info->t_wgt){ ?><div class="section tag">
				<h2>Recent Tag<b></b></h2>
				<img class="zbxe_widget_output" widget="tag_list" skin="default" list_count="30" module_srls="<?php echo $__Context->layout_info->t_wgt ?>" />
			</div><?php } ?>
			
			<?php echo $__Context->layout_info->custom2_wgt ?>
		</div><?php } ?>
	</div>
	
	<div id="ft" class="ui_font clear">
		
		<?php if($__Context->bottom_menu->list || Mobile::isMobileCheckByAgent()){ ?><ul id="btm_mn">
			<li><a href="<?php echo getUrl() ?>"><strong>Home</strong></a></li>
			<?php if($__Context->bottom_menu->list&&count($__Context->bottom_menu->list))foreach($__Context->bottom_menu->list as $__Context->key=>$__Context->val){;
if($__Context->val['link']){ ?><li><a href="<?php echo $__Context->val['href'] ?>"<?php if($__Context->val['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val['link'] ?></a></li><?php }} ?>
			<li class="m_yes_inline"><a href="<?php echo getUrl('act','dispMenuMenu','menu_srl',$__Context->layout_info->menu->main_menu->menu_srl) ?>"><strong><?php echo $__Context->lang->cmd_view_all ?></strong></a></li>
			<li class="m_yes_inline"><a href="#"><strong>▲ <?php echo $__Context->lang->cmd_move_up ?></strong></a></li>
		</ul><?php } ?>
		<?php if($__Context->layout_info->address){ ?><p id="address"><?php echo $__Context->layout_info->address ?></p><?php } ?>
		<p id="maker"><?php if($__Context->layout_info->maker){;
echo $__Context->layout_info->maker;
}else{ ?><a href="http://www.xpressengine.com/" target="_blank">Powered by <strong>X</strong>press <strong>E</strong>ngine</a> / <a href="http://sketchbooks.co.kr/" target="_blank">Designed by Sketchbook</a><?php } ?></p>
	</div>
</div>
<div style="position:absolute;top:-999px;left:-999px;visibility:hidden;font-size:72px">
	<p id="fontcheck_ng1" style="float:left;font-family:'나눔고딕',NanumGothic,monospace,Verdana !important">sketchbook5, 스케치북5</p>
	<p id="fontcheck_ng2" style="float:left;font-family:monospace,Verdana !important">sketchbook5, 스케치북5</p>
</div>
<?php if(!$__Context->layout_info->layout_font){ ?><div id="install_ng"><button type="button" class="tg_blur"></button><button class="tg_close">X</button>
	<h3>나눔글꼴 설치 안내</h3><br />
	<h4>이 PC에는 <b>나눔글꼴</b>이 설치되어 있지 않습니다.</h4>
	<p>이 사이트를 <b>나눔글꼴</b>로 보기 위해서는<br /><b>나눔글꼴</b>을 설치해야 합니다.</p>
	<a class="do" href="http://hangeul.naver.com" target="_blank">설치</a>
	<a class="cancle close" href="#">취소</a><button type="button" class="tg_blur"></button>
</div><?php } ?>
<?php if(Mobile::isMobileCheckByAgent()){ ?>
<div>
	<?php if(!$__Context->_COOKIE['fakeM']){ ?><a class="m_yes" id="fakeM0" href="<?php echo getUrl('m',0) ?>"><?php echo $__Context->lang->pc ?></a><?php } ?>
	<?php if($__Context->_COOKIE['fakeM'] && !$__Context->layout_info->no_mobile){ ?><a id="fakeM1" href="<?php echo getUrl('m',1) ?>"><?php echo $__Context->lang->msg_pc_to_mobile ?></a><?php } ?>
</div>
<style type="text/css">
#page_move{display:none}
</style>
<?php }else{ ?>
<?php if($__Context->layout_info->static!='Y'){ ?><script type="text/javascript">
jQuery(function($){
	$('#lnb').css({position:'fixed'});
	$(window).scroll(function(){
		if($(this).scrollTop() > $('#hd').height()-33) {
			$('#hd').css('paddingTop',36).find('#gnb_wrp').css({position:'fixed',top:0,width:$('#xe').width()});
			$('#hidden_logo:hidden').fadeIn();
		} else {
			$('#hd').css('paddingTop',0).find('#gnb_wrp').css({position:'static',width:'auto'});
			$('#hidden_logo').hide();
		};
	});
});
</script><?php } ?>
<?php } ?>
<?php if(!$__Context->layout_info->no_mobile){ ?><script type="text/javascript">
jQuery(function($){
	$('#fakeM0').click(function(){
		$.cookie('fakeM',true)
	});
	$('#fakeM1').click(function(){
		$.cookie('fakeM',null)
	});
});
</script><?php } ?>