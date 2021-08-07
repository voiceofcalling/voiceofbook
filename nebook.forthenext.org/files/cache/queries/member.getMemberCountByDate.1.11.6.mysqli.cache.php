<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->regDate)) {
${'regDate12_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate12_argument'}->createConditionValue();
if(!${'regDate12_argument'}->isValid()) return ${'regDate12_argument'}->getErrorMessage();
} else
${'regDate12_argument'} = NULL;if(${'regDate12_argument'} !== null) ${'regDate12_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regDate12_argument,"like_prefix")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>