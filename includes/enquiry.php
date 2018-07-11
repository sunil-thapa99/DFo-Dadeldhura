<?php
if(isset($_POST['enquiry']))
{
	if($_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code']))
	{
		extract($_POST);
		
		if(!empty($txtname) && !empty($txtemail) && !empty($txtcomment) && !empty($security_code))
		{
			//$feedbacks -> save($txtname, $txtaddress, $txtemail, $txtcountry, $txtcomment, $txtphone, $activity);
			
			$msg='Name='.$txtname.'<br/>Address='.$txtaddress.'<br/>Email='.$txtemail.'<br/>Country='.$txtcountry.'<br/>Comment='.$txtcomment.'<br/>Trip Package='.$trip;
			//include('includes/sendemail.php');
			$headers  = "";
			$headers .= "MIME-Version: 1.0 \r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
			$headers .= "X-Priority: 1\r\n";
			//sendEmail("kh6ganesh@yahoo.com", "Inquiry", $msg, $name);
			
			$arrTo = "info@celebritytravels.com";
			$subject = "Inquiry Details :";
			
			mail($arrTo, $subject, $msg, $headers);
			
			header("Location: index.php?action=feedback&msg=Enquiry sent successfully");
			exit();
		}	
		else
			$feedbackmsg = "Please enter all required fields";
	}
	else
			$feedbackmsg = "Please enter correct security code";
}
?>