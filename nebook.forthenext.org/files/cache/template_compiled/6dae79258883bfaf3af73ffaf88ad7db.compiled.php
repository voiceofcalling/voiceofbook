<?php if(!defined("__XE__"))exit;?><script>
xe.lang.msg_empty_search_target = '<?php echo $__Context->lang->msg_empty_search_target ?>';
xe.lang.msg_empty_search_keyword = '<?php echo $__Context->lang->msg_empty_search_keyword ?>';
</script>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/document/tpl','header.html') ?>
<form id="fo_list" action="./" method="get"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="document" />
	<input type="hidden" name="page" value="<?php echo escape($__Context->page, false) ?>" />
	<table id="documentListTable" class="x_table x_table-striped x_table-hover">
		<caption>
			<a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminList'), false) ?>"<?php if($__Context->search_keyword == ''){ ?> class="active"<?php } ?>><?php echo $__Context->lang->all;
if($__Context->search_keyword == ''){ ?>(<?php echo escape(number_format($__Context->total_count), false) ?>)<?php } ?></a>
			<i>|</i>
			<a href="<?php echo escape(getUrl('search_target', 'is_secret', 'search_keyword', 'N'), false) ?>"<?php if($__Context->search_target == 'is_secret' && $__Context->search_keyword == 'N'){ ?> class="active"<?php } ?>><?php echo escape($__Context->status_name_list['PUBLIC'], false);
if($__Context->search_target == 'is_secret' && $__Context->search_keyword == 'N'){ ?>(<?php echo escape(number_format($__Context->total_count), false) ?>)<?php } ?></a>
			<i>|</i>
			<a href="<?php echo escape(getUrl('search_target', 'is_secret', 'search_keyword', 'Y'), false) ?>"<?php if($__Context->search_target == 'is_secret' && $__Context->search_keyword == 'Y'){ ?> class="active"<?php } ?>><?php echo escape($__Context->status_name_list['SECRET'], false);
if($__Context->search_target == 'is_secret' && $__Context->search_keyword == 'Y'){ ?>(<?php echo escape(number_format($__Context->total_count), false) ?>)<?php } ?></a>
			<i>|</i>
			<a href="<?php echo escape(getUrl('search_target', 'is_secret', 'search_keyword', 'temp'), false) ?>"<?php if($__Context->search_target == 'is_secret' && $__Context->search_keyword == 'temp'){ ?> class="active"<?php } ?>><?php echo escape($__Context->status_name_list['TEMP'], false);
