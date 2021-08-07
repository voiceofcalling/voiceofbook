<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsExtraKey");
$query->setAction("select");
$query->setPriority("");

${'module_srl2_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl2_argument'}->checkFilter('number');
${'module_srl2_argument'}->checkNotNull();
${'module_srl2_argument'}->createConditionValue();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx3_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'notequal');
${'var_idx3_argument'}->checkFilter('number');
${'var_idx3_argument'}->createConditionValue();
if(!${'var_idx3_argument'}->isValid()) return ${'var_idx3_argument'}->getErrorMessage();
} else
${'var_idx3_argument'} = NULL;if(${'var_idx3_argument'} !== null) ${'var_idx3_argument'}->setColumnType('number');

${'eid4_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid4_argument'}->checkNotNull();
${'eid4_argument'}->createConditionValue();
if(!${'eid4_argument'}->isValid()) return ${'eid4_argument'}->getErrorMessage();
if(${'eid4_argument'} !== null) ${'eid4_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl2_argument,"equal", 'where')
,new ConditionWithArgument('`var_idx`',$var_idx3_argument,"notequal", 'and')
,new ConditionWithArgument('`eid`',$eid4_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>