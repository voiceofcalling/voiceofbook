<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/xdt_cool/css/layout.css--><?php $__tmp=array('layouts/xdt_cool/css/layout.css','','','');Context::loadFile($__tmp);unset($__tmp); ?> 
<!--#Meta:layouts/xdt_cool/js/layout.js--><?php $__tmp=array('layouts/xdt_cool/js/layout.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->layout_info->banner_style=="y"){ ?>
<!--#Meta:layouts/xdt_cool/js/slider.js--><?php $__tmp=array('layouts/xdt_cool/js/slider.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/xdt_cool/js/banner.js--><?php $__tmp=array('layouts/xdt_cool/js/banner.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/xdt_cool/css/slider.css--><?php $__tmp=array('layouts/xdt_cool/css/slider.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<div class="header">
   <div class="header_menu">
		<ul class="login">
				<?php if(!$__Context->is_logged){ ?>
					<li><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>">회원가입</a></li>
					<li><a href="#" onclick="jQuery('#loginWindow').css('display','block');" accesskey="L">로그인</a></li>
				<?php }else{ ?>
					<li><a href="<?php echo getUrl('act','dispMemberInfo') ?>">회원 정보</a></li>
					<li><a href="<?php echo getUrl('act','dispMemberLogout') ?>">로그아웃</a></li>
				<?php } ?>
		</ul>
	</div>
	<div class="menu">
		<div class="logo">
			<?php if($__Context->layout_info->header_logo_url){ ?>
				<a href="<?php echo $__Context->layout_info->header_logo_url ?>">
			<?php }else{ ?>
				<a href="/">
			<?php } ?>
			<?php if($__Context->layout_info->header_logo_image){ ?>
				<img src="<?php echo $__Context->layout_info->header_logo_image ?>" alt="<?php echo $__Context->layout_info->header_logo_url ?>" class="iePngFix" /></a>
			<?php }else{ ?>
				<img src="/layouts/xdt_cool/img/nologo.png" alt="logo here" class="iePngFix" /></a>
			<?php } ?>
		</div>
		<div id="gnb_menu">
			<ul class="gnb_ul">
				<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>>
					<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
					<?php if($__Context->val1['list']){ ?><ul class="sub">
						<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>>
							<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
						</li><?php } ?>
					</ul><?php } ?>
				</li><?php } ?>
			</ul>
		</div>
	</div>
</div>
    <?php if($__Context->layout_info->banner_style=="y"){ ?>
    <div id="xdtbanner" class="xdtslider">
       <ul>
          <li>
             <img src="<?php echo $__Context->layout_info->banner_image_1 ?>" />
             <?php if($__Context->layout_info->banner_ctext1=="y"){ ?>
             <div class="slide-desc">
		        <h2><?php echo $__Context->layout_info->banner_ttext1 ?></h2>
		        <p><?php echo $__Context->layout_info->banner_text1 ?></p>
             </div>
             <?php } ?>
          </li>
          <li>
			 <img src="<?php echo $__Context->layout_info->banner_image_2 ?>" />
			 <?php if($__Context->layout_info->banner_ctext2=="y"){ ?>
             <div class="slide-desc">
		        <h2><?php echo $__Context->layout_info->banner_ttext2 ?></h2>
		        <p><?php echo $__Context->layout_info->banner_text2 ?></p>
             </div>
             <?php } ?>
          </li>
          <li>
		     <img src="<?php echo $__Context->layout_info->banner_image_3 ?>" />
			 <?php if($__Context->layout_info->banner_ctext3=="y"){ ?>
             <div class="slide-desc">
		        <h2><?php echo $__Context->layout_info->banner_ttext3 ?></h2>
		        <p><?php echo $__Context->layout_info->banner_text3 ?></p>
             </div>
             <?php } ?>
          </li>
          <li>
		     <img src="<?php echo $__Context->layout_info->banner_image_4 ?>" />
			 <?php if($__Context->layout_info->banner_ctext4=="y"){ ?>
             <div class="slide-desc">
		        <h2><?php echo $__Context->layout_info->banner_ttext4 ?></h2>
		        <p><?php echo $__Context->layout_info->banner_text4 ?></p>
             </div>
             <?php } ?>
          </li>
	   </ul>
    </div>
	<?php } ?>
