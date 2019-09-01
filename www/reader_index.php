<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head>
<meta charset="UTF-8">
<title>Note Reader</title>
<style>
html {
	background-color: #99e6ff;
	font-size: 18px;
	color: inherit;
}
th { text-align: left; }
table, th, td {
  border: 2px solid;
  border-collapse: collapse;
}
th, td {
  padding: 3px;;
}
td:last-of-type {
  width: 100%;
}
</style>
</head>
<body>
<h1>Note Reader Page</h1>
<p>Showing notes:</p>
<table border="1">
<?php
// Connect to database with object then query data from database server.
$db_host   	= '192.168.2.12';
$db_name   	= 'webNotes';
$db_user   	= 'web_user';
$db_passwd 	= 'password';
$pdo_dsn   	= "mysql:host=$db_host;dbname=$db_name";
$pdo 	   	= new PDO($pdo_dsn, $db_user, $db_passwd);
$q 	     	= $pdo->query("SELECT * FROM webNotes ORDER BY noteID");
while($row 	= $q->fetch() or die(mysql_error())){
  echo "<tr><td>".$row["noteID"]."</td><td>".$row["note"]."</td></tr>\n";
}
?>
</table>
</body>
</html>
