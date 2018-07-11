<?php
include("init.php");
if(!isset($_SESSION['sessUserId']))//User authentication
{
 header("Location: login.php");
 exit();
}

if(isset($_POST['id']))
	$id = $_POST['id'];
elseif(isset($_GET['id']))
	$id = $_GET['id'];
else
	$id = 0;

$weight = $groups -> getLastWeightBills();

if($_GET['type'] == "edit")
{
	$result = $groups->getByIdBills($_GET['id']);
	$editRow = $conn->fetchArray($result);	
	extract($editRow);
}
if($_POST['type'] == "Save")
{
	extract($_POST);
	$vall="";
	//print_r($_POST); die();
	
	if(empty($description))
		$errMsg .= "<li>&#2325;&#2371;&#2346;&#2351;&#2366; &#2357;&#2367;&#2357;&#2352;&#2339; &#2361;&#2354;&#2381;&#2344;&#2369;&#2361;&#2379;&#2360;</li>";
	if(empty($busn))
		$errMsg .= "<li>&#2325;&#2371;&#2346;&#2351;&#2366; &#2348;.&#2313;.&#2358;&#2367;.&#2344;&#2306;. &#2361;&#2354;&#2381;&#2344;&#2369;&#2361;&#2379;&#2360;</li>"	;
	if(empty($spentTitle))
		$errMsg .= "<li>&#2325;&#2371;&#2346;&#2351;&#2366; &#2326;&#2352;&#2381;&#2330; &#2358;&#2367;&#2352;&#2381;&#2359;&#2325; &#2361;&#2354;&#2381;&#2344;&#2369;&#2361;&#2379;&#2360;</li>";
	if(empty($buying))
		$errMsg .= "<li>&#2325;&#2371;&#2346;&#2351;&#2366; &#2326;&#2352;&#2367;&#2342; &#2346;&#2381;&#2352;&#2325;&#2381;&#2352;&#2367;&#2351;&#2366; &#2361;&#2354;&#2381;&#2344;&#2369;&#2361;&#2379;&#2360;</li>";
	if(empty($panNo))
		$errMsg .= "<li>&#2325;&#2371;&#2346;&#2351;&#2366; &#2346;&#2381;&#2351;&#2366;&#2344; &#2344;&#2306; &#2361;&#2354;&#2381;&#2344;&#2369;&#2361;&#2379;&#2360;</li>";
	if(empty($paymentReceiver))
		$errMsg .= "<li>&#2325;&#2371;&#2346;&#2351;&#2366; &#2349;&#2369;&#2325;&#2381;&#2340;&#2366;&#2344;&#2368; &#2346;&#2366;&#2313;&#2344;&#2375; &#2357;&#2381;&#2351;&#2325;&#2381;&#2340;&#2367;/ &#2360;&#2306;&#2360;&#2381;&#2341;&#2366; &#2361;&#2354;&#2381;&#2344;&#2369;&#2361;&#2379;&#2360;</li>";
	if(empty($billDate))
		$errMsg .= "<li>&#2325;&#2371;&#2346;&#2351;&#2366; &#2348;&#2367;&#2354; / &#2344;&#2367;&#2357;&#2375;&#2342;&#2344; &#2346;&#2381;&#2352;&#2366;&#2346;&#2381;&#2340; &#2349;&#2319;&#2325;&#2379; &#2350;&#2367;&#2340;&#2367; &#2361;&#2354;&#2381;&#2344;&#2369;&#2361;&#2379;&#2360;</li>";
	if(empty($amount))
		$errMsg .= "<li>&#2325;&#2371;&#2346;&#2351;&#2366; &#2352;&#2325;&#2350; &#2361;&#2354;&#2381;&#2344;&#2369;&#2361;&#2379;&#2360;</li>";
	
	if(empty($errMsg))
	{
		
		$pid = $groups -> saveBills($id, $description, $busn, $spentTitle, $buying, $panNo, $paymentReceiver, $billDate, $amount, $remarks, $publish, $weight);
		if($id > 0)
			$pid = $id;
		//$groups -> saveImage($pid);
		//$groups -> saveMap($pid);
		if($id>0)
			header("Location: bills.php?type=edit&id=$id&msg=Bill details updated successfully");
		else
			header("Location: bills.php?msg=Bill details saved successfully");
		exit();
	}		
}

