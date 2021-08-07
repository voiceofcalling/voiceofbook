<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateVotedCount");
$query->setAction("update");
$query->setPriority("");

${'voted_count4_argument'} = new Argument('voted_count', $args->{'voted_count'});
${'voted_count4_argument'}->checkNotNull();
if(!${'voted_count4_argument'}->isValid()) return ${'voted_count4_argument'}->getErrorMessage();
if(${'voted_count4_argument'} !== null) ${'voted_count4_argument'}->setColumnType('number');

${'document_srl5_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl5_argument'}->checkFilter('number');
${'document_srl5_argument'}->checkNotNull();
${'document_srl5_argument'}->createConditionValue();
if(!${'document_srl5_argument'}->isValid()) return ${'document_srl5_argument'}->getErrorMessage();
if(${'document_srl5_argument'} !== null) ${'document_srl5_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`voted_count`', ${'voted_count4_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl5_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>