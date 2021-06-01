<?php  

 $_SESSION['session_user'] = $_POST['user'];
 $_SESSION['session_pwd'] = $_POST['pwd'];

header("Location : index.php?module=home");

?>