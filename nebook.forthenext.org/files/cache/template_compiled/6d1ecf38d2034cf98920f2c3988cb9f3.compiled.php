<?php if(!defined("__XE__"))exit;
if(!$__Context->module_info->col_spacing) $__Context->module_info->col_spacing = 10;
if($__Context->module_info->col_spacing) $__Context->col_spacing = $__Context->module_info->col_spacing/2;
if(!$__Context->module_info->colunm_cnt) $__Context->colunm_cnt = 4;
if($__Context->module_info->colunm_cnt) $__Context->colunm_cnt = $__Context->module_info->colunm_cnt;
$__Context->colunm_width = 100/$__Context->colunm_cnt;
 ?>
<!--#Meta:modules/board/m.skins/phiz_mboard/css/list.gallery.css--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/css/list.gallery.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<style>
.gallery1_list_default li.post {position:relative;float:left; width:<?php echo $__Context->colunm_width ?>%;padding:<?php echo $__Context->col_spacing ?>px;}
.gallery1_list_default .view {
	width:100%;
}
</style>
<?php if(Mobile::isMobileCheckByAgent()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list_btn_top_default.html');
} ?>
<?php if($__Context->module_info->use_category=='Y'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','include_category.html');
} ?>
<div class="board_list gallery1_list_default m-form" id="gallery1_list_default">
		<?php if(!$__Context->document_list && !$__Context->notice_list){ ?><div class="nodoc">
			<p class="text-center"><?php echo $__Context->lang->no_documents ?></p>
		</div><?php } ?>
	<?php if($__Context->grant->manager){ ?><div class="post-check">
		<span class="allcheck">
		<input type="checkbox" onclick="XE.checkboxToggleAll({ doClick:true });" id="btCheck" title="Check All" />
		<label for="btCheck">Check All</label>
		</span>
	</div><?php } ?>
		<?php if($__Context->document_list || $__Context->notice_list){ ?><div class="article">
			<?php if($__Context->document_list || $__Context->notice_list){ ?>
			<?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no=>$__Context->document){ ?><div class="notice">
				<h2 class="title"><i class="fa fa-volume-up red text-w500"></i><span class="notice-text"> <?php echo $__Context->lang->notice ?></span>
					<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></a>
					<?php if($__Context->document->getCommentCount()){ ?><span> [<?php echo $__Context->document->getCommentCount() ?>]</span><?php } ?>
				<?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?>
				</h2>
				<?php if($__Context->grant->manager){ ?><span class="check"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" id="bCheck_notice<?php echo $__Context->bCheck_notice ?>" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><label for="bCheck_notice<?php echo $__Context->bCheck_notice ?>"></label></span><?php } ?>
			<?php  $__Context->bCheck_notice++;  ?>
			</div><?php } ?>
			<?php } ?>
			<!-- LIST -->
		<ul class="nrow">
		<?php  $__Context->bCheck_item = 0;  ?>
			<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?>
			<?php if($__Context->list_config['thumbnail'] && $__Context->document->thumbnailExists($__Context->module_info->thumbnail_width, $__Context->module_info->thumbnail_height, $__Context->module_info->thumbnail_type)){ ?>
			<li class="post">
				<div class="view view-third ">
					<img class="dsp-block" src="<?php echo $__Context->document->getThumbnail($__Context->module_info->thumbnail_width, $__Context->module_info->thumbnail_height, $__Context->module_info->thumbnail_type) ?>" alt="<?php echo $__Context->document->getTitleText() ?>" />
					<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle',$__Context->listStyle, 'cpage','') ?>">
						<div class="mask">
							<?php if($__Context->title){ ?><h2><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></h2><?php } ?>
							<?php if($__Context->summary){ ?><p class="text"><?php echo $__Context->document->getSummary(($__Context->module_info->content_cut_size)) ?></p><?php } ?>
						</div>
					</a>
				</div>
				<?php if($__Context->grant->manager){ ?><span class="check" style="position:absolute;top:5px;right:5px;"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" id="bCheck_item<?php echo $__Context->bCheck_item ?>" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><label for="bCheck_item<?php echo $__Context->bCheck_item ?>"></label></span><?php } ?>
			</li>
		<?php  $__Context->bCheck_item++ ?>
			<?php } ?>
			<?php } ?>
		</ul>
			<!-- /LIST -->
		</div><?php } ?>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','include_list_footer.html') ?>
