<?php  
include "pass.php";

if (!password_valid($_COOKIE["cookie_user"],$_COOKIE["cookie_pass"]))
	exit();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>

	<a href="hal1.php">Halaman 1</a>
	<a href="hal2.php">Halaman 2</a>
	<a href="logout.php">Log out</a>
	
</body>
</html>