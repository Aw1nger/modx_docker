<?php
/**
 *  MODX Configuration file
 */
$database_type = 'mysql';
$database_server = 'immachineee-mariadb-1';
$database_user = 'root';
$database_password = 'qwerty';
$database_connection_charset = 'utf8mb4';
$dbase = 'modx_db';
$table_prefix = 'modx_';
$database_dsn = 'mysql:host=immachineee-mariadb-1;dbname=modx_db;charset=utf8mb4';
$config_options = array (
);
$driver_options = array (
);

$lastInstallTime = 1702913740;

$site_id = 'modx658066cc435e35.82705016';
$site_sessionname = 'SN65806663d6011';
$https_port = '443';
$uuid = '9797b78d-6441-4357-9964-9d60363f6ee3';

if (!defined('MODX_CORE_PATH')) {
    $modx_core_path= '/var/www/html/modx-3.0.4-pl/core/';
    define('MODX_CORE_PATH', $modx_core_path);
}
if (!defined('MODX_PROCESSORS_PATH')) {
    $modx_processors_path= '/var/www/html/modx-3.0.4-pl/core/src/Revolution/Processors/';
    define('MODX_PROCESSORS_PATH', $modx_processors_path);
}
if (!defined('MODX_CONNECTORS_PATH')) {
    $modx_connectors_path= '/var/www/html/modx-3.0.4-pl/connectors/';
    $modx_connectors_url= '/modx-3.0.4-pl/connectors/';
    define('MODX_CONNECTORS_PATH', $modx_connectors_path);
    define('MODX_CONNECTORS_URL', $modx_connectors_url);
}
if (!defined('MODX_MANAGER_PATH')) {
    $modx_manager_path= '/var/www/html/modx-3.0.4-pl/manager/';
    $modx_manager_url= '/modx-3.0.4-pl/manager/';
    define('MODX_MANAGER_PATH', $modx_manager_path);
    define('MODX_MANAGER_URL', $modx_manager_url);
}
if (!defined('MODX_BASE_PATH')) {
    $modx_base_path= '/var/www/html/modx-3.0.4-pl/';
    $modx_base_url= '/modx-3.0.4-pl/';
    define('MODX_BASE_PATH', $modx_base_path);
    define('MODX_BASE_URL', $modx_base_url);
}
if(defined('PHP_SAPI') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
    $isSecureRequest = false;
} else {
    $isSecureRequest = ((isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') || $_SERVER['SERVER_PORT'] == $https_port);
}
if (!defined('MODX_URL_SCHEME')) {
    $url_scheme=  $isSecureRequest ? 'https://' : 'http://';
    define('MODX_URL_SCHEME', $url_scheme);
}
if (!defined('MODX_HTTP_HOST')) {
    if(defined('PHP_SAPI') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
        $http_host='localhost';
        define('MODX_HTTP_HOST', $http_host);
    } else {
        $http_host= array_key_exists('HTTP_HOST', $_SERVER) ? htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES) : 'localhost';
        if ($_SERVER['SERVER_PORT'] != 80) {
            $http_host = str_replace(':' . $_SERVER['SERVER_PORT'], '', $http_host); // remove port from HTTP_HOST
        }
        $http_host .= in_array($_SERVER['SERVER_PORT'], [80, 443]) ? '' : ':' . $_SERVER['SERVER_PORT'];
        define('MODX_HTTP_HOST', $http_host);
    }
}
if (!defined('MODX_SITE_URL')) {
    $site_url= $url_scheme . $http_host . MODX_BASE_URL;
    define('MODX_SITE_URL', $site_url);
}
if (!defined('MODX_ASSETS_PATH')) {
    $modx_assets_path= '/var/www/html/modx-3.0.4-pl/assets/';
    $modx_assets_url= '/modx-3.0.4-pl/assets/';
    define('MODX_ASSETS_PATH', $modx_assets_path);
    define('MODX_ASSETS_URL', $modx_assets_url);
}
if (!defined('MODX_LOG_LEVEL_FATAL')) {
    define('MODX_LOG_LEVEL_FATAL', 0);
    define('MODX_LOG_LEVEL_ERROR', 1);
    define('MODX_LOG_LEVEL_WARN', 2);
    define('MODX_LOG_LEVEL_INFO', 3);
    define('MODX_LOG_LEVEL_DEBUG', 4);
}
