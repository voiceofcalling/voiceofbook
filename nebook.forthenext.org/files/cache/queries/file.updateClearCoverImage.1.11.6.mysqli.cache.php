<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateClearCoverImage");
$query->setAction("update");
$query->setPriority("");

${'upload_target_srl1_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl1_argument'}->checkNotNull();
${'upload_target_srl1_argument'}->createConditionValue();
if(!${'upload_target_srl1_argument'}->isValid()) return ${'upload_target_srl1_argument'}->getErrorMessage();
if(${'upload_target_srl1_argument'} !== null) ${'upload_target_srl1_argument'}->setColumnType('number');
if(isset($args->cover_file_srl)) {
${'cover_file_srl2_argument'} = new ConditionArgument('cover_file_srl', $args->cover_file_srl, 'notequal');
${'cover_file_srl2_argument'}->createConditionValue();
if(!${'cover_file_srl2_argument'}->isValid()) return ${'cover_file_srl2_argument'}->getErrorMessage();
} else
${'cover_file_srl2_argument'} = NULL;if(${'cover_file_srl2_argument'} !== null) ${'cover_file_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpressionWithoutArgument('`cover_image`', "'N'")
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl1_argument,"equal")
,new ConditionWithoutArgument('`cover_image`',"'Y'","equal", 'and')
,new ConditionWithArgument('`file_srl`',$cover_file_srl2_argument,"notequal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>