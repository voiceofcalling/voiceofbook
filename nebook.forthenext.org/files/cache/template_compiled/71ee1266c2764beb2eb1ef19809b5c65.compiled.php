<?php if(!defined("__XE__"))exit;
$__Context->mi->tmb_effect='N';
	if(!$__Context->mi->rd_tl_font) $__Context->mi->rd_tl_font='ngeb';
	if(!$__Context->mi->rd_top_font) $__Context->mi->rd_top_font='ngeb';
	if(!$__Context->mi->rd_btm_font) $__Context->mi->rd_btm_font='ngeb';
	if(!$__Context->mi->prev_next_cut_size) $__Context->mi->prev_next_cut_size=60;
	$__Context->sns_link=$__Context->oDocument->getPermanentUrl().'?l='.$__Context->lang_type;
	$__Context->sns_title=urlencode($__Context->oDocument->getTitle());
 ?>
<div class="rd<?php if(!$__Context->mi->rd_nav_style){ ?> rd_nav_style2<?php };
if($__Context->mi->default_style=='blog'){ ?> rd_blog <?php echo $__Context->mi->blog_style;
} ?> clear" style="padding:<?php echo $__Context->mi->rd_padding ?>;" data-docSrl="<?php echo $__Context->oDocument->document_srl ?>">
	
	<div class="rd_hd clear" style="<?php if(!$__Context->mi->rd_style){ ?>margin:0 -15px 20px<?php };
