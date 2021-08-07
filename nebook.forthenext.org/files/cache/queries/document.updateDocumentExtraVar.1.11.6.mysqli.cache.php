<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDocumentExtraVar");
$query->setAction("update");
$query->setPriority("");
if(isset($args->value)) {
${'value10_argument'} = new Argument('value', $args->{'value'});
if(!${'value10_argument'}->isValid()) return ${'value10_argument'}->getErrorMessage();
} else
${'value10_argument'} = NULL;if(${'value10_argument'} !== null) ${'value10_argument'}->setColumnType('bigtext');
if(isset($args->lang_code)) {
${'lang_code11_argument'} = new Argument('lang_code', $args->{'lang_code'});
if(!${'lang_code11_argument'}->isValid()) return ${'lang_code11_argument'}->getErrorMessage();
} else
${'lang_code11_argument'} = NULL;if(${'lang_code11_argument'} !== null) ${'lang_code11_argument'}->setColumnType('varchar');
if(isset($args->eid)) {
${'eid12_argument'} = new Argument('eid', $args->{'eid'});
if(!${'eid12_argument'}->isValid()) return ${'eid12_argument'}->getErrorMessage();
} else
${'eid12_argument'} = NULL;if(${'eid12_argument'} !== null) ${'eid12_argument'}->setColumnType('varchar');

${'module_srl13_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl13_argument'}->checkFilter('number');
${'module_srl13_argument'}->checkNotNull();
${'module_srl13_argument'}->createConditionValue();
if(!${'module_srl13_argument'}->isValid()) return ${'module_srl13_argument'}->getErrorMessage();
if(${'module_srl13_argument'} !== null) ${'module_srl13_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl14_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl14_argument'}->checkFilter('number');
${'document_srl14_argument'}->createConditionValue();
if(!${'document_srl14_argument'}->isValid()) return ${'document_srl14_argument'}->getErrorMessage();
} else
${'document_srl14_argument'} = NULL;if(${'document_srl14_argument'} !== null) ${'document_srl14_argument'}->setColumnType('number');

${'var_idx15_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx15_argument'}->checkFilter('number');
${'var_idx15_argument'}->checkNotNull();
${'var_idx15_argument'}->createConditionValue();
if(!${'var_idx15_argument'}->isValid()) return ${'var_idx15_argument'}->getErrorMessage();
if(${'var_idx15_argument'} !== null) ${'var_idx15_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`value`', ${'value10_argument'})
,new UpdateExpression('`lang_code`', ${'lang_code11_argument'})
,new UpdateExpression('`eid`', ${'eid12_argument'})
));
$query->setTables(array(
new Table('`xe_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl13_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl14_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx15_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>