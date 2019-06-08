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
		<div class="w3-container w3-padding" style="height:450px;overflow-y:scroll;">
			<div class="w3-container" style="margin-top:5px;">
			</div>
			
			<p class="w3-small">Join Time: <font color="#008080"><?php echo $row['join_date']; ?></font></p>
			<p class="w3-small">Bkash: <font color="red"><?php echo $row['bkash_no']; ?></font></p>
			<p class="w3-small">Bkash TRX ID: <font color="red"><?php echo $row['bkash_trx']; ?></font></p>
			<p class="w3-small">Tshirt Size: <font color="#008080"><?php echo $row['tsize']; ?></font></p>
			<p class="w3-small">Email: <font color="blue"><?php echo $row['email']; ?></font></p>
			<p class="w3-small">Mobile: <font color="blue"><?php echo $row['mobile']; ?></font></p>
			<p class="w3-small">Institute: <font color="#008080"><?php echo $row['institute']; ?></font></p>
			
			<div class="w3-container" style="margin-top:5px;">
			</div>
			<div class="w3-card-4 w3-center" style="width:100%;width:190px;height:190px;margin: 0 auto;">
			  <img src="../images/participants/<?php if($row['image']!=""){ echo $row['image']; } else { echo "default/ni.jpg"; } ?>" class="w3-hover-shadow w3-border w3-padding" alt="<?php echo $row['name']; ?>" style="max-width:160px;max-height:150px;">
			  <div class="w3-container w3-center" style="margin:0px;padding:0px 5px 5px 5px;">
				<p class="w3-medium" style="margin:0px;padding:0px;color:black;"><?php echo $row['name']; ?></p>
			  </div>
			</div>
			<div class="w3-container" style="margin-top:15px;">
			</div>
			<div class="w3-card-4 w3-center" style="width:100%;width:190px;height:190px;margin: 0 auto;">
			  <img src="../images/id_card/<?php if($row['id_card']!=""){ echo $row['id_card']; } else { echo "default/ni.jpg"; } ?>" class="w3-hover-shadow w3-border w3-padding" alt="<?php echo $row['name']; ?>" style="max-width:160px;max-height:150px;">
			  <div class="w3-container w3-center" style="margin:0px;padding:0px 5px 5px 5px;">
				<p class="w3-medium" style="margin:0px;padding:0px;color:black;"> Student ID </p>
			  </div>
			</div>
			<div class="w3-container" style="margin-top:15px;">
			</div>
		    <div class="w3-row w3-section w3-medium">
			    <div class="w3-col" style="width:50px;">
			        Status:
			    </div>
			    <div class="w3-rest">
    			    <select class="w3-input w3-border" id="ind_status_<?php echo $row['id']; ?>">
    			        <option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
    			        <?php
    			            if($row['status']!='active')
    			            {
    			        ?>
    			            <option value="active">active</option>
    			        <?php
    			            }
    			        ?>
    			        <?php
    			            if($row['status']!='inactive')
    			            {
    			        ?>
    			            <option value="inactive">inactive</option>
    			        <?php
    			            }
    			        ?>
    			        <?php
    			            if($row['status']!='rejected')
    			            {
    			        ?>
    			            <option value="rejected">rejected</option>
    			        <?php
    			            }
    			        ?>
    			    </select>
			    </div>
			</div>
			<p class="w3-center">
        	    <button onclick="update_individual(<?php echo $row['id']; ?>)" class="w3-button w3-section w3-logo-color w3-ripple w3-round w3-small w3-hover-black"> <i class="fa fa-spinner fa-spin" id="update_login_loading" style="display:none;"></i> Update </button>
        	</p>
			<div class="w3-container" style="margin-top:20px;">
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
			
			        <div class="w3-container" style="margin-top:5px;">
        			</div>
        			<p class="w3-medium">Team Name: <font color="purple"><?php echo $row['team_name']; ?></font></p>
        			<p class="w3-medium">Team Members: <font color="#008080"><?php echo $row['members']; ?></font></p>
        			<p class="w3-medium">Join Time: <font color="#008080"><?php echo $row['join_date']; ?></font></p>
        			<p class="w3-medium">Bkash: <font color="red"><?php echo $row['bkash_no']; ?></font></p>
        			<p class="w3-medium">Bkash TRX ID: <font color="red"><?php echo $row['bkash_trx']; ?></font></p>
			
			
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
						  <img src="../images/coach/<?php if($row3['image']!=""){ echo $row3['image']; } else { echo "default/ni.jpg"; } ?>" class="w3-hover-shadow w3-border w3-padding" alt="<?php echo $row3['name']; ?>" style="max-width:160px;max-height:150px;">
						  <div class="w3-container w3-center" style="margin:0px;padding:0px 5px 5px 5px;">
							<p class="w3-medium" style="margin:0px;padding:0px;color:black;"><?php echo $row3['name']; ?></p>
						  </div>
						</div> 
	
				<?php
					}
				?>
				</div>
				
			</div>
			
			<i class="fa fa-arrow-right w3-xlarge w3-tlcolor" style="margin-top:10px;"> Information: </i>
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
						<div class="w3-card-4 w3-margin w3-padding" style="width:100%;width:190px;height:190px;float:left;">
						    <p class="w3-small" style="margin:0px;padding:0px;color:black;">Tshirt Size: <font color="#008080"><?php echo $row3['tsize']; ?></font></p>
						    <p class="w3-small" style="margin:0px;padding:0px;color:black;">Email: <font color="blue"><?php echo $row3['email']; ?></font></p>
						    <p class="w3-small" style="margin:0px;padding:0px;color:black;">Mobile: <font color="blue"><?php echo $row3['mobile']; ?></font></p>
						  	<p class="w3-small" style="margin:0px;padding:0px;color:black;">Institute: <font color="#008080"><?php echo $row3['institute']; ?></font></p>
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
						  <img src="../images/participants/<?php if($row3['image']!=""){ echo $row3['image']; } else { echo "default/ni.jpg"; } ?>" class="w3-hover-shadow w3-border w3-padding" alt="<?php echo $row3['name']; ?>" style="max-width:160px;max-height:150px;">
						  <div class="w3-container w3-center" style="margin:0px;padding:0px 5px 5px 5px;">
							<p class="w3-medium" style="margin:0px;padding:0px;color:black;"><?php echo $sl.') '.$row3['name']; ?></p>
						  </div>
						</div> 
	
				<?php
					}
				?>
				</div>
				
			</div>
			<i class="fa fa-arrow-right w3-xlarge w3-tlcolor" style="margin-top:10px;"> Student ID: </i>
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
						  <img src="../images/id_card/<?php if($row3['id_card']!=""){ echo $row3['id_card']; } else { echo "default/ni.jpg"; } ?>" class="w3-hover-shadow w3-border w3-padding" alt="<?php echo $row3['name']; ?>" style="max-width:160px;max-height:150px;">
						  <div class="w3-container w3-center" style="margin:0px;padding:0px 5px 5px 5px;">
							<p class="w3-medium" style="margin:0px;padding:0px;color:black;"><?php echo $sl.') '.$row3['name']; ?></p>
						  </div>
						</div> 
	
				<?php
					}
				?>
				</div>
				
			</div>
			
			<i class="fa fa-arrow-right w3-xlarge w3-tlcolor" style="margin-top:10px;"> Information: </i>
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
						<div class="w3-card-4 w3-margin w3-padding" style="width:100%;width:190px;height:190px;float:left;">
						    <p class="w3-small" style="margin:0px;padding:0px;color:black;">Tshirt Size: <font color="#008080"><?php echo $row3['tsize']; ?></font></p>
						    <p class="w3-small" style="margin:0px;padding:0px;color:black;">Email: <font color="blue"><?php echo $row3['email']; ?></font></p>
						    <p class="w3-small" style="margin:0px;padding:0px;color:black;">Mobile: <font color="blue"><?php echo $row3['mobile']; ?></font></p>
						  	<p class="w3-small" style="margin:0px;padding:0px;color:black;">Institute: <font color="#008080"><?php echo $row3['institute']; ?></font></p>
						</div> 
	
				<?php
					}
				?>
				</div>
				
			</div>
			
			<div class="w3-row w3-section w3-medium" style="max-width:400px;margin:0 auto;">
			    <div class="w3-col w3-large" style="width:60px;">
			        Status:
			    </div>
			    <div class="w3-rest">
    			    <select class="w3-input w3-border" id="team_status_val_<?php echo $row['id']; ?>">
    			        <option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
    			        <?php
    			            if($row['status']!='active')
    			            {
    			        ?>
    			            <option value="active">active</option>
    			        <?php
    			            }
    			        ?>
    			        <?php
    			            if($row['status']!='inactive')
    			            {
    			        ?>
    			            <option value="inactive">inactive</option>
    			        <?php
    			            }
    			        ?>
    			        <?php
    			            if($row['status']!='rejected')
    			            {
    			        ?>
    			            <option value="rejected">rejected</option>
    			        <?php
    			            }
    			        ?>
    			    </select>
			    </div>
			</div>
			
			<p class="w3-center">
        	    <button onclick="update_team(<?php echo $row['id']; ?>)" class="w3-button w3-section w3-logo-color w3-ripple w3-round w3-medium w3-hover-black"> <i class="fa fa-spinner fa-spin" id="update2_login_loading" style="display:none;"></i> Update </button>
        	</p>
			
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