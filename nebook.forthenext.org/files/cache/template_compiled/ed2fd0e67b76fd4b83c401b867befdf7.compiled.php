<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_header.html') ?>
<!--#Meta:modules/board/skins/sketchbook5/js/editor.js--><?php $__tmp=array('modules/board/skins/sketchbook5/js/editor.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(Mobile::isMobileCheckByAgent() && $__Context->mi->m_editor!=3){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_write_form_mobile.html');
} ?>
<?php if(!Mobile::isMobileCheckByAgent() || $__Context->mi->m_editor==3){ ?><form action="./" method="post" onsubmit="return procFilter(this, window.insert)" class="bd_wrt bd_wrt_main clear"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<?php if($__Context->oDocument->getContentText()){ ?>
	<input type="hidden" name="content" value="<?php echo $__Context->oDocument->getContentText() ?>" />
	<?php }else{ ?>
	<input type="hidden" name="content" value="<?php echo htmlspecialchars($__Context->mi->content_default) ?>" />
	<?php } ?>
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
	
	<table class="bd_wrt_hd bd_tb">
		<tr>
			<td>
				<?php if($__Context->mi->use_category=='Y' && $__Context->category_list){ ?><select name="category_srl" class="category">
					<option value=""><?php echo $__Context->lang->category ?></option>
					<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?><option<?php if(!$__Context->val->grant){ ?> disabled="disabled"<?php } ?> value="<?php echo $__Context->val->category_srl ?>"<?php if($__Context->val->grant&&$__Context->val->selected||$__Context->val->category_srl==$__Context->oDocument->get('category_srl')){ ?> selected="selected"<?php } ?>>
						<?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?> (<?php echo $__Context->val->document_count ?>)
					</option><?php } ?>
				</select><?php } ?>
			</td>
			<td width="100%">
				<span class="itx_wrp">
					<label for="postTitle"><?php echo $__Context->lang->title ?></label>
					<input type="text" name="title" class="itx" id="postTitle" title="<?php echo $__Context->lang->title ?>"<?php if($__Context->oDocument->getTitleText()){ ?> value="<?php echo htmlspecialchars($__Context->oDocument->getTitleText()) ?>"<?php } ?> />
				</span>
			</td>
			<?php if($__Context->is_logged && !$__Context->oDocument->isExists() || $__Context->oDocument->get('status')=='TEMP'){ ?><td class="m_no"><button type="button" class="bd_btn" onclick="doDocumentLoad(this);"><?php echo $__Context->lang->cmd_load ?></button></td><?php } ?>
		</tr>
	</table>
	<?php if(count($__Context->extra_keys)){ ?><table class="et_vars exForm bd_tb">
		<caption><strong><em>*</em></strong> <small>: <?php echo $__Context->lang->is_required ?></small></caption>
		<?php if($__Context->extra_keys&&count($__Context->extra_keys))foreach($__Context->extra_keys as $__Context->key=>$__Context->val){ ?><tr>
			<th scope="row"><?php if($__Context->val->is_required=='Y'){ ?><em>*</em><?php } ?> <?php echo $__Context->val->name ?></th>
			<td><?php echo $__Context->val->getFormHTML() ?></td>
		</tr><?php } ?>
	</table><?php } ?>
	<div class="get_editor"><?php echo $__Context->oDocument->getEditor() ?></div>
	
	<div class="tag itx_wrp">
		<span class="itx_wrp">
			<label for="tags"><?php echo $__Context->lang->tag ?> : <?php echo $__Context->lang->about_tag ?></label>
            <input type="text" name="tags" id="tags" value="<?php echo htmlspecialchars($__Context->oDocument->get('tags')) ?>" class="itx" />
		</span>
	</div>
	
	<div class="edit_opt">
		<?php if(!$__Context->is_logged){ ?>
		<span class="itx_wrp">
			<label for="nick_name"><?php echo $__Context->lang->writer ?></label>
            <input type="text" name="nick_name" id="nick_name" value="<?php echo $__Context->oDocument->getNickName() ?>" class="itx n_p" />
		</span>
		<span class="itx_wrp">
			<label for="password"><?php echo $__Context->lang->password ?></label>
            <input type="password" name="password" id="password" class="itx n_p" />
		</span>
		<span class="itx_wrp">
			<label for="email_address"><?php echo $__Context->lang->email_address ?></label>
            <input type="text" name="email_address" id="email_address" value="<?php echo htmlspecialchars($__Context->oDocument->get('email_address')) ?>" class="itx m_h" />
		</span>
		<span class="itx_wrp">
			<label for="homepage"><?php echo $__Context->lang->homepage ?></label>
            <input type="text" name="homepage" id="homepage" value="<?php echo htmlspecialchars($__Context->oDocument->get('homepage')) ?>" class="itx m_h" />
		</span>
		<?php } ?>
	</div>
	
	<div class="opt_chk clear">
		<?php if($__Context->grant->manager || $__Context->mi->tl_color=='2'){ ?><div class="section">
<!--#JSPLUGIN:ui.colorpicker--><?php Context::loadJavascriptPlugin('ui.colorpicker'); ?>
			<span class="itx_wrp color_wrp" title="<?php echo $__Context->lang->title_color ?>">
				<label for="title_color"><?php echo $__Context->lang->title_color ?></label>
				<input type="text" name="title_color" id="title_color" class="itx color-indicator"<?php if($__Context->oDocument->get('title_color')!='N'){ ?> value="<?php echo $__Context->oDocument->get('title_color') ?>"<?php } ?> />
			</span>
			<input type="checkbox" name="title_bold" id="title_bold" value="Y"<?php if($__Context->oDocument->get('title_bold')=='Y'){ ?> checked="checked"<?php } ?> />
			<label for="title_bold"><?php echo $__Context->lang->title_bold ?></label>
			<?php if($__Context->grant->manager){ ?>
			<input type="checkbox" name="is_notice" value="Y"<?php if($__Context->oDocument->isNotice()){ ?> checked="checked"<?php } ?> id="is_notice" />
			<label for="is_notice"><?php echo $__Context->lang->notice ?></label>
			<?php } ?>
		</div><?php } ?>
		<div class="section">
			<input type="checkbox" name="comment_status" value="ALLOW"<?php if($__Context->oDocument->allowComment()){ ?> checked="checked"<?php } ?> id="comment_status" />
			<label for="comment_status"><?php echo $__Context->lang->allow_comment ?></label>
			<input type="checkbox" name="allow_trackback" value="Y"<?php if($__Context->oDocument->allowTrackback()){ ?> checked="checked"<?php } ?> id="allow_trackback" />
			<label for="allow_trackback"><?php echo $__Context->lang->allow_trackback ?></label>
		</div>
		<?php if($__Context->is_logged){ ?><div class="section">
			<input type="checkbox" name="notify_message" value="Y"<?php if($__Context->oDocument->useNotify() || (!$__Context->oDocument->useNotify() && @in_array('notify',$__Context->mi->wrt_opt))){ ?> checked="checked"<?php } ?> id="notify_message" />
			<label for="notify_message"><?php echo $__Context->lang->notify ?></label>
		</div><?php } ?>
		<?php if(is_array($__Context->status_list)){ ?><div class="section">
			<?php if($__Context->status_list&&count($__Context->status_list))foreach($__Context->status_list AS $__Context->key=>$__Context->value){ ?>
			<?php if(@!in_array('secret',$__Context->mi->wrt_opt)){ ?><input type="radio" name="status" value="<?php echo $__Context->key ?>" id="<?php echo $__Context->key ?>"<?php if($__Context->oDocument->get('status')==$__Context->key || ($__Context->key=='PUBLIC' && !$__Context->document_srl)){ ?> checked="checked"<?php } ?> /><?php } ?>
			<?php if(@in_array('secret',$__Context->mi->wrt_opt)){ ?><input type="radio" name="status" value="<?php echo $__Context->key ?>" id="<?php echo $__Context->key ?>"<?php if($__Context->oDocument->get('status')==$__Context->key || ($__Context->key=='SECRET' && !$__Context->document_srl)){ ?> checked="checked"<?php } ?> /><?php } ?>
			<label for="<?php echo $__Context->key ?>"><?php echo $__Context->value ?></label>
			<?php } ?>
		</div><?php } ?>
	</div>
	
	<?php if($__Context->mi->cmt_wrt=='sns'){ ?><div class="sns_wrt">
		<p>※ <?php echo $__Context->lang->sns_wrt ?>.</p>
		<img class="zbxe_widget_output" widget="socialxe_info" colorset="<?php echo $__Context->mi->colorset ?>" skin="default"  />
	</div><?php } ?>
	
	<div class="regist">
		<?php if($__Context->is_logged && !$__Context->oDocument->isExists() || $__Context->oDocument->get('status')=='TEMP'){ ?><button type="button" onclick="doDocumentSave(this);" class="bd_btn temp"><?php echo $__Context->lang->cmd_temp_save ?></button><?php } ?>
		<input type="button" value="<?php echo $__Context->lang->cmd_preview ?>" onclick="doDocumentPreview(this);return false" class="bd_btn m_no" />
		<input type="submit" value="<?php echo $__Context->lang->cmd_submit ?>" class="bd_btn blue" />
		<button type="button" onclick="history.back()" class="bd_btn cancle"><?php echo $__Context->lang->cmd_back ?></button>
	</div>
</form><?php } ?>
</div>