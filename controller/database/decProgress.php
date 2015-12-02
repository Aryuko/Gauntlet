<?php

    include_once "dbConnect.php";

	$stmt = $dbh->prepare("UPDATE `gProgress` SET `progress` = (`progress` - 1) WHERE `id` = 1");

	if(!$stmt->execute()){
       die('Could not execute statement');
    }
?>
