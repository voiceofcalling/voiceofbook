<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status16_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status16_argument'}->createConditionValue();
if(!${'status16_argument'}->isValid()) return ${'status16_argument'}->getErrorMessage();
} else
${'status16_argument'} = NULL;if(${'status16_argument'} !== null) ${'status16_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl17_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl17_argument'}->checkFilter('number');
${'module_srl17_argument'}->createConditionValue();
if(!${'module_srl17_argument'}->isValid()) return ${'module_srl17_argument'}->getErrorMessage();
} else
${'module_srl17_argument'} = NULL;if(${'module_srl17_argument'} !== null) ${'module_srl17_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl18_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl18_argument'}->checkFilter('number');
${'document_srl18_argument'}->createConditionValue();
if(!${'document_srl18_argument'}->isValid()) return ${'document_srl18_argument'}->getErrorMessage();
} else
${'document_srl18_argument'} = NULL;if(${'document_srl18_argument'} !== null) ${'document_srl18_argument'}->setColumnType('number');

${'list_count20_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count20_argument'}->ensureDefaultValue('20');
if(!${'list_count20_argument'}->isValid()) return ${'list_count20_argument'}->getErrorMessage();

${'sort_index19_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index19_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index19_argument'}->isValid()) return ${'sort_index19_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status16_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl17_argument,"in", 'and')
,new ConditionWithArgument('`document_srl`',$document_srl18_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index19_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count20_argument'}));
return $query; ?>