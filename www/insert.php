<?php
 
$db_host   	= '192.168.2.12';
$db_name   	= 'web_data';
$db_user   	= 'web_user';
$db_passwd 	= 'password';

$pdo_dsn   	= "mysql:host=$db_host;dbname=$db_name";

$pdo 	   	= new PDO($pdo_dsn, $db_user, $db_passwd);

if (!$pdo) {
	die("ERROR: Could not connect. " . mysql_error());
} else {
	$db_select = mysql_select_db("webNotes", $pdo);
}

if (!$db_select) {
	die("Database selection failed".mysql_error());
} else {
	$sql = "INSERT INTO webNotes(noteID,note) VALUES('$_POST[wnoteID]','$_POST[wnote]')"
	if (!mysql_query($sql)) {
		die("error".mysql_error());
	} else {
		echo "inserted";
	}
}

?>