<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCoverImage");
$query->setAction("update");
$query->setPriority("");

${'cover_image3_argument'} = new Argument('cover_image', $args->{'cover_image'});
${'cover_image3_argument'}->ensureDefaultValue('Y');
${'cover_image3_argument'}->checkNotNull();
if(!${'cover_image3_argument'}->isValid()) return ${'cover_image3_argument'}->getErrorMessage();
if(${'cover_image3_argument'} !== null) ${'cover_image3_argument'}->setColumnType('char');

${'file_srl4_argument'} = new ConditionArgument('file_srl', $args->file_srl, 'equal');
${'file_srl4_argument'}->checkFilter('number');
${'file_srl4_argument'}->checkNotNull();
${'file_srl4_argument'}->createConditionValue();
if(!${'file_srl4_argument'}->isValid()) return ${'file_srl4_argument'}->getErrorMessage();
if(${'file_srl4_argument'} !== null) ${'file_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`cover_image`', ${'cover_image3_argument'})
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`file_srl`',$file_srl4_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>