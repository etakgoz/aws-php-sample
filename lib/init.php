<?php
define("ABS_APP_PATH", "/Users/tolga/Sites/aws-php-sample");
define("ABS_APP_URL", "https://localhost/aws-php-sample");


// Setup smarty
require_once(ABS_APP_PATH.'/lib/smarty-3.1.35/libs/Smarty.class.php');
$smarty = new Smarty;

$smarty->assign("abs_app_url", ABS_APP_URL);

require_once(ABS_APP_PATH.'/lib/functions.php');