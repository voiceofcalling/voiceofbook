<?php if(!defined("__XE__"))exit;
$__Context->oModuleAdminModel = &getAdminModel('module');
	$__Context->skin_content = $__Context->oModuleAdminModel->getModuleSkinHTML($__Context->module_info->module_srl);
 ?>
<div id="bd_wizard" <?php if($__Context->grant->manager){ ?> class="<?php echo $__Context->_COOKIE['bd_wizard_cookie'] ?>"<?php }else{ ?> class="<?php echo $__Context->_COOKIE['bd_wizard_cookie'] ?> barrier" title="관리자만 설정할 수 있습니다."<?php };
if($__Context->_COOKIE['bd_wizard_cookie']=='open'){ ?> style="left:0"<?php } ?>>
	<button type="button" id="bd_wizard_tg" class="ngeb bd_btn" title="<?php echo $__Context->lang->cmd_setup ?> <?php echo $__Context->lang->cmd_open ?>/<?php echo $__Context->lang->cmd_close ?>"><i class="fa fa-cog"></i><b class="blind">Open/Close</b></button>
	<h1 class="ui_font">게시판 설정</h1>
	<div id="bd_wizard_scroll">
<?php echo $__Context->skin_content ?>
	</div>
</div>
<script>
jQuery(function($){
	var v = $('#bd_wizard');
	$('body').append(v);
	v.find('#bd_wizard_tg,#bd_wizard .tg_close2').click(function(){
		if(v.hasClass('open')){
			v.animate({left:-480},{duration:500,complete:function(){
				jQuery(this).removeClass('open');
			},step:null,queue:false});
			jQuery.removeCookie('bd_wizard_cookie');
		} else {
			v.animate({left:0},{duration:350}).addClass('open');
			jQuery.cookie('bd_wizard_cookie','open');
		};
	});
	setTimeout("jQuery('#bd_wizard .message').fadeOut()",1500);
	v.find('form>.section').eq(0).remove();
	v.find('form>.section').eq(0).hide();
	v.find('form>.section').eq(1).addClass('on');
	v.find('form>.section>h2').click(function(){
		var p = $(this).parent();
		if(p.hasClass('on')){
			p.removeClass('on');
		} else {
			p.addClass('on').siblings().removeClass('on');
		};
	});
	v.find('a.x_icon-question-sign').click(function(){
		v.find('p.x_help-block:visible').hide();
		$(this).next('p').show();
		return false;
	});
});
</script>