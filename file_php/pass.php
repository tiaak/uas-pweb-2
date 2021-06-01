<?php  
function password_valid($user,$pwd) 
{
	if (($user = "admin") && ($pwd = "admin"))
		return TRUE;
}

?>