<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/layout/tpl','header.html') ?>
<!--#Meta:modules/layout/tpl/js/adminList.js--><?php $__tmp=array('modules/layout/tpl/js/adminList.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script>
	xe.lang.confirm_delete = '<?php echo $__Context->lang->confirm_delete ?>';
</script>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/layout/tpl','sub_tab.html') ?>
<table class="x_table x_table-striped x_table-hover">
	<thead>
		<tr>
			<th scope="col" class="nowr"><?php echo $__Context->lang->number ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->layout_name ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->title ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->regdate ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_setup ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_edit ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_copy ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_delete ?></th>
		</tr>
	</thead>
	<tbody>
		<?php $__Context->count=1 ?>
		<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->layout){ ?>
		<?php $__Context->layout_name = $__Context->layout['title'] ?>
		<?php unset($__Context->layout['title']) ?>
		<?php if($__Context->layout&&count($__Context->layout))foreach($__Context->layout as $__Context->no=>$__Context->item){ ?><tr>
			<?php if($__Context->no === 0){ ?><td rowspan="<?php echo escape(count($__Context->layout), false) ?>" ><?php echo escape($__Context->count++, false) ?></td><?php } ?>
			<?php if($__Context->no === 0){ ?><td rowspan="<?php echo escape(count($__Context->layout), false) ?>" ><?php echo escape($__Context->layout_name, false) ?></td><?php } ?>
			<td><?php echo escape($__Context->item->title, false) ?></td>
			<td><?php echo escape(zdate($__Context->item->regdate, "Y-m-d"), false) ?></td>
			<td><a href="<?php echo escape(getUrl('act', 'dispLayoutAdminModify', 'layout_srl', $__Context->item->layout_srl), false) ?>"><?php echo $__Context->lang->cmd_setup ?></a></td>
			<td><a href="<?php echo escape(getUrl('act', 'dispLayoutAdminEdit', 'layout_srl', $__Context->item->layout_srl), false) ?>"><?php echo $__Context->lang->cmd_edit ?></a></td>
			<td><a href="<?php echo escape(getUrl('', 'module', 'layout', 'act', 'dispLayoutAdminCopyLayout', 'layout_srl', $__Context->item->layout_srl), false) ?>" onclick="popopen(this.href);return false;" title="<?php echo $__Context->lang->cmd_copy ?>"><?php echo $__Context->lang->cmd_copy ?></a></td>
			<td>
				<?php if(count($__Context->layout) > 1){;
Context::addJsFile("modules/layout/ruleset/deleteLayout.xml", FALSE, "", 0, "body", TRUE, "") ?><form class="layout_delete_form"  action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="deleteLayout" />
					<input type="hidden" name="module" value="layout" />
					<input type="hidden" name="act" value="procLayoutAdminDelete" />
					<input type="hidden" name="layout_srl" value="<?php echo escape($__Context->item->layout_srl, false) ?>" />
					<input class="x_btn x_btn-link" type="submit" value="<?php echo $__Context->lang->cmd_delete ?>" />
					<input type="hidden" name="xe_validator_id" value="modules/layout/tpl/layout_all_instance_list/1" />
				</form><?php } ?>
			</td>
		</tr><?php } ?>
		<?php } ?>
	</tbody>
</table>
