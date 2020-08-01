<?php
    require("lib/functions.php");

    $smarty->assign("current_page", "user");

    $isUserLoggedIn = "No";
    $username = "";
    if (isset($_COOKIE["isloggedin"])) {
        $isUserLoggedIn = "Yes";
        $username = $_COOKIE["isloggedin"];
    }

    $smarty->display("templates/user.tpl");
?>

