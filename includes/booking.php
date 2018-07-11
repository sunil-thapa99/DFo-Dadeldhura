<? $tripGet=$groups->getByURLName($_GET['url']);?>

<style>
	
</style>

<script language="javascript">
function validateform(fm){
	if(fm.txtname.value == ""){
		alert("Please type your Name.");
		fm.txtname.focus();
		return false;
	}	
	var goodEmail = fm.txtemail.value.match(/\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\..{2,3}))$)\b/gi);		
	if(fm.txtemail.value == ""){
		alert("Please type your E-mail.");
		fm.txtemail.focus();
		return false;
	}
	if (!goodEmail) {
		alert("The Email address you entered is invalid please try again!")
		fm.txtemail.focus()
		return (false);
	}			
	if(fm.txtcomment.value == ""){
		alert("Please type your Comment.");
		fm.txtcomment.focus();
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
<?php
if(!empty($feedbackmsg))
	$msg = $feedbackmsg;
elseif(isset($_REQUEST['msg']))
	$msg = $_REQUEST['msg'];
?>
<div class="cmsFeedbackWrapper" style="color:white; font-family:Arial, Helvetica, sans-serif; font-size:14px;">
    <h1 style="color: #ABD7FF;margin-bottom: 10px;margin-left: 20px;margin-top: 5px;text-align: left;">Inquiry Form</h1>
    <div style="padding-top:10px;">
		<form name="frmFeedback" method="post" action="" onSubmit="return validateform(this);">
        
        <style>  
				.tab tr th{ height:25px;}
				.tab tr td input{width:220px; background:#3E3E3E; color:white; border:1px solid #999; border-radius:4px; height:18px}
				.cmsTxtArea{ background:#3E3E3E; color:white; border:1px solid #999; border-radius:4px;}
        </style>
        
    <table class="tab cmsFormTable" width="100%" border="0" cellspacing="0" cellpadding="2">      
		<?php if(!empty($msg)){ ?>
				<tr>
        			<td colspan="2"><span style="color:red;"><?php echo $msg; ?></span></td>
      		</tr>
		<?php } ?>
        
        
        <!--name-->
      	<tr>
        		<th width="22%" align="left" valign="top">Name : <span style="color:red;">*</span></th>
        		<td width="78%" ><input type="text" class="cmsTxtField" name="txtname" value="<?php echo $txtname; ?>" /></td>
      	</tr><!--name end-->
     	
        <!--country--> 
      	<tr>
        		<th align="left" valign="top">Country :</th>
        		<td><input type="text" class="cmsTxtField" name="txtcountry" value="<?php echo $txtcountry; ?>" /></td>
      	</tr><!--country end-->
      	
        <!--address-->
      	<tr>
        		<th align="left" valign="top">Address :</th>
        		<td><input type="text" class="cmsTxtField" name="txtaddress" value="<?php echo $txtaddress; ?>" /></td>
      	</tr><!--end address-->
        
        <!--email-->
      	<tr>
        		<th align="left" valign="top">E-mail : <span style="color:red;">*</span></th>
        		<td><input type="text" class="cmsTxtField" name="txtemail" value="<?php echo $txtemail; ?>" /></td>
      	</tr><!--end email-->
        
        <!--contact no-->
      	<tr>
        		<th align="left" valign="top">Contact No: </th>
        		<td><input type="text" class="cmsTxtField" name="txtphone" value="<?php echo $txtphone; ?>" /></td>
      	</tr><!--end contact no-->
      	
        <!--Activity-->
      	<tr>
        		<th align="left" valign="top">Trip Package : <span style="color:red;">*</span></th>
        		<td>
                		<input type="text" class="cmsTxtField" name="trip" value="<?=$tripGet['name'];?>" />
                        
                </td>
      	</tr><!--end Activity-->
        
        <!--message-->
      	<tr>
        		<th valign="top" align="left">Message : <span style="color:red;">*</span></th>
        		<td><textarea style="width:406px;" class="cmsTxtArea" name="txtcomment" cols="" rows="6"><?php echo $txtcomment; ?></textarea></td>
      	</tr><!--end message-->
        
        <!--secority code-->
      	<tr>
        		<th align="left">Security Code : <span style="color:red;">*</span></th>
        		<td><img src="includes/captcha.php?width=110&height=40&characters=6" id="captchaimage" style="margin-bottom:10px;" />&nbsp; 
                <a href="javascript: void(0);" 
                onclick="document.getElementById('captchaimage').src = 'includes/captcha.php?width=110&height=40&characters=6&' + Math.random(); 	
                return false;" class="captchaReload" style="position:relative; top:-23px; color:red; text-decoration:none">[ Reload Image ]</a></td>
      	</tr><!--end security code-->
        
        <!--security field-->
      	<tr>
        		<th>&nbsp;</th>
        		<td><input id="security_code" name="security_code" type="text" maxlength="6" class="securitycode cmsTxtField" /></td>
      	</tr><!---->
        
        <!--submit-->
      	<tr>
        		<th>&nbsp;</th>
        		<td><input style="width:80px; height:22px; cursor:pointer; background:white; color:black" name="enquiry" type="submit" value="Submit" class="cmsFormBtn cmsBtn" /></td>
      	</tr><!--end submit-->
        
        <!--space-->
      	<tr>
        		<th>&nbsp;</th>
        		<td>&nbsp;</td>
      	</tr><!--end submit-->
        
      	<tr>
        	  <td colspan="2"><span class="cmsFormNotes">[ Fields marked with <span style="color:red;">*</span> are compulsory fields ]</span></td>
        </tr>
        
    </table>
	</form>
    </div>
  <!-- feedback ends -->
  <div class="CB"></div>
</div>
