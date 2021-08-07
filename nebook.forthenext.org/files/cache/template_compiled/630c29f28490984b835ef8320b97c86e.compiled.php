<?php if(!defined("__XE__"))exit;?>
<?php if(!$__Context->oDocument->isNotice()){ ?><div class="nrow">
<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->document){;
if($__Context->document_srl==$__Context->document->document_srl){ ?>
	
	<?php if(!$__Context->search_keyword){ ?>
		
		<?php if((!$__Context->document_list[$__Context->no+1]->document_srl && $__Context->page!=1) || (!$__Context->document_list[$__Context->no-1]->document_srl && $__Context->page!=$__Context->total_page)){ ?>
<?php 
	$__Context->oModuleModel = &getModel('module');
	$__Context->module_srl_temp = $__Context->oModuleModel->getModuleSrlByMid($__Context->mid);
	if(is_array($__Context->module_srl_temp)) $__Context->module_srl = $__Context->module_srl_temp[0];
	else $__Context->module_srl = $__Context->module_srl_temp;
	$__Context->args = new stdClass();
	$__Context->args->module_srl = $__Context->module_srl;
	$__Context->args->category_srl = $__Context->category;
	$__Context->args->list_count = $__Context->module_info->list_count;
	$__Context->args->sort_index = $__Context->module_info->order_target;
	if($__Context->sort_index) $__Context->args->sort_index = $__Context->sort_index;
	$__Context->args->order_type = $__Context->module_info->order_type;
	if($__Context->sort_index) $__Context->args->order_type = $__Context->order_type;
	if($__Context->module_info->except_notice=='Y') $__Context->prevnext_except_notice=1;
 ?>
<?php if(!$__Context->document_list[$__Context->no+1]->document_srl && $__Context->page!=1){ ?>
<?php 
	$__Context->is_prevnext='P';
	$__Context->args->page = $__Context->page-1;
	$__Context->prevnext_list = executeQueryArray('document.getDocumentList',$__Context->args);
	$__Context->prevnext_data = array_reverse($__Context->prevnext_list->data);
 ?>
<?php }else if(!$__Context->document_list[$__Context->no-1]->document_srl && $__Context->page!=$__Context->total_page){ ?>
<?php 
	$__Context->is_prevnext='N';
	$__Context->args->page = $__Context->page+1;
	$__Context->prevnext_list = executeQueryArray('document.getDocumentList',$__Context->args);
	$__Context->prevnext_data = $__Context->prevnext_list->data;
 ?>
<?php } ?>
			<?php if($__Context->prevnext_data&&count($__Context->prevnext_data))foreach($__Context->prevnext_data as $__Context->no2 => $__Context->document2){ ?>
			<?php if(!$__Context->prevnext_except_notice || ($__Context->prevnext_except_notice && $__Context->document2->is_notice!='Y')){ ?>
<?php 
	$__Context->prevnext_doc = $__Context->document2->document_srl;
	$__Context->prevnext_title = $__Context->document2->title;
	break;
 ?>
			<?php } ?>
			<?php } ?>
		<?php } ?>
	<?php } ?>
	<div class="next-prev-wrap">
		<?php if($__Context->document_list[$__Context->no+1]->document_srl){ ?><a class="" href="<?php echo getUrl('document_srl',$__Context->document_list[$__Context->no+1]->document_srl) ?>">
			<span><em class="link"><i class="fa fa-chevron-left text-w500"></i> 이전글 -</em> <?php echo $__Context->document_list[$__Context->no+1]->getTitle() ?></span>
		</a><?php } ?>
		
		<?php if($__Context->is_prevnext){ ?>
		<?php if($__Context->is_prevnext=='P'){ ?>
		<a class="pull-left" href="<?php echo getUrl('document_srl',$__Context->prevnext_doc,'page','','cpage','') ?>">
		<span><em class="link"><i class="fa fa-chevron-left text-w500"></i> 이전글 -</em> <?php echo $__Context->prevnext_title ?></span>
		<?php }else{ ?>
		<a class="pull-right" href="<?php echo getUrl('document_srl',$__Context->prevnext_doc,'page','','cpage','') ?>">
		<span><?php echo $__Context->prevnext_title ?> <em class="link">- 다음글 <i class="fa fa-chevron-right text-w500"></i></em></span>
		<?php } ?>
		</a>
		<?php } ?>
		<?php if($__Context->document_list[$__Context->no-1]->document_srl){ ?><a class="pull-right" href="<?php echo getUrl('document_srl',$__Context->document_list[$__Context->no-1]->document_srl) ?>">
		<span><?php echo $__Context->document_list[$__Context->no-1]->getTitle() ?> <em class="link">- 다음글 <i class="fa fa-chevron-right text-w500"></i></em></span>
		</a><?php } ?>
	</div>
	<?php  break; ?>
<?php }} ?>
</div><?php } ?>