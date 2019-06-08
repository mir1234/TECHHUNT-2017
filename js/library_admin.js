function update_individual(id)
{
    document.getElementById('update_login_loading').style.display='block';
    var status=document.getElementById('ind_status_'+id).value;
    var xhttp1 = new XMLHttpRequest();
		xhttp1.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			    
			    document.getElementById('individual_status_'+id).innerHTML=this.responseText;
			    
			    document.getElementById('update_login_loading').style.display='none';
			}
		};
		xhttp1.open("POST", "../ajax/update_individual.php?go_techhunt=yes&individual_id="+id+"&status="+status, true);
		xhttp1.send();
}

function update_team(id)
{
    document.getElementById('update2_login_loading').style.display='block';
    var status=document.getElementById('team_status_val_'+id).value;
    var xhttp1 = new XMLHttpRequest();
		xhttp1.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			    
			    document.getElementById('team_status_'+id).innerHTML=this.responseText;
			    
			    document.getElementById('update2_login_loading').style.display='none';
			}
		};
		xhttp1.open("POST", "../ajax/update_team.php?go_techhunt=yes&team_id="+id+"&status="+status, true);
		xhttp1.send();
}

function admin_login_auth()
{
    document.getElementById('login_loading').style.display='block';
    var username=document.getElementById('admin_username').value.trim();
    var password=document.getElementById('admin_password').value.trim();
    if(username=="")
    {
        document.getElementById('admin_username_msg').style.display='block';
        document.getElementById('login_loading').style.display='none';
        document.getElementById('admin_username').focus();
    }
    else if(password=="")
    {
        document.getElementById('admin_username_msg').style.display='none';
        document.getElementById('admin_password_msg').style.display='block';
        document.getElementById('login_loading').style.display='none';
        document.getElementById('admin_password').focus();
    }
    else
    {
        document.getElementById('admin_username_msg').style.display='none';
        document.getElementById('admin_password_msg').style.display='none';
        
        var xhttp1 = new XMLHttpRequest();
		xhttp1.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var msg=parseInt(this.responseText);
				
				if(msg==1)
				{
				    document.getElementById('login_auth').style.display='block';
				    document.getElementById('login_loading').style.display='none';
				    document.getElementById('login_auth_msg').innerHTML='Invalid Username or Password!!';
				}
				else if(msg==2)
				{
				    document.getElementById('not_logged_fa_bars').style.display='none';
				    document.getElementById('logged_fa_bars').style.display='block';
    			    document.getElementById('login_auth').style.display='none';
				    document.getElementById('login_loading').style.display='none';
				    document.getElementById('login_form').style.display='none';
				    document.getElementById('log_out_large').style.display='block';
				    document.getElementById('log_out_small').style.display='block';
				    
				    //Show others admin buttons
				    document.getElementById('gallery').style.display='block';
    			    document.getElementById('gallery_small').style.display='block';
    			    document.getElementById('event').style.display='block';
    			    document.getElementById('event_small').style.display='block';
    			    document.getElementById('team').style.display='block';
    			    document.getElementById('team_small').style.display='block';
    			    document.getElementById('sponsor').style.display='block';
    			    document.getElementById('sponsor_small').style.display='block';
    			    document.getElementById('contact').style.display='block';
    			    document.getElementById('contact_small').style.display='block';
				    
				    
				}
				else
				{
				    document.getElementById('login_auth').style.display='block';
				    document.getElementById('login_loading').style.display='none';
				    document.getElementById('login_auth_msg').innerHTML='Unknown System Error!!!';
				}
			}
		};
		
		xhttp1.open("POST", "../ajax/login_auth.php?go_techhunt=yes&username="+username+"&password="+password, true);
		xhttp1.send();
    }
    
}

