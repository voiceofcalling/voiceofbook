<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_header.html') ?>
<h1><?php echo $__Context->lang->cmd_resend_auth_mail ?></h1>
<p><?php echo $__Context->lang->about_resend_auth_mail ?></p>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/skins/default/resend_auth_mail/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/member/ruleset/resendAuthMail.xml", FALSE, "", 0, "body", TRUE, "") ?><form  class="form" action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="resendAuthMail" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="act" value="procMemberResendAuthMail" />
	<input type="hidden" name="xe_validator_id" value="modules/member/skins/default/resend_auth_mail/1" />
	<div class="input-append">
		<input type="text"  id="email_address" name="email_address" value="" title="<?php echo $__Context->lang->email_address ?>" placeholder="<?php echo $__Context->lang->email_address ?>" /> 
		<input type="submit" id="resend_button" name="" value="<?php echo $__Context->lang->cmd_resend_auth_mail ?>" class="btn btn-inverse" />
	</div>
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_footer.html') ?>
