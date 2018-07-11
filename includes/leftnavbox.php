<?
if (isset($pageId)) {


if ($pageLinkType == "Normal Group") {
	$result = $groups->getByParentId($pageId);
	$viewAllUrl = $pageUrlName;
}
else if ($pageLinkType == "Normal Group") {
	$result = $groups->getByParentId($pageId);
	$viewAllUrl = $pageUrlName;
}
else if ($pageLinkType == "Contents Page") {
	if ($pageParentId != 0)
		$result = $groups->getByParentId($pageParentId);
}
else if ($pageLinkType == "Gallery") {
	$result = $groups->getByParentId($pageParentId);
}
else if ($pageLinkType == "GallerySub") {
	// fetch gallery
	$result = $groups->getById($pageParentId);
	$row = $conn->fetchArray($result);
	
	// fetch parent of gallery
	$result = $groups->getById($row['parentId']);
	$row = $conn->fetchArray($result);
	
	$blockId = $row['id'];
	$viewAllUrl = $row['urlname'];
	$result = $groups->getByParentId($blockId);
}
else if ($pageLinkType == "List") {
	$result = $groups->getByParentId($pageParentId);
}
else if ($pageLinkType == "ListSub") {
	$result = $groups->getById($pageParentId);
	$row = $conn->fetchArray($result);
	
	// fetch parent of gallery
	$result = $groups->getById($row['parentId']);
	$row = $conn->fetchArray($result);
	
	$blockId = $row['id'];
	$viewAllUrl = $row['urlname'];
	$result = $groups->getByParentId($blockId);
}
else if ($pageLinkType == "Package") {
	$regionId = $pageRow['regionId'];
	
	$sql = "SELECT * FROM groups where linkType='Package' AND regionId='$regionId'";
	$result = $conn->exec($sql);
	$viewAllUrl = $row['urlname'];
}
else if ($pageLinkType = "PackageRegion") {
	$sql = "SELECT * FROM groups where linkType='PackageRegion' ORDER BY weight";
	$result = $conn->exec($sql);
}
?>
<div class="leftNavHdr">
	<?=$row['name'];?></span>
</div>
<div class="leftNavContent">
	<ul>
		<?
		while ($row = $conn->fetchArray($result)) {
		?>
		<li><a href="<?=$row['urlname'];?>"><?=$row['name'];?></a></li>
		<?
		}
		?>
	</ul>
</div>
<div class="leftNavBtm">
<?
if (strlen($viewAllUrl) > 0) {
?>
	<a href="<?=$viewAllUrl;?>">[+] View All</a>
<?
}
?>
</div>
<?
}
?>