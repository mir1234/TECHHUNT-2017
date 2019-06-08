<?php
try
{
	$stmt = $conn->prepare("select * from events where status='active' order by id asc ");
	$stmt->execute();
	$list = $stmt->fetchAll(); 
	foreach($list as $row)
	{
?>
	<div id="reg_form<?php echo $row['id']; ?>" style="display:none;" class="w3-modal-content">
		<header class="w3-container w3-black">
			<h1>Registration Form</h1>
			<span onclick="reg_form_close(<?php echo $row['id']; ?>)"
				class="w3-button w3-display-topright"><i class="fa fa-close"></i></span>		
		</header>
		<div class="w3-container w3-center w3-padding-32" style="height:400px;overflow-y:scroll;">
			<div class="w3-container w3-card-4 w3-light-grey" style="width:90%;margin:0 auto;">
				<h2 class="w3-center w3-titlefont w3-tlcolor"> <?php echo $row['title']; ?> </h2>
				
				<div id="form_visible<?php echo $row['id']; ?>" class="w3-container w3-center" style="display:none;">
					<div class="w3-container" id="woo<?php echo $row['id']; ?>">
						<div class="w3-border" style="margin-top:50px;">
							<div class="w3-teal" id="image_prog_<?php echo $row['id']; ?>" style="height:24px;width:0%"></div>
						</div> 
						<p style="margin:0px;padding:0px;" id="image_prog_ti_<?php echo $row['id']; ?>">Please Wait!! Uploading Picture (0%)...</p>
						<div class="w3-border" style="margin-top:50px;">
							<div class="w3-teal" id="id_prog_<?php echo $row['id']; ?>" style="height:24px;width:0%"></div>
						</div> 
						<p style="margin:0px;padding:0px;" id="id_prog_ti_<?php echo $row['id']; ?>" >Please Wait!! Uploading ID Card (0%)...</p>
					</div>
					<div class="w3-container w3-center" id="individual_done_<?php echo $row['id']; ?>" style="display:none;">
						<img src="images/system/done.ico" style="height:100px; width:100px;margin-top:50px;">
					</div>
					
					<p style="margin:50px 0px 50px 0px;" class="w3-tlcolor w3-xlarge" id="final_msg<?php echo $row['id']; ?>"><font color="red">Please Wait!!!</font></p>
				</div>
				<div id="form_hidden<?php echo $row['id']; ?>" class="w3-container w3-center">
				<!-- Individual Registration -->				
				<?php
					if($row['participation_status']=='individual')
					{
						include("include/individual_form.php");
					}
					else
					{
				?>
						<!-- Phase 1 -->
						<?php include("include/phase1.php"); ?>
						<!--   --->
						
						<!--- Phase 2 For Coach--->
						<?php include("include/phase2_coach.php"); ?>
						<!--- -->
						
						<!--- Phase 2 For Members      First Member   -->
						<?php include("include/phase2_member.php"); ?>
						<!--- -->
						
						<!--- Phase 3 For Members      Second Member   -->
						<?php include("include/phase3_member.php"); ?>
						<!--- -->
						
						<!--- Phase 4 For Members      Third Member   -->
						<?php include("include/phase4_member.php"); ?>
						<!--- -->
						
						<!--- Phase 5 For Members      Fourth Member   -->
						<?php include("include/phase5_member.php"); ?>
						<!--- -->
						
						<!--- Phase 6 For Members      Fifth Member   -->
						<?php include("include/phase6_member.php"); ?>
						<!--- -->
						
						<!--- Phase 7 For Payment Details   -->
						<?php include("include/phase7.php"); ?>
						<!--- -->
						
						<!--- Phase 8 For Upload Details   -->
						<?php include("include/phase8.php"); ?>
						<!--- -->
						
						
						
				<?php
					}
				?>
				</div>
				
			</div>
			<div class="w3-container">
				&nbsp
			</div>
		</div>
		
		<footer class="w3-container w3-black">
			<p> &nbsp </p>
		</footer>
	</div>
<?php
	}
}
catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}

?>