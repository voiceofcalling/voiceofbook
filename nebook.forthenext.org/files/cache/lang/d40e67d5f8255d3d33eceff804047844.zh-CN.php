<?php
$lang->page='页面';
$lang->none_content='This is empty page.';
$lang->cmd_manage_selected_page='Manage Selected Page';
$lang->about_page='可制作完整页面的模块。利用最新主题列表或其他控件可以生成动态的页面，且通过网页编辑器做出形式多样的页面。连接页面URL同其他模块链接相同。即：mid=模块名称。选择默认选项此页面将变为首页。';
$lang->cmd_page_modify='页面编辑';
$lang->cmd_page_create='Create a Page';
$lang->cmd_page_article_create='Create an Article';
$lang->page_caching_interval='缓冲时间设置';
$lang->about_page_caching_interval='单位为分。缓冲时间间隔内页面将输出临时储存的数据。 显示外链服务器信息或数据时，如消耗资源很大，尽量把缓冲时间设置为大一点的相应值。 0 表示无缓冲。';
$lang->about_mcontent='此页为移动版页面，如您没有对此页面进行布局，它会自动将PC版页面数据重排序显示。';
$lang->page_type='Page Type';
$lang->click_choice='Select';
if(!is_array($lang->page_type_name)){
	$lang->page_type_name = array();
}
$lang->page_type_name['ARTICLE']='Article Page';
$lang->page_type_name['WIDGET']='Widget Page';
$lang->page_type_name['OUTSIDE']='External Page';
$lang->about_page_type='Select Page Type to build a page. <ol><li>Widget: Create multiple widgets.</li><li>Article: Create articles with titles, contents and tags for posting page. </li><li>External Page: Use external HTML or PHP files in XE.</li></ol>';
$lang->opage_path='Location of External Document';
$lang->about_opage='This module enables to use external html or php files in XE. It allows absolute or relative path, and if the url starts with \'http://\' , it can display the external page of the server.';
$lang->about_opage_path='Please enter the location of external document. Both absolute path such as \'/path1/path2/sample.php\' or relative path such as \'../path2/sample.php\' can be used. If you input the path like \'http://url/sample.php\', the result will be received and then displayed. This is current XE\'s absolute path. ';
$lang->opage_mobile_path='Location of External Document for Mobile View';
$lang->about_opage_mobile_path='Please enter the location of external document for mobile view. If not inputted, it uses the external document specified above. Both absolute path such as \'/path1/path2/sample.php\' or relative path such as \'../path2/sample.php\' can be used. If you input the path like \'http://url/sample.php\', the result will be received and then displayed. This is current XE\'s absolute path. ';
$lang->page_management='Manage of page';
$lang->page_delete_warning='If you delete a page, the files of the page will be removed also.';
$lang->msg_not_selected_page='선택한 페이지가 없습니다.';
