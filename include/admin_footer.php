
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
	<div class="w3-xlarge w3-padding-32">
		<a href="https://www.facebook.com/neubcsesociety/" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"> &nbsp </i></a>
		<a href="http://www.neub.edu.bd/activities/cse-society" target="_blank"><i class="fa fa-globe w3-hover-opacity"> &nbsp </i></a>
		<a href="https://www.google.com.bd/maps/place/North+East+University+Bangladesh/@24.8907336,91.8601301,17z/data=!4m5!3m4!1s0x3751aacd70cd7665:0xc8ae330ad72490dd!8m2!3d24.8900962!4d91.8609562?hl=en" target="_blank"><i class="fa fa-map-marker w3-hover-opacity"> &nbsp </i></a>
	</div>
	<p>Developed by <a style="cursor:pointer"  onclick="document.getElementById('developer').style.display='block'">Mir Lutfur Rahman</a></p>
</footer>
<p class="w3-center w3-opacity"> &copy; <?php $title_logo='Pubali Bank Limited';    echo $title_logo; ?> TechHunt <?php echo Date("Y"); ?> </p>

</body>
<?php $conn=null; ?>
</html>
<?php
    session_write_close();
    ob_end_flush();
?>