if($_GET['type'] == "toogle")
{
	if($package->toggleStatus($_GET['id']) > 0)
		header("location: bills.php?region=".$_GET['region']."&category=".$_GET['category']."&msg=Product status toogled successfully.");
}

if($_GET['type'] == "toogleFeatured")
{
	$id = $_GET['id'];
	$changeTo = $_GET['changeTo'];
	
	$sql = "UPDATE groups SET featured='$changeTo' WHERE id='$id'";
	$conn->exec($sql);
	header("location: bills.php?msg=Product feature status toogled successfully.");
	
}


if($_GET['type'] == "tooglePublish")
{
	$id = $_GET['id'];
	$changeTo = $_GET['changeTo'];
	
	$sql = "UPDATE bills SET publish='$changeTo' WHERE id='$id'";
	$conn->exec($sql);
	header("location: bills.php?&msg=Bill Show/Hide status toogled successfully.");
	
}

	
if($_GET['type'] == "removeImage")
{
	$groups->deleteImage($_GET['id']);
	//echo "hello";
	//header("location: bills.php?type=edit&id=".$_GET['id']."&msg=product image deleted successfully.");?>
	<script> document.location='bills.php?type=edit&id=<?=$_GET['id']?>&msg=product image deleted successfully.' </script>
<? }

if($_GET['type'] == "removeMap")
{
	$groups->deleteMap($_GET['id']);
	//echo "hello";
	//header("location: bills.php?type=edit&id=".$_GET['id']."&msg=product image deleted successfully.");?>
	<script> document.location='bills.php?type=edit&id=<?=$_GET['id']?>&msg=product map deleted successfully.' </script>
<? }

