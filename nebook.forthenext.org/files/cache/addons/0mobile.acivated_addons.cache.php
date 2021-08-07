<?php if(!defined("__XE__")) exit();
$_m = Context::get('mid');
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
'ChildrenStory' => 1,
);
$addon_file = './addons/simple_mp3_player/simple_mp3_player.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6NTp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjE1OiJwbGF5bGlzdF9wbGF5ZXIiO3M6MTM6IkFQbGF5ZXJfZml4ZWQiO3M6MTM6ImxpbmtfdG9fbWVkaWEiO3M6MToiWSI7czoxMzoieGVfcnVuX21ldGhvZCI7czoxMjoicnVuX3NlbGVjdGVkIjtzOjg6Im1pZF9saXN0IjthOjE6e2k6MDtzOjEzOiJDaGlsZHJlblN0b3J5Ijt9fQ==')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6NTp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjE1OiJwbGF5bGlzdF9wbGF5ZXIiO3M6MTM6IkFQbGF5ZXJfZml4ZWQiO3M6MTM6ImxpbmtfdG9fbWVkaWEiO3M6MToiWSI7czoxMzoieGVfcnVuX21ldGhvZCI7czoxMjoicnVuX3NlbGVjdGVkIjtzOjg6Im1pZF9saXN0IjthOjE6e2k6MDtzOjEzOiJDaGlsZHJlblN0b3J5Ijt9fQ==')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "simple_mp3_player";
$addon_time_log->called_extension = "simple_mp3_player";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);