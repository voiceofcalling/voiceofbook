<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDocumentExtraKey");
$query->setAction("update");
$query->setPriority("");

${'var_name1_argument'} = new Argument('var_name', $args->{'var_name'});
${'var_name1_argument'}->checkNotNull();
if(!${'var_name1_argument'}->isValid()) return ${'var_name1_argument'}->getErrorMessage();
if(${'var_name1_argument'} !== null) ${'var_name1_argument'}->setColumnType('varchar');

${'var_type2_argument'} = new Argument('var_type', $args->{'var_type'});
${'var_type2_argument'}->checkNotNull();
if(!${'var_type2_argument'}->isValid()) return ${'var_type2_argument'}->getErrorMessage();
if(${'var_type2_argument'} !== null) ${'var_type2_argument'}->setColumnType('varchar');

${'var_is_required3_argument'} = new Argument('var_is_required', $args->{'var_is_required'});
${'var_is_required3_argument'}->ensureDefaultValue('N');
${'var_is_required3_argument'}->checkNotNull();
if(!${'var_is_required3_argument'}->isValid()) return ${'var_is_required3_argument'}->getErrorMessage();
if(${'var_is_required3_argument'} !== null) ${'var_is_required3_argument'}->setColumnType('char');

${'var_search4_argument'} = new Argument('var_search', $args->{'var_search'});
${'var_search4_argument'}->ensureDefaultValue('N');
${'var_search4_argument'}->checkNotNull();
if(!${'var_search4_argument'}->isValid()) return ${'var_search4_argument'}->getErrorMessage();
if(${'var_search4_argument'} !== null) ${'var_search4_argument'}->setColumnType('char');

${'var_default5_argument'} = new Argument('var_default', $args->{'var_default'});
${'var_default5_argument'}->ensureDefaultValue('');
if(!${'var_default5_argument'}->isValid()) return ${'var_default5_argument'}->getErrorMessage();
if(${'var_default5_argument'} !== null) ${'var_default5_argument'}->setColumnType('text');
if(isset($args->var_desc)) {
${'var_desc6_argument'} = new Argument('var_desc', $args->{'var_desc'});
if(!${'var_desc6_argument'}->isValid()) return ${'var_desc6_argument'}->getErrorMessage();
} else
${'var_desc6_argument'} = NULL;if(${'var_desc6_argument'} !== null) ${'var_desc6_argument'}->setColumnType('text');

${'eid7_argument'} = new Argument('eid', $args->{'eid'});
${'eid7_argument'}->checkNotNull();
if(!${'eid7_argument'}->isValid()) return ${'eid7_argument'}->getErrorMessage();
if(${'eid7_argument'} !== null) ${'eid7_argument'}->setColumnType('varchar');

${'module_srl8_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl8_argument'}->checkFilter('number');
${'module_srl8_argument'}->checkNotNull();
${'module_srl8_argument'}->createConditionValue();
if(!${'module_srl8_argument'}->isValid()) return ${'module_srl8_argument'}->getErrorMessage();
if(${'module_srl8_argument'} !== null) ${'module_srl8_argument'}->setColumnType('number');

${'var_idx9_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx9_argument'}->checkFilter('number');
${'var_idx9_argument'}->checkNotNull();
${'var_idx9_argument'}->createConditionValue();
if(!${'var_idx9_argument'}->isValid()) return ${'var_idx9_argument'}->getErrorMessage();
if(${'var_idx9_argument'} !== null) ${'var_idx9_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`var_name`', ${'var_name1_argument'})
,new UpdateExpression('`var_type`', ${'var_type2_argument'})
,new UpdateExpression('`var_is_required`', ${'var_is_required3_argument'})
,new UpdateExpression('`var_search`', ${'var_search4_argument'})
,new UpdateExpression('`var_default`', ${'var_default5_argument'})
,new UpdateExpression('`var_desc`', ${'var_desc6_argument'})
,new UpdateExpression('`eid`', ${'eid7_argument'})
));
$query->setTables(array(
new Table('`xe_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl8_argument,"equal")
,new ConditionWithArgument('`var_idx`',$var_idx9_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>