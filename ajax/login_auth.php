<?php
    ob_start();
    include("../include/function.php");
    include("../include/config.php");
	if(isset($_REQUEST['go_techhunt']))
	{
	    $username=$_REQUEST['username'];
	    $password=$_REQUEST['password'];
	    $password=sha1($password);
	    try
		{
			$stmt = $conn->prepare("select * from techhunt_admin where username='$username' AND password='$password' order by id desc");
			$stmt->execute();
			$list = $stmt->fetchAll(); 
			$check=0;
			$email='';
			foreach($list as $row)
			{
			    $check++;
			    $email=$row['email'];
			}
			if($check==0)
			{
			    echo 1;
			}
			else
			{
			    session_start();
			    $_SESSION['username']=$username;
			    $_SESSION['password']=$password;
			    $_SESSION['email']=$email;
			    session_write_close();
			    echo 2;
			}
		}
		catch(PDOException $e) {
			echo 3;
		}
	    
	}
	ob_end_flush();
?>