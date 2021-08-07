<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertDocumentVotedLog");
$query->setAction("insert");
$query->setPriority("");

${'document_srl6_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl6_argument'}->checkFilter('number');
${'document_srl6_argument'}->ensureDefaultValue('0');
${'document_srl6_argument'}->checkNotNull();
if(!${'document_srl6_argument'}->isValid()) return ${'document_srl6_argument'}->getErrorMessage();
if(${'document_srl6_argument'} !== null) ${'document_srl6_argument'}->setColumnType('number');

${'member_srl7_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl7_argument'}->checkFilter('number');
${'member_srl7_argument'}->ensureDefaultValue('0');
if(!${'member_srl7_argument'}->isValid()) return ${'member_srl7_argument'}->getErrorMessage();
if(${'member_srl7_argument'} !== null) ${'member_srl7_argument'}->setColumnType('number');

${'ipaddress8_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress8_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress8_argument'}->isValid()) return ${'ipaddress8_argument'}->getErrorMessage();
if(${'ipaddress8_argument'} !== null) ${'ipaddress8_argument'}->setColumnType('varchar');

${'regdate9_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate9_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate9_argument'}->isValid()) return ${'regdate9_argument'}->getErrorMessage();
if(${'regdate9_argument'} !== null) ${'regdate9_argument'}->setColumnType('date');

${'point10_argument'} = new Argument('point', $args->{'point'});
${'point10_argument'}->checkFilter('number');
${'point10_argument'}->ensureDefaultValue('0');
if(!${'point10_argument'}->isValid()) return ${'point10_argument'}->getErrorMessage();
if(${'point10_argument'} !== null) ${'point10_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl6_argument'})
,new InsertExpression('`member_srl`', ${'member_srl7_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress8_argument'})
,new InsertExpression('`regdate`', ${'regdate9_argument'})
,new InsertExpression('`point`', ${'point10_argument'})
));
$query->setTables(array(
new Table('`xe_document_voted_log`', '`document_voted_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>