<style>
	.cmsTxtField{ width:200px;}
	.red{ color:red}
	.mandatory{ color:#910000;}
</style>

<? //session_start();?>
<?=$err;?>

<script language="javascript">
function validateform(fm){
	if(fm.lastname.value == ""){
		alert("Please type your Last Name.");
		fm.lastname.focus();
		return false;
	}	
	var goodEmail = fm.email.value.match(/\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\..{2,3}))$)\b/gi);		
	if(fm.firstname.value == ""){
		alert("Please type your First Name.");
		fm.firstname.focus();
		return false;
	}
	
	if(fm.address.value == ""){
		alert("Please Enter Your Address.");
		fm.address.focus();
		return false;
	}
	
	
	if(fm.telephone.value == ""){
		alert("Please Enter Your Telephone No.");
		fm.telephone.focus();
		return false;
	}
	
	if(fm.email.value == ""){
		alert("Please type your Email.");
		fm.email.focus();
		return false;
	}
	if (!goodEmail) {
		alert("The Email address you entered is invalid please try again!")
		fm.email.focus()
		return (false);
	}
	
	if(fm.product.value == ""){
		alert("Please Enter Product Name");
		fm.product.focus();
		return false;
	}
	
	if(fm.security_code.value == ""){
		alert("Please enter security code.");
		fm.security_code.focus();
		return false;
	}
	else if(fm.security_code.value.length < 6)
	{
		alert("Please enter valid length security code.");
		fm.security_code.focus();
		return false;
	}
}
</script>

<div class="cmsFeedbackWrapper" style="margin-left:14px; margin-right:10px;">
<div class="contentHdr"><h2 class="entry-title">Order Online</h2></div>
									
	<?php
		if (isset($_POST['save']))
		{
			
           if($_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code']))
			{
				//echo "inside";
			
			extract($_POST);
	
	$to = "";
	$subject = "Application Details :";
	
					
			$msg.= '<div style="float:left; width:200px;" align="left"><h3>Personal Details:</h3> </div><div align="left"></div>
					<div style="float:left; width:200px;" align="left">Full Name: </div><div align="left">' . $firstname." ".$lastname. '</div>
					
					<div style="float:left; width:200px;" align="left">Permanent Address: </div><div align="left">' . $address. '</div>
					
					<div style="float:left; width:200px;" align="left">Telephone: </div><div align="left">' . $telephone. '</div>
					
					<div style="float:left; width:200px;" align="left"><h3>Email Address</h3>: </div><div align="left">'.$email.'</div>   
					<div style="float:left; width:200px;" align="left">Product Name </div><div align="left">' . $product. '</div>';					
					
		/*echo $msg;	*/
		
		$msgthank="Your order is accepted successfully. We will contact you soon. Thank you.";
		
	$updated = false;
	
	include("sendemail.php");
	$arrTo = array("kh6ganesh@gmail.com", $email);
	
	if(sendEmail($arrTo[0], $subject, $msg, "Reliable") and sendEmail($arrTo[1], $subject, $msgthank, "Reliable"))
	{
		$err = "Your order is submitted successfully";
	}
	else
	{ 
		$err = "Error sending email";
	}		
}
else
{
	$err="Please Enter Correct Security Code";	
}
}

?>


<hr />
<style>
	#wpcf7-f243-p53-o1 .textbox input{ padding:0 2px; float:right; height:20px; background:#C5875F; border:1px solid #AB6A3F} 
	#wpcf7-f243-p53-o1 h4{ color:#18120C; font-size:14px;}
</style>
<div class="wpcf7" id="wpcf7-f243-p53-o1" style="width:500px;">
<form action="order-product" method="post" class="wpcf7-form" onSubmit="return validateform(this)" style="width:500px">
                   
                   <?php if(!empty($err)){ ?>
       					<div style="color:#961C32; font-family:Verdana, Geneva, sans-serif; font-size:14px">* <?php echo $err; ?>...</div><br />
                      <?php } ?>
     
	<!--<h4>Personal Details:</h4>-->
	<p class="form-input">Last Name <span class="mandatory">*</span>
    	<span class="textbox"><input type="text" name="lastname" value="" size="40" /></span>
 	</p>
	
    <p class="form-input">First Name: <span class="mandatory">*</span>
    	<span class="textbox"><input type="text" name="firstname" value="" size="40" /></span>
 	</p>
    
    <p class="form-input">Address: <span class="mandatory">*</span>
    	<span class="textbox"><input type="text" name="address" value="" size="40" /></span>
 	</p>
    
    <p class="form-input">Telephone No: <span class="mandatory">*</span>
    	<span class="textbox"><input type="text" name="telephone" value="" size="40" /></span>
 	</p>
    <p class="form-input">Email: <span class="mandatory">*</span>
    	<span class="textbox"><input type="text" name="email" size="40px" /></span>
    </p>
    
    <p class="form-input">Product Name: <span class="mandatory">*</span>
    	<span class="textbox">
        	<? if(isset($_GET['url'])){$urlGet=$groups->getByURLName($_GET['url']);} ?>
        	<? //$l=$_GET['url']; ?>
            <input type="text" value="<?=$urlGet['name'];?>" name="product" class="textbox" size="40" />
        </span>
 	</p>

	<p class="form-input" style="margin-top:20px;">Captcha: <span class="mandatory">*</span>
    	
        <span class="textbox">
        	<img src="includes/captcha.php?width=130&height=40&characters=6" id="captchaimage" style=" margin-left:164px;" />
        	<a href="javascript: void(0);" onclick="document.getElementById('captchaimage').src =  'includes/captcha.php?width=110&height=40&characters=6&' + Math.random(); return false;" class="more" style="color:#96000E; margin-top:11px;">[ Reload Image ]</a>
            <p style="color:#96000E; font-size:14px; font-family:Verdana, Geneva, sans-serif;">Enter the code above here (anti-spam):</p>
			<p style="margin-top:4px; margin-bottom:4px;"><span class="wpcf7-form-control-wrap Captcha">
            	<input id="security_code" name="security_code" type="text" maxlength="6" class="securitycode" style=" height:20px;background:#C5875F; border:1px solid #AB6A3F" /></span>
           	</p>
		
        </span>
	</p>
    <p><input type="submit" name="save" value="Order Now" class="" style="background:#961C32;border: 2px solid #320A11;border-radius: 4px;color: #FFFFFF;cursor: pointer;font-weight: bold;height: 25px;" /></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form>
</div>

	
									
</div><!-- #comments -->
		
