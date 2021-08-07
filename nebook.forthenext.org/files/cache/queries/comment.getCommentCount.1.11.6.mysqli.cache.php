<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCommentCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status35_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status35_argument'}->createConditionValue();
if(!${'status35_argument'}->isValid()) return ${'status35_argument'}->getErrorMessage();
} else
${'status35_argument'} = NULL;if(${'status35_argument'} !== null) ${'status35_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl36_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl36_argument'}->checkFilter('number');
${'document_srl36_argument'}->createConditionValue();
if(!${'document_srl36_argument'}->isValid()) return ${'document_srl36_argument'}->getErrorMessage();
} else
${'document_srl36_argument'} = NULL;if(${'document_srl36_argument'} !== null) ${'document_srl36_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl37_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl37_argument'}->checkFilter('number');
${'module_srl37_argument'}->createConditionValue();
if(!${'module_srl37_argument'}->isValid()) return ${'module_srl37_argument'}->getErrorMessage();
} else
${'module_srl37_argument'} = NULL;if(${'module_srl37_argument'} !== null) ${'module_srl37_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate38_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate38_argument'}->createConditionValue();
if(!${'regDate38_argument'}->isValid()) return ${'regDate38_argument'}->getErrorMessage();
} else
${'regDate38_argument'} = NULL;if(${'regDate38_argument'} !== null) ${'regDate38_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status35_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl36_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl37_argument,"in", 'and')
,new ConditionWithArgument('`regdate`',$regDate38_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>