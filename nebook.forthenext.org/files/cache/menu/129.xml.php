<?php define('__XE__', true); require_once('/home/n069dd5/nebook.forthenext.org/config/config.inc.php'); $oContext = Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); } $oContext->close(); ?><root><node node_srl="132" parent_srl="0" menu_name_key='Children\'s Stories' text="<?php if(true) { $_names = array("en"=>'Children\'s Stories',"ko"=>'Children\'s Stories',"jp"=>'Children\'s Stories',"zh-CN"=>'Children\'s Stories',"zh-TW"=>'Children\'s Stories',"fr"=>'Children\'s Stories',"de"=>'Children\'s Stories',"ru"=>'Children\'s Stories',"es"=>'Children\'s Stories',"tr"=>'Children\'s Stories',"vi"=>'Children\'s Stories',"mn"=>'Children\'s Stories',); print $_names[$lang_type]; }?>" url="<?php print(true?'ChildrenStory':"")?>" href="<?php print(true?getSiteUrl('', '','mid','ChildrenStory'):"")?>" is_shortcut='N' desc='Children\\\\\'s stories' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="147" parent_srl="0" menu_name_key='Poem' text="<?php if(true) { $_names = array("en"=>'Children\'s Stories',"ko"=>'Children\'s Stories',"jp"=>'Children\'s Stories',"zh-CN"=>'Children\'s Stories',"zh-TW"=>'Children\'s Stories',"fr"=>'Children\'s Stories',"de"=>'Children\'s Stories',"ru"=>'Children\'s Stories',"es"=>'Children\'s Stories',"tr"=>'Children\'s Stories',"vi"=>'Children\'s Stories',"mn"=>'Children\'s Stories',"en"=>'Poem',"ko"=>'Poem',"jp"=>'Poem',"zh-CN"=>'Poem',"zh-TW"=>'Poem',"fr"=>'Poem',"de"=>'Poem',"ru"=>'Poem',"es"=>'Poem',"tr"=>'Poem',"vi"=>'Poem',"mn"=>'Poem',); print $_names[$lang_type]; }?>" url="<?php print(true?'Poem':"")?>" href="<?php print(true?getSiteUrl('', '','mid','Poem'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="289" parent_srl="0" menu_name_key='About Us' text="<?php if(true) { $_names = array("en"=>'Children\'s Stories',"ko"=>'Children\'s Stories',"jp"=>'Children\'s Stories',"zh-CN"=>'Children\'s Stories',"zh-TW"=>'Children\'s Stories',"fr"=>'Children\'s Stories',"de"=>'Children\'s Stories',"ru"=>'Children\'s Stories',"es"=>'Children\'s Stories',"tr"=>'Children\'s Stories',"vi"=>'Children\'s Stories',"mn"=>'Children\'s Stories',"en"=>'Poem',"ko"=>'Poem',"jp"=>'Poem',"zh-CN"=>'Poem',"zh-TW"=>'Poem',"fr"=>'Poem',"de"=>'Poem',"ru"=>'Poem',"es"=>'Poem',"tr"=>'Poem',"vi"=>'Poem',"mn"=>'Poem',"en"=>'About Us',"ko"=>'About Us',"jp"=>'About Us',"zh-CN"=>'About Us',"zh-TW"=>'About Us',"fr"=>'About Us',"de"=>'About Us',"ru"=>'About Us',"es"=>'About Us',"tr"=>'About Us',"vi"=>'About Us',"mn"=>'About Us',); print $_names[$lang_type]; }?>" url="<?php print(true?'about':"")?>" href="<?php print(true?getSiteUrl('', '','mid','about'):"")?>" is_shortcut='N' desc='About Us' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="66" parent_srl="0" menu_name_key='Welcome Page' text="<?php if(true) { $_names = array("en"=>'Children\'s Stories',"ko"=>'Children\'s Stories',"jp"=>'Children\'s Stories',"zh-CN"=>'Children\'s Stories',"zh-TW"=>'Children\'s Stories',"fr"=>'Children\'s Stories',"de"=>'Children\'s Stories',"ru"=>'Children\'s Stories',"es"=>'Children\'s Stories',"tr"=>'Children\'s Stories',"vi"=>'Children\'s Stories',"mn"=>'Children\'s Stories',"en"=>'Poem',"ko"=>'Poem',"jp"=>'Poem',"zh-CN"=>'Poem',"zh-TW"=>'Poem',"fr"=>'Poem',"de"=>'Poem',"ru"=>'Poem',"es"=>'Poem',"tr"=>'Poem',"vi"=>'Poem',"mn"=>'Poem',"en"=>'About Us',"ko"=>'About Us',"jp"=>'About Us',"zh-CN"=>'About Us',"zh-TW"=>'About Us',"fr"=>'About Us',"de"=>'About Us',"ru"=>'About Us',"es"=>'About Us',"tr"=>'About Us',"vi"=>'About Us',"mn"=>'About Us',"en"=>'Welcome Page',"ko"=>'Welcome Page',"jp"=>'Welcome Page',"zh-CN"=>'Welcome Page',"zh-TW"=>'Welcome Page',"fr"=>'Welcome Page',"de"=>'Welcome Page',"ru"=>'Welcome Page',"es"=>'Welcome Page',"tr"=>'Welcome Page',"vi"=>'Welcome Page',"mn"=>'Welcome Page',); print $_names[$lang_type]; }?>" url="<?php print(true?'index':"")?>" href="<?php print(true?getSiteUrl('', '','mid','index'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></root>