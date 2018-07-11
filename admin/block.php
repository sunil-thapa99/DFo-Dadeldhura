<?php
include("init.php");
if(!isset($_SESSION['sessUserId']))//User authentication
{
 header("Location: login.php");
 exit();
}

$weight = $groups -> getSubLastWeight(0, "Block");

$parentId = 0;
if(!empty($_GET['parentId']))
$parentId = $_GET['parentId'];

	if(isset($_POST['save']) && $_POST['save'] == "Save")
	{
		$msg = "";
		$name = $_POST['name'];
		$urlname = $_POST['urlname'];
		$weight = $_POST['weight'];
		//$parentId = $_POST['parentId'];
		$pageTitle = $_POST['pageTitle'];
		$pageKeyword = $_POST['pageKeyword'];
		
		if (empty($name))
			$msg = "Name cannot be empty.";
		else if (empty($urlname))
			$msg = "Alias name cannot be empty.";
		else if (!$groups->isUnique(0, $urlname))
			$msg = "Alias name is not unique.";
		
		if (empty($msg)) {
			$catId = $groups->saveBlock('', $name, $urlname, $weight, $pageTitle, $pageKeyword);
			//$groups->saveImage($catId);
			
			$msg="Block Added Successfully";
			
			header("Location: block.php?&msg=$msg");
			exit();
		}
		else {
			header("Location: block.php?msg=$msg");
			exit();
		}
	}
	if(isset($_POST['edit']) && $_POST['edit'] == "Edit")
	{
		$msg = "";
		$name = $_POST['name'];
		$urlname = $_POST['urlname'];
		$weight = $_POST['weight'];
		
		$pageTitle = $_POST['pageTitle'];
		$pageKeyword = $_POST['pageKeyword'];
		
		if (empty($name))
			$msg = "Name cannot be empty.";
		else if (empty($urlname))
			$msg = "Alias name cannot be empty.";
		else if (!$groups->isUnique($_GET['eid'], $urlname))
			$msg = "Alias name is not unique.";
		
		if (empty($msg)) {
			$groups->saveBlock($_GET['eid'], $name, $urlname, $weight, $pageTitle, $pageKeyword);
			
			$msg="Block Updated Successfully";
			
			header("Location: block.php?action=edit&eid=".$_GET['eid']."&msg=$msg");
			exit();
		}
		else {
			header("Location: block.php?action=edit&eid=".$_GET['eid']."&msg=$msg");
			exit();
		}
	}

function delete($did)
{
	$sql="DELETE from groups where id='$did'";
	mysql_query($sql);
	
}

if($_GET['action'] == "delete")
{
	delete($_GET['did']);
	$msg = "Block Deleted Successfully";
	header ("Location: block.php?&msg=$msg");
	exit();
}
if (isset($_GET['deleteImage'])) {
	$groups->deleteImage($_GET['id']);
	
	$msg = "Image Deleted Successfully";
	header ("Location: block.php?action=edit&parentId=".$_GET['parentId']."&eid=".$_GET['id']."&msg=$msg");
}
?>
<?
function createDrpMenu($catId, $startDash)
{
	global $_GET;
	global $groups;
	global $conn;
	
	$start = $startDash;
	$dash = "";
	for($i = 1; $i <= $start; $i++)
	{
		$dash .= "---";
	}
	$catResult = $groups->getByParentIdAndLinkType($catId, "ProductCategory");
	while($catRow = $conn->fetchArray($catResult))
	{
	
		if($catRow['id'] != $_GET['eid'])
		{
?>
<option value="<?= $catRow['id']?>" <? if($_GET['parentId'] == $catRow['id']){?> selected<? }?>>
<?= $dash.$catRow['name'];?>
</option>
<? createDrpMenu($catRow['id'], $start+=1);?>
<?
$start -=1;
		}
	}

}
?>
<?									
function createDrpMenu1($catId, $startDash)
{
	global $_GET;
	global $groups;
	global $conn;
	
	$start = $startDash;
	$dash = "";
	for($i = 1; $i <= $start; $i++)
		{
			$dash .= "---";
		}
	$catResult = $groups->getByParentIdAndLinkType($catId, "ProductCategory");
	while($catRow = $conn->fetchArray($catResult))
	{
	?>
    <option value="block.php?parentId=<?= $catRow['id']?>" <? if($_GET['parentId'] == $catRow['id']){?> selected<? }?>>
    <?= $dash.$catRow['name'];?>
    </option>
    <? createDrpMenu1($catRow['id'], $start+=1);?>
    <?
    $start -=1;
	}

}
?>
                  
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ADMIN_TITLE; ?></title>
<link href="../css/admin.css" rel="stylesheet" type="text/css">
<script language="javascript" src="../js/cms.js"></script>
<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<script language="javascript">
	function frmvalidate(fm){
		if(fm.name.value == ""){
			alert("Please type Block name.");
			fm.name.focus();
			return false;
		}	
		
		if (fm.urlname.value == "") {
			alert("Alias name cannot be blank.");
			fm.urlname.focus();
			return false;
		}
	}
