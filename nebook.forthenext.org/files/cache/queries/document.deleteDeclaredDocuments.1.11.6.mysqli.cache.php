<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDeclaredDocuments");
$query->setAction("delete");
$query->setPriority("");

${'document_srl14_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'in');
${'document_srl14_argument'}->checkFilter('number');
${'document_srl14_argument'}->checkNotNull();
${'document_srl14_argument'}->createConditionValue();
if(!${'document_srl14_argument'}->isValid()) return ${'document_srl14_argument'}->getErrorMessage();
if(${'document_srl14_argument'} !== null) ${'document_srl14_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_document_declared`', '`document_declared`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl14_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>