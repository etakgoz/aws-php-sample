<?php
    require("lib/functions.php");

    $smarty->assign("current_page", "login");

    if (isset($_REQUEST["username"]) && isset($_REQUEST["password"])) {
        
        if ($_REQUEST["password"] === "some123") {
            setcookie("isloggedin", $_REQUEST["username"]);
            header("Location: .");
        } else {
            echo "password is wrong!";
        }

    }

    $smarty->display("templates/login.tpl");
?>