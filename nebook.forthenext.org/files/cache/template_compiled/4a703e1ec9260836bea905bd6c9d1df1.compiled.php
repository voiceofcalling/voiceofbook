<?php if(!defined("__XE__"))exit;?><div class="rd_nav<?php if($__Context->mi->rd_nav_tx){ ?> rd_nav_tx<?php } ?> img_tx fr m_btn_wrp">
	<?php if($__Context->ft_read_nav){ ?>
	<?php if($__Context->mi->prev_next=='2' && !$__Context->oDocument->isNotice() && $__Context->mi->default_style!='blog'){ ?>
	<a class="rd_prev bubble no_bubble" href="#" title="<?php echo $__Context->lang->cmd_prev ?>"><i class="fa fa-arrow-left"></i><b class="tx"><?php echo $__Context->lang->cmd_prev ?></b></a>
	<a class="rd_next bubble no_bubble" href="#" title="<?php echo $__Context->lang->cmd_next ?>"><i class="fa fa-arrow-right"></i><b class="tx"><?php echo $__Context->lang->cmd_next ?></b></a>
	<?php } ?>
	<?php }else{ ?>
	<?php if($__Context->mi->prev_next!='N' || $__Context->mi->default_style=='viewer'){ ?><div class="help bubble left m_no">
		<a class="text" href="#" onclick="jQuery(this).next().fadeToggle();return false;">?</a>
		<div class="wrp">
			<div class="speech">
				<h4><?php echo $__Context->lang->shortcut ?></h4>
				<p><strong><i class="fa fa-long-arrow-left"></i><span class="blind">Prev</span></strong><?php echo $__Context->lang->cmd_prev ?> <?php echo $__Context->lang->document ?></p>
				<p><strong><i class="fa fa-long-arrow-right"></i><span class="blind">Next</span></strong><?php echo $__Context->lang->cmd_next ?> <?php echo $__Context->lang->document ?></p>
				<?php if($__Context->mi->default_style=='viewer'){ ?><p><strong>ESC</strong><?php echo $__Context->lang->cmd_close ?></p><?php } ?>
			</div>
			<i class="edge"></i>
			<i class="ie8_only bl"></i><i class="ie8_only br"></i>
		</div>
	</div><?php } ?>
	<?php if($__Context->mi->font_btn!='N' && $__Context->lang_type=='ko'){ ?><a class="tg_btn2 bubble m_no" href="#" data-href=".bd_font_select" title="글꼴 선택"><strong>가</strong><i class="arrow down"></i></a><?php } ?>
	<a class="font_plus bubble" href="#" title="<?php echo $__Context->lang->larger ?>"><i class="fa fa-search-plus"></i><b class="tx"><?php echo $__Context->lang->larger ?></b></a>
	<a class="font_minus bubble" href="#" title="<?php echo $__Context->lang->smaller ?>"><i class="fa fa-search-minus"></i><b class="tx"><?php echo $__Context->lang->smaller ?></b></a>
	<?php if($__Context->mi->viewer=='2'){ ?><a class="if_viewer bubble" href="#" onclick="window.open('<?php echo getUrl('listStyle','viewer','page','') ?>','viewer','width=9999,height=9999,scrollbars=yes,resizable=yes,toolbars=no');return false;" title="<?php echo $__Context->lang->viewer ?>"><i class="fa fa-picture-o"></i><b class="tx"><?php echo $__Context->lang->viewer ?></b></a><?php } ?>
	<?php } ?>
	<a class="back_to bubble m_no" href="#bd_<?php echo $__Context->mi->module_srl ?>_<?php echo $__Context->oDocument->document_srl ?>" title="<?php echo $__Context->lang->cmd_move_up ?>"><i class="fa fa-arrow-up"></i><b class="tx"><?php echo $__Context->lang->cmd_move_up ?></b></a>
	<a class="back_to bubble m_no" href="#rd_end_<?php echo $__Context->oDocument->document_srl ?>" title="(<?php echo $__Context->lang->cmd_list ?>) <?php echo $__Context->lang->cmd_move_down ?>"><i class="fa fa-arrow-down"></i><b class="tx"><?php echo $__Context->lang->cmd_move_down ?></b></a>
	<a class="comment back_to bubble if_viewer m_no" href="#<?php echo $__Context->oDocument->document_srl ?>_comment" title="<?php echo $__Context->lang->go_cmt ?>"><i class="fa fa-comment"></i><b class="tx"><?php echo $__Context->lang->go_cmt ?></b></a>
	<?php if(!$__Context->mi->rd_nav_item){ ?><a class="print_doc bubble m_no<?php if($__Context->mi->default_style=='viewer'){ ?> this<?php } ?>" href="<?php echo getUrl('listStyle','viewer','act') ?>" title="<?php echo $__Context->lang->cmd_print ?>"><i class="fa fa-print"></i><b class="tx"><?php echo $__Context->lang->cmd_print ?></b></a><?php } ?>
	<?php if((!$__Context->mi->show_files || $__Context->mi->show_files=='2') && $__Context->oDocument->hasUploadedFiles()){ ?><a class="file back_to bubble m_no" href="#files_<?php echo $__Context->oDocument->document_srl ?>" onclick="jQuery('#files_<?php echo $__Context->oDocument->document_srl ?>').show();return false" title="<?php echo $__Context->lang->uploaded_file ?>"><i class="fa fa-paperclip"></i><b class="tx"><?php echo $__Context->lang->uploaded_file ?></b></a><?php } ?>
	<?php if($__Context->is_logged){ ?><a class="document_<?php echo $__Context->oDocument->document_srl ?> action bubble m_no" href="#popup_menu_area" onclick="return false;" title="<?php echo $__Context->lang->cmd_document_do ?>"><i class="fa fa-ellipsis-h"></i><b class="tx"><?php echo $__Context->lang->cmd_document_do ?></b></a><?php } ?>
	<?php if($__Context->oDocument->isEditable()){ ?>
	<a class="edit" href="<?php echo getUrl('act','dispBoardWrite','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><i class="ico_16px write"></i><?php echo $__Context->lang->cmd_modify ?></a>
	<a class="edit" href="<?php echo getUrl('act','dispBoardDelete','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><i class="ico_16px delete"></i><?php echo $__Context->lang->cmd_delete ?> </a>
	<?php } ?>
</div>