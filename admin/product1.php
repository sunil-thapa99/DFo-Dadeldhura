<?php
include("init.php");
if(!isset($_SESSION['sessUserId']))//User authentication
{
 header("Location: login.php");
 exit();
}
$catId = 0;
if(!empty($_GET['catId']))
$catId = $_GET['catId'];

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

	?>
<option value="product.php?catId=<?= $catRow['id']?>" <? if($_GET['catId'] == $catRow['id']){?> selected<? }?>>
<?= $dash.$catRow['name'];?>
</option>
<? createDrpMenu($catRow['id'], $start+=1);?>
<?
$start -=1;
			}

		}

	function createDrpMenu2($catId, $startDash)
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
<option value="<?= $catRow['id']?>" <? if($_GET['catId'] == $catRow['id']){?> selected<? }?>>
<?= $dash.$catRow['name'];?>
</option>
<? createDrpMenu2($catRow['id'], $start+=1);?>
<?
$start -=1;
			}

		}

if(isset($_POST['save']) && $_POST['save'] == "Save")
{
	$name = $_POST['name'];
	$urlname = $_POST['urlname'];
	$shortcontents = $_POST['shortcontents'];
	$contents = $_POST['contents'];
	$weight = $_POST['weight'];
	$pageTitle = $_POST['pageTitle'];
	$pageKeyword = $_POST['pageKeyword'];
	$code = $_POST['code'];
	$price = $_POST['price'];
	$featured = $_POST['featured'];
	$sold = $_POST['sold'];
	$height = $_POST['height'];
	$width = $_POST['width'];
	$pcolor = $_POST['pcolor'];
	$scolor = $_POST['scolor'];
	
	
	$productId = $groups->saveProduct('', $name, $urlname, $_GET['catId'], $shortcontents, $contents, $weight, $pageTitle, $pageKeyword, $code, $price, $featured, $sold, $height, $width, $pcolor, $scolor);
	
	$groups->saveImage($productId);
	
	$msg = "Product Successfully Added.";
	?>
	<script>
  	location.href="product.php?catId=<?= $_GET['catId'];?>&msg=<?= $msg?>";
  </script>
<?
}

if(isset($_POST['edit']) && $_POST['edit'] == "Edit")
{
	$name = $_POST['name'];
	$urlname = $_POST['urlname'];
	$shortcontents = $_POST['shortcontents'];
	$contents = $_POST['contents'];
	$weight = $_POST['weight'];
	$pageTitle = $_POST['pageTitle'];
	$pageKeyword = $_POST['pageKeyword'];
	$code = $_POST['code'];
	$price = $_POST['price'];
	$featured = $_POST['featured'];
	$sold = $_POST['sold'];
	$height = $_POST['height'];
	$width = $_POST['width'];
	$pcolor = $_POST['pcolor'];
	$scolor = $_POST['scolor'];
	
	$groups->saveProduct($_GET['eid'], $name, $urlname, $_GET['catId'], $shortcontents, $contents, $weight, $pageTitle, $pageKeyword, $code, $price, $featured, $sold, $height, $width, $pcolor, $scolor);
	
	$groups->saveImage($_GET['eid']);
	
	$msg = "Product Successfully Edited.";
	?>
	<script>
  	location.href="product.php?action=edit&eid=<?= $_GET['eid']?>&catId=<?= $catId?>&msg=<?= $msg?>";
  </script>
<?
}

	if(isset($_GET['action']) && $_GET['action'] == "delete")
		{
				$groups->delete($_GET['did']);
				$msg = "Product Deleted Successfully";
				?>
        <script>
        	location.href="product.php?catId=<?= $_GET['catId']?>&msg=<?= $msg?>";
        </script>
        <?
		}

	if(isset($_GET['deleteImage']))
	 {
		$groups->deleteImage($_GET['id']);
		$msg = "Image Deleted Successfully";
	 ?>
	 <script>
		location.href="product.php?action=edit&catId=<?= $_GET['catId']?>&eid=<?= $_GET['eid']?>&msg=<?= $msg?>";
	 </script>
	<?
	 }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ADMIN_TITLE; ?></title>
