<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCommentList");
$query->setAction("insert");
$query->setPriority("");

${'comment_srl6_argument'} = new Argument('comment_srl', $args->{'comment_srl'});
${'comment_srl6_argument'}->checkNotNull();
if(!${'comment_srl6_argument'}->isValid()) return ${'comment_srl6_argument'}->getErrorMessage();
if(${'comment_srl6_argument'} !== null) ${'comment_srl6_argument'}->setColumnType('number');

${'document_srl7_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl7_argument'}->checkFilter('number');
${'document_srl7_argument'}->checkNotNull();
if(!${'document_srl7_argument'}->isValid()) return ${'document_srl7_argument'}->getErrorMessage();
if(${'document_srl7_argument'} !== null) ${'document_srl7_argument'}->setColumnType('number');
if(isset($args->head)) {
${'head8_argument'} = new Argument('head', $args->{'head'});
${'head8_argument'}->checkFilter('number');
if(!${'head8_argument'}->isValid()) return ${'head8_argument'}->getErrorMessage();
} else
${'head8_argument'} = NULL;if(${'head8_argument'} !== null) ${'head8_argument'}->setColumnType('number');
if(isset($args->arrange)) {
${'arrange9_argument'} = new Argument('arrange', $args->{'arrange'});
${'arrange9_argument'}->checkFilter('number');
if(!${'arrange9_argument'}->isValid()) return ${'arrange9_argument'}->getErrorMessage();
} else
${'arrange9_argument'} = NULL;if(${'arrange9_argument'} !== null) ${'arrange9_argument'}->setColumnType('number');

${'module_srl10_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl10_argument'}->checkFilter('number');
${'module_srl10_argument'}->checkNotNull();
if(!${'module_srl10_argument'}->isValid()) return ${'module_srl10_argument'}->getErrorMessage();
if(${'module_srl10_argument'} !== null) ${'module_srl10_argument'}->setColumnType('number');
if(isset($args->regdate)) {
${'regdate11_argument'} = new Argument('regdate', $args->{'regdate'});
if(!${'regdate11_argument'}->isValid()) return ${'regdate11_argument'}->getErrorMessage();
} else
${'regdate11_argument'} = NULL;if(${'regdate11_argument'} !== null) ${'regdate11_argument'}->setColumnType('date');
if(isset($args->depth)) {
${'depth12_argument'} = new Argument('depth', $args->{'depth'});
${'depth12_argument'}->checkFilter('number');
if(!${'depth12_argument'}->isValid()) return ${'depth12_argument'}->getErrorMessage();
} else
${'depth12_argument'} = NULL;if(${'depth12_argument'} !== null) ${'depth12_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`comment_srl`', ${'comment_srl6_argument'})
,new InsertExpression('`document_srl`', ${'document_srl7_argument'})
,new InsertExpression('`head`', ${'head8_argument'})
,new InsertExpression('`arrange`', ${'arrange9_argument'})
,new InsertExpression('`module_srl`', ${'module_srl10_argument'})
,new InsertExpression('`regdate`', ${'regdate11_argument'})
,new InsertExpression('`depth`', ${'depth12_argument'})
));
$query->setTables(array(
new Table('`xe_comments_list`', '`comments_list`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>