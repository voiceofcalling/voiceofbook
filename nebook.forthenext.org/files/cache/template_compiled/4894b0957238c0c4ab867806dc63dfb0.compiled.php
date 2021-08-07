<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/editor/components/emoticon/tpl/popup.js--><?php $__tmp=array('modules/editor/components/emoticon/tpl/popup.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/components/emoticon/tpl/popup.css--><?php $__tmp=array('modules/editor/components/emoticon/tpl/popup.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<section class="section">
	<h1><?php echo $__Context->component_info->title ?> ver. <?php echo $__Context->component_info->version ?></h1>
	<div class="x_clearfix">
		<div class="x_pull-right">
			<select name="list" id="selectEmoticonList">
				<?php if($__Context->emoticon_list&&count($__Context->emoticon_list))foreach($__Context->emoticon_list as $__Context->key => $__Context->val){ ?>
				<option <?php if($__Context->val=='msn'){ ?>selected="select"<?php } ?> value="<?php echo $__Context->val ?>"><?php echo $__Context->val ?></option>
				<?php } ?>
			</select>
		</div>
	</div>
	<div id="emoticons" style="height:1px"></div>
</section>
