<?php
$lang->feed='RSS发布';
$lang->total_feed='整站RSS';
$lang->rss_disable='关闭RSS';
$lang->feed_copyright='版权';
$lang->feed_document_count='每页主题数';
$lang->feed_image='RSS图片';
$lang->rss_type='RSS Feed显示样式';
$lang->open_rss='RSS公开';
if(!is_array($lang->open_rss_types)){
	$lang->open_rss_types = array();
}
$lang->open_rss_types['Y']='公开全文';
$lang->open_rss_types['H']='公开摘要';
$lang->open_rss_types['N']='不公开';
$lang->open_feed_to_total='包含到整站RSS';
$lang->about_rss_disable='选此项不显示RSS。';
$lang->about_rss_type='可以指定要显示的RSS形式。';
$lang->about_open_rss='可以指定RSS公开程度,RSS公开不受查看内容权限的限制。';
$lang->about_feed_description='可以输入简单说明,留空输出该模块的说明。';
$lang->about_feed_copyright='RSS Feed版权信息。留空版权信息参照整站RSS的版权信息。';
$lang->about_feed_document_count='每页要显示的主题数(默认: 15)。';
$lang->msg_rss_is_disabled='RSS功能处于锁定状态。';
$lang->msg_rss_invalid_image_format='上传的文件格式错误！\n只允许上传JPEG, GIF, PNG图片文件。';
