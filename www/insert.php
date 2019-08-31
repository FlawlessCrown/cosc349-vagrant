<?php
 
$db_host   	= '192.168.2.12';
$db_name   	= 'webNotes';
$db_user   	= 'web_user';
$db_passwd 	= 'password';

$pdo_dsn   	= "mysql:host=$db_host;dbname=$db_name";

$pdo 	   	= new PDO($pdo_dsn, $db_user, $db_passwd);

$db_select = mysql_select_db("webNotes", $pdo);

$sql = "INSERT INTO webNotes(noteID,note) VALUES('$_POST[wnoteID]','$_POST[wnote]')"

echo "inserted";

?>