if($__Context->mi->rd_padding){ ?>;margin-left:0;margin-right:0<?php } ?>">
		
		<?php if(!$__Context->mi->rd_style){ ?><div class="board clear <?php echo $__Context->mi->rd_board_style ?>" style="<?php echo $__Context->mi->rd_css ?>;">
			<div class="top_area <?php echo $__Context->mi->rd_tl_font ?>" style="<?php echo $__Context->mi->rd_tl_css ?>;">
				<?php if(!$__Context->mi->rd_cate && $__Context->mi->use_category=='Y' && $__Context->oDocument->get('category_srl')){ ?><strong class="cate fl" title="Category"><?php echo $__Context->category_list[$__Context->oDocument->get('category_srl')]->title ?></strong><?php } ?>
				<div class="fr">
					<?php if($__Context->mi->rd_nick=='2'){ ?><a href="#popup_menu_area" class="nick member_<?php echo $__Context->oDocument->get('member_srl') ?>" onclick="return false"><?php echo $__Context->oDocument->getNickName() ?></a><?php } ?>
					<?php if(!$__Context->mi->rd_date){ ?><span class="date m_no"><?php echo $__Context->oDocument->getRegdate('Y.m.d H:i') ?></span><?php } ?>
				</div>
				<h1 class="np_18px"><a href="<?php echo $__Context->oDocument->getPermanentUrl() ?>"><?php echo $__Context->oDocument->getTitle() ?></a></h1>
			</div>
			<div class="btm_area clear">
				<?php if($__Context->mi->rd_profile=='Y' && $__Context->oDocument->getProfileImage()){ ?><img class="img fl" src="<?php echo $__Context->oDocument->getProfileImage() ?>" alt="profile" title="<?php echo $__Context->oDocument->getNickName() ?>" /><?php } ?>
				<div class="side">
					<?php if(!$__Context->mi->rd_nick){ ?><a href="#popup_menu_area" class="nick member_<?php echo $__Context->oDocument->get('member_srl') ?>" onclick="return false"><?php echo $__Context->oDocument->getNickName() ?></a><?php } ?>
					<?php if($__Context->mi->rd_link=='2'){ ?><a class="link m_no" href="<?php echo $__Context->oDocument->getPermanentUrl() ?>"><?php echo $__Context->oDocument->getPermanentUrl() ?></a><?php } ?>
					<?php if($__Context->mi->rd_date=='2'){ ?><span class="date"><?php echo $__Context->oDocument->getRegdate('Y.m.d H:i') ?></span><?php } ?>
					<?php if($__Context->mi->rd_cate=='2' && $__Context->mi->use_category=='Y' && $__Context->oDocument->get('category_srl')){ ?><strong class="cate" title="Category"><?php echo $__Context->category_list[$__Context->oDocument->get('category_srl')]->title ?></strong><?php } ?>
					<?php if($__Context->mi->rd_info=='2'){ ?>
					<?php if(!$__Context->mi->rd_view){ ?><span><?php echo $__Context->lang->readed_count ?> <b><?php echo $__Context->oDocument->get('readed_count') ?></b></span><?php } ?>
					<?php if(!$__Context->mi->rd_view){ ?><span><?php echo $__Context->lang->voted_count ?> <b><?php echo $__Context->oDocument->get('voted_count') ?></b></span><?php } ?>
					<?php if(!$__Context->mi->rd_cmt){ ?><span><?php echo $__Context->lang->comment ?> <b><?php echo $__Context->oDocument->getCommentcount() ?></b></span><?php } ?>
					<?php } ?>
				</div>
				<div class="side fr">
					<?php if($__Context->grant->manager || $__Context->mi->display_ip_address){ ?><small class="m_no">(<?php echo $__Context->oDocument->getIpaddress() ?>) </small><?php } ?>
					<?php if($__Context->mi->rd_link=='3'){ ?><a class="link m_no" href="<?php echo $__Context->oDocument->getPermanentUrl() ?>"><?php echo $__Context->oDocument->getPermanentUrl() ?></a><?php } ?>
					<?php if($__Context->mi->rd_nick=='3'){ ?><a href="#popup_menu_area" class="nick member_<?php echo $__Context->oDocument->get('member_srl') ?>" onclick="return false"><?php echo $__Context->oDocument->getNickName() ?></a><?php } ?>
					<?php if($__Context->mi->rd_date=='3'){ ?><span class="date"><?php echo $__Context->oDocument->getRegdate('Y.m.d H:i') ?></span><?php } ?>
					<?php if($__Context->mi->rd_cate=='3' && $__Context->mi->use_category=='Y' && $__Context->oDocument->get('category_srl')){ ?><strong class="cate" title="Category"><?php echo $__Context->category_list[$__Context->oDocument->get('category_srl')]->title ?></strong><?php } ?>
					<?php if(!$__Context->mi->rd_info){ ?>
					<?php if(!$__Context->mi->rd_view){ ?><span><?php echo $__Context->lang->readed_count ?> <b><?php echo $__Context->oDocument->get('readed_count') ?></b></span><?php } ?>
					<?php if(!$__Context->mi->rd_vote){ ?><span><?php echo $__Context->lang->voted_count ?> <b><?php echo $__Context->oDocument->get('voted_count') ?></b></span><?php } ?>
					<?php if(!$__Context->mi->rd_cmt){ ?><span><?php echo $__Context->lang->comment ?> <b><?php echo $__Context->oDocument->getCommentcount() ?></b></span><?php } ?>
					<?php } ?>
				</div>
				
				<?php echo $__Context->mi->rd_hd_widget ?>
			</div>
		</div><?php } ?>
		
		<?php if($__Context->mi->rd_style=='blog'){ ?><div class="blog v<?php echo $__Context->mi->rd_blog_style ?>" style="text-align:<?php echo $__Context->mi->rd_tl ?>;<?php echo $__Context->mi->rd_css ?>;">
			<div class="top_area <?php echo $__Context->mi->rd_top_font ?> np_18px" style="text-align:<?php echo $__Context->mi->rd_top ?>">
				<?php if(!$__Context->mi->rd_blog_cate && $__Context->mi->use_category=='Y' && $__Context->oDocument->get('category_srl')){ ?><span title="Category">
					<b class="cate"><strong<?php if($__Context->category_list[$__Context->oDocument->get('category_srl')]->color!='transparent'){ ?> style="color:<?php echo $__Context->category_list[$__Context->oDocument->get('category_srl')]->color ?>"<?php } ?>><?php echo $__Context->category_list[$__Context->oDocument->get('category_srl')]->title ?></strong></b>
				</span><?php } ?>
				<?php if($__Context->mi->rd_blog_nick=='2'){ ?><span><small>by</small><b><?php echo $__Context->oDocument->getNickName() ?></b></span><?php } ?>
				<?php if($__Context->mi->rd_blog_date=='2'){ ?><span title="<?php echo $__Context->oDocument->getRegdate('Y.m.d H:i') ?>"><small>posted</small><b class="date"><?php echo $__Context->oDocument->getRegdate('M d, Y') ?></b></span><?php } ?>
			</div>
			<?php if($__Context->mi->rd_tl!='N'){ ?><h1 class="font <?php echo $__Context->mi->rd_tl_font ?>" style="<?php echo $__Context->mi->rd_tl_css ?>;-webkit-animation-name:rd_h1_v<?php echo $__Context->mi->rd_h1_ani ?>;-moz-animation-name:rd_h1_v<?php echo $__Context->mi->rd_h1_ani ?>;animation-name:rd_h1_v<?php echo $__Context->mi->rd_h1_ani ?>;"><?php echo $__Context->oDocument->getTitle() ?></h1><?php } ?>
			<?php if(!$__Context->mi->rd_preview && $__Context->oDocument->getExtraEidValue('rd_preview')){ ?><div class="rd_preview"><?php echo $__Context->oDocument->getExtraEidValue('rd_preview') ?></div><?php } ?>
			<div class="btm_area <?php echo $__Context->mi->rd_btm_font ?> np_18px" style="text-align:<?php echo $__Context->mi->rd_btm ?>"> 
				<?php if($__Context->mi->rd_blog_cate=='2' && $__Context->mi->use_category=='Y' && $__Context->oDocument->get('category_srl')){ ?><span><small>In </small><b title="Category"><?php echo $__Context->category_list[$__Context->oDocument->get('category_srl')]->title ?></b></span><?php } ?>
				<?php if(!$__Context->mi->rd_blog_nick){ ?><span><small>by </small><b><?php echo $__Context->oDocument->getNickName() ?></b></span><?php } ?>
				<?php if(!$__Context->mi->rd_blog_date){ ?><span title="<?php echo $__Context->oDocument->getRegdate('Y.m.d H:i') ?>"><small>posted </small><b class="date"><?php echo $__Context->oDocument->getRegdate('M d, Y') ?></b></span><?php } ?>
				<?php if(@in_array('view',$__Context->mi->rd_blog_itm)){ ?><span><small>Views</small> <b><?php echo $__Context->oDocument->get('readed_count') ?></b></span><?php } ?>
				<?php if(@in_array('like',$__Context->mi->rd_blog_itm)){ ?><span><small>Likes</small> <b><?php echo $__Context->oDocument->get('voted_count') ?></b></span><?php } ?>
				<?php if(@in_array('cmt',$__Context->mi->rd_blog_itm)){ ?><span><small>Replies</small> <b><?php echo $__Context->oDocument->getCommentcount() ?></b></span><?php } ?>
			</div>
		</div><?php } ?>
		
		<?php if(!$__Context->oDocument->isSecret() || $__Context->oDocument->isGranted()){ ?>
		
		<?php if($__Context->oDocument->hasUploadedFiles() && $__Context->mi->show_files=='3'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_read_files.html');
} ?>
		
		<?php if($__Context->mi->et_var=='2' && $__Context->oDocument->isExtraVarsExists() && (!$__Context->oDocument->isSecret() || $__Context->oDocument->isGranted())){ ?><table class="et_vars bd_tb">
			<caption class="blind">Extra Form</caption>
			<?php if($__Context->oDocument->getExtraVars()&&count($__Context->oDocument->getExtraVars()))foreach($__Context->oDocument->getExtraVars() as $__Context->key=>$__Context->val){;
if($__Context->val->getValueHTML() && $__Context->val->eid!='rd_preview'){ ?><tr>
				<th scope="row"><?php echo $__Context->val->name ?></th>
				<?php if($__Context->val->eid!='rating'){ ?><td><?php echo $__Context->val->getValueHTML() ?></td><?php } ?>
				<?php if($__Context->val->eid=='rating'){ ?><td class="rating"><span class="starRating" title="<?php echo $__Context->val->getValueHTML();
echo $__Context->lang->score ?>"><span style="width:<?php echo $__Context->val->getValueHTML()*10 ?>%"><?php echo $__Context->val->getValueHTML() ?></span></span></td><?php } ?>
			</tr><?php }} ?>
		</table><?php } ?>
		
		<?php if($__Context->mi->to_sns=='2'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_read_sns.html');
} ?>
		
		<?php if(!$__Context->mi->rd_nav){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_read_nav.html');
} ?>
		<?php if(!$__Context->mi->rd_nav_side){ ?><div class="rd_nav_side">
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_read_nav.html') ?>
		</div><?php } ?>
		<?php } ?>
	</div>
	
	<?php if($__Context->oDocument->isSecret() && !$__Context->oDocument->isGranted()){ ?>
	<div class="rd_body">
		<form action="./" method="get" onsubmit="return procFilter(this, input_password)" class="secretMessage"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
			<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
			<h3>&quot;<?php echo $__Context->lang->msg_is_secret ?>&quot;</h3>
			<span class="itx_wrp">
				<label for="cpw_<?php echo $__Context->oDocument->document_srl ?>"><?php echo $__Context->lang->password ?></label>
				<input type="password" name="password" id="cpw_<?php echo $__Context->oDocument->document_srl ?>" class="itx" />
				<input class="bd_btn" type="submit" value="<?php echo $__Context->lang->cmd_input ?>" />
			</span>
		</form>
	</div>
	<?php }else{ ?>
	
	<div class="rd_body clear">
		
		<?php if(!$__Context->mi->et_var && $__Context->oDocument->isExtraVarsExists() && (!$__Context->oDocument->isSecret() || $__Context->oDocument->isGranted())){ ?><table class="et_vars bd_tb">
			<caption class="blind">Extra Form</caption>
			<?php  $__Context->etIdx=1  ?>
			<?php if($__Context->oDocument->getExtraVars()&&count($__Context->oDocument->getExtraVars()))foreach($__Context->oDocument->getExtraVars() as $__Context->key=>$__Context->val){;
if($__Context->val->getValueHTML() && $__Context->val->eid!='rd_preview'){ ?><tr class="bg<?php echo $__Context->etIdx%2 ?>">
				<th scope="row"><?php echo $__Context->val->name ?></th>
				<?php if($__Context->val->eid!='rating'){ ?><td><?php echo $__Context->val->getValueHTML() ?></td><?php } ?>
				<?php if($__Context->val->eid=='rating'){ ?><td class="rating"><span class="starRating" title="<?php echo $__Context->val->getValueHTML();
echo $__Context->lang->score ?>"><span style="width:<?php echo $__Context->val->getValueHTML()*10 ?>%"><?php echo $__Context->val->getValueHTML() ?></span></span></td><?php } ?>
			<?php  $__Context->etIdx++  ?>
			</tr><?php }} ?>
		</table><?php } ?>
		
		<?php if($__Context->mi->no_attached_img && !$__Context->oDocument->thumbnailExists()){ ?><p style="margin-bottom:30px;text-align:center"><img src="<?php echo $__Context->mi->no_attached_img ?>" alt="No Attached Image" /></p><?php } ?>
		
		<?php if($__Context->mi->img_insert=='2'){ ?><div class="xe_content rd_gallery">
			<?php if($__Context->oDocument->getUploadedFiles()&&count($__Context->oDocument->getUploadedFiles()))foreach($__Context->oDocument->getUploadedFiles() as $__Context->key=>$__Context->file){ ?>
<?php if(!$__Context->mi->img_insert2){ ?>
<?php 
	$__Context->ext=substr($__Context->file->source_filename, -4);
	$__Context->ext=strtolower($__Context->ext);
	$__Context->extImg=in_array($__Context->ext,array('.jpg','jpeg','.gif','.png'));
 ?>
<?php } ?>
<?php if($__Context->mi->img_insert2){ ?>
<?php 
	$__Context->ext=substr($__Context->file->source_filename, -15);
	$__Context->ext=strtolower($__Context->ext);
	$__Context->extImg=in_array($__Context->ext,array('_rd_gallery.jpg','rd_gallery.jpeg','_rd_gallery.gif','_rd_gallery.png'));
 ?>
<?php } ?>
			<?php if($__Context->extImg){ ?><img src="<?php echo $__Context->file->uploaded_filename ?>" alt="" /><?php } ?>
			<?php } ?>
		</div><?php } ?>
		<article><?php echo $__Context->oDocument->getContent(false) ?></article>
		<?php if($__Context->mi->img_insert=='3'){ ?><div class="xe_content rd_gallery">
			<?php if($__Context->oDocument->getUploadedFiles()&&count($__Context->oDocument->getUploadedFiles()))foreach($__Context->oDocument->getUploadedFiles() as $__Context->key=>$__Context->file){ ?>
<?php if(!$__Context->mi->img_insert2){ ?>
<?php 
	$__Context->ext=substr($__Context->file->source_filename, -4);
	$__Context->ext=strtolower($__Context->ext);
	$__Context->extImg=in_array($__Context->ext,array('.jpg','jpeg','.gif','.png'));
 ?>
<?php } ?>
<?php if($__Context->mi->img_insert2){ ?>
<?php 
	$__Context->ext=substr($__Context->file->source_filename, -15);
	$__Context->ext=strtolower($__Context->ext);
	$__Context->extImg=in_array($__Context->ext,array('_rd_gallery.jpg','rd_gallery.jpeg','_rd_gallery.gif','_rd_gallery.png'));
 ?>
<?php } ?>
			<?php if($__Context->extImg){ ?><img src="<?php echo $__Context->file->uploaded_filename ?>" alt="" /><?php } ?>
			<?php } ?>
		</div><?php } ?>
		
		<?php  $__Context->tag_list=$__Context->oDocument->get('tag_list')  ?>
		<?php if(count($__Context->tag_list)){ ?><div class="rd_t_f rd_tag css3pie clear">
			<div class="bg_f_color border_color">TAG &bull;</div>
			<ul>
				<?php for($__Context->i=0;$__Context->i<count($__Context->tag_list);$__Context->i++){ ?>
				<?php  $__Context->tag=$__Context->tag_list[$__Context->i];  ?>
				<li><a href="<?php echo getUrl('search_target','tag','search_keyword',$__Context->tag,'document_srl','') ?>"><?php echo htmlspecialchars($__Context->tag) ?></a><span class="comma">,</span></li>
				<?php } ?>
			</ul>
		</div><?php } ?>
	</div>
	
	<div class="rd_ft">
		
		<?php if($__Context->mi->display_sign!='N' && ($__Context->oDocument->getProfileImage() || $__Context->oDocument->getSignature())){ ?><div class="rd_sign clear">
			<h4><em class="fa fa-info-circle bd_info_icon"></em> Who's <em><?php echo $__Context->oDocument->getNickName() ?></em></h4>
			<?php if($__Context->oDocument->getProfileImage()){ ?><img class="img fl" src="<?php echo $__Context->oDocument->getProfileImage() ?>" alt="profile" /><?php } ?>
			<?php if($__Context->oDocument->getSignature()){ ?><div class="get_sign"><?php echo $__Context->oDocument->getSignature() ?></div><?php } ?>
		</div><?php } ?>
		
		<?php if($__Context->mi->prev_next!='N' && !$__Context->oDocument->isNotice() && $__Context->mi->default_style!='blog'){ ?><div class="bd_prev_next clear"<?php if($__Context->mi->prev_next=='2'){ ?> style="display:none"<?php } ?>>
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
	$__Context->prevnext_date = $__Context->document2->regdate;
	$__Context->prevnext_nick = $__Context->document2->nick_name;
	break;
 ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
			<div<?php if($__Context->mi->default_style=='viewer'){ ?> style="max-width:<?php echo $__Context->mi->viewer_width ?>px"<?php } ?>>
				<?php if($__Context->document_list[$__Context->no+1]->document_srl){ ?><a class="bd_rd_prev bubble no_bubble fl<?php if($__Context->mi->default_style=='viewer'){ ?> right<?php } ?>" href="<?php echo getUrl('document_srl',$__Context->document_list[$__Context->no+1]->document_srl) ?>">
					<?php if(!$__Context->mi->prev_next){ ?><span class="p"><em class="link"><i class="fa fa-angle-left"></i> Prev</em> <?php echo $__Context->document_list[$__Context->no+1]->getTitle($__Context->mi->prev_next_cut_size) ?></span><?php } ?>
					<i class="fa fa-angle-left"></i>
					<span class="wrp prev_next">
						<span class="speech">
							<?php if($__Context->document_list[$__Context->no+1]->thumbnailExists()){ ?><img src="<?php echo $__Context->document_list[$__Context->no+1]->getThumbnail($__Context->mi->thumbnail_width,$__Context->mi->thumbnail_height,$__Context->mi->thumbnail_type) ?>" alt="" /><?php } ?>
							<b><?php echo $__Context->document_list[$__Context->no+1]->getTitle($__Context->mi->prev_next_cut_size) ?></b>
							<span><em><?php echo $__Context->document_list[$__Context->no+1]->getRegdate('Y.m.d') ?></em><small>by </small><?php echo $__Context->document_list[$__Context->no+1]->getNickName() ?></span>
						</span><i class="edge"></i>
						<i class="ie8_only bl"></i><i class="ie8_only br"></i>
					</span>
				</a><?php } ?>
				
				<?php if($__Context->is_prevnext){ ?>
				<?php if($__Context->is_prevnext=='P'){ ?>
				<a class="bd_rd_prev bubble no_bubble fl<?php if($__Context->mi->default_style=='viewer'){ ?> right<?php } ?>" href="<?php echo getUrl('document_srl',$__Context->prevnext_doc,'page','','cpage','') ?>">
					<?php if(!$__Context->mi->prev_next){ ?><span class="p"><em class="link"><i class="fa fa-angle-left"></i> Prev</em> <?php echo $__Context->prevnext_title ?></span><?php } ?>
					<i class="fa fa-angle-left"></i>
				<?php }else{ ?>
				<a class="bd_rd_next bubble no_bubble fr<?php if($__Context->mi->default_style=='viewer'){ ?> left<?php } ?>" href="<?php echo getUrl('document_srl',$__Context->prevnext_doc,'page','','cpage','') ?>">
					<?php if(!$__Context->mi->prev_next){ ?><span class="p"><?php echo $__Context->prevnext_title ?> <em class="link">Next <i class="fa fa-angle-right"></i></em></span><?php } ?>
					<i class="fa fa-angle-right"></i>
				<?php } ?>
					<span class="wrp prev_next">
						<span class="speech">
							<b><?php echo $__Context->prevnext_title ?></b>
							<span><em><?php echo zdate($__Context->prevnext_date,'Y.m.d') ?></em><small>by </small><?php echo $__Context->prevnext_nick ?></span>
						</span><i class="edge"></i>
						<i class="ie8_only bl"></i><i class="ie8_only br"></i>
					</span>
				</a>
				<?php } ?>
				<?php if($__Context->document_list[$__Context->no-1]->document_srl){ ?><a class="bd_rd_next bubble no_bubble fr<?php if($__Context->mi->default_style=='viewer'){ ?> left<?php } ?>" href="<?php echo getUrl('document_srl',$__Context->document_list[$__Context->no-1]->document_srl) ?>">
					<?php if(!$__Context->mi->prev_next){ ?><span class="p"><?php echo $__Context->document_list[$__Context->no-1]->getTitle($__Context->mi->prev_next_cut_size) ?> <em class="link">Next <i class="fa fa-angle-right"></i></em></span><?php } ?>
					<i class="fa fa-angle-right"></i>
					<span class="wrp prev_next">
						<span class="speech">
							<?php if($__Context->document_list[$__Context->no-1]->thumbnailExists()){ ?><img src="<?php echo $__Context->document_list[$__Context->no-1]->getThumbnail($__Context->mi->thumbnail_width,$__Context->mi->thumbnail_height,$__Context->mi->thumbnail_type) ?>" alt="" /><?php } ?>
							<b><?php echo $__Context->document_list[$__Context->no-1]->getTitle($__Context->mi->prev_next_cut_size) ?></b>
							<span><em><?php echo $__Context->document_list[$__Context->no-1]->getRegdate('Y.m.d') ?></em><small>by </small><?php echo $__Context->document_list[$__Context->no-1]->getNickName() ?></span>
						</span><i class="edge"></i>
						<i class="ie8_only bl"></i><i class="ie8_only br"></i>
					</span>
				</a><?php } ?>
			</div>
			<?php  break; ?>
			<?php }} ?>
		</div><?php } ?>
		
		<?php if($__Context->mi->votes!='N'){ ?><div class="rd_vote">
			<a class="bd_login" href="#"<?php if($__Context->is_logged){ ?> onclick="doCallModuleAction('document','procDocumentVoteUp','<?php echo $__Context->oDocument->document_srl ?>');return false;"<?php } ?> style="border:2px solid #<?php echo $__Context->mi->color ?>;color:#<?php echo $__Context->mi->color ?>;">
				<b><i class="fa fa-heart"></i> <?php echo $__Context->oDocument->get('voted_count') ?></b>
				<p><?php echo $__Context->lang->cmd_vote ?></p>
			</a>
			<?php if(!$__Context->mi->votes){ ?><a class="blamed bd_login" href="#"<?php if($__Context->is_logged){ ?> onclick="doCallModuleAction('document','procDocumentVoteDown','<?php echo $__Context->oDocument->document_srl ?>');return false;"<?php } ?>>
				<b><i class="fa fa-heart"></i> <?php echo $__Context->oDocument->get('blamed_count') ?></b>
				<p><?php echo $__Context->lang->cmd_vote_down ?></p>
			</a><?php } ?>
			<?php if($__Context->mi->declare){ ?><a class="blamed declare bd_login" href="#"<?php if($__Context->is_logged){ ?> onclick="doCallModuleAction('document','procDocumentDeclare','<?php echo $__Context->oDocument->document_srl ?>');return false;"<?php } ?>>
				<b><i class="fa fa-phone"></i></b>
				<p><?php echo $__Context->lang->cmd_declare ?></p>
			</a><?php } ?>
		</div><?php } ?>
		
		<?php if($__Context->mi->to_sns=='3'){ ?><div class="to_sns big" style="text-align:<?php echo $__Context->mi->to_sns_big ?>" data-url="<?php echo $__Context->sns_link ?>" data-title="<?php echo $__Context->sns_title ?>">
			<a class="facebook bubble" href="#" data-type="facebook" title="To Facebook"><b class="ico_sns facebook">Facebook</b></a>
			<a class="twitter bubble" href="#" data-type="twitter" title="To Twitter"><b class="ico_sns twitter">Twitter</b></a>
			<a class="google bubble" href="#" data-type="google" title="To Google"><b class="ico_sns google">Google</b></a>
			<a class="pinterest bubble" href="#" data-type="pinterest" title="To Pinterest"><b class="ico_sns pinterest">Pinterest</b></a>
			<?php if(Mobile::isMobileCheckByAgent()){ ?>
			<a class="line bubble" href="line://msg/text/?<?php echo $__Context->sns_title ?>%0D%0A<?php echo $__Context->sns_link ?>" title="To Line"><b class="ico_sns line">Line</b></a>
			<a class="kakao bubble" href="kakaolink://sendurl?msg=<?php echo $__Context->sns_title ?>&url=<?php echo $__Context->sns_link ?>&appid=m.kakao.com&appver=2.0&appname=카카오" title="To Kakao Talk"><b class="ico_sns kakao">Kakao</b></a>
			<?php } ?>
		</div><?php } ?>
		<?php if($__Context->mi->to_sns=='4' && $__Context->mi->to_sns_content){ ?><div class="to_sns small clear"><?php echo $__Context->mi->to_sns_content ?></div><?php } ?>
		
		<?php if($__Context->oDocument->hasUploadedFiles() && (!$__Context->mi->show_files || $__Context->mi->show_files==2)){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_read_files.html');
} ?>
		
		<div class="rd_ft_nav clear">
			<?php if($__Context->mi->default_style!='viewer' && $__Context->mi->rd_ft_nav){ ?><a class="btn_img fl" href="<?php echo getUrl('document_srl','') ?>"><i class="fa fa-bars"></i> <?php echo $__Context->lang->cmd_list ?></a><?php } ?>
			
			<?php if(!$__Context->mi->to_sns){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_read_sns.html');
} ?>
			
			<?php  $__Context->ft_read_nav=1 ?>
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_read_nav.html') ?>
			<?php  $__Context->ft_read_nav='' ?>
		</div>
	</div>
	
<?php if($__Context->mi->cmt_wrt=='sns'){ ?>
<?php  
	$__Context->mi->cmt_wrt_position='';
	$__Context->mi->profile_img='';
 ?>
<?php } ?>
	<?php if(!$__Context->mi->viewer_cmt){ ?><div class="fdb_lst_wrp <?php echo $__Context->mi->fdb_style ?> <?php echo $__Context->mi->profile_img ?>">
		<div id="<?php echo $__Context->oDocument->document_srl ?>_comment" class="fdb_lst clear <?php echo $__Context->mi->fdb_nav ?> <?php echo $__Context->mi->cmt_wrt_position ?>">
			
			<?php if($__Context->mi->cmt_wrt=='sns'){ ?>
			
			<?php if($__Context->oDocument->allowComment() && $__Context->mi->select_editor!='N'){ ?><div class="editor_select bubble fr m_no" title="<?php echo $__Context->lang->noti_rfsh ?>">
				<a class="tg_btn2" href="#" data-href="#editor_select"><em class="fa fa-info-circle bd_info_icon"></em> <?php echo $__Context->lang->select_editor ?></a>
				<?php if($__Context->rd_idx==0){ ?><div id="editor_select" class="editor_select_cnt tg_cnt2 wrp"><button type="button" class="tg_blur2"></button>
					<a<?php if($__Context->mi->cmt_wrt=='simple'){ ?> class="on"<?php } ?> href="#" onclick="jQuery.cookie('bd_editor','simple');location.reload();return false"><em>✔ </em><?php echo $__Context->lang->textarea ?></a>
					<a<?php if($__Context->mi->cmt_wrt=='editor'){ ?> class="on"<?php } ?> href="#" onclick="jQuery.cookie('bd_editor','editor');location.reload();return false"><em>✔ </em><?php echo $__Context->lang->wysiwyg ?></a>
					<a<?php if($__Context->mi->cmt_wrt=='sns'){ ?> class="on"<?php } ?> href="#" onclick="jQuery.cookie('bd_editor','sns');location.reload();return false"><em>✔ </em><?php echo $__Context->lang->sxc_editor ?></a>
					<i class="edge"></i><button type="button" class="tg_blur2"></button>
					<i class="ie8_only bl"></i><i class="ie8_only br"></i>
				</div><?php } ?>
			</div><?php } ?>
			<img class="zbxe_widget_output" widget="socialxe_comment" skin="sketchbook5" colorset="<?php echo $__Context->mi->colorset ?>" document_srl="<?php echo $__Context->oDocument->document_srl ?>" content_link="<?php echo getFullUrl('','document_srl',$__Context->oDocument->document_srl,'dummy','1') ?>" content_title="<?php echo htmlspecialchars($__Context->oDocument->getTitleText()) ?>" enter_send="N"<?php if(!$__Context->mi->auto_view_sub){ ?> auto_view_sub="Y"<?php } ?> style="overflow:visible" />
			<?php }else{ ?>
			
			<?php if($__Context->oDocument->allowComment() && !$__Context->mi->cmt_wrt_position){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_comment_write.html');
} ?>
			
			<div id="cmtPosition" aria-live="polite"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_comment.html') ?></div>
			
			<?php if($__Context->oDocument->allowComment() && $__Context->mi->cmt_wrt_position=='cmt_wrt_btm'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_comment_write.html');
} ?>
			<?php } ?>
		</div>
	</div><?php } ?>
	
	<?php } ?>
