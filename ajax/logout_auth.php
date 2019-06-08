<?php
    ob_start();
     session_start();
    include("../include/function.php");
    include("../include/config.php");
	if(isset($_REQUEST['go_techhunt']) && isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['email']))
	{
	    
	   
	    unset($_SESSION['username']);
	    unset($_SESSION['password']);
	    unset($_SESSION['email']);
	    
	    
	}
	session_write_close();
	ob_end_flush();
?>	 