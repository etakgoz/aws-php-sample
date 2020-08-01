<?php
    require("lib/init.php");

    $username = checkLoggedInUser($smarty);

    $smarty->assign("current_page", "index");

    $smarty->display("templates/index.tpl");
?>