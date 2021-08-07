<?php if(!defined("__XE__"))exit;?><div class="bd_bc fl">
	<a href="<?php echo getSiteUrl() ?>"><strong>Home</strong></a>
	<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?>
	<i class="fa fa-angle-right"></i><a href="<?php echo $__Context->val1['href'] ?>"><?php if(!$__Context->val1['list']){ ?><em><?php echo $__Context->val1['text'] ?></em><?php }else{;
echo $__Context->val1['text'];
} ?></a>
	<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['selected']){ ?>
	<i class="fa fa-angle-right"></i><a href="<?php echo $__Context->val2['href'] ?>"><?php if(!$__Context->val2['list']){ ?><em><?php echo $__Context->val2['text'] ?></em><?php }else{;
echo $__Context->val2['text'];
} ?></a>
	<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['selected']){ ?>
	<i class="fa fa-angle-right"></i><a href="<?php echo $__Context->val3['href'] ?>"><?php if(!$__Context->val3['list']){ ?><em><?php echo $__Context->val3['text'] ?></em><?php }else{;
echo $__Context->val3['text'];
} ?></a>
	<?php }} ?>
	<?php }} ?>
	<?php }} ?>
</div>