</div>
<?php if($__Context->mi->rd_lst && $__Context->mi->default_style!='blog'){ ?><div class="btm_mn clear" style="border-top:1px solid #CCC">
	<div class="fl">
		<a class="btn_img" href="<?php echo getUrl('document_srl','') ?>"><i class="fa fa-bars"></i> <?php echo $__Context->lang->cmd_list ?></a>
		<a class="btn_img back_to" href="#bd_<?php echo $__Context->mi->module_srl ?>"><i class="fa fa-arrow-up"></i> <?php echo $__Context->lang->cmd_move_up ?></a>
	</div>
	<div class="fr">
		<?php if($__Context->mi->prev_next=='2' && !$__Context->oDocument->isNotice()){ ?>
		<a class="btn_img no rd_prev bubble no_bubble" href="#"><?php echo $__Context->lang->cmd_prev ?></a>
		<a class="btn_img no rd_next bubble no_bubble" href="#"><?php echo $__Context->lang->cmd_next ?></a>
		<?php } ?>
		<?php if(!$__Context->mi->write_btm_btn || ($__Context->mi->write_btm_btn!='N' && $__Context->grant->write_document)){ ?><a class="btn_img" href="<?php echo getUrl('act','dispBoardWrite','document_srl','') ?>"><b class="ico_16px write"></b> <?php echo $__Context->lang->cmd_write ?></a><?php } ?>
	</div>
</div><?php } ?>
<hr id="rd_end_<?php echo $__Context->oDocument->document_srl ?>" class="rd_end clear" />