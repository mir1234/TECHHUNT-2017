<div class="w3-container" id="hiding_team" style="max-width:1000px;margin: 0 auto;display:none;">
    <?php include("include/mem_details.php"); ?>
	
	<!--- Event names -->
	<?php
		try
		{
			$stmt = $conn->prepare("select * from events where status='active' order by id asc ");
			$stmt->execute();
			$list = $stmt->fetchAll(); 
			$check=0;
			foreach($list as $row)
			{
				$check++;
	?>
				<div class="w3-round w3-panel w3-light-gray w3-xxlarge w3-border-black w3-border w3-topbar w3-bottombar w3-margin w3-hover-shadow w3-padding">
					<div class="w3-container">
						<img src="../images/event/<?php if($row['event_logo']!=""){ echo $row['event_logo']; } else { echo "default/ni.jpg"; } ?>" class="w3-round w3-hover-grayscale w3-border w3-padding w3-logo-color" style="max-height:135px;float:left;width:100%;max-width:400px;margin-bottom:2px;">
						<div class="w3-container w3-pading w3-margin-left" style="float:left;">
							<h2 class="w3-titlefont"><?php echo $row['title']; ?></h2>
							<a <?php if($row['event_details_pdf']!="") { ?> href="../file/event/<?php echo $row['event_details_pdf']; ?>" <?php } ?> target="_blank"> <button class="w3-button w3-tiny w3-round w3-logo-color w3-hover-black">Event Details</button></a>
							<button onclick="get_teams(<?php echo $row['id']; ?>)" class="w3-button w3-tiny w3-round w3-logo-color w3-hover-black">Registered <?php if($row['participation_status']=='team'){ echo 'Teams'; } else { echo 'Participants'; } ?></button>
						</div>
					</div>
					<div class="w3-container w3-margin w3-white" id="team_box<?php echo $row['id']; ?>" style="display:none;">
						<header class="w3-container" style="margin:0px; padding:0px;">
							<p class="w3-tlcolor w3-xlarge w3-myfont1" style="margin:0px;float:left; "><u><?php if($row['participation_status']=="team") { echo 'Team List'; } else { echo 'Participant List'; } 
							
							    if($row['participation_status']=="team")
								{
							        $stmt22 = $conn->prepare("select * from team where event_id='$row[id]' order by id asc ");
									$stmt22->execute();
									$list22 = $stmt22->fetchAll(); 
									$sl2=0;
									foreach($list22 as $row22)
									{
										$sl2++;
									}
									echo '<font color="black"> ('.$sl2.')</font>';
								}
								else
								{
								    $stmt22 = $conn->prepare("select * from individual_details where event_id='$row[id]' order by id asc ");
									$stmt22->execute();
									$list22 = $stmt22->fetchAll(); 
									$sl2=0;
									foreach($list22 as $row22)
									{
										$sl2++;
									}
									echo '<font color="black"> ('.$sl2.')</font>'; 
								}
							
							?></u>:</p>
							<span  style="float: right;" onclick="document.getElementById('team_box<?php echo $row['id']; ?>').style.display='none'" class=" w3-button w3-tlcolor w3-small w3-hover-black"><i class="fa fa-close"></i></span>
						</header>
						<table class="w3-table-all w3-small">
							<thead>
							  <tr class="w3-teal">
								<th style="border: 1px solid black;text-align:center;">SL</th>
								<th style="border: 1px solid black;text-align:center;"><?php if($row['participation_status']=="team") { echo 'Team Name'; } else { echo 'Participant Name'; } ?></th>
								<th style="border: 1px solid black;text-align:center;">Institution Name</th>
								<th style="border: 1px solid black;text-align:center;">Status</th>
								<th style="border: 1px solid black;text-align:center;">Details</th>
							  </tr>
							</thead>
							<?php
								if($row['participation_status']=="team")
								{
									$stmt2 = $conn->prepare("select * from team where event_id='$row[id]' order by id asc ");
									$stmt2->execute();
									$list2 = $stmt2->fetchAll(); 
									$sl=0;
									foreach($list2 as $row2)
									{
										$sl++;
							?>
										 <tr>
										  <td style="border: 1px solid black;text-align:center;"><?php echo $sl; ?></td>
										  <td style="border: 1px solid black;"><?php echo $row2['team_name']; ?></td>
										  <td style="border: 1px solid black;">
											  <?php
													$stmt3 = $conn->prepare("select * from team_details where team_id='$row2[id]' order by id asc ");
													$stmt3->execute();
													$list3 = $stmt3->fetchAll(); 
													foreach($list3 as $row3)
													{
														$institute=$row3['institute'];
													}
													echo $institute;
											  ?>
										 </td>
										 <td id="team_status_<?php echo $row2['id']; ?>" style="border: 1px solid black;text-align:center;">
											<?php
												if($row2['status']=='active')
												{
													echo '<button class="w3-button w3-text-green w3-white w3-border w3-border-green w3-tiny w3-round-small w3-padding-small">Accepted</button>';
												}
												else if($row2['status']=='inactive')
												{
													echo '<button class="w3-button w3-text-blue w3-white w3-border w3-border-blue w3-tiny w3-round-small w3-padding-small">Pending</button>';
												}
												else
												{
													echo '<button class="w3-button w3-text-red w3-white w3-border w3-border-red w3-tiny w3-round-small w3-padding-small">Rejected</button>';
												}
											?>
										 </td>
										 <td style="border: 1px solid black;text-align:center;">
											<button onclick="get_team_details(<?php echo $row2['id']; ?>)" class="w3-button w3-tiny w3-round w3-logo-color w3-hover-black w3-padding-small">View Details</button>
											<?php 
											    if($row2['status']=='rejected')
											    {
											?>
											<button onclick="" class="w3-button w3-tiny w3-round w3-red w3-hover-black w3-padding-small">Delete</button>
											<?php
											    }
											?>
											    
										 </td>
										</tr>
							<?php
									}
								}
								else
								{
									$stmt2 = $conn->prepare("select * from individual_details where event_id='$row[id]' order by id asc ");
									$stmt2->execute();
									$list2 = $stmt2->fetchAll(); 
									$sl=0;
									foreach($list2 as $row2)
									{
										$sl++;
							?>
										<tr>
										  <td style="border: 1px solid black;text-align:center;"><?php echo $sl; ?></td>
										  <td style="border: 1px solid black;"><?php echo $row2['name']; ?></td>
										  <td style="border: 1px solid black;"><?php echo $row2['institute']; ?></td>
										  <td id="individual_status_<?php echo $row2['id']; ?>" style="border: 1px solid black;text-align:center;">
											<?php
												if($row2['status']=='active')
												{
													echo '<button class="w3-button w3-text-green w3-tiny w3-white w3-border w3-border-green w3-round-small  w3-padding-small">Accepted</button>';
												}
												else if($row2['status']=='inactive')
												{
													echo '<button class="w3-button w3-text-blue w3-tiny w3-white w3-border w3-border-blue w3-round-small  w3-padding-small">Pending</button>';
												}
												else
												{
													echo '<button class="w3-button w3-text-red w3-tiny w3-white w3-border w3-border-red w3-round-small  w3-padding-small">Rejected</button>';
												}
											?>
										  </td>
										  <td style="border: 1px solid black;text-align:center;">
											<button onclick="get_individual_details(<?php echo $row2['id']; ?>)" class="w3-button w3-tiny w3-round w3-logo-color w3-hover-black  w3-padding-small">View Details</button>
										    <?php 
											    if($row2['status']=='rejected')
											    {
											?>
											<button onclick="" class="w3-button w3-tiny w3-round w3-red w3-hover-black w3-padding-small">Delete</button>
											<?php
											    }
											?>
										  </td>
										</tr>
							<?php
									}
								}
							?>
						</table>
					</div>
				</div>
				
	<?php
			}
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
		if($check==0)
			include("include/wait.php");
	?>
</div>