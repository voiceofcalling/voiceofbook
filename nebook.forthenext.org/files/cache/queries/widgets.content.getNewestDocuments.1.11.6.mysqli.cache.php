<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestDocuments");
$query->setAction("select");
$query->setPriority("");

${'module_srl4_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl4_argument'}->checkFilter('number');
${'module_srl4_argument'}->checkNotNull();
${'module_srl4_argument'}->createConditionValue();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl5_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl5_argument'}->createConditionValue();
if(!${'category_srl5_argument'}->isValid()) return ${'category_srl5_argument'}->getErrorMessage();
} else
${'category_srl5_argument'} = NULL;if(${'category_srl5_argument'} !== null) ${'category_srl5_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList6_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList6_argument'}->createConditionValue();
if(!${'statusList6_argument'}->isValid()) return ${'statusList6_argument'}->getErrorMessage();
} else
${'statusList6_argument'} = NULL;if(${'statusList6_argument'} !== null) ${'statusList6_argument'}->setColumnType('varchar');

${'list_count9_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count9_argument'}->ensureDefaultValue('20');
if(!${'list_count9_argument'}->isValid()) return ${'list_count9_argument'}->getErrorMessage();

${'sort_index7_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index7_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index7_argument'}->isValid()) return ${'sort_index7_argument'}->getErrorMessage();

${'order_type8_argument'} = new SortArgument('order_type8', $args->order_type);
${'order_type8_argument'}->ensureDefaultValue('asc');
if(!${'order_type8_argument'}->isValid()) return ${'order_type8_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`module_srl`',$module_srl4_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`category_srl`',$category_srl5_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$statusList6_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index7_argument'}, $order_type8_argument)
));
$query->setLimit(new Limit(${'list_count9_argument'}));
return $query; ?>