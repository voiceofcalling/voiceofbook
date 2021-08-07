<?php if(!defined("__XE__"))exit;?><!-- COMMENT -->
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/board/m.skins/phiz_mboard/filter','phiz_insert_comment.xml');$__xmlFilter->compile(); ?>
<?php if($__Context->grant->write_comment && $__Context->oDocument->isEnableComment()){ ?><div id="mcomment-wrap">
<form action="./" method="post" onsubmit="return procFilter(this, phiz_insert_comment)" class="write_comment" id="write_comment"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
	<input type="hidden" name="comment_srl" value="" />
	<input type="hidden" name="content" value="" />
	<input type="hidden" name="chk_phiz" value="Y" />
	<input type="hidden" name="use_html" value="Y" />
		<?php echo $__Context->oDocument->getCommentEditor() ?>
	<div class="list_footer">
	<div class="write_author m-form">
		<div class="nrow form-group">
		<?php if(!$__Context->is_logged){ ?><span class="col s6 col-right">
			<input type="text" name="nick_name" id="userName" class="form-control userName" placeholder="<?php echo $__Context->lang->writer ?>" />
		</span><?php } ?>
		<?php if(!$__Context->is_logged){ ?><span class="col s6 col-left">
			<input type="password" name="password" id="userPw" class="form-control userPw" placeholder="<?php echo $__Context->lang->password ?>" />
		</span><?php } ?>
		<!-- <?php if(!$__Context->is_logged){ ?><span class="item">
			<label for="homePage" class="iLabel"><?php echo $__Context->lang->homepage ?></label>
			<input type="text" name="homepage" id="homePage" class="iText homePage" />&nbsp;
		</span><?php } ?> -->
		</div>
		<?php if($__Context->is_logged){ ?><input type="checkbox" name="notify_message" value="Y" id="notify_message" class="iCheck" /><?php } ?>
		<?php if($__Context->is_logged){ ?><label for="notify_message"><?php echo $__Context->lang->notify ?></label><?php } ?>
		<?php if($__Context->module_info->secret=='Y'){ ?><input type="checkbox" name="is_secret" value="Y" id="is_secret" class="iCheck" /><?php } ?>
		<?php if($__Context->module_info->secret=='Y'){ ?><label for="is_secret"><?php echo $__Context->lang->secret ?></label><?php } ?>
	</div>
	<div class="nrow form-group">
		<button type="submit" class="pk-btn pk-btn-default"><i class="fa fa-commenting-o"></i> <?php echo $__Context->lang->cmd_comment_registration ?></button>
	</div>
	</div>
</form>
</div><?php } ?>
<div class="feedback" id="comment">
	<div class="fbHeader">
		<h2><i class="fa fa-comments-o"></i> <?php echo $__Context->lang->comment ?> <em><?php echo $__Context->oDocument->getCommentcount() ?></em></h2>
	</div>
	<?php if($__Context->oDocument->getCommentcount()){ ?><ul class="fbList hide-s">
		<?php if($__Context->oDocument->getComments()&&count($__Context->oDocument->getComments()))foreach($__Context->oDocument->getComments() as $__Context->key=>$__Context->comment){ ?><li<?php if(!$__Context->comment->get('depth')){ ?> class="fbItem"<?php };
if($__Context->comment->get('depth')){ ?> class="fbItem indent indent<?php echo ($__Context->comment->get('depth')) ?>"<?php } ?> id="comment_<?php echo $__Context->comment->comment_srl ?>">
			<div class="fbMeta">
				<?php if($__Context->comment->getProfileImage()){ ?><img src="<?php echo $__Context->comment->getProfileImage() ?>" alt="Profile" class="profile" /><?php } ?>
				<?php if(!$__Context->comment->getProfileImage()){ ?><span class="profile"></span><?php } ?>
				<h3 class="author">
					<?php if(!$__Context->comment->member_srl && $__Context->comment->homepage){ ?><a href="<?php echo $__Context->comment->getHomepageUrl() ?>"><?php echo $__Context->comment->getNickName() ?></a><?php } ?>
					<?php if(!$__Context->comment->member_srl && !$__Context->comment->homepage){ ?><strong><?php echo $__Context->comment->getNickName() ?></strong><?php } ?>
					<?php if($__Context->comment->member_srl){ ?><a href="#popup_menu_area" class="member_<?php echo $__Context->comment->member_srl ?>" onclick="return false"><?php echo $__Context->comment->getNickName() ?></a><?php } ?>
				</h3>
				<p class="time"><?php echo $__Context->comment->getRegdate('Y.m.d H:i') ?></p>
			</div>
			<?php if(!$__Context->comment->isAccessible()){ ?>
			<form action="./" method="get" class="xe_content secretForm" onsubmit="return procFilter(this, input_password)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<p><label for="cpw_<?php echo $__Context->comment->comment_srl ?>"><?php echo $__Context->lang->msg_is_secret ?> <?php echo $__Context->lang->msg_input_password ?></label></p>
				<p><input type="password" name="password" id="cpw_<?php echo $__Context->comment->comment_srl ?>" class="iText" /><input type="submit" class="btn" value="<?php echo $__Context->lang->cmd_input ?>" /></p>
				<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
				<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
				<input type="hidden" name="document_srl" value="<?php echo $__Context->comment->get('document_srl') ?>" />
				<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->get('comment_srl') ?>" />
			</form>
			<?php }else{ ?>
			<?php echo $__Context->comment->getContent(false) ?>
			<?php } ?>
			<?php if($__Context->comment->hasUploadedFiles()){ ?><div class="fileList">
				<button type="button" class="toggleFile" onclick="jQuery(this).next('ul.files').toggle();"><i class="fa fa-file"></i> <?php echo $__Context->lang->uploaded_file ?> [<strong><?php echo $__Context->comment->get('uploaded_count') ?></strong>]</button>
				<ul class="files">
					<?php if($__Context->comment->getUploadedFiles()&&count($__Context->comment->getUploadedFiles()))foreach($__Context->comment->getUploadedFiles() as $__Context->key=>$__Context->file){ ?><li><a href="<?php echo getUrl('');
echo $__Context->file->download_url ?>"><?php echo $__Context->file->source_filename ?> <span class="fileSize">[File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download:<?php echo number_format($__Context->file->download_count) ?>]</span></a></li><?php } ?>
				</ul>
			</div><?php } ?>
			<div class="nrow action">
				<?php if($__Context->comment->get('voted_count')!=0){ ?><span class="vote"><?php echo $__Context->lang->cmd_vote ?>:<?php echo $__Context->comment->get('voted_count')?$__Context->comment->get('voted_count'):0 ?></span><?php } ?>
				<div class="col s3">
				<?php if($__Context->oDocument->allowComment()){ ?><a href="<?php echo getUrl('act','dispBoardReplyComment','comment_srl',$__Context->comment->comment_srl) ?>" class="reply"><i class="fa fa-reply"></i> <?php echo $__Context->lang->cmd_reply ?></a><?php } ?>
			</div>
			<div class="col s3">
				<?php if($__Context->comment->isGranted()||!$__Context->comment->get('member_srl')){ ?><a href="<?php echo getUrl('act','dispBoardModifyComment','comment_srl',$__Context->comment->comment_srl) ?>" class="modify"><i class="fa fa-eraser"></i> <?php echo $__Context->lang->cmd_modify ?></a><?php } ?>
			</div>
			<div class="col s3">
				<?php if($__Context->comment->isGranted()||!$__Context->comment->get('member_srl')){ ?><a href="<?php echo getUrl('act','dispBoardDeleteComment','comment_srl',$__Context->comment->comment_srl) ?>" class="delete"><i class="fa fa-trash"></i> <?php echo $__Context->lang->cmd_delete ?></a><?php } ?>
			</div>
			<div class="col s3">
				<?php if($__Context->is_logged){ ?><a class="comment_<?php echo $__Context->comment->comment_srl ?> this" href="#popup_menu_area" onclick="return false"><?php echo $__Context->lang->cmd_comment_do ?></a><?php } ?>
			</div>
			</div>
		</li><?php } ?>
	</ul><?php } ?>
	<div class="nrow content-wrapper rp show-s">
	<div class="col s12 content-inner feedback">
	<?php if($__Context->oDocument->getCommentcount()){ ?><ul class="fbList">
		<?php if($__Context->oDocument->getComments()&&count($__Context->oDocument->getComments()))foreach($__Context->oDocument->getComments() as $__Context->key=>$__Context->comment){ ?><li<?php if(!$__Context->comment->get('depth')){ ?> class="fbItem"<?php };
if($__Context->comment->get('depth')){ ?> class="fbItem indent indent<?php echo ($__Context->comment->get('depth')) ?>"<?php } ?> id="comment_<?php echo $__Context->comment->comment_srl ?>">
			<?php 
			$__Context->cmt_depth = 0;
			if ($__Context->comment->get('depth')) $__Context->cmt_depth = $__Context->comment->get('depth');
			if ($__Context->cmt_depth % 2 > 0) $__Context->right = 'left_reply';
			if ($__Context->cmt_depth % 2 > 0) $__Context->fbMeta_ft = 'fbMeta_fr';
			if ($__Context->cmt_depth % 2 == 0) $__Context->right = 'right_reply';
			if ($__Context->cmt_depth % 2 == 0) $__Context->fbMeta_ft = 'fbMeta_fl';
			 ?>
			<div class="fbMeta <?php echo $__Context->fbMeta_ft ?>">
				<?php if($__Context->comment->getProfileImage()){ ?><img src="<?php echo $__Context->comment->getProfileImage() ?>" alt="Profile" class="profile" /><?php } ?>
				<?php if(!$__Context->comment->getProfileImage()){ ?><span class="profile"></span><?php } ?>
			</div>
			<div class="rp-inner <?php echo $__Context->right ?>">
				<div class="rp-content <?php echo $__Context->right ?>">
				<div class="arrow"></div>
					<div class="rp-contentInner">
						<?php if(!$__Context->comment->isAccessible()){ ?>
						<form action="./" method="get" class="xe_content secretForm" onsubmit="return procFilter(this, input_password)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
							<p><label for="cpw_<?php echo $__Context->comment->comment_srl ?>"><?php echo $__Context->lang->msg_is_secret ?> <?php echo $__Context->lang->msg_input_password ?></label></p>
							<p><input type="password" name="password" id="cpw_<?php echo $__Context->comment->comment_srl ?>" class="iText" /><input type="submit" class="btn" value="<?php echo $__Context->lang->cmd_input ?>" /></p>
							<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
							<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
							<input type="hidden" name="document_srl" value="<?php echo $__Context->comment->get('document_srl') ?>" />
							<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->get('comment_srl') ?>" />
						</form>
						<?php }else{ ?>
						<h3 class="author">
							<?php if(!$__Context->comment->member_srl && $__Context->comment->homepage){ ?><a href="<?php echo $__Context->comment->getHomepageUrl() ?>"><?php echo $__Context->comment->getNickName() ?></a><?php } ?>
							<?php if(!$__Context->comment->member_srl && !$__Context->comment->homepage){ ?><strong><?php echo $__Context->comment->getNickName() ?></strong><?php } ?>
							<?php if($__Context->comment->member_srl){ ?><a href="#popup_menu_area" class="member_<?php echo $__Context->comment->member_srl ?>" onclick="return false"><?php echo $__Context->comment->getNickName() ?></a><?php } ?>
						</h3>
						<p class="time"><?php echo $__Context->comment->getRegdate('Y.m.d H:i') ?></p>
						<?php echo $__Context->comment->getContent(false) ?>
						<?php } ?>
						<?php if($__Context->comment->hasUploadedFiles() && $__Context->module_info->dispUploadedFiles == 'yes' || $__Context->module_info->this_post == 'yes'){ ?><div class="nrow">
							<div class="col m9 s12">
								<?php if($__Context->comment->hasUploadedFiles()){ ?><div class="fileList">
									<span><i class="fa fa-files-o"></i></span><button type="button" class="toggleFile" onclick="jQuery(this).next('ul.files').toggle();"><?php echo $__Context->lang->uploaded_file ?> [<strong><?php echo $__Context->comment->get('uploaded_count') ?></strong>]</button>
									<ul class="files">
										<?php if($__Context->comment->getUploadedFiles()&&count($__Context->comment->getUploadedFiles()))foreach($__Context->comment->getUploadedFiles() as $__Context->key=>$__Context->file){ ?><li><a href="<?php echo getUrl('');
echo $__Context->file->download_url ?>"><?php echo $__Context->file->source_filename ?> <span class="fileSize">[File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download:<?php echo number_format($__Context->file->download_count) ?>]</span></a></li><?php } ?>
									</ul>
								</div><?php } ?>
							</div>
							<div class="col m3 s12">
								<?php if($__Context->is_logged && $__Context->module_info->this_comment == 'yes'){ ?><a class="comment_<?php echo $__Context->comment->comment_srl ?> waves-effect waves-teal btn-flat" href="#popup_menu_area" onclick="return false"><?php echo $__Context->lang->cmd_comment_do ?></a><?php } ?>
							</div>
						</div><?php } ?>
						<div class="nrow action">
							<?php if($__Context->comment->get('voted_count')!=0){ ?><span class="vote"><?php echo $__Context->lang->cmd_vote ?>:<?php echo $__Context->comment->get('voted_count')?$__Context->comment->get('voted_count'):0 ?></span><?php } ?>
							<div class="col s3">
							<?php if($__Context->oDocument->allowComment()){ ?><a href="<?php echo getUrl('act','dispBoardReplyComment','comment_srl',$__Context->comment->comment_srl) ?>" class="reply"><i class="fa fa-reply"></i> <?php echo $__Context->lang->cmd_reply ?></a><?php } ?>
						</div>
						<div class="col s3">
							<?php if($__Context->comment->isGranted()||!$__Context->comment->get('member_srl')){ ?><a href="<?php echo getUrl('act','dispBoardModifyComment','comment_srl',$__Context->comment->comment_srl) ?>" class="modify"><i class="fa fa-eraser"></i> <?php echo $__Context->lang->cmd_modify ?></a><?php } ?>
						</div>
						<div class="col s3">
							<?php if($__Context->comment->isGranted()||!$__Context->comment->get('member_srl')){ ?><a href="<?php echo getUrl('act','dispBoardDeleteComment','comment_srl',$__Context->comment->comment_srl) ?>" class="delete"><i class="fa fa-trash"></i> <?php echo $__Context->lang->cmd_delete ?></a><?php } ?>
						</div>
						<div class="col s3">
							<?php if($__Context->is_logged){ ?><a class="comment_<?php echo $__Context->comment->comment_srl ?> this" href="#popup_menu_area" onclick="return false"><?php echo $__Context->lang->cmd_comment_do ?></a><?php } ?>
						</div>
						</div>
					</div>
				</div>
			</div>
		</li><?php } ?>
	</ul><?php } ?>
</div>
</div>
	<?php if($__Context->oDocument->comment_page_navigation){ ?><div id="pagination-m" class="nrow show-s">
		<div class="col s4 page-prev text-center">
			<?php if($__Context->cpage != 1){ ?>
			<a href="<?php echo getUrl('cpage',$__Context->cpage-1) ?>#comment" class="btn-infinite"><?php echo $__Context->lang->cmd_prev ?></a>
			<?php } ?>
		</div>
		<div class="col s4 page-num text-center">
			<strong><?php echo $__Context->cpage ?> / <?php echo $__Context->oDocument->comment_page_navigation->last_page ?></strong>
		</div>
		<div class="col s4 page-next text-center">
			<?php if($__Context->cpage != $__Context->oDocument->comment_page_navigation->last_page){ ?>
			<a href="<?php echo getUrl('cpage',$__Context->cpage+1) ?>#comment" class="btn-infinite"><?php echo $__Context->lang->cmd_next ?></a>
			<?php } ?>
		</div>
	</div><?php } ?>
    <?php if($__Context->oDocument->comment_page_navigation){ ?><div class="pagination hide-s">
        <a href="<?php echo getUrl('cpage',1) ?>#comment" class="direction prev"><span></span><span></span> <?php echo $__Context->lang->first_page ?></a>
        <?php while($__Context->page_no=$__Context->oDocument->comment_page_navigation->getNextPage()){ ?>
			<?php if($__Context->cpage==$__Context->page_no){ ?><strong><?php echo $__Context->page_no ?></strong><?php } ?>
			<?php if($__Context->cpage!=$__Context->page_no){ ?><a href="<?php echo getUrl('cpage',$__Context->page_no) ?>#comment"><?php echo $__Context->page_no ?></a><?php } ?>
        <?php } ?>
        <a href="<?php echo getUrl('cpage',$__Context->oDocument->comment_page_navigation->last_page) ?>#comment" class="direction next"><?php echo $__Context->lang->last_page ?> <span></span><span></span></a>
    </div><?php } ?>
</div>
<!-- /COMMENT -->
