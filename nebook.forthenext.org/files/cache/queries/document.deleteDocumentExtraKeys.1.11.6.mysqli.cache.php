<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentExtraKeys");
$query->setAction("delete");
$query->setPriority("");

${'module_srl6_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl6_argument'}->checkFilter('number');
${'module_srl6_argument'}->checkNotNull();
${'module_srl6_argument'}->createConditionValue();
if(!${'module_srl6_argument'}->isValid()) return ${'module_srl6_argument'}->getErrorMessage();
if(${'module_srl6_argument'} !== null) ${'module_srl6_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl7_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl7_argument'}->checkFilter('number');
${'document_srl7_argument'}->createConditionValue();
if(!${'document_srl7_argument'}->isValid()) return ${'document_srl7_argument'}->getErrorMessage();
} else
${'document_srl7_argument'} = NULL;if(isset($args->var_idx)) {
${'var_idx8_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx8_argument'}->checkFilter('number');
${'var_idx8_argument'}->createConditionValue();
if(!${'var_idx8_argument'}->isValid()) return ${'var_idx8_argument'}->getErrorMessage();
} else
${'var_idx8_argument'} = NULL;if(${'var_idx8_argument'} !== null) ${'var_idx8_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl6_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl7_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx8_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>