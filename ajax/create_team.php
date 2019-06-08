<?php
	include("../include/function.php");
	include("../include/config.php");
	if(isset($_REQUEST['go_techhunt']))
	{
		$event_id=trim($_REQUEST['event_id']);
		$team_name=trim($_REQUEST['team_name']);
		$team_members=trim($_REQUEST['team_members']);
		$bkash=trim($_REQUEST['bkash']);
		$bkash_trx=trim($_REQUEST['bkash_trx']);
		$status='inactive';
		$join_time=get_time();
		try
		{
			$stmt = $conn->prepare("Insert into team(join_date, bkash_no, bkash_trx, event_id, team_name, members, status) VALUES('$join_time','$bkash','$bkash_trx','$event_id','$team_name','$team_members','$status')");
			$stmt->execute();
			
			
			$stmt2 = $conn->prepare("select * from team where join_date='$join_time' AND bkash_no='$bkash' AND bkash_trx='$bkash_trx' AND event_id='$event_id' AND team_name='$team_name' AND members='$team_members' order by id desc ");
			$stmt2->execute();
			$list = $stmt2->fetchAll(); 
			$team_id=0;
			foreach($list as $row)
			{
				$team_id=$row['id'];
			}
			echo $team_id;
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
?>