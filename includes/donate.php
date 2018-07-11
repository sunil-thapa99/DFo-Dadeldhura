
<script language="javascript">


	function frmvalidate(fm){
		if(fm.name.value == ""){
			alert("Please type your Full Name.");
			fm.name.focus();
			return false;
		}		
		if(fm.address.value == ""){
			alert("Please type your Address.");
			fm.address.focus();
			return false;
		}		
		var goodEmail = fm.email.value.match(/\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\..{2,3}))$)\b/gi);		
		if(fm.email.value == ""){
			alert("Please type your E-mail ID.");
			fm.email.focus();
			return false;
		}
		if (!goodEmail) {
			alert("The Email address you entered is invalid please try again!")
			fm.email.focus()
			return (false);
		}		
			if(fm.captchCode.value == ""){
			alert("Please type your Captcha Code.");
			fm.captchCode.focus();
			return false;
		}								
	}
</script>
<style>

input.txtfield{
	font-size:11px;
	width: 200px;
	height:20px;
}

.btn{
	border:0;
	background:#9E815B;
	padding:2px 10px; 
	color:#FFFFFF;
	width:auto;
}
.dontTitle {
	color:#6B6B6B;
	font:12px "Trebuchet MS", Arial, Helvetica, sans-serif;
	text-align:right;
}
</style>
 <!--  <div  style='margin-top:10px;' class="TiTlE">Donate Form</div><br /> -->
 <div class="about">
