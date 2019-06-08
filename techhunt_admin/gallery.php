<?php include("../include/admin_header.php"); 


    if(isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['email']))
    {
            //logged in
?>

        <div class="w3-top">
          <div class="w3-bar w3-black w3-card-2 w3-left-align w3-medium">
            <a style="display:none;" class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" id="not_logged_fa_bars" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" id="logged_fa_bars" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Admin Panel</a>
            
            <a href="gallery.php" id="gallery" class="w3-bar-item w3-hide-small w3-button w3-padding-large w3-hover-white">Gallery</a>
            <a href="event.php" id="event" class="w3-bar-item w3-hide-small w3-button w3-padding-large w3-hover-white">Events</a>
            <a href="team.php" id="team" class="w3-bar-item w3-hide-small w3-button w3-padding-large w3-hover-white">Teams</a>
            <a href="sponsor.php" id="sponsor" class="w3-bar-item  w3-hide-small w3-button w3-padding-large w3-hover-white">Sponsors</a>
            <a href="contact.php" id="contact" class="w3-bar-item  w3-hide-small w3-button w3-padding-large w3-hover-white">Contact</a>
            
            
            <a style="cursor:pointer;" onclick="log_out_user()" id="log_out_large" class="w3-right w3-bar-item w3-blink w3-hide-small w3-button w3-padding-large w3-hover-white"><i class="fa fa-external-link-square"></i> Log Out</a>
          </div>
          <!-- Navbar on small screens -->
          <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-medium">
              <a href="gallery.php" id="gallery_small" class="w3-bar-item w3-button w3-padding-large">Gallery</a>
              <a href="event.php" id="event_small" class="w3-bar-item w3-button w3-padding-large">Events</a>
              <a href="team.php" id="team_small" class="w3-bar-item w3-button w3-padding-large">Teams</a>
              <a href="sponsor.php" id="sponsor_small" class=" w3-bar-item w3-button w3-padding-large">Sponsors</a>
              <a href="contact.php" id="contact_small" class="w3-bar-item w3-button w3-padding-large">Contact</a>
              <a style="cursor:pointer;" onclick="log_out_user()" id="log_out_small" class="w3-bar-item w3-button w3-blink w3-padding-large"><i class="fa fa-external-link-square"></i> Log Out</a>
          </div>
        </div>

<?php
    }
    else
    {           //not logged in
?>

        <div class="w3-top">
          <div class="w3-bar w3-black w3-card-2 w3-left-align w3-medium">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" id="not_logged_fa_bars" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a style="display:none;" class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" id="logged_fa_bars" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Admin Panel</a>
            
            
            <a style="display:none;" href="gallery.php" id="gallery" class=" w3-bar-item w3-hide-small w3-button w3-padding-large w3-hover-white">Gallery</a>
            <a style="display:none;" href="event.php" id="event" class="w3-bar-item w3-hide-small w3-button w3-padding-large w3-hover-white">Events</a>
            <a style="display:none;" href="team.php" id="team" class=" w3-bar-item w3-hide-small w3-button w3-padding-large w3-hover-white">Teams</a>
            <a style="display:none;" href="sponsor.php" id="sponsor" class=" w3-bar-item w3-hide-small w3-button w3-padding-large w3-hover-white">Sponsors</a>
            <a style="display:none;" href="contact.php" id="contact" class=" w3-bar-item w3-hide-small w3-button w3-padding-large w3-hover-white">Contact</a>
            
            <a style="cursor:pointer;display:none;" onclick="log_out_user()" id="log_out_large" class="w3-right w3-bar-item w3-blink w3-hide-small w3-button w3-padding-large w3-hover-white"><i class="fa fa-external-link-square"></i> Log Out</a>
          </div>
          <!-- Navbar on small screens -->
          <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-medium">
               <a style="display:none;" href="gallery.php" id="gallery_small" class=" w3-bar-item w3-button w3-padding-large">Gallery</a>
            <a style="display:none;" href="event.php" id="event_small" class=" w3-bar-item w3-button w3-padding-large">Events</a>
            <a style="display:none;" href="team.php" id="team_small" class="w3-bar-item w3-button w3-padding-large">Teams</a>
            <a style="display:none;" href="sponsor.php" id="sponsor_small" class=" w3-bar-item w3-button w3-padding-large">Sponsors</a>
            <a style="display:none;" href="contact.php" id="contact_small" class=" w3-bar-item w3-button w3-padding-large">Contact</a>
          
              <a style="cursor:pointer;display:none;" onclick="log_out_user()" id="log_out_small" class="w3-bar-item w3-button w3-blink w3-padding-large"><i class="fa fa-external-link-square"></i> Log Out</a>
          </div>
        </div>
<?php
    }
?>