if($__Context->search_target == 'is_secret' && $__Context->search_keyword == 'temp'){ ?>(<?php echo escape(number_format($__Context->total_count), false) ?>)<?php } ?></a>
			<a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_faq_temp_document" target="_blank"><?php echo $__Context->lang->help ?></a>
			<i>|</i>
			<a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminDeclared'), false) ?>"><?php echo $__Context->lang->cmd_declared_list ?></a>
			<?php if($__Context->search_target == 'ipaddress'){ ?><i>|</i><?php } ?>
			<?php if($__Context->search_target == 'ipaddress'){ ?><a href="<?php echo escape(getUrl('search_target', 'ipaddress'), false) ?>" class="active"><?php echo $__Context->lang->ipaddress ?>:<?php echo escape($__Context->search_keyword, false) ?>(<?php echo escape(number_format($__Context->total_count), false) ?>)</a><?php } ?>
			<div class="x_btn-group x_pull-right">
				<a href="#manageForm" class="x_btn modalAnchor" data-value="trash"><?php echo $__Context->lang->trash ?></a>
				<a href="#manageForm" class="x_btn modalAnchor" data-value="delete"><?php echo $__Context->lang->delete ?></a>
				<a href="#manageForm" class="x_btn modalAnchor" data-value="move"><?php echo $__Context->lang->move ?></a>
				<a href="#manageForm" class="x_btn modalAnchor" data-value="copy"><?php echo $__Context->lang->copy ?></a>
			</div>
		</caption>
		<thead>
			<tr>
				<th scope="col" class="title"><?php echo $__Context->lang->title ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->writer ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->readed_count ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_vote ?>(+/-)</th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->date ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->ipaddress ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->status ?></th>
				<th scope="col"><input type="checkbox" title="Check All" /></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->oDocument){ ?><tr>
				<td class="title">
				<?php if(isset($__Context->module_list[$__Context->oDocument->get('module_srl')])){ ?>
				<a href="<?php echo escape(getUrl('', 'mid', $__Context->module_list[$__Context->oDocument->get('module_srl')]->mid), false) ?>" target="_blank"><?php echo escape($__Context->module_list[$__Context->oDocument->get('module_srl')]->browser_title, false) ?></a> -
				<?php } ?>
				<a href="<?php echo escape(getUrl('','document_srl',$__Context->oDocument->document_srl), false) ?>" target="_blank"><?php if(trim($__Context->oDocument->getTitleText())){;
echo htmlspecialchars($__Context->oDocument->getTitleText());
}else{ ?><em><?php echo $__Context->lang->no_title_document ?></em><?php } ?></a></td>
				<td class="nowr"><a href="#popup_menu_area" class="member_<?php echo escape($__Context->oDocument->get('member_srl'), false) ?>"><?php echo escape($__Context->oDocument->getNickName(), false) ?></a></td>
				<td class="nowr"><?php echo escape($__Context->oDocument->get('readed_count'), false) ?></td>
				<td class="nowr"><?php echo escape($__Context->oDocument->get('voted_count'), false) ?>/<?php echo escape($__Context->oDocument->get('blamed_count'), false) ?></td>
				<td class="nowr"><?php echo escape($__Context->oDocument->getRegdate("Y-m-d H:i"), false) ?></td>
				<td class="nowr"><a href="<?php echo escape(getUrl('search_target','ipaddress','search_keyword',$__Context->oDocument->get('ipaddress')), false) ?>"><?php echo escape($__Context->oDocument->get('ipaddress'), false) ?></a></td>
				<td class="nowr"><?php echo escape($__Context->status_name_list[$__Context->oDocument->get('status')], false) ?></td>
				<td><input type="checkbox" name="cart" value="<?php echo escape($__Context->oDocument->document_srl, false) ?>" /></td>
			</tr><?php } ?>
		</tbody>
	</table>
	<div class="x_clearfix">
		<div class="x_btn-group x_pull-right">
			<a href="#manageForm" class="x_btn modalAnchor" data-value="trash"><?php echo $__Context->lang->trash ?></a>
			<a href="#manageForm" class="x_btn modalAnchor" data-value="delete"><?php echo $__Context->lang->delete ?></a>
			<a href="#manageForm" class="x_btn modalAnchor" data-value="move"><?php echo $__Context->lang->move ?></a>
			<a href="#manageForm" class="x_btn modalAnchor" data-value="copy"><?php echo $__Context->lang->copy ?></a>
		</div>
	</div>