if($_GET['type']=="del")
{
		$groups -> deleteBill($_GET['id']);
		//echo "hello";
		//header("Location : bills.php?&msg=Bill deleted successfully.");?>
    	<script> document.location='bills.php?&msg=Bill deleted successfully.' </script>    
<? }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title><?php echo ADMIN_TITLE; ?></title>
<link href="../css/admin.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	color: #FF0000
}
-->
</style>
<script type="text/javascript" src="../js/cms.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
</head>
<body>
<table width="<?php echo ADMIN_PAGE_WIDTH; ?>" border="0" align="center" cellpadding="0"
	cellspacing="5" bgcolor="#FFFFFF">
  <tr>
    <td colspan="2"><?php include("header.php"); ?></td>
  </tr>
  <tr>
    <td width="<?php echo ADMIN_LEFT_WIDTH; ?>" valign="top"><?php include("leftnav.php"); ?></td>
    <td width="<?php echo ADMIN_BODY_WIDTH; ?>" valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="0">
        <tr>
          <td class="bgborder"><table width="100%" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td bgcolor="#fff"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading2">&nbsp; Manage Bills
                        <div style="float: right;">
                          <?
														$addNewLink = "bills.php";
													if(isset($_GET['category']) && !empty($_GET['category']))
														$addNewLink .= "?category=".$_GET['category'];
													?>
                          <a href="<?= $addNewLink?>" class="headLink">Add New</a></div></td>
                    </tr>
                    <tr>
                      <td>
                      <form action="<?= $_REQUEST['uri']?>" method="post" enctype="multipart/form-data">
                      <table width="100%" border="0" cellpadding="2" cellspacing="0">
                          <?php if(!empty($errMsg)){ ?>
                          <tr align="left">
                            <td colspan="3" class="err_msg"><?php echo $errMsg; ?></td>
                          </tr>
                          <?php } ?>                          
                            <tr><td></td></tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td class="tahomabold11"><strong> &#2357;&#2367;&#2357;&#2352;&#2339; : <span class="asterisk">*</span></strong></td>
                              <td><label for="description"></label>
                                <input name="description" type="text" class="text" id="descrition" style="width:330px" value="<?= $description; ?>" /></td>
                            </tr>
                            <tr><td></td></tr>                           
                            
                            <tr>
                              <td>&nbsp;</td>
                              <td class="tahomabold11"><strong> &#2348;.&#2313;.&#2358;&#2367;.&#2344;&#2306;. : <span class="asterisk">*</span></strong></td>
                              <td>
                              	<div style="float:left"><label for="urlname"></label>
                                <input name="busn" type="text" class="text" id="urlname" value="<?= $busn; ?>" /></div>
                                <div style="padding-left:10px; float:left; width:150px;" id="urlmsg">&nbsp;</div></td>
                            </tr>
                            <tr><td></td></tr>
                            
                            <tr>
                              <td>&nbsp;</td>
                              <td class="tahomabold11">
                              	<strong> &#2326;&#2352;&#2381;&#2330; &#2358;&#2367;&#2352;&#2381;&#2359;&#2325; : <span class="asterisk">*</span></strong>
                              </td>
                              <td>
                              	<div style="float:left"><label for="spentTitle"></label>
                                <input name="spentTitle" type="text" class="text" id="spentTitle" value="<?= $spentTitle; ?>" /></div>
                            </tr>
                            <tr><td></td></tr>
                            
                            <tr>
                              <td>&nbsp;</td>
                              <td class="tahomabold11">
                              	<strong> &#2326;&#2352;&#2367;&#2342; &#2346;&#2381;&#2352;&#2325;&#2381;&#2352;&#2367;&#2351;&#2366; : <span class="asterisk">*</span></strong>
                              </td>
                              <td>
                              	<div style="float:left"><label for="buying"></label>
                                <input name="buying" type="text" class="text" id="buying" value="<?= $buying; ?>" /></div>
                            </tr>
                            <tr><td></td></tr>
                            
                            <tr>
                              <td></td>
                              <td class="tahomabold11"><strong>&#2346;&#2381;&#2351;&#2366;&#2344; &#2344;&#2306; : <span class="asterisk">*</span></strong></td>
                              <td>
                              		<div style="float:left"><label for="panNo"></label>
                              		<input type="text" name="panNo" class="text" value="<?=$panNo;?>" /></div> 
                              </td>
                            </tr>
                            <tr><td></td></tr>
                            
                            <tr>
                              <td></td>
                              <td class="tahomabold11"><strong> &#2349;&#2369;&#2325;&#2381;&#2340;&#2366;&#2344;&#2368; &#2346;&#2366;&#2313;&#2344;&#2375; &#2357;&#2381;&#2351;&#2325;&#2381;&#2340;&#2367;/ &#2360;&#2306;&#2360;&#2381;&#2341;&#2366; : <span class="asterisk">*</span></strong></td>
                              <td>
                              		<div style="float:left"><label for="paymentReceiver"></label>
                              		<input type="text" name="paymentReceiver" class="text" style="width:330px" value="<?=$paymentReceiver;?>" /> </div>
                              </td>
                            </tr>
                            <tr><td></td></tr>
                            
                            <tr>
                              <td></td>
                              <td class="tahomabold11"><strong> &#2348;&#2367;&#2354; / &#2344;&#2367;&#2357;&#2375;&#2342;&#2344; &#2346;&#2381;&#2352;&#2366;&#2346;&#2381;&#2340; &#2349;&#2319;&#2325;&#2379; &#2350;&#2367;&#2340;&#2367; : <span class="asterisk">*</span></strong></td>
                              <td>
                              		<div style="float:left"><label for="billDate"></label>
                              		<input type="text" name="billDate" class="text" value="<?=$billDate;?>" /></div> 
                              </td>
                            </tr>
                            <tr><td></td></tr>
                            
                            <tr>
                              <td></td>
                              <td class="tahomabold11"><strong> &#2352;&#2325;&#2350; : <span class="asterisk">*</span></strong></td>
                              <td>
                              		<div style="float:left"><label for="amount"></label>
                              		<input type="text" name="amount" class="text" value="<?=$amount;?>" /></div> 
                              </td>
                            </tr>
                            <tr><td></td></tr>
                            
                            <tr>
                              <td></td>
                              <td class="tahomabold11"><strong> &#2325;&#2376;&#2347;&#2367;&#2351;&#2340; :</strong></td>
                              <td>
                              		<div style="float:left"><label for="remarks"></label>
                              		<input type="text" name="remarks" class="text" value="<?=$remarks;?>" /> </div>
                              </td>
                            </tr>
                            <tr><td></td></tr>
                            
                            <tr>
                              <td></td>
                              <td class="tahomabold11"><strong>&#2342;&#2375;&#2326;&#2366;&#2313;&#2344;&#2375; :</strong></td>
                              <td>
                              	<label>
                                  <input name="publish" type="radio" id="featured_0" value="No" checked="checked" />
                                  &#2361;&#2379;&#2312;&#2344;</label>
                                <label>
                                  <input type="radio" name="publish" value="Yes" id="featured_1" <? if($publish == 'Yes') echo 'checked="checked"';?> />
                                  &#2361;&#2379;</label>
                              </td>
                            </tr>
                            <tr><td></td></tr>      
                           
                            <tr>
                              <td></td>
                              <td class="tahomabold11"><strong>Weight :</strong></td>
                              <td><input name="weight" type="text" class="text" id="weight" value="<?php echo $weight; ?>" style="width:35px;" /></td>
                            </tr>
                            <tr><td></td></tr>
                            
                            <tr>
                              <td></td>
                              <td></td>
                              <td>
                              	<input name="type" type="submit" class="button" id="button" value="Save" />
                              	<?php if($_GET['type'] == "edit"){ ?>
                              	<input type="hidden" value="<?= $id?>" name="id" id="id" />
                                <?php }else{ ?>                                
                                <input name="reset" type="reset" class="button" id="button2" value="Clear" />
                                <?php } ?>
                                </td>
                            </tr>                        
                        </table>
                        </form></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
        <tr height="5"><td></td></tr>
        <tr>
          <td class="bgborder"><table width="100%" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading2">&nbsp;Product Lists</td>
                    </tr>
                    <tr>
                      <td><table width="100%"  border="0" cellpadding="4" cellspacing="0">
                          <tr bgcolor="#F1F1F1" class="tahomabold11">
                            <td width="1">&nbsp;</td>
                            <td style="width:10px"><strong>S.N.</strong></td>
                            <td style="width:155px"> &#2357;&#2367;&#2357;&#2352;&#2339; </td>
                            <td style="width:50px">&#2348;.&#2313;.&#2358;&#2367;.&#2344;&#2306;.</td>
                            <td style="width:100px">&#2349;&#2369;&#2325;&#2381;&#2340;&#2366;&#2344;&#2368; &#2346;&#2366;&#2313;&#2344;&#2375;</td>
                            <td style="width:50px;">&#2344;&#2367;&#2357;&#2375;&#2342;&#2344; &#2350;&#2367;&#2340;&#2367;</td>
                            <td style="width:50px;">&#2352;&#2325;&#2350;</td>
                            <td style="width:10px;">&#2342;&#2375;&#2326;&#2366;&#2313;&#2344;&#2375;</td>
                            <td style="width:10px">Weight</td>
                            <td style="width:55px"><strong>Action</strong></td>
                          </tr>
                          <?php
							$counter = 0;
							$pagename = "bills.php?";
							$sql = "SELECT * FROM bills";
							$sql .= " ORDER BY weight";
							//echo $sql;
							$limit = 20;
							include("paging.php"); $i=0;
							while($row = $conn -> fetchArray($result))
							{?>
                          		<tr <?php if($counter%2 != 0) echo 'bgcolor="#F7F7F7"'; else echo 'bgcolor="#FFFFFF"'; ?>>
                                    <td valign="top">&nbsp;</td>
                                    <td valign="top"><?=++$i;?></td>
                                    <td valign="top"><?= $row['description'] ?></td>
                                    <td valign="top"><?=$row['busn'];?></td>
                                    <td valign="top"><?=$row['paymentReceiver'];?></td>
                                    <td valign="top"><?=$row['billDate'];?></td>
                                    <td valign="top"><?=$row['amount'];?></td>
                                    
                                    <td valign="top">
                            		<?
									$changeTo = 'Yes';
									if ($row['publish'] == 'Yes')
										$changeTo = 'No';
									?>
                              		(<a href="bills.php?type=tooglePublish&id=<?= $row['id']?>&changeTo=<?=$changeTo;?>"><?=$row['publish'];?></a>)</td>
                                    
                              
                            		<td valign="top"><?= $row['weight'] ?></td>
                            		<td valign="top"> [ <a href="bills.php?type=edit&id=<?= $row['id']?>">Edit</a> | <a href="#" onClick="javascript: if(confirm('This will permanently remove this bill info from database. Continue?')){ document.location='bills.php?type=del&id=<?php echo $row['id']; ?>'; }">Delete</a> ]</td>
                          </tr>
                          <?
													}
													?>
                        </table>
                      <?php include("paging_show.php"); ?></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td colspan="2"><?php include("footer.php"); ?></td>
  </tr>
</table>
</body>
</html>