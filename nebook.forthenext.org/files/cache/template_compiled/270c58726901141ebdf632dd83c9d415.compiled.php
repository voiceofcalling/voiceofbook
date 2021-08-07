<?php if(!defined("__XE__"))exit;
echo Context::set('layout','none') ?>
<?php echo Context::set('admin_bar','false') ?>
<?php Context::addHtmlHeader('<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes, target-densitydpi=medium-dpi" />') ?>
<?php if($__Context->mi->viewer_style){ ?>
<?php Context::addBodyClass('viewer') ?>
<?php }else{ ?>
<?php Context::addBodyClass('viewer_blk') ?>
<?php } ?>
<!--#Meta:modules/board/skins/sketchbook5/css/print.css--><?php $__tmp=array('modules/board/skins/sketchbook5/css/print.css','print','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/sketchbook5/js/viewer.js--><?php $__tmp=array('modules/board/skins/sketchbook5/js/viewer.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php 
	$__Context->mi->rd_width = '';
	$__Context->mi->rd_box = '';
	$__Context->mi->rd_style = 'blog';
	$__Context->mi->rd_nav = N;
	$__Context->mi->rd_nav_side = '';
	$__Context->mi->prev_next = '';
	$__Context->mi->rd_lst = '';
	$__Context->mi->viewer_cmt = 'N';
	if(@!in_array('vote',$__Context->mi->viewer_itm)) $__Context->mi->votes = 'N';
	if(@!in_array('sns',$__Context->mi->viewer_itm)) $__Context->mi->to_sns = 'N';
 ?>
<style>
body,input,textarea,select,button,table{font-family:<?php echo $__Context->_COOKIE['bd_viewer_font'] ?>;}
<?php if(@!in_array('fnt',$__Context->mi->viewer_itm)){ ?>
<?php  $__Context->mi->show_files = 'N'  ?>
#viewer .rd_trb,#viewer #trackback{display:none}
<?php } ?>
<?php if(@in_array('cmt',$__Context->mi->viewer_itm)){ ?>
<?php  $__Context->mi->viewer_cmt = ''  ?>
#viewer .rd_nav .comment{display:block}
<?php } ?>
</style>
<div id="viewer" class="<?php echo $__Context->mi->colorset ?> viewer_style<?php echo $__Context->mi->viewer_style;
if(!$__Context->mi->viewer_style){ ?> rd_nav_blk<?php } ?>">
	<div id="bd_<?php echo $__Context->mi->module_srl ?>_<?php echo $__Context->oDocument->document_srl ?>" class="bd clear <?php echo $__Context->_COOKIE['use_np'] ?> <?php echo $__Context->mi->fdb_count;
if(!$__Context->mi->hover){ ?> hover_effect<?php } ?>" data-default_style="viewer" data-bdFilesType="<?php echo $__Context->mi->files_type ?>"<?php if($__Context->mi->img_opt){ ?> data-bdImgOpt="Y"<?php };
if(!$__Context->mi->img_link && Mobile::isMobileCheckByAgent()){ ?> data-bdImgLink="Y"<?php } ?> data-bdNavSide="N" style="max-width:<?php echo $__Context->mi->viewer_width ?>px">
		<div id="rd_ie" class="ie8_only"><i class="tl"></i><i class="tc"></i><i class="tr"></i><i class="ml"></i><i class="mr"></i><i class="bl"></i><i class="bc"></i><i class="br"></i></div>
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_read.html') ?>
		<?php if(!$__Context->mi->viewer_lst){ ?><div id="viewer_lst" class="<?php echo $__Context->_COOKIE['viewer_lst_cookie'] ?>"<?php if($__Context->_COOKIE['viewer_lst_cookie']=='open'){ ?> style="left:-100px"<?php } ?>>
<!--#Meta:modules/board/skins/sketchbook5/js/jquery.mousewheel.min.js--><?php $__tmp=array('modules/board/skins/sketchbook5/js/jquery.mousewheel.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/sketchbook5/js/jquery.mCustomScrollbar.min.js--><?php $__tmp=array('modules/board/skins/sketchbook5/js/jquery.mCustomScrollbar.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/sketchbook5/css/jquery.mCustomScrollbar.css--><?php $__tmp=array('modules/board/skins/sketchbook5/css/jquery.mCustomScrollbar.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
			<button type="button" id="viewer_lst_tg" class="ngeb bg_color"><?php echo $__Context->lang->cmd_list ?><br /><span class="tx_open"><?php echo $__Context->lang->cmd_open ?></span><span class="tx_close"><?php echo $__Context->lang->cmd_close ?></span></button>
			<h3 class="ui_font">Articles</h3>
			<div id="viewer_lst_scroll">
				<ul>
					<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?><li>
						<a class="clear<?php if($__Context->document_srl==$__Context->document->document_srl){ ?> on<?php } ?>" href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle',$__Context->listStyle, 'cpage','') ?>">
							<?php if($__Context->document->thumbnailExists()){ ?><span class="tmb"><img src="<?php echo $__Context->document->getThumbnail($__Context->mi->thumbnail_width, $__Context->mi->thumbnail_height, $__Context->mi->thumbnail_type) ?>" alt="" /></span><?php } ?>
							<span class="tl"><?php echo $__Context->document->getTitle(80);
if($__Context->document->getCommentCount()){ ?><b><?php echo $__Context->document->getCommentCount() ?></b><?php } ?></span>
							<span class="meta"><strong><?php echo $__Context->document->getNickName() ?></strong><?php echo $__Context->document->getRegdate("Y.m.d H:i") ?></span>
						</a>
					</li><?php } ?>
				</ul>
			</div>
			<?php if($__Context->document_list){ ?><div id="viewer_pn" class="bd_pg clear">
				<?php while($__Context->page_no=$__Context->page_navigation->getNextPage()){ ?>
				<?php if($__Context->page==$__Context->page_no){ ?><strong class="this"><?php echo $__Context->page_no ?></strong><?php } ?> 
				<?php if($__Context->page!=$__Context->page_no){ ?><a href="<?php echo getUrl('page',$__Context->page_no,'division',$__Context->division,'last_division',$__Context->last_division) ?>"><?php echo $__Context->page_no ?></a><?php } ?>
				<?php } ?>
			</div><?php } ?>
			<button type="button" class="tg_close2" onClick="jQuery('#viewer_lst_tg').click();">X</button>
		</div><?php } ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_footer.html') ?>
</div>