</script>
</head>
<body>
<table width="<?php echo ADMIN_PAGE_WIDTH; ?>" border="0" align="center" cellpadding="0"
	cellspacing="5" bgcolor="#FFFFFF">
  <tr>
    <td colspan="2"><?php include("header.php"); ?></td>
  </tr>
  <tr>
    <td width="<?php echo ADMIN_LEFT_WIDTH; ?>" valign="top"><?php include("leftnav.php"); ?></td>
    <td width="<?php echo ADMIN_BODY_WIDTH; ?>" valign="top">
<table width="100%" border="1px" cellspacing="2" cellpadding="0"  bordercolor="#ff9966">
    <?
	if(!isset($_GET['action']))
	{
?>  
<tr>
    <td>
<form action="<?= $_REQUEST['uri'];?>" method="post" onsubmit="return frmvalidate(this)" enctype="multipart/form-data">
        <table width="100%" border="0" cellspacing="2" cellpadding="0">
          <tr>
            <th colspan="2" class="heading2">Manage Block
            <a href="block.php" style="float:right; padding-right:10px; text-decoration:none; color:#cc0000;">Add New</a></th>
          </tr>
          <tr>
            <th colspan="1">Add Block</th>
          </tr>
          
          <?php /*?><tr>
            <th class="tahomabold11" width="100px">Parent Category</th>
            <td>
              <select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
                <option value="">--None--	</option>
               <? createDrpMenu1($catId, $startDash);?>
              </select>
            </td>
          </tr><?php */?>
          
              <tr>
            <th class="tahomabold11">Block Name <span class="asterisk">*</span></th>
            <td>
              <input type="text" name="name" id="name" onchange="copySame('urlname', this.value);" value="<?=$name;?>" style="width:200px">
            </td>
          </tr>
          <tr><td></td></tr>
          <tr>
            <th class="tahomabold11">Alias Name <span class="asterisk">*</span></th>
            <td>
              <input type="text" name="urlname" id="urlname" value="<?=$urlname;?>" style="width:200px">
            </td>
          </tr>
          <tr><td></td></tr>
          <tr>
            <th class="tahomabold11">Weight</th>
            <td>
              <input type="text" name="weight" value="<?=$weight?>">
            </td>
          </tr>
          
          <tr>
            <td colspan="2">
            <table width="100%" border="0" cellspacing="0" cellpadding="1">
              <tr>
                <td colspan="2"><strong>Meta Informations</strong></td>
              </tr>
              <tr><td></td></tr>
              <tr>
                <td width="250">Page Title : </td>
                <td><input type="text" name="pageTitle" value="" style="width:200px"></td>
              </tr>
              <tr><td></td></tr>
              <tr>
                <td>Page Keyword : </td>
                <td><input type="text" name="pageKeyword" value="" style="width:200px"></td>
              </tr>
            </table>
						</td>
          </tr>
          <tr><td></td></tr>
          <tr>
            <th>&nbsp;</th>
            <td><input type="submit" value="Save" name="save" id="save">&nbsp;</td>
          </tr>
        </table>
      </form></td></tr>   <?
	}?>
   <?
	if(isset($_GET['action']) && $_GET['action'] == "edit")
	{
?>
              <tr>
                <td>
                <form action="<?= $_REQUEST['uri'];?>" method="post" onsubmit="return frmvalidate(this)" enctype="multipart/form-data">                     
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <th colspan="2" class="heading2">Manage Block <a href="block.php" style="float:right; padding-right:10px; text-decoration:none; color:#cc0000;">Add New</a></th>
                </tr>
                <tr>
                  <th colspan="1">Edit Block</th>
                </tr>
                <?
									$result = $groups->getById($_GET['eid']);
									$row = $conn->fetchArray($result);
								?>
                
				<?php /*?><tr>
                  <th class="tahomabold11" width="100px">Parent Category</th>
                  <td>
                     <select name="parentId">
                      <option value="0" <? if($_GET['parentId'] == 0){?>selected="selected"<? }?>>--None--</option>
                     <?
										 createDrpMenu(0, 0);
										 ?>
                    </select>
                  </td>
                </tr><?php */?>
                
                <tr>
                  <th class="tahomabold11">Block Name</th>
                  <td>
                  <input type="text" name="name" id="name" value="<?= $row['name'];?>" onchange="copySame('urlname', this.value);">
                  </td>
                </tr>
                <tr>
                  <th class="tahomabold11">Alias Name</th>
                  <td>
                    <input type="text" name="urlname" id="urlname" value="<?=$row['urlname'];?>">
                  </td>
                </tr>
                <tr>
                  <th class="tahomabold11">Weight</th>
                  <td>
                    <input type="text" name="weight" value="<?=$row['weight'];?>">
                  </td>
                </tr>
                
                <tr>
                  <td colspan="2">
                  <table width="100%" border="0" cellspacing="0" cellpadding="1">
                    <tr>
                      <td colspan="2"><strong>Meta Informations</strong></td>
                    </tr>
                    <tr>
                      <td width="250">Page Title : </td>
                      <td><input type="text" name="pageTitle" value="<?php echo $row['pageTitle']; ?>"></td>
                    </tr>
                    <tr>
                      <td>Page Keyword : </td>
                      <td><input type="text" name="pageKeyword" value="<?php echo $row['pageKeyword']; ?>"></td>
                    </tr>
                  </table>
                  </td>
                </tr>
                <tr>
                  <th>&nbsp;</th>
                  <td>
                    <input name="edit" type="submit" id="edit" value="Edit">
                    &nbsp;</td>
                </tr>
              </table>
          </form></td></tr> <?
	}?>

  <tr>
    <td> <table width="100%" border="0" cellspacing="2" cellpadding="5">
  <tr>
    <th colspan="4" class="heading2">
    <?
			if($parentId == 0)
				echo "Blocks";
			else
				{
					$selResult = $groups->getById($parentId);
					$selRow = $conn->fetchArray($selResult);
					echo "Showing Sub-Categories of ".$selRow['name'];
					echo "<a href=\"block.php?parentId=".$selRow['parentId']."\" style=\"float:right; color:#cc0000; text-decoration:none; padding-right:10px;\">UP</a>";
				}
		?>
    </th>
    </tr>
  <tr bgcolor="#E7E7E7" class="tahomabold11">
    <th>Block Name</th>
    <th>Weight</th>
    <th>Action</th>
  </tr>
   <?
	 $counter = 0;
		$catResult = $groups->getByParentIdAndLinkType($parentId, "Block");
			while($catRow = $conn->fetchArray($catResult))
				{
					$counter++;
	?>
  <tr align="left" <?php if ($counter % 2 == 0) { echo "bgcolor='#F1F1F1'";} ?>>
    <td><?= $catRow['name'];?></td>
    <td><?=$catRow['weight'];?></td>
    <td>
    	
			<? 	$categoryResult = $groups->getByParentId($catRow['id']);
				$count1 = $conn->numRows($categoryResult);
				$prodResult = $groups->getByParentId($catRow['id']); 
				$count = $conn->numRows($prodResult); 
				if($count < 1 && $count1 < 1) {?>
                	<a href="#" onClick="javascript: if(confirm('This will permanently remove this block from database. Continue?')){ document.location='block.php?action=delete&did=<?= $catRow['id']?>&parentId=<?= $parentId?>'; }">Delete</a>
                     |<? }?> <a href="block.php?action=edit&eid=<?= $catRow['id'];?>">Edit</a></td>
  </tr>
	<?
		}
	?>
</table></td>
  </tr>
</table>
     
     

    </td>
  </tr>
  <tr>
    <td colspan="2"><?php include("footer.php"); ?></td>
  </tr>
</table>
</body>
</html>
