<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Note Taker</title>
<style>
form input{
	width: 100%;
}
</style>
</head>
<body>

<h1>Note Taking page</h1>

<form action="insert.php" method="post" autocomplete="off">
	<p>
		<label for="wnoteID">Note Number:</label>
		<input type="text" name="wnoteID" id="wnoteID">
	</p>
	<p>
		<label for="wnote">Note:</label>
		<input type="text" name="wnote" id="wnote">
	</p>
	<input type="submit" value="Submit">
</form>
</table>
</body>
</html>
