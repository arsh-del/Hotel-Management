<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$con = mysqli_connect("localhost","root","") or die("Unable to connect database".mysqli_error());
$db = mysqli_select_db($con,"project") or die ("sorry db connection fail");
?>
</body>
</html>