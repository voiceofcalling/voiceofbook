<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertComment");
$query->setAction("insert");
$query->setPriority("");

${'comment_srl13_argument'} = new Argument('comment_srl', $args->{'comment_srl'});
${'comment_srl13_argument'}->checkNotNull();
if(!${'comment_srl13_argument'}->isValid()) return ${'comment_srl13_argument'}->getErrorMessage();
if(${'comment_srl13_argument'} !== null) ${'comment_srl13_argument'}->setColumnType('number');

${'module_srl14_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl14_argument'}->checkFilter('number');
${'module_srl14_argument'}->checkNotNull();
if(!${'module_srl14_argument'}->isValid()) return ${'module_srl14_argument'}->getErrorMessage();
if(${'module_srl14_argument'} !== null) ${'module_srl14_argument'}->setColumnType('number');

${'parent_srl15_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl15_argument'}->checkFilter('number');
${'parent_srl15_argument'}->ensureDefaultValue('0');
if(!${'parent_srl15_argument'}->isValid()) return ${'parent_srl15_argument'}->getErrorMessage();
if(${'parent_srl15_argument'} !== null) ${'parent_srl15_argument'}->setColumnType('number');

${'document_srl16_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl16_argument'}->checkFilter('number');
${'document_srl16_argument'}->checkNotNull();
if(!${'document_srl16_argument'}->isValid()) return ${'document_srl16_argument'}->getErrorMessage();
if(${'document_srl16_argument'} !== null) ${'document_srl16_argument'}->setColumnType('number');

${'is_secret17_argument'} = new Argument('is_secret', $args->{'is_secret'});
${'is_secret17_argument'}->ensureDefaultValue('N');
if(!${'is_secret17_argument'}->isValid()) return ${'is_secret17_argument'}->getErrorMessage();
if(${'is_secret17_argument'} !== null) ${'is_secret17_argument'}->setColumnType('char');

${'notify_message18_argument'} = new Argument('notify_message', $args->{'notify_message'});
${'notify_message18_argument'}->ensureDefaultValue('N');
if(!${'notify_message18_argument'}->isValid()) return ${'notify_message18_argument'}->getErrorMessage();
if(${'notify_message18_argument'} !== null) ${'notify_message18_argument'}->setColumnType('char');

${'content19_argument'} = new Argument('content', $args->{'content'});
${'content19_argument'}->checkNotNull();
if(!${'content19_argument'}->isValid()) return ${'content19_argument'}->getErrorMessage();
if(${'content19_argument'} !== null) ${'content19_argument'}->setColumnType('bigtext');

${'voted_count20_argument'} = new Argument('voted_count', $args->{'voted_count'});
${'voted_count20_argument'}->ensureDefaultValue('0');
if(!${'voted_count20_argument'}->isValid()) return ${'voted_count20_argument'}->getErrorMessage();
if(${'voted_count20_argument'} !== null) ${'voted_count20_argument'}->setColumnType('number');

${'blamed_count21_argument'} = new Argument('blamed_count', $args->{'blamed_count'});
${'blamed_count21_argument'}->ensureDefaultValue('0');
if(!${'blamed_count21_argument'}->isValid()) return ${'blamed_count21_argument'}->getErrorMessage();
if(${'blamed_count21_argument'} !== null) ${'blamed_count21_argument'}->setColumnType('number');
if(isset($args->password)) {
${'password22_argument'} = new Argument('password', $args->{'password'});
if(!${'password22_argument'}->isValid()) return ${'password22_argument'}->getErrorMessage();
} else
${'password22_argument'} = NULL;if(${'password22_argument'} !== null) ${'password22_argument'}->setColumnType('varchar');

${'nick_name23_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name23_argument'}->checkNotNull();
if(!${'nick_name23_argument'}->isValid()) return ${'nick_name23_argument'}->getErrorMessage();
if(${'nick_name23_argument'} !== null) ${'nick_name23_argument'}->setColumnType('varchar');

${'user_id24_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id24_argument'}->ensureDefaultValue('');
if(!${'user_id24_argument'}->isValid()) return ${'user_id24_argument'}->getErrorMessage();
if(${'user_id24_argument'} !== null) ${'user_id24_argument'}->setColumnType('varchar');

