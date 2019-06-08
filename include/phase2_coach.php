<div class="w3-container" id="phase2_coa_<?php echo $row['id']; ?>" style="display:none;" >
	<div class="w3-row w3-section">
	  <div class="w3-col w3-left" style="width:170px"><i class="w3-xlarge fa fa-arrow-right w3-tlcolor"> Coach Details:</i></div>
		<div class="w3-rest">
		</div>
	</div>
	
	<div class="w3-row w3-section">
		<div class="w3-center" id="coach_picture_preview<?php echo $row['id']; ?>" style="display:none;">
			<div class="w3-center w3-white w3-card w3-padding-8 w3-hover-shadow" style="height:100%;width:100%;max-height:120px;max-width:80px;margin:0 auto;">
				<img src="#" id="coach_picture_pre<?php echo $row['id']; ?>" style="height:100%;width:100%;max-height:100px;max-width:70px;">
				<p class="w3-tiny" style="margin:0px;">Picture</p>
			</div>
		</div>
	</div>
	
	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user w3-tlcolor"></i></div>
		<div class="w3-rest">
		  <input class="w3-input w3-border" id="coach_name<?php echo $row['id']; ?>" type="text" placeholder="Enter Your Coach Full Name." required>
		</div>
	</div>
	
	<div class="w3-row w3-section" id="coach_namemsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter a valid Coach Name.</p>
		</div>
	</div>
	
	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o w3-tlcolor"></i></div>
		<div class="w3-rest">
		  <input class="w3-input w3-border" id="coach_email<?php echo $row['id']; ?>" type="email" placeholder="Enter Your Coach Email Address." required>
		</div>
	</div>
	
	<div class="w3-row w3-section" id="coach_emailmsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter a valid email address of Coach.</p>
		</div>
	</div>
	
	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone w3-tlcolor"></i></div>
		<div class="w3-rest">
		  <input class="w3-input w3-border" id="coach_mobile<?php echo $row['id']; ?>" type="number" placeholder="Enter Your Coach Mobile No (11 digits)." required>
		</div>
	</div>
	
	<div class="w3-row w3-section" id="coach_mobilemsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter a valid mobile number of Coach(11 digits).</p>
		</div>
	</div>
	
	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-home w3-tlcolor"></i></div>
		<div class="w3-rest">
		  <input class="w3-input w3-border" id="coach_institute<?php echo $row['id']; ?>" type="text" placeholder="Enter Your Coach Designation with Institute Name." required>
		</div>
	</div>
	
	<div class="w3-row w3-section" id="coach_institutemsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter a valid Designation with institute name of Coach.</p>
		</div>
	</div>
	
	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-image w3-tlcolor"></i></div>
		<div class="w3-col w3-left-align w3-padding w3-tlcolor" style="width:100%;max-width:160px;">
			Coach Picture:
		</div>
		<div class="w3-rest">
		  <input class="w3-input w3-border" name="coach_image<?php echo $row['id']; ?>" id="coach_image<?php echo $row['id']; ?>" onchange="coach_preview_picture(this,<?php echo $row['id']; ?>);document.getElementById('coach_picture_preview<?php echo $row['id']; ?>').style.display='block';"  type="file" placeholder="Upload Your Coach Picture." title="Upload Your Coach Picture." required>
		</div>
	</div>
	
	<div class="w3-row w3-section" id="coach_imagemsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter a valid Picture of Coach(JPEG,JPG,PNG) format.</p>
		</div>
	</div>

	<div class="w3-row w3-section">
	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-bars w3-tlcolor"></i></div>
		<div class="w3-col w3-left-align w3-padding w3-tlcolor" style="width:100%;max-width:160px;">
			Coach T-shirt Size:
		</div>
		<div class="w3-rest">
		  <select id="coach_t_shirt_size<?php echo $row['id']; ?>" class="w3-input w3-border" required>
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
	
	<div class="w3-row w3-section" id="coach_t_shirt_sizemsg<?php echo $row['id']; ?>" style="display:none;">
		<div class="w3-col w3-pale-red">
			<p style="color:red;margin-left:10px;" class="w3-left">* Please select a valid T-shirt size.</p>
		</div>
	</div>

	<div class="w3-row w3-section">
		<div class="w3-col w3-half">
			<p class="w3-center">
				<button  onclick="back_coach1(<?php echo $row['id']; ?>, <?php echo $row['coach_status']; ?>)" class="w3-button w3-section w3-logo-color w3-ripple w3-round w3-tiny w3-hover-black"> Back </button>
			</p>
		</div>
		<div class="w3-rest">
			<p class="w3-center">
				<button  onclick="next_coach2(<?php echo $row['id']; ?>, <?php echo $row['coach_status']; ?>)" class="w3-button w3-section w3-logo-color w3-ripple w3-round w3-tiny w3-hover-black"> Next </button>
			</p>
		</div>
	</div>
</div>