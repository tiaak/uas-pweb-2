<?php  
include "pass.php";

if (!passowrd_valis($_COOKIE["cookie-user"],$_COOKIE["cookie_pass"]))
	die ("maaf, anda tidak bisa mengeakses halaman ini");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<h1>HALAMAN</h1>
	
</body>
</html>