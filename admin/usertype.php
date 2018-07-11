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
if(isset($_POST['regionId']))
	$regionId = $_POST['regionId'];
elseif(isset($_GET['regionId']))
	$regionId = $_GET['regionId'];
else
	$regionId = 0;

if(isset($_POST['categoryId']))
	$categoryId = $_POST['categoryId'];
elseif(isset($_GET['categoryId']))
	$categoryId = $_GET['categoryId'];
else
	$categoryId = 0;
	
$weight = $groups -> getUserLastWeight();

if($_GET['type'] == "edit")
{
	//echo "dfd"; 
	$idd=$_GET['id']; //echo $idd;
	$result = mysql_query("select * from usertype where id='$idd'");
	$editRow=mysql_fetch_array($result);
	$id=$editRow['id'];
	$user_type=$editRow['user_type']; $publish=$editRow['publish']; $weight=$editRow['weight'];
	//extract($editRow);
}
if($_POST['type'] == "Save")
{
	//$id=$_POST['id'];
	extract($_POST);
	//echo $id;
	$vall="";
	if(empty($user_type))
		$errMsg .= "<li>Please enter User Type Name</li>";

	if(empty($errMsg))
	{
		$pid = $groups -> saveUserType($id, $user_type, $publish, $weight);
		if($id > 0)
			$pid = $id;
		//$groups -> saveImage($pid);
		//$groups -> saveMap($pid);
		if($id>0)
			header("Location: usertype.php?type=edit&id=$id&msg=User Type details updated successfully");
		else
			header("Location: usertype.php?msg=User Type details saved successfully");
		exit();
	}		
}

if($_GET['type'] == "toogle")
{
	if($package->toggleStatus($_GET['id']) > 0)
		header("location: usertype.php?region=".$_GET['region']."&category=".$_GET['category']."&msg=Disease status toogled successfully.");
}

if($_GET['type'] == "toogleFeatured")
{
	$id = $_GET['id'];
	$changeTo = $_GET['changeTo'];
	$sql = "UPDATE groups SET featured='$changeTo' WHERE id='$id'";
	$conn->exec($sql);
	header("location: usertype.php?msg=Disease feature status toogled successfully.");
}

if($_GET['type'] == "tooglePublish")
{
	$id = $_GET['id'];
	$changeTo = $_GET['changeTo'];
	
	$sql = "UPDATE groups SET publish='$changeTo' WHERE id='$id'";
	$conn->exec($sql);
	header("location: usertype.php?&msg=Disease Show/Hide status toogled successfully.");
}
	
if($_GET['type'] == "removeImage")
{
	$groups->deleteImage($_GET['id']);
	//echo "hello";
	//header("location: usertype.php?type=edit&id=".$_GET['id']."&msg=product image deleted successfully.");?>
	<script> document.location='usertype.php?type=edit&id=<?=$_GET['id']?>&msg=disease image deleted successfully.' </script>
<? }

if($_GET['type'] == "removeMap")
{
	$groups->deleteMap($_GET['id']);
	//echo "hello";
	//header("location: usertype.php?type=edit&id=".$_GET['id']."&msg=product image deleted successfully.");?>
	<script> document.location='usertype.php?type=edit&id=<?=$_GET['id']?>&msg=disease map deleted successfully.' </script>
<? }

if($_GET['type']=="del")
{
		$delid=$_GET['id'];
		mysql_query("delete from usertype where id='$delid'"); //$groups -> delete($_GET['id']);
		//echo "hello";
		//header("Location : usertype.php?&msg=product deleted successfully.");?>
    	<script> document.location='usertype.php?&msg=User Type deleted successfully.' </script>    
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
                      <td class="heading2">&nbsp; Manage User Type
                        <div style="float: right;">
                          <?
														$addNewLink = "usertype.php";
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
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td class="tahomabold11"><strong> User Type : <span class="asterisk">*</span></strong></td>
                              <td><label for="title"></label>
                                <input name="user_type" type="text" class="text" id="title" value="<?=$user_type?>" /></td>
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
                              <td>&nbsp;</td>
                              <td class="tahomabold11"><strong> Weight : <span class="asterisk">*</span></strong></td>
                              <td><label for="title"></label>
                                <input name="weight" type="text" class="text" id="title" value="<?=$weight?>" /></td>
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
                            <tr><td>&nbsp;</td></tr>                       
                        </table>
                        </form></td>
                    </tr>
                  </table></td>
              </tr>
              <tr height="5"><td></td></tr>
        	<tr>
          <td class="bgborder"><table width="100%" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading2">&nbsp;User Type List</td>
                    </tr>
                    <tr>
                      <td><table width="100%"  border="0" cellpadding="4" cellspacing="0">
                          <tr bgcolor="#F1F1F1" class="tahomabold11">
                            <td width="1">&nbsp;</td>
                           	<td style="width:25px">SN</td>
                            <td style="width:100px"> User Type </td>
                            <td style="width:100px">Show</td>
                            <td style="width:100px">Weight</td>
                            <td style="width:150px"><strong>Action</strong></td>
                          </tr>
                          <?php
							$counter = 0;
							$pagename = "usertype.php?";
							$sql = "SELECT * FROM usertype";
							$sql .= " ORDER BY weight";
							//echo $sql;
							$limit = 75;
							include("paging.php"); $fuck=1;
							while($row = $conn -> fetchArray($result))
							{?>
                          		<tr <?php if($counter%2 != 0) echo 'bgcolor="#F7F7F7"'; else echo 'bgcolor="#FFFFFF"'; ?>>
                                    <td valign="top">&nbsp;</td>
                                    <td valign="top"><?= $fuck; $fuck++; ?></td>
                                 
                                    <td valign="top"><?=$row['user_type'];?></td>
                                 	<td valign="top"><?=$row['publish'];?></td>
                                    <td valign="top"><?=$row['weight'];?></td>
                            		<td valign="top"> [ <a href="usertype.php?type=edit&id=<?= $row['id']?>">Edit</a> | <a href="#" onClick="javascript: if(confirm('This will permanently remove this User Type from database. Continue?')){ document.location='usertype.php?type=del&id=<?php echo $row['id']; ?>'; }">Delete</a> ]</td>
                          </tr>
                          <?
													}
													?>
                        </table>
                      <?php //include("paging_show.php"); ?></td>
                    </tr>
                  </table></td>
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