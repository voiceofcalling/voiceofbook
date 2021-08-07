<?php if(!defined("__XE__")) exit();
$db_info = (object)array (
  'master_db' => 
  array (
    'db_type' => 'mysqli',
    'db_port' => '3306',
    'db_hostname' => '127.0.0.1',
    'db_userid' => 'n069dd5_nebook',
    'db_password' => 'Stempia1@#',
    'db_database' => 'n069dd5_nebook',
    'db_table_prefix' => 'xe_',
  ),
  'slave_db' => 
  array (
    0 => 
    array (
      'db_type' => 'mysqli',
      'db_port' => '3306',
      'db_hostname' => '127.0.0.1',
      'db_userid' => 'n069dd5_nebook',
      'db_password' => 'Stempia1@#',
      'db_database' => 'n069dd5_nebook',
      'db_table_prefix' => 'xe_',
    ),
  ),
  'default_url' => 'https://nebook.forthenext.org/',
  'use_mobile_view' => 'Y',
  'use_rewrite' => 'N',
  'time_zone' => '-0800',
  'use_prepared_statements' => 'Y',
  'qmail_compatibility' => 'N',
  'use_db_session' => 'N',
  'use_ssl' => 'none',
  'sitelock_whitelist' => 
  array (
    0 => '127.0.0.1',
  ),
);