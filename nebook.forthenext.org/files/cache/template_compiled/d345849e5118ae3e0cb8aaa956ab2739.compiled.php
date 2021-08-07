<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/board/m.skins/phiz_mboard/js/jquery.waypoints.min.js--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/js/jquery.waypoints.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/phiz_mboard/js/shortcuts/sticky.min.js--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/js/shortcuts/sticky.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="btn-top" id="btn-top">
	<div class="nrow">
		<div class="col s12">
			<div class="btn-top-inner">
				<span><a href="<?php echo getUrl('act','dispBoardWrite','document_srl','') ?>"class="btn-infinite" title="게시글쓰기"><i class="fa fa-pencil"></i></a></span>
				<span class="btn-infinite search-btn"  title="검색"><a href="javascript:void(0)"><i class="fa fa-search"></i></a></span>
				<span><?php if($__Context->grant->manager){ ?><a href="<?php echo getUrl('','module','document','act','dispDocumentManageDocument') ?>" class="btn-infinite" onclick="popopen(this.href,'manageDocument'); return false;"><i class="fa fa-cogs" title="게시글관리"></i></a><?php } ?></span>
				<?php if($__Context->grant->manager){ ?><span class="btn-infinite">
					<a href="<?php echo getUrl('act','dispBoardAdminBoardInfo') ?>" title="<?php echo $__Context->lang->cmd_setup ?>"><i class="fa fa-cog"></i></a>
				</span><?php } ?>
			</div>
		</div>
	</div>
	<div id="search-box" class="nrow search-box">
		<div class="col s12">
			<div class="search-box-inner">
				<?php if($__Context->grant->view){ ?><form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" id="board_search" class="board_search" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
					<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
					<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
					<select name="search_target">
						<?php if($__Context->search_option&&count($__Context->search_option))foreach($__Context->search_option as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->search_target==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
					</select>
					<div class="search_input">
						<i class="fa fa-search" style="position:absolute;top:5px;left:7px;"></i>
						<input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" title="<?php echo $__Context->lang->cmd_search ?>" class="iText" />
					</div>
					<button type="submit" class="btn" onclick="xGetElementById('board_search').submit();return false;"><?php echo $__Context->lang->cmd_search ?></button>
    			<?php if($__Context->last_division){ ?><a href="<?php echo getUrl('page',1,'document_srl','','division',$__Context->last_division,'last_division','') ?>" class="btn"><?php echo $__Context->lang->cmd_search_next ?></a><?php } ?>
					</form><?php } ?>
			</div>
		</div>
	</div>
</div>
<script>
var sticky = new Waypoint.Sticky({
  element: jQuery('#btn-top')[0]
})
</script>