<link href="../css/admin.css" rel="stylesheet" type="text/css">
<script language="javascript" src="../js/cms.js"></script>
<script language="javascript">
function frmvalidate(fm){
		if(fm.name.value == ""){
			alert("Please type product name.");
			fm.name.focus();
			return false;
		}	
		if(fm.code.value == ""){
			alert("Please type product code.");
			fm.code.focus();
			return false;
		}	
	}
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>
<body>
<table width="<?php echo ADMIN_PAGE_WIDTH; ?>" border="0" align="center" cellpadding="0"
	cellspacing="5" bgcolor="#FFFFFF">
  <tr>
    <td colspan="2">
      <?php include("header.php"); ?>
    </td>
  </tr>
  <tr>
    <td width="<?php echo ADMIN_LEFT_WIDTH; ?>" valign="top">
      <?php include("leftnav.php"); ?>
    </td>
    <td width="<?php echo ADMIN_BODY_WIDTH; ?>" valign="top">
      <table width="100%" cellpadding="0" cellspacing="2" border="1" bordercolor="#ff9966">       
        <tr>
          <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr valign="top">
                <th colspan="2" class="heading2">Manage Products
                <a href="product.php" style="float:right; padding-right:10px; text-decoration:none; color:#cc0000;">Add New</a>
                </th>
              </tr>
              <?
					if($_GET['action'] != "edit")
					{
				?> <form action="<?= $_REQUEST['uri'];?>" method="post" enctype="multipart/form-data" onsubmit="return frmvalidate(this)">
                <tr valign="top">
                  <th colspan="2">Add Products</th>
                </tr>
                <tr>
                  <th class="tahomabold11">Category</th>
                  <td valign="top">
                    <select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
                      <option value="product.php">--Choose Category--</option>
                      <?
										 createDrpMenu(0, 0);
										 ?>
                    </select>
                  </td>
                </tr>
                <? if(isset($_GET['catId'])){?>
                <tr>
                  <th class="tahomabold11">Product Code</th>
                  <td valign="top">
                    <input type="text" name="code" id="code">
                  </td>
                </tr>
                <tr>
                  <th class="tahomabold11">Product Name</th>
                  <td valign="top">
                    <input type="text" name="name" id="name" onchange="copySame('urlname', this.value);" value="<?=$name;?>">
                  </td>
                </tr>
                <tr>
                  <th class="tahomabold11">Alias Name</th>
                  <td>
                    <input type="text" name="urlname" id="urlname" value="<?=$urlname;?>">
                  </td>
                </tr>
                <tr>
                  <th class="tahomabold11">Price</th>
                  <td valign="top">
                    <input type="text" name="price" id="price">
                  </td>
                </tr>
                <tr>
                  <th class="tahomabold11">Height</th>
                  <td valign="top">
                  	<input type="text" name="height" id="height">
                  cm</td>
                </tr>
                <tr>
                  <th class="tahomabold11">Width</th>
                  <td valign="top">
                  	<input type="text" name="width" id="width">
                  cm</td>
                </tr>
                <tr>
                  <th class="tahomabold11">Primary Color</th>
                  <td valign="top">
                  	<select name="pcolor" id="pcolor">
                  	<?
										$colorArray = array("Black", "White", "Green", "Grey", "Sky Blue", "Blue", "Violet", "Pink", "Brown", "Orange",  "Red",  "Yellow");
										for($i = 0; $i < count($colorArray); $i++)
										{
										?>
										<option value="<?= $i?>"><?= $colorArray[$i];?></option>
										<?
										}
										?>   
                    </select>
                	</td>
                </tr>
                <tr>
                  <th class="tahomabold11">Secondary Color</th>
                  <td valign="top">
                  	<select name="scolor" id="scolor">
                  	<option value="">No Color</option>
                    <?
										$colorArray = array("Black", "White", "Green", "Grey", "Sky Blue", "Blue", "Violet", "Pink", "Brown", "Orange",  "Red",  "Yellow");
										for($i = 0; $i < count($colorArray); $i++)
										{
										?>
										<option value="<?= $i?>"><?= $colorArray[$i];?></option>
										<?
										}
										?>   
                  	</select>
									</td>
                </tr>
                <tr>
                  <th class="tahomabold11">Featured?</th>
                  <td valign="top">
                    <input type="radio" id="radYes" name="featured" value="Yes"><label for="radYes">Yes</label>
                    <input type="radio" id="radNo" name="featured" value="No" checked><label for="radNo">No</label>
                    </td>

                </tr>
                <tr>
                  <th class="tahomabold11">Sold?</th>
                  <td valign="top">
                    <input type="radio" id="radSoldYes" name="sold" value="Yes"><label for="radSoldYes">Yes</label>
                    <input type="radio" id="radSoldNo" name="sold" value="No" checked><label for="radSoldNo">No</label>
                    </td>

                </tr>
              	<tr>
                  <th class="tahomabold11">Short Desc</th>
                  <td valign="top">
                    <textarea name="shortcontents" style="width:500px; height:70px;"></textarea>
                  </td>
                </tr>
                <tr>
                  <th class="tahomabold11">Description</th>
                  <td valign="top">
                    <?
										include ("../fckeditor/fckeditor.php");
										$sBasePath="../fckeditor/";
																	
										$oFCKeditor = new FCKeditor('contents');
										$oFCKeditor->BasePath	= $sBasePath ;
										$oFCKeditor->Height		= "300";
										$oFCKeditor->ToolbarSet		= "Rupens";
										$oFCKeditor->Create();
										?>
                  </td>
                </tr>
                <tr>
                  <th class="tahomabold11">Image</th>
                  <td valign="top"><input type="file" name="image">
                  </td>
                </tr>
                <tr>
                	<th valign="top"></th>
                  <td valign="top">
                  	<? include("productimages.php");?>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                  <table width="100%" border="0" cellspacing="0" cellpadding="1">
                    <tr>
                      <td colspan="2"><strong>Meta Informations</strong></td>
                    </tr>
                    <tr>
                      <td width="90">Page Title : </td>
                      <td><input type="text" name="pageTitle" value=""></td>
                    </tr>
                    <tr>
                      <td>Page Keyword : </td>
                      <td><input type="text" name="pageKeyword" value=""></td>
                    </tr>
                  </table>
                  </td>
                </tr>
                <tr>
                  <th class="tahomabold11">&nbsp;</th>
                  <td valign="top">
                    <input type="submit" value="Save" name="save" id="save">
                  </td>
                </tr>
                <? }?>
              </form>
              <?
							}?>
              <?
					if(isset($_GET['action']) && $_GET['action'] == "edit")
					{
						$editResult = $groups->getById($_GET['eid']);
						if($row = $conn->fetchArray($editResult))
						{
				?> <form action="<?= $_REQUEST['uri'];?>" method="post" enctype="multipart/form-data" onsubmit="return frmvalidate(this)">
                <tr valign="top">
                  <th colspan="2">Edit Products</th>
                </tr>
                <tr>
                  <th class="tahomabold11">Category</th>
                  <td valign="top">
                    <select name="catId">
                      <?
										 createDrpMenu2(0, 0);
										 ?>
                    </select>
                  </td>
                </tr>
                <? if(isset($_GET['catId'])){?>
                <tr>
                  <th class="tahomabold11">Product Code</th>
                  <td valign="top">
                    <input type="text" name="code" id="code" value="<?= $row['code']?>">
                  </td>
                </tr>
                <tr>
                  <th class="tahomabold11">Product Name</th>
                  <td valign="top">
                    <input type="text" name="name" id="name" value="<?= $row['name']?>" onchange="copySame('urlname', this.value);">
                  </td>
                </tr>
                <tr>
                  <th class="tahomabold11">Alias Name</th>
                  <td>
                    <input type="text" name="urlname" id="urlname" value="<?=$row['urlname'];?>">
                  </td>
                </tr>
                <tr>
                  <th class="tahomabold11">Price</th>
                  <td valign="top">
                    <input type="text" name="price" id="price" value="<?= $row['price']?>">
                  </td>
                </tr>
                <tr>
                  <th class="tahomabold11">Height</th>
                  <td valign="top">
                  	<input type="text" name="height" id="height"value="<?= $row['height']?>">
                  cm</td>
                </tr>
                <tr>
                  <th class="tahomabold11">Width</th>
                  <td valign="top">
                  	<input type="text" name="width" id="width"value="<?= $row['width']?>">
                  cm</td>
                </tr>
                <tr>
                  <th class="tahomabold11">Primary Color</th>
                  <td valign="top">
                  	<select name="pcolor" id="pcolor">
                  	<?
										$colorArray = array("Black", "White", "Green", "Grey", "Sky Blue", "Blue", "Violet", "Pink", "Brown", "Orange",  "Red",  "Yellow");
										for($i = 0; $i < count($colorArray); $i++)
										{
										?>
										<option value="<?= $i?>" <? if($i == $row['pcolor']) echo 'selected';?>><?= $colorArray[$i];?></option>
										<?
										}
										?>   
                    </select>
                	</td>
                </tr>
                <tr>
                  <th class="tahomabold11">Secondary Color</th>
                  <td valign="top">
                  	<select name="scolor" id="scolor">
                  	<option value="">No Color</option>
                    <?
										$colorArray = array("Black", "White", "Green", "Grey", "Sky Blue", "Blue", "Violet", "Pink", "Brown", "Orange",  "Red",  "Yellow");
										for($i = 0; $i < count($colorArray); $i++)
										{
										?>
										<option value="<?= $i?>" <? if($i == $row['scolor']) echo 'selected';?>><?= $colorArray[$i];?></option>
										<?
										}
										?>   
                  	</select>
									</td>
                </tr>
                <tr>
                  <th class="tahomabold11">Featured?</th>
                  <td valign="top">
                    <input type="radio" id="radYes" name="featured" value="Yes" <? if($row['featured']=='Yes') { echo"checked";} ?>><label for="radYes">Yes</label>
                    <input type="radio" id="radNo" name="featured" value="No" <? if($row['featured']=='No') { echo"checked";} ?>><label for="radNo">No</label>
                    </td>

                </tr>
                <tr>
                  <th class="tahomabold11">Sold?</th>
                  <td valign="top">
                    <input type="radio" id="radSoldYes" name="sold" value="Yes" <? if($row['sold']=='Yes') { echo"checked";} ?>><label for="radSoldYes">Yes</label>
                    <input type="radio" id="radSoldNo" name="sold" value="No" <? if($row['sold']=='No') { echo"checked";} ?>><label for="radSoldNo">No</label>
                    </td>

                </tr>
								<tr>
                  <th class="tahomabold11">Short Desc</th>
                  <td valign="top">
                    <textarea name="shortcontents" style="width:500px; height:70px;"><?=$row['shortcontents'];?></textarea>
                  </td>
                </tr>
                <tr>
                  <th class="tahomabold11">Description</th>
                  <td valign="top">
                    <?
										include ("../fckeditor/fckeditor.php");
										$sBasePath="../fckeditor/";
																	
										$oFCKeditor = new FCKeditor('contents');
										$oFCKeditor->BasePath	= $sBasePath ;
										$oFCKeditor->Value		= $row['contents'];
										$oFCKeditor->Height		= "300";
										$oFCKeditor->Create();
										?>
                  </td>
                </tr>
                <?php
								if(!empty($row['image']) && file_exists("../". CMS_GROUPS_DIR .$groupRow['image'])){ ?>
                <tr>
                  <th class="tahomabold11">Existing Image</th>
                  <td>
                  <img src="../data/imager.php?file=../<?= CMS_GROUPS_DIR . $row['image'];?>&mw=100&mh=100" border="0" />
                  [<a href="category.php?id=<?=$row['id'];?>&parentId=<?=$_GET['parentId'];?>&deleteImage">Delete</a>]</td>
                </tr>
                <?php } ?>
                <tr>
                  <th class="tahomabold11">Image</th>
                  <td><input type="file" name="image"></td>
                </tr>
                <tr>
                	<th class="tahomabold11" valign="top">Additional Images</th>
                  <td valign="top">
                  	<? include("productimages.php");?>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                  <table width="100%" border="0" cellspacing="0" cellpadding="1">
                    <tr>
                      <td colspan="2"><strong>Meta Informations</strong></td>
                    </tr>
                    <tr>
                      <td width="90">Page Title : </td>
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
                  <th height="18" valign="top">&nbsp;</th>
                  <td valign="top">
                    <input type="submit" value="Edit" name="edit" id="edit">
                  </td>
                </tr>
                <?
								}
								}?>
              </form>
              <?
							}?>
            </table>
          </td>
        </tr>
        <tr>
          <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th colspan="3" class="heading2">
                  <?
								if($catId == 0)
									echo "Main Categories";
								else
									{
									$selResult = $groups->getById($catId);
										$selRow = $conn->fetchArray($selResult);
										echo "Showing Sub-Categories of ".$selRow['name'];
												}
		?>
                </th>
              </tr>
              <tr bgcolor="#E7E7E7" class="tahomabold11">
                <th>Categotry Title</th>
                <th>No. of Products</th>
                <th>Action</th>
              </tr>
              <?
			$counter = 0;
			$catResult = $groups->getByParentIdAndLinkType($catId, "ProductCategory");
			while($catRow = $conn->fetchArray($catResult))
				{
					$counter++;
	?>
              <tr align="center" <?php if ($counter % 2 == 0) { echo "bgcolor='#F1F1F1'";} ?>>
                <td>
                  <?= $catRow['name'];?>
                </td>
                <td> 	<?
				$prodCountResult = $groups->getByParentIdAndLinkType($catRow['id'], "Product");
				$prodCount = $conn->numRows($prodCountResult);
				echo $prodCount;
			?></td>
                <td><a href="product.php?catId=<?= $catRow['id'];?>">Open</a></td>
              </tr>
              <?
		}
	?>
            </table>
          </td>
        </tr>
                <? if(isset($_GET[catId]) && !empty($_GET[catId]))
			{
				?><tr>
          <td>
    
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th colspan="5" class="heading2">
                  <?
					$selResult = $groups->getById($catId);
										$selRow = $conn->fetchArray($selResult);
										echo "Showing Products of ".$selRow['name'];
										echo "<a href=\"product.php?catId=".$selRow['parentId']."\" style=\"float:right; color:#cc0000; text-decoration:none; padding-right:10px;\">UP</a>";
		?>
                </th>
              </tr>
              <tr bgcolor="#E7E7E7" class="tahomabold11">
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Image</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
              <?
	 $counter = 0;
		$prodResult = $groups->getByParentIdAndLinkType($catId, "Product");
			while($row = $conn->fetchArray($prodResult))
				{
					$counter++;
	?>
              <tr align="center" <?php if ($counter % 2 == 0) { echo "bgcolor='#F1F1F1'";} ?>>
                <td>
                  <?= $row['name'];?>
                </td>
                <td>
                  <?= $row['code'];?>
                </td>
                <td>
                <? if(file_exists("../".CMS_GROUPS_DIR.$row['image'])) {?>
                <img src="../data/imager.php?file=<?= "../".CMS_GROUPS_DIR.$row['image'];?>&mw=100&mh=100" />
                <?
								}
								?>
                </td>
                <td><?= $row['price'];?></td>
                <td><a href="product.php?action=edit&eid=<?= $row['id']?>&catId=<?= $_GET['catId']?>">Edit</a> | <a href="product.php?catId=<?= $_GET['catId']?>&action=delete&did=<?= $row['id']?>">Delete</a></td>
              </tr>
              <?
		}
	?>
            </table>
        
          </td>
        </tr>    <?
			}?>
      </table>
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <?php include("footer.php"); ?>
    </td>
  </tr>
</table>
</body>
</html>
