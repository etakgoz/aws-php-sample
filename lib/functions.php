<?php

function checkLoggedInUser($smarty) {

    if (isset($_COOKIE["logged_in_user"])) {

        $smarty->assign("is_user_logged_in", true);
        $smarty->assign("logged_in_username", $_COOKIE["logged_in_user"]);

        $user = new StdClass();
        $user->name = $_COOKIE["logged_in_user"];

        return true;
    } else {
        return false;
    }
}