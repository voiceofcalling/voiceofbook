<?php if(!defined("__XE__"))exit;
if (!$__Context->module_info->thumbnail_width)  $__Context->module_info->thumbnail_width  = 256;
	if (!$__Context->module_info->thumbnail_height) $__Context->module_info->thumbnail_height = 256;
	if (!$__Context->module_info->content_cut_size) $__Context->module_info->content_cut_size = 240;
 ?>
<style>
.slideGallery {
	margin:0 auto;
	position:relative;
    text-align: center;
	overflow:hidden;
	-webkit-backface-visibility:hidden;
	-moz-backface-visibility:hidden;
	-ms-backface-visibility:hidden;
	-o-backface-visibility:hidden;
	backface-visibility:hidden;
	/* Fix of Webkit flickering */
	z-index:1;
}
.slideGallery .swiper-slide .inner .caption {position:absolute;width:100%;bottom:0;padding:5px 0 15px 0;color: #ffffff;background-color: rgba(0, 0, 0, 0.25);}
.slideGallery .swiper-slide .inner .caption h1.title a {color:#fff;}
.thumb-wrap{position:relative;}
.slideGallery .swiper-slide {width:<?php echo $__Context->module_info->thumbnail_width ?>px;}
.slideGallery .swiper-slide .inner {float:left;width:<?php echo $__Context->module_info->thumbnail_width ?>px}
.pagination-slideGallery { z-index: 5;}
.pagination-slideGallery .swiper-pagination-bullet {
    margin-right: 5px;
}
.pagination-slideGallery .swiper-button-next.swiper-button-disabled, .swiper-button-prev.swiper-button-disabled{opacity:0;}
.swiper-pagination-switch { display: inline-block; width: 8px; height: 8px; border-radius: 8px; background: #222; margin-right: 5px; opacity: 0.8; border: 1px solid #fff; cursor: pointer;}
.swiper-visible-switch { background: #aaa;}
.swiper-active-switch { background: #fc0000;}
</style>
<!--#Meta:modules/board/m.skins/phiz_mboard/css/swiper.css--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/css/swiper.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/phiz_mboard/js/swiper.jquery.min.js--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/js/swiper.jquery.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(Mobile::isMobileCheckByAgent()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list_btn_top_default.html');
} ?>
<?php if($__Context->module_info->use_category=='Y'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','include_category.html');
} ?>
<div class="board_list slide_list" id="slide_list">
	<?php if(!$__Context->document_list && !$__Context->notice_list){ ?><div class="nodoc">
		<p style="text-align:center"><?php echo $__Context->lang->no_documents ?></p>
	</div><?php } ?>
	<?php if($__Context->document_list || $__Context->notice_list){ ?><div class="article">
		<?php if($__Context->document_list || $__Context->notice_list){ ?>
		<?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no=>$__Context->document){ ?><div class="notice">
			<h1 class="title"><i class="icon-volume-up text-red"></i><span class="text-red"> <?php echo $__Context->lang->notice ?></span>
				<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></a>
				<?php if($__Context->document->getCommentCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment" class="replyNum" title="Replies"><?php echo $__Context->document->getCommentCount() ?>]</a><?php } ?>
				<?php if($__Context->document->getTrackbackCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#trackback" class="trackbackNum" title="Trackbacks">[<?php echo $__Context->document->getTrackbackCount() ?>]</a><?php } ?>
				<?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?>
				<?php if($__Context->grant->manager){ ?><span class="check pull-right"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" class="iCheck" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /></span><?php } ?>
			</h1>
		</div><?php } ?>
		<?php } ?>
		
			<?php $__Context->_idx=1 ?>
		<div class="slideGallery">
			<div class="swiper-wrapper">
			<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?>
				<?php if($__Context->list_config['thumbnail'] && $__Context->document->thumbnailExists($__Context->module_info->thumbnail_width, $__Context->module_info->thumbnail_height, $__Context->module_info->thumbnail_type)){ ?>
				<div class="swiper-slide">
						<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle',$__Context->listStyle, 'cpage','') ?>"><img src="<?php echo $__Context->document->getThumbnail($__Context->module_info->thumbnail_width, $__Context->module_info->thumbnail_height, $__Context->module_info->thumbnail_type) ?>" alt="<?php echo $__Context->document->getTitle() ?>" /></a>
						<?php if($__Context->module_info->caption_use == 'yes'){ ?><div class="caption">
							<h1 class="title">
								<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></a>
								<?php if($__Context->document->getCommentCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment" class="replyNum" title="Replies">[<?php echo $__Context->document->getCommentCount() ?>]</a><?php } ?>
								<?php if($__Context->grant->manager){ ?><span class="check pull-right"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" class="iCheck" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /></span><?php } ?>
							</h1>
						</div><?php } ?>
				</div>
				<?php } ?>
			<?php $__Context->_idx++ ?>
			<?php } ?>
			</div>
			<div class="pagination-slideGallery"></div>
			<div class="swiper-button-prev"></div>
    			<div class="swiper-button-next"></div>
		</div>
			<!-- ///LIST -->
	</div><?php } ?>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','include_list_footer.html') ?>
<script>
  var mySliderGallery = new Swiper('.slideGallery',{
    pagination: '.pagination-slideGallery',
     // Navigation arrows
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    paginationClickable: true,
    calculateHeight: true,
    slidesPerView: 1,
		centeredSlides: true
  })
  </script>
