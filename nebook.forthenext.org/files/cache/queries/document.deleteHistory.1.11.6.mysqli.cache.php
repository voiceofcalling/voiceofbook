<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteHistory");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->history_srl)) {
${'history_srl5_argument'} = new ConditionArgument('history_srl', $args->history_srl, 'equal');
${'history_srl5_argument'}->checkFilter('number');
${'history_srl5_argument'}->createConditionValue();
if(!${'history_srl5_argument'}->isValid()) return ${'history_srl5_argument'}->getErrorMessage();
} else
${'history_srl5_argument'} = NULL;if(${'history_srl5_argument'} !== null) ${'history_srl5_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl6_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl6_argument'}->checkFilter('number');
${'document_srl6_argument'}->createConditionValue();
if(!${'document_srl6_argument'}->isValid()) return ${'document_srl6_argument'}->getErrorMessage();
} else
${'document_srl6_argument'} = NULL;if(${'document_srl6_argument'} !== null) ${'document_srl6_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl7_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl7_argument'}->checkFilter('number');
${'module_srl7_argument'}->createConditionValue();
if(!${'module_srl7_argument'}->isValid()) return ${'module_srl7_argument'}->getErrorMessage();
} else
${'module_srl7_argument'} = NULL;if(${'module_srl7_argument'} !== null) ${'module_srl7_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_document_histories`', '`document_histories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`history_srl`',$history_srl5_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl6_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl7_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>