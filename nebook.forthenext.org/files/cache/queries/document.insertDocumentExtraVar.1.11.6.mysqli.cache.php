<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertDocumentExtraVar");
$query->setAction("insert");
$query->setPriority("");

${'module_srl4_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl4_argument'}->checkFilter('number');
${'module_srl4_argument'}->checkNotNull();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');

${'document_srl5_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl5_argument'}->checkFilter('number');
${'document_srl5_argument'}->checkNotNull();
if(!${'document_srl5_argument'}->isValid()) return ${'document_srl5_argument'}->getErrorMessage();
if(${'document_srl5_argument'} !== null) ${'document_srl5_argument'}->setColumnType('number');

${'var_idx6_argument'} = new Argument('var_idx', $args->{'var_idx'});
${'var_idx6_argument'}->checkFilter('number');
${'var_idx6_argument'}->checkNotNull();
if(!${'var_idx6_argument'}->isValid()) return ${'var_idx6_argument'}->getErrorMessage();
if(${'var_idx6_argument'} !== null) ${'var_idx6_argument'}->setColumnType('number');

${'value7_argument'} = new Argument('value', $args->{'value'});
${'value7_argument'}->checkNotNull();
if(!${'value7_argument'}->isValid()) return ${'value7_argument'}->getErrorMessage();
if(${'value7_argument'} !== null) ${'value7_argument'}->setColumnType('bigtext');
if(isset($args->lang_code)) {
${'lang_code8_argument'} = new Argument('lang_code', $args->{'lang_code'});
if(!${'lang_code8_argument'}->isValid()) return ${'lang_code8_argument'}->getErrorMessage();
} else
${'lang_code8_argument'} = NULL;if(${'lang_code8_argument'} !== null) ${'lang_code8_argument'}->setColumnType('varchar');

${'eid9_argument'} = new Argument('eid', $args->{'eid'});
${'eid9_argument'}->checkNotNull();
if(!${'eid9_argument'}->isValid()) return ${'eid9_argument'}->getErrorMessage();
if(${'eid9_argument'} !== null) ${'eid9_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl4_argument'})
,new InsertExpression('`document_srl`', ${'document_srl5_argument'})
,new InsertExpression('`var_idx`', ${'var_idx6_argument'})
,new InsertExpression('`value`', ${'value7_argument'})
,new InsertExpression('`lang_code`', ${'lang_code8_argument'})
,new InsertExpression('`eid`', ${'eid9_argument'})
));
$query->setTables(array(
new Table('`xe_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>