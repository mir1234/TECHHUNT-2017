// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}


//////////////////////////////////
function sponsor_modal(id) {
	var x = document.getElementById(id);
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
	} else {
		x.className = x.className.replace(" w3-show", "");
	}
}


//Get Registration Form
function get_form(id)
{
	//alert(id);
	document.getElementById('event_details').style.display='none';
	document.getElementById('reg_form'+id).style.display='block';
}


//Reg form close
function reg_form_close(id)
{
	document.getElementById('events').style.display='none';
	document.getElementById('reg_form'+id).style.display='none';
	document.getElementById('event_details').style.display='block';
	//document.getElementById('events').style.display='block';
}


//Show album
function show_album(id) {

    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}



//Gallery Image Modal view
var slideIndex;
function set_slide_index(s,t,ind){
	slideIndex=s;
	//alert(s);
	document.getElementById('img'+t).style.display='block';
	showDivs(slideIndex,ind);
}
function plusDivs(n,ind) {
  showDivs(slideIndex += n,ind);
}
function showDivs(n,ind) {
  var i;
  var x = document.getElementsByClassName("mySlides"+ind);
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}


//Registration Form Image preview for individual
function preview_picture(input,id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#picture_pre'+id).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function preview_id(input,id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#id_pre'+id).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}


//get_register_individual
var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];    
function file_validate(dataaa) {
    
	var sFileName = dataaa;
	if (sFileName.length > 0) {
		var blnValid = false;
		for (var j = 0; j < _validFileExtensions.length; j++) {
			var sCurExtension = _validFileExtensions[j];
			if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
				blnValid = true;
				break;
			}
		}
		if (!blnValid) {
			 return false;
		}
	}
    return true;
}

function individual_register_info(id)
{
	var name=document.getElementById('name'+id).value;
	var email=document.getElementById('email'+id).value;
	var mobile=document.getElementById('mobile'+id).value;
	var institute=document.getElementById('institute'+id).value;
	
	var image=document.getElementById('image'+id).files[0];
	var image2=document.getElementById('image'+id).value;
	var fd_image=new FormData();
	var link='image'+id;
	fd_image.append(link, image);
	
	var id_card=document.getElementById('id_card'+id).files[0];
	var id_card2=document.getElementById('id_card'+id).value;
	var fd_id=new FormData();
	var link2='id_card'+id;
	fd_id.append(link2, id_card);
	
	var tsize=document.getElementById('t_shirt_size'+id).value;
	var bkash=document.getElementById('bkash_mobile'+id).value;
	var bkash_trx=document.getElementById('bkash_trx'+id).value;
	
	
	var image_name,id_card_name,mob_flag=0,cou=0,bkash_mob=0,email_flag=0;
	
	for(var i=0;i<email.trim().length;i++)
	{
		if(email[i]=='@')
			email_flag=1;
	}
	
	for(var i=0;i<mobile.trim().length;i++)
	{
		if(mobile[i]>='0' && mobile[i]<='9')
			cou=cou+1;
	}
	if(cou!=mobile.trim().length)
		mob_flag=1;
	cou=0;
	for(var i=0;i<bkash.trim().length;i++)
	{
		if(bkash[i]>='0' && bkash[i]<='9')
			cou=cou+1;
	}
	if(cou!=bkash.trim().length)
		bkash_mob=1;
		
		
	/*Check everything */
	if(name.trim()=="")
	{
		document.getElementById('name'+id).title="Please enter a valid name.";
		document.getElementById('namemsg'+id).style.display='block';
		document.getElementById('name'+id).focus();
	}
	else if(email.trim()=="" || email_flag==0)
	{
		document.getElementById('email'+id).title="Please enter a valid email address.";
		document.getElementById('namemsg'+id).style.display='none';
		document.getElementById('emailmsg'+id).style.display='block';
		document.getElementById('email'+id).focus();
	}
	else if(mobile.trim()=="" || mobile.trim().length!=11 || mob_flag==1)
	{
		document.getElementById('mobile'+id).title="Please enter a valid mobile no (11 digits).";
		document.getElementById('namemsg'+id).style.display='none';
		document.getElementById('emailmsg'+id).style.display='none';
		document.getElementById('mobilemsg'+id).style.display='block';
		document.getElementById('mobile'+id).focus();
	}
	else if(institute.trim()=="")
	{
		document.getElementById('institute'+id).title="Please enter a valid Institute name.";
		document.getElementById('namemsg'+id).style.display='none';
		document.getElementById('emailmsg'+id).style.display='none';
		document.getElementById('mobilemsg'+id).style.display='none';
		document.getElementById('institutemsg'+id).style.display='block';
		document.getElementById('institute'+id).focus();
	}
	//check image and id_card format
	else if(image2=="" || file_validate(image2)==false)
	{
		document.getElementById('institute'+id).title="Please enter a valid Image.";
		document.getElementById('namemsg'+id).style.display='none';
		document.getElementById('emailmsg'+id).style.display='none';
		document.getElementById('mobilemsg'+id).style.display='none';
		document.getElementById('institutemsg'+id).style.display='none';
		document.getElementById('imagemsg'+id).style.display='block';
		document.getElementById('image'+id).focus();
	}
	else if(id_card2=="" || file_validate(id_card2)==false)
	{
		document.getElementById('institute'+id).title="Please enter a valid Student ID Card image.";
		document.getElementById('namemsg'+id).style.display='none';
		document.getElementById('emailmsg'+id).style.display='none';
		document.getElementById('mobilemsg'+id).style.display='none';
		document.getElementById('institutemsg'+id).style.display='none';
		document.getElementById('imagemsg'+id).style.display='none';
		document.getElementById('id_cardmsg'+id).style.display='block';
		document.getElementById('id_card'+id).focus();
	}
	else if(tsize.trim()=="")
	{
		document.getElementById('t_shirt_size'+id).title="Please enter a valid T-shirt size.";
		document.getElementById('namemsg'+id).style.display='none';
		document.getElementById('emailmsg'+id).style.display='none';
		document.getElementById('mobilemsg'+id).style.display='none';
		document.getElementById('institutemsg'+id).style.display='none';
		document.getElementById('imagemsg'+id).style.display='none';
		document.getElementById('id_cardmsg'+id).style.display='none';
		document.getElementById('t_shirt_sizemsg'+id).style.display='block';
		document.getElementById('t_shirt_size'+id).focus();
	}
	else if(bkash.trim()=="" || bkash.trim().length!=11 || bkash_mob==1)
	{
		document.getElementById('bkash_mobile'+id).title="Please enter your valid (Sent money) Bkash Mobile No (11 digits).";
		document.getElementById('namemsg'+id).style.display='none';
		document.getElementById('emailmsg'+id).style.display='none';
		document.getElementById('mobilemsg'+id).style.display='none';
		document.getElementById('institutemsg'+id).style.display='none';
		document.getElementById('imagemsg'+id).style.display='none';
		document.getElementById('id_cardmsg'+id).style.display='none';
		document.getElementById('t_shirt_sizemsg'+id).style.display='none';
		document.getElementById('bkash_mobilemsg'+id).style.display='block';
		document.getElementById('bkash_mobile'+id).focus();
	}
	else if(bkash_trx.trim()=="")
	{
		document.getElementById('bkash_trx'+id).title="Please enter your valid (Sent money) Bkash Trx ID.";
		document.getElementById('namemsg'+id).style.display='none';
		document.getElementById('emailmsg'+id).style.display='none';
		document.getElementById('mobilemsg'+id).style.display='none';
		document.getElementById('institutemsg'+id).style.display='none';
		document.getElementById('imagemsg'+id).style.display='none';
		document.getElementById('id_cardmsg'+id).style.display='none';
		document.getElementById('t_shirt_sizemsg'+id).style.display='none';
		document.getElementById('bkash_mobilemsg'+id).style.display='none';
		document.getElementById('bkash_trxmsg'+id).style.display='block';
		document.getElementById('bkash_trx'+id).focus();
	}
	else
	{ 
			//checked
		document.getElementById('form_hidden'+id).style.display='none';
		document.getElementById('form_visible'+id).style.display='block';
	
		//******* Photo Upload ***** /
		var xhttp1 = new XMLHttpRequest();
		xhttp1.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				image_name=this.responseText;
				id_card_upload(image_name,id);
			}
		};
		xhttp1.upload.onprogress = function(e) {
			if (e.lengthComputable) {
			  var percentComplete = Math.round((e.loaded / e.total) * 100);
			  //console.log(percentComplete + '% uploaded');
			  document.getElementById('image_prog_'+id).style.width= percentComplete+'%';
			  if(percentComplete==100)
				document.getElementById('image_prog_ti_'+id).innerHTML= 'Congratulation. Uploaded Picture ('+percentComplete+'%)';
			  else
				document.getElementById('image_prog_ti_'+id).innerHTML= 'Uploading Picture ('+percentComplete+'%)...';
			}
		};
		xhttp1.open("POST", "ajax/individual_register_photo.php?go_techhunt=yes&image="+link, true);
		xhttp1.send(fd_image);
}

