<div class="w3-container" id="phase1_<?php echo $row['id']; ?>" >							
	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-bars w3-tlcolor"></i></div>
		<div class="w3-rest">
		  <input class="w3-input w3-border" id="team_name<?php echo $row['id']; ?>" type="text" placeholder="Enter Your Full Team Name." required>
		</div>
	</div>
	<div class="w3-row w3-section" id="team_namemsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter a valid Team Name.</p>
		</div>
	</div>
	
	
	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user w3-tlcolor"></i></div>
		<div class="w3-col w3-left-align w3-padding w3-tlcolor" style="width:100%;max-width:150px;">
			Team Members:
		</div>
		<div class="w3-rest">
		  <select id="team_members<?php echo $row['id']; ?>" class="w3-input w3-border" required>
			 <option value="">Select ...</option>
			<?php
				$stmt6 = $conn->prepare("select * from events where status='active' AND id='$row[id]' order by id asc ");
				$stmt6->execute();
				$list6 = $stmt6->fetchAll();
				foreach($list6 as $row6)
				{
					$min=$row6['members_min'];
					$max=$row6['members_max'];
				}
				for($i=$min;$i<=$max;$i++)
				{
					echo '<option value="'.$i.'">'.$i.'</option>';
				}
			?>
		  </select>							  
		</div>
	</div>
	
	<div class="w3-row w3-section" id="team_membersmsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please select your total number of team members.</p>
		</div>
	</div>
	
	
	<p class="w3-center">
	<button  onclick="next1(<?php echo $row['id']; ?>, <?php echo $row['coach_status']; ?>)" class="w3-button w3-section w3-logo-color w3-ripple w3-round w3-tiny w3-hover-black"> Next </button>
	</p>
</div>