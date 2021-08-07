<?php if(!defined("__XE__"))exit;?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','__setting.html') ?>
<!--#Meta:modules/board/skins/sketchbook5/js/imagesloaded.pkgd.min.js--><?php $__tmp=array('modules/board/skins/sketchbook5/js/imagesloaded.pkgd.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/sketchbook5/js/jquery.cookie.js--><?php $__tmp=array('modules/board/skins/sketchbook5/js/jquery.cookie.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/skins/xpresseditor/js/xe_textarea.min.js--><?php $__tmp=array('modules/editor/skins/xpresseditor/js/xe_textarea.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/sketchbook5/js/jquery.autogrowtextarea.min.js--><?php $__tmp=array('modules/board/skins/sketchbook5/js/jquery.autogrowtextarea.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/sketchbook5/js/board.js--><?php $__tmp=array('modules/board/skins/sketchbook5/js/board.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script>//<![CDATA[
var lang_type = "<?php echo $__Context->lang_type ?>";
var bdLogin = "<?php if(!$__Context->is_logged){;
echo $__Context->lang->bd_login ?>@<?php echo htmlspecialchars_decode(getUrl('act','dispMemberLoginForm'));
} ?>";
jQuery(function($){
	board('#bd_<?php echo $__Context->mi->module_srl ?>_<?php echo $__Context->oDocument->document_srl ?>');
<?php if($__Context->mi->default_style!='viewer'){ ?>
	$.cookie('bd_viewer_font',$('body').css('font-family'));
<?php } ?>
});
//]]></script>
<?php if($__Context->mi->default_style=='viewer' && $__Context->grant->view){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_viewer.html');
} ?>
<?php if($__Context->mi->default_style!='viewer'){ ?>
<!--#Meta:modules/board/skins/sketchbook5/js/jquery.masonry.min.js--><?php $__tmp=array('modules/board/skins/sketchbook5/js/jquery.masonry.min.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(!$__Context->mi->hd_tx){ ?><div><?php echo $__Context->mi->header_text ?></div><?php } ?>
<?php if($__Context->mi->hd_tx=='2' && $__Context->oDocument->isExists()){ ?><div><?php echo $__Context->mi->header_text ?></div><?php } ?>
<?php if($__Context->mi->hd_tx=='3' && !$__Context->oDocument->isExists()){ ?><div><?php echo $__Context->mi->header_text ?></div><?php } ?>
<div id="bd_<?php echo $__Context->mi->module_srl ?>_<?php echo $__Context->oDocument->document_srl ?>" class="bd <?php echo $__Context->_COOKIE['use_np'] ?> <?php echo $__Context->mi->fdb_count;
if(!$__Context->mi->hover){ ?> hover_effect<?php };
if(!$__Context->mi->select_lst && ($__Context->mi->cnb || $__Context->mi->use_category!='Y')){ ?> small_lst_btn<?php echo $__Context->oDocument->isExists();
};
if($__Context->mi->select_lst_more){ ?> select_lst_cloud<?php } ?>" data-default_style="<?php echo $__Context->mi->default_style ?>"<?php if($__Context->mi->link_board){ ?> data-link_board="<?php echo $__Context->mi->link_board ?>"<?php };
if($__Context->mi->bubble=='N'){ ?> data-bdBubble="N"<?php };
if($__Context->mi->lst_viewer=='Y'){ ?> data-lstViewer="<?php echo $__Context->lang->with_viewer ?>"<?php } ?> data-bdFilesType="<?php echo $__Context->mi->files_type ?>"<?php if($__Context->mi->img_opt){ ?> data-bdImgOpt="Y"<?php };
if(!$__Context->mi->img_link && Mobile::isMobileCheckByAgent()){ ?> data-bdImgLink="Y"<?php };
if($__Context->mi->rd_nav_side || $__Context->mi->default_style=='blog' || $__Context->mi->default_style=='guest'){ ?> data-bdNavSide="N"<?php } ?>>
<?php if($__Context->grant->manager && $__Context->mi->wizard!='N' && !Mobile::isMobileCheckByAgent()){ ?>
<!--#Meta:modules/board/skins/sketchbook5/css/wizard.css--><?php $__tmp=array('modules/board/skins/sketchbook5/css/wizard.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_wizard.php') ?>
<?php } ?>
<div class="bd_hd<?php if($__Context->oDocument->isExists()){ ?> v2<?php } ?> clear">
	<?php if(!$__Context->mi->breadcrumb){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_breadcrumb.html');
} ?>
	
	<?php if($__Context->mi->font_btn!='N'){ ?><div class="bd_font m_no fr"<?php if($__Context->oDocument->isExists() || $__Context->mi->font_btn=='2'){ ?> style="display:none"<?php } ?>>
<!--#Meta:modules/board/skins/sketchbook5/js/font_ng.js--><?php $__tmp=array('modules/board/skins/sketchbook5/js/font_ng.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
		<a class="select tg_btn2" href="#" data-href=".bd_font_select"><b>T</b><strong><?php if($__Context->mi->font=='ng'){ ?>나눔고딕<?php }elseif($__Context->mi->font=='window_font'){;
echo $__Context->lang->window_font;
}elseif($__Context->mi->font=='tahoma'){;
echo $__Context->lang->tahoma;
}else{;
echo $__Context->lang->best_font;
} ?></strong><span class="arrow down"></span></a>
		<div class="bd_font_select tg_cnt2"><button type="button" class="tg_blur2"></button>
			<ul>
				<li class="ui_font<?php if(!$__Context->mi->font){ ?> on<?php } ?>"><a href="#" title="<?php echo $__Context->lang->best_font_dsc ?>"><?php echo $__Context->lang->best_font ?></a><em>✔</em></li>
				<li class="ng<?php if($__Context->mi->font=='ng'){ ?> on<?php } ?>"><a href="#">나눔고딕</a><em>✔</em></li>
				<li class="window_font<?php if($__Context->mi->font=='window_font'){ ?> on<?php } ?>"><a href="#"><?php echo $__Context->lang->window_font ?></a><em>✔</em></li>
				<li class="tahoma<?php if($__Context->mi->font=='tahoma'){ ?> on<?php } ?>"><a href="#"><?php echo $__Context->lang->tahoma ?></a><em>✔</em></li>
			</ul><button type="button" class="tg_blur2"></button>
		</div>
	</div><?php } ?>
	
	<div class="bd_set fr m_btn_wrp m_no">
		<?php if($__Context->grant->view && $__Context->mi->default_style!='guest' && $__Context->mi->default_style!='blog'){ ?>
		<?php if($__Context->oDocument->isExists() && !$__Context->mi->viewer){ ?><a class="bg_f_f9" href="#" onclick="window.open('<?php echo getUrl('listStyle','viewer','page','') ?>','viewer','width=9999,height=9999,scrollbars=yes,resizable=yes,toolbars=no');return false"><em>✔</em> <strong><?php echo $__Context->lang->viewer ?></strong></a><?php } ?>
		<?php if($__Context->mi->link_board){ ?>
		<?php if($__Context->mi->viewer_with!='N'){ ?><a class="viewer_with bubble<?php if($__Context->mi->viewer_with=='2' || $__Context->_COOKIE['cookie_viewer_with']=='Y'){ ?> on<?php } ?>" href="#" title="<?php echo $__Context->lang->with_viewer_info ?>."><em>✔</em> <strong><?php echo $__Context->lang->link_site_viewer ?></strong></a><?php } ?>
		<?php }else{ ?>
		<?php if(!$__Context->oDocument->isExists() && $__Context->mi->viewer_with!='N'){ ?><a class="viewer_with rd_viewer bubble<?php if($__Context->mi->viewer_with=='2' || $__Context->_COOKIE['cookie_viewer_with']=='Y'){ ?> on<?php } ?>" href="#" title="<?php echo $__Context->lang->with_viewer_info ?>."><em>✔</em> <strong><?php echo $__Context->lang->with_viewer ?></strong></a><?php } ?>
		<?php } ?>
		<?php } ?>
		<?php if(!$__Context->oDocument->isExists()){ ?>
		<?php if(!$__Context->mi->srch_window){ ?><a class="show_srch bubble" href="#" title="<?php echo $__Context->lang->search_info ?>"><b class="ico_16px search"></b><?php echo $__Context->lang->cmd_search ?></a><?php } ?>
		<?php if(!$__Context->mi->write_btn || ($__Context->mi->write_btn!='N' && $__Context->grant->write_document)){ ?><a href="<?php echo getUrl('act','dispBoardWrite','document_srl','') ?>"><b class="ico_16px write"></b><?php echo $__Context->lang->cmd_write ?></a><?php } ?>
		<?php if($__Context->mi->font_btn=='2'){ ?><span class="font_select"><a class="select tg_btn2" href="#" data-href=".bd_font_select"><b class="tx_ico_chk">T</b><?php echo $__Context->lang->font ?><i class="arrow down"></i></a></span><?php } ?>
		<?php if($__Context->grant->manager){ ?>
		<a href="<?php echo getUrl('act','dispBoardAdminBoardInfo') ?>"><b class="ico_16px setup"></b><?php echo $__Context->lang->cmd_setup ?></a>
		<a class="m_no" href="<?php echo getUrl('','module','document','act','dispDocumentManageDocument') ?>" onclick="popopen(this.href,'manageDocument');return false"><b class="tx_ico_chk">✔</b><?php echo $__Context->lang->cmd_manage_document ?></a>
		<?php if($__Context->mi->default_style!='list'){ ?><input type="checkbox" onclick="XE.checkboxToggleAll({ doClick:true });" class="iCheck" title="Check All" /><?php } ?>
		<?php } ?>
		<?php } ?>
	</div>
	
	<?php if($__Context->oDocument->isExists() && $__Context->mi->rd_nav=='2'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_read_nav.html');
} ?>
</div>
<?php if($__Context->oDocument->isExists()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_read.html');
} ?>
<?php if(!$__Context->oDocument->isExists() || ($__Context->oDocument->isExists() && !$__Context->mi->rd_lst)){ ?><div class="bd_lst_wrp">
<div class="tl_srch clear">
	
	<?php if($__Context->mi->title){ ?><div class="bd_tl">
		<h1 class="ngeb clear"><i class="bg_color"></i><a href="<?php echo getUrl('','mid',$__Context->mid) ?>"><?php echo $__Context->mi->title ?></a></h1>
		<?php if($__Context->mi->sub_title){ ?><h2 class="clear"><i class="bg_color"></i><?php echo $__Context->mi->sub_title ?></h2><?php } ?>
	</div><?php } ?>
	<?php if($__Context->mi->title_img){ ?><div class="fl"><img src="<?php echo $__Context->mi->title_img ?>" alt="Title" /></div><?php } ?>
	
	<?php if($__Context->mi->srch_window!='N'){ ?><div class="bd_faq_srch<?php if($__Context->mi->srch_window==3){ ?> clear<?php } ?>"<?php if($__Context->mi->srch_window==2 || $__Context->search_keyword){ ?> style="display:block"<?php } ?>>
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_search.html') ?>
	</div><?php } ?>
</div>
<div class="cnb_n_list">
<?php if($__Context->mi->use_category=='Y' && $__Context->mi->cnb!='N'){ ?><div<?php if($__Context->mi->select_lst=='N'){ ?> class="if_lst_btn"<?php };
if($__Context->mi->default_style=='blog'){ ?> style="margin-bottom:30px"<?php } ?>>
<?php  $__Context->cate_list = array(); $__Context->current_key = null;  ?>
<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->key=>$__Context->val){ ?>
	<?php if(!$__Context->val->depth){ ?>
		<?php 
			$__Context->cate_list[$__Context->key] = $__Context->val;
			$__Context->cate_list[$__Context->key]->children = array();
			$__Context->current_key = $__Context->key;
		 ?>
	<?php }elseif($__Context->current_key){ ?>
		<?php  $__Context->cate_list[$__Context->current_key]->children[] = $__Context->val  ?>
	<?php } ?>
<?php } ?>
	<?php if(!$__Context->mi->cnb){ ?><div class="bd_cnb clear css3pie<?php if($__Context->mi->cnb_open){ ?> open<?php } ?>">
		<a class="home" href="<?php echo getUrl('category','','page','','document_srl','') ?>" title="<?php echo $__Context->lang->document_count ?> '<?php echo number_format($__Context->total_count) ?>'"><i class="home ico_16px">Category</i></a>
		<div class="dummy_ie fr"></div>
		<ul class="bubble bg_f_f9 css3pie">
			<li class="cnbMore"><a href="#" class="bubble" title="<?php echo $__Context->lang->category ?> <?php echo $__Context->lang->more ?>"><i class="fa<?php if($__Context->mi->cnb_open){ ?> fa-caret-up<?php }else{ ?> fa-caret-down<?php } ?>"></i></a></li>
			<?php if($__Context->cate_list&&count($__Context->cate_list))foreach($__Context->cate_list as $__Context->key=>$__Context->val){ ?><li<?php if($__Context->category==$__Context->val->category_srl){ ?> class="on"<?php } ?>>
				<a class="a1<?php if($__Context->category==$__Context->val->category_srl){ ?> on<?php } ?>" href="<?php echo getUrl(category,$__Context->val->category_srl,'document_srl','','page','') ?>"<?php if(!$__Context->mi->cnb_count){ ?> title="<?php echo $__Context->lang->document_count ?> <?php echo $__Context->val->document_count ?>"<?php };
if($__Context->val->color!='transparent'){ ?> style="color:<?php echo $__Context->val->color ?>"<?php } ?>><?php echo $__Context->val->title;
if($__Context->mi->cnb_count){ ?><small>(<?php echo $__Context->val->document_count ?>)</small><?php } ?></a>
				<?php if(count($__Context->val->children)){ ?><ul class="wrp">
					<?php if($__Context->val->children&&count($__Context->val->children))foreach($__Context->val->children as $__Context->idx=>$__Context->item){ ?><li class="li2<?php if($__Context->category==$__Context->item->category_srl){ ?> on<?php } ?>"><a href="<?php echo getUrl(category,$__Context->item->category_srl,'document_srl','','page','') ?>"<?php if(!$__Context->mi->cnb_count){ ?> title="<?php echo $__Context->lang->document_count ?> <?php echo $__Context->item->document_count ?>"<?php };
if($__Context->item->color!='transparent'){ ?> style="color:<?php echo $__Context->item->color ?>"<?php } ?>><?php echo $__Context->item->title;
if($__Context->mi->cnb_count){ ?><small>(<?php echo $__Context->item->document_count ?>)</small><?php } ?></a></li><?php } ?>
				</ul><?php } ?>
			</li><?php } ?>
		</ul>
	</div><?php } ?>
	<?php if($__Context->mi->cnb=='cTab'){ ?><ul class="cTab clear">
		<li class="home<?php if(!$__Context->category){ ?> on<?php } ?>"><a href="<?php echo getUrl('category','','page','','document_srl','') ?>" title="<?php echo $__Context->lang->document_count ?> <?php echo number_format($__Context->total_count) ?>"><?php echo $__Context->lang->total;
if($__Context->mi->cnb_count){ ?><small>(<?php echo number_format($__Context->total_count) ?>)</small><?php } ?></a></li>
		<?php if($__Context->cate_list&&count($__Context->cate_list))foreach($__Context->cate_list as $__Context->key=>$__Context->val){ ?><li<?php if($__Context->category==$__Context->val->category_srl){ ?> class="on"<?php } ?>>
			<a href="<?php echo getUrl(category,$__Context->val->category_srl,'document_srl','','page','') ?>"<?php if($__Context->val->color!='transparent'){ ?> style="color:<?php echo $__Context->val->color ?>"<?php } ?>><?php echo $__Context->val->title;
if($__Context->mi->cnb_count){ ?><small>(<?php echo $__Context->val->document_count ?>)</small><?php } ?></a>
			<?php if(count($__Context->val->children)){ ?><ul>
				<?php if($__Context->val->children&&count($__Context->val->children))foreach($__Context->val->children as $__Context->idx=>$__Context->item){ ?><li<?php if($__Context->category==$__Context->item->category_srl){ ?> class="on"<?php } ?>><a href="<?php echo getUrl(category,$__Context->item->category_srl,'document_srl','','page','') ?>"<?php if($__Context->item->color!='transparent'){ ?> style="color:<?php echo $__Context->item->color ?>"<?php } ?>><?php echo $__Context->item->title ?></a></li><?php } ?>
			</ul><?php } ?>
		</li><?php } ?>
	</ul><?php } ?>
	<?php if($__Context->mi->cnb=='cnb3' || $__Context->mi->cnb=='cnb4'){ ?><ul class="cnb3 <?php echo $__Context->mi->cnb ?> <?php echo $__Context->mi->cnb3_align ?> clear">
		<li class="home<?php if(!$__Context->category){ ?> on<?php } ?>">
			<a href="<?php echo getUrl('category','','page','','document_srl','') ?>" title="<?php echo $__Context->lang->document_count ?> <?php echo number_format($__Context->total_count) ?>"><?php echo $__Context->lang->total;
if($__Context->mi->cnb_count){ ?><small>(<?php echo number_format($__Context->total_count) ?>)</small><?php } ?></a></li><?php if($__Context->cate_list&&count($__Context->cate_list))foreach($__Context->cate_list as $__Context->key=>$__Context->val){ ?><li<?php if($__Context->category==$__Context->val->category_srl){ ?> class="on"<?php } ?>><a href="<?php echo getUrl(category,$__Context->val->category_srl,'document_srl','','page','') ?>"<?php if($__Context->val->color!='transparent'){ ?> style="color:<?php echo $__Context->val->color ?>"<?php } ?>><?php echo $__Context->val->title;
if($__Context->mi->cnb_count){ ?><small>(<?php echo $__Context->val->document_count ?>)</small><?php } ?></a>
		</li><?php } ?>
	</ul><?php } ?>
</div><?php } ?>
<?php if(!$__Context->mi->select_lst){ ?><div class="lst_btn fr">
	<ul>
		<li class="classic<?php if($__Context->mi->default_style=='list'){ ?> on<?php } ?>"><a class="bubble" href="<?php echo getUrl('listStyle','list','act','','document_srl','') ?>" title="Text Style"><b>List</b></a></li>
		<li class="zine<?php if($__Context->mi->default_style=='webzine'){ ?> on<?php } ?>"><a class="bubble" href="<?php echo getUrl('listStyle','webzine','act','','document_srl','') ?>" title="Text + Image Style"><b>Zine</b></a></li>
		<li class="gall<?php if($__Context->mi->default_style=='gallery'){ ?> on<?php } ?>"><a class="bubble" href="<?php echo getUrl('listStyle','gallery','act','','document_srl','') ?>" title="Gallery Style"><b>Gallery</b></a></li>
		<?php if($__Context->mi->select_lst_more){ ?><li class="cloud<?php if($__Context->mi->default_style=='cloud_gall'){ ?> on<?php } ?>"><a class="bubble" href="<?php echo getUrl('listStyle','cloud_gall','act','','document_srl','') ?>" title="Photo Cloud"><b>Cloud</b></a></li><?php } ?>
	</ul>
</div><?php } ?>
</div>
<?php if($__Context->mi->default_style=='list'){ ?>
	<?php if(!Mobile::isMobileCheckByAgent() || $__Context->mi->list_m){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_list_normal.html') ?>
	<?php }else{ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_list_m.html') ?>
	<?php } ?>
<?php }elseif($__Context->mi->default_style=='webzine'){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_list_webzine.html') ?>
<?php }elseif($__Context->mi->default_style=='gallery'){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_list_gallery.html') ?>
<?php }elseif($__Context->mi->default_style=='cloud_gall'){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_list_cloud_gall.html') ?>
<?php }elseif($__Context->mi->default_style=='faq'){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_list_faq.html') ?>
<?php }elseif($__Context->mi->default_style=='guest' && !$__Context->oDocument->isExists()){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_list_guest.html') ?>
<?php }elseif($__Context->mi->default_style=='blog' && !$__Context->oDocument->isExists()){ ?>
<?php if($__Context->mi->rd_nav!='N'){;
$__Context->mi->rd_nav='';
} ?>
<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->oDocument){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_read.html') ?>
<?php  $__Context->rd_idx=1 ?>
<?php } ?>
<?php }else{ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_list_normal.html') ?>
<?php } ?>
<?php if(!$__Context->mi->display_setup_button){ ?><div class="btm_mn clear">
	
	<?php if($__Context->mi->srch_btm!='N' && Mobile::isMobileCheckByAgent()){ ?><div class="bd_faq_srch m_srch" style="display:block;float:none">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_search.html') ?>
	</div><?php } ?>
	<div class="fl">
		<?php if(@in_array('home',$__Context->mi->btm_mn)){ ?><a class="btn_img fl" href="<?php echo getUrl('','mid',$__Context->mid,'page',$__Context->page,'document_srl','','listStyle',$__Context->listStyle) ?>"><i class="fa fa-bars"></i> <?php echo $__Context->lang->cmd_list ?></a><?php } ?>
		
		<?php if($__Context->mi->srch_btm!='N' && !Mobile::isMobileCheckByAgent()){ ?><form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" class="bd_srch_btm<?php if($__Context->mi->srch_btm==2 || $__Context->search_keyword){ ?> on<?php } ?>" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
			<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
			<span class="btn_img itx_wrp">
				<button type="submit" onclick="jQuery(this).parents('form.bd_srch_btm').submit();return false;" class="ico_16px search">Search</button>
				<label for="bd_srch_btm_itx_<?php echo $__Context->mi->module_srl ?>"><?php echo $__Context->lang->cmd_search ?></label>
				<input type="text" name="search_keyword" id="bd_srch_btm_itx_<?php echo $__Context->mi->module_srl ?>" class="bd_srch_btm_itx srch_itx" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" />
			</span>
			<span class="btn_img select">
				<select name="search_target">
					<?php if($__Context->search_option&&count($__Context->search_option))foreach($__Context->search_option as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->search_target==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
				</select>
			</span>
			<?php if($__Context->last_division){ ?><a class="btn_img bg_f_f9" href="<?php echo getUrl('page',1,'document_srl','','division',$__Context->last_division,'last_division','') ?>"><?php echo $__Context->lang->cmd_search_next ?></a><?php } ?>
		</form><?php } ?>
	</div>
	<div class="fr">
		<?php if(@in_array('tag',$__Context->mi->btm_mn)){ ?><a class="btn_img m_no" href="<?php echo getUrl('act','dispBoardTagList') ?>"><i class="fa fa-tag"></i> <?php echo $__Context->lang->tag ?></a><?php } ?>
		<?php if(!$__Context->mi->write_btm_btn || ($__Context->mi->write_btm_btn!='N' && $__Context->grant->write_document)){ ?><a class="btn_img" href="<?php echo getUrl('act','dispBoardWrite','document_srl','') ?>"><i class="ico_16px write"></i> <?php echo $__Context->lang->cmd_write ?></a><?php } ?>
		<?php if($__Context->grant->manager){ ?>
		<a class="btn_img" href="<?php echo getUrl('act','dispBoardAdminBoardInfo') ?>"><i class="ico_16px setup"></i> <?php echo $__Context->lang->cmd_setup ?></a>
		<a class="btn_img" href="<?php echo getUrl('','module','document','act','dispDocumentManageDocument') ?>" onclick="popopen(this.href,'manageDocument');return false"><i class="tx_ico_chk">✔</i> <?php echo $__Context->lang->cmd_manage_document ?></a>
		<?php } ?>
	</div>
</div><?php } ?>
<form action="./" method="get" class="bd_pg clear"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
	<fieldset>
	<legend class="blind">Board Pagination</legend>
	<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
	<input type="hidden" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" />
	<input type="hidden" name="search_target" value="<?php echo $__Context->search_target ?>" />
	<input type="hidden" name="listStyle" value="<?php echo $__Context->mi->default_style ?>" />
	<?php  $__Context->prev_page = max($__Context->page-1, 1) ?>
	<?php  $__Context->next_page = min($__Context->page+1, $__Context->page_navigation->last_page) ?>
	<?php if($__Context->page!=$__Context->prev_page){ ?><a href="<?php echo getUrl('page',$__Context->prev_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" class="direction"><i class="fa fa-angle-left"></i> Prev</a><?php } ?>
	<?php if($__Context->page==$__Context->prev_page){ ?><strong class="direction"><i class="fa fa-angle-left"></i> Prev</strong><?php } ?>
	<a class="frst_last bubble<?php if($__Context->page==1){ ?> this<?php } ?>" href="<?php echo getUrl('page','','document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" title="<?php echo $__Context->lang->first_page ?>">1</a>
	<?php if($__Context->page>($__Context->mi->page_count)/2+2){ ?><span class="bubble"><a href="#" class="tg_btn2" data-href=".bd_go_page" title="<?php echo $__Context->lang->go_page ?>">...</a></span><?php } ?>
	<?php while($__Context->page_no=$__Context->page_navigation->getNextPage()){;
if($__Context->page_no!=1 && $__Context->page_no!=$__Context->page_navigation->last_page){ ?>
		<?php if($__Context->page==$__Context->page_no){ ?><strong class="this"><?php echo $__Context->page_no ?></strong><?php } ?> 
		<?php if($__Context->page!=$__Context->page_no){ ?><a href="<?php echo getUrl('page',$__Context->page_no,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>"><?php echo $__Context->page_no ?></a><?php } ?>
	<?php }} ?>
	<?php if(($__Context->page+($__Context->mi->page_count+1)/2<$__Context->page_navigation->last_page) && ($__Context->mi->page_count+1<$__Context->page_navigation->last_page)){ ?><span class="bubble"><a href="#" class="tg_btn2" data-href=".bd_go_page" title="<?php echo $__Context->lang->cmd_go_to_page ?>">...</a></span><?php } ?>
	<?php if($__Context->page_navigation->last_page!=1){ ?><a class="frst_last bubble<?php if($__Context->page==$__Context->page_navigation->last_page){ ?> this<?php } ?>" href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" title="<?php echo $__Context->lang->last_page ?>"><?php echo $__Context->page_navigation->last_page ?></a><?php } ?>
	<?php if($__Context->page!=$__Context->next_page){ ?><a href="<?php echo getUrl('page',$__Context->next_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" class="direction">Next <i class="fa fa-angle-right"></i></a><?php } ?>
	<?php if($__Context->page==$__Context->next_page){ ?><strong class="direction">Next <i class="fa fa-angle-right"></i></strong><?php } ?>
	<div class="bd_go_page tg_cnt2 wrp">
		<button type="button" class="tg_blur2"></button>
		<input type="text" name="page" class="itx" />/ <?php echo $__Context->page_navigation->last_page ?> <button type="submit" class="bd_btn">GO</button>
		<span class="edge"></span>
		<i class="ie8_only bl"></i><i class="ie8_only br"></i>
		<button type="button" class="tg_blur2"></button>
	</div>
	</fieldset>
</form>
</div><?php } ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_footer.html') ?>
<?php } ?>