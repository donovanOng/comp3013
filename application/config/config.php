<?php

if (strpos($_SERVER['HTTP_HOST'],'localhost') !== false) {
  define('ENVIRONMENT', 'dev');
} else {
  define('ENVIRONMENT', 'prod' );
}

error_reporting(E_ALL);
ini_set("display_errors", 1);

define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', '//');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'group8');
define('DB_USER', 'root');
if (getenv('MYSQL_PASS')) {
  define('DB_PASS', getenv('MYSQL_PASS'));
} else {
  define('DB_PASS', 'root');
}
//define('DB_PASS', 'COMP3013');
define('DB_CHARSET', 'utf8');

define('AZURE_ACCOUNT_NAME', '3013grp8');
define('AZURE_ACCOUNT_KEY', 'hwysA6BT0j07FzdY9bBIo4yz9V4tuKpwCao8KTsxpzW74pMU+c5bAbTsOH1EivJJGBfYQOMVqzdShLTG32ZDgA==');
define('AZURE_CONTAINER', 'grp8uploads');

?>
