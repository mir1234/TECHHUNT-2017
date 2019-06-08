<?php
	
			$stmt = $conn->prepare("select * from countdown order by id asc ");
			$stmt->execute();
			$list = $stmt->fetchAll(); 
			foreach($list as $row)
			{
				$month=$row['month'];
				$day=$row['day'];
				$year=$row['year'];
				$time=$row['time'];
			}
?>
<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $month.' '.$day.', '.$year.' '.$time; ?>").getTime();
//var countDownDate = new Date("Nov 30, 2017 18:00:00").getTime();
// Update the count down every 1 second used for timer
var flag=0,ind=0;
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  
  var x="";
  x=x+"<div class='w3-container w3-center' style='float:left;width:100%;max-width:125px;margin:0px 0px 0px 3px;padding:0px;'>";
  
  var de1=0,de2=0;
  if(flag!=0)
  {
	de1=document.getElementById('d0').innerHTML;
	de2=document.getElementById('d1').innerHTML;
  }
  ind=0;
  if(days<10)
  {
	if(flag!=0 && de1!=0)
		x=x+("<p class='w3-xxxlarge w3-border w3-animate-zoom' id='d"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>0</p>");
	else
		x=x+("<p class='w3-xxxlarge w3-border' id='d"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>0</p>");
	ind=ind+1;	
  }
  var D=""+days;
  for(var i=0;i<D.length;i++)
  {
	if(flag!=0 && ind==0 && de1!=D[i])
		x=x+("<p class='w3-xxxlarge w3-border w3-animate-zoom' id='d"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>"+D[i]+"</p>");
	else if(flag!=0 && ind==1 && de2!=D[i])
		x=x+("<p class='w3-xxxlarge w3-border w3-animate-zoom' id='d"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>"+D[i]+"</p>");
	else
		x=x+("<p class='w3-xxxlarge w3-border' id='d"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>"+D[i]+"</p>");
	ind=ind+1;
  }
	x=x+"<p class='w3-xxxlarge' style='float:left;max-width:5px;width:100%;margin:0px 1px 0px 5px;'>:</p>";
   
   x=x+"Days</div>";
  
	//hours
   x=x+"<div class='w3-container w3-center' style='float:left;width:100%;max-width:125px;margin:0px;padding:0px;'>";
  
  var he1=0,he2=0;
  if(flag!=0)
  {
	he1=document.getElementById('h0').innerHTML;
	he2=document.getElementById('h1').innerHTML;
  }
  ind=0;
  if(hours<10)
  {
	if(flag!=0 && he1!=0)
		x=x+("<p class='w3-xxxlarge w3-border w3-animate-zoom' id='h"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>0</p>");
	else
		x=x+("<p class='w3-xxxlarge w3-border' id='h"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>0</p>");
	ind=ind+1;	
  }
  D=""+hours;
  for(var i=0;i<D.length;i++)
  {
	if(flag!=0 && ind==0 && he1!=D[i])
		x=x+("<p class='w3-xxxlarge w3-border w3-animate-zoom' id='h"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>"+D[i]+"</p>");
	else if(flag!=0 && ind==1 && he2!=D[i])
		x=x+("<p class='w3-xxxlarge w3-border w3-animate-zoom' id='h"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>"+D[i]+"</p>");
	else
		x=x+("<p class='w3-xxxlarge w3-border' id='h"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>"+D[i]+"</p>");
	ind=ind+1;
  }
  x=x+"<p class='w3-xxxlarge' style='float:left;max-width:5px;width:100%;margin:0px 3px 0px 5px;'>:</p>";

  //document.getElementById("timer").innerHTML = x;
  x=x+"Hours</div>";
  
  //minutes
  x=x+"<div class='w3-container w3-center' style='float:left;width:100%;max-width:125px;margin:0px;padding:0px;'>";
  var me1=0,me2=0;
  if(flag!=0)
  {
	me1=document.getElementById('m0').innerHTML;
	me2=document.getElementById('m1').innerHTML;
  }
  ind=0;
  if(minutes<10)
  {
	if(flag!=0 && me1!=0)
		x=x+("<p class='w3-xxxlarge w3-border w3-animate-zoom' id='m"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>0</p>");
	else
		x=x+("<p class='w3-xxxlarge w3-border' id='m"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>0</p>");
	ind=ind+1;
  }
  
  D=""+minutes;
  for(var i=0;i<D.length;i++)
  {
	if(flag!=0 && ind==0 && me1!=D[i])
		x=x+("<p class='w3-xxxlarge w3-border w3-animate-zoom' id='m"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>"+D[i]+"</p>");
	else if(flag!=0 && ind==1 && me2!=D[i])
		x=x+("<p class='w3-xxxlarge w3-border w3-animate-zoom' id='m"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>"+D[i]+"</p>");
	else
		x=x+("<p class='w3-xxxlarge w3-border' id='m"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>"+D[i]+"</p>");
	ind=ind+1;
  }
  
	x=x+"<p class='w3-xxxlarge' style='float:left;max-width:5px;width:100%;margin:0px 1px 0px 5px;'>:</p>";
   x=x+"Minutes</div>";
	
	
	//seconds
  x=x+"<div class='w3-container w3-center ' style='float:left;width:100%;max-width:110px;margin:0px;padding:0px;'>";
  var se1=0,se2=0;
  if(flag!=0)
  {
	//console.log(document.getElementById('s0').innerHTML+"  "+document.getElementById('s1').innerHTML);
	se1=document.getElementById('s0').innerHTML;
	se2=document.getElementById('s1').innerHTML;
	//console.log(se1+" "+se2);
  }
  
  ind=0;
  if(seconds<10)
  {
	if(flag!=0 && se1!=0)
		x=x+("<p class='w3-xxxlarge w3-border w3-animate-zoom' id='s"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>0</p>");
	else
		x=x+("<p class='w3-xxxlarge w3-border' id='s"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>0</p>");
	ind=ind+1;
  }
  
  D=""+seconds;
  for(var i=0;i<D.length;i++)
  {
	if(flag!=0 && ind==0 && se1!=D[i])
		x=x+("<p class='w3-xxxlarge w3-border w3-animate-zoom' id='s"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>"+D[i]+"</p>");
	else if(flag!=0 && ind==1 && se2!=D[i])
		x=x+("<p class='w3-xxxlarge w3-border w3-animate-zoom' id='s"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>"+D[i]+"</p>");
	else 
		x=x+("<p class='w3-xxxlarge w3-border' id='s"+ind+"' style='float:left;max-width:50px;width:100%;margin:0px 0px 0px 5px;'>"+D[i]+"</p>");
	ind=ind+1;
  }
  x=x+"Seconds</div>"; 

  
  document.getElementById("timer").innerHTML = x;
  flag=1;
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

</script>