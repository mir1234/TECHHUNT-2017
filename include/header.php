<!DOCTYPE html>
<html
    <head>
    <meta name="msvalidate.01" content="0D54B46ED2038A0141EFDAF5828650CC" />
<link rel="shortcut icon" href="images/system/techhunt_logo.png" title="TechHunt <?php echo Date("Y"); ?>">
<title><?php $title_logo='Pubali Bank Limited';    echo $title_logo; ?> TechHunt <?php echo Date("Y"); ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery.min.js"></script> 
<script src="js/library.js"></script>
</head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<?php include("include/config.php"); ?>
<?php include("include/function.php"); ?>

<?php 
	$schedule="";
	try
	{
		$stmt3 = $conn->prepare("select * from schedule where status='active' order by id desc ");
		$stmt3->execute();
		$list3 = $stmt3->fetchAll();
		foreach($list3 as $row3)
			$schedule=$row3['schedule_file'];
		
		$stmt4 = $conn->prepare("select * from result where status='active' order by id desc ");
		$stmt4->execute();
		$list4 = $stmt4->fetchAll();
		foreach($list4 as $row4)
			$result=$row4['result_file'];
		
		$stmt5 = $conn->prepare("select * from hotel_details where status='active' order by id desc ");
		$stmt5->execute();
		$list5 = $stmt5->fetchAll();
		foreach($list5 as $row5)
			$hotel=$row5['hotel_file'];
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}


?>
<img src="images/system/techhunt_logo.png" style="height:0px;width:0px;margin:0px;" title="TechHunt <?php echo Date("Y"); ?>">
<?php include("include/modals.php"); ?>