function id_card_upload(image_name, id)
{
	var name=document.getElementById('name'+id).value;
	var email=document.getElementById('email'+id).value;
	var mobile=document.getElementById('mobile'+id).value;
	var institute=document.getElementById('institute'+id).value;
	
	var id_card=document.getElementById('id_card'+id).files[0];
	var fd_id=new FormData();
	var link2='id_card'+id;
	fd_id.append(link2, id_card);
	
	var tsize=document.getElementById('t_shirt_size'+id).value;
	var bkash=document.getElementById('bkash_mobile'+id).value;
	var bkash_trx=document.getElementById('bkash_trx'+id).value;
	
	
	var id_card_name;
	//********** ID_CArd upload ****/
		var xhttp2 = new XMLHttpRequest();
		xhttp2.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				id_card_name=this.responseText;
				//Information Update
				var xhttp3 = new XMLHttpRequest();
				xhttp3.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						//alert("Successfull");
						document.getElementById('woo'+id).style.display='none';
						document.getElementById('individual_done_'+id).style.display='block';
						document.getElementById('final_msg'+id).innerHTML='Thanks for Register. Confirmation Email sent to you!!';
					}
				};
				xhttp3.open("POST", "ajax/individual_register.php?go_techhunt=yes&name="+name+"&email="+email+"&mobile="+mobile+"&institute="+institute+"&tsize="+tsize+"&bkash="+bkash+"&bkash_trx="+bkash_trx+"&image_name="+image_name+"&id_card_name="+id_card_name+"&event_id="+id, true);
				xhttp3.send();
			}
		};
		xhttp2.upload.onprogress = function(e) {
			if (e.lengthComputable) {
			  var percentComplete = Math.round((e.loaded / e.total) * 100);
			  //console.log(percentComplete + '% uploaded');
			  document.getElementById('id_prog_'+id).style.width= percentComplete+'%';
			  if(percentComplete==100)
				document.getElementById('id_prog_ti_'+id).innerHTML= 'Congratulation. Uploaded ID Card ('+percentComplete+'%)';		
			  else
				document.getElementById('id_prog_ti_'+id).innerHTML= 'Uploading ID Card ('+percentComplete+'%)...';		
			}
		};
		xhttp2.open("POST", "ajax/individual_register_id_card.php?go_techhunt=yes&id_card="+link2, true);
		xhttp2.send(fd_id);
	}
}


//Team_Registration
function next1(id, coach)
{
	var team_name=document.getElementById('team_name'+id).value.trim();
	var team_members=document.getElementById('team_members'+id).value;
	
	if(team_name=="")
	{
		document.getElementById('team_name'+id).title="Please enter a valid Team Name.";
		document.getElementById('team_namemsg'+id).style.display='block';
		document.getElementById('team_name'+id).focus();
	}
	else if(team_members=="")
	{
		document.getElementById('team_members'+id).title="Please select your total number of team members.";
		document.getElementById('team_namemsg'+id).style.display='none';
		document.getElementById('team_membersmsg'+id).style.display='block';
		document.getElementById('team_members'+id).focus();
	}
	else
	{
		document.getElementById('phase1_'+id).style.display='none';
		if(coach==1)
			document.getElementById('phase2_coa_'+id).style.display='block';
		else
			document.getElementById('phase2_mem_'+id).style.display='block';
	}
}

