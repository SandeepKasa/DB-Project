<?php    
session_start(); 
unset($_SESSION);
session_destroy(); 
echo "Logged out successfully";
 print "<META http-equiv=\"refresh\" content=\"2;url=home.php\">";
exit;  
?> 
