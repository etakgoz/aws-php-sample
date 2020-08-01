<?php
    require("lib/init.php");

    $username = checkLoggedInUser($smarty);

    // user is already logged in, redirect to home
    if ($username !== false) {
        header("Location: ."); 
    }

    $smarty->assign("current_page", "login");

    if (isset($_REQUEST["username"]) && isset($_REQUEST["password"])) {
        
        if ($_REQUEST["password"] === "some123") {
            setcookie("logged_in_user", $_REQUEST["username"]);
            header("Location: .");
        } else {
            echo "password is wrong!";
        }
    }

    $smarty->display("templates/login.tpl");
?>