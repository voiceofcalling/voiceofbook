<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertDocumentExtraKeys");
$query->setAction("insert");
$query->setPriority("");

${'module_srl5_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl5_argument'}->checkFilter('number');
${'module_srl5_argument'}->checkNotNull();
if(!${'module_srl5_argument'}->isValid()) return ${'module_srl5_argument'}->getErrorMessage();
if(${'module_srl5_argument'} !== null) ${'module_srl5_argument'}->setColumnType('number');

${'var_idx6_argument'} = new Argument('var_idx', $args->{'var_idx'});
${'var_idx6_argument'}->checkFilter('number');
${'var_idx6_argument'}->checkNotNull();
if(!${'var_idx6_argument'}->isValid()) return ${'var_idx6_argument'}->getErrorMessage();
if(${'var_idx6_argument'} !== null) ${'var_idx6_argument'}->setColumnType('number');

${'var_name7_argument'} = new Argument('var_name', $args->{'var_name'});
${'var_name7_argument'}->checkNotNull();
if(!${'var_name7_argument'}->isValid()) return ${'var_name7_argument'}->getErrorMessage();
if(${'var_name7_argument'} !== null) ${'var_name7_argument'}->setColumnType('varchar');

${'var_type8_argument'} = new Argument('var_type', $args->{'var_type'});
${'var_type8_argument'}->checkNotNull();
if(!${'var_type8_argument'}->isValid()) return ${'var_type8_argument'}->getErrorMessage();
if(${'var_type8_argument'} !== null) ${'var_type8_argument'}->setColumnType('varchar');

${'var_is_required9_argument'} = new Argument('var_is_required', $args->{'var_is_required'});
${'var_is_required9_argument'}->ensureDefaultValue('N');
${'var_is_required9_argument'}->checkNotNull();
if(!${'var_is_required9_argument'}->isValid()) return ${'var_is_required9_argument'}->getErrorMessage();
if(${'var_is_required9_argument'} !== null) ${'var_is_required9_argument'}->setColumnType('char');

${'var_search10_argument'} = new Argument('var_search', $args->{'var_search'});
${'var_search10_argument'}->ensureDefaultValue('N');
${'var_search10_argument'}->checkNotNull();
if(!${'var_search10_argument'}->isValid()) return ${'var_search10_argument'}->getErrorMessage();
if(${'var_search10_argument'} !== null) ${'var_search10_argument'}->setColumnType('char');
if(isset($args->var_default)) {
${'var_default11_argument'} = new Argument('var_default', $args->{'var_default'});
if(!${'var_default11_argument'}->isValid()) return ${'var_default11_argument'}->getErrorMessage();
} else
${'var_default11_argument'} = NULL;if(${'var_default11_argument'} !== null) ${'var_default11_argument'}->setColumnType('text');
if(isset($args->var_desc)) {
${'var_desc12_argument'} = new Argument('var_desc', $args->{'var_desc'});
if(!${'var_desc12_argument'}->isValid()) return ${'var_desc12_argument'}->getErrorMessage();
} else
${'var_desc12_argument'} = NULL;if(${'var_desc12_argument'} !== null) ${'var_desc12_argument'}->setColumnType('text');

${'eid13_argument'} = new Argument('eid', $args->{'eid'});
${'eid13_argument'}->checkNotNull();
if(!${'eid13_argument'}->isValid()) return ${'eid13_argument'}->getErrorMessage();
if(${'eid13_argument'} !== null) ${'eid13_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl5_argument'})
,new InsertExpression('`var_idx`', ${'var_idx6_argument'})
,new InsertExpression('`var_name`', ${'var_name7_argument'})
,new InsertExpression('`var_type`', ${'var_type8_argument'})
,new InsertExpression('`var_is_required`', ${'var_is_required9_argument'})
,new InsertExpression('`var_search`', ${'var_search10_argument'})
,new InsertExpression('`var_default`', ${'var_default11_argument'})
,new InsertExpression('`var_desc`', ${'var_desc12_argument'})
,new InsertExpression('`eid`', ${'eid13_argument'})
));
$query->setTables(array(
new Table('`xe_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>