<?php if(!defined("__XE__"))exit;
$__Context->mi = $__Context->module_info;
	if(!$__Context->mi->content_cut_size) $__Context->mi->content_cut_size = 240;
	if(!$__Context->mi->duration_new) $__Context->mi->duration_new = 24;
	if(!$__Context->mi->colorset) $__Context->mi->colorset = 'white';
	if(!$__Context->mi->preview_tx)  $__Context->mi->preview_tx = 150;
	if(!$__Context->mi->extra_num) $__Context->mi->extra_num = 1;
	if(!$__Context->mi->extra_num2) $__Context->mi->extra_num2 = 1;
	if(!$__Context->mi->thumbnail_width)  $__Context->mi->thumbnail_width  = 90;
	if(!$__Context->mi->thumbnail_height) $__Context->mi->thumbnail_height = 90;
	if(!$__Context->mi->zine_thumb_width) $__Context->mi->zine_thumb_width = 90;
	if(!$__Context->mi->zine_thumb_height) $__Context->mi->zine_thumb_height = 90;
	if(!$__Context->mi->zine_margin) $__Context->mi->zine_margin = 10;
	if(!$__Context->mi->cmt_wrt) $__Context->mi->cmt_wrt = 'simple';
	if(!$__Context->mi->img_insert_align) $__Context->mi->img_insert_align = 'center';
	
	$__Context->mi->btm_mn = unserialize($__Context->mi->btm_mn);
	$__Context->mi->preview = unserialize($__Context->mi->preview);
	$__Context->mi->ext_img = unserialize($__Context->mi->ext_img);
	$__Context->mi->cmt_count = unserialize($__Context->mi->cmt_count);
	$__Context->mi->wrt_opt = unserialize($__Context->mi->wrt_opt);
	$__Context->mi->viewer_itm = unserialize($__Context->mi->viewer_itm);
	$__Context->mi->rd_blog_itm = unserialize($__Context->mi->rd_blog_itm);
	if($__Context->_COOKIE['bd_font'] && !$__Context->mi->font_btn) $__Context->mi->font = $__Context->_COOKIE['bd_font'];
	if($__Context->_COOKIE['bd_editor']) $__Context->mi->cmt_wrt = $__Context->_COOKIE['bd_editor'];
	if($__Context->_COOKIE['cookie_viewer_with']) $__Context->mi->viewer_with = '';
	if($__Context->mi->custom_color) $__Context->mi->color = $__Context->mi->custom_color;
	if($__Context->mi->custom_shadow) $__Context->mi->shadow = $__Context->mi->custom_shadow;
	if(!$__Context->mi->color) $__Context->mi->color = 333333;
	if(!$__Context->mi->color) $__Context->mi->shadow = '#999';
	if($__Context->mi->colorset=='black') $__Context->mi->color = EEEEEE;
	if($__Context->mi->colorset=='black') $__Context->mi->shadow = '#000';
	if($__Context->mi->color=='87cefa') $__Context->mi->shadow = '#5f9ea0';
	if($__Context->mi->color=='6495ed') $__Context->mi->shadow = '#4682b4';
	if($__Context->mi->color=='4169e1' || $__Context->mi->color=='4682b4') $__Context->mi->shadow = '#646496';
	if($__Context->mi->color=='adff2f') $__Context->mi->shadow = '#80E12A';
	if($__Context->mi->color=='80E12A') $__Context->mi->shadow = '#4BAF4B';
	if($__Context->mi->color=='ffb6c1') $__Context->mi->shadow = '#e9967a';
	if($__Context->mi->color=='ff69b4') $__Context->mi->shadow = '#db7093';
	if($__Context->mi->color=='ff1493') $__Context->mi->shadow = '#C39';
	if($__Context->mi->color=='ffd700') $__Context->mi->shadow = '#daa520';
	if($__Context->mi->color=='ffa500') $__Context->mi->shadow = '#f08080';
	if($__Context->mi->color=='ff7f50') $__Context->mi->shadow = '#d2691e';
	if($__Context->mi->color=='ff6347') $__Context->mi->shadow = '#dc143c';
	if($__Context->mi->color=='bc8f8f') $__Context->mi->shadow = '#A36464';
	if($__Context->mi->color=='ee82ee') $__Context->mi->shadow = '#da70d6';
	if($__Context->mi->color=='c71585') $__Context->mi->shadow = '#8b0000';
	if($__Context->mi->color=='db7093') $__Context->mi->shadow = '#cd5c5c';
 ?>
