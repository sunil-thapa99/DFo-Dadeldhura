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
	$id = '';

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
	
if(isset($_POST['packageId']))
	$packageId = $_POST['packageId'];
elseif(isset($_GET['packageId']))
	$packageId = $_GET['packageId'];
else
	$packageId = 0;
	
$weight = $groups -> getLastWeight("PackageCMS", 0);

if($_GET['type'] == "edit")
{
	$result = $groups->getById($_GET['id']);
	$editRow = $conn->fetchArray($result);	
	extract($editRow);
}

if($_POST['mode'] == "Save")
{
	extract($_POST);

	if(empty($title))
		$errMsg .= "<li>Please enter Title</li>";
	if(empty($urlname))
		$errMsg .= "<li>Please enter Alias Name</li>"	;
	elseif(!$groups -> isUnique($id, $urlname))
		$errMsg .= "<li>Alias Name already exists.</li>";
		
	if(empty($errMsg))
	{
		$pid = $groups -> savePackageCMS($id, $packageId, $title, $urlname, $contenttype, $contents, $weight, $regionId, $categoryId);
		
		header("Location: packagecms.php?regionId=".$regionId."&categoryId=".$categoryId."&packageId=".$packageId."&msg=Package details saved successfully");
		exit();
	}		
}
	
if($_GET['type']=="del")
{
		$groups->delete($_GET['id']);
		header("Location : packagecms.php?regionId=".$_GET['region']."&regionId=".$_GET['category']."&packageId=".$packageId."&msg=Package deleted successfully.");
}
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
                      <td class="heading2">&nbsp; Manage Package
                        <div style="float: right;">
                          <?
														$addNewLink = "packagecms.php";
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
                              <td><strong>Region : *</strong></td>
                              <td><select name="regionId" class="list1" onchange="this.form.submit();">
                                  <option value="" selected="selected">--Select Region--</option>
                                  <?php
																	$result = $groups -> getByParentIdAndLinkType(0, "PackageRegion");
																	while($row = $conn->fetchArray($result))
																	{
																	?>
                                  <option value="<?= $row['id']?>" <? if($regionId == $row['id']) echo 'selected="selected"'; ?>>
                                  <?= $row['name']?>
                                  </option>
                                  <?
																	}
																	?>
                              </select></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><strong> Category : *</strong></td>
                              <td><select name="categoryId" class="list1" onchange="this.form.submit();">
                                  <option value="" selected="selected">--Select Category--</option>
                                  <? $groups->comboRecursionTravel("PackageType", $categoryId, 0)?>
                                </select></td>
                            </tr>                           
                            <tr>
                              <td>&nbsp;</td>
                              <td><strong> Package : *</strong></td>
                              <td>
                              <select name="packageId" class="list1" onchange="this.form.submit();">
                                  <option value="" selected="selected">--Select Package--</option>
                                  <?php
																	$sql = "SELECT * FROM groups WHERE linkType='Package' AND regionId='$regionId' AND categoryId='$categoryId'";
																	$result = $conn->exec($sql);
																	while($row = $conn->fetchArray($result))
																	{
																	?>
                                  <option value="<?= $row['id']?>" <? if($packageId == $row['id']) echo 'selected="selected"'; ?>>
                                  <?= $row['name']?>
                                  </option>
                                  <?
																	}
																	?>
                              </select>
                              </td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><strong>Title : *</strong></td>
                              <td>
                                <input name="title" type="text" class="text" id="title" value="<?=$name;?>" onchange="copySame('urlname', this.value);" /></td>
                            </tr>                      
                            <tr>
                              <td>&nbsp;</td>
                              <td><strong> Alias Name : *</strong></td>
                              <td>
                              	<div style="float:left"><label for="urlname"></label>
                                <input name="urlname" type="text" class="text" id="urlname" value="<?= $urlname; ?>" onchange="copySame('urlname', this.value);" onblur="checkUrlName('<?=$id; ?>', this.value, 'urlmsg');" /></div>
                                <div style="padding-left:10px; float:left; width:150px;" id="urlmsg">&nbsp;</div></td>
                            </tr>
                            <tr>
    	                      <td></td>
    	                      <td><strong>Content Type :</strong></td>
    	                      <td>
														<? if($shortcontents)
                            {
                            echo '<input type="hidden" name="contenttype" value="'.$shortcontents.'" />';									echo $shortcontents;
                            }
                            else
                            {
                            ?>
                            <select name="contenttype" class="list1" onchange="changePackageContentType(this);">
                            <option value="">--Select Content Type--</option>
                            <option value="Content">Content</option>
                            <option value="Gallery">Gallery</option>
                            </select>
                            <?
                            }
                            ?>
                            </td>
  	                      </tr>
                          <tr>
                          	<td colspan="3">
                          <?
													if (!isset($_GET['id'])) {
													?>
                            <div id="packageContentDiv" style="display:none;">
                            	<?
															include("ajaxPackageContentPanel.php");										
															?>	
															</div>
															<div id="packageGalleryDiv" style="display:none;">
															<?
															include("ajaxPackageGalleryPanel.php");
															?>
                            	</div>
                            <?
														}
														else 
														{
														if ($shortcontents == 'Content') {
															include("ajaxPackageContentPanel.php");
														}
														else {
															include("ajaxPackageGalleryPanel.php");
														}
														}
														?>
                            </td>
                          	</tr>
                            <tr>
                              <td></td>
                              <td><strong>Weight :</strong></td>
                              <td><input name="weight" type="text" class="text" id="weight" value="<?php echo $weight; ?>" style="width:25px;" /></td>
                            </tr>
                            <?
														if(file_exists("../".CMS_GROUPS_DIR.$editRow['image']) && $_GET['type'] == 'edit')
														{
														?>
                            <?
														}
														?>
                            <tr>
                              <td></td>
                              <td></td>
                              <td>
                              <input type="hidden" name="mode" value="" />
                              	<input name="type" type="button" class="button" id="button" value="Save" onclick="this.form.mode.value='Save'; this.form.submit();" />
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
                      <td class="heading2">&nbsp;Package  Lists</td>
                    </tr>
                    <tr>
                      <td><table width="100%"  border="0" cellpadding="4" cellspacing="0">
                          <tr bgcolor="#F1F1F1" class="tahomabold11">
                            <td width="1">&nbsp;</td>
                            <td><strong>SN</strong></td>
                            <td> Title</td>
                            <td>Weight</td>
                            <td><strong>Action</strong></td>
                          </tr>
                          <?php
													$counter = 0;
													$pagename = "packagecms.php?categoryId=".$category;
													$sql = "SELECT * FROM groups WHERE linkType = 'PackageCMS'";
													if($regionId > 0)
														$sql .= " AND regionId = '$regionId'";
													if($categoryId > 0)
														$sql .= " AND categoryId = '$categoryId'";
													if ($packageId > 0)
														$sql .= " AND parentId='$packageId'";
													$sql .= " ORDER BY weight";
													echo $sql;
													$limit = 20;
													include("paging.php");
													while($row = $conn -> fetchArray($result))
													{
													?>
                          <tr <?php if($counter%2 != 0) echo 'bgcolor="#F7F7F7"'; else echo 'bgcolor="#FFFFFF"'; ?>>
                            <td valign="top">&nbsp;</td>
                            <td valign="top"><?= ++$counter; ?></td>
                            <td valign="top"><?= $row['name'] ?></td>
                            <td valign="top"><?= $row['weight'] ?></td>
                            <td valign="top"> [ <a href="packagecms.php?regionId=<?= $row['regionId']?>&categoryId=<?= $row['categoryId']?>&packageId=<?=$row['parentId'];?>&type=edit&id=<?= $row['id']?>">Edit</a> | <a href="#" onClick="javascript: if(confirm('This will permanently remove this package type from database. Continue?')){ document.location='packagecms.php?regionId=<?=$row['regionId']?>&categoryId=<?=$row['categoryId']?>&type=del&id=<?php echo $row['id']; ?>'; }">Delete</a> | <a href="packagecms.php?region=<?= $_GET['region']?>&category=<?= $_GET['category']?>&package=<?= $row['id']?>">Package CMS</a> ] </td>
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