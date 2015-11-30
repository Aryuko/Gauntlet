<?php

    include_once "dbConnect.php";

	$stmt = $dbh->prepare("SELECT `progress` FROM `gProgress` WHERE `id` = 0");

	$stmt->execute();

	$res = $stmt->get_result();

	$row = $res->fetch_array();

	echo $row['progress'];
    //echo json_encode($row);


?>
