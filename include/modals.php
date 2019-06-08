<!-- Sponsors Modal -->
<div id="sponsors" class="w3-modal">
	<div class="w3-modal-content w3-animate-zoom">
		<header class="w3-container w3-black">
			<h1> Sponsors Details </h1>
			<span onclick="document.getElementById('sponsors').style.display='none'"
				class="w3-button w3-display-topright"><i class="fa fa-close"></i></span>		</header>
		<div class="w3-container w3-padding" style="height:400px;overflow-y:scroll;">
			
			<?php
				try
				{
					$stmt = $conn->prepare("select * from sponsors where status='active' order by id asc ");
					$stmt->execute();
					$list = $stmt->fetchAll();
					$check=0;
					foreach($list as $row)
					{
						$check++;
			?>
						<button onclick="sponsor_modal('<?php echo $row['title'].$row['id']; ?>')" class="w3-margin-top w3-btn w3-block w3-logo-color w3-left-align"><p class="w3-large" style="margin:0px;padding:0px;"><i class="fa fa-bars"> <?php echo $row['title']; ?></i></p></button>
						<div id="<?php echo $row['title'].$row['id']; ?>" class="w3-container w3-hide">
							<div class="w3-container" style="margin:0 auto;width:100%;max-width:765px;">
								<?php
									$stmt2 = $conn->prepare("select * from sponsor_details where sponsor_id='$row[id]' AND status='active' order by id asc ");
									$stmt2->execute();
									$list2 = $stmt2->fetchAll(); 
									$check2=0;
									foreach($list2 as $row2)
									{
										$check2++;
								?>
										<div class="w3-card-4 w3-margin" style="width:100%;max-width:150px;float:left;">
										  <img src="images/sponsors/<?php if($row2['image']!=""){ echo $row2['image']; } else { echo "default/ni.jpg"; } ?>" class="w3-hover-shadow w3-border w3-padding" alt="<?php echo $row2['title']; ?>" style="width:100%;">
										  <div class="w3-container w3-center" style="margin:0px;padding:0px 5px 5px 5px;">
											<p class="w3-medium" style="margin:0px;padding:0px;color:black;"><?php echo $row2['title']; ?></p>
										  </div>
										</div> 
								<?php
									}
									if($check2==0)
										include("include/wait.php");
								?>
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
		<footer class="w3-container w3-black">
			<p> &nbsp </p>
		</footer>
	</div>
</div>

<!-- Contact Us Modal -->
<div id="contact" class="w3-modal">
	<div class="w3-modal-content w3-animate-zoom">
		<header class="w3-container w3-black">
			<h1> Contact with Us </h1>
			<span onclick="document.getElementById('contact').style.display='none'"
				class="w3-button w3-display-topright"><i class="fa fa-close"></i></span>		</header>
		<div class="w3-container w3-padding" style="height:400px;overflow-y:scroll;">
			<div class="w3-container">
				<div class="w3-container w3-logo-color w3-padding">
					<p class="w3-large" style="padding:0px;margin:0px;"><i class="fa fa-id-card-o"> Co-ordinator</i></p>
				</div>
				
				<?php
				try
				{
					$stmt = $conn->prepare("select * from contact where status='active' order by id asc ");
					$stmt->execute();
					$list = $stmt->fetchAll(); 
					$check=0;
					foreach($list as $row)
					{
						$check++;
				?>
						<div class="w3-container w3-margin-top">
							<div class="w3-card w3-hover-shadow w3-margin-bottom">
								<header class="w3-container w3-light-grey">
								  <h3><?php echo $row['name']; ?></h3>
								</header>
								<div class="w3-container">
								  <img src="images/contact/<?php if($row['image']!=""){ echo $row['image']; } else { echo "default/ni.jpg"; }?>" alt="<?php echo $row['name']; ?>" class="w3-margin-top w3-margin-right w3-margin-bottom w3-left w3-round w3-border w3-padding" style="width:100%;max-width:120px;">
								  <p class="w3-left-align"><i class="fa fa-arrow-right"> Event: 
								  <?php
									$stmt2 = $conn->prepare("select * from events where id='$row[event_id]' order by id asc ");
									$stmt2->execute();
									$list2 = $stmt2->fetchAll(); 
									foreach($list2 as $row2)
									{
										echo $row2['title']; 
									}
								  ?>
								  </i></p>
								  <p class="w3-left-align"><i class="fa fa-mobile"> <?php echo $row['mobile']; ?></i></p>
								  <p class="w3-left-align"><i class="fa fa-envelope"> <?php echo $row['email']; ?></i></p>
								  <p class="w3-left-align"><i class="fa fa-square"> <?php echo $row['designation']; ?></i></p>
								</div>
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
			
			
			<div class="w3-container w3-margin-top">
				<div class="w3-container w3-logo-color w3-padding">
					<p class="w3-large" style="padding:0px;margin:0px;"><i class=" 	fa fa-location-arrow"> Location</i></p>
				</div>
				<div class="w3-round w3-container w3-hover-shadow w3-margin-bottom w3-margin-top" id="map" style="margin:0 auto;height:300px;width:90%;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1507657323092!6m8!1m7!1spfmQ1T4pXm-CLC6NUTIQEQ!2m2!1d24.89031180874522!2d91.86094460489454!3f174.7169178846706!4f10.331199032574744!5f0.7820865974627469" style="width:100%;height:100%;border:0;" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>

		<footer class="w3-container w3-black">
			<p> &nbsp </p>
		</footer>
	</div>
</div>


<!-- Developer Modal -->
<div id="developer" class="w3-modal">
	<div class="w3-modal-content w3-animate-zoom" style="width:100%;max-width:450px;">
		<header class="w3-container w3-black">
			<p> Developer Details </p>
			<span onclick="document.getElementById('developer').style.display='none'"
				class="w3-button w3-display-topright">&times;</span>		</header>
		<div class="w3-container" style="width:100%;max-width:450px;">
			<div class="w3-card w3-hover-shadow w3-margin">
				<header class="w3-container w3-light-grey">
				  <h3>Mir Lutfur Rahman</h3>
				</header>
				<div class="w3-container">
				  <img src="images/system/developer.jpg" alt="Developer Image" class="w3-margin-top w3-margin-right w3-margin-bottom w3-left w3-round w3-border w3-padding" style="width:100%;max-width:95px;">
				  <p class="w3-left-align">6th Batch.</p>
				  <p class="w3-left-align">CSE Department.</p>
				  <p class="w3-left-align">North East University Bangladesh.</p>
				</div>
			</div>	
		</div>
		<footer class="w3-container w3-black">
			<p> &nbsp </p>
		</footer>
	</div>
</div>


<!--- Events Modal -->
<div id="events" class="w3-modal">
	<div id="event_details" class="w3-modal-content w3-animate-zoom">
		<header class="w3-container w3-black">
			<h1>Our Events</h1>
			<span onclick="document.getElementById('events').style.display='none'"
				class="w3-button w3-display-topright"><i class="fa fa-close"></i></span>		
		</header>
		
		<div class="w3-display-container" style="height:400px;overflow-y:scroll;">
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
							<img src="images/event/<?php if($row['event_logo']!=""){ echo $row['event_logo']; } else { echo "default/ni.jpg"; } ?>" class="w3-round w3-hover-grayscale w3-border w3-padding w3-logo-color" style="max-height:135px;float:left;width:100%;max-width:400px;margin-bottom:2px;">
							<div class="w3-container w3-pading w3-margin-left" style="float:left;">
								<h2 class="w3-titlefont"><?php echo $row['title']; ?></h2>
								<p class="w3-blink w3-medium" style="display:none;margin:0px;" id="ms1g<?php echo $row['id']; ?>">Registration Closed!!</p>
								<p class="w3-blink w3-medium" style="display:none;margin:0px;" id="ms2g<?php echo $row['id']; ?>">Please Wait!! Coming Soon ...</p>
								<a <?php if($row['event_details_pdf']!="") { ?> href="file/event/<?php echo $row['event_details_pdf']; ?>" <?php } ?> target="_blank"> <button class="w3-button w3-tiny w3-round w3-logo-color w3-hover-black">Event Details</button></a>
								<?php if($row['registration_status']==0){ ?>
									<button onclick="get_form(<?php echo $row['id']; ?>)" class="w3-button w3-tiny w3-round w3-logo-color w3-hover-black">Register Now</button>
								<?php } else if($row['registration_status']==1){ ?>
									<button onclick="document.getElementById('ms1g<?php echo $row['id']; ?>').style.display='block'" class="w3-button w3-tiny w3-round w3-logo-color w3-hover-black">Register Now</button>
								<?php } else { ?>
									<button onclick="document.getElementById('ms2g<?php echo $row['id']; ?>').style.display='block'" class="w3-button w3-tiny w3-round w3-logo-color w3-hover-black">Register Now</button>
								<?php } ?>
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
		<footer class="w3-container w3-black">
			<p> &nbsp </p>
		</footer>
	</div>
	
	
	<?php include("include/registration_forms.php"); ?>
	
</div>


