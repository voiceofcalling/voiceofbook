<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = 0;
$layout_info->layout = 'colorCode';
$layout_info->type = NULL;
$layout_info->path = './m.layouts/colorCode/';
$layout_info->title = 'XE Color Code Mobile layout';
$layout_info->description = '
        This layout is the XE Color Code Mobile layout for XE.
        XEHub (developers@xpressengine.com) 
    ';
$layout_info->version = '1.7';
$layout_info->date = '20131127';
$layout_info->homepage = 'https://www.xehub.io';
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = NULL;
$layout_info->license_link = NULL;
$layout_info->layout_type = 'M';
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = 'XEHub';
$layout_info->author[0]->email_address = 'developers@xpressengine.com';
$layout_info->author[0]->homepage = 'https://www.xehub.io';
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->index_title = new stdClass;
$layout_info->extra_var->index_title->group = NULL;
$layout_info->extra_var->index_title->title = 'Homepage Title';
$layout_info->extra_var->index_title->type = 'text';
$layout_info->extra_var->index_title->value = $vars->index_title;
$layout_info->extra_var->index_title->description = NULL;
$layout_info->extra_var->footer_title = new stdClass;
$layout_info->extra_var->footer_title->group = NULL;
$layout_info->extra_var->footer_title->title = 'Footer Text';
$layout_info->extra_var->footer_title->type = 'text';
$layout_info->extra_var->footer_title->value = $vars->footer_title;
$layout_info->extra_var->footer_title->description = NULL;
$layout_info->extra_var->colorset = new stdClass;
$layout_info->extra_var->colorset->group = NULL;
$layout_info->extra_var->colorset->title = 'Colorset';
$layout_info->extra_var->colorset->type = 'select';
$layout_info->extra_var->colorset->value = $vars->colorset;
$layout_info->extra_var->colorset->description = 'Please select the colorset you want.';
$layout_info->extra_var->colorset->options = array();
$layout_info->extra_var->colorset->options['blue'] = new stdClass;
$layout_info->extra_var->colorset->options['blue']->val = 'Blue';
$layout_info->extra_var->colorset->options['gray'] = new stdClass;
$layout_info->extra_var->colorset->options['gray']->val = 'Gray';
$layout_info->extra_var->colorset->options['red'] = new stdClass;
$layout_info->extra_var->colorset->options['red']->val = 'Red';
$layout_info->extra_var->colorset->options['orange'] = new stdClass;
$layout_info->extra_var->colorset->options['orange']->val = 'Orange';
$layout_info->extra_var->colorset->options['ngreena'] = new stdClass;
$layout_info->extra_var->colorset->options['ngreena']->val = 'nGreenA';
$layout_info->extra_var->colorset->options['ngreenb'] = new stdClass;
$layout_info->extra_var->colorset->options['ngreenb']->val = 'nGreenB';
$layout_info->extra_var->logo_image = new stdClass;
$layout_info->extra_var->logo_image->group = NULL;
$layout_info->extra_var->logo_image->title = 'Logo image';
$layout_info->extra_var->logo_image->type = 'image';
$layout_info->extra_var->logo_image->value = $vars->logo_image;
$layout_info->extra_var->logo_image->description = 'Please input a logo image which will be displayed on the top of the layout. (A transparent image with height of 28px is recommended.)';
$layout_info->extra_var->index_url = new stdClass;
$layout_info->extra_var->index_url->group = NULL;
$layout_info->extra_var->index_url->title = 'Homepage URL';
$layout_info->extra_var->index_url->type = 'text';
$layout_info->extra_var->index_url->value = $vars->index_url;
$layout_info->extra_var->index_url->description = 'Please input the URL to redirect when user clicks the logo';
$layout_info->extra_var_count = 5;
$layout_info->menu_count = 1;
$layout_info->menu = new stdClass;
$layout_info->default_menu = 'main_menu';
$layout_info->menu->main_menu = new stdClass;
$layout_info->menu->main_menu->name = 'main_menu';
$layout_info->menu->main_menu->title = 'Top menu';
$layout_info->menu->main_menu->maxdepth = '3';
$layout_info->menu->main_menu->menu_srl = $vars->main_menu;
$layout_info->menu->main_menu->xml_file = "./files/cache/menu/".$vars->main_menu.".xml.php";
$layout_info->menu->main_menu->php_file = "./files/cache/menu/".$vars->main_menu.".php";