function coach_preview_picture(input,id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#coach_picture_pre'+id).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function back_coach1(id,coach)
{
	document.getElementById('phase2_coa_'+id).style.display='none';
	document.getElementById('phase1_'+id).style.display='block';
}

function next_coach2(id,coach)
{
	
	var name=document.getElementById('coach_name'+id).value;
	var email=document.getElementById('coach_email'+id).value;
	var mobile=document.getElementById('coach_mobile'+id).value;
	var institute=document.getElementById('coach_institute'+id).value;
	
	var image=document.getElementById('coach_image'+id).files[0];
	var image2=document.getElementById('coach_image'+id).value;
	
	var tsize=document.getElementById('coach_t_shirt_size'+id).value;
	
	var mob_flag=0,cou=0,email_flag=0;
	
	for(var i=0;i<email.trim().length;i++)
	{
		if(email[i]=='@')
			email_flag=1;
	}
	
	for(var i=0;i<mobile.trim().length;i++)
	{
		if(mobile[i]>='0' && mobile[i]<='9')
			cou=cou+1;
	}
	if(cou!=mobile.trim().length)
		mob_flag=1;
	cou=0;
	
	
	if(name.trim()=="")
	{
		document.getElementById('coach_name'+id).title="Please enter a valid Coach Name.";
		document.getElementById('coach_namemsg'+id).style.display='block';
		document.getElementById('coach_name'+id).focus();
	}
	else if(email.trim()=="" || email_flag==0)
	{
		document.getElementById('coach_email'+id).title="Please enter a valid email address of Coach.";
		document.getElementById('coach_namemsg'+id).style.display='none';
		document.getElementById('coach_emailmsg'+id).style.display='block';
		document.getElementById('coach_email'+id).focus();
	}
	else if(mobile.trim()=="" || mobile.trim().length!=11 || mob_flag==1)
	{
		document.getElementById('coach_mobile'+id).title="Please enter a valid mobile number of Coach(11 digits).";
		document.getElementById('coach_namemsg'+id).style.display='none';
		document.getElementById('coach_emailmsg'+id).style.display='none';
		document.getElementById('coach_mobilemsg'+id).style.display='block';
		document.getElementById('coach_mobile'+id).focus();
	}
	else if(institute.trim()=="")
	{
		document.getElementById('coach_institute'+id).title="Please enter a valid Designation with institute name of Coach.";
		document.getElementById('coach_namemsg'+id).style.display='none';
		document.getElementById('coach_emailmsg'+id).style.display='none';
		document.getElementById('coach_mobilemsg'+id).style.display='none';
		document.getElementById('coach_institutemsg'+id).style.display='block';
		document.getElementById('coach_institute'+id).focus();
	}
	//check image and id_card format
	else if(image2=="" || file_validate(image2)==false)
	{
		document.getElementById('coach_institute'+id).title="Please enter a valid Picture of Coach(JPEG,JPG,PNG) format.";
		document.getElementById('coach_namemsg'+id).style.display='none';
		document.getElementById('coach_emailmsg'+id).style.display='none';
		document.getElementById('coach_mobilemsg'+id).style.display='none';
		document.getElementById('coach_institutemsg'+id).style.display='none';
		document.getElementById('coach_imagemsg'+id).style.display='block';
		document.getElementById('coach_image'+id).focus();
	}
	else if(tsize.trim()=="")
	{
		document.getElementById('coach_t_shirt_size'+id).title="Please select a valid T-shirt size.";
		document.getElementById('coach_namemsg'+id).style.display='none';
		document.getElementById('coach_emailmsg'+id).style.display='none';
		document.getElementById('coach_mobilemsg'+id).style.display='none';
		document.getElementById('coach_institutemsg'+id).style.display='none';
		document.getElementById('coach_imagemsg'+id).style.display='none';
		document.getElementById('coach_t_shirt_sizemsg'+id).style.display='block';
		document.getElementById('coach_t_shirt_size'+id).focus();
	}
	else
	{
		document.getElementById('phase2_coa_'+id).style.display='none';
		document.getElementById('phase2_mem_'+id).style.display='block';
	}
}

function back_mem1(id,coach,mem) //back in coach page if available
{
	document.getElementById('phase2_mem_'+id).style.display='none';
	if(coach==1)
	{
		document.getElementById('phase2_coa_'+id).style.display='block';
	}
	else
	{
		document.getElementById('phase1_'+id).style.display='block';
	}
}

//Global checking function
function member_preview_picture(input,id,mem) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#mem'+mem+'_picture_pre'+id).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function member_preview_id(input,id,mem) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#mem'+mem+'_id_pre'+id).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
function member_check(id,coach,mem)
{
	var name=document.getElementById('mem'+mem+'_'+'name'+id).value;
	var email=document.getElementById('mem'+mem+'_'+'email'+id).value;
	var mobile=document.getElementById('mem'+mem+'_'+'mobile'+id).value;
	var institute=document.getElementById('mem'+mem+'_'+'institute'+id).value;
	
	var image=document.getElementById('mem'+mem+'_'+'image'+id).files[0];
	var image2=document.getElementById('mem'+mem+'_'+'image'+id).value;
	
	var id_card=document.getElementById('mem'+mem+'_'+'id_card'+id).files[0];
	var id_card2=document.getElementById('mem'+mem+'_'+'id_card'+id).value;
	
	var tsize=document.getElementById('mem'+mem+'_'+'t_shirt_size'+id).value;
	
	var mob_flag=0,cou=0,email_flag=0;
	
	for(var i=0;i<email.trim().length;i++)
	{
		if(email[i]=='@')
			email_flag=1;
	}
	
	for(var i=0;i<mobile.trim().length;i++)
	{
		if(mobile[i]>='0' && mobile[i]<='9')
			cou=cou+1;
	}
	if(cou!=mobile.trim().length)
		mob_flag=1;
	cou=0;
	
	if(name.trim()=="")
	{
		document.getElementById('mem'+mem+'_'+'name'+id).title="Please enter a valid name.";
		document.getElementById('mem'+mem+'_'+'namemsg'+id).style.display='block';
		document.getElementById('mem'+mem+'_'+'name'+id).focus();
	}
	else if(email.trim()=="" || email_flag==0)
	{
		document.getElementById('mem'+mem+'_'+'email'+id).title="Please enter a valid email address.";
		document.getElementById('mem'+mem+'_'+'namemsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'emailmsg'+id).style.display='block';
		document.getElementById('mem'+mem+'_'+'email'+id).focus();
	}
	else if(mobile.trim()=="" || mobile.trim().length!=11 || mob_flag==1)
	{
		document.getElementById('mem'+mem+'_'+'mobile'+id).title="Please enter a valid mobile no (11 digits).";
		document.getElementById('mem'+mem+'_'+'namemsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'emailmsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'mobilemsg'+id).style.display='block';
		document.getElementById('mem'+mem+'_'+'mobile'+id).focus();
	}
	else if(institute.trim()=="")
	{
		document.getElementById('mem'+mem+'_'+'institute'+id).title="Please enter a valid Institute name.";
		document.getElementById('mem'+mem+'_'+'namemsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'emailmsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'mobilemsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'institutemsg'+id).style.display='block';
		document.getElementById('mem'+mem+'_'+'institute'+id).focus();
	}
	//check image and id_card format
	else if(image2=="" || file_validate(image2)==false)
	{
		document.getElementById('mem'+mem+'_'+'institute'+id).title="Please enter a valid Image.";
		document.getElementById('mem'+mem+'_'+'namemsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'emailmsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'mobilemsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'institutemsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'imagemsg'+id).style.display='block';
		document.getElementById('mem'+mem+'_'+'image'+id).focus();
	}
	else if(id_card2=="" || file_validate(id_card2)==false)
	{
		document.getElementById('mem'+mem+'_'+'institute'+id).title="Please enter a valid Student ID Card image.";
		document.getElementById('mem'+mem+'_'+'namemsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'emailmsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'mobilemsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'institutemsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'imagemsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'id_cardmsg'+id).style.display='block';
		document.getElementById('mem'+mem+'_'+'id_card'+id).focus();
	}
	else if(tsize.trim()=="")
	{
		document.getElementById('mem'+mem+'_'+'t_shirt_size'+id).title="Please enter a valid T-shirt size.";
		document.getElementById('mem'+mem+'_'+'namemsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'emailmsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'mobilemsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'institutemsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'imagemsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'id_cardmsg'+id).style.display='none';
		document.getElementById('mem'+mem+'_'+'t_shirt_sizemsg'+id).style.display='block';
		document.getElementById('mem'+mem+'_'+'t_shirt_size'+id).focus();
	}
	else
	{
		return true;
	}
	return false;
}
//////////
var total_member=0;
function next_mem2(id,coach,mem)
{
	if(member_check(id,coach,mem)==true)
	{
		document.getElementById('phase2_mem_'+id).style.display='none';
		total_member=total_member+1;
		var team_members=document.getElementById('team_members'+id).value;
		if(total_member<team_members)
			document.getElementById('phase3_mem_'+id).style.display='block';
		else
		{
			//Call the finishing Page Function
			finish_phase(id,coach,mem);
		}
	}
}

function back_mem3(id,coach,mem) //member 2 to member 1
{
	document.getElementById('phase3_mem_'+id).style.display='none';
	document.getElementById('phase2_mem_'+id).style.display='block';
	total_member=total_member-1;
}

function next_mem3(id,coach,mem) //member 2 to member 3
{
	if(member_check(id,coach,mem)==true)
	{
		document.getElementById('phase3_mem_'+id).style.display='none';
		total_member=total_member+1;
		var team_members=document.getElementById('team_members'+id).value;
		if(total_member<team_members)
			document.getElementById('phase4_mem_'+id).style.display='block';
		else
		{
			//Call the finishing Page Function
			finish_phase(id,coach,mem);
		}
	}
}

function back_mem4(id,coach,mem) //member 3 to member 2
{
	document.getElementById('phase4_mem_'+id).style.display='none';
	document.getElementById('phase3_mem_'+id).style.display='block';
	total_member=total_member-1;
}

function next_mem4(id,coach,mem) //member 3 to member 4
{
	if(member_check(id,coach,mem)==true)
	{
		document.getElementById('phase4_mem_'+id).style.display='none';
		total_member=total_member+1;
		var team_members=document.getElementById('team_members'+id).value;
		if(total_member<team_members)
			document.getElementById('phase5_mem_'+id).style.display='block';
		else
		{
			//Call the finishing Page Function
			finish_phase(id,coach,mem);
		}
	}
}


function back_mem5(id,coach,mem) //member 4 to member 3
{
	document.getElementById('phase5_mem_'+id).style.display='none';
	document.getElementById('phase4_mem_'+id).style.display='block';
	total_member=total_member-1;
}

function next_mem5(id,coach,mem) //member 4 to member 5
{
	if(member_check(id,coach,mem)==true)
	{
		document.getElementById('phase5_mem_'+id).style.display='none';
		total_member=total_member+1;
		var team_members=document.getElementById('team_members'+id).value;
		if(total_member<team_members)
			document.getElementById('phase6_mem_'+id).style.display='block';
		else
		{
			//Call the finishing Page Function
			finish_phase(id,coach,mem);
		}
	}
}

function back_mem6(id,coach,mem) //member 5 to member 4
{
	document.getElementById('phase6_mem_'+id).style.display='none';
	document.getElementById('phase5_mem_'+id).style.display='block';
	total_member=total_member-1;
}

function next_mem6(id,coach,mem) //member 5 to finsih
{
	if(member_check(id,coach,mem)==true)
	{
		document.getElementById('phase6_mem_'+id).style.display='none';
		total_member=total_member+1;
		//Call the finishing Page Function
		finish_phase(id,coach,mem);
	}
}
//payment phase
var finish_member;
function finish_phase(id,coach,mem)
{
	finish_member=mem;
	document.getElementById('phase7_'+id).style.display='block';
}

function back_mem7(id,coach)
{
	document.getElementById('phase7_'+id).style.display='none';
	total_member=total_member-1;
	document.getElementById('phase'+(finish_member+1)+'_mem_'+id).style.display='block';
}
var team_id;
function submit_team(id,coach)
{
	var bkash=document.getElementById('team_bkash_mobile'+id).value;
	var bkash_trx=document.getElementById('team_bkash_trx'+id).value;
	var team_name=document.getElementById('team_name'+id).value.trim();
	var team_members=document.getElementById('team_members'+id).value;
	var cou=0,bkash_mob=0;
	cou=0;
	for(var i=0;i<bkash.trim().length;i++)
	{
		if(bkash[i]>='0' && bkash[i]<='9')
			cou=cou+1;
	}
	if(cou!=bkash.trim().length)
		bkash_mob=1;
	
	if(bkash.trim()=="" || bkash.trim().length!=11 || bkash_mob==1)
	{
		document.getElementById('team_bkash_mobile'+id).title="Please enter your Team valid (Sent money) Bkash Mobile No (11 digits).";
		document.getElementById('team_bkash_mobilemsg'+id).style.display='block';
		document.getElementById('team_bkash_mobile'+id).focus();
	}
	else if(bkash_trx.trim()=="")
	{
		document.getElementById('team_bkash_trx'+id).title="Please enter your Team valid (Sent money) Bkash Trx ID.";
		document.getElementById('team_bkash_mobilemsg'+id).style.display='none';
		document.getElementById('team_bkash_trxmsg'+id).style.display='block';
		document.getElementById('team_bkash_trx'+id).focus();
	}
	else
	{
		document.getElementById('phase7_'+id).style.display='none';
		document.getElementById('upload_info'+id).innerHTML=' Creating Team:';
		document.getElementById('phase8_'+id).style.display='block';
		document.getElementById('team_create_'+id).style.display='block';
		var xhttp1 = new XMLHttpRequest();
		xhttp1.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('team_prog_'+id).style.width= '100%';
				document.getElementById('team_prog_ti_'+id).innerHTML= 'Completed (100%)';
				team_id=this.responseText;
				//console.log("Team Created "+team_id);
				//second step
				second_phase(id,coach,team_id);
			}
		};
		xhttp1.open("POST", "ajax/create_team.php?go_techhunt=yes&bkash="+bkash+"&bkash_trx="+bkash_trx+"&event_id="+id+"&team_name="+team_name+"&team_members="+team_members, true);
		xhttp1.send();
		document.getElementById('team_prog_'+id).style.width= '50%';
		document.getElementById('team_prog_ti_'+id).innerHTML= 'Initializing (50%)...';
	}
}


function second_phase(id,coach,team_id)
{
	if(coach==1)
	{
		coach_reg(id,coach,team_id);
	}
	else
	{
		mem1_reg(id,coach,team_id);
	}
}

//Coach Registration
function coach_reg(id,coach,team_id)
{
////////////////////////
	document.getElementById('upload_info'+id).innerHTML=' Uploading Coach Details:';
	document.getElementById('team_create_'+id).style.display='none';
	document.getElementById('coach_create_'+id).style.display='block';
	document.getElementById('coach_image_create_'+id).style.display='block';
///////////////////////
	
	var name=document.getElementById('coach_name'+id).value;
	var email=document.getElementById('coach_email'+id).value;
	var mobile=document.getElementById('coach_mobile'+id).value;
	var institute=document.getElementById('coach_institute'+id).value;
	
	var image=document.getElementById('coach_image'+id).files[0];
	var fd_image=new FormData();
	var link='image'+id;
	fd_image.append(link, image);
	
	var tsize=document.getElementById('coach_t_shirt_size'+id).value;
	var image_name;
	
	//******* Coach Photo Upload ***** /
	var xhttp1 = new XMLHttpRequest();
	xhttp1.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			image_name=this.responseText;
			//information send from here 
			
			var xhttp3 = new XMLHttpRequest();
			xhttp3.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById('coach_prog_'+id).style.width= '100%';
					document.getElementById('coach_prog_ti_'+id).innerHTML= 'Completed (100%)';
					mem1_reg(id,coach,team_id);
				}
			};
			xhttp3.open("POST", "ajax/coach_register.php?go_techhunt=yes&name="+name+"&email="+email+"&mobile="+mobile+"&institute="+institute+"&tsize="+tsize+"&image_name="+image_name+"&team_id="+team_id, true);
			xhttp3.send();
			
			document.getElementById('coach_prog_'+id).style.width= '75%';
			document.getElementById('coach_prog_ti_'+id).innerHTML= 'Initializing (75%)...';
		}
	};
	xhttp1.upload.onprogress = function(e) {
		if (e.lengthComputable) {
		  var percentComplete = Math.round((e.loaded / e.total) * 100);
		  //console.log(percentComplete + '% uploaded');
		  document.getElementById('coach_image_prog_'+id).style.width= percentComplete+'%';
		  if(percentComplete==100)
			document.getElementById('coach_image_prog_ti_'+id).innerHTML= 'Congratulation. Uploaded Picture ('+percentComplete+'%)';
		  else
			document.getElementById('coach_image_prog_ti_'+id).innerHTML= 'Uploading Picture ('+percentComplete+'%)...';
		}
	};
	xhttp1.open("POST", "ajax/coach_register_photo.php?go_techhunt=yes&image="+link, true);
	xhttp1.send(fd_image);
	document.getElementById('coach_prog_'+id).style.width= '50%';
	document.getElementById('coach_prog_ti_'+id).innerHTML= 'Initializing (50%)...';
	
}
//Member 1 Registration
function mem1_reg(id,coach,team_id)
{
	//console.log('successfully done coach');
	////////////////////////
	document.getElementById('upload_info'+id).innerHTML=' Uploading Member (1) Details:';
	document.getElementById('coach_create_'+id).style.display='none';
	document.getElementById('coach_image_create_'+id).style.display='none';
	document.getElementById('mem1_create_'+id).style.display='block';
	document.getElementById('mem1_image_create_'+id).style.display='block';
	document.getElementById('mem1_id_card_create_'+id).style.display='block';
	///////////////////////
	var mem=1;
	
	var name=document.getElementById('mem'+mem+'_'+'name'+id).value;
	var email=document.getElementById('mem'+mem+'_'+'email'+id).value;
	var mobile=document.getElementById('mem'+mem+'_'+'mobile'+id).value;
	var institute=document.getElementById('mem'+mem+'_'+'institute'+id).value;
	
	var image=document.getElementById('mem'+mem+'_'+'image'+id).files[0];
	var fd_image=new FormData();
	var link='mem'+mem+'_'+'image'+id;
	fd_image.append(link, image);
	
	var id_card=document.getElementById('mem'+mem+'_'+'id_card'+id).files[0];
	var fd_id=new FormData();
	var link2='mem'+mem+'_'+'id_card'+id;
	fd_id.append(link2, id_card);
	
	var tsize=document.getElementById('mem'+mem+'_'+'t_shirt_size'+id).value;
	
	//******* Member 1 Photo Upload ***** /
	var xhttp1 = new XMLHttpRequest();
	xhttp1.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			image_name=this.responseText;
			
			//********** ID_CArd upload ****/
			var xhttp2 = new XMLHttpRequest();
			xhttp2.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					id_card_name=this.responseText;
					/////////////////////////////
					//information send from here 
					
					var xhttp3 = new XMLHttpRequest();
					xhttp3.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById('mem1_prog_'+id).style.width= '100%';
							document.getElementById('mem1_prog_ti_'+id).innerHTML= 'Completed (100%)';
							
							/////////////////////////////////////////////////////////////////////
							/////////////// Checking Phase Complete or not?? ////////////////
							var team_members=document.getElementById('team_members'+id).value;
							if(team_members>1)
							{
								mem2_reg(id,coach,team_id);
							}
							else
							{
								finished_registration(id,coach,team_id);
							}
						}
					};
					xhttp3.open("POST", "ajax/mem1_register.php?go_techhunt=yes&name="+name+"&email="+email+"&mobile="+mobile+"&institute="+institute+"&tsize="+tsize+"&image_name="+image_name+"&id_card_name="+id_card_name+"&team_id="+team_id, true);
					xhttp3.send();
					
					document.getElementById('mem1_prog_'+id).style.width= '75%';
					document.getElementById('mem1_prog_ti_'+id).innerHTML= 'Initializing (75%)...';
					
				}
			};
			xhttp2.upload.onprogress = function(e) {
				if (e.lengthComputable) {
				  var percentComplete = Math.round((e.loaded / e.total) * 100);
				  //console.log(percentComplete + '% uploaded');
				  document.getElementById('mem1_id_card_prog_'+id).style.width= percentComplete+'%';
				  if(percentComplete==100)
					document.getElementById('mem1_id_card_prog_ti_'+id).innerHTML= 'Congratulation. Uploaded ID Card ('+percentComplete+'%)';		
				  else
					document.getElementById('mem1_id_card_prog_ti_'+id).innerHTML= 'Uploading ID Card ('+percentComplete+'%)...';		
				}
			};
			xhttp2.open("POST", "ajax/mem1_register_id_card.php?go_techhunt=yes&id_card="+link2, true);
			xhttp2.send(fd_id);
			document.getElementById('mem1_prog_'+id).style.width= '50%';
			document.getElementById('mem1_prog_ti_'+id).innerHTML= 'Initializing (50%)...';
		}
	};
	xhttp1.upload.onprogress = function(e) {
		if (e.lengthComputable) {
		  var percentComplete = Math.round((e.loaded / e.total) * 100);
		  //console.log(percentComplete + '% uploaded');
		  document.getElementById('mem1_image_prog_'+id).style.width= percentComplete+'%';
		  if(percentComplete==100)
			document.getElementById('mem1_image_prog_ti_'+id).innerHTML= 'Congratulation. Uploaded Picture ('+percentComplete+'%)';
		  else
			document.getElementById('mem1_image_prog_ti_'+id).innerHTML= 'Uploading Picture ('+percentComplete+'%)...';
		}
	};
	xhttp1.open("POST", "ajax/mem1_register_photo.php?go_techhunt=yes&image="+link, true);
	xhttp1.send(fd_image);
	document.getElementById('mem1_prog_'+id).style.width= '25%';
	document.getElementById('mem1_prog_ti_'+id).innerHTML= 'Initializing (25%)...';
	
	
}
//Member 2 Registration
function mem2_reg(id,coach,team_id)
{
	//console.log('successfully done coach');
	////////////////////////
	document.getElementById('upload_info'+id).innerHTML=' Uploading Member (2) Details:';
	document.getElementById('mem1_create_'+id).style.display='none';
	document.getElementById('mem1_image_create_'+id).style.display='none';
	document.getElementById('mem1_id_card_create_'+id).style.display='none';
	document.getElementById('mem2_create_'+id).style.display='block';
	document.getElementById('mem2_image_create_'+id).style.display='block';
	document.getElementById('mem2_id_card_create_'+id).style.display='block';
	///////////////////////
	var mem=2;
	
	var name=document.getElementById('mem'+mem+'_'+'name'+id).value;
	var email=document.getElementById('mem'+mem+'_'+'email'+id).value;
	var mobile=document.getElementById('mem'+mem+'_'+'mobile'+id).value;
	var institute=document.getElementById('mem'+mem+'_'+'institute'+id).value;
	
	var image=document.getElementById('mem'+mem+'_'+'image'+id).files[0];
	var fd_image=new FormData();
	var link='mem'+mem+'_'+'image'+id;
	fd_image.append(link, image);
	
	var id_card=document.getElementById('mem'+mem+'_'+'id_card'+id).files[0];
	var fd_id=new FormData();
	var link2='mem'+mem+'_'+'id_card'+id;
	fd_id.append(link2, id_card);
	
	var tsize=document.getElementById('mem'+mem+'_'+'t_shirt_size'+id).value;
	
	//******* Member 1 Photo Upload ***** /
	var xhttp1 = new XMLHttpRequest();
	xhttp1.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			image_name=this.responseText;
			
			//********** ID_CArd upload ****/
			var xhttp2 = new XMLHttpRequest();
			xhttp2.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					id_card_name=this.responseText;
					/////////////////////////////
					//information send from here 
					
					var xhttp3 = new XMLHttpRequest();
					xhttp3.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById('mem2_prog_'+id).style.width= '100%';
							document.getElementById('mem2_prog_ti_'+id).innerHTML= 'Completed (100%)';
							
							/////////////////////////////////////////////////////////////////////
							/////////////// Checking Phase Complete or not?? ////////////////
							var team_members=document.getElementById('team_members'+id).value;
							if(team_members>2)
							{
								mem3_reg(id,coach,team_id);
							}
							else
							{
								finished_registration(id,coach,team_id);
							}
						}
					};
					xhttp3.open("POST", "ajax/mem1_register.php?go_techhunt=yes&name="+name+"&email="+email+"&mobile="+mobile+"&institute="+institute+"&tsize="+tsize+"&image_name="+image_name+"&id_card_name="+id_card_name+"&team_id="+team_id, true);
					xhttp3.send();
					
					document.getElementById('mem2_prog_'+id).style.width= '75%';
					document.getElementById('mem2_prog_ti_'+id).innerHTML= 'Initializing (75%)...';
					
				}
			};
			xhttp2.upload.onprogress = function(e) {
				if (e.lengthComputable) {
				  var percentComplete = Math.round((e.loaded / e.total) * 100);
				  //console.log(percentComplete + '% uploaded');
				  document.getElementById('mem2_id_card_prog_'+id).style.width= percentComplete+'%';
				  if(percentComplete==100)
					document.getElementById('mem2_id_card_prog_ti_'+id).innerHTML= 'Congratulation. Uploaded ID Card ('+percentComplete+'%)';		
				  else
					document.getElementById('mem2_id_card_prog_ti_'+id).innerHTML= 'Uploading ID Card ('+percentComplete+'%)...';		
				}
			};
			xhttp2.open("POST", "ajax/mem1_register_id_card.php?go_techhunt=yes&id_card="+link2, true);
			xhttp2.send(fd_id);
			document.getElementById('mem2_prog_'+id).style.width= '50%';
			document.getElementById('mem2_prog_ti_'+id).innerHTML= 'Initializing (50%)...';
		}
	};
	xhttp1.upload.onprogress = function(e) {
		if (e.lengthComputable) {
		  var percentComplete = Math.round((e.loaded / e.total) * 100);
		  //console.log(percentComplete + '% uploaded');
		  document.getElementById('mem2_image_prog_'+id).style.width= percentComplete+'%';
		  if(percentComplete==100)
			document.getElementById('mem2_image_prog_ti_'+id).innerHTML= 'Congratulation. Uploaded Picture ('+percentComplete+'%)';
		  else
			document.getElementById('mem2_image_prog_ti_'+id).innerHTML= 'Uploading Picture ('+percentComplete+'%)...';
		}
	};
	xhttp1.open("POST", "ajax/mem1_register_photo.php?go_techhunt=yes&image="+link, true);
	xhttp1.send(fd_image);
	document.getElementById('mem2_prog_'+id).style.width= '25%';
	document.getElementById('mem2_prog_ti_'+id).innerHTML= 'Initializing (25%)...';
}

