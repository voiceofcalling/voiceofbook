<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1><?php echo $__Context->lang->installed_addons ?></h1>
</div>
<h2><?php echo escape($__Context->addon_info->title, false) ?></h2>
<table class="x_table">
	<tbody>
		<tr>
			<th class="nowr"><?php echo $__Context->lang->version ?></th>
			<td><?php echo escape($__Context->addon_info->version, false) ?> (<?php echo escape(zdate($__Context->addon_info->date, 'Y-m-d'), false) ?>)</td>
		</tr>
		<tr>
			<th class="nowr"><?php echo $__Context->lang->author ?></th>
			<td>
				<?php if($__Context->addon_info->author&&count($__Context->addon_info->author))foreach($__Context->addon_info->author as $__Context->author){ ?>
					<?php echo escape($__Context->author->name, false) ?> (<?php if($__Context->author->homepage){ ?><a href="<?php echo escape($__Context->author->homepage, false) ?>" target="_blank"><?php echo escape($__Context->author->homepage, false) ?></a><?php } ?>, <?php if($__Context->author->email_address){ ?><a href="mailto:<?php echo escape($__Context->author->email_address, false) ?>"><?php echo escape($__Context->author->email_address, false) ?></a><?php } ?>) <br />
				<?php } ?>
			</td>
		</tr>
		<?php if($__Context->addon_info->homepage){ ?><tr>
			<th class="nowr"><?php echo $__Context->lang->homepage ?></th>
			<td><a href="<?php echo escape($__Context->addon_info->homepage, false) ?>" target="_blank"><?php echo escape($__Context->addon_info->homepage, false) ?></a></td>
		</tr><?php } ?>
		<?php if($__Context->addon_info->license){ ?><tr>
			<th class="nowr"><?php echo $__Context->lang->addon_license ?></th>
			<td><a<?php if($__Context->addon_info->license_link){ ?> href="<?php echo escape($__Context->addon_info->license_link, false) ?>"<?php } ?> target="_blank"><?php echo escape($__Context->addon_info->license, false) ?></a></td>
		</tr><?php } ?>
		<?php if($__Context->addon_info->description){ ?><tr>
			<th class="nowr"><?php echo $__Context->lang->description ?></th>
			<td><?php echo $__Context->addon_info->description ?></td>
		</tr><?php } ?>
	</tbody>
</table>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/addon/tpl/setup_addon/1'){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
	<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
</div><?php } ?>
<form action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<section class="section">
	<input type="hidden" name="module" value="<?php echo escape($__Context->module, false) ?>" />
	<input type="hidden" name="act" value="procAddonAdminSetupAddon" />
	<input type="hidden" name="addon_name" value="<?php echo escape($__Context->addon_info->addon_name, false) ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/addon/tpl/setup_addon/1" />
	<?php if(count($__Context->addon_info->extra_vars)){ ?>
		<?php if($__Context->addon_info->extra_vars&&count($__Context->addon_info->extra_vars))foreach($__Context->addon_info->extra_vars as $__Context->id=>$__Context->var){ ?>
			<?php if($__Context->group != $__Context->var->group){ ?>
				<h2 style="margin-top:50px;"><?php echo escape($__Context->var->group, false) ?></h2>
				<?php $__Context->group = $__Context->var->group ?>
			<?php } ?>
			<?php $__Context->not_first = true ?>
			<?php if(!$__Context->not_first && $__Context->group != $__Context->var->group){ ?><div class="x_control-group"></div><?php } ?>
			<div class="x_control-group">
				<label class="x_control-label"<?php if($__Context->var->type != 'textarea'){ ?> for="<?php echo escape($__Context->var->name, false) ?>"<?php };
if($__Context->var->type == 'textarea'){ ?> for="lang_<?php echo escape($__Context->var->name, false) ?>"<?php } ?>><?php echo escape($__Context->var->title, false) ?></label>
				<div class="x_controls">
					<?php if($__Context->var->type == 'text'){ ?><input type="text" name="<?php echo escape($__Context->var->name, false) ?>" id="<?php echo escape($__Context->var->name, false) ?>" value="<?php echo htmlspecialchars($__Context->var->value, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>"><?php } ?>
					<?php if($__Context->var->type == 'textarea'){ ?><textarea name="<?php echo escape($__Context->var->name, false) ?>" id="<?php echo escape($__Context->var->name, false) ?>" class="lang_code" rows="8" cols="42"><?php echo htmlspecialchars($__Context->var->value, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?></textarea><?php } ?>
					<?php if($__Context->var->type == 'select'){ ?><select name="<?php echo escape($__Context->var->name, false) ?>" id="<?php echo escape($__Context->var->name, false) ?>">
						<?php if($__Context->var->options&&count($__Context->var->options))foreach($__Context->var->options as $__Context->option){ ?><option value="<?php echo escape($__Context->option->value, false) ?>"<?php if($__Context->var->value == $__Context->option->value){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->option->title, false) ?></option><?php } ?>
					</select><?php } ?>
					<span class="x_help-inline"><?php echo nl2br($__Context->var->description) ?></span>
				</div>
			</div>
		<?php } ?>
	<?php } ?>
	<?php if(!count($__Context->addon_info->extra_vars)){ ?><div class="message info">
		<p><?php echo $__Context->lang->msg_not_exist_option ?></p>
	</div><?php } ?>
</section>
<section class="section">
	<?php if($__Context->mid_list){ ?>
		<h1><?php echo $__Context->lang->target ?></h1>
		<div class="x_control-group"><?php echo $__Context->lang->about_addon_mid ?></div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->run_method ?></label>
			<div class="x_controls">
				<select name="xe_run_method">
					<option value="run_selected"<?php if($__Context->addon_info->xe_run_method === 'run_selected'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->run_selected_module ?></option>
					<option value="no_run_selected"<?php if($__Context->addon_info->xe_run_method === 'no_run_selected'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->no_run_selected_module ?></option>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->target ?></label>
			<div class="x_controls">
				<label for="check_all"><input type="checkbox" id="check_all" /> Check all</label>
				<?php if($__Context->mid_list&&count($__Context->mid_list))foreach($__Context->mid_list as $__Context->module_category_srl=>$__Context->modules){ ?>
				<?php if(count($__Context->mid_list) > 1){ ?>
				<fieldset>
					<legend><?php if($__Context->modules->title){;
echo escape($__Context->modules->title, false);
}else{;
echo $__Context->lang->none_category;
} ?></legend>
				<?php } ?>
					<?php if($__Context->modules->list&&count($__Context->modules->list))foreach($__Context->modules->list as $__Context->key=>$__Context->val){ ?><label>
						<input type="checkbox" value="<?php echo escape($__Context->key, false) ?>" name="mid_list[]" id="chk_mid_list_<?php echo escape($__Context->key, false) ?>"<?php if(in_array($__Context->key, $__Context->addon_info->mid_list)){ ?> checked="checked"<?php } ?>/>
						<?php echo escape($__Context->key, false) ?> (<?php echo escape($__Context->val->browser_title, false) ?>)
					</label><?php } ?>
				<?php if(count($__Context->mid_list) > 1){ ?>
				</fieldset>
				<?php } ?>
				<?php } ?>
			</div>
		</div>
	<?php } ?>
</section>
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</div>
</form>
<script>
(function($){
	$('#check_all')
		.bind('click', function(e){
			if (this.checked){
				$('input[name=mid_list\\[\\]]').attr('checked', 'checked');
			}else{
				$('input[name=mid_list\\[\\]]').removeAttr('checked');
			}
		});
})(jQuery);
</script>
