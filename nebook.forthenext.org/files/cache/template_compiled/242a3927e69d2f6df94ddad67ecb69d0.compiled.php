<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_header.html') ?>
<!--#Meta:modules/member/tpl/js/signup_check.js--><?php $__tmp=array('modules/member/tpl/js/signup_check.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#JSPLUGIN:ui--><?php Context::loadJavascriptPlugin('ui'); ?>
<!--#JSPLUGIN:ui.datepicker--><?php Context::loadJavascriptPlugin('ui.datepicker'); ?>
<h1 style="border-bottom:1px solid #ccc"><?php echo $__Context->lang->msg_update_member ?></h1>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/skins/default/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<script>
	xe.lang.deleteProfileImage = '<?php echo $__Context->lang->msg_delete_extend_form ?>';
	xe.lang.deleteImageMark = '<?php echo $__Context->lang->msg_delete_extend_form ?>';
	xe.lang.deleteImageName = '<?php echo $__Context->lang->msg_delete_extend_form ?>';
</script>
<?php Context::addJsFile("./files/ruleset/insertMember.xml", FALSE, "", 0, "body", TRUE, "") ?><form  id="fo_insert_member" action="./" method="post" enctype="multipart/form-data" class="form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@insertMember" />
    <input type="hidden" name="act" value="procMemberModifyInfo" />
    <input type="hidden" name="module" value="member" />
    <input type="hidden" name="member_srl" value="<?php echo $__Context->member_info->member_srl ?>" />
    <input type="hidden" name="signature" value="<?php echo htmlspecialchars($__Context->member_info->signature, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
    <input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/member/skins/default/1" />
	<div class="control-group">
		<label for="<?php echo $__Context->identifierForm->name ?>" class="control-label"><?php echo $__Context->identifierForm->title ?> <em style="color:red">*</em></label>
		<div class="controls">
			<input type="hidden" name="<?php echo $__Context->identifierForm->name ?>" value="<?php echo $__Context->identifierForm->value ?>" />
			<input type="text" name="<?php echo $__Context->identifierForm->name ?>" id="<?php echo $__Context->identifierForm->name ?>" value="<?php echo $__Context->identifierForm->value ?>" disabled="disabled" />
		</div>
	</div>
	<?php if($__Context->formTags&&count($__Context->formTags))foreach($__Context->formTags as $__Context->formTag){ ?><div class="control-group">
		<label for="<?php echo $__Context->formTag->name ?>" class="control-label"><?php echo $__Context->formTag->title ?></label>
		<?php if($__Context->formTag->name != 'signature'){ ?><div class="controls"><?php echo $__Context->formTag->inputTag ?></div><?php } ?>
		<?php if($__Context->formTag->name =='signature'){ ?><div class="controls">
			<?php echo $__Context->editor ?>
<style scoped>
.xpress-editor>#smart_content,
.xpress-editor>#smart_content>.tool{clear:none}
</style>
		</div><?php } ?>
	</div><?php } ?>
	<div class="control-group">
		<div class="control-label"><?php echo $__Context->lang->allow_mailing ?></div>
		<div class="controls" style="padding-top:5px">
			<label for="mailingYes"><input type="radio" name="allow_mailing" id="mailingYes" value="Y"<?php if($__Context->member_info->allow_mailing == 'Y'){ ?> checked="checked"<?php } ?>> <?php echo $__Context->lang->cmd_yes ?></label>
			<label for="mailingNo"><input type="radio" name="allow_mailing" id="mailingNo" value="N"<?php if($__Context->member_info->allow_mailing != 'Y'){ ?> checked="checked"<?php } ?> > <?php echo $__Context->lang->cmd_no ?></label>
		</div>
	</div>
	<div class="control-group">
		<div class="control-label"><?php echo $__Context->lang->allow_message ?></div>
		<div class="controls" style="padding-top:5px">
			<?php if($__Context->lang->allow_message_type&&count($__Context->lang->allow_message_type))foreach($__Context->lang->allow_message_type as $__Context->key=>$__Context->val){ ?><label for="allow_<?php echo $__Context->key ?>"><input type="radio" name="allow_message" value="<?php echo $__Context->key ?>"<?php if($__Context->member_info->allow_message == $__Context->key){ ?> checked="checked"<?php } ?> id="allow_<?php echo $__Context->key ?>" /> <?php echo $__Context->val ?></label><?php } ?>
		</div>
	</div>
	<div class="btnArea" style="border-top:1px solid #ccc;padding-top:10px">
		<input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" class="btn btn-inverse pull-right" />
		<a href="<?php echo getUrl('act','dispMemberInfo','member_srl','') ?>" class="btn pull-left"><?php echo $__Context->lang->cmd_cancel ?></a>
	</div>
</form>
<script>
jQuery(function($){
	// label for setup
	$('.control-label[for]').each(function(){
		var $this = $(this);
		if($this.attr('for') == ''){
			$this.attr('for', $this.next().children(':visible:first').attr('id'));
		}
	});
});
(function($){
    $(function(){
        var option = { changeMonth: true, changeYear: true, gotoCurrent: false,yearRange:'-100:+10', dateFormat:'yy-mm-dd', onSelect:function(){
            $(this).prev('input[type="hidden"]').val(this.value.replace(/-/g,""))}
        };
        $.extend(option,$.datepicker.regional['<?php echo $__Context->lang_type ?>']);
        $(".inputDate").datepicker(option);
		$(".dateRemover").click(function() {
			$(this).prevAll('input').val('');
			return false;});
    });
})(jQuery);
</script>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_footer.html') ?>