</form>
<form action="./" class="x_pagination x_pull-left" style="margin:-36px 0 0 0"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="error_return_url" value="" />
	<input type="hidden" name="module" value="<?php echo escape($__Context->module, false) ?>" />
	<input type="hidden" name="act" value="<?php echo escape($__Context->act, false) ?>" />
	<?php if($__Context->search_keyword){ ?><input type="hidden" name="search_keyword" value="<?php echo escape($__Context->search_keyword, false) ?>" /><?php } ?>
	<?php if($__Context->search_target){ ?><input type="hidden" name="search_target" value="<?php echo escape($__Context->search_target, false) ?>" /><?php } ?>
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
</form>
<form action="./" method="get" class="search center x_input-append x_clearfix"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo escape($__Context->module, false) ?>" />
	<input type="hidden" name="act" value="<?php echo escape($__Context->act, false) ?>" />
	<input type="hidden" name="module_srl" value="<?php echo escape($__Context->module_srl, false) ?>" />
	<input type="hidden" name="error_return_url" value="" />
	<select name="search_target" title="<?php echo $__Context->lang->search_target ?>" style="margin-right:4px">
		<?php if($__Context->lang->search_target_list&&count($__Context->lang->search_target_list))foreach($__Context->lang->search_target_list as $__Context->key => $__Context->val){ ?>
		<option value="<?php echo escape($__Context->key, false) ?>" <?php if($__Context->search_target==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo escape($__Context->val, false) ?></option>
		<?php } ?>
	</select>
	<input type="search" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" title="<?php echo $__Context->lang->cmd_search ?>" />
	<button type="submit" class="x_btn x_btn-inverse"><?php echo $__Context->lang->cmd_search ?></button>
	<a href="<?php echo escape(getUrl('','module',$__Context->module,'act',$__Context->act), false) ?>" class="x_btn"><?php echo $__Context->lang->cmd_cancel ?></a>
</form>
<form action="./" method="post" class="x_modal" id="manageForm"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="document" />
	<input type="hidden" name="act" value="procDocumentManageCheckedDocument" />
	<input type="hidden" name="type" value="" />
	<input type="hidden" name="module_srl" value="" />
	<?php if(!empty($__Context->search_target) && !empty($__Context->search_keyword)){ ?><input type="hidden" name="success_return_url" value="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminList', 'is_secret', $__Context->is_secret, 'search_target', $__Context->search_target, 'search_keyword', $__Context->search_keyword), false) ?>" /><?php } ?>
	<input type="hidden" name="xe_validator_id" value="modules/document/tpl/document_list/1" />
	<div class="x_modal-header">
		<h1><?php echo $__Context->lang->document_manager ?>: <span class="_sub"></span></h1>
	</div>
	<div class="x_modal-body">
		<section class="moveList">
			<table width="100%" id="documentManageListTable" class="x_table x_table-striped x_table-hover">
				<caption><strong><?php echo $__Context->lang->selected_document ?> <span id="selectedDocumentCount"></span></strong></caption>
				<thead>
					<tr>
						<th scope="col" class="title"><?php echo $__Context->lang->title ?></th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->writer ?></th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->status ?></th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<div class="x_control-group" style="padding-right:14px;border-top:0">
				<label for="message"><?php echo $__Context->lang->message_notice ?></label>
				<textarea rows="4" cols="42" name="message_content" id="message" style="width:100%"></textarea>
			</div>
		</section>
		<section class="moveTree" hidden>
			<h1><?php echo $__Context->lang->msg_select_menu ?></h1>
			<p><?php echo $__Context->lang->selected_document_move ?></p>
			<div class="tree _menuSelector">
				<select class="site_selector" style="width:100%;display:none"></select><div class="tree" style="height:250px;overflow-y:scroll;border:1px solid #aaa"></div>
			</div>
		</section>
	</div>
	<div class="x_modal-footer">
		<button type="submit" name="type" value="" class="x_btn x_btn-inverse x_pull-right"><?php echo $__Context->lang->cmd_confirm ?></button>
		<!-- value="trash|delete|move|copy" -->
	</div>
</form>
<script>
jQuery(function($){
	// Modal anchor activation
	var $docTable = $('#documentListTable');
	$docTable.find(':checkbox').change(function(){
		var $modalAnchor = $('a[data-value]');
		if($docTable.find('tbody :checked').length == 0){
			$modalAnchor.removeAttr('href').addClass('x_disabled');
		} else {
			$modalAnchor.attr('href','#manageForm').removeClass('x_disabled');
		}
	}).change();
	// Button action
	$('a[data-value]').bind('before-open.mw', function(){
		if($docTable.find('tbody :checked').length == 0){
			$('body').css('overflow','auto');
			alert('<?php echo $__Context->lang->msg_not_selected_document ?>');
			return false;
		} else {
			var $this = $(this);
			var $manageForm = $('#manageForm');
			var $modalBody = $manageForm.find('.x_modal-body');
			var thisValue = $this.attr('data-value');
			var thisText = $this.text();
			getDocumentList();
			$manageForm.find('.x_modal-header ._sub').text(thisText).end().find('[type="submit"]').val(thisValue).text(thisText);
			if(thisValue == 'trash' || thisValue == 'delete'){
				$modalBody.removeClass('showTree');
			} else if(thisValue == 'move' || thisValue == 'copy') {
				$.xeShowMenuSelectorIn($('._menuSelector'));
				$modalBody.addClass('showTree');
				$tree = $('._menuSelector .tree');
				$tree.bind('select_node.jstree', function(a,b){
					var aSelected = [];
					$tree.find('.jstree-clicked').each(function(idx, el){
						var htParam = $.parseJSON($(this).attr('data-param'));
						aSelected.push({browser_title: htParam.sMenuTitle, mid: htParam.sMenuUrl, module_srl: htParam.sModuleSrl, menu_id: htParam.sMenuId, type: htParam.sType});
						//module_srl
					});
					$('#manageForm input[name=module_srl]').val(aSelected[0].module_srl);
				});
				$('._menuSelector').bind('site_changed', function(){
					$('#manageForm input[name=module_srl]').val('');
				});
			}
		}
	});
});
</script>
