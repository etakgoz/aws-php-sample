<?php
define("ABS_APP_PATH", "/Users/tolga/Sites/aws-php-sample");

require_once(ABS_APP_PATH.'/lib/smarty-3.1.35/libs/Smarty.class.php');
$smarty = new Smarty;

/*
$smarty->php_handling = Smarty::PHP_ALLOW;
$smarty->template_dir = '../templates/'.TEMPLATE_VERSION;
$smarty->compile_dir = '../templates_c';
$smarty->cache_dir = '../cache';
$smarty->config_dir = '../configs';
$smarty->addPluginsDir('../lib/smarty-3.1.35/plugins/configs');
$smarty->error_reporting = E_ALL ^ E_NOTICE;
*/