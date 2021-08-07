<?php if(!defined("__XE__"))exit;
if($__Context->layout_info->layoutThemes !== 'phizThemes'){ ?><!--#Meta:modules/board/m.skins/phiz_mboard/css/font-awesome.min.css--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/css/font-awesome.min.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->layout_info->layoutThemes !== 'phizThemes'){ ?><!--#Meta:modules/board/m.skins/phiz_mboard/css/phiz.global.css--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/css/phiz.global.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<!--#Meta:modules/board/m.skins/phiz_mboard/css/mboard.css--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/css/mboard.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/phiz_mboard/js/board.js--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/js/board.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/phiz_mboard/js/board.default.js--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/js/board.default.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/phiz_mboard/js/board.phiz.js--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/js/board.phiz.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->order_type == "desc"){ ?>
    <?php  $__Context->order_type = "asc";  ?>
<?php }else{ ?>
    <?php  $__Context->order_type = "desc";  ?>
<?php } ?>
<?php if(!$__Context->module_info->duration_new = (int)$__Context->module_info->duration_new){;
$__Context->module_info->duration_new = 12;
} ?>
<?php  $__Context->cate_list = array(); $__Context->current_key = null;  ?>
<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->key=>$__Context->val){ ?>
	<?php if(!$__Context->val->depth){ ?>
		<?php 
			$__Context->cate_list[$__Context->key] = $__Context->val;
			$__Context->cate_list[$__Context->key]->children = array();
			$__Context->current_key = $__Context->key;
		 ?>
	<?php }elseif($__Context->current_key){ ?>
		<?php  $__Context->cate_list[$__Context->current_key]->children[] = $__Context->val  ?>
	<?php } ?>
<?php } ?>
<div class="board docWrap">
<div class="docInner">
	<?php if($__Context->module_info->use_browser_title !== 'no'){ ?><div class="nrow">
		<div class="board-title">
			<h1><?php echo $__Context->module_info->browser_title ?></h1>
		</div>
	</div><?php } ?>
	<?php if($__Context->module_info->header_text){ ?><div class="nrow">
		<div class="board-header-text">
			<?php echo $__Context->module_info->header_text ?>
		</div>
	</div><?php } ?>
