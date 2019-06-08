<?php include("include/header.php"); ?>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2 w3-left-align w3-medium">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="gallery.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Gallery</a>
    <a style="cursor:pointer" onclick="document.getElementById('events').style.display='block'" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Events</a>
	<a href="file/schedule/<?php echo $schedule; ?>" target="_blank" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Schedule</a>
	<a href="team.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Teams</a>
	<a href="file/result/<?php echo $result; ?>" target="_blank" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Results</a>
	<a style="cursor:pointer" onclick="document.getElementById('sponsors').style.display='block'" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sponsors</a>
	<a style="cursor:pointer"  onclick="document.getElementById('contact').style.display='block'" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact</a>
	<a href="file/hotel/<?php echo $hotel; ?>" target="_blank" class="w3-right w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-hotel w3-blink"> Hotel Details in Sylhet</i></a>
   
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-medium">
    <a href="gallery.php" class="w3-bar-item w3-button w3-padding-large">Gallery</a>
    <a style="cursor:pointer" onclick="document.getElementById('events').style.display='block'" class="w3-bar-item w3-button w3-padding-large">Events</a>
    <a href="file/schedule/<?php echo $schedule; ?>" target="_blank" class="w3-bar-item w3-button w3-padding-large">Schedule</a>
    <a href="team.php" class="w3-bar-item w3-button w3-padding-large">Teams</a>
    <a href="file/result/<?php echo $result; ?>" target="_blank" class="w3-bar-item w3-button w3-padding-large">Results</a>
    <a style="cursor:pointer" onclick="document.getElementById('sponsors').style.display='block'"  class="w3-bar-item w3-button w3-padding-large">Sponsors</a>
    <a style="cursor:pointer"  onclick="document.getElementById('contact').style.display='block'" class="w3-bar-item w3-button w3-padding-large">Contact</a>
    <a href="file/hotel/<?php echo $hotel; ?>" target="_blank" class="w3-bar-item w3-button w3-padding-large"><i class="fa fa-hotel w3-blink"> Hotel Details in Sylhet</i></a>
  </div>
</div>


<!-- Header -->
<header class="w3-display-container w3-logo-color w3-center w3-hover-grayscale" style="padding:70px 20px 60px 20px;">
  <div class="w3-display-container w3-center" style="margin:0px;">
	<a href="index.php" style="margin:0px;"><img src="images/system/techhunt_logo_title.png" style="width:70%;max-width:800px;" style="margin:0px;" class="w3-hover-shadow"></a>
	<p class="w3-titlefont" style="margin: -3% 0px 0px 28.5%;font-size: 3.0vw;"><?php echo Date("Y"); ?></p>
  </div>
  <p class="w3-titlefont" style="margin: 0px 0px 0px 0px;font-size:2.2vw;"><u>Organized By</u></p>
  <a href="http://neub.edu.bd/" target="_blank" style="text-decoration: none;"><img src="images/system/neub_logo.png" style="width:9%; position:absolute;margin: -0.5% 0px 0px -20%;"></a>
  <p class="w3-titlefont" style="margin:  2% 0px 0px 7%;font-size:1.3vw;">Computer Science & Engineering Society</p>
  <p class="w3-titlefont" style="margin: 0px 0px 20px 7%;font-size:1.8vw;"><a href="http://neub.edu.bd/" target="_blank" style="text-decoration: none;">North East University Bangladesh</a></p>
  <!-- Display the countdown timer in an element -->
  <?php
			$stmt = $conn->prepare("select * from countdown order by id asc ");
			$stmt->execute();
			$list = $stmt->fetchAll();			
			foreach($list as $row)
			{
				$st=$row['msg_status'];
			}
			if($st==0)
			{
  ?>
  <div class="w3-container w3-cell-row w3-center" style="margin:0px;padding:0px;">
	<p class="w3-xlarge w3-myfont1" style="margin:8px 0px 5px 0px;">Event Countdown</p>
	<div class="w3-container w3-cell-row" style="margin:0 auto;width:100%;max-width:550px;">
		<div class="w3-container w3-cell-row" style="margin:0px;padding:0px;width:100%;max-width:500px;" id="timer"></div>
	</div>
  </div>
  <?php include("include/timer.php"); ?>
  <?php
			}
			else if($st==1)
			{
				include("include/end.php");
			}
			else
			{
				include("include/wait2.php");
			}
  ?>
</header>


<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>About TechHunt</h1>
      <h5 class="w3-padding-32" style="text-align:justify;">
		TechHunt is the annual science and technology festival of North East University Bangladesh. It also refers to the independent body of Computer Science & Engineering department students who organize this event along with many other social initiatives and outreach programs round the year. TechHunt is known for hosting a variety of events that include competitions as well as seminars.
	  </h5>
    </div>

    <div class="w3-third w3-center">
      <img src="images/system/techhunt_logo.png" class="w3-round w3-padding w3-hover-shadow w3-margin" style="width:100%;max-width:400px;" alt="TechHunt Logo">
    </div>
  </div>
</div>



<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
       <img src="images/system/society_logo.png" class="w3-round w3-padding w3-hover-shadow w3-margin-top" style="width:100%;max-width:400px;" alt="NEUB CSE Society Logo">
    </div>

    <div class="w3-twothird w3-padding">
      <h1>NEUB CSE Society</h1>
      <h5 class="w3-padding-32" style="text-align:justify;">CSE Society is a non-political departmental organization. In North East University Bangladesh, CSE society is the largest organization consists of all students and teachers of CSE department. The objective of the CSE Society is to promote Computer Science & Engineering awareness among the students in the CSE by organizing technical activities such as lectures, workshop, quizzes, competitions and excursion and to foster relationship among the past and present students and the teachers of the CSE department.</h5>
    </div>
  </div>
</div>


<blockquote class="w3-panel w3-leftbar w3-black">
  <p class="w3-serif w3-xxlarge"><i class="fa fa-quote-right w3-xxlarge"></i><br>
  <i>"The science of today is the technology of tomorrow."</i> - Edward Teller</i></p>
</blockquote> 

<?php include("include/footer.php"); ?>