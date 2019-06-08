<div class="w3-container" id="phase3_mem_<?php echo $row['id']; ?>" style="display:none;">
	<div class="w3-row w3-section">
	  <div class="w3-col w3-left" style="width:230px"><i class="w3-xlarge fa fa-arrow-right w3-tlcolor"> Member (2) Details:</i></div>
		<div class="w3-rest">
		</div>
	</div>
	
	
	<div class="w3-row w3-section">
		<div class="w3-half w3-center" id="mem2_picture_preview<?php echo $row['id']; ?>" style="display:none;">
			<div class="w3-center w3-white w3-card w3-padding-8 w3-hover-shadow" style="height:100%;width:100%;max-height:120px;max-width:80px;margin:0 auto;">
				<img src="#" id="mem2_picture_pre<?php echo $row['id']; ?>" style="height:100%;width:100%;max-height:100px;max-width:70px;">
				<p class="w3-tiny" style="margin:0px;">Picture</p>
			</div>
		</div>
		<div class="w3-half w3-center" id="mem2_id_preview<?php echo $row['id']; ?>" style="display:none;">
			<div class="w3-center w3-white w3-card w3-padding-8 w3-hover-shadow" style="height:100%;width:100%;max-height:120px;max-width:80px;margin:0 auto;">
				<img id="mem2_id_pre<?php echo $row['id']; ?>" src="#" style="height:100%;width:100%;max-height:100px;max-width:70px;">
				<p class="w3-tiny" style="margin:0px;">Student ID</p>
			</div>
		</div>
	</div>


	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user w3-tlcolor"></i></div>
		<div class="w3-rest">
		  <input class="w3-input w3-border" id="mem2_name<?php echo $row['id']; ?>" type="text" placeholder="Enter Your Full Name." required>
		</div>
	</div>

	<div class="w3-row w3-section" id="mem2_namemsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter a valid name.</p>
		</div>
	</div>

	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o w3-tlcolor"></i></div>
		<div class="w3-rest">
		  <input class="w3-input w3-border" id="mem2_email<?php echo $row['id']; ?>" type="email" placeholder="Enter Your Email Address." required>
		</div>
	</div>

	<div class="w3-row w3-section" id="mem2_emailmsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter a valid email address.</p>
		</div>
	</div>

	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone w3-tlcolor"></i></div>
		<div class="w3-rest">
		  <input class="w3-input w3-border" id="mem2_mobile<?php echo $row['id']; ?>" type="number" placeholder="Enter Your Mobile No (11 digits)." required>
		</div>
	</div>

	<div class="w3-row w3-section" id="mem2_mobilemsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter a valid mobile number (11 digits).</p>
		</div>
	</div>

	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-home w3-tlcolor"></i></div>
		<div class="w3-rest">
		  <input class="w3-input w3-border" id="mem2_institute<?php echo $row['id']; ?>" type="text" placeholder="Enter Your Institute Name." required>
		</div>
	</div>

	<div class="w3-row w3-section" id="mem2_institutemsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter a valid institute name.</p>
		</div>
	</div>

	
	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-image w3-tlcolor"></i></div>
		<div class="w3-col w3-left-align w3-padding w3-tlcolor" style="width:100%;max-width:150px;">
			Your Picture:
		</div>
		<div class="w3-rest">
		  <input class="w3-input w3-border" name="mem2_image<?php echo $row['id']; ?>" id="mem2_image<?php echo $row['id']; ?>" onchange="member_preview_picture(this,<?php echo $row['id']; ?>,2);document.getElementById('mem2_picture_preview<?php echo $row['id']; ?>').style.display='block';" type="file" placeholder="Upload Your Picture." title="Upload Your Picture." required>
		</div>
	</div>

	<div class="w3-row w3-section" id="mem2_imagemsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter a valid Picture of (JPEG,JPG,PNG) format.</p>
		</div>
	</div>


	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-file w3-tlcolor"></i></div>
		<div class="w3-col w3-left-align w3-padding w3-tlcolor" style="width:100%;max-width:150px;">
			Your Student ID:
		</div>
		<div class="w3-rest">
		  <input class="w3-input w3-border" name="mem2_id_card<?php echo $row['id']; ?>" id="mem2_id_card<?php echo $row['id']; ?>" onchange="member_preview_id(this,<?php echo $row['id']; ?>,2);document.getElementById('mem2_id_preview<?php echo $row['id']; ?>').style.display='block';" type="file" placeholder="Upload Your Student ID." title="Upload Your Student ID." required>
		</div>
	</div>

	<div class="w3-row w3-section" id="mem2_id_cardmsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter a valid Student ID of (JPEG,JPG,PNG) format.</p>
		</div>
	</div>
	
	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-bars w3-tlcolor"></i></div>
		<div class="w3-col w3-left-align w3-padding w3-tlcolor" style="width:100%;max-width:150px;">
			Your T-shirt Size:
		</div>
		<div class="w3-rest">
		  <select id="mem2_t_shirt_size<?php echo $row['id']; ?>" class="w3-input w3-border" required>
			 <option value="">Select ...</option>
			<?php
				$stmt6 = $conn->prepare("select * from tshirt_size where status='active' order by id asc ");
				$stmt6->execute();
				$list6 = $stmt6->fetchAll();
				foreach($list6 as $row6)
				{
					echo '<option value="'.$row6['tsize'].'">'.$row6['tsize'].'</option>';
				}
			?>
		  </select>							  
		</div>
	</div>

	<div class="w3-row w3-section" id="mem2_t_shirt_sizemsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please select a valid T-shirt size.</p>
		</div>
	</div>


	
	<div class="w3-row w3-section">
		<div class="w3-col w3-half">
			<p class="w3-center">
				<button  onclick="back_mem3(<?php echo $row['id']; ?>, <?php echo $row['coach_status']; ?>, 2)" class="w3-button w3-section w3-logo-color w3-ripple w3-round w3-tiny w3-hover-black"> Back </button>
			</p>
		</div>
		<div class="w3-rest">
			<p class="w3-center">
				<button  onclick="next_mem3(<?php echo $row['id']; ?>, <?php echo $row['coach_status']; ?>, 2)" class="w3-button w3-section w3-logo-color w3-ripple w3-round w3-tiny w3-hover-black"> Next </button>
			</p>
		</div>
	</div>
</div>