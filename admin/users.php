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

$weight = $users -> getSubLastWeight();
//echo $weight;

if($_GET['type'] == "edit")
{
	$result = $users->getById($_GET['id']);
	$editRow = $conn->fetchArray($result);	
	extract($editRow);
}
if($_POST['type'] == "Save")
{
	extract($_POST);
	
	if(empty($name))
		$errMsg .= "<li>Please enter your name</li>";
	if(empty($username))
		$errMsg .= "<li>Please enter username</li>"	;
	if(empty($password))
		$errMsg .= "<li>Please enter password</li>";
	if(empty($email))
		$errMsg .= "<li>Please enter email</li>";
	if(empty($phone))
		$errMsg .= "<li>Please enter phone number</li>";
	if(empty($website))
		$errMsg .= "<li>Please enter website</li>";
	if(empty($user_type))
		$errMsg .= "<li>Please select user type</li>";
		
	if(empty($errMsg))
	{
		$pid = $users -> saveUser($id, $name, $username, $password, $district, $email, $phone, $website, $user_type, $org_info, $publish, $weight);
		if($id > 0)
			$pid = $id;
		$users -> saveImage($pid);
		//$users -> saveMap($pid);
		if($id>0)
			header("Location: users.php?type=edit&id=$id&msg=User details updated successfully");
		else
			header("Location: users.php?msg=User details saved successfully");
		exit();
	}		
}

if($_GET['type'] == "toogle")
{
	if($package->toggleStatus($_GET['id']) > 0)
		header("location: users.php?region=".$_GET['region']."&category=".$_GET['category']."&msg=user status toogled successfully.");
}

if($_GET['type'] == "tooglePublish")
{
	$id = $_GET['id'];
	$changeTo = $_GET['changeTo'];
	
	$sql = "UPDATE usergroups SET publish='$changeTo' WHERE id='$id'";
	$conn->exec($sql);
	header("location: users.php?&msg=User Show/Hide status toogled successfully.");
}

if($_GET['type'] == "removeImage")
{
	$users->deleteImage($_GET['id']);
	//echo "hello";
	//header("location: users.php?type=edit&id=".$_GET['id']."&msg=User image deleted successfully.");?>
	<script> document.location='users.php?type=edit&id=<?=$_GET['id']?>&msg=User image deleted successfully.' </script>
<? }

