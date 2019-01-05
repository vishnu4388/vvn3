<?php

$name= $_POST["name"]; 
$phone= $_POST["phone"];
$email= $_POST["email"]; 
$msg= $_POST["message"];

if(isset($_POST['send'])){   
			
				$message ='<h3>CONTACT  DETAILS</h3>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$_REQUEST['message'].'<br>
			<br>
			<table cellpadding="0" cellspacing="0">
			<tr><td>Name</td><td>&nbsp;:&nbsp;</td><td>'.$_REQUEST['name'].'</td></tr>
			<tr><td>E-Mail</td><td>&nbsp;:&nbsp;</td><td>'.$_REQUEST['email'].'</td></tr>
			<tr><td>phone</td><td>&nbsp;:&nbsp;</td><td>'.$_REQUEST['phone'].'</td></tr>
			
			</table>';
			     
				$to4='vishnu4388@gmail.com';
			   // $to5='abrahamk30@gmail.com';
				$from =$_REQUEST['email'];
				// Additional headers
				$headers = "From: ".$from."\r\n";
				$headers .= "Reply-To: ".$from. "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				$subject ='You have a mail from your website';
				// Mail it
				//$result=mail($to, $subject, $message, $headers) or die('An error happends on mail sending try again later');
				//$result=mail($to2, $subject, $message, $headers) or die('An error happends on mail sending try again later');
				//$result=mail($to3, $subject, $message, $headers) or die('An error happends on mail sending try again later
				//$result=mail($to6, $subject, $message, $headers) or die('An error happends on mail sending try again later');
				//$result=mail($to5, $subject, $message, $headers) or die('An error happends on mail sending try again later');
				$result=mail($to4, $subject, $message, $headers) or die('An error happends on mail sending try again later');
				
				$m = 0;
				
				
				
				
				
				if($result){
					$msge="<font color=red><b>Thank You for your message</b></font>";
					header("location:contact.php?m=1");
				//	echo $msge;
				}
				else
					//header("location:index.php?m=0");
					$msge="<font color=red><b>Sorry, Please try Again.</b></font>";
		
		}
	




?>