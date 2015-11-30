<?php

    include_once "dbConnect.php";

	$stmt = $dbh->prepare("SELECT `progress` FROM `gProgress` WHERE `id` = 1");

	if(!$stmt->execute()){
       die('Could not execute statement');
    }

	if(!$res = $stmt->get_result()){
       die('Could not get result');
    }

    if(!$row = $res->fetch_row()){
       die('Could not fetch row');
    }

	echo $row[0];
?>
