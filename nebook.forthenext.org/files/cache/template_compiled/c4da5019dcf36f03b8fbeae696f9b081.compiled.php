<?php if(!defined("__XE__"))exit;
if (!$__Context->module_info->thumbnail_width)  $__Context->module_info->thumbnail_width  = 256;
	if (!$__Context->module_info->thumbnail_height) $__Context->module_info->thumbnail_height = 256;
	if (!$__Context->module_info->thumbnail_type) $__Context->module_info->thumbnail_type = 'ratio';
	if (!$__Context->module_info->content_cut_size) $__Context->module_info->content_cut_size = 240;
	if (!$__Context->module_info->col_spacing) $__Context->col_spacing = 0;
	if ($__Context->module_info->col_spacing) $__Context->col_spacing = $__Context->module_info->col_spacing;
	if (!$__Context->module_info->content_height) $__Context->content_height = 'auto';
	//if ($__Context->module_info->content_height) $__Context->content_height = $__Context->module_info->content_height.px;
 ?>
<!--#Meta:modules/board/m.skins/phiz_mboard/css/lightbox.css--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/css/lightbox.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/phiz_mboard/js/lightbox.js--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/js/lightbox.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/phiz_mboard/js/imagesloaded.pkgd.min.js--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/js/imagesloaded.pkgd.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/phiz_mboard/js/masonry.pkgd.min.js--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/js/masonry.pkgd.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<style>
.item-lightbox{margin-bottom:<?php echo $__Context->col_spacing ?>px;  width:<?php echo $__Context->module_info->thumbnail_width ?>px; height:<?php echo $__Context->module_info->thumbnail_height ?>px;
}
.dummy {}
</style>
<?php if(Mobile::isMobileCheckByAgent()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list_btn_top_default.html');
} ?>
<?php if($__Context->module_info->use_category=='Y'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','include_category.html');
} ?>
<div class="nrow board_list gallery1_list m-form" id="gallery1_list">
	<?php if(!$__Context->document_list && !$__Context->notice_list){ ?><div class="nodoc">
		<p style="text-align:center"><?php echo $__Context->lang->no_documents ?></p>
	</div><?php } ?>
	<?php if($__Context->grant->manager){ ?><div class="post-check">
		<span class="allcheck">
		<input type="checkbox" onclick="XE.checkboxToggleAll({ doClick:true });" id="btCheck" title="Check All" />
		<label for="btCheck">Check All</label>
		</span>
	</div><?php } ?>
	<?php if($__Context->document_list || $__Context->notice_list){ ?><div id="container-lightbox" class="js-masonry centered">
		<?php if($__Context->document_list){ ?>
		<!-- //LIST -->
		<?php  $__Context->bCheck_item = 0;  ?>
		<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?>
			<?php if($__Context->list_config['thumbnail'] && $__Context->document->thumbnailExists($__Context->module_info->thumbnail_width, $__Context->module_info->thumbnail_height, $__Context->module_info->thumbnail_type)){ ?>
<!-- // Find an iamge file among attached files if exists -->
<?php if($__Context->document->hasUploadedFiles()){ ?>
	<?php  $__Context->uploaded_list = $__Context->document->getUploadedFiles();$__Context->file_idx = 0; ?>
	<?php if($__Context->uploaded_list&&count($__Context->uploaded_list))foreach($__Context->uploaded_list as $__Context->key =>$__Context->file){ ?>
		<?php if($__Context->file->direct_download !== 'Y'){;
continue;
} ?>
		<?php if($__Context->file->cover_image === 'Y' && file_exists($__Context->file->uploaded_filename)){ ?>
			<?php  $__Context->source_file = $__Context->file->uploaded_filename;break; ?>
		<?php } ?>
		<?php if(preg_match("/\.(jpe?g|png|gif|bmp)$/i", $__Context->file->source_filename) && $__Context->file_idx == 0){ ?>
			<?php  $__Context->file_url = $__Context->file->uploaded_filename;$__Context->file_idx++; ?>
		<?php } ?>
	<?php } ?>
<?php } ?>
			<div class="item-lightbox">
				<a href="<?php echo $__Context->file_url ?>" data-lightbox="imageset" data-title="<?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?>">
					<img src="<?php echo $__Context->document->getThumbnail($__Context->module_info->thumbnail_width, $__Context->module_info->thumbnail_height, $__Context->module_info->thumbnail_type) ?>" alt="<?php echo $__Context->document->getTitleText() ?>" />
				</a>
				<?php if($__Context->grant->manager){ ?><span class="check" style="position:absolute;top:0;right:0;"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" id="bCheck_item<?php echo $__Context->bCheck_item ?>" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><label for="bCheck_item<?php echo $__Context->bCheck_item ?>"></label></span><?php } ?>
			</div>
				<?php  $__Context->bCheck_item++ ?>
			<?php } ?>
		<?php } ?>
		<!-- ///LIST -->
		<?php } ?>
	</div><?php } ?>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','include_list_footer.html') ?>
<script>
// list lightbox
jQuery(document).ready(function($){
    var $container_lightbox = $('#container-lightbox');
    $container_lightbox.imagesLoaded(function(){
	$container_lightbox.masonry({
 //       itemSelector: '.item-lightbox',
        columnWidth: <?php echo $__Context->module_info->thumbnail_width ?>,
		gutter:<?php echo $__Context->col_spacing ?>,
		isFitWidth: true
      });
    });
  });
</script>
