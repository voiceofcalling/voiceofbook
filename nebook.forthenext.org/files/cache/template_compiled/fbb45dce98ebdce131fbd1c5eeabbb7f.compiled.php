<?php if(!defined("__XE__"))exit;
Context::addHtmlHeader('<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">');
Context::addHtmlHeader('<meta name="format-detection" content="telephone=no" />');
Context::addHtmlHeader('<meta name="apple-mobile-web-app-capable" content="yes" />');
 ?>
<!--#Meta:m.layouts/phizMobileThemes/fonts/font-awesome/css/font-awesome.min.css--><?php $__tmp=array('m.layouts/phizMobileThemes/fonts/font-awesome/css/font-awesome.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:m.layouts/phizMobileThemes/css/style.css--><?php $__tmp=array('m.layouts/phizMobileThemes/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:common/js/jquery.min.js--><?php $__tmp=array('common/js/jquery.min.js','','','-100006');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:common/js/x.min.js--><?php $__tmp=array('common/js/x.min.js','','','-100000');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:common/js/xe.min.js--><?php $__tmp=array('common/js/xe.min.js','','','-100000');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:m.layouts/phizMobileThemes/js/js.js--><?php $__tmp=array('m.layouts/phizMobileThemes/js/js.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:m.layouts/phizMobileThemes/js/custom.js--><?php $__tmp=array('m.layouts/phizMobileThemes/js/custom.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->layout_info->editor_tool == 'no'){ ?>
<style>
.xpress-editor .tool {display: none;}
</style>
<?php } ?>
<div class="page">
<?php 
if (!$__Context->layout_info->header_bg) $__Context->header_bg = 'f-header-inverse';
if ($__Context->layout_info->header_bg) $__Context->header_bg = 'f-header-'.$__Context->layout_info->header_bg;
if (!$__Context->layout_info->brand_color) $__Context->brand_color = 'brand-color-danger';
if ($__Context->layout_info->brand_color) $__Context->brand_color = 'brand-color-'.$__Context->layout_info->brand_color;
 ?>
<div id="header" class="header <?php echo $__Context->header_bg ?>">
	<a class="mmenu" href="#menu"></a>
	<?php if($__Context->layout_info->logo_image){ ?><a class="mlogo" href="<?php echo $__Context->layout_info->index_url ?>"><img src="<?php echo $__Context->layout_info->logo_image ?>"<?php if($__Context->layout_info->logo_text){ ?> alt="<?php echo $__Context->layout_info->logo_text ?>"<?php };
if(!$__Context->layout_info->logo_text){ ?> alt="logo"<?php } ?> /></a><?php }else{ ?><a class="mlogo <?php echo $__Context->brand_color ?>" href="<?php echo $__Context->layout_info->index_url ?>"><?php echo $__Context->layout_info->logo_text ?></a><?php } ?>
	<a href="#menu-right" class="friends right"></a>
</div>
<?php if($__Context->layout_info->mainPage == 'yes'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('m.layouts/phizMobileThemes','mainpage.html');
} ?>
	
	<div class="content" id="content">
	<?php echo $__Context->content ?>
	</div>
<?php if($__Context->layout_info->footer_copyright){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('m.layouts/phizMobileThemes/phiz_themes/footer','footer.html');
} ?>
<?php if($__Context->layout_info->footer_info){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('m.layouts/phizMobileThemes/phiz_themes/footer','footerInfo.html');
} ?>
<nav id="menu">
	<ul>
		<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
			<?php if($__Context->val1['list']){ ?><ul>
				<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
					<?php if($__Context->val2['list']){ ?><ul>
						<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li<?php if($__Context->val3['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a></li><?php } ?>
					</ul><?php } ?>
				</li><?php } ?>
			</ul><?php } ?>
		</li><?php } ?>
		<li class="phiz-license"><a href="http://phiz.kr/" target="_blank">by phiz</a></li>
	</ul>
</nav>
<nav id="menu-right">
	<ul>
		<?php if(!$__Context->is_logged){ ?><li><a href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><i class="fa fa-key"></i>&nbsp;<?php echo $__Context->lang->cmd_login ?></a></li><?php } ?>
		<?php if(!$__Context->is_logged){ ?><li><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><i class="fa fa-sign-in"></i>&nbsp;<?php echo $__Context->lang->cmd_signup ?></a></li><?php } ?>
		<?php if(!$__Context->is_logged){ ?><li><a href="<?php echo getUrl('act','dispMemberFindAccount') ?>"><i class="fa fa-question-circle"></i>&nbsp;<?php echo $__Context->lang->cmd_find_member_account ?></a></li><?php } ?>
		<?php if($__Context->is_logged){ ?>
		<li><a href="<?php echo getUrl('act','dispMemberInfo','member_srl','') ?>"><i class="fa fa-user"></i>&nbsp;<?php echo $__Context->logged_info->nick_name ?>님</a></li>
		<li><a href="<?php echo getUrl('act','dispMemberLogout') ?>"><i class="fa fa-sign-out"></i>&nbsp;<?php echo $__Context->lang->cmd_logout ?></a></li>
		<?php if($__Context->logged_info->is_admin=="Y" && !$__Context->site_module_info->site_srl){ ?>
		<li><a href="<?php echo getUrl('','module','admin') ?>" onclick="window.open(this.href);return false;"><i class="fa fa-cog"></i>&nbsp;<?php echo $__Context->lang->cmd_management ?></a></li>
		<?php } ?>
		<li><a href="<?php echo getUrl('act','dispMemberInfo','member_srl','') ?>"><i class="fa fa-info-circle"></i>&nbsp;<?php echo $__Context->lang->cmd_view_member_info ?></a></li>
		<?php if($__Context->layout_info->message == 'yes'){ ?><li><a href="<?php echo getUrl('act','dispCommunicationMessages','member_srl','') ?>"><i class="fa fa-check-square-o"></i>&nbsp;<?php echo $__Context->lang->cmd_view_message_box ?></a></li><?php } ?>
		<?php } ?>
		<li><a href="<?php echo getUrl('m',0) ?>"><i class="fa fa-desktop"></i>&nbsp;PC화면으로 보기</a></li>
		<?php if(count($__Context->lang_supported)>1){ ?><li><a href="<?php echo getUrl('act','dispModuleChangeLang','oldact',$__Context->act) ?>">LANG</a></li><?php } ?>
	</ul>
</nav>
	<p id="back-top">
		<a href="#top"><span></span></a>
	</p>
</div>