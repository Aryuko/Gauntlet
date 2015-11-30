<?php

    include_once "dbConnect.php";

	$stmt = $dbh->prepare("SELECT `progress` FROM `gProgress` WHERE `id` = 0");

	if(!$stmt->execute()){
       die('Could not execute statement' . mysql_error());
    }

	if($res = $stmt->get_result()){
       die('Could not get result' . mysql_error());
    }

	if($row = $res->fetch_array()){
       die('Could not fetch array' . mysql_error());
    }

	echo $row[0];
    //echo json_encode($row);

?>
