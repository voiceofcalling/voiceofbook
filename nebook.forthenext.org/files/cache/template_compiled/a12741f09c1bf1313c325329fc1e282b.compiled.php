<?php if(!defined("__XE__"))exit;
if(!$__Context->module_info->thumbnail_type) $__Context->module_info->thumbnail_type = 'crop';
if(!$__Context->module_info->thumbnail_width) $__Context->module_info->thumbnail_width = 100;
if(!$__Context->module_info->thumbnail_height) $__Context->module_info->thumbnail_height = 100;
 ?>
<!--#Meta:modules/board/m.skins/phiz_mboard/css/list.zine.css--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/css/list.zine.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/phiz_mboard/js/jquery.infinitescroll.js--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/js/jquery.infinitescroll.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list_btn_top.html') ?>
<?php if($__Context->module_info->use_category=='Y'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','include_category.html');
} ?>
<div class="nrow board_list zine1-default-list m-form" id="zine1-default-list">
	<?php if(!$__Context->document_list && !$__Context->notice_list){ ?><div class="nodoc">
		<p style="text-align:center"><?php echo $__Context->lang->no_documents ?></p>
	</div><?php } ?>
	<?php if($__Context->grant->manager){ ?><div class="post-check">
		<span class="allcheck">
		<input type="checkbox" onclick="XE.checkboxToggleAll({ doClick:true });" id="btCheck" title="Check All" />
		<label for="btCheck">Check All</label>
		</span>
	</div><?php } ?>
	<?php if($__Context->document_list || $__Context->notice_list){ ?><div id="scroll-content" class="article">
		<?php  $__Context->bCheck_notice = 0;  ?>
		<?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no=>$__Context->document){ ?><div class="zine1-default-row notice">
			<h2 class="title"><i class="fa fa-volume-up red text-w500"></i><span class="notice-text red text-w500"> <?php echo $__Context->lang->notice ?></span>
				<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></a>
				<?php if($__Context->document->getCommentCount()){ ?><span> [<?php echo $__Context->document->getCommentCount() ?>]</span><?php } ?>
				<?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?>
			</h2>
			<?php if($__Context->grant->manager){ ?><span class="check"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" id="bCheck_notice<?php echo $__Context->bCheck_notice ?>" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><label for="bCheck_notice<?php echo $__Context->bCheck_notice ?>"></label></span><?php } ?>
		<?php  $__Context->bCheck_notice++;  ?>
		</div><?php } ?>
<!-- LIST -->
<?php  $__Context->bCheck_item = 0;  ?>
		<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?><div class="post">
		<div class="zine1-default-row">
			<?php if($__Context->thumbnail && $__Context->document->thumbnailExists($__Context->module_info->thumbnail_width, $__Context->module_info->thumbnail_height, $__Context->module_info->thumbnail_type)){ ?>
			<div class="thumb-wrap" style="width:<?php echo $__Context->module_info->thumbnail_width ?>px">
				<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle',$__Context->listStyle, 'cpage','') ?>"><img class="thumb-image" src="<?php echo $__Context->document->getThumbnail($__Context->module_info->thumbnail_width, $__Context->module_info->thumbnail_height, $__Context->module_info->thumbnail_type) ?>" alt="<?php echo $__Context->document->getTitleText() ?>" /></a>
			</div>
			<?php } ?>
			<div class="zine1-content"<?php if($__Context->document->thumbnailExists($__Context->module_info->thumbnail_width, $__Context->module_info->thumbnail_height, $__Context->module_info->thumbnail_type)){ ?> style="margin-left:<?php echo $__Context->module_info->thumbnail_width ?>px;"<?php } ?>>
				<?php if($__Context->title){ ?><h2 class="title">
					<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle',$__Context->listStyle, 'cpage','') ?>">
					<?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?>
					<?php if($__Context->document->getCommentCount()){ ?><span> [<?php echo $__Context->document->getCommentCount() ?>]</span><?php } ?>
					</a>
					<?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?>
				</h2><?php } ?>
				<?php if($__Context->nick_name){ ?><span class="author"><i class="fa fa-user"></i>&nbsp; <a href="#popup_menu_area" class="member_<?php echo $__Context->document->get('member_srl') ?>" onclick="return false"><?php echo $__Context->document->getNickName() ?></a></span><?php } ?>
				<?php if($__Context->regdate){ ?><span class="time"><i class="fa fa-clock-o"></i>&nbsp;<?php echo $__Context->document->getRegdate('Y.m.d') ?></span><?php } ?>
				<?php if($__Context->document->getCommentCount() && $__Context->comment_status){ ?><span class="btn-count"><i class="fa fa-comment-o"></i><?php echo $__Context->document->getCommentCount() ?></span><?php } ?>
				<?php if($__Context->readed_count){ ?><span class="readNum btn-count"><i class="fa fa-eye"></i>&nbsp;<?php echo $__Context->document->get('readed_count')>0?$__Context->document->get('readed_count'):'0' ?></span><?php } ?>
				<?php if($__Context->voted_count){ ?><span class="voteNum btn-count"><i class="fa fa-thumbs-o-up"></i>&nbsp;<?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'0' ?></span><?php } ?>
				<?php if($__Context->summary){ ?><p class="text"><a href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle',$__Context->listStyle, 'cpage','') ?>"><?php echo $__Context->document->getSummary(($__Context->module_info->content_cut_size)) ?></a></p><?php } ?>
				<?php if($__Context->grant->manager){ ?><span class="check"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" id="bCheck_item<?php echo $__Context->bCheck_item ?>" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><label for="bCheck_item<?php echo $__Context->bCheck_item ?>"></label></span><?php } ?>
			</div>
		</div>
<?php  $__Context->bCheck_item++ ?>
		</div><?php } ?>
<!-- /LIST -->
	</div><?php } ?>
</div>
<div id="navigation">
	<a href="<?php echo getUrl('page',2,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>"></a>
</div>
<script>
jQuery(document).ready(function($){
  $('#scroll-content').infinitescroll({
    navSelector  : "div#navigation",
                   // selector for the paged navigation (it will be hidden)
    nextSelector : "div#navigation a:first",
                   // selector for the NEXT link (to page 2)
    itemSelector : "#content div.post",
                   // selector for all items you'll retrieve
      loading: {
          finishedMsg: 'No more pages to load.',
           img: '<?php echo $__Context->tpl_path ?>/images/ajax-loader.gif'
        }
  });
    });
</script>
