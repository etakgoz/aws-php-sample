<?php
require_once(dirname(__FILE__).'/../configs/config.php');

// Setup smarty
require_once(ABS_APP_PATH.'/lib/smarty-3.1.35/libs/Smarty.class.php');
$smarty = new Smarty;

$smarty->assign("abs_app_url", ABS_APP_URL);

require_once(ABS_APP_PATH.'/lib/functions.php');