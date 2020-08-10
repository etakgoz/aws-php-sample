<?php
require("lib/init.php");

$username = checkLoggedInUser($smarty);

$smarty->assign("current_page", "server");
$smarty->assign("server_vars", $_SERVER);


$smarty->display("templates/server.tpl");