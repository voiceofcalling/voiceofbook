<?php if(!defined("__XE__"))exit;?><ol class="<?php echo $__Context->mi->zine_info_icon ?> bd_lst bd_zine zine zine1 bd_m_lst img_load<?php echo $__Context->mi->tmb_effect ?>">
	<?php if(!$__Context->document_list && !$__Context->notice_list){ ?><li class="no_doc"><?php echo $__Context->lang->no_documents ?></li><?php } ?>
	
	<?php if($__Context->notice_list){;
if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no=>$__Context->document){ ?><li class="notice clear">
		
		<div class="rt_area<?php if($__Context->mi->list_m_tmb && $__Context->document->thumbnailExists()){ ?> is_tmb<?php } ?>">
			<?php if($__Context->mi->list_m_tmb){ ?><div class="tmb_wrp">
				
				<?php if($__Context->document->thumbnailExists()){ ?><img class="tmb" src="<?php echo $__Context->document->getThumbnail($__Context->mi->zine_thumb_width,$__Context->mi->zine_thumb_height,$__Context->mi->zine_thumb_type) ?>" alt="" /><?php } ?>
			</div><?php } ?>
			
			<h3>
				<?php echo $__Context->document->getTitle($__Context->mi->subject_cut_size) ?>
				<?php if((int)($__Context->document->getRegdate('YmdHis')>date("YmdHis", time()-$__Context->mi->duration_new*60*60))){ ?>
				<i class="mrk new">NEW</i>
				<?php }elseif((int)(zdate($__Context->document->get('last_update'),'YmdHis')>date("YmdHis", time()-$__Context->mi->duration_new*60*60))){ ?>
				<i class="mrk update">UP</i>
				<?php } ?>
			</h3>
			
			<div class="info">
				<?php if($__Context->list_config['regdate']){ ?><span><i class="fa fa-clock-o"></i><span>Date</span><b><?php echo $__Context->document->getRegdate("Y.m.d") ?></b></span><?php } ?>
				<?php if($__Context->mi->use_category=='Y' && $__Context->document->get('category_srl')){ ?><span><i class="fa fa-bars"></i><span>Category</span><b><?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?></b></span><?php } ?>
				<?php if($__Context->list_config['nick_name']){ ?><span><i class="fa fa-user"></i><span>By</span><b><a href="#popup_menu_area" class="member_<?php echo $__Context->document->get('member_srl') ?>" onclick="return false;"><?php echo $__Context->document->getNickName() ?></a></b></span><?php } ?>
				<?php if(@in_array('list_m',$__Context->mi->cmt_count)){ ?><span><i class="fa fa-comment"></i><span>Reply</span><b><?php echo $__Context->document->getCommentCount() ?></b></span><?php } ?>
				<?php if($__Context->list_config['readed_count']){ ?><span><i class="fa fa-eye"></i><span>Views</span><b><?php echo $__Context->document->get('readed_count') ?></b></span><?php } ?>
				<?php if($__Context->list_config['voted_count']){ ?><span><i class="fa fa-heart"></i><span>Votes</span><b><?php echo $__Context->document->get('voted_count') ?></b></span><?php } ?>
				
				<?php if($__Context->mi->zine_extra || $__Context->mi->link_board){ ?>
				<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){;
if($__Context->val->idx!=-1){ ?>
				<?php if($__Context->val->eid!='rating' && $__Context->document->getExtraValueHTML($__Context->val->idx)){ ?><span class="itm br<?php if($__Context->val->eid=='link_url'){ ?> link_url<?php } ?>"><?php echo $__Context->val->name ?><b><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?></b></span><?php } ?>
				<?php if($__Context->val->eid=='rating'){ ?><span><strong class="starRating"><span style="width:<?php echo $__Context->document->getExtraValueHTML($__Context->val->idx)*10 ?>%"><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?></span></strong></span><?php } ?>
				<?php }} ?>
				<?php } ?>
				<?php if(@in_array('list_m',$__Context->mi->ext_img)){;
echo $__Context->document->printExtraImages(60*60*$__Context->mi->duration_new);
} ?>
				<?php if($__Context->grant->manager){ ?><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" title="Check" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><?php } ?>
			</div>
		</div>
		<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle',$__Context->listStyle, 'cpage','') ?>"><span class="blind">read more</span></a>
	</li><?php }} ?>
	
	<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?><li class="<?php if($__Context->document_srl==$__Context->document->document_srl){ ?>select <?php } ?>clear">
		
		<div class="rt_area<?php if($__Context->mi->list_m_tmb && $__Context->document->thumbnailExists()){ ?> is_tmb<?php } ?>">
			<?php if($__Context->mi->list_m_tmb){ ?><div class="tmb_wrp">
				
				<?php if($__Context->document->thumbnailExists()){ ?><img class="tmb" src="<?php echo $__Context->document->getThumbnail($__Context->mi->zine_thumb_width,$__Context->mi->zine_thumb_height,$__Context->mi->zine_thumb_type) ?>" alt="" /><?php } ?>
			</div><?php } ?>
			
			<h3>
				<?php echo $__Context->document->getTitle($__Context->mi->subject_cut_size) ?>
				<?php if((int)($__Context->document->getRegdate('YmdHis')>date("YmdHis", time()-$__Context->mi->duration_new*60*60))){ ?>
				<i class="mrk new">NEW</i>
				<?php }elseif((int)(zdate($__Context->document->get('last_update'),'YmdHis')>date("YmdHis", time()-$__Context->mi->duration_new*60*60))){ ?>
				<i class="mrk update">UP</i>
				<?php } ?>
			</h3>
			
			<div class="info">
				<?php if($__Context->list_config['regdate']){ ?><span><i class="fa fa-clock-o"></i><span>Date</span><b><?php echo getTimeGap($__Context->document->get('regdate'), "Y.m.d") ?></b></span><?php } ?>
				<?php if($__Context->mi->use_category=='Y' && $__Context->document->get('category_srl')){ ?><span><i class="fa fa-bars"></i><span>Category</span><b><?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?></b></span><?php } ?>
				<?php if($__Context->list_config['nick_name']){ ?><span><i class="fa fa-user"></i><span>By</span><b><a href="#popup_menu_area" class="member_<?php echo $__Context->document->get('member_srl') ?>" onclick="return false;"><?php echo $__Context->document->getNickName() ?></a></b></span><?php } ?>
				<?php if(@in_array('list_m',$__Context->mi->cmt_count)){ ?><span><i class="fa fa-comment"></i><span>Reply</span><b><?php echo $__Context->document->getCommentCount() ?></b></span><?php } ?>
				<?php if($__Context->list_config['readed_count']){ ?><span><i class="fa fa-eye"></i><span>Views</span><b><?php echo $__Context->document->get('readed_count') ?></b></span><?php } ?>
				<?php if($__Context->list_config['voted_count']){ ?><span><i class="fa fa-heart"></i><span>Votes</span><b><?php echo $__Context->document->get('voted_count') ?></b></span><?php } ?>
				
				<?php if($__Context->mi->zine_extra || $__Context->mi->link_board){ ?>
				<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){;
if($__Context->val->idx!=-1){ ?>
				<?php if($__Context->val->eid!='rating' && $__Context->document->getExtraValueHTML($__Context->val->idx)){ ?><span class="itm br<?php if($__Context->val->eid=='link_url'){ ?> link_url<?php } ?>"><?php echo $__Context->val->name ?><b><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?></b></span><?php } ?>
				<?php if($__Context->val->eid=='rating'){ ?><span><strong class="starRating"><span style="width:<?php echo $__Context->document->getExtraValueHTML($__Context->val->idx)*10 ?>%"><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?></span></strong></span><?php } ?>
				<?php }} ?>
				<?php } ?>
				<?php if(@in_array('list_m',$__Context->mi->ext_img)){ ?><strong class="attached_image" title="Image"></strong><?php } ?>
				<?php if($__Context->grant->manager){ ?><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" title="Check" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><?php } ?>
				<?php if($__Context->mi->link_board && $__Context->document->isEditable()){ ?><a class="link_modify" href="<?php echo getUrl('act','dispBoardWrite','document_srl',$__Context->document->document_srl,'comment_srl','') ?>"><?php echo $__Context->lang->cmd_modify ?></a><?php } ?>
			</div>
		</div>
		<a class="hx" <?php if(!$__Context->mi->link_board){ ?>href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle',$__Context->listStyle,'cpage','') ?>"<?php }else{ ?>href="<?php echo $__Context->document->getExtraEidValue('link_url') ?>" target="_blank"<?php } ?> data-viewer="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle','viewer','page','') ?>"><span class="blind">Read More</span></a>
	</li><?php } ?>
</ol>