function log_out_user()
{
        var xhttp1 = new XMLHttpRequest();
		xhttp1.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			    document.getElementById('login_form').style.display='block';
			    document.getElementById('log_out_large').style.display='none';
			    document.getElementById('log_out_small').style.display='none';
			    document.getElementById('gallery').style.display='none';
			    document.getElementById('gallery_small').style.display='none';
			    document.getElementById('event').style.display='none';
			    document.getElementById('event_small').style.display='none';
			    document.getElementById('team').style.display='none';
			    document.getElementById('team_small').style.display='none';
			    document.getElementById('sponsor').style.display='none';
			    document.getElementById('sponsor_small').style.display='none';
			    document.getElementById('contact').style.display='none';
			    document.getElementById('contact_small').style.display='none';
                document.getElementById('logged_fa_bars').style.display='none';
                document.getElementById('not_logged_fa_bars').style.display='block';
			    document.getElementById('login_auth').style.display='block';
			    document.getElementById('login_auth_msg').innerHTML='Log Out Successful!!';
			    document.getElementById('login_loading').style.display='none';
			    
			    
			    
			    //add other anti option from login
			}
		};
		
		xhttp1.open("POST", "../ajax/logout_auth.php?go_techhunt=yes", true);
		xhttp1.send();
}


//Event Page *********************************************************88

function admin_login_auth_event()
{
    document.getElementById('login_loading').style.display='block';
    var username=document.getElementById('admin_username').value.trim();
    var password=document.getElementById('admin_password').value.trim();
    if(username=="")
    {
        document.getElementById('admin_username_msg').style.display='block';
        document.getElementById('login_loading').style.display='none';
        document.getElementById('admin_username').focus();
    }
    else if(password=="")
    {
        document.getElementById('admin_username_msg').style.display='none';
        document.getElementById('admin_password_msg').style.display='block';
        document.getElementById('login_loading').style.display='none';
        document.getElementById('admin_password').focus();
    }
    else
    {
        document.getElementById('admin_username_msg').style.display='none';
        document.getElementById('admin_password_msg').style.display='none';
        
        var xhttp1 = new XMLHttpRequest();
		xhttp1.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var msg=parseInt(this.responseText);
				
				if(msg==1)
				{
				    document.getElementById('login_auth').style.display='block';
				    document.getElementById('login_loading').style.display='none';
				    document.getElementById('login_auth_msg').innerHTML='Invalid Username or Password!!';
				}
				else if(msg==2)
				{
				    document.getElementById('not_logged_fa_bars').style.display='none';
				    document.getElementById('logged_fa_bars').style.display='block';
    			    document.getElementById('login_auth').style.display='none';
				    document.getElementById('login_loading').style.display='none';
				    document.getElementById('login_form').style.display='none';
				    document.getElementById('log_out_large').style.display='block';
				    document.getElementById('log_out_small').style.display='block';
				    
				    //Show others admin buttons
				    document.getElementById('gallery').style.display='block';
    			    document.getElementById('gallery_small').style.display='block';
    			    document.getElementById('event').style.display='block';
    			    document.getElementById('event_small').style.display='block';
    			    document.getElementById('team').style.display='block';
    			    document.getElementById('team_small').style.display='block';
    			    document.getElementById('sponsor').style.display='block';
    			    document.getElementById('sponsor_small').style.display='block';
    			    document.getElementById('contact').style.display='block';
    			    document.getElementById('contact_small').style.display='block';
    			    document.getElementById('hiding_event').style.display='block';
				    
				    
				}
				else
				{
				    document.getElementById('login_auth').style.display='block';
				    document.getElementById('login_loading').style.display='none';
				    document.getElementById('login_auth_msg').innerHTML='Unknown System Error!!!';
				}
			}
		};
		
		xhttp1.open("POST", "../ajax/login_auth.php?go_techhunt=yes&username="+username+"&password="+password, true);
		xhttp1.send();
    }
    
}


			   