//Member 3 Registration
function mem3_reg(id,coach,team_id)
{
	//console.log('successfully done coach');
	////////////////////////
	document.getElementById('upload_info'+id).innerHTML=' Uploading Member (3) Details:';
	document.getElementById('mem2_create_'+id).style.display='none';
	document.getElementById('mem2_image_create_'+id).style.display='none';
	document.getElementById('mem2_id_card_create_'+id).style.display='none';
	document.getElementById('mem3_create_'+id).style.display='block';
	document.getElementById('mem3_image_create_'+id).style.display='block';
	document.getElementById('mem3_id_card_create_'+id).style.display='block';
	///////////////////////
	var mem=3;
	
	var name=document.getElementById('mem'+mem+'_'+'name'+id).value;
	var email=document.getElementById('mem'+mem+'_'+'email'+id).value;
	var mobile=document.getElementById('mem'+mem+'_'+'mobile'+id).value;
	var institute=document.getElementById('mem'+mem+'_'+'institute'+id).value;
	
	var image=document.getElementById('mem'+mem+'_'+'image'+id).files[0];
	var fd_image=new FormData();
	var link='mem'+mem+'_'+'image'+id;
	fd_image.append(link, image);
	
	var id_card=document.getElementById('mem'+mem+'_'+'id_card'+id).files[0];
	var fd_id=new FormData();
	var link2='mem'+mem+'_'+'id_card'+id;
	fd_id.append(link2, id_card);
	
	var tsize=document.getElementById('mem'+mem+'_'+'t_shirt_size'+id).value;
	
	//******* Member 1 Photo Upload ***** /
	var xhttp1 = new XMLHttpRequest();
	xhttp1.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			image_name=this.responseText;
			
			//********** ID_CArd upload ****/
			var xhttp2 = new XMLHttpRequest();
			xhttp2.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					id_card_name=this.responseText;
					/////////////////////////////
					//information send from here 
					
					var xhttp3 = new XMLHttpRequest();
					xhttp3.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById('mem3_prog_'+id).style.width= '100%';
							document.getElementById('mem3_prog_ti_'+id).innerHTML= 'Completed (100%)';
							
							/////////////////////////////////////////////////////////////////////
							/////////////// Checking Phase Complete or not?? ////////////////
							var team_members=document.getElementById('team_members'+id).value;
							if(team_members>3)
							{
								mem4_reg(id,coach,team_id);
							}
							else
							{
								finished_registration(id,coach,team_id);
							}
						}
					};
					xhttp3.open("POST", "ajax/mem1_register.php?go_techhunt=yes&name="+name+"&email="+email+"&mobile="+mobile+"&institute="+institute+"&tsize="+tsize+"&image_name="+image_name+"&id_card_name="+id_card_name+"&team_id="+team_id, true);
					xhttp3.send();
					
					document.getElementById('mem3_prog_'+id).style.width= '75%';
					document.getElementById('mem3_prog_ti_'+id).innerHTML= 'Initializing (75%)...';
					
				}
			};
			xhttp2.upload.onprogress = function(e) {
				if (e.lengthComputable) {
				  var percentComplete = Math.round((e.loaded / e.total) * 100);
				  //console.log(percentComplete + '% uploaded');
				  document.getElementById('mem3_id_card_prog_'+id).style.width= percentComplete+'%';
				  if(percentComplete==100)
					document.getElementById('mem3_id_card_prog_ti_'+id).innerHTML= 'Congratulation. Uploaded ID Card ('+percentComplete+'%)';		
				  else
					document.getElementById('mem3_id_card_prog_ti_'+id).innerHTML= 'Uploading ID Card ('+percentComplete+'%)...';		
				}
			};
			xhttp2.open("POST", "ajax/mem1_register_id_card.php?go_techhunt=yes&id_card="+link2, true);
			xhttp2.send(fd_id);
			document.getElementById('mem3_prog_'+id).style.width= '50%';
			document.getElementById('mem3_prog_ti_'+id).innerHTML= 'Initializing (50%)...';
		}
	};
	xhttp1.upload.onprogress = function(e) {
		if (e.lengthComputable) {
		  var percentComplete = Math.round((e.loaded / e.total) * 100);
		  //console.log(percentComplete + '% uploaded');
		  document.getElementById('mem3_image_prog_'+id).style.width= percentComplete+'%';
		  if(percentComplete==100)
			document.getElementById('mem3_image_prog_ti_'+id).innerHTML= 'Congratulation. Uploaded Picture ('+percentComplete+'%)';
		  else
			document.getElementById('mem3_image_prog_ti_'+id).innerHTML= 'Uploading Picture ('+percentComplete+'%)...';
		}
	};
	xhttp1.open("POST", "ajax/mem1_register_photo.php?go_techhunt=yes&image="+link, true);
	xhttp1.send(fd_image);
	document.getElementById('mem3_prog_'+id).style.width= '25%';
	document.getElementById('mem3_prog_ti_'+id).innerHTML= 'Initializing (25%)...';
}

