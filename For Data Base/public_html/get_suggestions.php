<?php
	include("config.php");

	$vendor_id = $_REQUEST("vendor_id");

	$query = "select * from suggestion_tb where vendor_id='$vendor_id' order by suggestion_id desc";	
	$result = mysql_query($query);

	echo json_encode(array("suggestions":"result"));
	
?>    