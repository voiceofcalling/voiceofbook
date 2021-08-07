<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleMobileSkinVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl2_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl2_argument'}->checkFilter('number');
${'module_srl2_argument'}->checkNotNull();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');

${'name3_argument'} = new Argument('name', $args->{'name'});
${'name3_argument'}->checkNotNull();
if(!${'name3_argument'}->isValid()) return ${'name3_argument'}->getErrorMessage();
if(${'name3_argument'} !== null) ${'name3_argument'}->setColumnType('varchar');

${'value4_argument'} = new Argument('value', $args->{'value'});
${'value4_argument'}->checkNotNull();
if(!${'value4_argument'}->isValid()) return ${'value4_argument'}->getErrorMessage();
if(${'value4_argument'} !== null) ${'value4_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl2_argument'})
,new InsertExpression('`name`', ${'name3_argument'})
,new InsertExpression('`value`', ${'value4_argument'})
));
$query->setTables(array(
new Table('`xe_module_mobile_skins`', '`module_mobile_skins`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>