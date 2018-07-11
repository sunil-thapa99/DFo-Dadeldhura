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
}
</script>

<?php
if(isset($_POST['btnEnews']))
{
		extract($_POST);
		
		if(!empty($txtname) && !empty($txtemail))
		{
			$enewsletters -> save($txtname, $txtemail);
			$msg  = " You have been successfully subscribed !!" ;
		}	
	else
			$msg = "Some error with subscribing !!";
}

?>

<h1>Subscribe </h1>
  <p>
		<form name="frmEnews" method="post" action="index.php?action=enewsletter" onSubmit="return validateform(this);">
    <table width="100%" border="0" cellspacing="0" cellpadding="2" id="enews">      	
			<?php if(!empty($msg)){ ?>
	  <tr>
        <td colspan="2" class="errSuccMsg"><?php echo $msg; ?></td>
      </tr>
			<?php } ?>
      <tr>
        <td width="20%">Name : <span class="red">*</span></td>
        <td><input type="text" name="txtname" value="" /></td>
      </tr>
     
      <tr>
        <td>E-mail : <span class="red">*</span></td>
        <td><input type="text" name="txtemail" value="" /></td>
      </tr>     
      <tr>
        <td>&nbsp;</td>
        <td><input name="btnEnews" type="submit" value="Subscribe" class="btnCss" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">[ Fields marked with (<span class="red"> * </span>) are compulsory fields ]</td>
        </tr>
    </table>
		</form>
    </p>
  <!-- feedback ends -->
  <div style="clear:both;"></div>