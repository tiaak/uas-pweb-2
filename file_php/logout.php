<?php  
setcookie("cookie_user");
setcookie("cookie_pass");

// print ("bila anda ingin mengakses <br>\n");
// print ("halaman 1, halaman <br>\n");
// print ("silakan melakukan login kembali<br>\n");

// session_unset();

header("Location: index.php?module=konten");

?>