function log_out_user_event()
{
        var xhttp1 = new XMLHttpRequest();
		xhttp1.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			    document.getElementById('showing_event').style.display='none';
			    document.getElementById('login_form').style.display='block';
			    document.getElementById('log_out_large').style.display='none';
			    document.getElementById('log_out_small').style.display='none';
			    document.getElementById('gallery').style.display='none';
			    document.getElementById('gallery_small').style.display='none';
			    document.getElementById('event').style.display='none';
			    document.getElementById('event_small').style.display='none';
			    document.getElementById('team').style.display='none';
			    document.getElementById('team_small').style.display='none';
			    document.getElementById('sponsor').style.display='none';
			    document.getElementById('sponsor_small').style.display='none';
			    document.getElementById('contact').style.display='none';
			    document.getElementById('contact_small').style.display='none';
                document.getElementById('logged_fa_bars').style.display='none';
                document.getElementById('not_logged_fa_bars').style.display='block';
			    document.getElementById('login_auth').style.display='block';
			    document.getElementById('login_auth_msg').innerHTML='Log Out Successful!!';
			    document.getElementById('login_loading').style.display='none';
			    
			    
			    
			    //add other anti option from login
			}
		};
		
		xhttp1.open("POST", "../ajax/logout_auth.php?go_techhunt=yes", true);
		xhttp1.send();
}



function log_out_user_event_2()
{
        var xhttp1 = new XMLHttpRequest();
		xhttp1.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			    document.getElementById('hiding_event').style.display='none';
			    document.getElementById('login_form').style.display='block';
			    document.getElementById('log_out_large').style.display='none';
			    document.getElementById('log_out_small').style.display='none';
			    document.getElementById('gallery').style.display='none';
			    document.getElementById('gallery_small').style.display='none';
			    document.getElementById('event').style.display='none';
			    document.getElementById('event_small').style.display='none';
			    document.getElementById('team').style.display='none';
			    document.getElementById('team_small').style.display='none';
			    document.getElementById('sponsor').style.display='none';
			    document.getElementById('sponsor_small').style.display='none';
			    document.getElementById('contact').style.display='none';
			    document.getElementById('contact_small').style.display='none';
                document.getElementById('logged_fa_bars').style.display='none';
                document.getElementById('not_logged_fa_bars').style.display='block';
			    document.getElementById('login_auth').style.display='block';
			    document.getElementById('login_auth_msg').innerHTML='Log Out Successful!!';
			    document.getElementById('login_loading').style.display='none';
			    
			    
			    
			    //add other anti option from login
			}
		};
		
		xhttp1.open("POST", "../ajax/logout_auth.php?go_techhunt=yes", true);
		xhttp1.send();
}



//Team PAge ****************************************************

function admin_login_auth_team()
{
    document.getElementById('login_loading').style.display='block';
    var username=document.getElementById('admin_username').value.trim();
    var password=document.getElementById('admin_password').value.trim();
    if(username=="")
    {
        document.getElementById('admin_username_msg').style.display='block';
        document.getElementById('login_loading').style.display='none';
        document.getElementById('admin_username').focus();
    }
    else if(password=="")
    {
        document.getElementById('admin_username_msg').style.display='none';
        document.getElementById('admin_password_msg').style.display='block';
        document.getElementById('login_loading').style.display='none';
        document.getElementById('admin_password').focus();
    }
    else
    {
        document.getElementById('admin_username_msg').style.display='none';
        document.getElementById('admin_password_msg').style.display='none';
        
        var xhttp1 = new XMLHttpRequest();
		xhttp1.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var msg=parseInt(this.responseText);
				
				if(msg==1)
				{
				    document.getElementById('login_auth').style.display='block';
				    document.getElementById('login_loading').style.display='none';
				    document.getElementById('login_auth_msg').innerHTML='Invalid Username or Password!!';
				}
				else if(msg==2)
				{
				    document.getElementById('not_logged_fa_bars').style.display='none';
				    document.getElementById('logged_fa_bars').style.display='block';
    			    document.getElementById('login_auth').style.display='none';
				    document.getElementById('login_loading').style.display='none';
				    document.getElementById('login_form').style.display='none';
				    document.getElementById('log_out_large').style.display='block';
				    document.getElementById('log_out_small').style.display='block';
				    
				    //Show others admin buttons
				    document.getElementById('gallery').style.display='block';
    			    document.getElementById('gallery_small').style.display='block';
    			    document.getElementById('event').style.display='block';
    			    document.getElementById('event_small').style.display='block';
    			    document.getElementById('team').style.display='block';
    			    document.getElementById('team_small').style.display='block';
    			    document.getElementById('sponsor').style.display='block';
    			    document.getElementById('sponsor_small').style.display='block';
    			    document.getElementById('contact').style.display='block';
    			    document.getElementById('contact_small').style.display='block';
    			    document.getElementById('hiding_team').style.display='block';
				    
				    
				}
				else
				{
				    document.getElementById('login_auth').style.display='block';
				    document.getElementById('login_loading').style.display='none';
				    document.getElementById('login_auth_msg').innerHTML='Unknown System Error!!!';
				}
			}
		};
		
		xhttp1.open("POST", "../ajax/login_auth.php?go_techhunt=yes&username="+username+"&password="+password, true);
		xhttp1.send();
    }
    
}


			   

