<?php if(!defined("__XE__"))exit;?><form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
	<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
	<table class="bd_tb">
		<tr>
			<td>
				<span class="select itx">
					<select name="search_target">
						<?php if($__Context->search_option&&count($__Context->search_option))foreach($__Context->search_option as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->search_target==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
					</select>
				</span>
			</td>
			<td class="itx_wrp">
				<input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" class="itx srch_itx" />
			</td>
			<td>
				<button type="submit" onclick="jQuery(this).parents('form').submit();return false" class="bd_btn"><?php echo $__Context->lang->cmd_search ?></button>
				<?php if($__Context->last_division){ ?><a class="bd_btn" href="<?php echo getUrl('page',1,'document_srl','','division',$__Context->last_division,'last_division','') ?>"><?php echo $__Context->lang->cmd_search_next ?></a><?php } ?>
			</td>
		</tr>
	</table>
</form>