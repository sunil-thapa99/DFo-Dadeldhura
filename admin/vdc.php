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

$weight = $users -> getSubLastWeightVDC();
//echo $weight;

if($_GET['type'] == "edit")
{
	$result = $users->getByIdVDC($_GET['id']);
	$editRow = $conn->fetchArray($result);	
	extract($editRow);
}
if($_POST['type'] == "Save")
{
	extract($_POST);
	
	if(empty($name))
		$errMsg .= "<li>Please enter dsitrict name</li>";
	if(empty($district))
		$errMsg .= "<li>Please select district</li>"	;
	if(empty($wards))
		$errMsg .= "<li>Please enter no of wards</li>";
	
	if(empty($errMsg))
	{
		//echo $name." ".$district." ".$vdctype." ".$wards." ".$weight; die();
		$pid = $users -> saveVDC($id, $name, $district, $vdctype, $wards, $weight);
		if($id > 0)
			$pid = $id;
		//$users -> saveImage($pid);
		//$users -> saveMap($pid);
		if($id>0)
			header("Location: vdc.php?type=edit&id=$id&msg=VDC Municipality details updated successfully");
		else
			header("Location: vdc.php?msg=VDC Municipality details saved successfully");
		exit();
	}		
}

if($_GET['type'] == "toogle")
{
	if($package->toggleStatus($_GET['id']) > 0)
		header("location: vdc.php?region=".$_GET['region']."&category=".$_GET['category']."&msg=user status toogled successfully.");
}

if($_GET['type'] == "tooglePublish")
{
	$id = $_GET['id'];
	$changeTo = $_GET['changeTo'];
	
	$sql = "UPDATE usergroups SET publish='$changeTo' WHERE id='$id'";
	$conn->exec($sql);
	header("location: vdc.php?&msg=User Show/Hide status toogled successfully.");
}

if($_GET['type'] == "removeImage")
{
	$users->deleteImage($_GET['id']);
	//echo "hello";
	//header("location: vdc.php?type=edit&id=".$_GET['id']."&msg=User image deleted successfully.");?>
	<script> document.location='vdc.php?type=edit&id=<?=$_GET['id']?>&msg=User image deleted successfully.' </script>
<? }

