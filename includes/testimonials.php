<div class="cmsTestimonialsWrapper"> 
  
  <script type="text/javascript">
	function testvalidation(thisform)
	{
		function emptyvalidation(entered, alertbox)
		{
			with (entered)
			{
				if (value==null || value=="")
				{
					if (alertbox!="") {alert(alertbox);} return false;
				}
				else {return true;}
			}
		} 
		with (thisform)
		{
			if (emptyvalidation(name,"Error ! Please type in your Name !")==false) {name.focus(); return false;}
			if (emptyvalidation(address,"Error ! Please type in your Address!")==false) {address.focus(); return false;}
			if (emptyvalidation(comments,"Error ! Please type in your comments !")==false) {comments.focus(); return false;}
			if (emptyvalidation(security_code,"Error ! Please type security code !")==false) {security_code.focus(); return false;}
			else { document.testimonial.submit(); }
		}
	}
	</script>

<div class="contentHdr">
	<h2>Our Testimonials</h2>
</div>
<div class="content">
  <form name="frmtestimonial" action="testimonials" method="post" enctype="multipart/form-data" onsubmit="return testvalidation(this)" id="testimonials">
    <table  width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top">If you find the service useful then please let us know. <a href="javascript:void(0);" onclick="document.getElementById('divform').style.display='block';document.getElementById('tests').style.display='none';" class="cmsTestimonialFormDisplayLink">Submit Your Own Experiences</a></td>
      </tr>
      <?php
			if(isset($_REQUEST['msg']))
				$msg = $_REQUEST['msg'];

			if(!empty($msg))
			{
			?>
      			<tr>
        			<td>&nbsp;</td>
      			</tr>
      
      			<tr>
        			<td align="left" valign="top" style="padding:5px;">
					<?php 
						echo '<div class="cmsFormSubmitMsg">'.'* '.ucfirst(str_replace("-", " ", $msg)).'...'.'</div>';
						if(isset($_REQUEST['msg']))
							echo '<div class="err">It will be Reviewed soon by Administrator</div>';
					?>
        			</td>
      			</tr>
      
	  		<?php
				$msg = "";
			}
			?>
      		
            <tr>
            
            <style>
				.in{ background:#C5875F; border:1px solid #AB6A3F; height:20px;}
				.subcss{ background:#961C32; width:70px; border: 2px solid #320A11;border-radius: 4px;color: #FFFFFF;cursor: pointer;font-weight: bold;height: 25px;}
            </style>
            
        <td valign="top" style="padding-left:30px;" ><div id="divform" style="display:block;">
            <table width="100%" border="0" cellpadding="2" cellspacing="0" class="testi">
              <tr>
                <th valign="middle">Photo :</th>
                <td valign="middle"><input name="filename" type="file" size="25" /></td>
              </tr>
              <tr>
                <th valign="middle">Name :<span class="red">*</span></th>
                <td valign="middle" ><input name="name" type="text" class="textbox in" id="name" value="<?php echo $_POST['name']; ?>" size="25" /></td>
              </tr>
              <tr>
                <th valign="middle">Address :<span class="red">*</span></th>
                <td valign="middle" ><input name="address" type="text" id="address" class="in" size="25" value="<?php echo $_POST['address']; ?>" /></td>
              </tr>
              <tr>
                <th valign="top">Experiences :<span class="red">*</span></th>
                <td valign="middle"><textarea name="comments" cols="40" rows="5" class="textbox in" id="comments"><?php echo $_POST['comments']; ?></textarea></td>
              </tr>
              <tr>
                <th>Security Code :<span class="red">*</span></th>
                <td><img src="includes/captcha.php?width=110&height=40&characters=6" id="captchaimage" />&nbsp; [<a href="javascript: void(0);" onclick="document.getElementById('captchaimage').src = 'includes/captcha.php?width=110&height=40&characters=6&' + Math.random(); return false;" class="captchaReload">Reload Image</a>]</td>
              </tr>
              <tr>
                <th>&nbsp;</th>
                <td><input id="security_code" name="security_code" type="text" class="securitycode in" maxlength="6" /></td>
              </tr>
              <tr>
                <th align="right" valign="middle">&nbsp;</th>
                <td valign="middle"><input name="btnTestimonials" type="submit" class="btnSubmit subcss" value="Send" />
                  <input name="Reset" type="reset" class="btnSubmit subcss" value="Clear" /></td>
              </tr>
              <tr>
                <th align="right" valign="middle">&nbsp;</th>
                <td valign="middle"><span class="cmsFormNotes">[ Fields marked with <span class="red">*</span> are compulsory fields ]</span></td>
              </tr>
            </table>
          </div></td>
      </tr>     
      		
            <tr>
        	
            	<td style="padding-top:18px;">
				<?php 
				$pagename = "testimonials/";
				
				$sql = "SELECT * FROM testimonials where status=1 order by id DESC, onDate Desc";
				$newsql = $sql;

				$limit = LISTING_LIMIT;
				
				include("includes/pagination.php");
				$return = Pagination($sql, "");
				
				
				$arr = explode(" -- ", $return);
				
				$start = $arr[0];
				$pagelist = $arr[1];
				$count = $arr[2];
				
				$newsql .= " LIMIT $start, $limit";
				
				$result = mysql_query($newsql);

				while($arrTests=mysql_fetch_array($result))
				{
					?>
          <div class="test">
	        <div class="testlist">
         	<span class="date">
          <?php 
          $arrDate = explode(' ',$arrTests['onDate']); 
          $arrDate1 = explode('-',$arrDate[0]);
          echo date("M j, Y",mktime(0,0,0,$arrDate1[1],$arrDate1[2],$arrDate1[0]));
          ?>
          </span>
          <span><?php echo $arrTests['name']?>, </span><span><?php echo $arrTests['address']; ?>&nbsp;&nbsp;</span> </div>
        	<div>
					<?php if(file_exists(CMS_TESTIMONIALS_DIR . $arrTests['image']) && !empty($arrTests['image'])){ ?>
          <img src="<?php echo CMS_TESTIMONIALS_DIR . $arrTests['image']; ?>" width="80" height="60" align="left" style="padding-right:5px;">
          <?php } ?>
          <?= nl2br($arrTests['comments']) ?>
          <div style="clear:both;"></div>
          <br />
<br />

          </div>
        </div>
        <?php
				} 
				if($count > $limit)
				echo $pagelist;
				?>
        </td>
      		</tr>
    </table>
  </form>
 <?php if(isset($_GET['submit'])){ ?>
 <script type="text/javascript">
 document.getElementById('divform').style.display = 'block';
 </script>
 <?php } ?>
</div>
</div>