//Member 4 Registration
function mem4_reg(id,coach,team_id)
{
	//console.log('successfully done coach');
	////////////////////////
	document.getElementById('upload_info'+id).innerHTML=' Uploading Member (4) Details:';
	document.getElementById('mem3_create_'+id).style.display='none';
	document.getElementById('mem3_image_create_'+id).style.display='none';
	document.getElementById('mem3_id_card_create_'+id).style.display='none';
	document.getElementById('mem4_create_'+id).style.display='block';
	document.getElementById('mem4_image_create_'+id).style.display='block';
	document.getElementById('mem4_id_card_create_'+id).style.display='block';
	///////////////////////
	var mem=4;
	
	var name=document.getElementById('mem'+mem+'_'+'name'+id).value;
	var email=document.getElementById('mem'+mem+'_'+'email'+id).value;
	var mobile=document.getElementById('mem'+mem+'_'+'mobile'+id).value;
	var institute=document.getElementById('mem'+mem+'_'+'institute'+id).value;
	
	var image=document.getElementById('mem'+mem+'_'+'image'+id).files[0];
	var fd_image=new FormData();
	var link='mem'+mem+'_'+'image'+id;
	fd_image.append(link, image);
	
	var id_card=document.getElementById('mem'+mem+'_'+'id_card'+id).files[0];
	var fd_id=new FormData();
	var link2='mem'+mem+'_'+'id_card'+id;
	fd_id.append(link2, id_card);
	
	var tsize=document.getElementById('mem'+mem+'_'+'t_shirt_size'+id).value;
	
	//******* Member 1 Photo Upload ***** /
	var xhttp1 = new XMLHttpRequest();
	xhttp1.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			image_name=this.responseText;
			
			//********** ID_CArd upload ****/
			var xhttp2 = new XMLHttpRequest();
			xhttp2.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					id_card_name=this.responseText;
					/////////////////////////////
					//information send from here 
					
					var xhttp3 = new XMLHttpRequest();
					xhttp3.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById('mem4_prog_'+id).style.width= '100%';
							document.getElementById('mem4_prog_ti_'+id).innerHTML= 'Completed (100%)';
							
							/////////////////////////////////////////////////////////////////////
							/////////////// Checking Phase Complete or not?? ////////////////
							var team_members=document.getElementById('team_members'+id).value;
							if(team_members>4)
							{
								mem5_reg(id,coach,team_id);
							}
							else
							{
								finished_registration(id,coach,team_id);
							}
						}
					};
					xhttp3.open("POST", "ajax/mem1_register.php?go_techhunt=yes&name="+name+"&email="+email+"&mobile="+mobile+"&institute="+institute+"&tsize="+tsize+"&image_name="+image_name+"&id_card_name="+id_card_name+"&team_id="+team_id, true);
					xhttp3.send();
					
					document.getElementById('mem4_prog_'+id).style.width= '75%';
					document.getElementById('mem4_prog_ti_'+id).innerHTML= 'Initializing (75%)...';
					
				}
			};
			xhttp2.upload.onprogress = function(e) {
				if (e.lengthComputable) {
				  var percentComplete = Math.round((e.loaded / e.total) * 100);
				  //console.log(percentComplete + '% uploaded');
				  document.getElementById('mem4_id_card_prog_'+id).style.width= percentComplete+'%';
				  if(percentComplete==100)
					document.getElementById('mem4_id_card_prog_ti_'+id).innerHTML= 'Congratulation. Uploaded ID Card ('+percentComplete+'%)';		
				  else
					document.getElementById('mem4_id_card_prog_ti_'+id).innerHTML= 'Uploading ID Card ('+percentComplete+'%)...';		
				}
			};
			xhttp2.open("POST", "ajax/mem1_register_id_card.php?go_techhunt=yes&id_card="+link2, true);
			xhttp2.send(fd_id);
			document.getElementById('mem4_prog_'+id).style.width= '50%';
			document.getElementById('mem4_prog_ti_'+id).innerHTML= 'Initializing (50%)...';
		}
	};
	xhttp1.upload.onprogress = function(e) {
		if (e.lengthComputable) {
		  var percentComplete = Math.round((e.loaded / e.total) * 100);
		  //console.log(percentComplete + '% uploaded');
		  document.getElementById('mem4_image_prog_'+id).style.width= percentComplete+'%';
		  if(percentComplete==100)
			document.getElementById('mem4_image_prog_ti_'+id).innerHTML= 'Congratulation. Uploaded Picture ('+percentComplete+'%)';
		  else
			document.getElementById('mem4_image_prog_ti_'+id).innerHTML= 'Uploading Picture ('+percentComplete+'%)...';
		}
	};
	xhttp1.open("POST", "ajax/mem1_register_photo.php?go_techhunt=yes&image="+link, true);
	xhttp1.send(fd_image);
	document.getElementById('mem4_prog_'+id).style.width= '25%';
	document.getElementById('mem4_prog_ti_'+id).innerHTML= 'Initializing (25%)...';
}

