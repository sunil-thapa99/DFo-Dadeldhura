<?php
include("init.php");
if(!isset($_SESSION['sessUserId']))//User authentication
{
 header("Location: login.php");
 exit();
}

$id = 0;
if(isset($_POST['id']))
	$id = $_POST['id'];
elseif(isset($_GET['id']))
	$id = $_GET['id'];

if(isset($_GET['parentId']))
	$parentId = $_GET['parentId'];
else
	$parentId = 0;

$weight = $groups -> getSubLastWeight(0, "PackageType");

if($_GET['type'] == "edit")
{
	$result = $groups->getById($id);
	$row = $conn->fetchArray($result);	
	$title = $row['name'];
	$urlname = $row['urlname'];
	$parentId = $row['parentId'];
	$weight = $row['weight'];
}
if($_POST['type'] == "Save")
{
	extract($_POST);

	if(empty($title))
		$errMsg = "Please enter Trip Type Name";
	elseif(empty($urlname))
		$errMsg = "Please enter Alias Name";
	if(!$groups -> isUnique($id, $urlname))
		$errMsg = "Alias Name already exists. Please provide another one";

	if(empty($errMsg)){
		$groups -> savePackageType($id, $title, $urlname, $parentId, $weight);
		if($id > 0)
			$msg = "Trip Type updated successfully";
		else
			$msg = "Trip Type saved successfully";
		header("Location: type.php?msg=$msg");
		exit();
	}
}
if($_GET['type']=="del")
{
	if($groups->isDeletable($id))
	{
		$groups -> delete($id);
		header("Location: type.php?msg=Trip Type deleted successfully");
		exit();
	}
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
          <td class="bgborder"><form action="<?= $_REQUEST['uri']?>" method="post">
              <table width="100%" border="0" cellspacing="1" cellpadding="0">
                <tr>
                  <td bgcolor="#fff"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td class="heading2">&nbsp;Manage Package Type / Category
                          <div style="float: right;"> <a href="type.php" class="headLink"> Add New </a> </div></td>
                      </tr>
                      <tr>
                        <td><table width="100%" border="0" cellpadding="2" cellspacing="0">
                            <?php if(!empty($errMsg)){ ?>
                            <tr align="left">
                              <td colspan="3" class="err_msg"><?php echo $errMsg; ?></td>
                            </tr>
                            <?php } ?>
                            <tr>
                              <td>&nbsp;</td>
                              <td align="right"><strong> Title : </strong></td>
                              <td><label for="title"></label>
                                <input type="text" name="title" id="title" value="<?= $title?>" class="text" onchange="copySame('urlname', this.value);" /></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td align="right"><strong>Alias Name :</strong></td>
                              <td><div style="float:left;"><input type="text" name="urlname" id="urlname" value="<?= $urlname?>" class="text" onchange="copySame('urlname', this.value);" onblur="checkUrlName('<?php echo $id; ?>', this.value, 'urlmsg');" /></div><div style="float:left;padding-left:10px; width:150px;" id="urlmsg"></div></td>
                            </tr>
                            
                            <tr>
                              <td></td>
                              <td align="right"><strong>Weight :</strong></td>
                              <td><input type="text" name="weight" value="<?php echo $weight; ?>" /></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td>
                              <input type="submit" name="type" id="button" value="Save" class="button"  />
                             	<?php if(isset($_GET['type']) && $_GET['type'] == "edit"){ ?>
                              	<input type="hidden" value="<?= $id?>" name="id" id="id" />
                                <input type="button" name="cancel" id="button3" value="Cancel" class="button" onclick="javascript: history.go(-1);" />
                              <?php } else { ?>
                                
                                <input type="reset" name="reset" id="button2" value="Clear" class="button" />
                              <?php } ?>
                              </td>
                            </tr>
                          </table></td>
                      </tr>
                    </table></td>
                </tr>
              </table>
            </form></td>
        </tr>
        <tr height="5">
          <td></td>
        </tr>
        <tr>
          <td class="bgborder"><table width="100%" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="heading2">&nbsp;Trip Type / Category List</td>
                    </tr>
                    <tr>
                      <td><table width="100%"  border="0" cellpadding="4" cellspacing="0">
                          <tr bgcolor="#F1F1F1" class="tahomabold11">
                            <td width="1">&nbsp;</td>
                            <td><strong>S.N</strong></td>
                            <td><strong>Trip Type</strong></td>
                            <td><strong>Weight</strong></td>
                            <td><strong>Action</strong></td>
                          </tr>
                          <?php
													$counter = 0;
													$pagename = "type.php?";
													$sql = "SELECT * FROM groups WHERE linkType = 'PackageType' AND parentId = '$parentId' ORDER BY weight";
													$limit = 20;
													include("../includes/paging.php");
													while($row = $conn -> fetchArray($result))
													{
													?>
                          <tr <?php if($counter%2 != 0) echo 'bgcolor="#F7F7F7"'; else echo 'bgcolor="#FFFFFF"'; ?>>
                            <td valign="top">&nbsp;</td>
                            <td valign="top"><?= ++$counter; ?></td>
                            <td valign="top"><?= $row['name'] ?></td>
                            <td valign="top"><?php echo $row['weight']; ?></td>
                            <td valign="top">
                            	
                              [<a href="type.php?type=edit&id=<?= $row['id']?>">Edit</a>]
                              <? if($groups -> isDeletable($row['id'])) { ?>
                              [<a href="#" onClick="javascript: if(confirm('This will permanently remove this Trip Type from database. Continue?')){ document.location='type.php?type=del&id=<?php echo $row['id']; ?>'; }">Delete</a>]
                              <? } ?>
                            </td>
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