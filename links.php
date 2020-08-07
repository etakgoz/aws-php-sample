<?php
require("lib/init.php");

$username = checkLoggedInUser($smarty);

$smarty->assign("current_page", "links");

$db = getDBConn(DB_CONN_SERVERNAME, DB_CONN_DBNAME, DB_CONN_USERNAME, DB_CONN_PASSWORD);
$links = getLinks($db);

$smarty->assign("links", $links);

$smarty->display("templates/links.tpl");