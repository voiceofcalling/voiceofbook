<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->moduleSrlList)) {
${'moduleSrlList13_argument'} = new ConditionArgument('moduleSrlList', $args->moduleSrlList, 'in');
${'moduleSrlList13_argument'}->createConditionValue();
if(!${'moduleSrlList13_argument'}->isValid()) return ${'moduleSrlList13_argument'}->getErrorMessage();
} else
${'moduleSrlList13_argument'} = NULL;if(${'moduleSrlList13_argument'} !== null) ${'moduleSrlList13_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate14_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate14_argument'}->createConditionValue();
if(!${'regDate14_argument'}->isValid()) return ${'regDate14_argument'}->getErrorMessage();
} else
${'regDate14_argument'} = NULL;if(${'regDate14_argument'} !== null) ${'regDate14_argument'}->setColumnType('date');
if(isset($args->statusList)) {
${'statusList15_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList15_argument'}->createConditionValue();
if(!${'statusList15_argument'}->isValid()) return ${'statusList15_argument'}->getErrorMessage();
} else
${'statusList15_argument'} = NULL;if(${'statusList15_argument'} !== null) ${'statusList15_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$moduleSrlList13_argument,"in")
,new ConditionWithArgument('`regdate`',$regDate14_argument,"like_prefix", 'and')
,new ConditionWithArgument('`status`',$statusList15_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>