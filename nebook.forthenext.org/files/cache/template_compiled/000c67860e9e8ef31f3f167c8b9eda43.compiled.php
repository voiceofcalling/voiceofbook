<?php if(!defined("__XE__"))exit;?>
<?php if($__Context->mi->fdb_style=='fdb_v2' && $__Context->mi->default_style!='guest'){ ?><a class="nametag ui_font bubble" href="#" onclick="jQuery(this).nextAll('ul,.bd_pg').slideToggle();return false" title="Click! <?php echo $__Context->lang->comment ?> <?php echo $__Context->lang->cmd_view ?>~"><strong class="bg_color bx_shadow">Comment <b>'<?php echo $__Context->oDocument->getCommentcount() ?>'</b></strong></a><?php } ?>
<?php if($__Context->oDocument->getCommentcount()){ ?>
<?php if(!$__Context->mi->fdb_style){ ?><div class="fdb_tag<?php if($__Context->mi->cmt_wrt_position=='cmt_wrt_btm'){ ?> bg_f_f9 css3pie<?php } ?>">
	<a class="ui_font bubble" href="#" onclick="jQuery(this).parent().nextAll('ul,.bd_pg').slideToggle();return false" title="<?php echo $__Context->lang->comment ?> <?php echo $__Context->lang->cmd_view ?>">Comments <b>'<?php echo $__Context->oDocument->getCommentcount() ?>'</b></a>
</div><?php } ?>
<ul class="fdb_lst_ul <?php echo $__Context->mi->fdb_hide ?>">
	<?php if($__Context->oDocument->getComments()&&count($__Context->oDocument->getComments()))foreach($__Context->oDocument->getComments() as $__Context->key=>$__Context->comment){ ?>
<?php if($__Context->comment->get('depth')){ ?>
	<li id="comment_<?php echo $__Context->comment->comment_srl ?>" class="fdb_itm clear re bg<?php echo ($__Context->comment->get('depth'))%2 ?>" style="margin-left:<?php echo (($__Context->comment->get('depth')-1)%10+1)*2 ?>%">
		<i class="fa fa-share fa-flip-vertical re"></i><?php if($__Context->comment->get('depth')>10){ ?><i class="fa fa-share fa-flip-vertical re rere"></i><?php } ?>
<?php }else{ ?>
	<li id="comment_<?php echo $__Context->comment->comment_srl ?>" class="fdb_itm clear">
<?php } ?>
		
		<?php if(!$__Context->mi->profile_img){ ?>
		<?php if($__Context->comment->getProfileImage()){ ?><img class="profile img" src="<?php echo $__Context->comment->getProfileImage() ?>" alt="profile" /><?php } ?>
		<?php if(!$__Context->comment->getProfileImage()){ ?><span class="profile img no_img">?</span><?php } ?>
		<?php } ?>
		
		<div class="meta">
			<?php if($__Context->comment->member_srl){ ?><a href="#popup_menu_area" class="member_<?php echo $__Context->comment->member_srl ?>" onclick="return false"><?php echo $__Context->comment->getNickName() ?></a><?php } ?>
			<?php if(!$__Context->comment->member_srl && $__Context->comment->homepage){ ?><a href="<?php echo $__Context->comment->getHomepageUrl() ?>" target="_blank"><?php echo $__Context->comment->getNickName() ?></a><?php } ?>
			<?php if(!$__Context->comment->member_srl && !$__Context->comment->homepage){ ?><b><?php echo $__Context->comment->getNickName() ?></b><?php } ?>
			<span class="date"><?php echo getTimeGap($__Context->comment->get('regdate'), "Y.m.d H:i") ?></span>
			<?php if($__Context->grant->manager || $__Context->mi->display_ip_address){ ?><small class="m_no">(<?php echo $__Context->comment->getIpaddress() ?>)</small><?php } ?>
			<?php if($__Context->comment->isSecret()){ ?><span class="ico_secret">SECRET</span><?php } ?>
			
			<?php if($__Context->comment->hasUploadedFiles()){ ?>
			<a class="tg_btn2" href="#files_<?php echo $__Context->comment->comment_srl ?>"><b class="ui-icon ui-icon-disk">Files</b><?php echo $__Context->lang->uploaded_file ?> <small>(<?php echo $__Context->comment->get('uploaded_count') ?>)</small></a>
			<div id="files_<?php echo $__Context->comment->comment_srl ?>" class="cmt_files tg_cnt2">
				<button type="button" class="tg_blur2"></button><button type="button" class="tg_close2" title="<?php echo $__Context->lang->cmd_close ?>"><b class="ui-icon ui-icon-closethick">X</b></button>
				<ul class="wrp">
					<?php if($__Context->comment->getUploadedFiles()&&count($__Context->comment->getUploadedFiles()))foreach($__Context->comment->getUploadedFiles() as $__Context->key=>$__Context->file){ ?><li><em>&bull;</em> <a class="bubble" href="<?php echo getUrl('');
echo $__Context->file->download_url ?>" title="[File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download:<?php echo number_format($__Context->file->download_count) ?>]"><?php echo $__Context->file->source_filename ?></a></li><?php } ?>
				</ul>
				<button type="button" class="tg_blur2"></button>
			</div>
			<?php } ?>
		</div>
		
		<?php if(!$__Context->comment->isAccessible()){ ?>
		<form action="./" method="get" onsubmit="return procFilter(this, input_password)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
			<input type="hidden" name="document_srl" value="<?php echo $__Context->comment->get('document_srl') ?>" />
			<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->get('comment_srl') ?>" />
			<p>&quot;<?php echo $__Context->lang->msg_is_secret ?>&quot;</p>
			<span class="itx_wrp">
				<label for="cpw_<?php echo $__Context->comment->comment_srl ?>"><?php echo $__Context->lang->password ?></label>
				<input type="password" id="cpw_<?php echo $__Context->comment->comment_srl ?>" name="password" class="itx" />
				<input type="submit" value="<?php echo $__Context->lang->cmd_input ?>" class="bd_btn" />
			</span>
		</form>
		<?php }else{ ?>
		<?php echo $__Context->comment->getContent(false) ?>
		<?php } ?>
		
		<div class="fdb_nav img_tx">
			<?php if($__Context->mi->cmt_this_btn=='2' && $__Context->is_logged){ ?>
			<a href="#" onclick="doCallModuleAction('comment','procCommentDeclare','<?php echo $__Context->comment->comment_srl ?>');return false"><i class="fa fa-phone"></i><?php echo $__Context->lang->cmd_declare ?></a>
			<a href="#" onclick="doCallModuleAction('comment','procCommentVoteUp','<?php echo $__Context->comment->comment_srl ?>');return false"><i class="fa fa-heart color"></i><?php echo $__Context->lang->cmd_vote ?></a>
			<?php if(!$__Context->mi->cmt_vote_down){ ?><a href="#" onclick="doCallModuleAction('comment','procCommentVoteDown','<?php echo $__Context->comment->comment_srl ?>');return false"><i class="fa fa-heart"></i><?php echo $__Context->lang->cmd_vote_down ?></a><?php } ?>
			<?php } ?>
			<?php if((!$__Context->mi->cmt_this_btn && $__Context->is_logged) || $__Context->grant->manager){ ?><a class="comment_<?php echo $__Context->comment->comment_srl ?> m_no" href="#popup_menu_area" onclick="return false"><i class="fa fa-ellipsis-h"></i><?php echo $__Context->lang->cmd_comment_do ?></a><?php } ?>
			<?php if($__Context->comment->isGranted() || !$__Context->comment->get('member_srl')){ ?>
			<a href="<?php echo getUrl('act','dispBoardModifyComment','comment_srl',$__Context->comment->comment_srl) ?>"><i class="fa fa-pencil"></i><?php echo $__Context->lang->cmd_modify ?></a>
			<a href="<?php echo getUrl('act','dispBoardDeleteComment','comment_srl',$__Context->comment->comment_srl) ?>"><i class="fa fa-eraser"></i><?php echo $__Context->lang->cmd_delete ?></a>
			<?php } ?>
			<?php if($__Context->oDocument->allowComment()){ ?><a class="re_comment" href="<?php echo getUrl('act','dispBoardReplyComment','comment_srl',$__Context->comment->comment_srl) ?>" onclick="<?php if(!$__Context->grant->write_comment || !$__Context->oDocument->isEnableComment()){ ?>alert('<?php echo $__Context->lang->msg_not_permitted ?>')<?php }else{ ?>reComment(<?php echo $__Context->comment->get('document_srl') ?>,<?php echo $__Context->comment->get('comment_srl') ?>,'<?php echo getUrl('act','dispBoardReplyComment','comment_srl',$__Context->comment->comment_srl) ?>')<?php } ?>;return false;"><i class="fa fa-comment"></i> <?php echo $__Context->lang->cmd_reply ?></a><?php } ?>
			
			<?php if($__Context->mi->cmt_vote!='N' && ($__Context->mi->cmt_vote=='2' || $__Context->comment->get('voted_count')!=0 || $__Context->comment->get('blamed_count')!=0)){ ?><span class="vote ui_font">
				<a class="bd_login" href="#"<?php if($__Context->is_logged){ ?> onclick="doCallModuleAction('comment','procCommentVoteUp','<?php echo $__Context->comment->comment_srl ?>');return false"<?php } ?> title="<?php echo $__Context->lang->cmd_vote ?>"><em><i class="fa fa-heart color"></i> <?php echo $__Context->comment->get('voted_count')?$__Context->comment->get('voted_count'):0 ?></em></a>
				<?php if(!$__Context->mi->cmt_vote_down){ ?><a class="bd_login" href="#"<?php if($__Context->is_logged){ ?> onclick="doCallModuleAction('comment','procCommentVoteDown','<?php echo $__Context->comment->comment_srl ?>');return false"<?php } ?> title="<?php echo $__Context->lang->cmd_vote_down ?>"><i class="fa fa-heart"></i> <?php echo abs($__Context->comment->get('blamed_count')?$__Context->comment->get('blamed_count'):0) ?></a><?php } ?>
			</span><?php } ?>
		</div>
	</li>
	<?php } ?>
</ul>
<?php if($__Context->oDocument->comment_page_navigation){ ?>
<div class="bd_pg clear <?php echo $__Context->mi->fdb_hide ?>">
	<a href="<?php echo getUrl('cpage',1) ?>#<?php echo $__Context->oDocument->get('document_srl') ?>_comment" class="direction" title="<?php echo $__Context->lang->first_page ?>"><i class="fa fa-angle-double-left"></i> <span>First</span></a>
	<?php while($__Context->page_no=$__Context->oDocument->comment_page_navigation->getNextPage()){ ?>
		<?php if($__Context->cpage==$__Context->page_no){ ?><strong class="this"><?php echo $__Context->page_no ?></strong><?php } ?> 
		<?php if($__Context->cpage!=$__Context->page_no){ ?><a href="<?php echo getUrl('cpage',$__Context->page_no) ?>#<?php echo $__Context->oDocument->get('document_srl') ?>_comment"><?php echo $__Context->page_no ?></a><?php } ?>
	<?php } ?>
	<a href="<?php echo getUrl('cpage',$__Context->oDocument->comment_page_navigation->last_page) ?>#<?php echo $__Context->oDocument->get('document_srl') ?>_comment" class="direction" title="<?php echo $__Context->lang->last_page ?>"><span>Last</span> <i class="fa fa-angle-double-right"></i></a>
</div>
<?php } ?>
<?php } ?>