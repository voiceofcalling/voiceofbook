<?php if(!defined("__XE__"))exit;?><!--#JSPLUGIN:filebox--><?php Context::loadJavascriptPlugin('filebox'); ?>
<div class="x_page-header">
	<h1><?php echo $__Context->lang->menu_gnb_sub['filebox'] ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_config_filebox" target="_blank"><?php echo $__Context->lang->help ?></a></h1>
</div>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/module/tpl/adminFileBox/1'){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
	<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
</div><?php } ?>
<section class="section">
	<h1><?php echo $__Context->lang->upload_file ?></h1>
	<form action="./" class="x_form-horizontal" method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="module" value="module" />
		<input type="hidden" name="act" value="procModuleFileBoxAdd" />
		<input type="hidden" name="vid" value="<?php echo escape($__Context->vid, false) ?>" />
		<input type="hidden" name="filter" value="<?php echo escape($__Context->filter, false) ?>" />
		<input type="hidden" name="input" value="<?php echo escape($__Context->input, false) ?>" />
		<input type="hidden" name="xe_validator_id" value="modules/module/tpl/adminFileBox/1" />
		<div class="x_control-group __attribute" data-count="1">
			<label for="attribute_name1" class="x_control-label __attribute_name_label"><?php echo $__Context->lang->attribute_name ?></label>
			<div class="x_controls">
				<input type="text" name="attribute_name[]" id="attribute_name1" class="__attribute_name" style="margin-right:20px" />
				<label for="attribute_value1" class="x_inline __attribute_value_label"><?php echo $__Context->lang->attribute_value ?></label>
				<input type="text" name="attribute_value[]" id="attribute_value1" class="__attribute_value" style="margin-right:20px" />
				<span class="x_btn-group">
					<button type="button" class="x_btn __addBtn" onclick="addRow('fileUp');"><?php echo $__Context->lang->cmd_add ?></button>
					<button type="button" class="x_btn __deleteBtn" onclick="clearRow(this);"><?php echo $__Context->lang->cmd_delete ?></button>
				</span>
			</div>
		</div>
		<div class="x_control-group">
			<label for="file" class="x_control-label"><?php echo $__Context->lang->file ?></label>
			<div class="x_controls">
				<input type="file" name="addfile" id="file" />
			</div>
		</div>
		<div class="btnArea">
			<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</form>
</section>
<section class="section">
	<h1><?php echo $__Context->lang->filebox_list ?></h1>
	<table class="x_table x_table-striped x_table-hover">
		<thead>
			<tr>
				<th scope="col"><?php echo $__Context->lang->file ?></th>
				<th scope="col"><?php echo $__Context->lang->attribute_name ?>:<?php echo $__Context->lang->attribute_value ?></th>
				<th scope="col"><?php echo $__Context->lang->cmd_delete ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->filebox_list&&count($__Context->filebox_list))foreach($__Context->filebox_list as $__Context->key=>$__Context->val){ ?><tr>
				<td>
					<?php if($__Context->val->fileextension=='swf'){ ?>
						<object height="100" width="100" flashvars="" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" xmlns="http://www.w3.org/1999/xhtml">
							<param value="<?php echo escape(getUrl(''), false);
echo escape($__Context->val->filename, false) ?>" name="movie" xmlns="http://www.w3.org/1999/xhtml" />
							<param value="transparent" name="wmode" xmlns="http://www.w3.org/1999/xhtml" />
							<param value="sameDomain" name="allowScriptAccess" xmlns="http://www.w3.org/1999/xhtml" />
							<param value="high" name="quality" xmlns="http://www.w3.org/1999/xhtml" />
							<embed height="100" width="100" wmode="transparent" flashvars="" autostart="false" src="<?php echo escape(getUrl(''), false);
echo escape($__Context->val->filename, false) ?>" xmlns="http://www.w3.org/1999/xhtml" />
						</object>
					<?php }elseif(in_array($__Context->val->fileextension,array('gif','png','jpg','jpeg'))){ ?>
						<img src="<?php echo escape(getUrl(''), false);
echo escape($__Context->val->filename, false) ?>" style="max-height:60px" />
					<?php } ?>
				</td>
				<td>
					<?php if($__Context->val->attributes&&count($__Context->val->attributes))foreach($__Context->val->attributes as $__Context->name=>$__Context->value){ ?><p>
						<?php echo htmlspecialchars($__Context->name, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>: <?php echo escape($__Context->value, false) ?>
					</p><?php } ?>
				</td>
				<td>
					<button type="button" class="x_btn x_btn-link" style="white-space:nowrap" onclick="XE.filebox.deleteFile('<?php echo escape($__Context->val->module_filebox_srl, false) ?>');"><?php echo $__Context->lang->cmd_delete ?></button>
				</td>
			</tr><?php } ?>
		</tbody>
	</table>
	
	<?php if($__Context->page_navigation){ ?><form action="./" class="x_pagination x_pagination-centered" ><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="<?php echo escape($__Context->module, false) ?>" />
		<input type="hidden" name="act" value="<?php echo escape($__Context->act, false) ?>" />
		<ul>
			<li<?php if(!$__Context->page || $__Context->page == 1){ ?> class="x_disabled"<?php } ?>><a href="<?php echo escape(getUrl('page', ''), false) ?>">&laquo; <?php echo $__Context->lang->first_page ?></a></li>
			<?php if($__Context->page_navigation->first_page != 1 && $__Context->page_navigation->first_page + $__Context->page_navigation->page_count > $__Context->page_navigation->last_page - 1 && $__Context->page_navigation->page_count != $__Context->page_navigation->total_page){ ?>
				<?php $__Context->isGoTo = true ?>
				<li>
					<a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
					<?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
						<input type="number" min="1" max="<?php echo escape($__Context->page_navigation->last_page, false) ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
						<button type="submit" class="x_add-on">Go</button>
					</span><?php } ?>
				</li>
			<?php } ?>
			<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
				<?php $__Context->last_page = $__Context->page_no ?>
				<li<?php if($__Context->page_no == $__Context->page){ ?> class="x_active"<?php } ?>><a  href="<?php echo escape(getUrl('page', $__Context->page_no), false) ?>"><?php echo escape($__Context->page_no, false) ?></a></li>
			<?php } ?>
			<?php if($__Context->last_page != $__Context->page_navigation->last_page && $__Context->last_page + 1 != $__Context->page_navigation->last_page){ ?>
				<?php $__Context->isGoTo = true ?>
				<li>
					<a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
					<?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
						<input type="number" min="1" max="<?php echo escape($__Context->page_navigation->last_page, false) ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
						<button type="submit" class="x_add-on">Go</button>
					</span><?php } ?>
				</li>
				
			<?php } ?>
			<li<?php if($__Context->page == $__Context->page_navigation->last_page){ ?> class="x_disabled"<?php } ?>><a href="<?php echo escape(getUrl('page', $__Context->page_navigation->last_page), false) ?>" title="<?php echo escape($__Context->page_navigation->last_page, false) ?>"><?php echo $__Context->lang->last_page ?> &raquo;</a></li>
		</ul>
	</form><?php } ?>
</section>
