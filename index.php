<?php
    require("lib/functions.php");
    
    $smarty->assign("current_page", "index");

    $smarty->display("templates/index.tpl");
?>