<?php
    require("lib/init.php");

    $username = checkLoggedInUser($smarty);

    $smarty->assign("current_page", "article");

    $smarty->display("templates/article.tpl");
?>