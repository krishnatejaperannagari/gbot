<?php
	$database="cucch_15875148_test";
	$mysql_user = "cucch_15875148";
	$mysql_password = "9399970381"; 
	$mysql_host = "sql206.cuccfree.com";
	$mysql_table_prefix = "";



	$success = mysql_pconnect ($mysql_host, $mysql_user, $mysql_password);
	if (!$success)
		die ("<b>Cannot connect to database, check if username, password and host are correct.</b>");
    $success = mysql_select_db ($database);
	if (!$success) {
		print "<b>Cannot choose database, check if database name is correct.";
		die();
	}
?>

