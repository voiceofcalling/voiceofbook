<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = 0;
$layout_info->layout = 'user_layout';
$layout_info->type = NULL;
$layout_info->path = './layouts/user_layout/';
$layout_info->title = 'Test Layout';
$layout_info->description = 'Is not designed for testing the layout. When you create a new skin, we recommend you copy the layout.';
$layout_info->version = '1.7';
$layout_info->date = '20131127';
$layout_info->homepage = NULL;
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = NULL;
$layout_info->license_link = NULL;
$layout_info->layout_type = 'P';
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = 'Maker Name';
$layout_info->author[0]->email_address = 'user@user.com';
$layout_info->author[0]->homepage = 'http://user-define.com/';
$layout_info->extra_var = new stdClass;
$layout_info->extra_var_count = 0;
$layout_info->menu_count = 1;
$layout_info->menu = new stdClass;
$layout_info->default_menu = 'global_menu';
$layout_info->menu->global_menu = new stdClass;
$layout_info->menu->global_menu->name = 'global_menu';
$layout_info->menu->global_menu->title = 'Global Menu';
$layout_info->menu->global_menu->maxdepth = '3';
$layout_info->menu->global_menu->menu_srl = $vars->global_menu;
$layout_info->menu->global_menu->xml_file = "./files/cache/menu/".$vars->global_menu.".xml.php";
$layout_info->menu->global_menu->php_file = "./files/cache/menu/".$vars->global_menu.".php";