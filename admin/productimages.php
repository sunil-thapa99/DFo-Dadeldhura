<div align="right" style="cursor: pointer;" onclick="addImage();">+ Add Image +</div>
<div id="uploadImageHolder">
  <div style="width:100px; float: left;">Image : </div>
  <div style="float:left;">
    <input type="file" name="pimage[]" class="file" />
  </div>
  <br style="clear: both;">
  <div style="width:100px; float: left;">Caption : </div>
  <div style="float:left;">
    <input type="text" name="pcaption[]" class="text" />
  </div>
  <hr style="clear: both;">
</div>
<?php
if (isset($_GET['eid']))
{
?>
<div>Existing Images</div>
<div>
  <?php
	$imagesResult = $groups->getByParentIdAndLinkType($_GET['eid'], "ProductImage");
	while ($imageRow = $conn->fetchArray($imagesResult))
	{
	?>
  <div style="float: left; width: 168px; height: 168px; border: 1px solid; overflow:hidden;">
    <div align="right">
      <div style="cursor: pointer;" onclick="delete_confirmation('product.php?action=edit&id=<?=$_GET['eid']; ?>&catId=<?=$_GET['catId']; ?>&imageId=<?=$imageRow['id'];?>&deleteImage');">[x]&nbsp;</div>
    </div>
    <div align="center" style="width: 100%; height: 130px;"> <img src="../data/imager.php?file=../<?php echo CMS_GROUPS_DIR . $imageRow['image']; ?>&mw=120&mh=120&fix"> </div>
    <div align="center">
      <input type="hidden" name="oldCaptionIds[]" value="<?php echo $imageRow['id'] ?>" />
      <input type="text" name="oldCaptions[]" value="<?php echo $imageRow['shortcontents'] ?>" class="text" style="width:155px;" />
    </div>
  </div>
  <?php
	}
	?>
</div>
<?php
}
?>
