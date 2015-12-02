<?php

    include_once "dbConnect.php";

	$stmt = $dbh->prepare("UPDATE `gProgress` SET `progress` = " + $_POST["value"] + " WHERE `id` = 1");

	if(!$stmt->execute()){
       die('Could not execute statement');
    }
?>