//Member 5 Registration
function mem5_reg(id,coach,team_id)
{
	//console.log('successfully done coach');
	////////////////////////
	document.getElementById('upload_info'+id).innerHTML=' Uploading Member (5) Details:';
	document.getElementById('mem4_create_'+id).style.display='none';
	document.getElementById('mem4_image_create_'+id).style.display='none';
	document.getElementById('mem4_id_card_create_'+id).style.display='none';
	document.getElementById('mem5_create_'+id).style.display='block';
	document.getElementById('mem5_image_create_'+id).style.display='block';
	document.getElementById('mem5_id_card_create_'+id).style.display='block';
	///////////////////////
	var mem=5;
	
	var name=document.getElementById('mem'+mem+'_'+'name'+id).value;
	var email=document.getElementById('mem'+mem+'_'+'email'+id).value;
	var mobile=document.getElementById('mem'+mem+'_'+'mobile'+id).value;
	var institute=document.getElementById('mem'+mem+'_'+'institute'+id).value;
	
	var image=document.getElementById('mem'+mem+'_'+'image'+id).files[0];
	var fd_image=new FormData();
	var link='mem'+mem+'_'+'image'+id;
	fd_image.append(link, image);
	
	var id_card=document.getElementById('mem'+mem+'_'+'id_card'+id).files[0];
	var fd_id=new FormData();
	var link2='mem'+mem+'_'+'id_card'+id;
	fd_id.append(link2, id_card);
	
	var tsize=document.getElementById('mem'+mem+'_'+'t_shirt_size'+id).value;
	
	//******* Member 1 Photo Upload ***** /
	var xhttp1 = new XMLHttpRequest();
	xhttp1.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			image_name=this.responseText;
			
			//********** ID_CArd upload ****/
			var xhttp2 = new XMLHttpRequest();
			xhttp2.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					id_card_name=this.responseText;
					/////////////////////////////
					//information send from here 
					
					var xhttp3 = new XMLHttpRequest();
					xhttp3.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById('mem5_prog_'+id).style.width= '100%';
							document.getElementById('mem5_prog_ti_'+id).innerHTML= 'Completed (100%)';
							finished_registration(id,coach,team_id);
							
						}
					};
					xhttp3.open("POST", "ajax/mem1_register.php?go_techhunt=yes&name="+name+"&email="+email+"&mobile="+mobile+"&institute="+institute+"&tsize="+tsize+"&image_name="+image_name+"&id_card_name="+id_card_name+"&team_id="+team_id, true);
					xhttp3.send();
					
					document.getElementById('mem5_prog_'+id).style.width= '75%';
					document.getElementById('mem5_prog_ti_'+id).innerHTML= 'Initializing (75%)...';
					
				}
			};
			xhttp2.upload.onprogress = function(e) {
				if (e.lengthComputable) {
				  var percentComplete = Math.round((e.loaded / e.total) * 100);
				  //console.log(percentComplete + '% uploaded');
				  document.getElementById('mem5_id_card_prog_'+id).style.width= percentComplete+'%';
				  if(percentComplete==100)
					document.getElementById('mem5_id_card_prog_ti_'+id).innerHTML= 'Congratulation. Uploaded ID Card ('+percentComplete+'%)';		
				  else
					document.getElementById('mem5_id_card_prog_ti_'+id).innerHTML= 'Uploading ID Card ('+percentComplete+'%)...';		
				}
			};
			xhttp2.open("POST", "ajax/mem1_register_id_card.php?go_techhunt=yes&id_card="+link2, true);
			xhttp2.send(fd_id);
			document.getElementById('mem5_prog_'+id).style.width= '50%';
			document.getElementById('mem5_prog_ti_'+id).innerHTML= 'Initializing (50%)...';
		}
	};
	xhttp1.upload.onprogress = function(e) {
		if (e.lengthComputable) {
		  var percentComplete = Math.round((e.loaded / e.total) * 100);
		  //console.log(percentComplete + '% uploaded');
		  document.getElementById('mem5_image_prog_'+id).style.width= percentComplete+'%';
		  if(percentComplete==100)
			document.getElementById('mem5_image_prog_ti_'+id).innerHTML= 'Congratulation. Uploaded Picture ('+percentComplete+'%)';
		  else
			document.getElementById('mem5_image_prog_ti_'+id).innerHTML= 'Uploading Picture ('+percentComplete+'%)...';
		}
	};
	xhttp1.open("POST", "ajax/mem1_register_photo.php?go_techhunt=yes&image="+link, true);
	xhttp1.send(fd_image);
	document.getElementById('mem5_prog_'+id).style.width= '25%';
	document.getElementById('mem5_prog_ti_'+id).innerHTML= 'Initializing (25%)...';
}

//Completed the process
function finished_registration(id,coach,team_id)
{
	document.getElementById('upload_info'+id).innerHTML=' Congratulation!!';
	document.getElementById('www'+id).style.display='none';
	document.getElementById('team_done_'+id).style.display='block';
	//console.log('Done Registration');
	document.getElementById('team_final_msg'+id).innerHTML='Thanks for Register. Confirmation Email sent to you!!';				
}
//////////// Team Registration completed ////////

//Generate Team List
function get_teams(id)
{
	document.getElementById('team_box'+id).style.display='block';
}

//Get Individual List
function get_individual_details(id)
{
	document.getElementById('ind_details'+id).style.display='block';
}


//Get Team List
function get_team_details(id)
{
	document.getElementById('tea_details'+id).style.display='block';
}

