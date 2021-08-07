<?php if(!defined("__XE__"))exit;?><h1 class="h1"><?php echo $__Context->lang->cmd_view_saved_document ?></h1>
<!-- 목록 -->
<table class="x_table x_table-striped x_table-hover">
	<caption>Total : <?php echo escape(number_format($__Context->total_count), false) ?>, Page <?php echo escape(number_format($__Context->page), false) ?>/<?php echo escape(number_format($__Context->total_page), false) ?></caption>
	<thead>
		<tr>
			<th class="title"><?php echo $__Context->lang->date ?></th>
			<th class="title"><?php echo $__Context->lang->title ?></th>
			<th class="title"><?php echo $__Context->lang->cmd_select ?></th>
		</tr>
	</thead>
	<tbody>
		<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no => $__Context->val){ ?>
		<tr>
			<td><?php echo escape($__Context->val->getRegdate("Y-m-d H:i:s"), false) ?></td>
			<td > <a href="#" onclick="jQuery('#saved_document_<?php echo escape($__Context->val->document_srl, false) ?>').toggle(); setFixedPopupSize(); return false;"><?php echo $__Context->val->getTitle() ?></a>
				<div id="saved_document_<?php echo escape($__Context->val->document_srl, false) ?>" class="saved_content" style="display:none;"><?php echo $__Context->val->getContent(false) ?></div>
			</td>
			<td><a href="#" onclick="doDocumentSelect('<?php echo escape($__Context->val->document_srl, false) ?>', '<?php echo escape($__Context->val->getDocumentType(), false) ?>'); return false;" class="buttonSet buttonActive"><span><?php echo $__Context->lang->cmd_select ?></span></a></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<!-- 페이지 네비게이션 -->
<div class="pagination">
	<a href="<?php echo escape(getUrl('page','','module_srl',''), false) ?>" class="direction">&lsaquo; <?php echo $__Context->lang->first_page ?></a>
	<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
		<?php if($__Context->page == $__Context->page_no){ ?>
			<strong><?php echo escape($__Context->page_no, false) ?></strong>
		<?php }else{ ?>
			<a href="<?php echo escape(getUrl('page',$__Context->page_no,'module_srl',''), false) ?>"><?php echo escape($__Context->page_no, false) ?></a>
		<?php } ?>
	<?php } ?>
	<a href="<?php echo escape(getUrl('page',$__Context->page_navigation->last_page,'module_srl',''), false) ?>" class="direction"><?php echo $__Context->lang->last_page ?> &rsaquo;</a>
</div>
