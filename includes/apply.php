<script language="javascript">
function validateform(fm){
	if(fm.name.value == ""){
		alert("Please type your Name.");
		fm.name.focus();
		return false;
	}	
	var goodEmail = fm.email.value.match(/\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\..{2,3}))$)\b/gi);		
	if(fm.email.value == ""){
		alert("Please type your E-mail.");
		fm.email.focus();
		return false;
	}
	if (!goodEmail) {
		alert("The Email address you entered is invalid please try again!")
		fm.email.focus()
		return (false);
	}			
	if(fm.address.value == ""){
		alert("Please type your Address.");
		fm.address.focus();
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


<h1 class="entry-title">Apply now</h1>
<div style="clear:both"></div>
<br/>
									
	<?php
		if (isset($_POST['save']))
		{			
           if($_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code']))
			{
			
			extract($_POST);
	
	$to = "";
	$subject = "Trip Details :";
	
					
				$msg.= '<div style="float:left; width:200px;" align="left">Full Name: </div><div align="left">' . $name. '</div>
				        <div style="float:left; width:200px;" align="left">Gender: </div><div align="left">' . $gender. '</div>
						<div style="float:left; width:200px;" align="left">DOB: </div><div align="left">' . $dob. '</div>
						<div style="float:left; width:200px;" align="left">Marital Status: </div><div align="left">' . $maritalstatus. '</div>
						<div style="float:left; width:200px;" align="left">Nationality: </div><div align="left">' . $nationality. '</div>
						<div style="float:left; width:200px;" align="left">Address: </div><div align="left">' . $address. '</div>
						<div style="float:left; width:200px;" align="left">Country: </div><div align="left">' . $country. '</div>
						<div style="float:left; width:200px;" align="left">Telephone: </div><div align="left">' . $telephone. '</div>
				       <div style="float:left; width:200px;" align="left">Email* </div><div align="left">' . $email. '</div>
					   <div style="float:left; width:200px;" align="left">Education: </div><div align="left">' . $education. '</div>
					   <div style="float:left; width:200px;" align="left">Occupation: </div><div align="left">' . $occupation. '</div>
					   <div style="float:left; width:200px;" align="left">What is your approximate length of volunteering? </div><div align="left">' . $volulength. '</div>
					   <div style="float:left; width:200px;" align="left">When is you intended arrival date to Nepal? </div><div align="left">' . $timeinnepal. '</div>
					   <div style="float:left; width:200px;" align="left">What types of volunteer job you want to do? </div><div align="left">' . $typejob. '</div>
					   <div style="float:left; width:200px;" align="left">Why do you want to Volunteer Service? </div><div align="left">' . $mainreason. '</div>
					   <div style="float:left; width:200px;" align="left">Education/Professional Qualifications </div><div align="left">' . $edujob. '</div>
					   <div style="float:left; width:200px;" align="left">Work and Travel Experiences </div><div align="left">' . $exp. '</div>
					   <div style="float:left; width:200px;" align="left">Main Interests </div><div align="left">' . $hobbies. '</div>
					   <div style="float:left; width:200px;" align="left">Any medical history that we need to know or be careful about? </div><div align="left">' . $medical. '</div>
					   <div style="float:left; width:200px;" align="left">Eating Habbit </div><div align="left">' . $eating. '</div>
					   <div style="float:left; width:200px;" align="left">Please specify your additional comments and questions: </div><div align="left">' . $extras. '</div>
					   <div style="float:left; width:200px;" align="left">How did you find us? </div><div align="left">' . $find. '</div>';					
			
		/*echo $msg;	*/
	$updated = false;
	
	include("sendemail.php");
	$arrTo = array("sandeepgiri143@gmail.com", "info@everestlearningacademy.org");
	
	sendEmail($arrTo[0], $subject, $msg, $name);
	sendEmail($arrTo[1], $subject, $msg, $name);
	
	$updated = true;	
	
	if($updated)
	{
		$err = "Personal details submitted successfully";
		
	}
	else
	{ 
		$err = "Error sending email";
	
}		
			}
		}

?>
<div style="clear:both"></div>
<p><strong>Application Process</strong></p>
<ul>
<li>Enter all information in the form below, we will not entertain incomplete form.</li>
<li>Everest Learning Academy  will review your application. If you are accepted into the program, you will receive an email notification, reserving your position in the training program.</li>
<li>To confirm this reservation, we need to receive your flight arrival information and Registration amount at least a month before your training starts, you will receive an email of confirmation of your position in the training program.</li>

<li>Please read before applying to us</li>
<li>Please read before applying to us <a title="Terms and Conditions" href="terms-conditions" target="_blank">TERMS AND CONDITONS</a></li>
</ul>
<hr />
<div class="wpcf7" id="wpcf7-f243-p53-o1">
<form action="apply" method="post" class="wpcf7-form" onSubmit="return validateform(this)">
                   
                   <?php if(!empty($err)){ ?>
       <div style="color:#CC0000;"><?php echo $err; ?></div><br />
                      <?php } ?>
     

<p>Full Name <span class="mandatory">*</span><br />
    <span class="wpcf7-form-control-wrap first-name"><input type="text" name="name" value="" class="wpcf7-text wpcf7-validates-as-required" size="40" /></span> </p>

<p>Gender <span class="mandatory">*</span><br />
    <span class="wpcf7-form-control-wrap gender"><span class="wpcf7-radio"><span class="wpcf7-list-item"><label><input type="radio" name="gender" value="Male" />&nbsp;<span class="wpcf7-list-item-label">Male</span></label></span><span class="wpcf7-list-item"><label><input type="radio" name="gender" value="Female" />&nbsp;<span class="wpcf7-list-item-label">Female</span></label></span></span></span> </p>

<p>Date of Birth <span class="mandatory">*</span><br />
    <span class="wpcf7-form-control-wrap dob"><input type="text" name="dob" value="" class="wpcf7-text wpcf7-validates-as-required wpcf7-use-title-as-watermark" size="40" title="dd-mm-yyyy" /></span> </p>
<p>Marital Status <span class="mandatory">*</span><br />
    <span class="wpcf7-form-control-wrap marital-status"><select name="maritalstatus" class="wpcf7-select wpcf7-validates-as-required select"><option value="---">---</option><option value="Single">Single</option><option value="Married">Married</option><option value="Divorced">Divorced</option></select></span> </p>
<p>Nationality <span class="mandatory">*</span><br />

    <span class="wpcf7-form-control-wrap nationality"><input type="text" name="nationality" value="" class="wpcf7-text wpcf7-validates-as-required" size="40" /></span> </p>
<p>Full Address <span class="mandatory">*</span>:  City/State/Zip/Postal Code<br />
    <span class="wpcf7-form-control-wrap address"><textarea name="address" class="wpcf7-validates-as-required" cols="40" rows="10"></textarea></span> </p>
<p>Country <span class="mandatory">*</span><br />
    <span class="wpcf7-form-control-wrap country"><input type="text" name="country" value="" class="wpcf7-text wpcf7-validates-as-required" size="40" /></span> </p>

<p>Telephone <span class="mandatory">*</span><br />
    <span class="wpcf7-form-control-wrap telephone"><input type="text" name="telephone" value="" class="wpcf7-text wpcf7-validates-as-required" size="40" /></span> </p>
<p>Your Email <span class="mandatory">*</span><br />
    <span class="wpcf7-form-control-wrap your-email"><input type="text" name="email" value="" class="wpcf7-text wpcf7-validates-as-email wpcf7-validates-as-required" size="40" /></span> </p>
<p>Education Level <span class="mandatory">*</span><br />
    <span class="wpcf7-form-control-wrap education"><select name="education" class="wpcf7-select wpcf7-validates-as-required slect"><option value="---">---</option><option value="High School Certificate">High School Certificate</option><option value="Associates Degree">Associates Degree</option><option value="Bachelors Degree">Bachelors Degree</option><option value="Masters Degree">Masters Degree</option></select></span> </p>

<p>Occupation <span class="mandatory">*</span><br />
    <span class="wpcf7-form-control-wrap occupation"><input type="text" name="occupation" value="" class="wpcf7-text wpcf7-validates-as-required" size="40" /></span> </p>
<p>What is your approximate length of volunteering? <span class="mandatory">*</span><br />
    <span class="wpcf7-form-control-wrap vol-length"><select name="volulength" class="wpcf7-select wpcf7-validates-as-required"><option value="---">---</option><option value="2 weeks">2 weeks</option><option value="1 Month">1 Month</option><option value="6 weeks">6 weeks</option><option value="2 Months">2 Months</option><option value="3 Months">3 Months</option><option value="&gt;3 Months">&gt;3 Months</option></select></span> </p>

<p>When is you intended arrival date to Nepal? <span class="mandatory">*</span><br />
    <span class="wpcf7-form-control-wrap time-in-nepal"><input type="text" name="timeinnepal" value="" class="wpcf7-text wpcf7-validates-as-required wpcf7-use-title-as-watermark" size="40" title="dd-mm-yyyy" /></span> </p>
<p>What types of volunteer job you want to do?<br />
    <span class="wpcf7-form-control-wrap type-job"><input type="text" name="typejob" value="" class="wpcf7-text wpcf7-validates-as-required" size="40" /></span> </p>
<p>Why do you want to Volunteer Service?<br />
    <span class="wpcf7-form-control-wrap main-reason"><textarea name="mainreason" class="wpcf7-validates-as-required" cols="40" rows="10"></textarea></span> </p>

<p>Education/Professional Qualifications (Schools, University, further studies, diplomas) <br />
<span class="wpcf7-form-control-wrap edu-job"><textarea name="edujob" class="wpcf7-validates-as-required" cols="40" rows="10"></textarea></span></p>
<p>Work and Travel Experiences (including volunteer experiences) <br />
<span class="wpcf7-form-control-wrap exp"><textarea name="exp" class="wpcf7-validates-as-required" cols="40" rows="10"></textarea></span></p>
<p>Main Interests (ie. personal faith, hobbies, sports, etc.) <br />
<span class="wpcf7-form-control-wrap hobbies"><textarea name="hobbies" cols="40" rows="10"></textarea></span></p>
<p>Any medical history that we need to know or be careful about? <br />
<span class="wpcf7-form-control-wrap medical"><textarea name="medical" cols="40" rows="10"></textarea></span></p>
<p>Eating Habbit <br />

<span class="wpcf7-form-control-wrap eating"><span class="wpcf7-radio"><span class="wpcf7-list-item"><label><input type="radio" name="eating" value="Vegetarian" />&nbsp;<span class="wpcf7-list-item-label">Vegetarian</span></label></span><span class="wpcf7-list-item"><label><input type="radio" name="eating" value="Non-Vegetarian" />&nbsp;<span class="wpcf7-list-item-label">Non-Vegetarian</span></label></span><span class="wpcf7-list-item"><label><input type="radio" name="eating" value="Vegan" />&nbsp;<span class="wpcf7-list-item-label">Vegan</span></label></span></span></span></p>
<p>Please specify your additional comments and questions:  <br />
<span class="wpcf7-form-control-wrap extras"><textarea name="extras" cols="40" rows="10"></textarea></span></p>
<p>How did you find us? (ie. poster, friends, internet, conference, search engine, newspaper etc.) <br />
    <span class="wpcf7-form-control-wrap find-us"><input type="text" name="find" value="" class="wpcf7-text wpcf7-validates-as-required" size="40" /></span> </p>
<p><span class="wpcf7-form-control-wrap checkbox-259"><span class="wpcf7-validates-as-required wpcf7-checkbox"><span class="wpcf7-list-item"><input type="checkbox" name="checkbox-259[]" value="Yes" />&nbsp;<span class="wpcf7-list-item-label">Yes</span></span></span></span>, I've read <a href="terms-conditions" target="_blank">Terms & Conditions</a> of Hope and Home</p>

<p><img src="includes/captcha.php?width=110&height=40&characters=6" id="captchaimage" />[<a href="javascript: void(0);" onclick="document.getElementById('captchaimage').src =  'includes/captcha.php?width=110&height=40&characters=6&' + Math.random(); return false;" class="more">Reload Image</a>]</p>
<p>Enter the code above here (anti-spam):<br />
<span class="wpcf7-form-control-wrap Captcha"><input id="security_code" name="security_code" type="text" maxlength="6" class="securitycode" /></span><br />
<br/></p>
<p><input type="submit" name="save" value="Apply Now" class="" /></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form>
</div>

	
									
</div><!-- #comments -->
				
			</div><!-- #content -->
		</div><!-- #primary -->