<div style='font:11px Verdana, Geneva, sans-serif; color: #323333; text-align:justify;'>
		<?php  if (isset($_POST['save']))
		{
			$wrongCaptcha = false;
			
			if(isset($_SESSION['security_code']) && $_POST['captchCode'] == $_SESSION['security_code'] && !empty($_SESSION['security_code']))
			{
			if(!empty($_POST['name']))
			{
				if($_POST['dtype'] == "other")
					$_POST['dtype'] = $_POST['typeField'];
			
					unset($_SESSION['key']);
					$donate->save($_POST['name'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['country'], $_POST['fax'],  $_POST['dtype']);
					extract($_POST);
					$subject = "NCRS Donation Details";
					$to = "info@blsonepal.org.np";
					$to = "";
					$mess = '';
					$mess .= '
										<table border="0" width="100%" cellpadding="5" cellspacing="0">
											<tr>
												<td width:30%><strong>Name :</strong></td>
												<td>' . $name .'</td>
											</tr>
											<tr>
												<td><strong>Address :</strong></td>
												<td>'. $address .'</td>
											</tr>
											<tr>
												<td"><strong>Country Of Citizenship :</strong></td>
												<td>' . $country .'</td>
											</tr>
											<tr>
												<td><strong>Email Address :</strong></td>
												<td>' . $email .'</td>
											</tr>
											<tr>
												<td><strong>Phone :</strong></td>
												<td>' . $phone .'</td>
											</tr>
											<tr>
												<td><strong>Fax :</strong></td>
												<td>' . $fax .'</td>
											</tr>
											<tr>
												<td><strong>Donation Type :</strong></td>
												<td align="left">';
												if($dtype == "other")
													$mess .= $typeField;
												else
													$mess .= $dtype;

						$mess .= '																						
												</td>
											</tr>
										</table>
									 ';
						
						include("includes/sendemail.php");
						sendEmail($to, $subject, $mess, $email);
			
					$msg = "<strong style='color:red;'>Your donation has been send successfully Proceeded. Thank you.</strong>";				
				
					$_POST['name'] =  "";
			}
			else
				$msg = "Empty Name";
			
		}
		else		
			$worngCaptcha = true;
		}
		if (isset($msg))
		{
			echo $msg;
		}
		//else
		{
		?>
		<table width="100%" cellspacing="0" cellpadding="0" border="0">
        
        <tr>
        <td>
        
<?
	$result = $groups -> getById(CMS_DONATE_ID);
	$row = $conn -> fetchArray($result);
	{
		echo $row ['contents'];
	}

?>
        </td>
        </tr>
			<tr>
				<td>
					<form action="index.php?action=donate" method="post" onsubmit="return frmvalidate(this)">
                    <?php /*
                    <div style="background: white; margin: 0in 0in 7.5pt; line-height: normal; text-align: justify"><span style="font-size: 9pt; color: #6b4f2e">ACCESS will very much appreciate your contribution made in following details: </span></div>
<div>
<table cellspacing="0" cellpadding="0" border="1" style="border-right: medium none; border-top: medium none; margin: auto auto auto 7.5pt; border-left: medium none; border-bottom: medium none; border-collapse: collapse">
    <tbody>
        <tr style="height: 22.5pt">
            <td colspan="2" style="border-right: silver 1pt inset; padding-right: 1.5pt; border-top: silver 1pt inset; padding-left: 1.5pt; padding-bottom: 1.5pt; border-left: silver 1pt inset; padding-top: 1.5pt; border-bottom: silver 1pt inset; height: 22.5pt; background-color: transparent">
            <p style="margin: 7.5pt 0in; line-height: normal; text-align: justify"><b><span style="font-size: 9pt; color: #6b4f2e">Bank Details</span></b></p>
            <div style="text-align: justify">&nbsp;</div>
            </td>
        </tr>
        <tr style="height: 22.5pt">
            <td style="border-right: silver 1pt inset; padding-right: 1.5pt; border-top: #ebe9ed; padding-left: 1.5pt; padding-bottom: 1.5pt; border-left: silver 1pt inset; padding-top: 1.5pt; border-bottom: silver 1pt inset; height: 22.5pt; background-color: transparent">
            <div style="margin: 7.5pt 0in; line-height: normal; text-align: justify"><span style="font-size: 9pt; color: #6b4f2e">Bank a/c No.:</span></div>
            </td>
            <td style="border-right: silver 1pt inset; padding-right: 1.5pt; border-top: #ebe9ed; padding-left: 1.5pt; padding-bottom: 1.5pt; border-left: #ebe9ed; padding-top: 1.5pt; border-bottom: silver 1pt inset; height: 22.5pt; background-color: transparent">
            <div style="margin: 7.5pt 0in; line-height: normal; text-align: justify"><span style="font-size: 9pt; color: #6b4f2e">13CA044787NPR001</span></div>
            </td>
        </tr>
        <tr style="height: 22.5pt">
            <td style="border-right: silver 1pt inset; padding-right: 1.5pt; border-top: #ebe9ed; padding-left: 1.5pt; padding-bottom: 1.5pt; border-left: silver 1pt inset; padding-top: 1.5pt; border-bottom: silver 1pt inset; height: 22.5pt; background-color: transparent">
            <div style="margin: 7.5pt 0in; line-height: normal; text-align: justify"><span style="font-size: 9pt; color: #6b4f2e">Name of Bank:</span></div>
            </td>
            <td style="border-right: silver 1pt inset; padding-right: 1.5pt; border-top: #ebe9ed; padding-left: 1.5pt; padding-bottom: 1.5pt; border-left: #ebe9ed; padding-top: 1.5pt; border-bottom: silver 1pt inset; height: 22.5pt; background-color: transparent">
            <div style="margin: 7.5pt 0in; line-height: normal; text-align: justify"><span style="font-size: 9pt; color: #6b4f2e">Bank of Asia Nepal Ltd.</span></div>
            </td>
        </tr>
        <tr style="height: 22.5pt">
            <td style="border-right: silver 1pt inset; padding-right: 1.5pt; border-top: #ebe9ed; padding-left: 1.5pt; padding-bottom: 1.5pt; border-left: silver 1pt inset; padding-top: 1.5pt; border-bottom: silver 1pt inset; height: 22.5pt; background-color: transparent">
            <div style="margin: 7.5pt 0in; line-height: normal; text-align: justify"><span style="font-size: 9pt; color: #6b4f2e">Address:</span></div>
            </td>
            <td style="border-right: silver 1pt inset; padding-right: 1.5pt; border-top: #ebe9ed; padding-left: 1.5pt; padding-bottom: 1.5pt; border-left: #ebe9ed; padding-top: 1.5pt; border-bottom: silver 1pt inset; height: 22.5pt; background-color: transparent">
            <div style="margin: 7.5pt 0in; line-height: normal; text-align: justify"><span style="font-size: 9pt; color: #6b4f2e">Maharajgunj, Chakrapath, Kathmandu, Nepal</span></div>
            </td>
        </tr>
        <tr style="height: 22.5pt">
            <td style="border-right: silver 1pt inset; padding-right: 1.5pt; border-top: #ebe9ed; padding-left: 1.5pt; padding-bottom: 1.5pt; border-left: silver 1pt inset; padding-top: 1.5pt; border-bottom: silver 1pt inset; height: 22.5pt; background-color: transparent">
            <div style="margin: 7.5pt 0in; line-height: normal; text-align: justify"><span style="font-size: 9pt; color: #6b4f2e">Swift Code:</span></div>
            </td>
            <td style="border-right: silver 1pt inset; padding-right: 1.5pt; border-top: #ebe9ed; padding-left: 1.5pt; padding-bottom: 1.5pt; border-left: #ebe9ed; padding-top: 1.5pt; border-bottom: silver 1pt inset; height: 22.5pt; background-color: transparent">
            <div style="margin: 7.5pt 0in; line-height: normal; text-align: justify"><span style="font-size: 9pt; color: #6b4f2e">BOALNPKA</span></div>
            </td>
        </tr>
        <tr style="height: 22.5pt">
            <td style="border-right: silver 1pt inset; padding-right: 1.5pt; border-top: #ebe9ed; padding-left: 1.5pt; padding-bottom: 1.5pt; border-left: silver 1pt inset; padding-top: 1.5pt; border-bottom: silver 1pt inset; height: 22.5pt; background-color: transparent">
            <div style="margin: 7.5pt 0in; line-height: normal; text-align: justify"><span style="font-size: 9pt; color: #6b4f2e">Name of beneficiary:</span></div>
            </td>
            <td style="border-right: silver 1pt inset; padding-right: 1.5pt; border-top: #ebe9ed; padding-left: 1.5pt; padding-bottom: 1.5pt; border-left: #ebe9ed; padding-top: 1.5pt; border-bottom: silver 1pt inset; height: 22.5pt; background-color: transparent">
            <div style="margin: 7.5pt 0in; line-height: normal; text-align: justify"><span style="font-size: 9pt; color: #6b4f2e">Access</span></div>
            </td>
        </tr>
    </tbody>
</table>
<p style="text-align: justify"><span style="font-size: 9pt; color: #6b4f2e; line-height: 115%">All contributors will be kept informed about the use of the fund. Thank you for your continued support and good wishes.</span></p>
<div style="margin: 0in 0in 10pt; text-align: justify"><span style="font-size: 9pt; line-height: 115%">Gokul Subedi</span></div>
<div style="margin: 0in 0in 10pt; text-align: justify"><span style="font-size: 9pt; line-height: 115%">Chairperson</span></div>
<div>&nbsp;<a href="mailto:info@accessnepal.org">info@accessnepal.org</a></div>
</div>
*/ ?>
                    
                    
						<table border="0" width="100%" cellpadding="5" cellspacing="0">
                        
                        <tr>
                            <td colspan="2">
                            <h1>Donation Form</h1>
                            </td>
                        </tr>
                        
							<tr>
								<td class="dontTitle">Name :</td>
								<td>
									<input type="text" name="name" class="txtfield">
								</td>
							</tr>
							<tr>
								<td class="dontTitle">Address :</td>
								<td>
									<input name="address" type="text" id="address" class="txtfield">
								</td>
							</tr>
                            <tr>
								<td class="dontTitle">Country Of Citizenship :</td>
								<td>
									<input name="country" type="text" id="country" class="txtfield" />
								</td>
							</tr>
                            <tr>
								<td class="dontTitle">Email Address :</td>
								<td>
									<input name="email" type="text" id="email" class="txtfield" />
								</td>
							</tr>
							<tr>
								<td class="dontTitle">Phone :</td>
								<td>
									<input name="phone" type="text" id="phone" class="txtfield">
								</td>
							</tr>
							<tr>
								<td class="dontTitle">Fax :</td>
								<td>
									<input name="fax" type="text" id="fax" class="txtfield" />
								</td>
							</tr>
                            <tr>
								<td class="dontTitle" valign="top">Donation Type :</td>
								<td align="left">
									<input name="dtype" type="radio" value="Financial Support/Cash" id="financial" /> Financial Support/Cash<br />
									<input name="dtype" type="radio" value="Technical Equipment" id="technical" /> Technical Equipment<br />
									<input name="dtype" type="radio" value="other" id="other" /> Others <br />
                                    <br />
									<input name="typeField" type="text" id="typefield" class="txtfield" />
                                    
								</td>
							</tr>                         
                            <tr>
								<td class="dontTitle" valign="top">Verification Code :</td>
								<td>
									<input name="captchCode" type="text" id="captchCode" />
                                    <br />
									<?php 
									if($worngCaptcha) 
									echo "<span style='color:red;'>The Security code you enter is worng</span>";
									?>
                                    <br />
                                    <img src="includes/captcha.php">
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>
									<input type="submit" value="Send" name="save" class="btn">
								</td>
							</tr>
						</table>
					</form>
			</td>
			
			</tr>
			
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table>
 		<?php  }
		?>
</div>
</div>