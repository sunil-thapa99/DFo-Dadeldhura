<?php include("includes/breadcrumb.php"); ?>
<?php
$pageResult = $groups->getById($pageParentId);
$pageRow = $conn->fetchArray($pageResult);
$pageTitle = $pageRow['name'];
/*$pageResult = $groups->getById($galleryRow['groupId']);
$pageRow = $conn->fetchArray($pageResult);*/


/*$linkId = $galleryRow['groupId'];*/
?>

<div class="cmsSingleGalleryWrapper">
<div class="cmsTitle"><?= $pageTitle ?></div>
	<?
		$navNextResult = $groups->getNextResult($pageId);
		$navNextRow = $conn->fetchArray($navNextResult);
		
		$navPreviousResult = $groups->getPreviousResult($pageId);
		$navPreviousRow = $conn->fetchArray($navPreviousResult);
  	?>
  <div style="float:left;"><a href="<?= $navPreviousRow['urlname']; ?>" class="pagingPrevious">&laquo; Previous</a> </div>
  <div style="float:right;"><a href="<?= $navNextRow['urlname']; ?>" class="pagingNext">Next &raquo;</a> </div>
  <div style="clear:both; margin-bottom:10px;"></div>
  <div align="center"><img src="<?php echo imager($pageImage, 500, 500, ""); ?>" border="0" /><br />
  <div class="cmsGalleryCaption"><?php echo $pageShortContents; ?></div>
  </div>
</div>
