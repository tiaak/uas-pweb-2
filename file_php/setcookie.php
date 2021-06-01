<?php  

// setcookie('cookie_user',$_POST['user']);
// setcookie('cookie_pass',$_POST['pwd']);

include("pass.php");

if (password_valid($_POST['user'],$_POST['pwd'])) {
	setcookie('cookie_user', $_POST['user']);
	setcookie('cookie_pass', $_POST['pwd']);
}

header("Location: index.php?module=konten");

?>