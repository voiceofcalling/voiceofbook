<?php if(!defined("__XE__"))exit;?><div class="cmt_editor"<?php if($__Context->mi->cmt_wrt_position=='cmt_wrt_btm' && $__Context->oDocument->getCommentcount()){ ?> style="margin-top:30px"<?php } ?>>
<label for="editor_<?php echo $__Context->oDocument->document_srl ?>" class="cmt_editor_tl fl"><em>✔</em><strong><?php echo $__Context->lang->write_comment ?></strong></label>
<?php if($__Context->mi->select_editor!='N'){ ?><div class="editor_select bubble fr m_no" title="<?php echo $__Context->lang->noti_rfsh ?>">
	<a class="tg_btn2" href="#" data-href="#editor_select"><em class="fa fa-info-circle bd_info_icon"></em> <?php echo $__Context->lang->select_editor ?></a>
	<?php if($__Context->rd_idx==0){ ?><div id="editor_select" class="tg_cnt2 wrp m_no"><button type="button" class="tg_blur2"></button>
		<a<?php if($__Context->mi->cmt_wrt=='simple'){ ?> class="on"<?php } ?> href="#" onclick="jQuery.cookie('bd_editor','simple');location.reload();return false"><em>✔ </em><?php echo $__Context->lang->textarea ?></a>
		<a<?php if($__Context->mi->cmt_wrt=='editor'){ ?> class="on"<?php } ?> href="#" onclick="jQuery.cookie('bd_editor','editor');location.reload();return false"><em>✔ </em><?php echo $__Context->lang->wysiwyg ?></a>
		<?php if($__Context->mi->select_editor=='2' || $__Context->mi->cmt_wrt=='sns'){ ?><a<?php if($__Context->mi->cmt_wrt=='sns'){ ?> class="on"<?php } ?> href="#" onclick="jQuery.cookie('bd_editor','sns');location.reload();return false"><em>✔ </em><?php echo $__Context->lang->sxc_editor ?></a><?php } ?>
		<span class="edge"></span><button type="button" class="tg_blur2"></button>
		<i class="ie8_only bl"></i><i class="ie8_only br"></i>
	</div><?php } ?>
</div><?php } ?>
<?php if($__Context->grant->write_comment && $__Context->oDocument->isEnableComment()){ ?>
<form action="./" method="post" onsubmit="return procFilter(this, insert_comment)" class="bd_wrt cmt_wrt clear"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
	<input type="hidden" name="comment_srl" value="" />
	<input type="hidden" name="content" value="" />
	<?php if($__Context->mi->cmt_wrt=='editor'){ ?><div class="wysiwyg"><?php echo $__Context->oDocument->getCommentEditor() ?></div><?php } ?>
	<?php if($__Context->mi->cmt_wrt=='simple'){ ?><div class="simple_wrt">
		<?php if($__Context->logged_info->profile_image->src){ ?><img class="profile img" src="<?php echo $__Context->logged_info->profile_image->src ?>" alt="profile" /><?php } ?>
		<?php if(!$__Context->logged_info->profile_image->src){ ?><span class="profile img no_img">?</span><?php } ?>
		<div class="text">
			<input type="hidden" name="use_html" value="Y" />
			<input type="hidden" id="htm_<?php echo $__Context->oDocument->document_srl ?>" value="n" />
			<textarea id="editor_<?php echo $__Context->oDocument->document_srl ?>" cols="50" rows="4"></textarea>
		</div>
		<input type="submit" value="<?php echo $__Context->lang->cmd_submit ?>" class="bd_btn" />
	</div><?php } ?>
	<div class="edit_opt clear"<?php if($__Context->mi->cmt_wrt!='editor'){ ?> style="display:none"<?php } ?>>
		<?php if(!$__Context->is_logged){ ?>
		<span class="itx_wrp">
			<label for="nick_name_<?php echo $__Context->oDocument->document_srl ?>"><?php echo $__Context->lang->writer ?></label>
			<input type="text" name="nick_name" id="nick_name_<?php echo $__Context->oDocument->document_srl ?>" class="itx n_p" />
		</span>
		<span class="itx_wrp">
			<label for="password_<?php echo $__Context->oDocument->document_srl ?>"><?php echo $__Context->lang->password ?></label>
			<input type="password" name="password" id="password_<?php echo $__Context->oDocument->document_srl ?>" class="itx n_p" />
		</span>
		<span class="itx_wrp">
			<label for="email_address_<?php echo $__Context->oDocument->document_srl ?>"><?php echo $__Context->lang->email_address ?></label>
			<input type="text" name="email_address" id="email_address_<?php echo $__Context->oDocument->document_srl ?>" class="itx m_h" />
		</span>
		<span class="itx_wrp">
			<label for="homepage_<?php echo $__Context->oDocument->document_srl ?>"><?php echo $__Context->lang->homepage ?></label>
			<input type="text" name="homepage" id="homepage_<?php echo $__Context->oDocument->document_srl ?>" class="itx m_h" />
		</span>
		<?php } ?>
        <?php if($__Context->mi->cmt_wrt=='editor'){ ?><input type="submit" value="<?php echo $__Context->lang->cmd_submit ?>" class="bd_btn fr" /><?php } ?>
		<div class="opt_chk">
			<?php if($__Context->is_logged){ ?>
			<input type="checkbox" name="notify_message" value="Y" id="notify_message_<?php echo $__Context->oDocument->document_srl ?>"<?php if(@in_array('notify',$__Context->mi->wrt_opt)){ ?> checked="checked"<?php } ?> />
			<label for="notify_message_<?php echo $__Context->oDocument->document_srl ?>"><?php echo $__Context->lang->notify ?></label>
			<?php } ?>
			<?php if($__Context->mi->use_status!='PUBLIC'){ ?>
			<input type="checkbox" name="is_secret" value="Y" id="is_secret_<?php echo $__Context->oDocument->document_srl ?>"<?php if(@in_array('secret',$__Context->mi->wrt_opt)){ ?> checked="checked"<?php } ?> />
			<label for="is_secret_<?php echo $__Context->oDocument->document_srl ?>"><?php echo $__Context->lang->secret ?></label>
			<?php } ?>
		</div>
	</div>
</form>
<?php if($__Context->rd_idx==0){ ?><div id="re_cmt">
	<label for="editor_2" class="cmt_editor_tl fl"><i class="fa fa-share fa-flip-vertical re"></i><strong><?php echo $__Context->lang->write_comment ?></strong></label>
	<div class="editor_select fr">
		<a class="wysiwyg m_no" href="#"><em class="fa fa-info-circle bd_info_icon"></em> <?php echo $__Context->lang->use_wysiwyg ?></a>
		<a class="close" href="#" onclick="jQuery('#re_cmt').fadeOut().parent().find('.re_comment').focus();return false"><i class="fa fa-times"></i> <?php echo $__Context->lang->cmd_close ?></a>
	</div>
	<form action="./" method="post" onsubmit="return procFilter(this,insert_comment)" class="bd_wrt clear"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
		<input type="hidden" name="content" value="" />
		<input type="hidden" name="parent_srl" value="" />
		<input type="hidden" name="use_html" value="Y" />
		<div class="simple_wrt">
			<input type="hidden" id="htm_2" value="n" />
			<textarea id="editor_2" cols="50" rows="8"></textarea>
		</div>
		<div class="edit_opt">
			<?php if(!$__Context->is_logged){ ?>
			<span class="itx_wrp">
				<label for="nick_name"><?php echo $__Context->lang->writer ?></label>
				<input type="text" name="nick_name" id="nick_name" class="itx n_p" />
			</span>
			<span class="itx_wrp">
				<label for="password"><?php echo $__Context->lang->password ?></label>
				<input type="password" name="password" id="password" class="itx n_p" />
			</span>	
			<span class="itx_wrp">
				<label for="email_address"><?php echo $__Context->lang->email_address ?></label>
				<input type="text" name="email_address" id="email_address" class="itx m_h" />
			</span>	
			<span class="itx_wrp">
				<label for="homepage"><?php echo $__Context->lang->homepage ?></label>
				<input type="text" name="homepage" id="homepage" class="itx m_h" />
			</span>
			<?php } ?>
            <input type="submit" value="<?php echo $__Context->lang->cmd_submit ?>" class="bd_btn fr" />
		</div>
		<span class="opt_chk">
			<?php if($__Context->is_logged){ ?>
				<input type="checkbox" name="notify_message" value="Y" id="notify_message"<?php if(@in_array('notify',$__Context->mi->wrt_opt)){ ?> checked="checked"<?php } ?> />
				<label for="notify_message"><?php echo $__Context->lang->notify ?></label>
			<?php } ?>
			<?php if($__Context->mi->use_status!='PUBLIC'){ ?>
				<input type="checkbox" name="is_secret" value="Y" id="is_secret"<?php if(@in_array('secret',$__Context->mi->wrt_opt)){ ?> checked="checked"<?php } ?> />
				<label for="is_secret"><?php echo $__Context->lang->secret ?></label>
			<?php } ?>
		</span>
	</form>
</div><?php } ?>
<?php }else{ ?>
<div class="bd_wrt clear">
	<div class="simple_wrt">
		<span class="profile img no_img">?</span>
		<div class="text">
			<?php if(!$__Context->is_logged){ ?><a class="cmt_disable bd_login" href="#"><?php echo $__Context->lang->write_comment ?> <?php echo $__Context->lang->msg_not_permitted ?> <?php echo $__Context->lang->bd_login ?></a><?php } ?>
			<?php if($__Context->is_logged){ ?><div class="cmt_disable bd_login"><?php echo $__Context->lang->write_comment ?> <?php echo $__Context->lang->msg_not_permitted ?></div><?php } ?>
		</div>
		<input type="button" value="<?php echo $__Context->lang->cmd_submit ?>" disabled="disabled" class="bd_btn" />
	</div>
</div>
<?php } ?>
</div>