<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/kbfree/css/bootstrap.css--><?php $__tmp=array('layouts/kbfree/css/bootstrap.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/kbfree/css/style.css--><?php $__tmp=array('layouts/kbfree/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/kbfree/js/move-top.js--><?php $__tmp=array('layouts/kbfree/js/move-top.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/kbfree/js/easing.js--><?php $__tmp=array('layouts/kbfree/js/easing.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/kbfree/js/bootstrap.min.js--><?php $__tmp=array('layouts/kbfree/js/bootstrap.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<div class="header">
		<div class="container">
	<?php if($__Context->layout_info->header_menu == "yes"){ ?>
	  	<div class="header_top">
			<ul class="header_box">
				<?php if($__Context->is_logged){ ?>
					<li><a href="<?php echo getUrl('act','dispMemberInfo') ?>"><?php echo $__Context->logged_info->nick_name ?></a></li>
					<li><a href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
				<?php }else{ ?>
					<li><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
					<li><a href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?></a></li>
				<?php } ?>
				<?php if($__Context->logged_info->is_admin=="Y"){ ?>
					<li><a href="<?php echo getUrl('','module','admin') ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->lang->cmd_management ?></a></li>
				<?php } ?>
			</ul>
			<div class="clearfix"> </div>
		</div>
	<?php }else{ ?>
	<?php } ?>
	<div class="header_bottom">
	  <div class="container">
	  	<div class="logo">
	  	   <a href="<?php echo $__Context->layout_info->url_logo ?>"><img src="<?php echo $__Context->layout_info->img_logo ?>" alt="<?php echo $__Context->layout_info->text_logo ?>"/></a>
	  	</div>
	  	  <div class="menu">
	  	    <div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a><div class="nav_icon"><img src="/layouts/kbfree/images/nav_icon.png" alt=""/></div>
				<ul class="nav">
					<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>>
						<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
						<?php if($__Context->val1['list']){ ?><ul>
							<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>>
								<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
							</li><?php } ?>
						</ul><?php } ?>
					</li><?php } ?>
					<script type="text/javascript" src="/layouts/kbfree/js/nav.js"></script>
				</ul>
			</div><!-- end h_menu4 -->
            <div class="clearfix"> </div>
	  </div>
	  </div>
	</div>
	</div>
	</div>
	<?php if($__Context->layout_info->slider == "yes"){ ?>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php echo $__Context->layout_info->slider_image ?>" alt="slider">
				<div class="carousel-caption">
					<h1><?php echo $__Context->layout_info->slider_title ?></h1>
					<?php echo $__Context->layout_info->slider_content ?>
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="container" style="margin-top: 10px;margin-bottom: 10px;">
	<?php echo $__Context->content ?>
	</div>
       <div class="footer-bottom">
   	<div class="container">
   		<div class="copy">
		    <p><?php echo $__Context->layout_info->copyright ?></p>
		</div>
   	</div>
</div>