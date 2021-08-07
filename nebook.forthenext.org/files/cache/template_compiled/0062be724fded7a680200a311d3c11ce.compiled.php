<?php if(!defined("__XE__"))exit;
if (!$__Context->module_info->thumbnail_width)  $__Context->module_info->thumbnail_width  = 256;
	if (!$__Context->module_info->thumbnail_height) $__Context->module_info->thumbnail_height = 256;
	if (!$__Context->module_info->thumbnail_type) $__Context->module_info->thumbnail_type = 'ratio';
	if (!$__Context->module_info->content_cut_size) $__Context->module_info->content_cut_size = 240;
	if (!$__Context->module_info->col_spacing) $__Context->col_spacing = 0;
	if ($__Context->module_info->col_spacing) $__Context->col_spacing = $__Context->module_info->col_spacing;
	if (!$__Context->module_info->content_height) $__Context->content_height = 'auto';
	if ($__Context->module_info->content_height) $__Context->content_height = $__Context->module_info->content_height.px;
 ?>
<style>
.item-msry{margin-bottom:<?php echo $__Context->col_spacing ?>px;  width:<?php echo $__Context->module_info->thumbnail_width ?>px; height:<?php echo $__Context->content_height ?>;-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); }
</style>
<!--#Meta:modules/board/m.skins/phiz_mboard/css/list.card.css--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/css/list.card.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/phiz_mboard/js/imagesloaded.pkgd.min.js--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/js/imagesloaded.pkgd.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/phiz_mboard/js/masonry.pkgd.min.js--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/js/masonry.pkgd.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(Mobile::isMobileCheckByAgent()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list_btn_top_default.html');
} ?>
<?php if($__Context->module_info->use_category=='Y'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','include_category.html');
} ?>
<div class="nrow board_list list__gallery_masonry m-form" id="list__gallery_masonry">
	<?php if(!$__Context->document_list && !$__Context->notice_list){ ?><div class="nodoc">
		<p style="text-align:center"><?php echo $__Context->lang->no_documents ?></p>
	</div><?php } ?>
	<?php if($__Context->grant->manager){ ?><div class="post-check">
		<span class="allcheck">
		<input type="checkbox" onclick="XE.checkboxToggleAll({ doClick:true });" id="btCheck" title="Check All" />
		<label for="btCheck">Check All</label>
		</span>
	</div><?php } ?>
	<?php if($__Context->document_list || $__Context->notice_list){ ?><div id="container-gdefault" class="js-masonry centered">
		<?php if($__Context->document_list){ ?>
		<!-- LIST -->
		<?php  $__Context->bCheck_item = 0;  ?>
		<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?>
				<div class="item-msry ">
				<?php if($__Context->list_config['thumbnail'] && $__Context->document->thumbnailExists($__Context->module_info->thumbnail_width, $__Context->module_info->thumbnail_height, $__Context->module_info->thumbnail_type)){ ?>
				<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle',$__Context->listStyle, 'cpage','') ?>">
					<img src="<?php echo $__Context->document->getThumbnail($__Context->module_info->thumbnail_width, $__Context->module_info->thumbnail_height, $__Context->module_info->thumbnail_type) ?>" alt="<?php echo $__Context->document->getTitleText() ?>" />
				</a>
				<?php } ?>
				<div class="card-content">
					<?php if($__Context->title){ ?><h2><a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></a>
					<?php if($__Context->document->getCommentCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment" class="replyNum" title="Replies">[<?php echo $__Context->document->getCommentCount() ?>]</a><?php } ?>
					<?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?>
					</h2><?php } ?>
					<?php if($__Context->nick_name){ ?><span class="author"><i class="fa fa-user"></i>&nbsp; <?php echo $__Context->document->getNickName() ?></span><?php } ?>
					<?php if($__Context->regdate){ ?><span class="time"><i class="fa fa-clock-o"></i>&nbsp;<?php echo $__Context->document->getRegdate('Y.m.d') ?></span><?php } ?>
					<?php if($__Context->document->getCommentCount() && $__Context->comment_status){ ?><span class="btn-count"><i class="fa fa-comment-o"></i><?php echo $__Context->document->getCommentCount() ?></span><?php } ?>
					<?php if($__Context->readed_count){ ?><span class="readNum btn-count"><i class="fa fa-eye"></i>&nbsp;<?php echo $__Context->document->get('readed_count')>0?$__Context->document->get('readed_count'):'0' ?></span><?php } ?>
					<?php if($__Context->voted_count){ ?><span class="voteNum btn-count"><i class="fa fa-thumbs-o-up"></i>&nbsp;<?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'0' ?></span><?php } ?>
					<?php if($__Context->summary){ ?><p class="text"><?php echo $__Context->document->getSummary(($__Context->module_info->content_cut_size)) ?></p><?php } ?>
				</div>
				<?php if($__Context->grant->manager){ ?><span class="check" style="position:absolute;top:0;right:0;"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" id="bCheck_item<?php echo $__Context->bCheck_item ?>" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><label for="bCheck_item<?php echo $__Context->bCheck_item ?>"></label></span><?php } ?>
				</div>
		<?php  $__Context->bCheck_item++ ?>
		<?php } ?>
		<!-- /LIST -->
		<?php } ?>
	</div><?php } ?>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','include_list_footer.html') ?>
<script>
// list gallery default
jQuery(document).ready(function($){
	//jQuery(window).load(function($){
    var $container_gdefault = $('#container-gdefault');
    $container_gdefault.imagesLoaded(function(){
	$container_gdefault.masonry({
        itemSelector: '.item-msry',
        columnWidth: <?php echo $__Context->module_info->thumbnail_width ?>,
		gutter:<?php echo $__Context->col_spacing ?>,
		isFitWidth: true
      });
    });
  });
</script>
