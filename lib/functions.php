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

function getDBConn($servername, $database, $username, $password) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit();
      }
}


function getLinks($dbConn) {
    try {
        $q = "SELECT * FROM links";

        $result = $dbConn->query($q);

		if (!$result) {
	    	throw new Exception("Empty links!!");
		}

		$likns = array();
		while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $links [$row['id']]= [
                "title" => $row['title'],
                "url" => $row['url']
            ];
        }

        return $links;
    } catch (Exception $e) {
        echo $e->getMessage();
        exit();
    }
}