<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/document/tpl/js/document_admin.js--><?php $__tmp=array('modules/document/tpl/js/document_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1><?php echo $__Context->lang->document ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_content_document" target="_blank"><?php echo $__Context->lang->help ?></a></h1>
</div>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/document/tpl/document_list/1'){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
	<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
</div><?php } ?>
<h1><?php echo $__Context->lang->document ?> <?php echo $__Context->lang->cmd_management ?></h1>
<ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispDocumentAdminList'){ ?> class="x_active"<?php } ?>><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminList'), false) ?>"><?php echo $__Context->lang->document_list ?></a></li>
	<li<?php if($__Context->act=='dispDocumentAdminConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminConfig'), false) ?>"><?php echo $__Context->lang->cmd_document_config ?></a></li>
	<li<?php if($__Context->act=='dispDocumentAdminDeclared'){ ?> class="x_active"<?php } ?>><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminDeclared'), false) ?>"><?php echo $__Context->lang->cmd_declared_list ?></a></li>
</ul>
