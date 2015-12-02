<?php

    include_once "dbConnect.php";

	$stmt = $dbh->prepare("UPDATE `gProgress` SET `progress` = ? WHERE `id` = 1");
    $input = $_POST['value'];
    $stmt->bind_param("i",  $input);

	if(!$stmt->execute()){
       die('Could not execute statement');
    }
?>
