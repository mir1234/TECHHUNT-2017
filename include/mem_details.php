<?php
		try
		{
			$stmt = $conn->prepare("select * from individual_details order by id asc ");
			$stmt->execute();
			$list = $stmt->fetchAll(); 
			foreach($list as $row)
			{

?>

<div id="ind_details<?php echo $row['id']; ?>" class="w3-modal">
	<div class="w3-modal-content w3-animate-zoom" style="width:100%;max-width:300px;">
		<header class="w3-container w3-black">
			<h3> Participant Details </h3>
			<span onclick="document.getElementById('ind_details<?php echo $row['id']; ?>').style.display='none'"
				class="w3-button w3-display-topright"><i class="fa fa-close"></i></span>		</header>
		<div class="w3-container w3-padding" style="height:300px;overflow-y:scroll;">
			<div class="w3-container" style="margin-top:40px;">
			</div>
			<div class="w3-card-4 w3-center" style="width:100%;width:190px;height:190px;margin: 0 auto;">
			  <img src="images/participants/<?php if($row['image']!=""){ echo $row['image']; } else { echo "default/ni.jpg"; } ?>" class="w3-hover-shadow w3-border w3-padding" alt="<?php echo $row['name']; ?>" style="max-width:160px;max-height:150px;">
			  <div class="w3-container w3-center" style="margin:0px;padding:0px 5px 5px 5px;">
				<p class="w3-medium" style="margin:0px;padding:0px;color:black;"><?php echo $row['name']; ?></p>
			  </div>
			</div> 
		</div>
		<footer class="w3-container w3-black">
			<p>  </p>
		</footer>
	</div>
</div>
<?php
			}
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
?>


<?php
		try
		{
			$stmt = $conn->prepare("select * from team order by id asc ");
			$stmt->execute();
			$list = $stmt->fetchAll(); 
			foreach($list as $row)
			{

?>

<div id="tea_details<?php echo $row['id']; ?>" class="w3-modal">
	<div class="w3-modal-content w3-animate-zoom">
		<header class="w3-container w3-black">
			<h3> Team Details </h3>
			<span onclick="document.getElementById('tea_details<?php echo $row['id']; ?>').style.display='none'"
				class="w3-button w3-display-topright"><i class="fa fa-close"></i></span>		</header>
		<div class="w3-container w3-padding" style="height:400px;overflow-y:scroll;">
			
			<?php
				$stmt2 = $conn->prepare("select * from events where id='$row[event_id]' order by id asc ");
				$stmt2->execute();
				$list2 = $stmt2->fetchAll(); 
				foreach($list2 as $row2)
				
				if($row2['coach_status']==1)
				{
			?>
				<i class="fa fa-arrow-right w3-xlarge w3-tlcolor" style="margin-top:10px;"> Coach: </i>
				<div class="w3-container w3-padding-16">
				<div class="w3-container" style="margin:0 auto;width:700px;">
				<?php
					$stmt3 = $conn->prepare("select * from coach_details where team_id='$row[id]' order by id asc ");
					$stmt3->execute();
					$list3 = $stmt3->fetchAll();
					$sl=0;
					foreach($list3 as $row3)
					{
						$sl++;
				?>
						<div class="w3-card-4 w3-center w3-margin" style="width:100%;width:190px;height:190px;float:left;">
						  <img src="images/coach/<?php if($row3['image']!=""){ echo $row3['image']; } else { echo "default/ni.jpg"; } ?>" class="w3-hover-shadow w3-border w3-padding" alt="<?php echo $row3['name']; ?>" style="max-width:160px;max-height:150px;">
						  <div class="w3-container w3-center" style="margin:0px;padding:0px 5px 5px 5px;">
							<p class="w3-medium" style="margin:0px;padding:0px;color:black;"><?php echo $row3['name']; ?></p>
						  </div>
						</div> 
	
				<?php
					}
				?>
				</div>
				
			</div>
			<?php
				}
			?>
			<i class="fa fa-arrow-right w3-xlarge w3-tlcolor" style="margin-top:10px;"> Team Members: </i>
			<div class="w3-container w3-padding-16">
				<div class="w3-container" style="margin:0 auto;width:700px;">
				<?php
					$stmt3 = $conn->prepare("select * from team_details where team_id='$row[id]' order by id asc ");
					$stmt3->execute();
					$list3 = $stmt3->fetchAll();
					$sl=0;
					foreach($list3 as $row3)
					{
						$sl++;
				?>
						<div class="w3-card-4 w3-center w3-margin" style="width:100%;width:190px;height:190px;float:left;">
						  <img src="images/participants/<?php if($row3['image']!=""){ echo $row3['image']; } else { echo "default/ni.jpg"; } ?>" class="w3-hover-shadow w3-border w3-padding" alt="<?php echo $row3['name']; ?>" style="max-width:160px;max-height:150px;">
						  <div class="w3-container w3-center" style="margin:0px;padding:0px 5px 5px 5px;">
							<p class="w3-medium" style="margin:0px;padding:0px;color:black;"><?php echo $sl.') '.$row3['name']; ?></p>
						  </div>
						</div> 
	
				<?php
					}
				?>
				</div>
				
			</div>
		</div>
		<footer class="w3-container w3-black">
			<p> &nbsp </p>
		</footer>
	</div>
</div>
<?php
			}
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
?>