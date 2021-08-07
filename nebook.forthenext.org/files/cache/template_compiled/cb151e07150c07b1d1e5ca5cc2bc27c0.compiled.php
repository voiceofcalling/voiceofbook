<?php if(!defined("__XE__"))exit;?><div class="list_footer hide-s">
	<?php if($__Context->document_list || $__Context->notice_list){ ?><div class="pagination">
		<a href="<?php echo getUrl('page','','document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" class="direction prev"><i class="fa fa-angle-left"></i>&nbsp;<?php echo $__Context->lang->first_page ?></a>
		<?php while($__Context->page_no=$__Context->page_navigation->getNextPage()){ ?>
			<?php if($__Context->page==$__Context->page_no){ ?><strong><?php echo $__Context->page_no ?></strong><?php } ?>
			<?php if($__Context->page!=$__Context->page_no){ ?><a href="<?php echo getUrl('page',$__Context->page_no,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>"><?php echo $__Context->page_no ?></a><?php } ?>
		<?php } ?>
		<a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" class="direction next"><?php echo $__Context->lang->last_page ?>&nbsp;<i class="fa fa-angle-right"></i></a>
	</div><?php } ?>
	<div class="btnArea">
		<a href="<?php echo getUrl('act','dispBoardWrite','document_srl','') ?>" class="pk-btn pk-btn-default"><i class="fa fa-pencil"></i> <?php echo $__Context->lang->cmd_write ?></a>
		<a href="<?php echo getUrl('act','dispBoardTagList') ?>" class="pk-btn pk-btn-default" title="<?php echo $__Context->lang->tag ?>"><i class="fa fa-tag"></i> <?php echo $__Context->lang->tag ?></a>
		<?php if($__Context->grant->manager){ ?><a class="pk-btn pk-btn-default" href="<?php echo getUrl('act','dispBoardAdminBoardInfo') ?>" title="<?php echo $__Context->lang->cmd_setup ?>"><i class="fa fa-cog"></i> <?php echo $__Context->lang->cmd_setup ?></a><?php } ?>
		<?php if($__Context->grant->manager){ ?><a href="<?php echo getUrl('','module','document','act','dispDocumentManageDocument') ?>" class="pk-btn pk-btn-default" onclick="popopen(this.href,'manageDocument'); return false;"><i class="fa fa-cogs"></i> <?php echo $__Context->lang->cmd_manage_document ?></a><?php } ?>
	</div>
	<?php if($__Context->grant->view){ ?><form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" id="board_search" class="board_search" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
		<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
		<select name="search_target">
			<?php if($__Context->search_option&&count($__Context->search_option))foreach($__Context->search_option as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->search_target==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
		</select>
		<div class="search_input">
			<i class="fa fa-search" style="position:absolute;top:7px;left:7px;"></i>
			<input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" title="<?php echo $__Context->lang->cmd_search ?>" class="iText" />
		</div>
		<button type="submit" class="pk-btn pk-btn-default" onclick="xGetElementById('board_search').submit();return false;"><?php echo $__Context->lang->cmd_search ?></button>
        <?php if($__Context->last_division){ ?><a href="<?php echo getUrl('page',1,'document_srl','','division',$__Context->last_division,'last_division','') ?>" class="btn"><?php echo $__Context->lang->cmd_search_next ?></a><?php } ?>
	</form><?php } ?>
</div>
<div class="list_footer mobile show-s">
	<div id="pagination-m" class="nrow">
		<div class="col s4 page-prev text-center">
			<?php if($__Context->page != 1){ ?>
			<a href="<?php echo getUrl('page',$__Context->page-1,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>" class="btn-infinite"><?php echo $__Context->lang->cmd_prev ?></a>
			<?php } ?>
		</div>
		<div class="col s4 page-num text-center">
			<strong><?php echo $__Context->page ?> / <?php echo $__Context->page_navigation->last_page ?></strong>
		</div>
		<div class="col s4 page-next text-center">
			<?php if($__Context->page != $__Context->page_navigation->last_page){ ?>
			<a href="<?php echo getUrl('page',$__Context->page+1,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>" class="btn-infinite"><?php echo $__Context->lang->cmd_next ?></a>
			<?php } ?>
		</div>
	</div>
</div>
