<?php include("include/header.php"); ?>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2 w3-left-align w3-medium">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="gallery.php" class="w3-bar-item w3-button w3-padding-large w3-white">Gallery</a>
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
	
	<div class="w3-container w-padding-64 w3-white w3-margin">
		<?php
		try
		{
			$stmt = $conn->prepare("select * from album where status='active' order by id asc ");
			$stmt->execute();
			$list = $stmt->fetchAll(); 
			foreach($list as $row)
			{
		?>
				<div id="img<?php echo $row['id']; ?>" class="w3-modal">
					<div class="w3-modal-content w3-animate-zoom">
						<header class="w3-container">
							<span onclick="document.getElementById('img<?php echo $row['id']; ?>').style.display='none'" class="w3-button w3-display-topright w3-black"><i class="fa fa-close"></i></span>		
						</header>
						
						<!-- Large screen images goes here -->
						<!-- album images  -->
						<?php
						$stmt2 = $conn->prepare("select * from gallery where album_id='$row[id]' AND status='active' order by id asc ");
						$stmt2->execute();
						$list2 = $stmt2->fetchAll(); 
						$c=1;
						foreach($list2 as $row2)
						{
						?>
							<img src="images/gallery/<?php if($row2['image']==""){ echo "default/ni.jpg"; } else { echo $row2['image']; } ?>" class="w3-round mySlides<?php echo $row['id']; ?>" style="width:100%">
						<?php
						}
						?>
						
						<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1,<?php echo $row['id']; ?>)">&#10094;</button>
						<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1,<?php echo $row['id']; ?>)">&#10095;</button>
					</div>
				</div>
		<?php
			}
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
		?>
		
		<!-- Album namewise container --->
		<?php
		try
		{
			$stmt = $conn->prepare("select * from album where status='active' order by id asc ");
			$stmt->execute();
			$list = $stmt->fetchAll(); 
			foreach($list as $row)
			{
		?>
				<div id="album<?php echo $row['id']; ?>" class="w3-bottombar w3-topbar w3-border-black w3-hide w3-light-gray w3-margin-bottom w3-padding-bottom">
				  <div class="w3-container w3-padding-8 w3-logo-color">
					<span onclick="show_album('album<?php echo $row['id']; ?>')" style="float:left;margin-top:10px;margin-right:2px;" class=" w3-button w3-logo-color w3-large w3-hover-black"><i class="fa fa-close"></i></span>
					<h2 class="w3-myfont1" style="float:left;"><?php echo $row['title']; ?></h2>
				  </div>
				  <div class="w3-container w3-padding w3-margin">
					<div class="w3-container" style="margin:0 auto;max-width:1100px;">
						
						<!-- album images  -->
						<?php
						$stmt2 = $conn->prepare("select * from gallery where album_id='$row[id]' AND status='active' order by id asc ");
						$stmt2->execute();
						$list2 = $stmt2->fetchAll(); 
						$c=1;
						$check2=0;
						foreach($list2 as $row2)
						{
							$check2++;
						?>
							<div class="zoomin w3-card-2 w3-margin-right w3-margin-bottom w3-hover-shadow" style="overflow:hidden;width:100%;height:200px;width:250px;float:left;">
							  <img src="images/gallery/<?php if($row2['image']==""){ echo "default/ni.jpg"; } else { echo $row2['image']; } ?>" style="cursor:pointer" onclick="set_slide_index(<?php echo $c; ?>,<?php echo $row['id']; ?>,<?php echo $row['id']; ?>);" class="w3-round w3-border w3-animate-zoom w3-padding">
							</div>
						<?php
							$c++;
						}
						if($check2==0)
							include("include/wait.php");
						?>
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
	
	
	<!--- Album names -->
	
	<?php
		try
		{
			$stmt = $conn->prepare("select * from album where status='active' order by id asc ");
			$stmt->execute();
			$list = $stmt->fetchAll(); 
			$check=0;
			foreach($list as $row)
			{
				$check++;
	?>
				<button onclick="show_album('album<?php echo $row['id']; ?>')" class="w3-button" style="float:left;">
					<div class="w3-display-container">
						<div class="w3-card-4 w3-margin" style="width:100%;width:353px;height:230px;float:left;">
						  <?php
							$stmt2 = $conn->prepare("select * from gallery where album_id='$row[id]' AND status='active' order by id asc ");
							$stmt2->execute();
							$list2 = $stmt2->fetchAll(); 
							$c=0;
							$kk;
							foreach($list2 as $row2)
							{
								$c++;
							}
							$ll=rand(1,$c);
							$c=0;
							foreach($list2 as $row2)
							{
								$c++;
								$kk=$row2['image'];
								if($c>=$ll) break;
							}
						  ?>
						  <img id="xx<?php echo $row['id']; ?>" src="images/gallery/<?php if($c==0){ echo "default/ni.jpg"; } else { echo $kk; } ?>" class="w3-hover-grayscale w3-hover-opacity w3-border w3-padding" onmouseover="document.getElementById('date<?php echo $row['id']; ?>').style.display='block';document.getElementById('xx<?php echo $row['id']; ?>').style.filter='grayscale(100%)';document.getElementById('xx<?php echo $row['id']; ?>').style.opacity='0.60';" onmouseout="document.getElementById('date<?php echo $row['id']; ?>').style.display='none';document.getElementById('xx<?php echo $row['id']; ?>').style.opacity='1';document.getElementById('xx<?php echo $row['id']; ?>').style.filter='';" alt="<?php echo $row['title']; ?>" style="width:100%;height:190px;">
						  <div id="date<?php echo $row['id']; ?>" class="w3-display-middle w3-xxlarge w3-text-black" style="margin-top:30%;font-weight:bold;display:none;" onmouseover="document.getElementById('date<?php echo $row['id']; ?>').style.display='block';document.getElementById('xx<?php echo $row['id']; ?>').style.opacity='0.60';document.getElementById('xx<?php echo $row['id']; ?>').style.filter='grayscale(100%)';" onmouseout="document.getElementById('xx<?php echo $row['id']; ?>').style.filter='';"><?php echo $row['date']; ?></div>
						  <div class="w3-container w3-center" style="margin:0px;padding:0px 5px 5px 5px;">
							<h2 class="w3-large w3-titlefont w3-padding" style="margin:0px;padding:0px;color:black;">Album: <?php echo $row['title']; ?></h2>
						  </div>
						</div>
					</div>
				</button>
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


<?php include("include/footer.php"); ?>