function log_out_user_team()
{
        var xhttp1 = new XMLHttpRequest();
		xhttp1.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			  
			    document.getElementById('login_form').style.display='block';
			    document.getElementById('showing_team').style.display='none';
			    document.getElementById('log_out_large').style.display='none';
			    document.getElementById('log_out_small').style.display='none';
			    document.getElementById('gallery').style.display='none';
			    document.getElementById('gallery_small').style.display='none';
			    document.getElementById('event').style.display='none';
			    document.getElementById('event_small').style.display='none';
			    document.getElementById('team').style.display='none';
			    document.getElementById('team_small').style.display='none';
			    document.getElementById('sponsor').style.display='none';
			    document.getElementById('sponsor_small').style.display='none';
			    document.getElementById('contact').style.display='none';
			    document.getElementById('contact_small').style.display='none';
                document.getElementById('logged_fa_bars').style.display='none';
                document.getElementById('not_logged_fa_bars').style.display='block';
			    document.getElementById('login_auth').style.display='block';
			    document.getElementById('login_auth_msg').innerHTML='Log Out Successful!!';
			    document.getElementById('login_loading').style.display='none';
			    
			    
			    
			    //add other anti option from login
			}
		};
		
		xhttp1.open("POST", "../ajax/logout_auth.php?go_techhunt=yes", true);
		xhttp1.send();
}



function log_out_user_team_2()
{
        var xhttp1 = new XMLHttpRequest();
		xhttp1.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			    document.getElementById('hiding_team').style.display='none';
			    document.getElementById('login_form').style.display='block';
			    document.getElementById('log_out_large').style.display='none';
			    document.getElementById('log_out_small').style.display='none';
			    document.getElementById('gallery').style.display='none';
			    document.getElementById('gallery_small').style.display='none';
			    document.getElementById('event').style.display='none';
			    document.getElementById('event_small').style.display='none';
			    document.getElementById('team').style.display='none';
			    document.getElementById('team_small').style.display='none';
			    document.getElementById('sponsor').style.display='none';
			    document.getElementById('sponsor_small').style.display='none';
			    document.getElementById('contact').style.display='none';
			    document.getElementById('contact_small').style.display='none';
                document.getElementById('logged_fa_bars').style.display='none';
                document.getElementById('not_logged_fa_bars').style.display='block';
			    document.getElementById('login_auth').style.display='block';
			    document.getElementById('login_auth_msg').innerHTML='Log Out Successful!!';
			    document.getElementById('login_loading').style.display='none';
			    
			    
			    
			    //add other anti option from login
			}
		};
		
		xhttp1.open("POST", "../ajax/logout_auth.php?go_techhunt=yes", true);
		xhttp1.send();
}