${'user_name25_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name25_argument'}->ensureDefaultValue('');
if(!${'user_name25_argument'}->isValid()) return ${'user_name25_argument'}->getErrorMessage();
if(${'user_name25_argument'} !== null) ${'user_name25_argument'}->setColumnType('varchar');

${'member_srl26_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl26_argument'}->checkFilter('number');
${'member_srl26_argument'}->ensureDefaultValue('0');
if(!${'member_srl26_argument'}->isValid()) return ${'member_srl26_argument'}->getErrorMessage();
if(${'member_srl26_argument'} !== null) ${'member_srl26_argument'}->setColumnType('number');

${'email_address27_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address27_argument'}->checkFilter('email');
${'email_address27_argument'}->ensureDefaultValue('');
if(!${'email_address27_argument'}->isValid()) return ${'email_address27_argument'}->getErrorMessage();
if(${'email_address27_argument'} !== null) ${'email_address27_argument'}->setColumnType('varchar');

${'homepage28_argument'} = new Argument('homepage', $args->{'homepage'});
${'homepage28_argument'}->checkFilter('homepage');
${'homepage28_argument'}->ensureDefaultValue('');
if(!${'homepage28_argument'}->isValid()) return ${'homepage28_argument'}->getErrorMessage();
if(${'homepage28_argument'} !== null) ${'homepage28_argument'}->setColumnType('varchar');

${'uploaded_count29_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count29_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count29_argument'}->isValid()) return ${'uploaded_count29_argument'}->getErrorMessage();
if(${'uploaded_count29_argument'} !== null) ${'uploaded_count29_argument'}->setColumnType('number');

${'regdate30_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate30_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate30_argument'}->isValid()) return ${'regdate30_argument'}->getErrorMessage();
if(${'regdate30_argument'} !== null) ${'regdate30_argument'}->setColumnType('date');

${'last_update31_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update31_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update31_argument'}->isValid()) return ${'last_update31_argument'}->getErrorMessage();
if(${'last_update31_argument'} !== null) ${'last_update31_argument'}->setColumnType('date');

${'ipaddress32_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress32_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress32_argument'}->isValid()) return ${'ipaddress32_argument'}->getErrorMessage();
if(${'ipaddress32_argument'} !== null) ${'ipaddress32_argument'}->setColumnType('varchar');

${'list_order33_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order33_argument'}->ensureDefaultValue('0');
if(!${'list_order33_argument'}->isValid()) return ${'list_order33_argument'}->getErrorMessage();
if(${'list_order33_argument'} !== null) ${'list_order33_argument'}->setColumnType('number');

${'status34_argument'} = new Argument('status', $args->{'status'});
${'status34_argument'}->checkFilter('number');
${'status34_argument'}->checkNotNull();
if(!${'status34_argument'}->isValid()) return ${'status34_argument'}->getErrorMessage();
if(${'status34_argument'} !== null) ${'status34_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`comment_srl`', ${'comment_srl13_argument'})
,new InsertExpression('`module_srl`', ${'module_srl14_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl15_argument'})
,new InsertExpression('`document_srl`', ${'document_srl16_argument'})
,new InsertExpression('`is_secret`', ${'is_secret17_argument'})
,new InsertExpression('`notify_message`', ${'notify_message18_argument'})
,new InsertExpression('`content`', ${'content19_argument'})
,new InsertExpression('`voted_count`', ${'voted_count20_argument'})
,new InsertExpression('`blamed_count`', ${'blamed_count21_argument'})
,new InsertExpression('`password`', ${'password22_argument'})
,new InsertExpression('`nick_name`', ${'nick_name23_argument'})
,new InsertExpression('`user_id`', ${'user_id24_argument'})
,new InsertExpression('`user_name`', ${'user_name25_argument'})
,new InsertExpression('`member_srl`', ${'member_srl26_argument'})
,new InsertExpression('`email_address`', ${'email_address27_argument'})
,new InsertExpression('`homepage`', ${'homepage28_argument'})
,new InsertExpression('`uploaded_count`', ${'uploaded_count29_argument'})
,new InsertExpression('`regdate`', ${'regdate30_argument'})
,new InsertExpression('`last_update`', ${'last_update31_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress32_argument'})
,new InsertExpression('`list_order`', ${'list_order33_argument'})
,new InsertExpression('`status`', ${'status34_argument'})
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>