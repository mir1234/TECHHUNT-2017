<?php
    ob_start();
    session_start();
?>
﻿<!DOCTYPE html>
<html
    <head>
    <meta name="msvalidate.01" content="0D54B46ED2038A0141EFDAF5828650CC" />
<link rel="shortcut icon" href="../images/system/techhunt_logo.png" title="TechHunt <?php echo Date("Y"); ?>">
<title><?php $title_logo='Pubali Bank Limited';    echo $title_logo; ?> TechHunt <?php echo Date("Y"); ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../js/jquery.min.js"></script> 
<script src="../js/library.js"></script>
<script src="../js/library_admin.js"></script>
</head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<?php include("../include/config.php"); ?>
<?php include("../include/function.php"); ?>
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
				  <img src="../images/system/developer.jpg" alt="Developer Image" class="w3-margin-top w3-margin-right w3-margin-bottom w3-left w3-round w3-border w3-padding" style="width:100%;max-width:95px;">
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