<header class="w3-display-container w3-logo-color w3-center w3-hover-grayscale" style="padding:80px 20px 20px 20px;">
	<div class="w3-display-container w3-center">
		<a href="index.php"><img src="../images/system/techhunt_logo_title.png" style="width:70%;max-width:500px;" style="margin:0px;" class="w3-hover-shadow"></a>
		<p class="w3-jumbo w3-titlefont" style="margin:0px;"><?php echo Date("Y"); ?></p>
	  </div>
</header>



<div class="w3-row-padding w3-padding-64 w3-container w3-light-gray">
    
    <?php    
        if(isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['email']))
        {
            //after loading logged in section
    ?>
    
            <div class="w3-container w3-center w3-padding-32" style="height:400px;overflow-y:scroll;display:none;" id="login_form">
        		<div class="w3-container w3-card-4 w3-light-grey" style="width:60%;margin:0 auto;">
        			<h2 class="w3-center w3-titlefont w3-tlcolor"> Admin Panel </h2>
        		    <div class="w3-container">
                		<div class="w3-row w3-section" id="login_auth" style="display:none;">
                    		<div class="w3-col w3-pale-red">
                    			<p style="color:red;margin-left:10px;" id="login_auth_msg" class="w3-center"></p>
                    		</div>
                    	</div>
                		<div class="w3-row w3-section">
                    	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user w3-tlcolor"></i></div>
                    		<div class="w3-rest">
                    		  <input class="w3-input w3-border" id="admin_username" type="text" placeholder="Enter Your Username." required>
                    		</div>
                    	</div>
                    	<div class="w3-row w3-section" id="admin_username_msg" style="display:none;">
                    		<div class="w3-col w3-pale-red">
                    			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter a valid Userame.</p>
                    		</div>
                    	</div>
                    	
                    	<div class="w3-row w3-section">
                    	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-bars w3-tlcolor"></i></div>
                    		<div class="w3-rest">
                    		  <input class="w3-input w3-border" id="admin_password" type="password" placeholder="Enter Your Password." required>
                    		</div>
                    	</div>
                    	<div class="w3-row w3-section" id="admin_password_msg" style="display:none;">
                    		<div class="w3-col w3-pale-red">
                    			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter a valid Password.</p>
                    		</div>
                    	</div>
                    	
                    	<p class="w3-center">
                    	    <button onclick="admin_login_auth()" class="w3-button w3-section w3-logo-color w3-ripple w3-round w3-medium w3-hover-black"> <i class="fa fa-spinner fa-spin" id="login_loading" style="display:none;"></i> Log In </button>
                    	</p>
            	    </div>
        		</div>
        	</div>
    
    <?php
        }
        else
        {           //before login not logged in
    ?>
            <div class="w3-container w3-center w3-padding-32" style="height:400px;overflow-y:scroll;" id="login_form">
        		<div class="w3-container w3-card-4 w3-light-grey" style="width:60%;margin:0 auto;">
        			<h2 class="w3-center w3-titlefont w3-tlcolor"> Admin Panel </h2>
        		    <div class="w3-container">
                		<div class="w3-row w3-section" id="login_auth" style="display:none;">
                    		<div class="w3-col w3-pale-red">
                    			<p style="color:red;margin-left:10px;" id="login_auth_msg" class="w3-center"></p>
                    		</div>
                    	</div>
                		<div class="w3-row w3-section">
                    	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user w3-tlcolor"></i></div>
                    		<div class="w3-rest">
                    		  <input class="w3-input w3-border" id="admin_username" type="text" placeholder="Enter Your Username." required>
                    		</div>
                    	</div>
                    	<div class="w3-row w3-section" id="admin_username_msg" style="display:none;">
                    		<div class="w3-col w3-pale-red">
                    			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter a valid Userame.</p>
                    		</div>
                    	</div>
                    	
                    	<div class="w3-row w3-section">
                    	  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-bars w3-tlcolor"></i></div>
                    		<div class="w3-rest">
                    		  <input class="w3-input w3-border" id="admin_password" type="password" placeholder="Enter Your Password." required>
                    		</div>
                    	</div>
                    	<div class="w3-row w3-section" id="admin_password_msg" style="display:none;">
                    		<div class="w3-col w3-pale-red">
                    			<p style="color:red;margin-left:10px;" class="w3-left">* Please enter a valid Password.</p>
                    		</div>
                    	</div>
                    	
                    	<p class="w3-center">
                    	    <button onclick="admin_login_auth()" class="w3-button w3-section w3-logo-color w3-ripple w3-round w3-medium w3-hover-black"> <i class="fa fa-spinner fa-spin" id="login_loading" style="display:none;"></i> Log In </button>
                    	</p>
            	    </div>
        		</div>
        	</div>
	<?php
        }
    ?>
	
</div>

<?php include("../include/admin_footer.php"); ?>