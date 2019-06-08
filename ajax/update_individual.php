<?php
	include("../include/function.php");
	include("../include/config.php");
	if(isset($_REQUEST['go_techhunt']))
	{
	    $id=$_REQUEST['individual_id'];
	    $status=$_REQUEST['status'];
	    try
	    {
	    	$stmt = $conn->prepare("UPDATE individual_details SET status='$status' WHERE id='$id' ");
	    	$stmt->execute();
	    	
	    	
	    	if($status=='active')
			{
				echo '<button class="w3-button w3-text-green w3-tiny w3-white w3-border w3-border-green w3-round-small  w3-padding-small">Accepted</button>';
			}
			else if($status=='inactive')
			{
				echo '<button class="w3-button w3-text-blue w3-tiny w3-white w3-border w3-border-blue w3-round-small  w3-padding-small">Pending</button>';
			}
			else
			{
				echo '<button class="w3-button w3-text-red w3-tiny w3-white w3-border w3-border-red w3-round-small  w3-padding-small">Rejected</button>';
			}
			
			if($status=='active')
			{
    			$stmt2 = $conn->prepare("select * from individual_details where id='$id' order by id asc ");
    			$stmt2->execute();
    			$list2 = $stmt2->fetchAll(); 
    			foreach($list2 as $row2)
    			{
    			    $email=$row2['email'];
    			    $name=$row2['name'];
    			}
    			
    			$to=$email;
    			$subject='TechHunt '.Date("Y").' Registration Accepted';
    			$msg="Hi ".$name.",<br><br>Greetings from TechHunt<br><img src='https://techhuntbd.org/images/system/techhunt_logo_title.png' height='200' width='500'><br><br>Your Registraion process is successfully completed. Your registration is successfully verified by our admin panel. Your registration status successfully changed as Accepted.<br><br><br> ";
    			$msg=$msg."We are so much glad that you are participating in this year TechHunt ".Date("Y").".<br>Stay connected at: https://www.techhuntbd.org";
    			sent_mail($to,$subject,$msg);
			}
			else if($status=='rejected')
			{
			    $stmt2 = $conn->prepare("select * from individual_details where id='$id' order by id asc ");
    			$stmt2->execute();
    			$list2 = $stmt2->fetchAll(); 
    			foreach($list2 as $row2)
    			{
    			    $email=$row2['email'];
    			    $name=$row2['name'];
    			}
    			
    			$to=$email;
    			$subject='TechHunt '.Date("Y").' Registration Rejected';
    			$msg="Hi ".$name.",<br><br>Greetings from TechHunt<br><img src='https://techhuntbd.org/images/system/techhunt_logo_title.png' height='200' width='500'><br><br>We are sorry to say that your Registraion process is rejected due to lack of information. Please contact with authority of TechHunt.<br><br><br> ";
    			$msg=$msg."Stay connected at: https://www.techhuntbd.org";
    			sent_mail($to,$subject,$msg);
			    
			}
	    }
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
?>