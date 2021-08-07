<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','_header.html') ?>
<?php if($__Context->oDocument->isExists()){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','_read.html') ?>
<?php } ?>
<?php if(!$__Context->oDocument->isExists() || ($__Context->oDocument->isExists() && $__Context->module_info->board_list == 'yes')){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','include_list_config.html') ?>
<?php if($__Context->module_info->default_style == 'list'){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list.list.html') ?>
<?php }elseif($__Context->module_info->default_style == 'zine1_default'){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list.zine1_default.html') ?>
<?php }elseif($__Context->module_info->default_style == 'zine1_infinite'){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list.zine1_infinite.html') ?>
<?php }elseif($__Context->module_info->default_style == 'gallery_default'){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list.gallery_default.html') ?>
 <?php }elseif($__Context->module_info->default_style == 'gallery_msnry'){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list.gallery_msnry.html') ?>
 <?php }elseif($__Context->module_info->default_style == 'gallery_infinite'){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list.gallery_infinite.html') ?>
<?php }elseif($__Context->module_info->default_style == 'gallery_lightbox'){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list.gallery_lightbox.html') ?>
<?php }elseif($__Context->module_info->default_style == 'gallery_slide'){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list.gallery_slide.html') ?>
<?php }elseif($__Context->module_info->default_style == 'card_default'){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list.card_default.html') ?>
<?php }elseif($__Context->module_info->default_style == 'card_msnry'){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list.card_msnry.html') ?>
<?php }elseif($__Context->module_info->default_style == 'card_infinite'){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list.card_infinite.html') ?>
<?php }else{ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list.list.html') ?>
<?php } ?>
<?php } ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','_footer.html') ?>
