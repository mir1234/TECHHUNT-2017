<div class="w3-container" id="phase7_<?php echo $row['id']; ?>" style="display:none;">

	<div class="w3-row w3-section">
	  <div class="w3-col w3-left" style="width:230px"><i class="w3-xlarge fa fa-arrow-right w3-tlcolor"> Payment Details:</i></div>
		<div class="w3-rest">
		</div>
	</div>

	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone w3-tlcolor"></i></div>
		<div class="w3-rest">
		  <input class="w3-input w3-border" id="team_bkash_mobile<?php echo $row['id']; ?>" type="number" placeholder="Enter Your Team(Sent Money) Bkash Mobile No (11 digits)." required>
		</div>
	</div>

	<div class="w3-row w3-section" id="team_bkash_mobilemsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter your Team valid (Sent money) Bkash Mobile No (11 digits).</p>
		</div>
	</div>


	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-arrow-right w3-tlcolor"></i></div>
		<div class="w3-rest">
		  <input class="w3-input w3-border" id="team_bkash_trx<?php echo $row['id']; ?>" type="text" placeholder="Enter Your Team (Sent Money) Bkash Trx ID." required>
		</div>
	</div>

	<div class="w3-row w3-section" id="team_bkash_trxmsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter your Team valid (Sent money) Bkash Trx ID.</p>
		</div>
	</div>
	
	<div class="w3-row w3-section">
		<div class="w3-col w3-half">
			<p class="w3-center">
				<button  onclick="back_mem7(<?php echo $row['id']; ?>, <?php echo $row['coach_status']; ?>)" class="w3-button w3-section w3-logo-color w3-ripple w3-round w3-tiny w3-hover-black"> Back </button>
			</p>
		</div>
		<div class="w3-rest">
			<p class="w3-center">
				<button  onclick="submit_team(<?php echo $row['id']; ?>, <?php echo $row['coach_status']; ?>)" class="w3-button w3-section w3-logo-color w3-ripple w3-round w3-tiny w3-hover-black"> Submit </button>
			</p>
		</div>
	</div>
</div>