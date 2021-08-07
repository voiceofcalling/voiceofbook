<?php if(!defined("__XE__"))exit;?><!--#Meta:m.layouts/sketchbook5Mobile/mx.css--><?php $__tmp=array('m.layouts/sketchbook5Mobile/mx.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->lang_type=='ko'){ ?>
<?php 
	$__Context->lang->lang = '언어';
	$__Context->lang->sitemap = '사이트맵';
 ?>
<?php }else{ ?>
<?php 
	$__Context->lang->lang = 'Language';
	$__Context->lang->sitemap = 'Sitemap';
 ?>
<?php } ?>
<?php $__Context->_colorset_list = array('lightsky','orange','sky','green','lightpink','red','yellow','blue','purple','pink','greenyellow','deeppink') ?>
<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?>
<?php $__Context->_idx = 0;
if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key => $__Context->val){;
if($__Context->val['selected']){ ?>
<div id="xe" class="<?php echo $__Context->_colorset_list[$__Context->_idx] ?>">
<?php };
$__Context->_idx++;
} ?>
<?php }} ?>
<div id="hd" class="clear">
	
	<div id="top_mn">
		<a class="show_srch" id="show_srch" onclick="toggle('srch')"><?php echo $__Context->lang->cmd_search ?></a>
		<a class="lang" href="<?php echo getUrl('act','dispModuleChangeLang','oldact',$__Context->act) ?>"><?php echo $__Context->lang->lang ?></a>
		<a class="pc" href="<?php echo getUrl('m',0) ?>">PC<?php echo $__Context->lang->cmd_view ?></a>
		<?php if($__Context->is_logged){ ?><a class="login" href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a><?php } ?>
		<?php if(!$__Context->is_logged){ ?><a class="login" href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?></a><?php } ?>
		<a class="home" href="#hd" onclick="toggle('sitemap')"><?php echo $__Context->lang->sitemap ?></a>
		
		<div id="srch">
			<form action="<?php echo getUrl() ?>" method="get"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
				<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
				<input type="hidden" name="act" value="IS" />
				<input type="text" name="is_keyword" value="<?php echo $__Context->is_keyword ?>" title="<?php echo $__Context->lang->cmd_search ?>" class="itx" accesskey="S" />
				<input type="image" src="/m.layouts/sketchbook5Mobile/img/bs_white.png" alt="Search" class="is" />
			</form>
		</div>
		<button type="button" onclick="toggle('top_mn');sitemap()"><?php echo $__Context->lang->menu ?></button>
	</div>
	
	<div id="sitemap" class="clear">
		<ul>
			<?php $__Context->_idx = 0 ?>
			<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li class="li1 clear <?php echo $__Context->_colorset_list[$__Context->_idx] ?>">
				<a class="a1<?php if($__Context->val1['selected']){ ?> on<?php } ?>" href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
				<?php if($__Context->val1['list']){ ?><ul>
					<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?><li class="li2">
						<a class="a2<?php if($__Context->val2['selected']){ ?> on<?php } ?>" href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
					</li><?php }} ?>
				</ul><?php } ?>
			<?php $__Context->_idx++ ?>
			</li><?php }} ?>
		</ul>
	</div>
	
	<div class="hgroup clear">
		<h1>
			<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?><a href="<?php echo $__Context->val1['href'] ?>" class="on"><?php echo $__Context->val1['link'] ?></a><?php }} ?>
			<a href="<?php if($__Context->layout_info->index_url){;
echo $__Context->layout_info->index_url;
}else{;
echo getUrl('');
} ?>" class="home"><?php if($__Context->layout_info->logo_image){ ?><img src="<?php echo $__Context->layout_info->logo_image ?>" alt="<?php echo $__Context->layout_info->logo_text ?>" /><?php };
if(!$__Context->layout_info->logo_image){;
echo $__Context->layout_info->logo_text;
} ?></a>
		</h1>
	</div>
	
	<div id="gnb"><div id="btn_more">
		
		<ul class="gnb_1">
			<?php $__Context->_idx = 0 ?>
			<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li class="li1 <?php echo $__Context->_colorset_list[$__Context->_idx] ?>">
				<a class="a1" href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
				<?php if($__Context->_idx=='4'){ ?><button type="button" class="btn_more" title="More" onclick="toggle('gnb');toggle('btn_more')"><b>▼</b><span>▲</span><style type="text/css">#gnb{padding-right:32px}</style></button><?php };
$__Context->_idx++ ?>
			</li><?php }} ?>
			
		</ul>
		
		<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?><ul class="gnb_2">
			<?php $__Context->_idx = 0 ?>
			<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?><li class="li1">
				<a class="a1<?php if($__Context->val2['selected']){ ?> on<?php } ?>" href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
				<?php if($__Context->_idx=='4'){ ?><button type="button" class="btn_more" title="More" onclick="toggle('gnb');toggle('btn_more')"><b>▼</b><span>▲</span><style type="text/css">#gnb{padding-right:32px}</style></button><?php };
$__Context->_idx++ ?><style type="text/css">.gnb_1{display:none}</style>
			</li><?php }} ?>
<style type="text/css">#hd h1 .home{padding:8px 0 0 8px;font-size:16px}</style>
		</ul><?php }} ?>
	</div></div>
</div>
<div id="cnt" class="clear"><?php echo $__Context->content ?></div>
<div id="ft" class="clear">
	<?php if($__Context->bottom_menu->list){ ?><div id="btm_mn">
		<ul>
			<?php if($__Context->bottom_menu->list&&count($__Context->bottom_menu->list))foreach($__Context->bottom_menu->list as $__Context->key=>$__Context->val){;
if($__Context->val['link']){ ?><li><a href="<?php echo $__Context->val['href'] ?>"<?php if($__Context->val['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val['link'] ?></a></li><?php }} ?>
		</ul>
	</div><?php } ?>
	<p id="address"> <?php echo $__Context->layout_info->address ?> </p>
	<p id="maker"> <a href="http://www.xpressengine.com" target="_blank">Powered by <strong>X</strong>press <strong>E</strong>ngine</a> / <a href="" target="_blank">Designed by hikaru100</a> </p>
</div>
</div>
<script type="text/javascript">
function toggle(id){
	if(document.getElementById(id).className=='open'){
		document.getElementById(id).className=''
	} else {
		document.getElementById(id).className='open'
	}
};
function sitemap(){
	if(document.getElementById('top_mn').style.display='block'){
		document.getElementById('sitemap').className='';
		document.getElementById('srch').className='';
	}
};
var tester = document.getElementById('top_mn');
fixedPosition(tester);
function fixedPosition(element){
	addEventListener('scroll', function(){
		if(document.getElementById('top_mn').className=='open'){
			element.style.top = window.pageYOffset + 'px';
		} else {
			element.style.top = window.pageYOffset - 62 + 'px';
		}
	}, false);
	addEventListener('click', function(){
		if(document.getElementById('top_mn').className=='open'){
			element.style.top = window.pageYOffset + 'px';
		} else {
			element.style.top = window.pageYOffset - 62 + 'px';
		}
	}, false);
};
</script>