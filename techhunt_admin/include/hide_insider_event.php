<div class="w3-container" id="hiding_event" style="max-width:1000px;margin: 0 auto;display:none;">
	<!--- Event names -->
	<?php
		try
		{
			$stmt = $conn->prepare("select * from events order by id asc ");
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
    						<?php    
    						    if($row['status']=='active')
    							{
    								echo '<button class="w3-button w3-text-green w3-white w3-border w3-border-green w3-tiny w3-round w3-hover-black">Active</button>';
    							}
    							else if($row['status']=='inactive')
    							{
    								echo '<button class="w3-button w3-text-red w3-white w3-border w3-border-red w3-tiny w3-round w3-hover-black">Inactive</button>';
    							}
    						?>
    						<button class="w3-button w3-tiny w3-round w3-teal w3-hover-black">Update Details</button>
						</div>
					</div>
				</div>
	<?php
			}
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	?>
</div>