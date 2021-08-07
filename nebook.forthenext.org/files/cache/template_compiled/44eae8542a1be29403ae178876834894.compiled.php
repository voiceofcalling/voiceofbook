<?php if(!defined("__XE__"))exit;
$__Context->member_config = MemberModel::getMemberConfig();
	$__Context->identifierForm->name = $__Context->member_config->identifier;
 ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('layouts/sketchbook/filter','login.xml');$__xmlFilter->compile(); ?>
<button type="button" class="tg_blur"></button>
<h2><?php if($__Context->identifierForm->name=='email_address'){;
echo $__Context->lang->email ?> <?php };
echo $__Context->lang->cmd_login ?></h2>
<?php Context::addJsFile("./files/ruleset/login.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" method="post" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@login" />
	<fieldset>
		<input type="hidden" name="act" value="procMemberLogin" />
		<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
		<div class="itx_area">
			<span class="itx_wrp">
				<label for="uid"><?php if($__Context->identifierForm->name=='email_address'){;
echo $__Context->lang->email;
}else{;
echo $__Context->lang->user_id;
} ?></label>
				<input type="text" name="user_id" id="uid" class="itx" />
			</span>
			<span class="itx_wrp">
				<label for="upw"><?php echo $__Context->lang->password ?></label>
				<input type="password" name="password" id="upw" class="itx" />
			</span>
		</div>
		<div class="btn_area">
			<span class="keep">
				<input type="checkbox" name="keep_signed" id="keepid_opt" value="Y" onclick="if(this.checked) return confirm('<?php echo $__Context->lang->about_keep_signed ?>');" />
				<label for="keepid_opt"><?php echo $__Context->lang->keep_signed ?></label>
			</span>
			<span><input type="submit" value="<?php echo $__Context->lang->cmd_login ?>" class="login_btn" /></span>
		</div>
		<div class="help">
			<a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>" class="join"><strong><?php echo $__Context->lang->cmd_signup ?></strong></a> | <a href="<?php echo getUrl('act','dispMemberFindAccount') ?>" class="find"><?php echo $__Context->lang->cmd_find_member_account ?></a> | <a href="<?php echo getUrl('act','dispMemberResendAuthMail') ?>" class="find"><?php echo $__Context->lang->cmd_resend_auth_mail ?></a>
		</div>
	</fieldset>
</form>
<?php if($__Context->layout_info->sns){ ?><div class="snsLogin">
	<h2><?php echo $__Context->lang->social ?> <?php echo $__Context->lang->cmd_login ?></h2>
	<?php if(!$__Context->layout_info->sns_facebook){ ?><a class="facebook" href="<?php echo getSiteUrl($__Context->domain,'', 'mid', $__Context->mid, 'vid', $__Context->vid, 'act', 'dispSocialxeLogin', 'provider', facebook, 'mode', 'socialLogin') ?>" title="Facebook 계정으로 로그인합니다"><span class="blind">Facebook</span></a><?php } ?>
	<?php if(!$__Context->layout_info->sns_twitter){ ?><a href="<?php echo getSiteUrl($__Context->domain,'', 'mid', $__Context->mid, 'vid', $__Context->vid, 'act', 'dispSocialxeLogin', 'provider', twitter, 'mode', 'socialLogin') ?>" title="Twitter 계정으로 로그인합니다"><span class="blind">Twitter</span></a><?php } ?>
	<?php if(!$__Context->layout_info->sns_me2day){ ?><a class="me2day" href="<?php echo getSiteUrl($__Context->domain,'', 'mid', $__Context->mid, 'vid', $__Context->vid, 'act', 'dispSocialxeLogin', 'provider', me2day, 'mode', 'socialLogin') ?>" title="Me2day 계정으로 로그인합니다"><span class="blind">Me2day</span></a><?php } ?>
	<?php if(!$__Context->layout_info->sns_yozm){ ?><a class="yozm" href="<?php echo getSiteUrl($__Context->domain,'', 'mid', $__Context->mid, 'vid', $__Context->vid, 'act', 'dispSocialxeLogin', 'provider', yozm, 'mode', 'socialLogin') ?>" title="Yozm 계정으로 로그인합니다"><span class="blind">Yozm</span></a><?php } ?>
</div><?php } ?>
<button type="button" class="tg_blur"></button>
<button type="button" class="tg_close" title="Close this layer">X</button>