<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
    <head>
        <title>Vagrant test page</title>
    </head>
    <body>
        <h1>Oh hello there!</h1>
	<p>
		Showing web notes:
	</p>
	<?php
		$db_host   = '10.0.0.20';
		$db_name   = 'web_data';
		$db_user   = 'web_user';
		$db_passwd = 'password';
		
		$pdo_dsn   = "mysql:host=$db_host;dbname=$db_name";
	
		$pdo 	   = new PDO(:pdo_dsn, $db_user, $db_passwd);

		$q 	   = $pdo->query("SELECT * FROM webNotes")

		while($row = $q->fetch()){
			echo "<tr><td>".$row["note"]."</td></tr>\n";
		}
	?>
    </body>
</html>
