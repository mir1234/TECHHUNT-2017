<?php

	function sent_mail($to,$subject,$msg)
	{
		///Enter PHP mail function
		// To send HTML mail, the Content-type header must be set
        /*$headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        
        // Additional headers>';
        $headers[] = 'From: TechHunt <info@techhuntbd.org>';
        $headers[] = 'Cc: info@techhuntbd.org';
        */
        
        $headers[]= 'Reply-To: TechHunt <info@techhuntbd.org>';
        $headers[]= 'Return-Path: TechHunt <info@techhuntbd.org>';
        $headers[]= 'From: TechHunt <info@techhuntbd.org>'; 
        $headers[] = 'Cc: info@techhuntbd.org';
        $headers[]= 'Organization: TechHunt';
        $headers[]= 'MIME-Version: 1.0';
        $headers[]= 'Content-type: text/html; charset=iso-8859-1';
        $headers[]= 'X-Priority: 3';
        $headers[]= 'X-Mailer: PHP'. phpversion();
        
        
		mail($to, $subject, $msg, implode("\r\n", $headers));
	}
	function get_time()
	{
		$offset=6*60*60; //converting 5 hours to seconds.
	    $dateFormat="h:i a";
	    $post_time=gmdate($dateFormat, time()+$offset);
		$offset=6*60*60; //converting 5 hours to seconds.
		$dateFormat="d M Y";
		$post_date=gmdate($dateFormat, time()+$offset);
		return $post_time.'-'.$post_date;
	
	}
	function photo_upload($file,$i,$max_foto_size,$photo_extention,$folder_name,$path='')
	{
			if($file['tmp_name']=="")
			{
				return "Uploading error in image";
			}
			if($file['tmp_name']!="")
			{
					$p=$file['name'];
					$pos=strrpos($p,".");
					$ph=strtolower(substr($p,$pos+1,strlen($p)-$pos));
					$im_size =  round($file['size']/1024,2);

					if($im_size > $max_foto_size)
					   {
							echo "Image is Too Large";
							//return "Image is Too Large";
					   }
					$photo_extention = explode(",",$photo_extention);
					if(!in_array($ph,$photo_extention ))
					   {
							echo "Upload Correct Image";

							//return "Upload Correct Image";
					   }
			}
					$ran=date(time());
					$c=$ran.rand(1,10000);
					$ran.=$c.".".$ph;



					if(isset($file['tmp_name']) && is_uploaded_file($file['tmp_name']))
					{
					$ff = $folder_name."/".$ran;
					move_uploaded_file($file['tmp_name'], $ff );
					chmod($ff, 0777);
					}
		   return  $ran;
	}

?>