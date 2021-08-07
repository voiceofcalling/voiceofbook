<?php if(!defined("__XE__"))exit;
if(!$__Context->module_info->header_image) $__Context->module_info->header_image = 'no';  ?>
<?php if($__Context->module_info->header_image == 'no'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','_read_default.html');
} ?>
<?php if($__Context->module_info->header_image == 'yes'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','_read_image.html');
} ?>
