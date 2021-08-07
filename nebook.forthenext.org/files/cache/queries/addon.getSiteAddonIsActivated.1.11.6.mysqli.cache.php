<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl21_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl21_argument'}->checkNotNull();
${'site_srl21_argument'}->createConditionValue();
if(!${'site_srl21_argument'}->isValid()) return ${'site_srl21_argument'}->getErrorMessage();
if(${'site_srl21_argument'} !== null) ${'site_srl21_argument'}->setColumnType('number');

${'addon22_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon22_argument'}->checkNotNull();
${'addon22_argument'}->createConditionValue();
if(!${'addon22_argument'}->isValid()) return ${'addon22_argument'}->getErrorMessage();
if(${'addon22_argument'} !== null) ${'addon22_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl21_argument,"equal")
,new ConditionWithArgument('`addon`',$addon22_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>