if($_GET['type']=="del")
{
		$users -> delete($_GET['id']);
		//echo "hello";
		//header("Location : users.php?&msg=User deleted successfully.");?>
    	<script> document.location='users.php?&msg=User deleted successfully.' </script>    
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

                      <td class="heading2">&nbsp; Manage User

                        <div style="float: right;">

                          <?

														$addNewLink = "users.php";

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

                              <td class="tahomabold11"><strong> Name : <span class="asterisk">*</span></strong></td>

                              <td><label for="title"></label>

                                <input name="name" type="text" class="text" id="title" value="<?= $name; ?>" onChange="" /></td>

                            </tr>

                            <tr><td></td></tr>                           

                            <tr>

                              <td>&nbsp;</td>

                              <td class="tahomabold11"><strong> Username : <span class="asterisk">*</span></strong></td>

                              <td><label for="title"></label>

                                <input name="username" type="text" class="text" id="title" value="<?= $username; ?>" onChange="" /></td>

                            </tr>

                            <tr><td></td></tr>

                            <tr>

                              <td>&nbsp;</td>
                              <td class="tahomabold11"><strong> Password : <span class="asterisk">*</span></strong></td>
                              <td><label for="title"></label>
                                <input name="password" type="text" class="text" id="title" value="<?= $password; ?>" onChange="" /></td>
                            </tr>
                            <tr><td></td></tr>
                            
                            <tr>
                              <td>&nbsp;</td>
                              <td class="tahomabold11"><strong> District :</strong></td>
                              <td>
                              	<label for="title"></label>
                              	<select name="district" style="width:180px">
                                	<option>Select District</option>
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
                              <td class="tahomabold11"><strong> Email : <span class="asterisk">*</span></strong></td>
                              <td><label for="title"></label>
                                <input name="email" type="text" class="text" id="title" value="<?= $email; ?>" onChange="" /></td>
                            </tr>
                            <tr><td></td></tr>
                            
                            <tr>
							
                              <td>&nbsp;</td>
                              <td class="tahomabold11"><strong> Phone : <span class="asterisk">*</span></strong></td>
                              <td><label for="title"></label>
                                <input name="phone" type="text" class="text" id="title" value="<?= $phone; ?>" onChange="" /></td>
                            </tr>
                            <tr><td></td></tr>
                            
                            <tr>
							
                              <td>&nbsp;</td>
                              <td class="tahomabold11"><strong> Website : <span class="asterisk">*</span></strong></td>
                              <td><label for="title"></label>
                                <input name="website" type="text" class="text" id="title" value="<?= $website; ?>" onChange="" /></td>
                            </tr>
                            <tr><td></td></tr>
                            
                            <tr>
                              <td>&nbsp;</td>
                              <td class="tahomabold11"><strong> User Type : <span class="asterisk">*</span></strong></td>
                              <td>
                              	<label for="title"></label>
                              	<select name="user_type" style="width:180px">
                                	<option value="">Select User Type</option>
                                    <?
                                    	$utype=mysql_query("select id,user_type from usertype where publish='Yes' order by weight");
										while($utypeGet=mysql_fetch_array($utype))
										{?>
											<option value="<?=$utypeGet['id'];?>" 
											<? if($utypeGet['id']==$user_type){ echo 'selected="selected"';}?>><?=$utypeGet['user_type'];?></option>	
										<? }
									?>
                                </select>  
                              </td>
                            </tr>
                            <tr><td></td></tr>
                            
                            <tr>
                              <td></td>
                              <td class="tahomabold11"><strong>Organization Information :</strong></td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr><td></td></tr>
                            <tr>
                              <td></td>
                              <td colspan="2">
								<?php
									include ("../fckeditor/fckeditor.php");
									$sBasePath="../fckeditor/";		
									$oFCKeditor = new FCKeditor('org_info');
									$oFCKeditor->BasePath	= $sBasePath ;
									$oFCKeditor->Value		= $org_info;
									$oFCKeditor->Height		= "250";
									$oFCKeditor->ToolbarSet	= "Rupens";	
									$oFCKeditor->Create();
								?>

                              </td>
                            </tr>
                            <tr><td></td></tr>                            
                            <tr>
                              <td></td>
                              <td class="tahomabold11"><strong>Publish :</strong></td>
                              <td>
                              	<label>
                                  <input name="publish" type="radio" id="featured_0" value="No" checked="checked" />
                                  No</label>
                                <label>
                                  <input type="radio" name="publish" value="Yes" id="featured_1" <? if($publish == 'Yes') echo 'checked="checked"';?> />
                                  Yes</label>
                              </td>
                            </tr>
                            
                            <tr><td></td></tr>
                            
                            <tr>
                              <td></td>
                              <td class="tahomabold11"><strong>Weight :</strong></td>
                              <td><input name="weight" type="text" class="text" id="weight" value="<?php echo $weight; ?>" style="width:25px;" /></td>

                            </tr>

                            <tr><td></td></tr>

							<? if(file_exists("../".CMS_GROUPS_DIR.$editRow['image']) and $editRow['image']!='' && $_GET['type'] == 'edit')
							{?>
                                <tr>
                                  <td></td>
                                  <td class="tahomabold11"><strong>Current Image : </strong></td>
                                  <td><img src="../data/imager.php?file=../<?= CMS_GROUPS_DIR.$editRow['image']; ?>&amp;mw=150&amp;mh=150" />
                                  [ <a href="users.php?type=removeImage&id=<?= $id?>">Remove Image</a>]</td>
                                </tr>
                            <? }?>
                            <tr><td></td></tr>
                            <tr>
                              <td></td>
                              <td class="tahomabold11"><strong>Image :</strong></td>
                              <td><label for="image"></label>
                                <input type="file" name="image" id="image" /></td>
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

                            <td style=""><strong>Image</strong></td>

                            <td style=""> Name </td>

                            <td style="">Username</td>

                            <td style="">Password</td>
                            <td style="">User type</td>
                            <td style="">District</td>
                            
                            <td style="">Show</td>

                            <td style="">Weight</td>

                            <td style=""><strong>Action</strong></td>

                          </tr>

                          <?php

							$counter = 0;

							$pagename = "users.php?";

							$sql = "SELECT * FROM usergroups";

							$sql .= " ORDER BY weight";

							//echo $sql;

							$limit = 50;

							include("paging.php");

							while($row = $conn -> fetchArray($result))

							{?>

                          		<tr <?php if($counter%2 != 0) echo 'bgcolor="#F7F7F7"'; else echo 'bgcolor="#FFFFFF"'; ?>>

                                    <td valign="top">&nbsp;</td>

                                    <td valign="top"><img src="../<?= CMS_GROUPS_DIR.$row['image']; ?>" width="40" height="30" /></td>

                                    <td valign="top"><?= $row['name'] ?></td>

                                    <td valign="top"><?=$row['username'];?></td>

                                    <td valign="top"><?=$row['password'];?></td>
                                    <td valign="top">
										<? $type=$users->getUserTypeById($row['user_type']); $typeGet=$conn->fetchArray($type); echo $typeGet['user_type'];?>
                                  	</td>
                                    <td valign="top">
										<?
                                        	$did=$row['district'];
											$dist=mysql_query("select district_name from district where id='$did'");
											$district_name=$conn->fetchArray($dist);
											echo $district_name['district_name'];
										?>
                                   	</td>

                                    <td valign="top">

                            		<?

									$changeTo = 'Yes';

									if ($row['publish'] == 'Yes')

										$changeTo = 'No';

									?>

                              		(<?=$row['publish'];?>)</td>

                            		<td valign="top"><?= $row['weight'] ?></td>

                            		<td valign="top"> [ <a href="users.php?type=edit&id=<?= $row['id']?>">Edit</a> | <a href="#" onClick="javascript: if(confirm('This will permanently remove this User from database. Continue?')){ document.location='users.php?type=del&id=<?php echo $row['id']; ?>'; }">Delete</a> ]</td>

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