if($_GET['type']=="del")
{
		$users -> deleteVDC($_GET['id']);
		//echo "hello";
		//header("Location : vdc.php?&msg=User deleted successfully.");?>
    	<script> document.location='vdc.php?&msg=User deleted successfully.' </script>    
<? }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title><?php echo ADMIN_TITLE; ?></title>
<link href="../css/admin.css" rel="stylesheet" type="text/css">
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
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

                      <td class="heading2">&nbsp; Manage VDC / Municipality

                        <div style="float: right;">

                          <?

														$addNewLink = "vdc.php";

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

                            <tr>

                              <td>&nbsp;</td>

                              <td class="tahomabold11"><strong> VDC / Municipality Name : <span class="asterisk">*</span></strong></td>

                              <td><label for="title"></label>

                                <input name="name" type="text" class="text" id="name" value="<?= $name; ?>" onChange="" /></td>

                            </tr>

                            <tr><td></td></tr>
                            
                            <tr>
                              <td>&nbsp;</td>
                              <td class="tahomabold11"><strong> District : <span class="asterisk">*</span></strong></td>
                              <td>
                              	<label for="title"></label>
                              	<select name="district" style="width:180px">
                                	<option>&#2332;&#2367;&#2354;&#2381;&#2354;&#2366; &#2352;&#2379;&#2332;&#2381;&#2344;&#2369;&#2361;&#2379;&#2360;</option>
                                    <?
                                    	$dist=mysql_query("select id,district_name from district order by id");
										while($distGet=mysql_fetch_array($dist))
										{?>
											<option value="<?=$distGet['id'];?>" 
											<? if($distGet['id']==$district){ echo 'selected="selected"';}?>><?=$distGet['district_name'];?></option>	
										<? }
									?>
                                </select>  
                              </td>
                            </tr>
                            
                            <tr><td></td></tr>
                            
                            <tr>
                              <td>&nbsp;</td>
                              <td class="tahomabold11"><strong> Select Type : <span class="asterisk">*</span></strong></td>
                              <td>
                              	<label for="title"></label>
                              	<select name="vdctype" style="width:180px">
                                    <option value="&#2327;&#2366; &#2357;&#2367; &#2360;" selected="selected">&#2327;&#2366; &#2357;&#2367; &#2360;</option>
                                    <option value="&#2344;&#2327;&#2352;&#2346;&#2366;&#2354;&#2367;&#2325;&#2366;" 
									<? if($vdctype=="&#2344;&#2327;&#2352;&#2346;&#2366;&#2354;&#2367;&#2325;&#2366;")
									{ echo 'selected="selected"';} ?>>
                                    	&#2344;&#2327;&#2352;&#2346;&#2366;&#2354;&#2367;&#2325;&#2366;
                                 	</option>
                                    <option value="&#2350;&#2361;&#2366;&#2344;&#2327;&#2352;&#2346;&#2366;&#2354;&#2367;&#2325;&#2366;" 
									<? if($vdctype=="&#2350;&#2361;&#2366;&#2344;&#2327;&#2352;&#2346;&#2366;&#2354;&#2367;&#2325;&#2366;")
									{ echo 'selected="selected"';} ?>>
                                    	&#2350;&#2361;&#2366;&#2344;&#2327;&#2352;&#2346;&#2366;&#2354;&#2367;&#2325;&#2366;
                                 	</option>
                                	<option value="&#2313;&#2346;&#2344;&#2327;&#2352;&#2346;&#2366;&#2354;&#2367;&#2325;&#2366;" 
									<? if($vdctype=="&#2313;&#2346;&#2344;&#2327;&#2352;&#2346;&#2366;&#2354;&#2367;&#2325;&#2366;")
									{ echo 'selected="selected"';} ?>>
                                    	&#2313;&#2346;&#2344;&#2327;&#2352;&#2346;&#2366;&#2354;&#2367;&#2325;&#2366;
                                    </option>
                                </select>  
                              </td>
                            </tr>
                            
                            <tr><td></td></tr>
                            
                            <tr>

                              <td>&nbsp;</td>
                              <td class="tahomabold11"><strong> No. of Wards : <span class="asterisk">*</span></strong></td>
                              <td><label for="title"></label>
                                <input name="wards" type="text" class="text" id="wards" value="<?= $wards; ?>" onChange="" /></td>
                            </tr>
                            <tr><td></td></tr>
                            
                            <tr>
                              <td></td>
                              <td class="tahomabold11"><strong>Weight :</strong></td>
                              <td><input name="weight" type="text" class="text" id="weight" value="<?php echo $weight; ?>" style="width:25px;" /></td>

                            </tr>

                            <tr><td></td></tr>
                         
                            <tr>
                              <td></td>
                              <td></td>
                              <td>
                              	<input name="type" type="submit" class="button" id="button" value="Save" />
                              	<?php if($_GET['type'] == "edit"){?>
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

                      <td class="heading2">&nbsp;User List</td>

                    </tr>

                    <tr>

                      <td><table width="100%"  border="0" cellpadding="4" cellspacing="0">
                          <tr bgcolor="#F1F1F1" class="tahomabold11">
                            <td width="1">&nbsp;</td>
                            <td style=""><strong>S. N.</strong></td>
                            <td style="">Name</td>
                            <td style="">District</td>
                            <td style="">Type</td>
                            <td style="">No of Wards</td>
                            <td style="">Weight</td>
                            <td style=""><strong>Action</strong></td>
                          </tr>

                          <?php
							$counter = 0;
							$pagename = "vdc.php?";
							$sql = "SELECT * FROM vdcmuncipality";
							$sql .= " ORDER BY weight";
							//echo $sql;

							$limit = 50;

							include("paging.php"); //$count=1;

							while($row = $conn -> fetchArray($result))

							{
								$counter++;?>
                          		<tr <?php if($counter%2 != 0) echo 'bgcolor="#F7F7F7"'; else echo 'bgcolor="#FFFFFF"'; ?>>
                                    <td valign="top">&nbsp;</td>
                                    <td valign="top"><?=$counter;?></td>
                                    <td valign="top"><?= $row['name'] ?></td>
                                    <td valign="top">
										<?
											$districtid=$row['district'];
											$sql="select * from district where id='$districtid'"; //echo $sql; die();
                                        	$d=mysql_query($sql);
											$res=mysql_fetch_assoc($d);
											echo $res['district_name'];
										?>
                                  	</td>
                                    <td valign="top"><?=$row['vdctype'];?></td>
                                    <td valign="top"><?=$row['wards'];?></td>
                                    
                            		<td valign="top"><?= $row['weight'] ?></td>

                            		<td valign="top"> [ <a href="vdc.php?type=edit&id=<?= $row['id']?>">Edit</a> | <a href="#" onClick="javascript: if(confirm('This will permanently remove this record from database. Continue?')){ document.location='vdc.php?type=del&id=<?php echo $row['id']; ?>'; }">Delete</a> ]</td>

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