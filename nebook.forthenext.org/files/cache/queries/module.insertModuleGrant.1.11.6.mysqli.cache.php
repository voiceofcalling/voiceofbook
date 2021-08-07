<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleGrant");
$query->setAction("insert");
$query->setPriority("");

${'module_srl4_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl4_argument'}->checkFilter('number');
${'module_srl4_argument'}->checkNotNull();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');

${'name5_argument'} = new Argument('name', $args->{'name'});
${'name5_argument'}->checkNotNull();
if(!${'name5_argument'}->isValid()) return ${'name5_argument'}->getErrorMessage();
if(${'name5_argument'} !== null) ${'name5_argument'}->setColumnType('varchar');

${'group_srl6_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl6_argument'}->checkNotNull();
if(!${'group_srl6_argument'}->isValid()) return ${'group_srl6_argument'}->getErrorMessage();
if(${'group_srl6_argument'} !== null) ${'group_srl6_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl4_argument'})
,new InsertExpression('`name`', ${'name5_argument'})
,new InsertExpression('`group_srl`', ${'group_srl6_argument'})
));
$query->setTables(array(
new Table('`xe_module_grants`', '`module_grants`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>