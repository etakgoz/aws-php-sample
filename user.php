<?php
require("lib/init.php");

$username = checkLoggedInUser($smarty);

$smarty->assign("current_page", "user");

$smarty->display("templates/user.tpl");