<div id="doc">
	<?php if($__Context->layout_info->body_style=="sub"){ ?>
	<div class="xdt_page2">
		<div class="xdt_sub">
			<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?><div class="xdt_sub_top">
				<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
			</div><?php }} ?>
			<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?><ul class="locNav">
				<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
					<?php if($__Context->val2['list']){ ?><ul>
						<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li<?php if($__Context->val3['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a></li><?php } ?>
					</ul><?php } ?>
				</li><?php } ?>
			</ul><?php }} ?>
		</div>
		<div class="page2">
			<?php echo $__Context->content ?>
		</div>
		<div class="clear"></div>
	</div>
    <?php }elseif($__Context->layout_info->body_style=="main"){ ?>
	<div class="xdt_page">
		<div class="page1">
			<?php echo $__Context->content ?>
		</div>
	</div>
	<?php } ?>
</div>
<div class="footer">
	<p class="copy">
    <?php echo $__Context->layout_info->footer_copy ?> 	
    </p>
    <ul class="menu">
	<?php if($__Context->footer_menu->list&&count($__Context->footer_menu->list))foreach($__Context->footer_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a></li><?php } ?>
    </ul>
</div>
<?php if(!$__Context->is_logged){ ?>
    <?php  $__Context->member_config = MemberModel::getMemberConfig();  ?>
    <?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('layouts/xdt_cool/filter','login.xml');$__xmlFilter->compile(); ?>
    <?php if($__Context->member_config->enable_openid=='Y'){;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('layouts/xdt_cool/filter','openid_login.xml');$__xmlFilter->compile();
} ?>
    <!-- loginWindow -->
    <div id="loginWindow" class="loginWindow">
    <!-- class="loginWindow" | class="loginWindow open" -->
        <span class="modalWindow"></span>
		<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
			<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
		</div><?php } ?>
        <div id="loginLayer" class="loginLayer loginTypeA">
        <!-- class="loginLayer loginTypeA" | class="loginLayer loginTypeB" -->
            <button type="button" class="close" onclick="document.getElementById('loginWindow').style.display='none'" accesskey="X"><span>Close Login Layer</span></button>
            <?php Context::addJsFile("./files/ruleset/login.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="" method="post" class="typeA" id="commonLogin"  ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@login" />
				<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
				<input type="hidden" name="act" value="procMemberLogin" />
                <fieldset>
                    <legend>XE Login</legend>
                    <dl>
                        <dt><label for="uid">로그인 [Sign In]</label></dt>
                        <dd><input name="user_id" type="text" class="inputuid" id="uid" /></dd>
                        <dd><input name="password" type="password" class="inputupw" id="upw" /><span class="loginButton"><input type="submit" value="<?php echo $__Context->lang->cmd_login ?>" /></span></dd>
                    </dl>
					<p class="keep">
					<input name="keep_signed" type="checkbox" id="keepA" value="Y" class="inputCheck" onclick="if(this.checked) return confirm('<?php echo $__Context->lang->about_keep_signed ?>');"/>
					<label for="keepA"><?php echo $__Context->lang->keep_signed ?></label>
				    </p>
                </fieldset>
            </form>
			<div class="help">
				<ol>
				<li><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>">회원가입</a></li>
				<li><a href="<?php echo getUrl('act','dispMemberFindAccount') ?>">아이디,비밀번호 찾기</a></li>
				<li><a href="<?php echo getUrl('act','dispMemberResendAuthMail') ?>">인증 메일 재발송</a></li>
				</ol>
			</div>
            <button type="button" class="close" onclick="document.getElementById('loginWindow').style.display='none'" accesskey="X"><span>Close Login Layer</span></button>
        </div>
    </div>
    <!-- /loginWindow -->
<?php } ?>