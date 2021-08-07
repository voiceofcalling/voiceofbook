<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = 0;
$layout_info->layout = 'stellar';
$layout_info->type = NULL;
$layout_info->path = './layouts/stellar/';
$layout_info->title = 'Stellar';
$layout_info->description = 'Designed by HTML5UP.net / Converted by Wincomi';
$layout_info->version = '1.0.2';
$layout_info->date = '20171109';
$layout_info->homepage = NULL;
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = NULL;
$layout_info->license_link = NULL;
$layout_info->layout_type = 'P';
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = '윈컴이';
$layout_info->author[0]->email_address = 'admin@wincomi.com';
$layout_info->author[0]->homepage = 'https://www.wincomi.com/';
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->header_logo = new stdClass;
$layout_info->extra_var->header_logo->group = NULL;
$layout_info->extra_var->header_logo->title = '헤더 로고';
$layout_info->extra_var->header_logo->type = 'image';
$layout_info->extra_var->header_logo->value = $vars->header_logo;
$layout_info->extra_var->header_logo->description = '(선택) 헤더에 표시될 로고를 업로드해주세요';
$layout_info->extra_var->header_title = new stdClass;
$layout_info->extra_var->header_title->group = NULL;
$layout_info->extra_var->header_title->title = '헤더 제목';
$layout_info->extra_var->header_title->type = 'text';
$layout_info->extra_var->header_title->value = $vars->header_title;
$layout_info->extra_var->header_title->description = '헤더에 표시될 홈페이지 제목을 입력하세요.';
$layout_info->extra_var->header_desc = new stdClass;
$layout_info->extra_var->header_desc->group = NULL;
$layout_info->extra_var->header_desc->title = '헤더 설명';
$layout_info->extra_var->header_desc->type = 'textarea';
$layout_info->extra_var->header_desc->value = $vars->header_desc;
$layout_info->extra_var->header_desc->description = '헤더에 표시될 설명을 입력하세요.';
$layout_info->extra_var->copyright = new stdClass;
$layout_info->extra_var->copyright->group = NULL;
$layout_info->extra_var->copyright->title = '저작권';
$layout_info->extra_var->copyright->type = 'textarea';
$layout_info->extra_var->copyright->value = $vars->copyright;
$layout_info->extra_var->copyright->description = '하단에 표시될 저작권을 입력하세요.';
$layout_info->extra_var->nav_login = new stdClass;
$layout_info->extra_var->nav_login->group = NULL;
$layout_info->extra_var->nav_login->title = '로그인 링크';
$layout_info->extra_var->nav_login->type = 'select';
$layout_info->extra_var->nav_login->value = $vars->nav_login;
$layout_info->extra_var->nav_login->description = '로그인 링크를 표시합니다. 사용하지 않을 경우 메뉴가 중앙에 정렬됩니다.';
$layout_info->extra_var->nav_login->options = array();
$layout_info->extra_var->nav_login->options['Y'] = new stdClass;
$layout_info->extra_var->nav_login->options['Y']->val = '네, 메뉴에 표시합니다.';
$layout_info->extra_var->nav_login->options['Y2'] = new stdClass;
$layout_info->extra_var->nav_login->options['Y2']->val = '네, 푸터에 표시합니다.';
$layout_info->extra_var->nav_login->options['N'] = new stdClass;
$layout_info->extra_var->nav_login->options['N']->val = '아니오';
$layout_info->extra_var->background_color = new stdClass;
$layout_info->extra_var->background_color->group = NULL;
$layout_info->extra_var->background_color->title = '배경색';
$layout_info->extra_var->background_color->type = 'select';
$layout_info->extra_var->background_color->value = $vars->background_color;
$layout_info->extra_var->background_color->description = NULL;
$layout_info->extra_var->background_color->options = array();
$layout_info->extra_var->background_color->options['default'] = new stdClass;
$layout_info->extra_var->background_color->options['default']->val = '기본 (그라데이션)';
$layout_info->extra_var->background_color->options['#333'] = new stdClass;
$layout_info->extra_var->background_color->options['#333']->val = '검정';
$layout_info->extra_var->background_color->options['#111'] = new stdClass;
$layout_info->extra_var->background_color->options['#111']->val = '진한 검정';
$layout_info->extra_var->background_color->options['#337ab7'] = new stdClass;
$layout_info->extra_var->background_color->options['#337ab7']->val = '파란색';
$layout_info->extra_var->background_color->options['#269abc'] = new stdClass;
$layout_info->extra_var->background_color->options['#269abc']->val = '하늘색';
$layout_info->extra_var->background_color->options['#5cb85c'] = new stdClass;
$layout_info->extra_var->background_color->options['#5cb85c']->val = '초록색';
$layout_info->extra_var_count = 6;
$layout_info->menu_count = 1;
$layout_info->menu = new stdClass;
$layout_info->default_menu = 'global_menu';
$layout_info->menu->global_menu = new stdClass;
$layout_info->menu->global_menu->name = 'global_menu';
$layout_info->menu->global_menu->title = '메인 메뉴';
$layout_info->menu->global_menu->maxdepth = '1';
$layout_info->menu->global_menu->menu_srl = $vars->global_menu;
$layout_info->menu->global_menu->xml_file = "./files/cache/menu/".$vars->global_menu.".xml.php";
$layout_info->menu->global_menu->php_file = "./files/cache/menu/".$vars->global_menu.".php";