<?php if(Mobile::isMobileCheckByAgent()){ ?>
<?php 
	$__Context->mi->bubble = 'N';
	$__Context->mi->hover = 'N';
	$__Context->mi->font_btn = 'N';
	$__Context->mi->srch_window = 'N';
	$__Context->mi->zine_hover = 'N';
	$__Context->mi->rd_nav_side = 'N';
	if($__Context->mi->cmt_wrt=='editor') $__Context->mi->cmt_wrt = 'simple';
	if($__Context->mi->to_sns!='N') $__Context->mi->to_sns = 3;
 ?>
<?php } ?>
<?php if($__Context->lang_type=='ko'){ ?>
<?php 
	$__Context->lang->search_info = '검색창을 열고 닫습니다';
	$__Context->lang->viewer = '뷰어로 보기';
	$__Context->lang->with_viewer = '게시물을 뷰어로 보기';
	$__Context->lang->with_viewer_info = '이 버튼을 활성화시키면, 목록에서 게시물 링크를 클릭 시 \'뷰어로 보기\'로 보게 됩니다';
	$__Context->lang->go_cmt = '댓글로 가기';
	$__Context->lang->more = '더보기';
	$__Context->lang->use_wysiwyg = '에디터 사용하기';
	$__Context->lang->sns_wrt = '설정된 SNS로 작성된 글을 동시에 발송합니다. 발송하려 하는 해당 SNS의 아이콘을 클릭하세요';
	$__Context->lang->shortcut = '단축키';
	$__Context->lang->larger = '크게';
	$__Context->lang->smaller = '작게';
	$__Context->lang->font = '글꼴';
	$__Context->lang->best_font_dsc = '사이트 기본 글꼴을 유지합니다';
	$__Context->lang->best_font = '기본글꼴';
	$__Context->lang->window_font = '맑은고딕';
	$__Context->lang->tahoma = '돋움';
	$__Context->lang->select_editor = '에디터 선택하기';
	$__Context->lang->textarea = '텍스트 모드';
	$__Context->lang->wysiwyg = '에디터 모드';
	$__Context->lang->sxc_editor = 'SNS 보내기';
	$__Context->lang->noti_rfsh = '※ 주의 : 페이지가 새로고침됩니다';
	$__Context->lang->bd_login = '로그인 하시겠습니까?';
	$__Context->lang->link_site = '사이트';
	$__Context->lang->link_site_viewer = '사이트를 뷰어로 보기';
	$__Context->lang->score = '점';
	$__Context->lang->cmd_deselect_all = '선택 해제';
	$__Context->lang->m_editor_notice = 'HTML로 작성된 문서를 모바일 기기에서 수정하는 것을 권장하지 않습니다';
	$__Context->lang->select_files_to_insert = '본문에 넣을 파일을 선택하세요';
	$__Context->lang->m_img_upoad_1 = '본문 위에 넣기';
	$__Context->lang->m_img_upoad_2 = '본문 아래에 넣기';
 ?>
<?php }else{ ?>
<?php 
	$__Context->lang->search_info = 'Show or Hide search window';
	$__Context->lang->viewer = 'Viewer';
	$__Context->lang->with_viewer = 'Read with Viewer';
	$__Context->lang->with_viewer_info = 'If this button is activated, when you click links in list, read with Viewer';
	$__Context->lang->go_cmt = 'Go comment';
	$__Context->lang->more = ', More';
	$__Context->lang->use_wysiwyg = 'Write with WYSIWYG';
	$__Context->lang->sns_wrt = 'If you send this post to your SNS, Click the SNS icon';
	$__Context->lang->shortcut = 'Shortcut';
	$__Context->lang->larger = 'Larger Font';
	$__Context->lang->smaller = 'Smaller Font';
	$__Context->lang->font = 'Font';
	$__Context->lang->best_font_dsc = 'Default';
	$__Context->lang->best_font = 'Default';
	$__Context->lang->window_font = 'Segoe UI';
	if($__Context->lang_type=='jp') $__Context->lang->window_font = 'メイリオ';
	$__Context->lang->tahoma = 'Tahoma';
	$__Context->lang->select_editor = 'Select Editor';
	$__Context->lang->textarea = 'Textarea';
	$__Context->lang->wysiwyg = 'WYSIWYG';
	$__Context->lang->sxc_editor = 'To SNS';
	$__Context->lang->noti_rfsh = '※ Be careful of Refresh';
	$__Context->lang->bd_login = 'Sign In?';
	$__Context->lang->link_site = 'Website';
	$__Context->lang->link_site_viewer = 'Go Website with Viewer';
	$__Context->lang->score = ' Score';
	$__Context->lang->cmd_deselect_all = 'Deselect';
	$__Context->lang->m_editor_notice = 'It is not recommended to update an article on mobile devices';
	$__Context->lang->select_files_to_insert = 'Select files to insert to content';
	$__Context->lang->m_img_upoad_1 = 'Files + Content';
	$__Context->lang->m_img_upoad_2 = 'Content + Files';
	$__Context->lang->cmd_vote = 'Like';
	$__Context->lang->cmd_vote_down = 'Dislike';
 ?>
<?php } ?>
<?php if($__Context->listStyle=='list'){ ?>
<?php  $__Context->mi->default_style = 'list' ?>
<?php }elseif($__Context->listStyle=='webzine'){ ?>
<?php  $__Context->mi->default_style = 'webzine' ?>
<?php }elseif($__Context->listStyle=='gallery'){ ?>
<?php  $__Context->mi->default_style = 'gallery' ?>
<?php }elseif($__Context->listStyle=='cloud_gall'){ ?>
<?php  $__Context->mi->default_style = 'cloud_gall' ?>
<?php }elseif($__Context->listStyle=='guest'){ ?>
<?php  $__Context->mi->default_style = 'guest' ?>
<?php }elseif($__Context->listStyle=='blog'){ ?>
<?php  $__Context->mi->default_style = 'blog' ?>
<?php }elseif($__Context->listStyle=='faq'){ ?>
<?php  $__Context->mi->default_style = 'faq' ?>
<?php }elseif($__Context->listStyle=='viewer'){ ?>
<?php  $__Context->mi->default_style = 'viewer' ?>
<?php }elseif(!in_array($__Context->mi->default_style,array('list','webzine','gallery','cloud_gall','guest','blog','faq','viewer'))){ ?>
<?php  $__Context->mi->default_style = 'list' ?>
<?php } ?>
<?php if(class_exists(Mobile) && Mobile::isFromMobilePhone()){ ?>
<!--#Meta:common/js/jquery.min.js--><?php $__tmp=array('common/js/jquery.min.js','','','-100006');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:common/js/xe.min.js--><?php $__tmp=array('common/js/xe.min.js','','','-100006');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:common/js/x.min.js--><?php $__tmp=array('common/js/x.min.js','','','-100006');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/tpl/js/board.js--><?php $__tmp=array('modules/board/tpl/js/board.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<!--#JSPLUGIN:ui--><?php Context::loadJavascriptPlugin('ui'); ?>
<!--#Meta:https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css--><?php $__tmp=array('https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/sketchbook5/css/board.css--><?php $__tmp=array('modules/board/skins/sketchbook5/css/board.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/sketchbook5/css/ie8.css--><?php $__tmp=array('modules/board/skins/sketchbook5/css/ie8.css','','lt IE 9','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->mi->colorset=='black'){ ?><!--#Meta:modules/board/skins/sketchbook5/css/black.css--><?php $__tmp=array('modules/board/skins/sketchbook5/css/black.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if(is_dir(_XE_PATH_.'/modules/board/skins/sketchbook5/custom')){;
} ?>
<style data-id="bdCss">
<?php if($__Context->mi->font){ ?>
.bd,.bd input,.bd textarea,.bd select,.bd button,.bd table{font-family:<?php if($__Context->mi->font=='ng'){ ?>'Segoe UI',Meiryo,'나눔고딕',NanumGothic,ng,<?php }elseif($__Context->mi->font=='window_font'){ ?>'Segoe UI',Meiryo,'맑은 고딕','Malgun Gothic',<?php }elseif($__Context->mi->font=='tahoma'){ ?>Tahoma,'돋움',Dotum,<?php } ?>'돋움',Dotum,Helvetica,'Apple SD Gothic Neo',sans-serif}
<?php if($__Context->mi->font=='tahoma'){ ?>
.bd .ngeb{font-family:'돋움',Dotum,Helvetica,'Apple SD Gothic Neo',sans-serif}
<?php }else{ ?>
.bd .ngeb{font-weight:700;font-family:'Segoe UI',Meiryo,'나눔고딕 ExtraBold','NanumGothic ExtraBold',ngeb,'맑은 고딕','Malgun Gothic','나눔고딕',NanumGothic,ng,'Trebuchet MS','돋움',dotum,Helvetica,'Apple SD Gothic Neo',sans-serif}
<?php } ?>
<?php } ?>
<?php if($__Context->mi->color!='333333'){ ?>
.bd a:focus,.bd input:focus,.bd button:focus,.bd textarea:focus,.bd select:focus{outline-color:#<?php echo $__Context->mi->color ?>;}
.bd .replyNum{color:#<?php echo $__Context->mi->color ?> !important}
.bd .trackbackNum{color:<?php echo $__Context->mi->shadow ?> !important}
.bd.fdb_count .replyNum{background:#<?php echo $__Context->mi->color ?>;}
.bd.fdb_count .trackbackNum{background:<?php echo $__Context->mi->shadow ?>;}
<?php } ?>
.bd em,.bd .color{color:#<?php echo $__Context->mi->color ?>;}
.bd .shadow{text-shadow:1px 1px 1px <?php echo $__Context->mi->shadow ?>;}
.bd .bolder{color:#<?php echo $__Context->mi->color ?>;text-shadow:2px 2px 4px <?php echo $__Context->mi->shadow ?>;}
.bd .bg_color{background-color:#<?php echo $__Context->mi->color ?>;}
<?php if($__Context->mi->colorset=='white'){ ?>
.bd .bg_f_color{background-color:#<?php echo $__Context->mi->color ?>;background:-webkit-linear-gradient(#FFF -50%,#<?php echo $__Context->mi->color ?> 50%);background:linear-gradient(to bottom,#FFF -50%,#<?php echo $__Context->mi->color ?> 50%);}
<?php } ?>
.bd .border_color{border-color:#<?php echo $__Context->mi->color ?>;}
.bd .bx_shadow{box-shadow:0 0 2px <?php echo $__Context->mi->shadow ?>;}
.viewer_with.on:before{background-color:#<?php echo $__Context->mi->color ?>;box-shadow:0 0 2px #<?php echo $__Context->mi->color ?>;}
<?php if($__Context->mi->ribbon_img){ ?>
.ribbon_v .ribbon{width:<?php echo $__Context->mi->ribbon_size ?>px;height:<?php echo $__Context->mi->ribbon_size ?>px;background:url(<?php echo $__Context->mi->ribbon_img ?>);border:0;-webkit-box-shadow:none;box-shadow:none}
<?php } ?>
<?php if($__Context->mi->ribbon_style){ ?>
.ribbon_v2 .ribbon{<?php if($__Context->mi->ribbon_align){ ?>right:auto;left:-1px;<?php } ?>background-color:<?php echo $__Context->mi->ribbon_color ?>;border-color:<?php echo $__Context->mi->ribbon_color ?>;}
<?php } ?>
<?php if($__Context->mi->no_img){ ?>
.no_img{background:url(<?php echo $__Context->mi->no_img ?>) 50% 50% no-repeat;background-size:cover;text-indent:-999px}
<?php } ?>
<?php if($__Context->mi->use_category!='Y' || $__Context->mi->cnb){ ?>
.bd_zine.zine li:first-child,.bd_tb_lst.common_notice tr:first-child td{margin-top:2px;border-top:1px solid #DDD}
<?php } ?>
<?php if($__Context->mi->img_insert){ ?>
.rd_gallery{text-align:<?php echo $__Context->mi->img_insert_align ?>;<?php echo $__Context->mi->img_insert_css ?>;}
.rd_gallery img{width:<?php echo $__Context->mi->img_insert_width ?>;height:<?php echo $__Context->mi->img_insert_height ?>;<?php echo $__Context->mi->img_insert_img_css ?>;}
<?php } ?>
<?php if($__Context->mi->cnb3_color){ ?>
.cnb3 .on>a,.cnb3 a:hover,.cnb3 a:focus{border-color:<?php echo $__Context->mi->shadow ?>;background:#<?php echo $__Context->mi->color ?>;}
.cnb4 .on>a,.cnb4 a:hover,.cnb4 a:focus{border-color:#<?php echo $__Context->mi->color ?>;color:#<?php echo $__Context->mi->color ?>;}
<?php } ?>
<?php if(!$__Context->mi->zine_tx_color){ ?>
.bd_zine .info b,.bd_zine .info a{color:<?php echo $__Context->mi->shadow ?>;}
.bd_zine.card h3{color:#<?php echo $__Context->mi->color ?>;}
<?php } ?>
<?php if($__Context->mi->default_style=='list'){ ?>
<?php if($__Context->mi->use_category!='Y'){ ?>
.bd_tb_lst{margin-top:0}
<?php } ?>
<?php if($__Context->mi->lst_viewer=='Y'){ ?>
.bd_tb_lst .hx{position:relative;text-decoration:none}
<?php } ?>
.bd_tb_lst .cate span,.bd_tb_lst .author span,.bd_tb_lst .last_post small{max-width:<?php echo $__Context->mi->normal_lst_tdW ?>px}
<?php }elseif($__Context->mi->default_style=='webzine'){ ?>
<?php if(!$__Context->mi->zine_hover){ ?>
.bd_zine.zine li:hover .tmb_wrp{ -ms-transform:rotate(5deg);transform:rotate(5deg)}
.bd_zine.card li:hover{ -ms-transform:scale(1.05);transform:scale(1.05)}
<?php } ?>
.bd_zine .tmb_wrp .no_img{width:<?php echo $__Context->mi->zine_thumb_width ?>px;height:<?php echo $__Context->mi->zine_thumb_height ?>px;line-height:<?php echo $__Context->mi->zine_thumb_height ?>px}
.bd_zine a:hover,.bd_zine a:focus,.bd_zine .select a{border-color:#<?php echo $__Context->mi->color ?>;}
.bd_zine.zine .tmb_wrp img,.bd_zine.card li{ <?php echo $__Context->mi->zine_css ?> }
<?php if($__Context->list_config['thumbnail']){ ?>
.bd_zine.zine .rt_area{margin-left:<?php echo $__Context->mi->zine_thumb_width+20 ?>px}
.bd_zine.zine .tmb_wrp{margin-left:-<?php echo $__Context->mi->zine_thumb_width+20 ?>px}
<?php } ?>
<?php if($__Context->mi->zine_style=='3' || $__Context->mi->zine_style=='4'){ ?>
.bd_zine{margin:0 auto;padding:<?php echo $__Context->mi->zine_margin ?>px 0}
.bd_zine li{width:<?php echo $__Context->mi->zine_thumb_width ?>px;margin:<?php echo $__Context->mi->zine_margin ?>px}
.bd_zine .tmb_wrp .no_img{width:<?php echo $__Context->mi->zine_thumb_width-2 ?>px;<?php if($__Context->mi->thumbnail_type=='crop'){ ?>height:<?php echo $__Context->mi->zine_thumb_width-2 ?>px;line-height:<?php echo $__Context->mi->zine_thumb_width-2 ?>px<?php }else{ ?>height:120px;line-height:120px<?php } ?>;border:1px solid #DDD}
<?php if($__Context->mi->zine_thumb_width > 399){ ?>
.bd_zine.card h3{font-size:15px}
.bd_zine.card .cnt{margin-top:1.5em}
.bd_zine.card .info{font-size:12px}
<?php }elseif($__Context->mi->zine_thumb_width > 299){ ?>
.bd_zine.card h3{font-size:14px}
<?php }elseif($__Context->mi->zine_thumb_width > 209){ ?>
.bd_zine.card h3{font-size:13px;letter-spacing:-1px}
.bd_zine.card .info{font-size:11px}
<?php }elseif($__Context->mi->zine_thumb_width < 139){ ?>
<?php } ?>
@media screen and (max-width:640px){
<?php if($__Context->mi->zine_thumb_width > 279){ ?>
.bd_zine.card li{width:240px}
<?php }else{ ?>
.bd_zine.card li{width:140px}
<?php } ?>
}
@media screen and (max-width:480px){
<?php if($__Context->mi->zine_thumb_width > 399){ ?>
.bd_zine.card li{width:400px}
<?php }elseif($__Context->mi->zine_thumb_width > 139){ ?>
.bd_zine.card li{width:200px}
<?php }else{ ?>
.bd_zine.card li{width:116px}
<?php } ?>
}
@media screen and (max-width:360px){
<?php if($__Context->mi->zine_thumb_width > 279){ ?>
.bd_zine.card li{width:300px}
<?php }else{ ?>
.bd_zine.card li{width:128px}
<?php } ?>
}
<?php } ?>
<?php }elseif($__Context->mi->default_style=='gallery'){ ?>
.bd_tmb_lst li{float:<?php echo $__Context->mi->gall_align ?>;width:<?php echo $__Context->mi->thumbnail_width+40 ?>px;height:<?php echo $__Context->mi->thumbnail_height+80 ?>px;width:<?php echo $__Context->mi->li_width ?>px;height:<?php echo $__Context->mi->li_height ?>px}
.bd_tmb_lst .no_img{width:<?php echo $__Context->mi->thumbnail_width ?>px;<?php if($__Context->mi->thumbnail_type=='crop'){ ?>height:<?php echo $__Context->mi->thumbnail_height ?>px;line-height:<?php echo $__Context->mi->thumbnail_height ?>px<?php }else{ ?>height:<?php echo $__Context->mi->thumbnail_width ?>px;line-height:<?php echo $__Context->mi->thumbnail_width ?>px<?php } ?>}
.bd_tmb_lst .deco_img{background-image:url(<?php echo $__Context->mi->deco_img ?>)}
.bd_tmb_lst .tmb_wrp,.bd_tmb_lst.gall_style2 .tmb_wrp{max-width:<?php echo $__Context->mi->thumbnail_width ?>px;<?php echo $__Context->mi->thumb_css ?> }
<?php if($__Context->mi->tmb_hover_bg){ ?>
.tmb_wrp .info{background:#<?php echo $__Context->mi->color ?>;color:#FFF;<?php if($__Context->mi->tmb_hover_bg=='3'){ ?>filter:alpha(opacity=80);opacity:.8<?php } ?>}
<?php } ?>
<?php if($__Context->mi->gall_deg){ ?>
.bd_tmb_lst .tmb_wrp{transition:transform .5s}
.bd_tmb_lst .tmb_wrp:hover{z-index:1;-ms-transform:rotate(0) !important;transform:rotate(0) !important}
<?php } ?>
<?php if($__Context->mi->gall_hover_img){ ?>
.tmb_wrp .info{background-image:url(<?php echo $__Context->mi->gall_hover_img ?>)}
<?php } ?>
@media screen and (max-width:640px){
<?php if($__Context->mi->thumbnail_width > 279){ ?>
.bd_tmb_lst li{width:50%}
<?php }elseif($__Context->mi->thumbnail_width > 179){ ?>
.bd_tmb_lst li{width:33.333%}
<?php }else{ ?>
.bd_tmb_lst li{width:25%}
<?php } ?>
}
@media screen and (max-width:480px){
<?php if($__Context->mi->thumbnail_width > 399){ ?>
.bd_tmb_lst li{display:block}
<?php }elseif($__Context->mi->thumbnail_width > 139){ ?>
.bd_tmb_lst li{width:50%}
<?php }else{ ?>
.bd_tmb_lst li{width:33.333%}
<?php } ?>
}
@media screen and (max-width:360px){
<?php if($__Context->mi->thumbnail_width > 279){ ?>
.bd_tmb_lst li{display:block}
<?php }else{ ?>
.bd_tmb_lst li{width:50%}
<?php } ?>
}
<?php } ?>
</style>