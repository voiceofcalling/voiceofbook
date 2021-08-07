<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentDeclaredLog");
$query->setAction("delete");
$query->setPriority("");

${'document_srl15_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'in');
${'document_srl15_argument'}->checkFilter('number');
${'document_srl15_argument'}->checkNotNull();
${'document_srl15_argument'}->createConditionValue();
if(!${'document_srl15_argument'}->isValid()) return ${'document_srl15_argument'}->getErrorMessage();
if(${'document_srl15_argument'} !== null) ${'document_srl15_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_document_declared_log`', '`document_declared_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl15_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>