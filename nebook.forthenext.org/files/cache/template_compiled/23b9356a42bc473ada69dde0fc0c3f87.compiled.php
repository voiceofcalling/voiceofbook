<?php if(!defined("__XE__"))exit;
if(!$__Context->module_info->use_browser_title) $__Context->module_info->use_browser_title = 'yes';
if(!$__Context->module_info->cat_type) $__Context->module_info->cat_type = 'cBar';
if(!$__Context->module_info->content_cut_size) $__Context->module_info->content_cut_size = 240;
if(!$__Context->module_info->board_list) $__Context->module_info->board_list = 'no';
if(!$__Context->module_info->dsp_sns) $__Context->module_info->dsp_sns = 'no';
if(!$__Context->module_info->dsp_this) $__Context->module_info->dsp_this = 'no';
if(!$__Context->module_info->dsp_uploadedfiles) $__Context->module_info->dsp_uploadedfiles = 'no';
if(!$__Context->module_info->dsp_tns) $__Context->module_info->dsp_tns = 'no';
if(!$__Context->module_info->dsp_sign) $__Context->module_info->dsp_sign = 'no';
 ?>
<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?>
<?php 
if($__Context->val->type=='no' && $__Context->val->idx==-1) $__Context->no = $__Context->val;
if($__Context->val->type=='title' && $__Context->val->idx==-1) $__Context->title = $__Context->val;
if($__Context->val->type=='nick_name' && $__Context->val->idx==-1) $__Context->nick_name = $__Context->val;
if($__Context->val->type=='user_id' && $__Context->val->idx==-1) $__Context->user_id = $__Context->val;
if($__Context->val->type=='user_name' && $__Context->val->idx==-1) $__Context->user_name = $__Context->val;
if($__Context->val->type=='regdate' && $__Context->val->idx==-1) $__Context->regdate = $__Context->val;
if($__Context->val->type=='last_update' && $__Context->val->idx==-1) $__Context->last_update = $__Context->val;
if($__Context->val->type=='last_post' && $__Context->val->idx==-1) $__Context->last_post = $__Context->val;
if($__Context->val->type=='readed_count' && $__Context->val->idx==-1) $__Context->readed_count = $__Context->val;
if($__Context->val->type=='voted_count' && $__Context->val->idx==-1) $__Context->voted_count = $__Context->val;
if($__Context->val->type=='blamed_count' && $__Context->val->idx==-1) $__Context->blamed_count = $__Context->val;
if($__Context->val->type=='thumbnail' && $__Context->val->idx==-1) $__Context->thumbnail = $__Context->val;
if($__Context->val->type=='summary' && $__Context->val->idx==-1) $__Context->summary = $__Context->val;
if($__Context->val->type=='comment_status' && $__Context->val->idx==-1) $__Context->comment_status = $__Context->val;
 ?>
<?php } ?>
