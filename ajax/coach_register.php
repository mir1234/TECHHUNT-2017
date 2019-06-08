<?php
	include("../include/function.php");
	include("../include/config.php");
	if(isset($_REQUEST['go_techhunt']))
	{
		
		$name=trim($_REQUEST['name']);
		$email=trim($_REQUEST['email']);
		$mobile=trim($_REQUEST['mobile']);
		$institute=trim($_REQUEST['institute']);
		$tsize=trim($_REQUEST['tsize']);
		$image_name=trim($_REQUEST['image_name']);
		$team_id=trim($_REQUEST['team_id']);
		$status='active';
		try
		{
			$stmt = $conn->prepare("Insert into coach_details(team_id, name, tsize, institute, email, mobile, image, status) VALUES('$team_id','$name','$tsize','$institute','$email','$mobile','$image_name','$status')");
			$stmt->execute();
			
			
			$to=$email;
			$subject='TechHunt '.Date("Y").' Registration';
			$msg="Hi ".$name.",<br><br>Greetings from TechHunt<br><img src='https://techhuntbd.org/images/system/techhunt_logo_title.png' height='200' width='500'><br><br>Your Team Registraion process is completed as a Coach. Please wait for the final confirmation. When it will be done we will sent you the confirmation email and your status in our website will be shown as Accepted.<br><br><br> ";
			$msg=$msg."We are so much glad that you are participating in this year TechHunt ".Date("Y").".<br>Stay connected at: https://www.techhuntbd.org";
			sent_mail($to,$subject,$msg);
			
			
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}

?>