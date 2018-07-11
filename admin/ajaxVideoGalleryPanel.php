<div align="right" style="cursor: pointer;" onclick="addVideo();">+ Add Video +</div>
<div id="uploadVideoHolder">
  <div style="">Link : <strong>[eg. http://www.youtube.com/watch?v=1425WRE54]</strong></div>
  <div style="float:left; padding-bottom:5px;">
    <textarea name="videoUrl[]" rows="4" cols="100"></textarea>
  </div>
  <hr style="clear: both;">
</div>
<?php
if (isset($_GET['id']))
{
?>
<div>Existing videos</div>
<div>
  <?php
	$pagename = "cms.php?id=" . $_GET['id'] . "&parentId=" . $_GET['parentId'] . "&groupType=" . urlencode($_GET['groupType']) . "&";		

	$sql = "SELECT * FROM groups WHERE parentId = '". $_GET['id'] . "' ORDER BY id DESC";
	$limit = ADMIN_VIDEO_GALLERY_LIMIT;
	include("../includes/paging.php");
	
	$videoResult = $result;
	
	//$videoResult = $videos->getByGroupId($_GET['id']);
	while ($videoRow = $conn->fetchArray($videoResult))
	{
	?>
  <div style="float: left; width: 335px; height: 180px; border: 1px solid; overflow:hidden;">
    <div align="right">
      <div style="cursor: pointer;" onclick="delete_confirmation('manage_cms.php?id=<?php echo $_GET['id']; ?>&parentId=<?php echo $_GET['parentId']; ?>&groupType=<?php echo $_GET['groupType']; ?>&videoId=<?php echo $videoRow['id']; ?>&deleteVideo');">[x]&nbsp;</div>
    </div>
    <div align="center" style="width: 100%; height: 115px;"> <img src="<?php echo getYouTubeImage($videoRow['contents'], "big"); ?>" width="140"> </div>
    <div align="center">
      <input type="hidden" name="oldVideoIds[]" value="<?php echo $videoRow['id'] ?>" />
      <textarea name="oldUrls[]" rows="3" cols="50"><?php echo $videoRow['contents'] ?></textarea> 
    </div>
  </div>
  <?php
	}
	include("../includes/paging_show.php");
	?>
</div>
<?php
}
?>