<?php if(!defined("__XE__"))exit;?>
<?php 
	Context::addHtmlHeader('<meta name="viewport" content="width=device-width, initial-scale=1">');
 ?>
<!--#Meta:layouts/stellar/css/main.css--><?php $__tmp=array('layouts/stellar/css/main.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/stellar/css/ie9.css--><?php $__tmp=array('layouts/stellar/css/ie9.css','','lte IE 9','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/stellar/css/ie8.css--><?php $__tmp=array('layouts/stellar/css/ie8.css','','lte IE 8','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/stellar/js/html5shiv.js--><?php $__tmp=array('layouts/stellar/js/html5shiv.js','','lte IE 8','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/stellar/js/jquery.scrollex.min.js--><?php $__tmp=array('layouts/stellar/js/jquery.scrollex.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/stellar/js/skel.min.js--><?php $__tmp=array('layouts/stellar/js/skel.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/stellar/js/util.js--><?php $__tmp=array('layouts/stellar/js/util.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/stellar/js/respond.min.js--><?php $__tmp=array('layouts/stellar/js/respond.min.js','body','lte IE 8','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/stellar/js/main.js--><?php $__tmp=array('layouts/stellar/js/main.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div id="wrapper">
	<header id="header" class="alt">
		<?php if($__Context->layout_info->header_logo){ ?><span class="logo">
			<img src="<?php echo $__Context->layout_info->header_logo ?>" alt="" />
		</span><?php } ?>
		<h1>
			<?php if($__Context->layout_info->header_title){ ?>
				<?php echo $__Context->layout_info->header_title ?>
			<?php }else{ ?>
				Stellar
			<?php } ?>
		</h1>
		<p>
			<?php if($__Context->layout_info->header_desc){ ?>
				<?php echo $__Context->layout_info->header_desc ?>
			<?php }else{ ?>
				Built by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a><br />
				Converted by <a href="http://www.wincomi.com">Wincomi</a> for <a href="http://xpressengine.com">XE</a>
			<?php } ?>
	</header>
	<nav id="nav">
		<ul<?php if($__Context->layout_info->nav_login != 'N' && $__Context->layout_info->nav_login != 'Y2'){ ?> class="pull-left"<?php } ?>>
			<?php if($__Context->global_menu->list&&count($__Context->global_menu->list))foreach($__Context->global_menu->list as $__Context->key1=>$__Context->val1){ ?><li>
				<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['selected']){ ?> class="active"<?php };
if($__Context->val1['open_window'] == 'Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
			</li><?php } ?>
		</ul>
		<?php if($__Context->layout_info->nav_login != 'N' && $__Context->layout_info->nav_login != 'Y2'){ ?><ul class="pull-right">
			<?php if(!$__Context->is_logged){ ?><li>
				<a href="<?php echo getUrl('', 'act', 'dispMemberLoginForm') ?>">
					<i class="fa fa-sign-in" area-hidden="true"></i> <?php echo $__Context->lang->cmd_login ?>
				</a>
			</li><?php } ?>
			<?php if($__Context->is_logged){ ?><li>
				<a href="<?php echo getUrl('', 'act', 'dispMemberLogout') ?>">
					<i class="fa fa-sign-out" area-hidden="true"></i> <?php echo $__Context->lang->cmd_logout ?>
				</a>
			</li><?php } ?>
			<?php if($__Context->logged_info->is_admin == 'Y'){ ?><li>
				<a href="<?php echo getUrl('','module','admin') ?>" target="_blank">
					<i class="fa fa-cog" area-hidden="true"></i> <?php echo $__Context->lang->cmd_management ?>
				</a>
			</li><?php } ?>
		</ul><?php } ?>
	</nav>
	<div id="main">
		<section id="content" class="main">
			<?php echo $__Context->content ?>
		</section>
	</div>
	<footer id="footer">
		<?php if($__Context->layout_info->nav_login=='Y2'){ ?><p class="footer-menu">
			<?php if(!$__Context->is_logged){ ?><a href="<?php echo getUrl('','act','dispMemberLoginForm') ?>">
				<i class="fa fa-sign-in" area-hidden="true"></i> <?php echo $__Context->lang->cmd_login ?>
			</a><?php } ?>
			<?php if($__Context->is_logged){ ?><a href="<?php echo getUrl('','act','dispMemberLogout') ?>">
				<i class="fa fa-sign-out" area-hidden="true"></i> <?php echo $__Context->lang->cmd_logout ?>
			</a><?php } ?>
			<?php if($__Context->logged_info->is_admin == 'Y'){ ?><a href="<?php echo getUrl('','module','admin') ?>" target="_blank">
				<i class="fa fa-cog" area-hidden="true"></i> <?php echo $__Context->lang->cmd_management ?>
			</a><?php } ?>
		</p><?php } ?>
		<?php if($__Context->layout_info->copyright){ ?><p class="copyright">
			<?php echo $__Context->layout_info->copyright ?>
		</p><?php } ?>
		<p class="copyright">
			Designed by <a href="https://html5up.net">HTML5 UP</a> | Converted by <a href="https://www.wincomi.com">Wincomi</a> for XE
		</p>
	</footer>
</div>
<?php if(!$__Context->layout_info->background_color || $__Context->layout_info->background_color != "default") { ?>
<style>
body {
	background-color: <?php echo $__Context->layout_info->background_color ?>;
	background-image: none;
}
</style>
<?php } ?>
