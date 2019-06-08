<?php include("include/header.php"); ?>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2 w3-left-align w3-medium">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
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
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
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


<header class="w3-display-container w3-logo-color w3-center w3-hover-grayscale" style="padding:80px 20px 20px 20px;">
	<div class="w3-display-container w3-center">
		<a href="index.php"><img src="images/system/techhunt_logo_title.png" style="width:70%;max-width:500px;" style="margin:0px;" class="w3-hover-shadow"></a>
		<p class="w3-jumbo w3-titlefont" style="margin:0px;"><?php echo Date("Y"); ?></p>
	  </div>
</header>

<div class="w3-row-padding w3-padding-64 w3-container w3-light-gray">
	
	<h1 class="w3-blink3 w3-jumbo w3-center">404!!</h1>
	<h1 class="w3-center">Ops!! Sorry Page Not Found.</h1>
	
</div>


<?php include("include/footer.php"); ?>